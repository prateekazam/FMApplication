<?php
/* @var $this FmHobbiesMstController */
/* @var $model FmHobbiesMst */

$this->breadcrumbs=array(
	'Fm Hobbies Msts'=>array('index'),
	$model->HOBBIES_ID=>array('view','id'=>$model->HOBBIES_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List FmHobbiesMst', 'url'=>array('index')),
	array('label'=>'Create FmHobbiesMst', 'url'=>array('create')),
	array('label'=>'View FmHobbiesMst', 'url'=>array('view', 'id'=>$model->HOBBIES_ID)),
	array('label'=>'Manage FmHobbiesMst', 'url'=>array('admin')),
);
?>

<h1>Update FmHobbiesMst <?php echo $model->HOBBIES_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>