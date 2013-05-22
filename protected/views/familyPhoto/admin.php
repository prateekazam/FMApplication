<?php
/* @var $this FamilyPhotoController */
/* @var $model FamilyPhoto */

$this->breadcrumbs=array(
	'Family Photos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List FamilyPhoto', 'url'=>array('index')),
	array('label'=>'Create FamilyPhoto', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#family-photo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Family Photos</h1>

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
	'id'=>'family-photo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'FAMILY_PHOTO_ID',
		'FAMILY_ID',
		'IMAGE',
		'USER_ID',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
