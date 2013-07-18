<?php
/* @var $this FmUserFamilyRelationMapController */
/* @var $model FmUserFamilyRelationMap */

$this->breadcrumbs=array(
	'Fm User Family Relation Maps'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FmUserFamilyRelationMap', 'url'=>array('index')),
	array('label'=>'Manage FmUserFamilyRelationMap', 'url'=>array('admin')),
);
?>

<h1>Create FmUserFamilyRelationMap</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>