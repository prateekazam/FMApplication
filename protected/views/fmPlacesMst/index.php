<?php
/* @var $this FmPlacesMstController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fm Places Msts',
);

$this->menu=array(
	array('label'=>'Create FmPlacesMst', 'url'=>array('create')),
	array('label'=>'Manage FmPlacesMst', 'url'=>array('admin')),
);
?>

<h1>Fm Places Msts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
