<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

<footer>
    <div class="row">
        <div class="twelve columns centered">
            <p itemscope itemtype="http://schema.org/Organization">
                <span class="nobr"><span itemprop="legalName">For Sale Digital Internet-Agentur GmbH</span>,</span>
				<span class="nobr" itemscope itemtype="http://schema.org/PostalAddress">
					<span itemprop="streetAddress">Lange Reihe 29</span>, <span itemprop="postalCode">20099</span> <span itemprop="addressLocality">Hamburg</span>
				</span><br />
                <span class="nobr">Telefon <span itemprop="telephone">+49 (0)40/37 49 10-0</span>,</span>
                <span class="nobr">Fax <span itemprop="faxNumber">+49 (0)40/37 49 10-70</span>,</span>
                <span class="nobr">E-Mail <a href="mailto:info@for-sale-digital.de" itemprop="email">info@for-sale-digital.de</a></span>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="twelve columns link-list">
            <p>
                <a href="/impressum/">Impressum &amp; Datenschutz</a>
                <a href="/kontakt/">Kontakt</a>
                <a href="http://www.facebook.com/forsaledigital" onClick="_gaq.push(['_trackEvent', 'link', 'onKlick', 'fbFooter']);" target="_blank" class="facebook"><span class="icon"></span><span>Facebook</span></a>
                <a href="http://plus.google.com/+ForSaleDigitalInternetAgenturGmbHHamburg" rel="publisher" onClick="_gaq.push(['_trackEvent', 'link', 'onKlick', 'gpFooter']);" target="_blank" class="googleplus"><span class="icon"></span><span>Google+</span></a>
            </p>
        </div>
    </div>
</footer>
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>