<?php

class UserLoginModelController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/signuplayout';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view', 'create', 'update'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
            // 'actions' => array('update'),
            //'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView() {
        $id = Yii::app()->user->getState("userId");
        $modelFamily = FamilyRegistration::model()->findByAttributes(array('USER_ID' => $id));
        $Criteria = new CDbCriteria();
        $Criteria->condition = 'USER_ID = :id';
        $userHobbiesList = FmUserHobbies::model()->findAll('USER_ID=?', array($id));
        $userAddress = FmAddressMst::model()->findByAttributes(array('USER_ID' => $id));
        $this->layout = '//layouts/postPage';
        $this->render('view', array(
            'model' => $this->loadModel(),
            'modelFamily' => $modelFamily,
            'userHobbiesList' => $userHobbiesList,
            'userAddress'=>$userAddress,
        ));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('UserLoginModel');
        $this->render('form', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new UserLoginModel;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['UserLoginModel'])) {

            $model->attributes = $_POST['UserLoginModel'];
            if ($model->save()) {
                Yii::app()->user->setState("userId", $model->USER_ID);
                $this->redirect(array('site/home'));
            }
        }

        $this->render('form', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate() {
        $this->layout = '//layouts/postPage';
        $model = $this->loadModel();

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

        if (isset($_POST['UserLoginModel'])) {
            $model->attributes = $_POST['UserLoginModel'];
            if ($model->save()) {
                Yii::app()->user->setFlash('success', '<strong>Profile</strong>  Data has been Updated');
                $this->navigateToHomePage();
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function navigateToHomePage() {
        $this->redirect(array('site/home'));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel()->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new UserLoginModel('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['UserLoginModel']))
            $model->attributes = $_GET['UserLoginModel'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return UserLoginModel the loaded model
     * @throws CHttpException
     */
    public function loadModel() {
        $id = Yii::app()->user->getState("userId");
        $model = UserLoginModel::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param UserLoginModel $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'user-login-model-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
