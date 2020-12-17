<?php
/*
 * Template Name: Webinars
 */

get_header(); ?>

<section class="page-info page-info--res-tv">
    <div class="container">
        <div class="row">
            <ul class="breadcrumbs">
                <li><a href="/">Home</a></li>
                <li><a href="javascript:void(0)">RES-TV</a></li>
                <li><a href="#">Webinars</a></li>
            </ul>
        </div>
        <div class="row row--spacebetween">
            <div class="page-info__text page-info__text--frac">
                <h1>Webinars</h1>
                <p>Hear from the Drivers of Innovation</p>
            </div>
            <a href="/technology/imagefrac/" class="page-info__suggestion page-info__suggestion--res page-info__suggestion--video">
                <div class="page-info__suggestion__preview">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/video_2.png" alt="">
                    <div class="overlay"></div>
                </div>
                <p>Learn about our standard-setting <span>technology</span>.</p>
            </a>
        </div>
    </div>
</section>

<section class="library">
    <div class="container">
        <div class="row">
            <h2>Video library</h2>
        </div>
        <div class="row row-wrap">

            <?php

            $wp_query = new WP_Query(array(
                'post_type' => 'restv',
                'showposts' => '-1',
                'category_name' => 'webinars'));

            while ($wp_query->have_posts()) {
                $wp_query->the_post();?>

                <a href="<?php the_permalink() ?>" class="video__element">
                    <div class="image">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="titles">
                        <h3><?php

                            $terms = wp_get_object_terms( $post->ID, 'category' );

                            foreach ($terms as $term) {
                                echo $term->slug;
                            }

                            ?></h3>
                        <h4><?php echo get_the_date(); ?></h4>
                    </div>
                    <div class="info">
                        <p><?php the_title(); ?></p>
                        <div class="time">01:42</div>
                    </div>
                </a>
            <?php } ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>
