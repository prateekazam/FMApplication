<?php
/* @var $this FmAddressMstController */
/* @var $model FmAddressMst */

$this->breadcrumbs=array(
	'Fm Address Msts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FmAddressMst', 'url'=>array('index')),
	array('label'=>'Manage FmAddressMst', 'url'=>array('admin')),
);
?>

<?php echo "<h4>Address</h4>"; ?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>