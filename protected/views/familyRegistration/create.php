<?php
/* @var $this FamilyRegistrationController */
/* @var $model FamilyRegistration */

$this->breadcrumbs=array(
	'Family Registrations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FamilyRegistration', 'url'=>array('index')),
	array('label'=>'Manage FamilyRegistration', 'url'=>array('admin')),
);
?>



<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>