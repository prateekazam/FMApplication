<?php
/* @var $this FmUserPhotosController */
/* @var $model FmUserPhotos */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'fm-user-photos-form',
        'type' => 'horizontal',
        'enableAjaxValidation' => true,
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
            'validateOnChange' => true,
            'enableAjaxValidation' => true,
        ),
        'htmlOptions' => array(
            'enctype' => 'multipart/form-data',
        ),
    ));
    ?>



    <!--<div class="row">  
    <?php echo $form->labelEx($model, 'USER_ID'); ?>
    <?php echo $form->textField($model, 'USER_ID'); ?>
    <?php echo $form->error($model, 'USER_ID'); ?>
       </div>
   
       <div class="row">
    <?php echo $form->labelEx($model, 'IMAGE_NAME'); ?>
    <?php echo $form->textField($model, 'IMAGE_NAME', array('size' => 45, 'maxlength' => 45)); ?>
    <?php echo $form->error($model, 'IMAGE_NAME'); ?>
       </div>
   
       <div class="row">
    <?php echo $form->labelEx($model, 'IMAGE_PATH_LOC'); ?>
    <?php echo $form->textField($model, 'IMAGE_PATH_LOC', array('size' => 60, 'maxlength' => 500)); ?>
    <?php echo $form->error($model, 'IMAGE_PATH_LOC'); ?>
       </div>
   
       <div class="row">
    <?php echo $form->labelEx($model, 'FOLDER_NAME'); ?>
    <?php echo $form->textField($model, 'FOLDER_NAME', array('size' => 60, 'maxlength' => 100)); ?>
    <?php echo $form->error($model, 'FOLDER_NAME'); ?> 
       </div>-->
    <?php echo $form->fileFieldRow($model, 'file'); ?>
    <?php echo $form->error($model, 'file'); ?>

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