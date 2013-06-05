<?php
/* @var $this FmUserHobbiesController */
/* @var $model FmUserHobbies */

$this->breadcrumbs=array(
	'Fm User Hobbies'=>array('index'),
	$model->USER_HOBBIES_ID=>array('view','id'=>$model->USER_HOBBIES_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List FmUserHobbies', 'url'=>array('index')),
	array('label'=>'Create FmUserHobbies', 'url'=>array('create')),
	array('label'=>'View FmUserHobbies', 'url'=>array('view', 'id'=>$model->USER_HOBBIES_ID)),
	array('label'=>'Manage FmUserHobbies', 'url'=>array('admin')),
);
?>

<h1>Update FmUserHobbies <?php echo $model->USER_HOBBIES_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>