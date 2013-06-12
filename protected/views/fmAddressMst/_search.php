<?php
/* @var $this FmAddressMstController */
/* @var $model FmAddressMst */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ADDRESS_ID'); ?>
		<?php echo $form->textField($model,'ADDRESS_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ADDRESS_TYPE'); ?>
		<?php echo $form->textField($model,'ADDRESS_TYPE',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ADDRESS_LINE_1'); ?>
		<?php echo $form->textField($model,'ADDRESS_LINE_1',array('size'=>60,'maxlength'=>600)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ADDRESS_LINE_2'); ?>
		<?php echo $form->textField($model,'ADDRESS_LINE_2',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COUNTRY_ID'); ?>
		<?php echo $form->textField($model,'COUNTRY_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'STATE_ID'); ?>
		<?php echo $form->textField($model,'STATE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COUNTY_ID'); ?>
		<?php echo $form->textField($model,'COUNTY_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TOWN_ID'); ?>
		<?php echo $form->textField($model,'TOWN_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PIN_CODE'); ?>
		<?php echo $form->textField($model,'PIN_CODE',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FAMILY_ID'); ?>
		<?php echo $form->textField($model,'FAMILY_ID'); ?>
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