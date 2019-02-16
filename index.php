<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">
    
<head>
<?php include(THEME_DIR_PHP.'head.php'); ?>
</head>
    
<body class="no-excerpt page-template-portfolio">
    
<!-- Load Bludit Plugins: Site Body Begin -->
<?php Theme::plugins('siteBodyBegin'); ?>
<div class="site">
    
<!-- Navbar -->
<?php include(THEME_DIR_PHP.'navbar.php'); ?>
    
<!-- Blog Posts -->
<?php
    if ($WHERE_AM_I == 'home') {
        include(THEME_DIR_PHP.'home.php');
    } else if ($WHERE_AM_I == 'page') {
        include(THEME_DIR_PHP.'page.php');
    } else {
        include(THEME_DIR_PHP.'category.php');
    }    
    ?>
</div>
    
<!-- Footer -->
<?php include(THEME_DIR_PHP.'footer.php'); ?>

<!-- Include Jquery file from Bludit Core -->
<?php echo Theme::jquery(); ?>
    
<!-- Include JS file from this theme -->
<?php echo Theme::js('js/custom.js'); ?>
<?php echo Theme::js('js/navigation.js'); ?>
<?php echo Theme::js('js/scripts.js'); ?>
<?php echo Theme::js('js/jetpack.js'); ?>
<?php echo Theme::js('js/jetpack-carousel.min.js'); ?>
<?php echo Theme::js('js/devicepx-jetpack.js'); ?>
    
<!-- Load Bludit Plugins: Site Body End -->
<?php Theme::plugins('siteBodyEnd'); ?>
    
</body>
</html>
