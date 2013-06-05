<?php

class FmUserHobbiesController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/postPage';

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
    //   public function accessRules() {
    //     return array(
//            array('allow', // allow all users to perform 'index' and 'view' actions
//                'actions' => array('index', 'view','autoCompleteLookup'),
//                //'autoCompleteLookup'=>array('create', 'update','index', 'view'),
//                'users' => array('*'),
//            ),
//            array('allow', // allow authenticated user to perform 'create' and 'update' actions
//                'actions' => array('create', 'update'),
//                'users' => array('@'),
//            ),
//            array('allow', // allow admin user to perform 'admin' and 'delete' actions
//                'actions' => array('admin', 'delete'),
//                'users' => array('admin'),
//            ),
//            array('deny', // deny all users
//                'users' => array('*'),
//            ),
//        );
//    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new FmUserHobbies;

        // Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);
        if (isset($_POST['FmUserHobbies'])) {
            $model->attributes = $_POST['FmUserHobbies'];
            $p = $model->HOBBIES_ID;
            if ($model->save()) {
                $this->redirect(array('view', 'id' => $model->USER_HOBBIES_ID));
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['FmUserHobbies'])) {
            $model->attributes = $_POST['FmUserHobbies'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->USER_HOBBIES_ID));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('FmUserHobbies');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new FmUserHobbies('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['FmUserHobbies']))
            $model->attributes = $_GET['FmUserHobbies'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return FmUserHobbies the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = FmUserHobbies::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param FmUserHobbies $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'fm-user-hobbies-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    //Action
    public function actionAutoCompleteLookup() {
        if (Yii::app()->request->isAjaxRequest && isset($_GET['q'])) {
            /* q is the default GET variable name that is used by
              / the autocomplete widget to pass in user input
             */
            $name = $_GET['q'];
            // this was set with the "max" attribute of the CAutoComplete widget
            $limit = min($_GET['limit'], 50);
            $criteria = new CDbCriteria;
            $criteria->condition = "HOBBIES_NAME LIKE :sterm";
            $criteria->params = array(":sterm" => "%$name%");
            $criteria->limit = $limit;
            $userArray = FmHobbiesMst::model()->findAll($criteria);
            $returnVal = '';
            foreach ($userArray as $userAccount) {
                $returnVal .= $userAccount->getAttribute('name') . '|'
                        . $userAccount->getAttribute('user_id') . "\n";
            }
            echo $returnVal;
        }
    }

    public function actionGetHobbiesList() {
        if (isset($_GET['term'])) {
            $criteria = new CDbCriteria;
            $criteria->select = array('HOBBIES_ID', 'HOBBIES_NAME');
            $criteria->addSearchCondition('HOBBIES_NAME', strtoupper($_GET['term']));
            $criteria->limit = 15;
            $data = FmHobbiesMst::model()->findAll($criteria);
            $arr = array();
            foreach ($data as $item) {
                $arr[] = array(
                    'id' => $item->HOBBIES_ID,
                    'value' => $item->HOBBIES_NAME,
                    'label' => $item->HOBBIES_NAME,
                );
            }
        }
        echo CJSON::encode($arr);
        Yii::app()->end();
    }

}

