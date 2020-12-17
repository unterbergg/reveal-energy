<?php
get_header(); ?>

    <section class="webinars-page in-column">
        <div class="webinars-page-name">
            Webinars
        </div>
        <div class="show-webinar">
            <?php $args = array(
                'post_type' => 'webinars',
                'taxonomy' => 'webinars'
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    ?>
                    <h2><?php the_title(); ?></h2>
                    <div class="video-content">
                    <?php the_content();?>
                    </div>
                    <?php
                }
                wp_reset_postdata(); // сбрасываем переменную $post
            } else echo "There're no published webinars"; ?>
        </div>
    </section>
<?php get_footer(); ?>

