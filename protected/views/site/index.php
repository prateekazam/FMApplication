<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>
<?php
$this->widget('bootstrap.widgets.TbAlert', array(
    'block' => true, // display a larger alert block?
    'fade' => true, // use transitions?
    'closeText' => '&times;', // close link text - if set to false, no close link is displayed
    'alerts' => array(// configurations per alert type
        'success' => array('block' => true, 'fade' => true, 'closeText' => '&times;'), // success, info, warning, error or danger
    ),
));
?>

<?php
$this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    'heading' => 'Welcome to ' . CHtml::encode(Yii::app()->name),
));
?>



<?php $this->endWidget(); ?>

<p>You may change the content of this page by modifying the following two files:</p>

<p>For more details on how to further develop this application, please read
    the <a href="http://www.yiiframework.com/doc/">documentation</a>.
    Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
    should you have any questions.</p>
