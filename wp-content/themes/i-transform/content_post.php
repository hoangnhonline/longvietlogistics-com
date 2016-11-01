<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage i-transform
 * @since i-transform 1.0
 */
 ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>   
    	
        
        <div class="post-mainpart">    
            <header class="entry-header">
                <?php if ( is_single() ) : ?>
                <h1 class="entry-title" style="padding-left:4%"><?php the_title(); ?></h1>
                <?php else : ?>
                <h1 class="entry-title" style="padding-left:4%">
                    <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                </h1>
                <?php endif; // is_single() ?>
        
                <div class="entry-meta">
                    <?php itransform_entry_meta(); ?>
                    <?php edit_post_link( __( 'Edit', 'itransform' ), '<span class="edit-link">', '</span>' ); ?>
                </div><!-- .entry-meta -->
            </header><!-- .entry-header -->
        
            <?php if ( is_search() ) : // Only display Excerpts for Search ?>
            <div class="entry-summary">
                <?php the_excerpt(); ?>
            </div><!-- .entry-summary -->
            <?php else : ?>
            <div class="entry-content">
                <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'itransform' ) ); ?>
                <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'itransform' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
            </div><!-- .entry-content -->
            <?php endif; ?>
        
            <footer class="entry-meta">
                <?php if ( comments_open() && ! is_single() ) : ?>
                    <div class="comments-link">
                        <?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'itransform' ) . '</span>', __( 'One comment so far', 'itransform' ), __( 'View all % comments', 'itransform' ) ); ?>
                    </div><!-- .comments-link -->
                <?php endif; // comments_open() ?>
        
                <?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
                    <?php get_template_part( 'author-bio' ); ?>
                <?php endif; ?>
            </footer><!-- .entry-meta -->
        </div>
    </article><!-- #post -->    

        

