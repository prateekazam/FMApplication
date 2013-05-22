<?php
/* @var $this FamilyPhotoController */
/* @var $data FamilyPhoto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('FAMILY_PHOTO_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->FAMILY_PHOTO_ID), array('view', 'id'=>$data->FAMILY_PHOTO_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FAMILY_ID')); ?>:</b>
	<?php echo CHtml::encode($data->FAMILY_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IMAGE')); ?>:</b>
	<?php echo CHtml::encode($data->IMAGE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USER_ID')); ?>:</b>
	<?php echo CHtml::encode($data->USER_ID); ?>
	<br />


</div>