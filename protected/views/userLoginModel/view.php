<?php
echo "<h4>User Information</h4>";
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'TITLE',
        'FIRST_NAME',
        'MIDDLE_NAME',
        'LAST_NAME',
        'PHONE_NUMBER',
        'MOBILE_NUMBER',
        'EMAIL_ID',
        'DOB',
    ),
));
?>


<?php

if ($modelFamily != null) {
    echo "<h4>Family Information</h4>";
    $this->widget('zii.widgets.CDetailView', array(
        'data' => $modelFamily,
        'attributes' => array(
            'FAMILY_NAME',
            'DOR',
            'FAMILY_EMAIL_ID',
            'FAMILY_PHONE_NUMBER',
            'FAMILY_DESC',
            'CREATED_BY',
        ),
    ));
}
?>
