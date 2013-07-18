<?php
/* @var $this FmUserFamilyRelationMapController */
/* @var $model FmUserFamilyRelationMap */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fm-user-family-relation-map-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'FAMILY_ID'); ?>
		<?php echo $form->textField($model,'FAMILY_ID'); ?>
		<?php echo $form->error($model,'FAMILY_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FAMILY_REL_ID'); ?>
		<?php echo $form->textField($model,'FAMILY_REL_ID'); ?>
		<?php echo $form->error($model,'FAMILY_REL_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USER_ID'); ?>
		<?php echo $form->textField($model,'USER_ID'); ?>
		<?php echo $form->error($model,'USER_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CREATED_BY'); ?>
		<?php echo $form->textField($model,'CREATED_BY',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'CREATED_BY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CREATED_DATE'); ?>
		<?php echo $form->textField($model,'CREATED_DATE'); ?>
		<?php echo $form->error($model,'CREATED_DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USER_LEVEL_ID'); ?>
		<?php echo $form->textField($model,'USER_LEVEL_ID'); ?>
		<?php echo $form->error($model,'USER_LEVEL_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->