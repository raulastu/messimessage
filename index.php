<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->


        <link rel="stylesheet" href="css/normalize.css">
        <link href='css/fonts.css' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
        

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <!-- <link href='http://fonts.googleapis.com/css?family=Clicker+Script' rel='stylesheet' type='text/css'> -->
        <!-- <link href='http://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'> -->
        <!-- <link href='http://fonts.googleapis.com/css?family=Cedarville+Cursive' rel='stylesheet' type='text/css'> -->



    </head>
    <?php
        $m="";  
        if(isset($_GET['m'])){
            $m=$_GET['m'];
        }
    ?>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <!-- <div class="siteHolder animated fadeInDown">
            <h1>messigi.com</h1>
        </div> -->
        <div class="siteHolder animated fadeInDown">
            <h1 style="font-family: Ubuntu; color:#1ba1e2;
                font-size:5em;
                margin:0;">
                Messige.com</h1>
            <h2 style="font-family: Ubuntu; 
                margin:0;"> 
                Make Messi message you!</h2>
            <canvas id="canv" ></canvas>
            <div style="font-family: Ubuntu">Just start typing, see what messi has, and post it on fb</div>
            <input id="message" 
                maxlength="41"  
                class="txtMsg" onkeyup="drawMessiMessage()" type="text" value="<?php echo $m;?>"/>
        </div>
        
        <!-- Add your site or application content here -->
        <!-- <p id="para">Hello world! This is HTML5 Boilerplate.</p> -->

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/canv.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>