<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'user-login-model-form1',
    'enableAjaxValidation' => true,
    'htmlOptions' => array(),
    'enableClientValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => true,
        'validateOnChange' => true,
        'enableAjaxValidation' => true,
    )
        ));
?>
<?php echo $form->errorSummary($model); ?>
<?php echo $form->dropdownListRow($model, 'TITLE', array('Select' => 'Select', 'Mr' => 'Mr', "Miss" => "Miss", 'Dr' => 'Dr'), array('class' => 'input-block-level')); ?>
<?php echo $form->textFieldRow($model, 'FIRST_NAME', array('size' => 45, 'class' => 'input-block-level', 'maxlength' => 45)); ?>

<?php echo $form->textFieldRow($model, 'MIDDLE_NAME', array('size' => 45, 'class' => 'input-block-level', 'maxlength' => 45)); ?>

<?php echo $form->textFieldRow($model, 'LAST_NAME', array('size' => 60, 'class' => 'input-block-level', 'maxlength' => 200)); ?>

<?php echo $form->textFieldRow($model, 'PHONE_NUMBER', array('class' => 'input-block-level')); ?>

<?php echo $form->textFieldRow($model, 'MOBILE_NUMBER', array('class' => 'input-block-level')); ?>
<!-- <?php
//$this->widget('ext.editable.EditableField', array(
//    'type' => 'text',
//    'model' => $model,
//    'attribute' => 'PHONE_NUMBER',
//    'url' => $this->createUrl('site/editable'), //url for submit data
//));
//
?>  -->

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
