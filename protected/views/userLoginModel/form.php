<?php
/* @var $this UserLoginModelController */
/* @var $model UserLoginModel */
/* @var $form CActiveForm */
?>


<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'user-login-model-form',
    'enableAjaxValidation' => true,
    'htmlOptions' => array('class' => 'form-signin'),
    'enableClientValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => true,
        'validateOnChange' => true,
        'enableAjaxValidation' => true,
    )
        ));
?>
<h2 class="form-signin-heading">Sign Up !</h2>
<p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->dropdownListRow($model, 'TITLE', array('Select' => 'Select', 'Mr' => 'Mr', "Miss" => "Miss", 'Dr' => 'Dr'), array('class' => 'input-block-level')); ?>

<?php echo $form->textFieldRow($model, 'USER_NAME', array('size' => 60, 'class' => 'input-block-level', 'maxlength' => 200)); ?>

<?php echo $form->passwordFieldRow($model, 'PASSWORD', array('size' => 60, 'class' => 'input-block-level', 'maxlength' => 200)); ?>

<?php echo $form->passwordFieldRow($model, 'repeat_password', array('size' => 60, 'class' => 'input-block-level', 'maxlength' => 200)); ?>

<?php echo $form->textFieldRow($model, 'FIRST_NAME', array('size' => 45, 'class' => 'input-block-level', 'maxlength' => 45)); ?>

<?php echo $form->textFieldRow($model, 'MIDDLE_NAME', array('size' => 45, 'class' => 'input-block-level', 'maxlength' => 45)); ?>

<?php echo $form->textFieldRow($model, 'LAST_NAME', array('size' => 60, 'class' => 'input-block-level', 'maxlength' => 200)); ?>

<?php echo $form->textFieldRow($model, 'PHONE_NUMBER', array('class' => 'input-block-level')); ?>

<?php echo $form->textFieldRow($model, 'MOBILE_NUMBER', array('class' => 'input-block-level')); ?>

<?php echo $form->dropdownListRow($model, 'GENDER', array('Select' => 'Select', 0 => 'Male', 1 => "Female",), array('class' => 'input-block-level')); ?>

<?php echo $form->textFieldRow($model, 'EMAIL_ID', array('size' => 45, 'class' => 'input-block-level', 'maxlength' => 45)); ?>
<?php echo $form->labelEx($model, 'DOB'); ?>
<?php
$this->widget('zii.widgets.jui.CJuiDatePicker', array(
    //'name' => 'DOB',
    'model' => $model,
    'attribute' => 'DOB',
    'value' => $model->DOB,
    // additional javascript options for the date picker plugin
    'options' => array(
        'showAnim' => 'fold',
        'defaultDate' => $model->DOB,
        'dateFormat' => 'yy-mm-dd'
    ),
    'htmlOptions' => array(
        'style' => 'height:20px;',
        'class' => 'input-block-level'
    ),
));
?>
<?php echo $form->error($model, 'DOB'); ?>
<div class="inline center-wrapper">
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'submit',
        'type' => 'primary',
        'label' => 'Save',
    ));
    ?>
    <div class="horizontalspacersmall"></div>
    <?php
    $this->widget('bootstrap.widgets.TbButton', array(
        'buttonType' => 'reset',
        'label' => 'Reset',
    ));
    ?>
</div>
<?php $this->endWidget(); ?>
<!-- form -->