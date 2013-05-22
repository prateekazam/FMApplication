<?php
/* @var $this FamilyPhotoController */
/* @var $model FamilyPhoto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'FAMILY_PHOTO_ID'); ?>
		<?php echo $form->textField($model,'FAMILY_PHOTO_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FAMILY_ID'); ?>
		<?php echo $form->textField($model,'FAMILY_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IMAGE'); ?>
		<?php echo $form->textField($model,'IMAGE'); ?>
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