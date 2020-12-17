<?php
/*
 * Template Name: Generic Page Template
 */

get_header(); ?>

<section class="page-info page-info--newsevents">
    <div class="container">
        <div class="row">
            <ul class="breadcrumbs">
                <li><a href="/">Home</a></li>
                <li><a href="/resources/technical-papers-articles/">Resources</a></li>
                <li><a href="/resources/technical-papers-articles/">Tech Papers & Articles</a></li>
                <li><a href="#"><?php echo substr(get_the_title(), 0, 50); ?> <?php echo strlen(get_the_title()) > 50 ? '...' : '';?></a></li>
            </ul>
        </div>
        <div class="row row--spacebetween">
            <div class="page-info__text page-info__text--frac">
                <h1><?php the_title(); ?></h1>
                <p><?php the_field('news_sub-title')?></p>
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

<section class="generic">
    <div class="container">
        <div class="col product__full product__full--news">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
        <?php

        $link = get_field('external_link_to_more_info');

        if($link !== '') {?>
            <div class="col">

                <a href="<?php the_field('external_link_to_more_info'); ?>" target="_blank" class="button">Read more</a>
            </div>
        <?php } ?>
    </div>
</section>

<?php get_footer(); ?>
