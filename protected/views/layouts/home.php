<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/site.css" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Connect</title>

    </head>
    <body style="background-color:white">
        <div class="header">
            <h1  class="pull-left"> Connect! </h1> 
            <?php
            $this->widget('bootstrap.widgets.TbButton', array(
                'buttonType' => 'link',
                'type' => 'primary',
                'label' => 'SignUp',
                'url' => 'index.php?r=userLoginModel/create',
                'htmlOptions' => array('class' => 'pull-right btn btn-large btn-danger')
            ));
            ?>


        </div>
        <div class="container-fluid" >
            <div id="layout" class="left-container">
                <div class="row-fluid">
                    <div class="span6">
                        <p class="lead heading_em">Make Friends !</p>
                        <p class="">Make new Friends We'll Give Suggestions!</p>
                    </div>
                    <div class="span6">
                        <p class="lead heading_em">Make Friends !</p>
                        <p class="">Make new Friends We'll Give Suggestions!</p>
                    </div>

                </div>
                <div class="row-fluid">
                    <div class="span6">
                        <p class="lead heading_em">Make Friends !</p>
                        <p class="">Make new Friends We'll Give Suggestions!</p>
                    </div>
                    <div class="span6">
                        <p class="lead heading_em">Make Friends !</p>
                        <p class="">Make new Friends We'll Give Suggestions!</p>
                    </div>

                </div>
                <br/><br/>

                <div class="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <img  src="images/tulips.jpeg" alt="Tulips" />
                            <div class="carousel-caption">
                                <h1>Capture Family Moments !</h1>
                                <p class="lead">With this site capture your family info and keep these memories with you !</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/water.jpeg" />
                            <div class="carousel-caption">
                                <h1> Make Friends !</h1>
                                <p class="lead">Don't just make friends with people you know. We will recommend you friends! </p>
                            </div>
                        </div>
                    </div>
                    <a class='left carousel-control' href='#siteCarousel' data-slide="prev">&lsaquo;</a>
                    <a class='right carousel-control' href="#myCarousel" data-slide="next">&rsaquo;</a>
                </div> 
            </div>

            <div class="signup">
                <?php
                $this->widget('bootstrap.widgets.TbAlert', array(
                    'block' => true,
                    'fade' => true,
                    'closeText' => '&times;',
                    'alerts' => array(
                        'error' => array('block' => true, 'fade' => true),
                )));
                ?>
                <?php echo $content; ?>
            </div>



            <footer class='sitefooter'>
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
            </footer>
        </div>
    </body>
</html>

