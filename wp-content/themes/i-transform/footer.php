<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage i-transform
 * @since i-transform 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php get_sidebar( 'main' ); ?>

			<div class="site-info">
                <div class="copyright">
                	<?php esc_attr_e( 'Copyright &copy;', 'itransform' ); ?>  Long Viet Logistics
                </div>            
            	<div class="credit-info">					
                    <?php printf( __( 'Thiết kế và phát triển bởi', 'itransform' )); ?> 
                    <a href="<?php echo esc_url( __( 'http://www.thietkewebsitevn.org/', 'itransform' ) ); ?>">
                   		<?php printf( __( 'HPGroup', 'itransform' ) ); ?>
                    </a>
                </div>

			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>