<?php
/* @var $this FmHobbiesMstController */
/* @var $model FmHobbiesMst */

$this->breadcrumbs=array(
	'Fm Hobbies Msts'=>array('index'),
	$model->HOBBIES_ID,
);

$this->menu=array(
	array('label'=>'List FmHobbiesMst', 'url'=>array('index')),
	array('label'=>'Create FmHobbiesMst', 'url'=>array('create')),
	array('label'=>'Update FmHobbiesMst', 'url'=>array('update', 'id'=>$model->HOBBIES_ID)),
	array('label'=>'Delete FmHobbiesMst', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->HOBBIES_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FmHobbiesMst', 'url'=>array('admin')),
);
?>

<h1>View FmHobbiesMst #<?php echo $model->HOBBIES_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'HOBBIES_ID',
		'HOBBIES_NAME',
		'HOBBIES_DESC',
		'HOBBIES_IMAGE_URL',
		'CREATED_BY',
		'CREATED_DATE',
	),
)); ?>
