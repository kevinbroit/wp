<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>



<?php
	/*if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}*/
?>
	<div id="primary">
		<div id="content">

        <body class="index">

        <!-- Google Tag Manager -->
        <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TBR9G4"
                          height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-TBR9G4');</script>
        <!-- End Google Tag Manager -->


        <div class="navigation-bar-mobile show-for-small">
            <?php writeContentByPageTitle('navigation');?>
        </div>

        <section id="banner">
            <?php writeContentByPageTitle('start_banner');?>
        </section>

        <nav>
            <div class="row">
                <div class="twelve columns">
                    <ul class="main-navi navigation-bar navigation-bar hide-for-small">
                        <li class="active">
                            <a class="active" href="/">Start</a>
                        </li>
                        <li>
                            <a href="agentur/">Agentur</a>
                            <ul>
                                <li>
                                    <a href="/agentur/so-sind-wir/">So ist For Sale Digital</a>
                                </li>
                                <li>
                                    <a href="/agentur/e-commerce/">E-COMMERCE</a>
                                </li>
                                <li>
                                    <a href="/agentur/m-commerce/">M-COMMERCE</a>
                                </li>
                                <li>
                                    <a href="/agentur/multichannel/">MULTICHANNEL</a>
                                </li>
                                <li>
                                    <a href="/agentur/travel/">TRAVEL</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/arbeiten/">Arbeiten</a>
                            <ul>
                                <li>
                                    <a href="/arbeiten/berge-meer/">Berge &amp; Meer</a>
                                </li>
                                <li>
                                    <a href="/arbeiten/blume2000/">Blume 2000</a>
                                </li>
                                <li>
                                    <a href="/arbeiten/die-besten-3/">Die Besten 3</a>
                                </li>
                                <li>
                                    <a href="/arbeiten/dpv/">DPV</a>
                                </li>
                                <li>
                                    <a href="/arbeiten/eloma/">Eloma</a>
                                </li>
                                <li>
                                    <a href="/arbeiten/lensbest/">Lensbest</a>
                                </li>
                                <li>
                                    <a href="/arbeiten/liebherr/">Liebherr</a>
                                </li>
                                <li>
                                    <a href="/arbeiten/loewen-hotel-montafon/">Löwen Hotel</a>
                                </li>
                                <li>
                                    <a href="/arbeiten/ltur/">L’Tur</a>
                                </li>
                                <li>
                                    <a href="/arbeiten/mediamarkt/">Media Markt</a>
                                </li>
                                <li>
                                    <a href="/arbeiten/monoplan/">Monoplan</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/leistungen/">Leistungen</a>
                            <ul>
                                <li>
                                    <a href="/leistungen/das-koennen-wir/">Unsere Leistungen</a>
                                </li>
                                <li>
                                    <a href="/leistungen/launch-relaunch/">Launch &amp; Relaunch</a>
                                </li>
                                <li>
                                    <a href="/leistungen/facelift-optimierung/">Facelift &amp; Optimierung</a>
                                </li>
                                <li>
                                    <a href="/leistungen/responsive-webdesign/">Responsive Webdesign</a>
                                </li>
                                <li>
                                    <a href="/leistungen/technik-umsetzung/">Technik &amp; Umsetzung</a>
                                </li>
                                <li>
                                    <a href="/leistungen/betrieb-betreuung/">Betrieb &amp; Betreuung</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/teams/">Teams</a>
                            <ul>
                                <li>
                                    <a href="/teams/so-arbeiten-wir/">Unsere Teams</a>
                                </li>
                                <li>
                                    <a href="/teams/strategie-beratung/">Strategie &amp; Beratung</a>
                                </li>
                                <li>
                                    <a href="/teams/konzeption-text/">Konzeption &amp; Text</a>
                                </li>
                                <li>
                                    <a href="/teams/gestaltung/">Gestaltung</a>
                                </li>
                                <li>
                                    <a href="/teams/entwicklung-produktion/">Entwicklung &amp; Produktion</a>
                                </li>
                                <li>
                                    <a href="/teams/projektmanagement/">Projektmanagement</a>
                                </li>
                                <li>
                                    <a href="/teams/qualitaetsmanagement/">Qualitätsmanagement</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/mehr-for-sale/">Mehr For Sale</a>
                        </li>
                        <li>
                            <a href="/presse/"></a>
                            <ul>
                                <li>
                                    <a href="/presse/pressemitteilungen/">Pressemitteilungen</a>
                                </li>
                                <li>
                                    <a href="/presse/downloads/">Downloads</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/jobs/"></a>
                            <ul>
                                <li>
                                    <a href="/jobs/stellenangebote/">Alle Stellenangebote</a>
                                </li>
                                <li>
                                    <a href="/jobs/mitarbeiten/">Mitarbeiten bei For Sale Digital</a>
                                </li>
                            </ul>
                        </li>
                    </ul><ul class="side-navi navigation-bar-sub hide-for-small">
                        <li>
                            <a href="/presse/">Presse</a>
                        </li>
                        <li>
                            <a href="/kontakt/">Kontakt</a>
                        </li>
                        <li>
                            <a href="/jobs/">Jobs [7]</a>
                        </li>
                    </ul>            </div>
            </div>
        </nav>

        <section id="main-content">
            <div class="row">
                <?php writeContentByPageTitle('start');?>
            </div>

            <div class="twelve columns blog">
                <h2>Neues von For Sale Digital.</h2>
                <ul class="accordion" itemscope itemtype="http://schema.org/Blog">
                    <?php writeContentByPageTitle('start_neues');?>
                </ul>
            </div>

            </div>
        </section>

        <div id="megadrop-foot" class="foot show-for-small">
            <a href="#top" class="button">NACH OBEN</a>
            <div id="megadrop-foot-navi">
            </div>
        </div>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php

get_footer();
