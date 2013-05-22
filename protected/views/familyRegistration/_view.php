<?php
/* @var $this FamilyRegistrationController */
/* @var $data FamilyRegistration */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('FAMILY_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->FAMILY_ID), array('view', 'id'=>$data->FAMILY_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FAMILY_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->FAMILY_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DOR')); ?>:</b>
	<?php echo CHtml::encode($data->DOR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FAMILY_EMAIL_ID')); ?>:</b>
	<?php echo CHtml::encode($data->FAMILY_EMAIL_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FAMILY_PHONE_NUMBER')); ?>:</b>
	<?php echo CHtml::encode($data->FAMILY_PHONE_NUMBER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FAMILY_DESC')); ?>:</b>
	<?php echo CHtml::encode($data->FAMILY_DESC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CREATED_BY')); ?>:</b>
	<?php echo CHtml::encode($data->CREATED_BY); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('CREATED_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->CREATED_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USER_ID')); ?>:</b>
	<?php echo CHtml::encode($data->USER_ID); ?>
	<br />

	*/ ?>

</div>