<?php
/* @var $this FmHobbiesMstController */
/* @var $model FmHobbiesMst */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fm-hobbies-mst-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'HOBBIES_NAME'); ?>
		<?php echo $form->textField($model,'HOBBIES_NAME',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'HOBBIES_NAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HOBBIES_DESC'); ?>
		<?php echo $form->textField($model,'HOBBIES_DESC',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'HOBBIES_DESC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HOBBIES_IMAGE_URL'); ?>
		<?php echo $form->textField($model,'HOBBIES_IMAGE_URL',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'HOBBIES_IMAGE_URL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CREATED_BY'); ?>
		<?php echo $form->textField($model,'CREATED_BY',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'CREATED_BY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CREATED_DATE'); ?>
		<?php echo $form->textField($model,'CREATED_DATE'); ?>
		<?php echo $form->error($model,'CREATED_DATE'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->