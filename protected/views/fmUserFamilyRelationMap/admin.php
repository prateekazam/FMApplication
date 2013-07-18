<?php
/* @var $this FmUserFamilyRelationMapController */
/* @var $model FmUserFamilyRelationMap */

$this->breadcrumbs=array(
	'Fm User Family Relation Maps'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List FmUserFamilyRelationMap', 'url'=>array('index')),
	array('label'=>'Create FmUserFamilyRelationMap', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#fm-user-family-relation-map-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Fm User Family Relation Maps</h1>

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
	'id'=>'fm-user-family-relation-map-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'USER_FAMILY_MAP_ID',
		'FAMILY_ID',
		'FAMILY_REL_ID',
		'USER_ID',
		'CREATED_BY',
		'CREATED_DATE',
		/*
		'USER_LEVEL_ID',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
