<?php
/*
 * Template Name: RES-TV Template
 */

get_header(); ?>

<section class="page-info page-info--res-tv">
    <div class="container">
        <div class="row">
            <ul class="breadcrumbs">
                <li><a href="/">Home</a></li>
                <li><a href="/res-tv/">RES-TV</a></li>
            </ul>
        </div>
        <div class="row row--spacebetween">
            <div class="page-info__text page-info__text--frac">
                <h1>RES-TV</h1>
                <p>Tune in to Reveal Energy Services TV to learn how we can solve your completion design challenges with our award-winning technology.</p>
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

<section class="channels">
    <div class="container">
        <div class="row">
            <h2>RES-TV channels</h2>
        </div>
        <div class="row">
            <div class="products-slider res-owl owl-theme">

                <div class="item channels__element channels__element--white">
                    <h3><i class="fas fa-film"></i> Customer Experience</h3>
                    <h4>Reveal Energy Services’ Technology in Action</h4>
                    <p>As decision-making improves with our timely fracture maps, so does pad commercial value. Watch the Customer Experience to learn how our customers are winning with our lower-cost, nonintrusive technology.</p>
                    <a href="/res-tv/customer-experience/" class="button"><i class="far fa-play-circle"></i> Watch the Customer Experience</a>
                </div>

                <div class="item channels__element channels__element--dark">
                    <h3><i class="fas fa-film"></i> Talks</h3>
                    <h4>Hear from the Drivers of Innovation</h4>
                    <p>Get the expert insights on Reveal’s innovative pressure based maps of the fractured environment from the leading engineers in the oil & gas industry.</p>
                    <a href="/res-tv/talks/" class="button button-transparent button-fullwidth"><i class="far fa-play-circle"></i> Watch the Talks channel</a>
                </div>

            </div>
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
                'showposts' => '-1',));

            while ($wp_query->have_posts()) :
                $wp_query->the_post();?>

                <a href="<?php the_permalink() ?>" class="video__element">
                    <div class="image"><?php the_post_thumbnail(); ?></div>
                    <div class="titles">
                        <h3><?php
                            $terms = wp_get_object_terms( $post->ID, 'category' );
                            foreach ($terms as $term) :
                                echo $term->slug;
                            endforeach; ?></h3>
                        <h4><?php echo get_the_date(); ?></h4>
                    </div>
                    <div class="info">
                        <p><?php the_title(); ?></p>
                        <div class="time">01:42</div>
                    </div>
                </a>
            <?php endwhile; ?>

        </div>
    </div>
</section>





<?php get_footer(); ?>
