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

    </div>
    <!-- #main -->

    <footer id="colophon" role="contentinfo">
        
        

        <div id='footer-content'>

            <div id='footer-Button-zone'>

                <a href="#">CARTE INTÉRACTIVE</a>
                <a href="#">CONTACTEZ-NOUS</a>

            </div>

            <div id='footer-contact-infos'>

                <p>la Société du patrimoine de Boucherville 566, boul. Marie-Victorin Boucherville (Québec) J4B 1X1</p>

                

            </div>
            <p id='footer-copyright'>© 2016 Société du Patrimoine de Boucherville. Tous droits réservés.</p>
        </div>



        <div id='footer-icon-zone'>

            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo_SPB.png" alt="logo"></a>

        </div>

    </footer>
    <!-- #colophon -->
    </div>
    <!-- #page -->

    <?php wp_footer(); ?>
        </body>

        </html>