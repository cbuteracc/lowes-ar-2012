<div class="footer" id="footer-<?= $body_id ?>"">
    <div class="footer-content">
        <ul class="left">
            <li class="download-pdf">Download PDF's</li>
            <li>2012 Annual Report</li>
        </ul>
        <ul class="right">
            <li><a href="">Lowes.com</a></li>
            <li><a href="">Investor Relations</a></li>
            <li><a href="">Social Responsibility</a></li>
            <li class="last"><a href="">ShareThis</a></li>
        </ul>
    </div>
     <div class="blue-bar"></div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <?= include_js($js_files) ?>



<?php function include_js($js_files=null)
{
    if ($js_files)
    foreach($js_files as $js_file)
        if(strpos($js_file, '.js'))
            echo '<script type="text/javascript" src="' . $js_file .'"></script>' . PHP_EOL;
        else
            echo '<script type="text/javascript" src="' . $js_file .'.js"></script>' . PHP_EOL;

}
?>


