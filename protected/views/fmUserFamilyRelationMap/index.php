<?php
/* @var $this FmUserFamilyRelationMapController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fm User Family Relation Maps',
);

$this->menu=array(
	array('label'=>'Create FmUserFamilyRelationMap', 'url'=>array('create')),
	array('label'=>'Manage FmUserFamilyRelationMap', 'url'=>array('admin')),
);
?>

<h1>Fm User Family Relation Maps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
