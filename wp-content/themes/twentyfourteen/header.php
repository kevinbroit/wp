<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
    <meta name="keywords" content="Internet-Agentur, E-Commerce, Handel, Multichannel, Online-Shops, mobile, Agentur, Hamburg" >
    <meta name="description" content="Wir haben nur ein Ziel: Wir möchten, dass Sie im und mit dem Internet mehr verkaufen. Willkommen bei For Sale Digital, der Internet-Agentur für den Handel." >
    <meta name="author" content="For Sale Digital Internet-Agentur GmbH, Hamburg, www.for-sale-digital.de" >
    <meta name="robots" content="index,follow" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <!--[if lt IE 9]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" ><![endif]-->
    <title>Die Agentur – For Sale Digital Internet-Agentur Hamburg</title>
    <!--[if lt IE 9]> <script type="text/javascript" src="/js/html5.js"></script><![endif]-->
    <script type="text/javascript" src="/js/foundation/modernizr.foundation.js"></script>

    <link href="/favicon.ico" rel="SHORTCUT ICON" >
    <link href="css/foundation.min.css" media="all" rel="stylesheet" type="text/css" >
    <link href="css/style.css" media="all" rel="stylesheet" type="text/css" >
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon" >
    <script type="text/javascript">
        window.onload=function() {
            var mtiTracking = document.createElement('link');
            mtiTracking.type='text/css';
            mtiTracking.rel='stylesheet';
            mtiTracking.href=('https:'==document.location.protocol?'https:':'http:') + '//fast.fonts.com/t/1.css?apiType=css&projectid=1f601e8c-aaf0-4017-a3ca-0093414e7be2';
            (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild( mtiTracking );
        };
    </script>
    <script>
        var gaProperty = 'UA-2312945-2';
        var disableStr = 'ga-disable-' + gaProperty;
        if (document.cookie.indexOf(disableStr + '=true') > -1) {
            window[disableStr] = true;
        }
        function gaOptout() {
            document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
            window[disableStr] = true;
        }
    </script>
    <!-- GoogleAnalytics -->
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-2312945-2']);
        _gaq.push(['_gat._anonymizeIp']);
        _gaq.push(['_trackPageview']);
        _gaq.push(['_trackPageLoadTime']);
        setTimeout('_gaq.push([\'_trackEvent\', \'NoBounce\', \'Over 10 seconds\'])',10000);
        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>

    <?php wp_list_pages( array(
        'authors'      => '',
        'child_of'     => 0,
        'date_format'  => get_option('date_format'),
        'depth'        => 0,
        'echo'         => 1,
        'exclude'      => '',
        'include'      => '',
        'link_after'   => '',
        'link_before'  => '',
        'post_type'    => 'page',
        'post_status'  => 'publish',
        'show_date'    => '',
        'sort_column'  => 'menu_order, post_title',
        'sort_order'   => '',
        'title_li'     => __('Pages'),
        'walker'       => ''
    ) ); ?>

    <?php wp_head(); ?>
</head>

<body>

<header>
    <div class="row">
        <div class="twelve columns">
            <a href="/">For Sale Digital Internet-Agentur - Hamburg</a>
        </div>
    </div>
</header>

<div id="page">
	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		</a>
	</div>
	<?php endif; ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>


			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
		</div>
	</header><!-- #masthead -->

	<div id="main" class="site-main">
