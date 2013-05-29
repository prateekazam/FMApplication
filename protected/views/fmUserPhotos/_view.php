<?php
/* @var $this FmUserPhotosController */
/* @var $data FmUserPhotos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('USER_PHOTO_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->USER_PHOTO_ID), array('view', 'id'=>$data->USER_PHOTO_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USER_ID')); ?>:</b>
	<?php echo CHtml::encode($data->USER_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IMAGE_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->IMAGE_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IMAGE_PATH_LOC')); ?>:</b>
	<?php echo CHtml::encode($data->IMAGE_PATH_LOC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FOLDER_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->FOLDER_NAME); ?>
	<br />


</div>