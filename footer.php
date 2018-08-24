<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

		<footer class="footer">
		    <div class="footer-container">
		        <div class="footer-grid">



		        		<!-- START GBO EDITS -->
		        		<section class="footer-logos">
		        			<a href="http://www.nsf.gov/" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/NSF_logo_sm.png" /></a>
									<a href="http://www.aui.edu/" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/aui-rev2@120W.png" /></a>
									<p>Green Bank Observatory is a facility of the National Science Foundation and is operated by Associated Universities, Inc</p>
		        		</section>
		        		<!-- START SOCIAL ICONS: These were in the wireframes, but removed from the design. Keeping in case URLs are needed. -->
		        		<!--
									<a href="https://www.facebook.com/GreenBankScienceCenter/"><i class="fab fa-facebook-f"></i></a>
									<a href="https://www.flickr.com/photos/148446505@N04/"><i class="fab fa-flickr"></i></a>
									<a href="https://twitter.com/grnbnktelescope"><i class="fab fa-twitter"></i></a>
									<a href="https://vimeo.com/greenbankobservatory"><i class="fab fa-vimeo"></i></a>
									<a href="mailto:visit@gbobservatory.org"><i class="far fa-envelope"></i></a>
								-->
		        		<!-- END SOCIAL ICONS -->
								<!-- END GBO EDITS -->



		            <?php dynamic_sidebar( 'footer-widgets' ); ?>
		        </div>
		        <!-- START GBO EDITS -->
		        <div class="footer-copyright">&copy; Green Bank Observatory</div>
		        <!-- END GBO EDITS -->
		    </div>
		</footer>

		<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
			</div><!-- Close off-canvas content -->
		<?php endif; ?>

		<?php wp_footer(); ?>

	</body>
</html>
