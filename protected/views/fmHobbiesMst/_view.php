<?php
/* @var $this FmHobbiesMstController */
/* @var $data FmHobbiesMst */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('HOBBIES_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->HOBBIES_ID), array('view', 'id'=>$data->HOBBIES_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HOBBIES_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->HOBBIES_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HOBBIES_DESC')); ?>:</b>
	<?php echo CHtml::encode($data->HOBBIES_DESC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HOBBIES_IMAGE_URL')); ?>:</b>
	<?php echo CHtml::encode($data->HOBBIES_IMAGE_URL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CREATED_BY')); ?>:</b>
	<?php echo CHtml::encode($data->CREATED_BY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CREATED_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->CREATED_DATE); ?>
	<br />


</div>