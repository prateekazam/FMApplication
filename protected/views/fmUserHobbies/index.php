<?php
/* @var $this FmUserHobbiesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fm User Hobbies',
);

$this->menu=array(
	array('label'=>'Create FmUserHobbies', 'url'=>array('create')),
	array('label'=>'Manage FmUserHobbies', 'url'=>array('admin')),
);
?>

<h1>Fm User Hobbies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
