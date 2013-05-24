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
            <a class="pull-right" href="signout" ><i class="icon-off"></i></a>
        </div>
        <div class="container-fluid">
            <div class="wpcenter-container">  <?php echo $content; ?></div>
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
