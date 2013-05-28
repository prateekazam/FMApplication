<?php
/* @var $this UserLoginModelController */
/* @var $model UserLoginModel */

$this->breadcrumbs=array(
	'User Login Models'=>array('index'),
	$model->TITLE,
);

$this->menu=array(
	array('label'=>'List UserLoginModel', 'url'=>array('index')),
	array('label'=>'Create UserLoginModel', 'url'=>array('create')),
	array('label'=>'Update UserLoginModel', 'url'=>array('update', 'id'=>$model->USER_ID)),
	array('label'=>'Delete UserLoginModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->USER_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserLoginModel', 'url'=>array('admin')),
);
?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'TITLE',
		'FIRST_NAME',
		'MIDDLE_NAME',
		'LAST_NAME',
		'PHONE_NUMBER',
		'MOBILE_NUMBER',
		'EMAIL_ID',
		'DOB',
	),
)); ?>
