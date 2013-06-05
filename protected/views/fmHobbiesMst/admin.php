<?php
/* @var $this FmHobbiesMstController */
/* @var $model FmHobbiesMst */

$this->breadcrumbs=array(
	'Fm Hobbies Msts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List FmHobbiesMst', 'url'=>array('index')),
	array('label'=>'Create FmHobbiesMst', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#fm-hobbies-mst-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Fm Hobbies Msts</h1>

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
	'id'=>'fm-hobbies-mst-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'HOBBIES_ID',
		'HOBBIES_NAME',
		'HOBBIES_DESC',
		'HOBBIES_IMAGE_URL',
		'CREATED_BY',
		'CREATED_DATE',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
