<?php
/* @var $this FamilyPhotoController */
/* @var $model FamilyPhoto */

$this->breadcrumbs=array(
	'Family Photos'=>array('index'),
	$model->FAMILY_PHOTO_ID=>array('view','id'=>$model->FAMILY_PHOTO_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List FamilyPhoto', 'url'=>array('index')),
	array('label'=>'Create FamilyPhoto', 'url'=>array('create')),
	array('label'=>'View FamilyPhoto', 'url'=>array('view', 'id'=>$model->FAMILY_PHOTO_ID)),
	array('label'=>'Manage FamilyPhoto', 'url'=>array('admin')),
);
?>

<h1>Update FamilyPhoto <?php echo $model->FAMILY_PHOTO_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>