<?php

function include_css($css_files=null)
{
     if ($css_files)
    foreach($css_files as $css_file)
        echo '<link rel="stylesheet" href="' . $css_file .'" type="text/css" media="screen"/>' . PHP_EOL;
}



?>


        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?= $title ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=1024px, initial-scale=1, maximum-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/lowes.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,300italic,400italic,700italic|Rokkitt:400,700' rel='stylesheet' type='text/css'>    
<!--[if IE]>
<link href="http://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Lato:300italic" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Lato:400italic" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Lato:700italic" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Rokkitt:400" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Rokkitt:700" rel="stylesheet" type="text/css">
<![endif]-->

            
            
            
            <?php
          include_css($css_files);
          ?>
