<?php
/* @var $this FamilyPhotoController */
/* @var $model FamilyPhoto */

$this->breadcrumbs=array(
	'Family Photos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FamilyPhoto', 'url'=>array('index')),
	array('label'=>'Manage FamilyPhoto', 'url'=>array('admin')),
);
?>

<h1>Create FamilyPhoto</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>