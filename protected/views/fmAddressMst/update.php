<?php
/* @var $this FmAddressMstController */
/* @var $model FmAddressMst */

$this->breadcrumbs=array(
	'Fm Address Msts'=>array('index'),
	$model->ADDRESS_ID=>array('view','id'=>$model->ADDRESS_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List FmAddressMst', 'url'=>array('index')),
	array('label'=>'Create FmAddressMst', 'url'=>array('create')),
	array('label'=>'View FmAddressMst', 'url'=>array('view', 'id'=>$model->ADDRESS_ID)),
	array('label'=>'Manage FmAddressMst', 'url'=>array('admin')),
);
?>

<h1>Update FmAddressMst <?php echo $model->ADDRESS_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>