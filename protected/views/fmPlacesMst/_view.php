<?php
/* @var $this FmPlacesMstController */
/* @var $data FmPlacesMst */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('woeid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->woeid), array('view', 'id'=>$data->woeid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iso')); ?>:</b>
	<?php echo CHtml::encode($data->iso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('language')); ?>:</b>
	<?php echo CHtml::encode($data->language); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent')); ?>:</b>
	<?php echo CHtml::encode($data->parent); ?>
	<br />


</div>