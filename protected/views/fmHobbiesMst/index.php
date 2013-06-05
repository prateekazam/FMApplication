<?php
/* @var $this FmHobbiesMstController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fm Hobbies Msts',
);

$this->menu=array(
	array('label'=>'Create FmHobbiesMst', 'url'=>array('create')),
	array('label'=>'Manage FmHobbiesMst', 'url'=>array('admin')),
);
?>

<h1>Fm Hobbies Msts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
