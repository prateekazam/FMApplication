<?php
/* @var $this FmAddressMstController */
/* @var $model FmAddressMst */

$this->breadcrumbs=array(
	'Fm Address Msts'=>array('index'),
	$model->ADDRESS_ID,
);

$this->menu=array(
	array('label'=>'List FmAddressMst', 'url'=>array('index')),
	array('label'=>'Create FmAddressMst', 'url'=>array('create')),
	array('label'=>'Update FmAddressMst', 'url'=>array('update', 'id'=>$model->ADDRESS_ID)),
	array('label'=>'Delete FmAddressMst', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ADDRESS_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FmAddressMst', 'url'=>array('admin')),
);
?>

<h1>View FmAddressMst #<?php echo $model->ADDRESS_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ADDRESS_ID',
		'ADDRESS_TYPE',
		'ADDRESS_LINE_1',
		'ADDRESS_LINE_2',
		'COUNTRY_ID',
		'STATE_ID',
		'COUNTY_ID',
		'TOWN_ID',
		'PIN_CODE',
		'FAMILY_ID',
		'USER_ID',
	),
)); ?>
