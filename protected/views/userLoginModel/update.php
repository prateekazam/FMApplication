<?php
/* @var $this UserLoginModelController */
/* @var $model UserLoginModel */

$this->breadcrumbs=array(
	'User Login Models'=>array('index'),
	$model->TITLE=>array('view','id'=>$model->USER_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserLoginModel', 'url'=>array('index')),
	array('label'=>'Create UserLoginModel', 'url'=>array('create')),
	array('label'=>'View UserLoginModel', 'url'=>array('view', 'id'=>$model->USER_ID)),
	array('label'=>'Manage UserLoginModel', 'url'=>array('admin')),
);
?>

<h1>Update UserLoginModel <?php echo $model->USER_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>