<?php
/*
 * Template Name: Generic Page Template
 */

get_header(); ?>

<section class="page-info page-info--res-tv">
    <div class="container">
        <div class="row">
            <ul class="breadcrumbs">
                <li><a href="/">Home</a></li>
                <li><a href="javascript:void(0)" class="no-active">RES-TV</a></li>
                <li><a href="/res-tv/<?php $terms = wp_get_object_terms( $post->ID, 'category' ); echo $terms[0]->slug ?>/"><?php $terms = wp_get_object_terms( $post->ID, 'category' ); echo $terms[0]->name;?></a></li>
				<li><a href="#"><?php echo substr(get_the_title(), 0, 50); ?> <?php echo strlen(get_the_title()) > 50 ? '...' : '';?></a></li>
			</ul>
        </div>
        <div class="row row--spacebetween">
            <div class="page-info__text page-info__text--frac">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>

<section class="case-study">
    <div class="container">
        <div class="row">
            <div class="left">
                <?php $terms = wp_get_object_terms( $post->ID, 'category' ); ?>
                <a href="/res-tv/<?php echo $terms[0]->slug; ?>" class="back">Back to <?php echo $terms[0]->name; ?></a>
                <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>

                <video poster="<?php echo get_the_post_thumbnail_url( $post->ID ); ?>" id="myVideo" class="player_main" controls="">
                    <source src="<?php the_field('video_file_mp4'); ?>" type="video/mp4">
                </video>
            </div>
            <div class="right">
                <h2>Related Services</h2>
                <a href="/technology/imagefrac" class="service__element service__element--color-0">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/FHLBasedMap_Transparent.png" alt="">
                    </div>
                    <div class="text">
                        <div class="wrapper">
                            <h3>IMAGE Frac<sup>TM</sup></h3>
                            <p>Pressure-Based Fracture Maps</p>
                        </div>
                        <div class="icon"></div>
                    </div>
                </a>
                <a href="/technology/imagefrac/#fracscan" class="service__element service__element--color-0">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/FracSCAN.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="wrapper">
                            <h3>FracSCAN<sup>SM</sup></h3>
                            <p>Increase pad commercial value</p>
                        </div>
                        <div class="icon"></div>
                    </div>
                </a>
                <a href="/technology/imagefrac/#proppantscan" class="service__element service__element--color-1">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ProppantSCAN.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="wrapper">
                            <h3>ProppantSCAN<sup>SM</sup></h3>
                            <p>Optimize reservoir contact</p>
                        </div>
                        <div class="icon"></div>
                    </div>
                </a>
                <a href="/technology/imagefrac/#divirterscan" class="service__element service__element--color-1">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/DiverterSCAN.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="wrapper">
                            <h3>DiverterSCAN<sup>SM</sup></h3>
                            <p>Enhance fluid distribution</p>
                        </div>
                        <div class="icon"></div>
                    </div>
                </a>
                <a href="/technology/imagefrac/#depletionscan" class="service__element service__element--color-1">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/depletionscan.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="wrapper">
                            <h3>DepletionSCAN<sup>SM</sup></h3>
                            <p>Reduce nonproductive fluid loss</p>
                        </div>
                        <div class="icon"></div>
                    </div>
                </a>
                <a href="/technology/fraceye" class="service__element service__element--color-1">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/fraceye-logo-small.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="wrapper">
                            <h3>FracEYE<sup>SM</sup></h3>
                            <p>Minimize the offect of frac-hits</p>
                        </div>
                        <div class="icon"></div>
                    </div>
                </a>
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
