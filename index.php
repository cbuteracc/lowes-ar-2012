<?php
$css_files=null;
$js_files=array('js/jquery.easing-1.3.min.js', 'js/icon.js','js/home.js','js/main.js');
$body_id = 'home'; //used for page unique css styles
$title = '2012 Lowes Annual Report';
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    
    <head>
<?php include ('includes/header.php') ?>
    </head>
    <body id="<?= $body_id ?>">
        <!-- conflicting svn code -->
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <?php include('includes/top-menu.php') ?>
        
        <div id="home-content-center" >"
            <div id="home-content-boundary" >
                <img class="icon" id="icon-1" src="img/home/icons/icon-1.png" />
                <img class="icon" id="icon-2" src="img/home/icons/icon-2.png" />
                <img class="icon" id="icon-3" src="img/home/icons/icon-3.png" />
                <img class="icon" id="icon-4" src="img/home/icons/icon-4.png" />
                <img class="icon" id="icon-5" src="img/home/icons/icon-5.png" />
                <img class="icon" id="icon-6" src="img/home/icons/icon-6.png" />
                <img class="icon" id="icon-7" src="img/home/icons/icon-7.png" />
                <img class="icon" id="icon-8" src="img/home/icons/icon-8.png" />
                <img class="icon" id="icon-9" src="img/home/icons/icon-9.png" />
                <img class="icon" id="icon-10" src="img/home/icons/icon-10.png" />
                <img class="icon" id="icon-11" src="img/home/icons/icon-11.png" />
                <img class="icon" id="icon-12" src="img/home/icons/icon-12.png" />
                <img class="icon" id="icon-13" src="img/home/icons/icon-13.png" />
                <img class="icon" id="icon-14" src="img/home/icons/icon-14.png" />
                <img class="icon" id="icon-15" src="img/home/icons/icon-15.png" />
                <img class="icon" id="icon-16" src="img/home/icons/icon-16.png" />
                <img class="icon" id="icon-17" src="img/home/icons/icon-17.png" />
                <img class="icon" id="icon-18" src="img/home/icons/icon-18.png" />
                <img class="icon" id="icon-19" src="img/home/icons/icon-19.png" />
                <img class="icon" id="icon-20" src="img/home/icons/icon-20.png" />
                <img class="icon" id="icon-21" src="img/home/icons/icon-21.png" />
                <img class="icon" id="icon-22" src="img/home/icons/icon-22.png" />
                <img class="icon" id="icon-23" src="img/home/icons/icon-23.png" />
                <img class="icon" id="icon-24" src="img/home/icons/icon-24.png" />
                <img class="icon" id="icon-25" src="img/home/icons/icon-25.png" />
                <img class="icon" id="icon-26" src="img/home/icons/icon-26.png" />
                <img class="icon" id="icon-27" src="img/home/icons/icon-27.png" />
                <img class="icon" id="icon-28" src="img/home/icons/icon-28.png" />
                <img class="icon" id="icon-29" src="img/home/icons/icon-29.png" />
                <img class="icon" id="icon-30" src="img/home/icons/icon-30.png" />
                <img class="icon" id="icon-31" src="img/home/icons/icon-31.png" />
                <img class="icon" id="icon-32" src="img/home/icons/icon-32.png" />
                <img class="icon" id="icon-33" src="img/home/icons/icon-33.png" />
                <img class="icon" id="icon-34" src="img/home/icons/icon-34.png" />
                <img class="icon" id="icon-35" src="img/home/icons/icon-35.png" />
                <img class="icon" id="icon-36" src="img/home/icons/icon-36.png" />
                <img class="icon" id="icon-37" src="img/home/icons/icon-37.png" />
                <img class="icon" id="icon-38" src="img/home/icons/icon-38.png" />
                
                
                <div class="home-content">
                    <div id="big-logo-container" class="big-logo-container">
                        <img src="img/home/lowes-text.png" id="lowes-text" alt="Lowes" />
                    </div><!-- big-logo-container -->
                    
                    <h1 id="home-h1">Building a Better <br />Home Improvement Experience</h1>
                    <a href="our-progress.php"><div id="green-button">View Our Progress <img src="img/home/green-button-arrow.png" /></div></a>  
                       
                </div><!-- home-content -->
            </div><!-- home-content-centerer-->
        </div><!-- home-content-boundary-->

        <?php include ('includes/footer.php') ?>
        
    </body>
</html>
