<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Homepage of Blue Mediterranean Grill at 54 E State St, Doylestown, PA 18901. Website design by Joshua Tscheschlog - 2018.">
        <meta name="author" content="Joshua Tscheschlog">

        <title><?php echo get_bloginfo( 'name' ); ?></title>
        <link href="<?php echo get_bloginfo('template_directory'); ?>/css/blu03.css" rel="stylesheet">
        <!--
        <link href="<?php echo get_bloginfo('template_directory'); ?>/css/screensize.css" rel="stylesheet">
        -->
        <link href="https://fonts.googleapis.com/css?family=Spectral+SC" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <?php wp_head();?>
    </head>
    <script type="text/javascript">
        function fadeIn(obj) {
            $(obj).fadeIn(2500);
        }
        function fadeInSlow(obj) {
            $(obj).fadeIn(4500);
        }
    </script>
    <body>
        <div id="wrap">
            <div id="navigation">
                <div id="navigation_bar" class="">
                    <?php wp_list_pages( '&title_li=' ); ?>
                    <span><div class="nav-item nav-section" id="nav-right">BYOB</div></span>
                    <span><div class="nav-item nav-section" id="nav-right"><img src="<?php echo get_bloginfo('template_directory'); ?>/images/if_phone_1055012.png"><a href="tel:267-880-6880">267-880-6880</a></div></span>
                </div>
            </div>