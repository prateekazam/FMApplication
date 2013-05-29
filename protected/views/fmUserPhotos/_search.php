<?php
/* @var $this FmUserPhotosController */
/* @var $model FmUserPhotos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'USER_PHOTO_ID'); ?>
		<?php echo $form->textField($model,'USER_PHOTO_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USER_ID'); ?>
		<?php echo $form->textField($model,'USER_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IMAGE_NAME'); ?>
		<?php echo $form->textField($model,'IMAGE_NAME',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IMAGE_PATH_LOC'); ?>
		<?php echo $form->textField($model,'IMAGE_PATH_LOC',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FOLDER_NAME'); ?>
		<?php echo $form->textField($model,'FOLDER_NAME',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->