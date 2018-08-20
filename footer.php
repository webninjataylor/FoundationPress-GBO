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

<img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/FPO_footer.png" />

<footer class="footer">
    <div class="footer-container">
        <div class="footer-grid">
        		<img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/NSF_logo_sm.png" />
						<img src="<?php echo get_template_directory_uri() ?>/dist/assets/images/aui-rev2@120W.png" />
						<a href="https://www.facebook.com/GreenBankScienceCenter/"><i class="fab fa-facebook-f"></i></a>
						<a href="https://www.flickr.com/photos/148446505@N04/"><i class="fab fa-flickr"></i></a>
						<a href="https://twitter.com/grnbnktelescope"><i class="fab fa-twitter"></i></a>
						<a href="https://vimeo.com/greenbankobservatory"><i class="fab fa-vimeo"></i></a>
						<a href="mailto:visit@gbobservatory.org"><i class="far fa-envelope"></i></a>
            <?php dynamic_sidebar( 'footer-widgets' ); ?>
        </div>
    </div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
