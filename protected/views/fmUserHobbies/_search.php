<?php
/* @var $this FmUserHobbiesController */
/* @var $model FmUserHobbies */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'USER_HOBBIES_ID'); ?>
		<?php echo $form->textField($model,'USER_HOBBIES_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USER_ID'); ?>
		<?php echo $form->textField($model,'USER_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CREATED_DATE'); ?>
		<?php echo $form->textField($model,'CREATED_DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HOBBIES_ID'); ?>
		<?php echo $form->textField($model,'HOBBIES_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->