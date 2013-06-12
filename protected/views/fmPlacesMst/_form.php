<?php
/* @var $this FmPlacesMstController */
/* @var $model FmPlacesMst */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'fm-places-mst-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
    <?php echo 'Select Country' ?>
    <?php
    echo CHtml::dropDownList('country_id', '', CHtml::listData(FmPlacesMst::model()->findAll('type="Country" and language="ENG" order by name ASC'), 'woeid', 'name'), array(
        'ajax' => array(
            'type' => 'POST', //request type
            'url' => $this->createUrl('FmPlacesMst/GetStateByCountryId'), //url to call.
            'update' => '#state_id', //selector to update
        ))
    );
    ?>
    <br></br>
    <?php echo 'Select Select' ?>
    <?php
    echo CHtml::dropDownList('state_id', '', array(), array('ajax' => array(
            'type' => 'POST', //request type
            'url' => $this->createUrl('FmPlacesMst/GetCountyByStateId'), //url to call.
            'update' => '#county_id', //selector to update
    )));
    ?>
    <br></br>
    <?php echo 'Select County' ?>
    <?php
    echo CHtml::dropDownList('county_id', '', array(), array('ajax' => array(
            'type' => 'POST', //request type
            'url' => $this->createUrl('FmPlacesMst/GetTownByCountyId'), //url to call.
            'update' => '#town_id', //selector to update
    )));
    ?>
    <br></br>
    <?php echo 'Select Town' ?>
    <?php
    echo CHtml::dropDownList('town_id', '', array(), array('ajax' => array(
            'type' => 'POST', //request type
            'url' => $this->createUrl('FmPlacesMst/GetPinCodeByTownId'), //url to call.
            'update' => '#pin_code', //selector to update
    )));
    ?>
    <br></br>
    <?php
    echo CHtml::dropDownList('pin_code', '', array(), array('ajax' => array(
            'type' => 'POST', //request type
            'url' => $this->createUrl('FmPlacesMst/GetPinCodeByTownId'), //url to call.
            'update' => '#town123_id', //selector to update
    )));
    ?>

    <?php echo $form->errorSummary($model); ?>


    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->