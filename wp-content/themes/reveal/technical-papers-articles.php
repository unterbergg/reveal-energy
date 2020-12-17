<?php
/**
 * Template Name: Technical Papers & Articles
 */

get_header(); ?>


<section class="page-info page-info--techpapers">
    <div class="container">
        <div class="row">
            <ul class="breadcrumbs">
                <li><a href="/">Home</a></li>
                <li><a href="/resources/">Resources</a></li>
                <li><a href="#">Tech Papers & Articles</a></li>
            </ul>
        </div>
        <div class="row row--spacebetween">
            <div class="page-info__text page-info__text--frac">
                <h1>Tech Papers & Articles</h1>
                <p>Knowledge Base</p>
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

<section class="news">
    <div class="container">
        <div class="row">
            <div class="news__filter">
                <p>Filter:</p>
                <?php

                $filterType = $_GET['filterby'];

                ?>
                <a href="?filterby=all" class="<?php echo $filterType === 'all' ? 'active' : ''; ?>">All</a>
                <a href="?filterby=tech" class="<?php echo $filterType === 'tech' ? 'active' : ''; ?>">Tech papers</a>
                <a href="?filterby=article" class="<?php echo $filterType === 'article' ? 'active' : ''; ?>">Articles</a>
            </div>
        </div>
        <div class="row">
            <div class="content-col">
                <div class="content-col__wrapper">

                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                    $wp_query = new WP_Query(array(
                        'post_type' => 'techpapers',
                        'showposts' => '9',
                        'paged' => $paged,
                        'posts_per_page' => '9',));

                    while ($wp_query->have_posts()) {
                        $wp_query->the_post();

                        $post_type = get_field('post_type', $post->ID);
                        $spec = get_field('post_spec', $post->ID);

                        if ($post_type == $filterType || $filterType == 'all' || $filterType == '') {?>

                            <a href="<?php the_permalink() ?>" class="content-col__row">
                                <p class="content-col__row__date"><?php echo $post_type == 'article' ? 'Article' : 'Tech Papers' ?></p>
                                <p class="content-col__row__spec"><?php echo $spec; ?></p>
                                <p class="content-col__row__title"><?php the_title(); ?></p>
                                <p class="content-col__row__post-info"><?php the_date(); ?></p>
                                <div class="icon"><i class="fas fa-external-link-alt"></i></div>
                            </a>

                            <?php
                        }
                    }
                        ?>
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

    <script>

        $(".tech-paper-read-more").click(function (e) {
            var id = $(this).attr('id');
            if ($(this).find("a").hasClass("no-follow")) {
                e.preventDefault();
                $(this).parents(".tech-paper-one").find(".tech-paper-pdf").toggleClass("show-pdf");
                $(this).find("span").text(function (i, v) {
                    return v === 'READ LESS' ? 'READ MORE' : 'READ LESS'
                });

                $("html,body").animate({scrollTop : $('#follow_' + id).offset().top}, 1000);

                // reload iframe to prevent loading error
                $(this).parents(".tech-paper-one").find("iframe").attr('src', function (i, val) {
                    return val;
                });
            }
        })


        // $("#sidebar > ul > li > a").click(function(e) {
        //     // Prevent a page reload when a link is pressed
        //     e.preventDefault();
        //     // Call the scroll function
        //     goToByScroll($(this).attr("id"));
        // });
    </script>
