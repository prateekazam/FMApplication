<?php
/* @var $this UserLoginModelController */
/* @var $model UserLoginModel */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'USER_ID'); ?>
		<?php echo $form->textField($model,'USER_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TITLE'); ?>
		<?php echo $form->textField($model,'TITLE',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FIRST_NAME'); ?>
		<?php echo $form->textField($model,'FIRST_NAME',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MIDDLE_NAME'); ?>
		<?php echo $form->textField($model,'MIDDLE_NAME',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LAST_NAME'); ?>
		<?php echo $form->textField($model,'LAST_NAME',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PHONE_NUMBER'); ?>
		<?php echo $form->textField($model,'PHONE_NUMBER'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MOBILE_NUMBER'); ?>
		<?php echo $form->textField($model,'MOBILE_NUMBER'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GENDER'); ?>
		<?php echo $form->textField($model,'GENDER'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EMAIL_ID'); ?>
		<?php echo $form->textField($model,'EMAIL_ID',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DOB'); ?>
		<?php echo $form->textField($model,'DOB'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USER_NAME'); ?>
		<?php echo $form->textField($model,'USER_NAME',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PASSWORD'); ?>
		<?php echo $form->passwordField($model,'PASSWORD',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CREATED_BY'); ?>
		<?php echo $form->textField($model,'CREATED_BY',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CREATED_DATE'); ?>
		<?php echo $form->textField($model,'CREATED_DATE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USER_TYPE_ID'); ?>
		<?php echo $form->textField($model,'USER_TYPE_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->