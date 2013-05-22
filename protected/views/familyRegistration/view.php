<?php
/* @var $this FamilyRegistrationController */
/* @var $model FamilyRegistration */

$this->breadcrumbs = array(
    'Family Registrations' => array('index'),
    $model->FAMILY_ID,
);

$this->menu = array(
    array('label' => 'List FamilyRegistration', 'url' => array('index')),
    array('label' => 'Create FamilyRegistration', 'url' => array('create')),
    array('label' => 'Update FamilyRegistration', 'url' => array('update', 'id' => $model->FAMILY_ID)),
    array('label' => 'Delete FamilyRegistration', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->FAMILY_ID), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage FamilyRegistration', 'url' => array('admin')),
);
?>

<h1>View FamilyRegistration #<?php echo $model->FAMILY_ID; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'FAMILY_ID',
        'FAMILY_NAME',
        'DOR',
        'FAMILY_EMAIL_ID',
        'FAMILY_PHONE_NUMBER',
        'FAMILY_DESC',
        'CREATED_BY',
    ),
));
?>
