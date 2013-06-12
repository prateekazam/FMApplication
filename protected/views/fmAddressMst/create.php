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

<h1>Create FmAddressMst</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>