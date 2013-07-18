<?php
/* @var $this FmUserFamilyRelationMapController */
/* @var $model FmUserFamilyRelationMap */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'USER_FAMILY_MAP_ID'); ?>
		<?php echo $form->textField($model,'USER_FAMILY_MAP_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FAMILY_ID'); ?>
		<?php echo $form->textField($model,'FAMILY_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FAMILY_REL_ID'); ?>
		<?php echo $form->textField($model,'FAMILY_REL_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USER_ID'); ?>
		<?php echo $form->textField($model,'USER_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CREATED_BY'); ?>
		<?php echo $form->textField($model,'CREATED_BY',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CREATED_DATE'); ?>
		<?php echo $form->textField($model,'CREATED_DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USER_LEVEL_ID'); ?>
		<?php echo $form->textField($model,'USER_LEVEL_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->