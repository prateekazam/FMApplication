<?php
/* @var $this FmUserHobbiesController */
/* @var $model FmUserHobbies */

$this->breadcrumbs=array(
	'Fm User Hobbies'=>array('index'),
	$model->USER_HOBBIES_ID,
);

$this->menu=array(
	array('label'=>'List FmUserHobbies', 'url'=>array('index')),
	array('label'=>'Create FmUserHobbies', 'url'=>array('create')),
	array('label'=>'Update FmUserHobbies', 'url'=>array('update', 'id'=>$model->USER_HOBBIES_ID)),
	array('label'=>'Delete FmUserHobbies', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->USER_HOBBIES_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FmUserHobbies', 'url'=>array('admin')),
);
?>

<h1>View FmUserHobbies #<?php echo $model->USER_HOBBIES_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'USER_HOBBIES_ID',
		'USER_ID',
		'CREATED_DATE',
		'HOBBIES_ID',
	),
)); ?>
