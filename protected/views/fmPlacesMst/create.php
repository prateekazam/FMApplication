<?php
/* @var $this FmPlacesMstController */
/* @var $model FmPlacesMst */

$this->breadcrumbs=array(
	'Fm Places Msts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FmPlacesMst', 'url'=>array('index')),
	array('label'=>'Manage FmPlacesMst', 'url'=>array('admin')),
);
?>

<h1>Create FmPlacesMst</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>