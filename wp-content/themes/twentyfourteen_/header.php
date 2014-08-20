<?php

    //todo: wrapper wordpress class
function writeContentByPageTitle($page_title)
{
    global $wpdb;
    $page_name_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '". $page_title ."' AND post_type = 'page'");
    $post = get_post($page_name_id);
    $content = apply_filters('the_content', $post->post_content);
    echo $content;
}


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
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html>
<!--<![endif]-->
<head>
    <!DOCTYPE html>
    <!--[if IE 7]><link rel="stylesheet" type="text/css" href="/css/ie7.css"><![endif]-->

    <!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
    <!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
    <!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
    <!--[if gt IE 8]><!-->
    <html class="no-js" lang=de>
    <!--<![endif]-->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
        <meta name="keywords" content="Internet-Agentur, E-Commerce, Handel, Multichannel, Online-Shops, mobile" >
        <meta name="description" content="Wir möchten, dass Sie im und mit dem Internet mehr verkaufen. Willkommen bei der For Sale Digital Internet-Agentur Hamburg – der Agentur für den Handel." >
        <meta name="author" content="For Sale Digital Internet-Agentur GmbH, Hamburg, www.for-sale-digital.de" >
        <meta name="robots" content="index,follow" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <!--[if lt IE 9]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" ><![endif]-->
        <title>For Sale Digital Internet-Agentur Hamburg – die Agentur für den Handel</title>
        <!--[if lt IE 9]> <script type="text/javascript" src="js/html5.js"></script><![endif]-->
        <script type="text/javascript" src="js/foundation/modernizr.foundation.js"></script>

        <link href="favicon.ico" rel="SHORTCUT ICON" >
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
    </head>
</head>
<body>

<div id="page">
    <header>
        <div class="row">
            <div class="twelve columns">
                <a href="/">For Sale Digital Internet-Agentur - Hamburg</a>
            </div>
        </div>
    </header>

    <div id="main" class="site-main">
