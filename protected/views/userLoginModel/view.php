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
<?php

if ($userHobbiesList != null) {
    echo "<h4>Hobbies</h4>";
    echo "<ul id=\"hideme\">";
    foreach ($userHobbiesList as $use1) {
        echo "<li>" . $use1->hOBBIES->HOBBIES_NAME . "</li>";
    }

    echo "</ul>";
}
?>

<?php

if ($userAddress != null) {
    echo "<h4>Address</h4>";
    $this->widget('zii.widgets.CDetailView', array(
        'data' => $userAddress,
        'attributes' => array(
            array('name' => 'Country Name', 'value' => $userAddress->countryID->name),
            array('name' => 'State Name', 'value' => $userAddress->stateID->name),
            array('name' => 'County Name', 'value' => $userAddress->countyID->name),
            array('name' => 'Town Name', 'value' => $userAddress->townID->name),
            array('name' => 'Zip Code', 'value' => $userAddress->zipCode->name),
            ),));
}
?>




