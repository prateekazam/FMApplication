<?php
/* @var $this UserLoginModelController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Login Models',
);

$this->menu=array(
	array('label'=>'Create UserLoginModel', 'url'=>array('create')),
	array('label'=>'Manage UserLoginModel', 'url'=>array('admin')),
);
?>

<h1>User Login Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
