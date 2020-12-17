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
                <li><a href="/res-tv/talks/">Talks</a></li>
                <li><a href="/res-tv/talks/"><?php echo substr(get_the_title(), 0, strpos(get_the_title(), ":"));?></a></li>
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
                <a href="#" class="back">Back to <?php $terms = wp_get_object_terms( $post->ID, 'category' );

                    foreach ($terms as $term) {
                        echo $term->slug;
                    } ?></a>
                <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>

                <video poster="/wp-content/uploads/2019/02/GS4Bl03gJpA.jpg" id="myVideo" class="player_main">
                    <source src="/wp-content/uploads/2019/02/fracscan_version_3_1920x1080.mp4" type="video/mp4">
                </video>
            </div>
            <div class="right">
                <h2>Related Services</h2>
                <div class="service__element service__element--color-0">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/FracSCAN.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="wrapper">
                            <h3>IMAGE Frac™</h3>
                            <p>Pressure-Based Fracture Maps</p>
                        </div>
                        <div class="icon"></div>
                    </div>
                </div>
                <div class="service__element service__element--color-1">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ProppantSCAN.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="wrapper">
                            <h3>ProppantSCAN℠</h3>
                            <p>Optimize reservoir contact</p>
                        </div>
                        <div class="icon"></div>
                    </div>
                </div>
                <div class="service__element service__element--color-1">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/PerfSCAN.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="wrapper">
                            <h3>PerfSCAN℠</h3>
                            <p>Improve cluster-spacing decisions</p>
                        </div>
                        <div class="icon"></div>
                    </div>
                </div>
                <div class="service__element service__element--color-1">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/DiverterSCAN.svg" alt="">
                    </div>
                    <div class="text">
                        <div class="wrapper">
                            <h3>DiverterSCAN℠</h3>
                            <p>Enhance fluid distribution</p>
                        </div>
                        <div class="icon"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="generic">
    <div class="container">
        <div class="col product__full product__full--news">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
            <?php endwhile; endif; ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>
