<?php
/* @var $this FmPlacesMstController */
/* @var $model FmPlacesMst */

$this->breadcrumbs=array(
	'Fm Places Msts'=>array('index'),
	$model->name=>array('view','id'=>$model->woeid),
	'Update',
);

$this->menu=array(
	array('label'=>'List FmPlacesMst', 'url'=>array('index')),
	array('label'=>'Create FmPlacesMst', 'url'=>array('create')),
	array('label'=>'View FmPlacesMst', 'url'=>array('view', 'id'=>$model->woeid)),
	array('label'=>'Manage FmPlacesMst', 'url'=>array('admin')),
);
?>

<h1>Update FmPlacesMst <?php echo $model->woeid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>