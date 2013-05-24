

<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'login-form',
    'htmlOptions' => array('class' => 'form-signin'),
    'enableClientValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => true
    ),
        ));
?>

<h2 class="form-signin-heading">Sign In !</h2>
<?php echo $form->textFieldRow($model, 'username', array('class' => 'input-block-level', 'placeholder' => 'username')); ?>

<?php echo $form->passwordFieldRow($model, 'password', array('class' => 'input-block-level', 'placeholder' => 'password')); ?>

<?php echo $form->checkBoxRow($model, 'rememberMe'); ?>
<?php
$this->widget('bootstrap.widgets.TbButton', array(
    'buttonType' => 'submit',
    'type' => 'primary',
    'label' => 'Login',
    'htmlOptions' => array('class' => 'btn btn-large btn-primary')
));
?>


<?php $this->endWidget(); ?>

<!-- form -->
