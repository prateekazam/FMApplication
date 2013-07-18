<?php
/* @var $this FmUserFamilyRelationMapController */
/* @var $data FmUserFamilyRelationMap */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('USER_FAMILY_MAP_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->USER_FAMILY_MAP_ID), array('view', 'id'=>$data->USER_FAMILY_MAP_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FAMILY_ID')); ?>:</b>
	<?php echo CHtml::encode($data->FAMILY_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FAMILY_REL_ID')); ?>:</b>
	<?php echo CHtml::encode($data->FAMILY_REL_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USER_ID')); ?>:</b>
	<?php echo CHtml::encode($data->USER_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CREATED_BY')); ?>:</b>
	<?php echo CHtml::encode($data->CREATED_BY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CREATED_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->CREATED_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USER_LEVEL_ID')); ?>:</b>
	<?php echo CHtml::encode($data->USER_LEVEL_ID); ?>
	<br />


</div>