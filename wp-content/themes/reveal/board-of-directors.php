<?php
/**
 * Template Name: Board of Directors
 */

get_header();?>

    <section class="man-team">
        <div class="man-team-left">
            <div class="services-page-name">
                Board of Directors
            </div>
            <?php
            $id = 50;
            $post = get_post($id);
            echo $content = $post->post_content;
            ?>
        </div>
        <?php
        get_template_part('webinar-form');
        ?>
    </section>


<?php get_footer(); ?>