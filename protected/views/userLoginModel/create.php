<?php
/* @var $this UserLoginModelController */
/* @var $model UserLoginModel */

$this->breadcrumbs=array(
	'User Login Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UserLoginModel', 'url'=>array('index')),
	array('label'=>'Manage UserLoginModel', 'url'=>array('admin')),
);
?>

<h1>Create UserLoginModel</h1>

<?php echo $this->renderPartial('form', array('model'=>$model)); ?>