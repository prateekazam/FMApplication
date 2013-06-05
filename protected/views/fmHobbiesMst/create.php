<?php
/* @var $this FmHobbiesMstController */
/* @var $model FmHobbiesMst */

$this->breadcrumbs=array(
	'Fm Hobbies Msts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FmHobbiesMst', 'url'=>array('index')),
	array('label'=>'Manage FmHobbiesMst', 'url'=>array('admin')),
);
?>

<h1>Create FmHobbiesMst</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>