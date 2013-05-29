<?php
/* @var $this FmUserPhotosController */
/* @var $model FmUserPhotos */

$this->breadcrumbs=array(
	'Fm User Photoses'=>array('index'),
	$model->USER_PHOTO_ID=>array('view','id'=>$model->USER_PHOTO_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List FmUserPhotos', 'url'=>array('index')),
	array('label'=>'Create FmUserPhotos', 'url'=>array('create')),
	array('label'=>'View FmUserPhotos', 'url'=>array('view', 'id'=>$model->USER_PHOTO_ID)),
	array('label'=>'Manage FmUserPhotos', 'url'=>array('admin')),
);
?>

<h1>Update FmUserPhotos <?php echo $model->USER_PHOTO_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>