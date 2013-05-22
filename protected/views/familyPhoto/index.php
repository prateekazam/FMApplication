<?php
/* @var $this FamilyPhotoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Family Photos',
);

$this->menu=array(
	array('label'=>'Create FamilyPhoto', 'url'=>array('create')),
	array('label'=>'Manage FamilyPhoto', 'url'=>array('admin')),
);
?>

<h1>Family Photos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
