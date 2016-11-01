<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage i-transform
 * @since i-transform 1.0
 */

get_header(); ?>
	<?php $do_not_duplicate = array(); ?>
	<div id="featured" class="featured-area clear">
		<div id="ft-post" class="ft-post">
		<?php if ( have_posts() ) : $counter=1; ?>
			<?php /* The loop for featured post */ ?>
			<?php while ( have_posts() ) : the_post(); ?>            	
            	<?php if ( is_sticky() && is_home() && $counter<=4 && ! is_paged() ) : ?>
                	<?php $do_not_duplicate[] = $post->ID ?>
                	<?php get_template_part( 'featured', get_post_format() ); ?>
                <?php endif; ?>
				<?php $counter++; ?>
			<?php endwhile; ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
    
<script type='text/javascript' src='http://longvietlogistics.com/wp-content/themes/i-transform/jquery.bxslider.js'></script>
<link rel='stylesheet'  href='http://longvietlogistics.com/wp-content/themes/i-transform/jquery.bxslider.css' type='text/css' media='all' />    
<script type="text/javascript">
jQuery(function(){
	jQuery('.bxslider').bxSlider({
	  minSlides: 3,
	  maxSlides: 4,
	  slideWidth: 270,
	  slideMargin: 10
	});
});
</script>
<div style="clear:both">
	<ul class="bxslider">
	  <li><img src="http://longvietlogistics.com/wp-content/uploads/2014/04/iata-accredagent-rgb1.jpg" align="center"/></li>
	  <li><img src="http://longvietlogistics.com/wp-content/uploads/2014/04/VIFFAS1.jpg" align="center"/></li>
	  <li><img src="http://longvietlogistics.com/wp-content/uploads/2014/04/fiata1.jpg" align="center"/></li>
	  <li><img src="http://longvietlogistics.com/wp-content/uploads/2014/04/iata-accredagent-rgb1.jpg" align="center"/></li>
	  <li><img src="http://longvietlogistics.com/wp-content/uploads/2014/04/VIFFAS1.jpg" align="center"/></li>
	  <li><img src="http://longvietlogistics.com/wp-content/uploads/2014/04/fiata1.jpg" align="center"/></li>
	</ul>
</div>	
<?php get_footer(); ?>