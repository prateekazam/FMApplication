<?php
/* @var $this FmUserFamilyRelationMapController */
/* @var $model FmUserFamilyRelationMap */

$this->breadcrumbs=array(
	'Fm User Family Relation Maps'=>array('index'),
	$model->USER_FAMILY_MAP_ID=>array('view','id'=>$model->USER_FAMILY_MAP_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List FmUserFamilyRelationMap', 'url'=>array('index')),
	array('label'=>'Create FmUserFamilyRelationMap', 'url'=>array('create')),
	array('label'=>'View FmUserFamilyRelationMap', 'url'=>array('view', 'id'=>$model->USER_FAMILY_MAP_ID)),
	array('label'=>'Manage FmUserFamilyRelationMap', 'url'=>array('admin')),
);
?>

<h1>Update FmUserFamilyRelationMap <?php echo $model->USER_FAMILY_MAP_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>