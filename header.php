<?php
/**
 * The template for displaying header
 */
?>
<?php wp_head() ?>

<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]-->
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
    <title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Remove if you're not building a responsive site. (But then why would you do such a thing?) -->
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico"/>
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/styles/css/valoisa.css" type="text/css">
</head>
<body <?php body_class(); ?>>
    <div class="top-nav">
        <nav>
            <?php wp_nav_menu( array( 'theme_location' => 'top-menu' ) ); ?>
            <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
                <div><input type="text" size="put_a_size_here" name="s" id="s" value="Write your search and hit Enter" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
                    <input type="submit" id="searchsubmit" value="Search" class="btn" />
                </div>
            </form>
        </nav>
    </div>
    <div class="main-nav">
        <nav>
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </nav>
    </div>
<div class="container">