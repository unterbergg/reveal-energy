<?php
/*
 * Template Name: News Template
 */

get_header();?>

    <section class="page-info page-info--newsevents">
        <div class="container">
            <div class="row">
                <ul class="breadcrumbs">
                    <li><a href="/">Home</a></li>
                    <li><a href="#">News & Events</a></li>
                </ul>
            </div>
            <div class="row row--spacebetween">
                <div class="page-info__text page-info__text--frac">
                    <h1>News & Events</h1>
                    <p>A closer look at Reveal Energy Services</p>
                    <a href="/contact/" class="button button-green">Get in Touch</a>
                </div>
                <a href="/res-tv/customer-experience/" class="page-info__suggestion page-info__suggestion--frac page-info__suggestion--video">
                    <div class="page-info__suggestion__preview gallery">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/v-gallery-bg.svg" alt="">
                    </div>
                    <p>
                        Watch our Customer Experience videos to see our technology in action.
                    </p>
                </a>
            </div>
        </div>
    </section>

    <section class="news news--white">
        <div class="container">
<!--            <div class="row">-->
<!--                <div class="news__filter">-->
<!--                    <p>Filter:</p>-->
<!--                    <a href="#" class="active">All</a>-->
<!--                    <a href="#">News</a>-->
<!--                    <a href="#">Events</a>-->
<!--                </div>-->
<!--            </div>-->
            <div class="row">
                <div class="content-col content-col--white">
                    <div class="content-col__wrapper">
                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                        $wp_query = new WP_Query(array(
                                'post_type' => 'news',
                                'showposts' => '9',
                                'paged' => $paged,
                                'posts_per_page' => '9',));

                        while ($wp_query->have_posts()) {
                                $wp_query->the_post();?>

                            <a href="<?php the_permalink() ?>" class="content-col__row">
                                <p class="content-col__row__date"><?php the_field('news_type', $post->ID); ?></p>
                                <p class="content-col__row__title"><?php the_title(); ?></p>
                                <p class="content-col__row__post-info"><?php the_date(); ?></p>
                                <div class="icon"><i class="fas fa-external-link-alt"></i></div>
                            </a>

                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row row--pagination">
                <div class="pagination">
                    <?php reveal_pagination(); ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>