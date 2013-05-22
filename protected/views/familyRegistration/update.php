<?php
/* @var $this FamilyRegistrationController */
/* @var $model FamilyRegistration */

$this->breadcrumbs=array(
	'Family Registrations'=>array('index'),
	$model->FAMILY_ID=>array('view','id'=>$model->FAMILY_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List FamilyRegistration', 'url'=>array('index')),
	array('label'=>'Create FamilyRegistration', 'url'=>array('create')),
	array('label'=>'View FamilyRegistration', 'url'=>array('view', 'id'=>$model->FAMILY_ID)),
	array('label'=>'Manage FamilyRegistration', 'url'=>array('admin')),
);
?>

<h1>Update FamilyRegistration <?php echo $model->FAMILY_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>