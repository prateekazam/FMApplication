<?php
/* @var $this UserLoginModelController */
/* @var $data UserLoginModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('USER_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->USER_ID), array('view', 'id'=>$data->USER_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TITLE')); ?>:</b>
	<?php echo CHtml::encode($data->TITLE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FIRST_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->FIRST_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MIDDLE_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->MIDDLE_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LAST_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->LAST_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PHONE_NUMBER')); ?>:</b>
	<?php echo CHtml::encode($data->PHONE_NUMBER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MOBILE_NUMBER')); ?>:</b>
	<?php echo CHtml::encode($data->MOBILE_NUMBER); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('GENDER')); ?>:</b>
	<?php echo CHtml::encode($data->GENDER); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMAIL_ID')); ?>:</b>
	<?php echo CHtml::encode($data->EMAIL_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DOB')); ?>:</b>
	<?php echo CHtml::encode($data->DOB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USER_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->USER_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PASSWORD')); ?>:</b>
	<?php echo CHtml::encode($data->PASSWORD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CREATED_BY')); ?>:</b>
	<?php echo CHtml::encode($data->CREATED_BY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CREATED_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->CREATED_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USER_TYPE_ID')); ?>:</b>
	<?php echo CHtml::encode($data->USER_TYPE_ID); ?>
	<br />

	*/ ?>

</div>