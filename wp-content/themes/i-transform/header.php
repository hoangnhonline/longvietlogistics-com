<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage i-transform
 * @since i-transform 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">    	
        <?php if ( of_get_option('top_bar_phone') || itransform_social_icons() ) : ?>
    	<div id="utilitybar" class="utilitybar">
        	<div class="socialicons">
                <?php echo itransform_social_icons(); ?>
            </div>
            <?php if ( of_get_option('top_bar_phone') ) : ?>
        	<div class="topphone">
            	<i class="topbarico genericon-phone"></i>
                <?php if ( of_get_option('top_bar_phone') ) : ?>
					<?php _e('Hotline : ','itransform'); ?> <?php echo of_get_option('top_bar_phone'); ?>
                <?php endif; ?>
            </div>
            <?php endif; ?>            
        </div>
        <?php endif; ?>
        
        <div class="headerwrap">
            <header id="masthead" class="site-header" role="banner">
                <div style="float: right;">
                    <?=qtrans_generateLanguageSelectCode('image');?>
                </div>
         		<div class="headerinnerwrap">
					<?php if (of_get_option('itrans_logo_image')) : ?>
                        <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                            <span><img src="<?php echo of_get_option('itrans_logo_image'); ?>" alt="<?php bloginfo( 'name' ); ?>" /></span>
                        </a>
                    <?php else : ?>
                        <span id="site-titlendesc">
                            <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                                <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                                <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>   
                            </a>
                        </span>
                    <?php endif; ?>	
        
                    <div id="navbar" class="navbar">
                        <nav id="site-navigation" class="navigation main-navigation" role="navigation">
                            <h3 class="menu-toggle"><?php _e( 'Menu', 'itransform' ); ?></h3>
                            <a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'itransform' ); ?>"><?php _e( 'Skip to content', 'itransform' ); ?></a>
                            <?php 
								if ( has_nav_menu(  'primary' ) ) {
										wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'container_class' => 'nav-container', 'container' => 'div' ) );
									}
									else
									{
										wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-container' ) ); 
									}
								?>
							
                        </nav><!-- #site-navigation -->
                        <div class="topsearch">
                            <?php get_search_form(); ?>
                        </div>
                         <div class="clear"></div>
                    </div><!-- #navbar -->
                   
                </div>
                
            </header><!-- #masthead -->
        </div>
        
        <!-- #Banner -->
        
        <?php if ( is_home() && ! is_paged() || is_front_page() ) : ?>
			<?php itransform_ibanner_slider(); ?>        
		<?php endif; ?>
		<div id="main" class="site-main">
		<?php if(function_exists(simple_breadcrumb) && !is_front_page()) {simple_breadcrumb();} ?>
