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

<h2 class="form-signin-heading">Create Address</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>