<?php
$css_files=null;
$js_files=array('js/jquery.easing-1.3.min.js', 'js/cycle.js', 'js/retail-relevance.js' );
$body_id = 'retail-relevance'; //used for page unique css styles
$title = '2012 Lowes Annual Report | Our Progress';
$progress=true;
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
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <?php include('includes/top-menu.php') ?>
        <?php include('includes/tabs.php') ?>
        
        <div class="content">
            <div class="icons-container">
                <div class="line"></div>
                <a href="#slide1"><div class="icon" id="strategy">
                    <div class="bg"></div>
                    Strategy
                </div></a>
                <a href="#slide2">
                <div class="icon" id="process">
                    <div class="bg"></div>
                    Process
                </div></a>
                <a href="#slide3">
                <div class="icon" id="progress">
                    <div class="bg"></div>
                    Progress
                </div></a>
            </div>
            
            <div id="retail-slider" class="slider">
                <div id="slide-holder" class="slide-holder">
                    <div class="slide" id="slide1"><?php include('includes/retail/slide1.php') ?></div>
                    <div class="slide" id="slide2"><?php include('includes/retail/slide2.php') ?></div>
                    <div class="slide" id="slide3"><?php include('includes/retail/slide3.php') ?></div>
                </div>
            </div>
            <div class="right-column">
                <h3>Commitment</h3>
                <img src="img/progress/play-button.png" class="play-button" />
                <img src="img/progress/retail-right-photo.png" class="photo" />
                <p class="photo-caption">Lowe’s Director of Title, Name Lastname talks about our Product Differentiation</p>
            </div>
            <img class="arrow" id="arrow-left" src="img/progress/icons/arrow-left.png" />
            <img class="arrow" id="arrow-right" src="img/progress/icons/arrow-right.png" />
        </div>
        

        <?php include ('includes/footer.php') ?>
        
    </body>
</html>
