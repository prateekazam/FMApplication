<?php
/* @var $this FmUserPhotosController */
/* @var $model FmUserPhotos */

$this->breadcrumbs=array(
	'Fm User Photoses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List FmUserPhotos', 'url'=>array('index')),
	array('label'=>'Create FmUserPhotos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#fm-user-photos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Fm User Photoses</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'fm-user-photos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'USER_PHOTO_ID',
		'USER_ID',
		'IMAGE_NAME',
		'IMAGE_PATH_LOC',
		'FOLDER_NAME',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
