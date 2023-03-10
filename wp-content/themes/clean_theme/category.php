<?php
/**
 * Category
 *
 * Standard loop for the front-page
 */
get_header(); ?>

<div class="row">
    <div class="large-12 columns">
        <h2 class="category-title"><?php __('Category: ', 'foundation'); single_cat_title(); ?> </h2>
    </div>
    <div class="large-8 medium-8 small-12 columns">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h3>
                        <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr(sprintf(__('Permalink to %s', 'foundation'), the_title_attribute('echo=0'))); ?>" rel="bookmark">
                            <?php the_title(); ?>
                        </a>
                    </h3>
                    <?php if (is_sticky()) : ?>
                        <span class="right radius secondary label"><?php _e('Sticky', 'foundation'); ?></span>
                    <?php endif; ?>
                    <h6><?php __('Written by ', 'foundation');  the_author_link(); __(' on ', 'foundation'); the_time(get_option('date_format')); ?></h6>
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                            <?php the_post_thumbnail(); ?>
                        </a>
                    <?php endif; ?>
                   <?php the_excerpt(); //Use wp_trim_words() instead if you need specific number of words ?>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
        <div class="pagination">
	        <?php foundation_pagination(); ?>
	    </div>
    </div>
    <div class="large-4 medium-4 small-12 columns sidebar">
        <?php get_sidebar('right'); ?>
    </div>
</div>

<?php get_footer(); ?>