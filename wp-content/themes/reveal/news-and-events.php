<?php
/**
 * Template Name: News and Events
 */

get_header(); ?>
<?php global $wp_query; ?>
    <section class="tech-paper">
        <div class="tech-paper-left">
            <div class="tech-paper-page-name">
                News & Events
            </div>
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $wp_query = new WP_Query(array(
                    'category_name' => 'news',
                    'showposts' => '3',
                    'paged' => $paged,
                    'posts_per_page' => '3',));

            while ($wp_query->have_posts()) {
	            $wp_query->the_post();
                $arr = get_post_meta($post->ID);
                ?>
                <div class="tech-paper-one">
                    <div class="tech-paper-type">
                        <?php echo the_time('F j' . ', ' . 'Y'); ?>
                    </div>
                    <div class="tech-paper-header">
                        <p class="tech-paper-name"><?php the_title(); ?></p>
                        <p class="tech-paper-sub-title">
                            <?php
                                 echo $arr['sub-title'][0];
                            ?>
                        </p>
                    </div>
                    <div class="tech-paper-read-more">
                        <a target="_blank" href="<?php echo $arr['more-link'][0];?>">READ MORE <i class="fas fa-external-link-alt"></i></a>
                    </div>
                    <div class="tech-paper-text">
                        <?php
                        the_content();
                        ?>
                    </div>
                </div>
                <?php
            }
            picanties_pagination( );
            ?>
            </div>
        <?php
        get_template_part('webinar-form');
        ?>
    </section>


<?php get_footer(); ?>