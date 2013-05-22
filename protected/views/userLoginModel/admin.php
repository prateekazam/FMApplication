<?php
/* @var $this UserLoginModelController */
/* @var $model UserLoginModel */

$this->breadcrumbs=array(
	'User Login Models'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List UserLoginModel', 'url'=>array('index')),
	array('label'=>'Create UserLoginModel', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-login-model-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage User Login Models</h1>

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
	'id'=>'user-login-model-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'USER_ID',
		'TITLE',
		'FIRST_NAME',
		'MIDDLE_NAME',
		'LAST_NAME',
		'PHONE_NUMBER',
		/*
		'MOBILE_NUMBER',
		'GENDER',
		'EMAIL_ID',
		'DOB',
		'USER_NAME',
		'PASSWORD',
		'CREATED_BY',
		'CREATED_DATE',
		'USER_TYPE_ID',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
