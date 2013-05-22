<?php
/* @var $this FamilyRegistrationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Family Registrations',
);

$this->menu=array(
	array('label'=>'Create FamilyRegistration', 'url'=>array('create')),
	array('label'=>'Manage FamilyRegistration', 'url'=>array('admin')),
);
?>

<h1>Family Registrations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
