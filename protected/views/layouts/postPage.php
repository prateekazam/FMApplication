<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Updates</title>
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
        <link href="css/wallposts.css" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body style="background-color:white ">
        <div class="headermain">
            <h1  class="pull-left"> 
                <?php
                $this->widget('bootstrap.widgets.TbButton', array(
                    'buttonType' => 'link',
                    'type' => 'primary',
                    'label' => 'Home',
                    'url' => array('site/home'),
                    'htmlOptions' => array('class' => 'pull-right btn ')
                ));
                ?>
            </h1> 
            <?php
            $this->widget('bootstrap.widgets.TbButton', array(
                'buttonType' => 'link',
                'type' => 'primary',
                'label' => 'Logout',
                'url' => 'index.php?r=/site/logout',
                'htmlOptions' => array('class' => 'pull-right btn btn-large btn-danger')
            ));
            ?>
        </div>
        <div class="mycontainer">
            <div class="wpcenter-container">

                <?php echo $content; ?></div> 
            <div class="wpleft-container">
                <ul class="nav nav-tabs nav-stacked">
                    <?php
                    $this->widget('bootstrap.widgets.TbMenu', array(
                        'type' => 'list',
                        'items' => array(
                            array('label' => 'Family Registration', 'icon' => 'user', 'url' => array('familyRegistration/create'), 'visible' => !Yii::app()->user->hasState("familyId")),
                            array('label' => 'Edit Profile', 'icon' => 'user', 'url' => array('userLoginModel/update')),
                            array('label' => 'View Profile', 'icon' => 'user', 'url' => array('userLoginModel/view')),
                            array('label' => 'Hobbies', 'icon' => 'home', 'url' => array('fmUserHobbies/create')),
                            array('label' => 'Address', 'icon' => 'cog', 'url' => array('FmAddressMst/create')),
                            array('label' => 'Upload Photo', 'icon' => 'cog', 'url' => array('FmUserPhotos/create')),
                            array('label' => 'Family Tree', 'icon' => 'home', 'url' => array('FmUserFamilyRelationMap/index')),
                            array('label' => 'Help', 'icon' => 'flag', 'url' => '#'),
                        ),
                    ));
                    ?>
            </div>

            <div class="wpright-container">adasdasdasdas dasdasdasdasdasdasd</div>
        </div>
        <div class="sitefooter">
            <hr class="footer-divider"/>
            <ul class="inline  pull-right">
                <li>
                    <a href='policies.html' class="pull-right" >Policies</a>
                </li>
                <li>
                    <a href='policies.html' class="pull-right" >About Connect</a>
                </li>
                <li>
                    <a href='policies.html' class="pull-right" >Help!</a>
                </li>
            </ul>
        </div>   

    </body>

</html>
