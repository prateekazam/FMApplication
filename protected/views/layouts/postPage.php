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
        <link href="css/site.css" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body style="background-color:white ">
        <div class="headermain">
            <h1  class="pull-left"> Connect! </h1> 
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
        <div class="container-fluid">
            <div class="wpleft-container">

                <ul class="nav nav-tabs nav-stacked">
                    <?php
                    $this->widget('bootstrap.widgets.TbMenu', array(
                        'type' => 'list',
                        'items' => array(
                            array('label' => 'Family Registration', 'icon' => 'home', 'url' => 'index.php?r=familyRegistration/create', 'active' => true),
                            array('label' => 'Family Tree', 'icon' => 'home', 'url' => '#'),
                            array('label' => 'ANOTHER LIST HEADER'),
                            array('label' => 'Profile', 'icon' => 'user', 'url' => '#'),
                            array('label' => 'Settings', 'icon' => 'cog', 'url' => '#'),
                            array('label' => 'Help', 'icon' => 'flag', 'url' => '#'),
                        ),
                    ));
                    ?>
            </div>

            <div class="wpcenter-container"><p><?php echo $content; ?></p></div>
            <div class="wpright-container"><p>adasd</p></div>


            <div class="sitefooter">
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
        </div>
    </body>

</html>
