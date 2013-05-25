<?php
/* @var $this FamilyRegistrationController */
/* @var $model FamilyRegistration */
/* @var $form CActiveForm */
?>


<div class="center-wrapper">
    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'family-registration-form',
        'htmlOptions' => array('class'=>'form-signin'),
        'enableAjaxValidation' => false,
    ));
    ?>
<h3>Register Family Member </h3>
    <p class="note">Fields with <span class="required">*</span> are required.</p>
    <?php echo $form->textFieldRow($model, 'FAMILY_NAME', array('size' => 60, 'maxlength' => 200)); ?>
    <?php echo $form->textFieldRow($model, 'FAMILY_EMAIL_ID', array('size' => 60, 'maxlength' => 200)); ?>
    <?php echo $form->textFieldRow($model, 'FAMILY_PHONE_NUMBER', array('size' => 60, 'maxlength' => 200)); ?>
    <?php echo $form->dropdownListRow($model, 'registrationId', CHtml::listData(RelationMaster::model()->findAll(), 'FAMILY_REL_ID', 'FAMILY_REL_MST')); ?>
    <?php echo $form->textAreaRow($model, 'FAMILY_DESC', array('size' => 60, 'maxlength' => 200)); ?>

    <div clas="vertical-spacer"></div>
    <div class="inline">
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'submit',
        'type' => 'primary',
        'label' => 'Save',
    ));?>
        <div class="horizontalspacersmall"></div>
    <?php $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'reset',
        'label' => 'Reset',
    ));
    ?>
    </div>

    <?php $this->endWidget(); ?>
    </div>

<!-- form -->