<?php

class FmPlacesMstController extends Controller {

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
//	public function accessRules()
//	{
//		return array(
//			array('allow',  // allow all users to perform 'index' and 'view' actions
//				'actions'=>array('index','view'),
//				'users'=>array('*'),
//			),
//			array('allow', // allow authenticated user to perform 'create' and 'update' actions
//				'actions'=>array('create','update'),
//				'users'=>array('@'),
//			),
//			array('allow', // allow admin user to perform 'admin' and 'delete' actions
//				'actions'=>array('admin','delete'),
//				'users'=>array('admin'),
//			),
//			array('deny',  // deny all users
//				'users'=>array('*'),
//			),
//		);
//	}

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }
    
    public function actionTreePage() {
        $this->render('example');
    }
    
    

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new FmPlacesMst;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['FmPlacesMst'])) {
            $model->attributes = $_POST['FmPlacesMst'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->woeid));
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

        if (isset($_POST['FmPlacesMst'])) {
            $model->attributes = $_POST['FmPlacesMst'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->woeid));
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
        $dataProvider = new CActiveDataProvider('FmPlacesMst');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new FmPlacesMst('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['FmPlacesMst']))
            $model->attributes = $_GET['FmPlacesMst'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return FmPlacesMst the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = FmPlacesMst::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param FmPlacesMst $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'fm-places-mst-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionGetStateByCountryId() {
        //$data = FmPlacesMst::model()->findAll('parent=:parent_id', array(':parent_id' => (int) $_POST['name']));
        //findAll('type="Country" and language="ENG"', array('order' => 'name'))\
        //$model->attributes = $_POST['FmPlacesMst'];
        $COUNTRY_ID = (int) $_POST['FmAddressMst']['COUNTRY_ID'];
        $data = FmPlacesMst::model()->findAll('type="State" and language="ENG" and parent=:parent_id order by name ASC', array(':parent_id' => $COUNTRY_ID));
        $static = array(
            'Select State' => Yii::t('Select State', 'Select State'),
        );
        $datavalue = CHtml::listData($data, 'woeid', 'name');
        $dvalue = $static + $datavalue;
        foreach ($dvalue as $value => $name) {
            echo CHtml::tag('option', array('value' => $value), CHtml::encode($name), true);
        }
    }

    public function actionGetCountyByStateId() {
        //$data = FmPlacesMst::model()->findAll('parent=:parent_id', array(':parent_id' => (int) $_POST['name']));
        //findAll('type="Country" and language="ENG"', array('order' => 'name'))\
        //$model->attributes = $_POST['FmPlacesMst'];
        $STATE_ID = (int) $_POST['FmAddressMst']['STATE_ID'];
        $static = array(
            'Select City' => Yii::t('Select City', 'Select City'),
        );
        $data = FmPlacesMst::model()->findAll('type="County" and language="ENG" and parent=:parent_id order by name ASC', array(':parent_id' => $STATE_ID));
        $datavalue = CHtml::listData($data, 'woeid', 'name');
        $dvalue = $static + $datavalue;
        foreach ($dvalue as $value => $name) {
            echo CHtml::tag('option', array('value' => $value), CHtml::encode($name), true);
        }
    }

    public function actionGetTownByCountyId() {
        //$data = FmPlacesMst::model()->findAll('parent=:parent_id', array(':parent_id' => (int) $_POST['name']));
        //findAll('type="Country" and language="ENG"', array('order' => 'name'))\
        //$model->attributes = $_POST['FmPlacesMst'];
        $COUNTY_ID = $_POST['FmAddressMst']['COUNTY_ID'];
        $static = array(
            'Select Town' => Yii::t('Select Town', 'Select Town'),
        );
        $data = FmPlacesMst::model()->findAll('type="Town" and language="ENG" and parent=:parent_id order by name ASC', array(':parent_id' => (int) $COUNTY_ID));
        $datavalue = CHtml::listData($data, 'woeid', 'name');
        $dvalue = $static + $datavalue;
        foreach ($dvalue as $value => $name) {
            echo CHtml::tag('option', array('value' => $value), CHtml::encode($name), true);
        }
    }

    //GetPinCodeByTownId
    public function actionGetPinCodeByTownId() {
        $model = new FmAddressMst;
        $TOWN_ID = $_POST['FmAddressMst']['TOWN_ID'];
        $data = FmPlacesMst::model()->findAll('type="Zip" and language="ENG" and parent=:parent_id', array(':parent_id' => (int) $TOWN_ID));
        $datavalue = CHtml::listData($data, 'name', 'name');
        $static = array(
            'Select Zip Code' => Yii::t('Select Zip Code', 'Select Zip Code'),
        );
        $dvalue = $static + $datavalue;
        foreach ($dvalue as $value => $name) {
            echo CHtml::tag('option', array('value' => $value), CHtml::encode($name), true);
        }
    }

}
