<?php
/*
 * Template Name: Customer Experiance
 */

get_header(); ?>

<section class="page-info page-info--res-tv">
    <div class="container">
        <div class="row">
            <ul class="breadcrumbs">
                <li><a href="/">Home</a></li>
                <li><a href="javascript:void(0)">RES-TV</a></li>
                <li><a href="#">Customer Experience</a></li>
            </ul>
        </div>
        <div class="row row--spacebetween">
            <div class="page-info__text page-info__text--frac">
                <h1>Customer Experience</h1>
                <p>Reveal Energy Services’ Technology in Action</p>
                <a href="/contact/" class="button button-green">Get in Touch</a>
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

<!--<section class="text-section">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <p>Explore Reveal’s activity map to learn how our customers are winning with our pressure-based fracture maps.</p>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!--<section class="map">-->
<!--    <div id="map"></div>-->
<!--</section>-->

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
                'category_name' => 'customer-experience'));

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
