<?php
/* @var $this FamilyRegistrationController */
/* @var $model FamilyRegistration */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'family-registration-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'FAMILY_NAME'); ?>
        <?php echo $form->textField($model, 'FAMILY_NAME', array('size' => 60, 'maxlength' => 200)); ?>
        <?php echo $form->error($model, 'FAMILY_NAME'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'DOR'); ?>
        <?php echo $form->textField($model, 'DOR'); ?>
        <?php echo $form->error($model, 'DOR'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'FAMILY_EMAIL_ID'); ?>
        <?php echo $form->textField($model, 'FAMILY_EMAIL_ID', array('size' => 60, 'maxlength' => 200)); ?>
        <?php echo $form->error($model, 'FAMILY_EMAIL_ID'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'FAMILY_PHONE_NUMBER'); ?>
        <?php echo $form->textField($model, 'FAMILY_PHONE_NUMBER', array('size' => 60, 'maxlength' => 200)); ?>
        <?php echo $form->error($model, 'FAMILY_PHONE_NUMBER'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'FAMILY_DESC'); ?>
        <?php echo $form->textField($model, 'FAMILY_DESC', array('size' => 60, 'maxlength' => 200)); ?>
        <?php echo $form->error($model, 'FAMILY_DESC'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model, 'FAMILY_NAME'); ?>
        <?php echo $form->textField($model, 'FAMILY_NAME', array('size' => 60, 'maxlength' => 200)); ?>
        <?php echo $form->error($model, 'FAMILY_NAME'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'Relationship with Family'); ?>
        <?php echo $form->dropDownList($model, 'registrationId', CHtml::listData(RelationMaster::model()->findAll(), 'FAMILY_REL_ID', 'FAMILY_REL_MST')); ?>
        <?php echo $form->error($model, 'registrationId'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->