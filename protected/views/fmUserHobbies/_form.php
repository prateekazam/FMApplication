<?php
/* @var $this FmUserHobbiesController */
/* @var $model FmUserHobbies */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'fm-user-hobbies-form',
        'enableAjaxValidation' => true,
    ));
    ?>
    <?php echo $form->errorSummary($model); ?>
    <?php
    $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
        'source' => $this->createUrl('FmUserHobbies/GetHobbiesList'),
        'model' => $model,
        'name' => 'NAME_HOBBIES_ID',
        'htmlOptions' => array('placeholder' => 'Select your Hobbies'),
        'options' => array(
            'showAnim' => 'fold',
            'select' => 'js:function(event, ui){ jQuery("#FmUserHobbies_HOBBIES_ID").val(ui.item["id"]);
jQuery("#FmUserHobbies_CREATED_DATE").val(ui.item["value"]);                
}',
        ),
    ));

    echo $form->hiddenField($model, 'HOBBIES_ID');
    ?>
    <div class="inline center-wrapper">
        <?php // echo $form->error($model, 'HOBBIES_ID'); ?>
        <?php
        $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType' => 'submit',
            'type' => 'primary',
            'label' => 'Save',
            'htmlOptions' => array('class' => ' btn-primary')
        ));
        ?>
        <div class="horizontalspacersmall">
            <?php
            $this->widget('bootstrap.widgets.TbButton', array(
                'buttonType' => 'reset',
                'label' => 'Reset',
            ));
            ?>
        </div>
    </div>
    <?php $this->endWidget(); ?>

</div><!-- form -->

