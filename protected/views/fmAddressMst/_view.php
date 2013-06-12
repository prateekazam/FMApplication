<?php
/* @var $this FmAddressMstController */
/* @var $data FmAddressMst */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADDRESS_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ADDRESS_ID), array('view', 'id'=>$data->ADDRESS_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADDRESS_TYPE')); ?>:</b>
	<?php echo CHtml::encode($data->ADDRESS_TYPE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADDRESS_LINE_1')); ?>:</b>
	<?php echo CHtml::encode($data->ADDRESS_LINE_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADDRESS_LINE_2')); ?>:</b>
	<?php echo CHtml::encode($data->ADDRESS_LINE_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COUNTRY_ID')); ?>:</b>
	<?php echo CHtml::encode($data->COUNTRY_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('STATE_ID')); ?>:</b>
	<?php echo CHtml::encode($data->STATE_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COUNTY_ID')); ?>:</b>
	<?php echo CHtml::encode($data->COUNTY_ID); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('TOWN_ID')); ?>:</b>
	<?php echo CHtml::encode($data->TOWN_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PIN_CODE')); ?>:</b>
	<?php echo CHtml::encode($data->PIN_CODE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FAMILY_ID')); ?>:</b>
	<?php echo CHtml::encode($data->FAMILY_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USER_ID')); ?>:</b>
	<?php echo CHtml::encode($data->USER_ID); ?>
	<br />

	*/ ?>

</div>