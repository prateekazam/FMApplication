<?php
/* @var $this FamilyRegistrationController */
/* @var $model FamilyRegistration */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'FAMILY_ID'); ?>
		<?php echo $form->textField($model,'FAMILY_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FAMILY_NAME'); ?>
		<?php echo $form->textField($model,'FAMILY_NAME',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DOR'); ?>
		<?php echo $form->textField($model,'DOR'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FAMILY_EMAIL_ID'); ?>
		<?php echo $form->textField($model,'FAMILY_EMAIL_ID',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FAMILY_PHONE_NUMBER'); ?>
		<?php echo $form->textField($model,'FAMILY_PHONE_NUMBER',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FAMILY_DESC'); ?>
		<?php echo $form->textField($model,'FAMILY_DESC',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CREATED_BY'); ?>
		<?php echo $form->textField($model,'CREATED_BY',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CREATED_DATE'); ?>
		<?php echo $form->textField($model,'CREATED_DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USER_ID'); ?>
		<?php echo $form->textField($model,'USER_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->