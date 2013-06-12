<?php
/* @var $this FmAddressMstController */
/* @var $model FmAddressMst */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'fm-address-mst-form',
        'htmlOptions' => array('class' => 'form-signin'),
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'ADDRESS_TYPE'); ?>
        <?php echo $form->textField($model, 'ADDRESS_TYPE'); ?>
        <?php echo $form->error($model, 'ADDRESS_TYPE'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'ADDRESS_LINE_1'); ?>
        <?php echo $form->textField($model, 'ADDRESS_LINE_1', array('size' => 60, 'maxlength' => 600)); ?>
        <?php echo $form->error($model, 'ADDRESS_LINE_1'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'ADDRESS_LINE_2'); ?>
        <?php echo $form->textField($model, 'ADDRESS_LINE_2', array('size' => 60, 'maxlength' => 500)); ?>
        <?php echo $form->error($model, 'ADDRESS_LINE_2'); ?>
    </div>

    <div class="row">
        <?php
        echo $form->dropdownListRow($model, 'COUNTRY_ID', CHtml::listData(FmPlacesMst::model()->findAll('type="Country" and language="ENG" order by name ASC'), 'woeid', 'name'), array(
            'ajax' => array(
                'type' => 'POST', //request type
                'url' => $this->createUrl('FmPlacesMst/GetStateByCountryId'), //url to call.
                'update' => '#FmAddressMst_STATE_ID', //selector to update
            ))
        );
        ?>
    </div>

    <div class="row">
<?php //echo $form->labelEx($model, 'STATE_ID');  ?>
        <?php //echo $form->textField($model, 'STATE_ID');  ?>
        <?php //echo $form->error($model, 'STATE_ID'); ?>
        <?php
        echo $form->dropdownListRow($model, 'STATE_ID', array(), array('ajax' => array(
                'type' => 'POST', //request type
                'url' => $this->createUrl('FmPlacesMst/GetCountyByStateId'), //url to call.
                'update' => '#FmAddressMst_COUNTY_ID', //selector to update
        )));
        ?>
    </div>

    <div class="row">
<?php //echo $form->labelEx($model, 'COUNTY_ID');  ?>
        <?php //echo $form->textField($model, 'COUNTY_ID');  ?>
        <?php //echo $form->error($model, 'COUNTY_ID'); ?>
        <?php
        echo $form->dropdownListRow($model, 'COUNTY_ID', array(), array('ajax' => array(
                'type' => 'POST', //request type
                'url' => $this->createUrl('FmPlacesMst/GetTownByCountyId'), //url to call.
                'update' => '#FmAddressMst_TOWN_ID', //selector to update
        )));
        ?>
    </div>

    <div class="row">
<?php // echo $form->labelEx($model, 'TOWN_ID');  ?>
        <?php //echo $form->textField($model, 'TOWN_ID');  ?>
        <?php //echo $form->error($model, 'TOWN_ID'); ?>
        <?php
        echo $form->dropdownListRow($model, 'TOWN_ID', array(), array('ajax' => array(
                'type' => 'POST', //request type
                'url' => $this->createUrl('FmPlacesMst/GetPinCodeByTownId'), //url to call.
                'update' => '#FmAddressMst_PIN_CODE', //selector to update
        )));
        ?>
    </div>

    <div class="row">
<?php //echo $form->labelEx($model, 'PIN_CODE');  ?>
        <?php //echo $form->textField($model, 'PIN_CODE', array('size' => 10, 'maxlength' => 10));  ?>
        <?php //echo $form->error($model, 'PIN_CODE'); ?>
        <?php
        echo $form->dropdownListRow($model, 'PIN_CODE', array());
        ?>
    </div>

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

</div><!-- form -->