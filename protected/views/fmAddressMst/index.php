<?php
/* @var $this FmAddressMstController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fm Address Msts',
);

$this->menu=array(
	array('label'=>'Create FmAddressMst', 'url'=>array('create')),
	array('label'=>'Manage FmAddressMst', 'url'=>array('admin')),
);
?>

<h1>Fm Address Msts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
