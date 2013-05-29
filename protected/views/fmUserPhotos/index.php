<?php
/* @var $this FmUserPhotosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fm User Photoses',
);

$this->menu=array(
	array('label'=>'Create FmUserPhotos', 'url'=>array('create')),
	array('label'=>'Manage FmUserPhotos', 'url'=>array('admin')),
);
?>

<h1>Fm User Photoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
