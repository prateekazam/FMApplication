<?php
/* @var $this UserLoginModelController */
/* @var $model UserLoginModel */
/* @var $form CActiveForm */
?>
<div class="wide form">

    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'user-login-model-form',
        'type' => 'horizontal',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
            'validateOnChange' => true,
        )
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>
    <?php echo $form->errorSummary($model); ?>
    <?php echo $form->dropdownListRow($model, 'TITLE', array('Select' => 'Select', 'Mr' => 'Mr', "Miss" => "Miss", 'Dr' => 'Dr')); ?>
    <?php echo $form->error($model, 'TITLE'); ?>
    <?php echo $form->textFieldRow($model, 'USER_NAME', array('size' => 60, 'maxlength' => 200)); ?>
    <?php echo $form->error($model, 'USER_NAME'); ?>
    <?php echo $form->passwordFieldRow($model, 'PASSWORD', array('size' => 60, 'maxlength' => 200)); ?>
    <?php echo $form->error($model, 'PASSWORD'); ?>
    <?php echo $form->passwordFieldRow($model, 'repeat_password', array('size' => 60, 'maxlength' => 200)); ?>
    <?php echo $form->error($model, 'repeat_password'); ?>
    <?php echo $form->textFieldRow($model, 'FIRST_NAME', array('size' => 45, 'maxlength' => 45)); ?>
    <?php echo $form->error($model, 'FIRST_NAME'); ?>
    <?php echo $form->textFieldRow($model, 'MIDDLE_NAME', array('size' => 45, 'maxlength' => 45)); ?>
    <?php echo $form->error($model, 'MIDDLE_NAME'); ?>
    <?php echo $form->textFieldRow($model, 'LAST_NAME', array('size' => 60, 'maxlength' => 200)); ?>
    <?php echo $form->error($model, 'LAST_NAME'); ?>
    <?php echo $form->textFieldRow($model, 'PHONE_NUMBER'); ?>
    <?php echo $form->error($model, 'PHONE_NUMBER'); ?>
    <?php echo $form->textFieldRow($model, 'MOBILE_NUMBER'); ?>
    <?php echo $form->error($model, 'MOBILE_NUMBER'); ?>
    <?php echo $form->dropdownListRow($model, 'GENDER', array('Select' =>'Select', 0 => 'Male', 1 => "Female",)); ?>
    <?php echo $form->error($model, 'GENDER'); ?>
    <?php echo $form->textFieldRow($model, 'EMAIL_ID', array('size' => 45, 'maxlength' => 45)); ?>
    <?php echo $form->error($model, 'EMAIL_ID'); ?>
    <?php echo $form->textFieldRow($model, 'DOB'); ?>
    <?php echo $form->error($model, 'DOB'); ?>
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