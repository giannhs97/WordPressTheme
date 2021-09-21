<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width - device - width, initial-scale = 1.0">
    <meta http-equiv = "X-UA-Compatible" content = "ie = edge">  
    <title><?php wp_title('|', true, 'right'); ?>First Theme Try</title>

    <?php wp_head();?>

</head>

<body>
    <header>
        <h1><a href="takhs.test/home">e-Grapes</a></h1>
        <div class="img"><?php dynamic_sidebar('Header Img Widget'); ?></div>
        <div class="social"><?php dynamic_sidebar('Social Media'); ?></div>

        <nav>
            <div class="top-nav">
                <div class="slice"></div>
                <div class="slice"></div>
                <div class="slice"></div>
                <div class="slice"></div>
            </div>
            <?php wp_nav_menu(array('theme_location' => 'main_menu_header'));?>
        </nav>  
        
        
    </header>
    
     



