<?php
/* @var $this FmHobbiesMstController */
/* @var $model FmHobbiesMst */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'HOBBIES_ID'); ?>
		<?php echo $form->textField($model,'HOBBIES_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HOBBIES_NAME'); ?>
		<?php echo $form->textField($model,'HOBBIES_NAME',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HOBBIES_DESC'); ?>
		<?php echo $form->textField($model,'HOBBIES_DESC',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HOBBIES_IMAGE_URL'); ?>
		<?php echo $form->textField($model,'HOBBIES_IMAGE_URL',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CREATED_BY'); ?>
		<?php echo $form->textField($model,'CREATED_BY',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CREATED_DATE'); ?>
		<?php echo $form->textField($model,'CREATED_DATE'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->