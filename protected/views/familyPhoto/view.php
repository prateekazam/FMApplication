<?php
/* @var $this FamilyPhotoController */
/* @var $model FamilyPhoto */

$this->breadcrumbs=array(
	'Family Photos'=>array('index'),
	$model->FAMILY_PHOTO_ID,
);

$this->menu=array(
	array('label'=>'List FamilyPhoto', 'url'=>array('index')),
	array('label'=>'Create FamilyPhoto', 'url'=>array('create')),
	array('label'=>'Update FamilyPhoto', 'url'=>array('update', 'id'=>$model->FAMILY_PHOTO_ID)),
	array('label'=>'Delete FamilyPhoto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->FAMILY_PHOTO_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FamilyPhoto', 'url'=>array('admin')),
);
?>

<h1>View FamilyPhoto #<?php echo $model->FAMILY_PHOTO_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'FAMILY_PHOTO_ID',
		'FAMILY_ID',
		'IMAGE',
		'USER_ID',
	),
)); ?>
