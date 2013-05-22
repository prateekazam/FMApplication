<?php
/* @var $this FamilyPhotoController */
/* @var $model FamilyPhoto */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'family-photo-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array('enctype' => 'multipart/form-data')
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
    <?php echo $form->textFieldRow($model, 'FAMILY_ID'); ?>
    <?php echo $form->error($model, 'FAMILY_ID'); ?>
    <?php echo $form->fileFieldRow($model, 'IMAGE'); ?>
    <?php echo $form->error($model, 'IMAGE'); ?>
    <?php echo $form->textFieldRow($model, 'USER_ID'); ?>
    <?php echo $form->error($model, 'USER_ID'); ?>
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'submit',
        'type' => 'primary',
        'label' => 'Save',
    ));
    $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'reset',
        'label' => 'Reset',
    ));
    ?>

    <?php $this->endWidget(); ?>

</div><!-- form -->