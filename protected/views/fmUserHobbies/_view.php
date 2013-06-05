<?php
/* @var $this FmUserHobbiesController */
/* @var $data FmUserHobbies */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('USER_HOBBIES_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->USER_HOBBIES_ID), array('view', 'id'=>$data->USER_HOBBIES_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USER_ID')); ?>:</b>
	<?php echo CHtml::encode($data->USER_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CREATED_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->CREATED_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HOBBIES_ID')); ?>:</b>
	<?php echo CHtml::encode($data->HOBBIES_ID); ?>
	<br />


</div>