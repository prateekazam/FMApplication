<?php

/* @var $this FmUserFamilyRelationMapController */
/* @var $model FmUserFamilyRelationMap */
?>





<?php

$this->widget(
        'bootstrap.widgets.TbGridView', array(
    'type' => 'striped bordered condensed',
    'dataProvider' => $dataProvider->search(),
    'filter' => $dataProvider,
    'template' => "{items}",
    'columns' => array(
        array('name' => 'fAMILY.FAMILY_NAME', 'header' => 'Family Name'),
        array('name' => 'fAMILYREL.fAMILYRELMST.FAMILY_REL_NAME', 'header' => 'FAMILY_REL_ID'),
        array('name' => 'uSER.FIRST_NAME', 'header' => 'User Name'),
        array('name' => 'CREATED_DATE', 'header' => 'CREATED_DATE'),
    ),
));
;
