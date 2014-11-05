<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title('-','true','right'); ?><?php bloginfo('name'); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <?php wp_head(); ?>
    </head>
	<body <?php body_class(); ?>>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
    
    <div id="hopsin">
    
        <div id="header">
            <div class="logo">
                <a href="<?php bloginfo('home' ); ?> ">
                    <img src="<?php bloginfo('stylesheet_directory');?>/img/metis-logo.svg" alt="Metis Logo">
                </a>
            </div>

            <button class="button mob-menu">
                <i class="icon-menu"></i>
            </button>

            <nav>
                <?php wp_nav_menu( array( 'theme_location' => 'primary', ) ); ?>
            </nav>
        </div><!-- #header -->
    
