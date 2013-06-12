<?php
/* @var $this FmPlacesMstController */
/* @var $model FmPlacesMst */

$this->breadcrumbs=array(
	'Fm Places Msts'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List FmPlacesMst', 'url'=>array('index')),
	array('label'=>'Create FmPlacesMst', 'url'=>array('create')),
	array('label'=>'Update FmPlacesMst', 'url'=>array('update', 'id'=>$model->woeid)),
	array('label'=>'Delete FmPlacesMst', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->woeid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FmPlacesMst', 'url'=>array('admin')),
);
?>

<h1>View FmPlacesMst #<?php echo $model->woeid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'woeid',
		'iso',
		'name',
		'language',
		'type',
		'parent',
	),
)); ?>
