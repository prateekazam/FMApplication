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

    <?php echo $form->dropdownListRow($model, 'TITLE', array('Select' => 'Select', 'Mr' => 'Mr', "Miss" => "Miss", 'Dr' => 'Dr')); ?>

    <?php echo $form->textFieldRow($model, 'USER_NAME', array('size' => 60, 'maxlength' => 200)); ?>

    <?php echo $form->passwordFieldRow($model, 'PASSWORD', array('size' => 60, 'maxlength' => 200)); ?>

    <?php echo $form->passwordFieldRow($model, 'repeat_password', array('size' => 60, 'maxlength' => 200)); ?>

    <?php echo $form->textFieldRow($model, 'FIRST_NAME', array('size' => 45, 'maxlength' => 45)); ?>

    <?php echo $form->textFieldRow($model, 'MIDDLE_NAME', array('size' => 45, 'maxlength' => 45)); ?>

    <?php echo $form->textFieldRow($model, 'LAST_NAME', array('size' => 60, 'maxlength' => 200)); ?>

    <?php echo $form->textFieldRow($model, 'PHONE_NUMBER'); ?>

    <?php echo $form->textFieldRow($model, 'MOBILE_NUMBER'); ?>

    <?php echo $form->dropdownListRow($model, 'GENDER', array('Select' => 'Select', 0 => 'Male', 1 => "Female",)); ?>

    <?php echo $form->textFieldRow($model, 'EMAIL_ID', array('size' => 45, 'maxlength' => 45)); ?>
    <?php echo $form->textFieldRow($model, 'DOB'); ?>

<!--    <label for="Event_event_date" class="required">DOB <span class="required">*</span>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'name' => 'publishDate',
            'model' => $model,
            // additional javascript options for the date picker plugin
            'options' => array(
                'showAnim' => 'fold',
            ),
            'htmlOptions' => array(
                'style' => 'height:20px;'
            ),
        ));
        ?>
    </label>-->
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