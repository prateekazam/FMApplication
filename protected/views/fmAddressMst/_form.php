<?php
/* @var $this FmAddressMstController */
/* @var $model FmAddressMst */
/* @var $form CActiveForm */
?>
<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'fm-address-mst-form',
    'htmlOptions' => array('class' => 'form-signin'),
    'enableAjaxValidation' => false,
        ));
?>
<p class="note">Fields with <span class="required">*</span> are required.</p>
<?php echo $form->errorSummary($model); ?>

<?php echo $form->labelEx($model, 'ADDRESS_LINE_1'); ?>
<?php echo $form->textField($model, 'ADDRESS_LINE_1', array('size' => 100, 'maxlength' => 600)); ?>
<?php echo $form->error($model, 'ADDRESS_LINE_1'); ?>
<?php echo $form->labelEx($model, 'ADDRESS_LINE_2'); ?>
<?php echo $form->textField($model, 'ADDRESS_LINE_2', array('size' => 100, 'maxlength' => 500)); ?>
<?php echo $form->error($model, 'ADDRESS_LINE_2'); ?>
<?php
$data = CHtml::listData(FmPlacesMst::model()->findAll('type="Country" and language="ENG" order by name ASC'), 'woeid', 'name');
$static = array(
    'Select' => Yii::t('Select', 'Select'),
);
echo $form->dropdownListRow($model, 'COUNTRY_ID', $static + $data, array(
    'ajax' => array(
        'type' => 'POST', //request type
        'url' => $this->createUrl('FmPlacesMst/GetStateByCountryId'), //url to call.
        'update' => '#FmAddressMst_STATE_ID', //selector to update
    ))
);
?>
<?php
echo $form->dropdownListRow($model, 'STATE_ID', array(), array('ajax' => array(
        'type' => 'POST', //request type
        'url' => $this->createUrl('FmPlacesMst/GetCountyByStateId'), //url to call.
        'update' => '#FmAddressMst_COUNTY_ID', //selector to update
)));
?>
<?php
echo $form->dropdownListRow($model, 'COUNTY_ID', array(), array('ajax' => array(
        'type' => 'POST', //request type
        'url' => $this->createUrl('FmPlacesMst/GetTownByCountyId'), //url to call.
        'update' => '#FmAddressMst_TOWN_ID', //selector to update
)));
?>
<?php
echo $form->dropdownListRow($model, 'TOWN_ID', array(), array('ajax' => array(
        'type' => 'POST', //request type
        'url' => $this->createUrl('FmPlacesMst/GetPinCodeByTownId'), //url to call.
        'update' => '#FmAddressMst_PIN_CODE', //selector to update
)));
?>
<?php
echo $form->dropdownListRow($model, 'PIN_CODE', array());
?>
<?php echo $form->radioButtonListInlineRow($model, 'ADDRESS_TYPE', array('Y' => 'Yes', 'M' => 'No')); ?>
<?php echo $form->error($model, 'ADDRESS_TYPE'); ?>
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