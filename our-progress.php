<?php
$css_files=null;
$js_files=array('js/jquery.easing-1.3.min.js');
$body_id = 'our-progress'; //used for page unique css styles
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
            <h1>Our Progress</h1>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad veniam, quis nostrud exerci tation suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
            <p class="learn-more">Click the tabs above to learn more</a>
        </div>
        

        <?php include ('includes/footer.php') ?>
        
    </body>
</html>
