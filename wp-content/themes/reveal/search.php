<?php
/*
 * Template Name: search
 */

get_header(); ?>


<section class="page-info page-info--newsevents">
    <div class="container">
        <div class="row">
            <ul class="breadcrumbs">
                <li><a href="/">Home</a></li>
                <li><a href="#">Search</a></li>
            </ul>
        </div>
        <div class="row row--spacebetween">
            <div class="page-info__text page-info__text--frac">
                <h1>Search</h1>
                <p>
                    <?php if(have_posts()):?>
                        <?php //echo '<pre>';?>
                            <?php //var_dump($wp_query);?>
                        <?php //echo '<pre>';?>
                        <?php echo $wp_query->found_posts . ' search results for: "'. get_search_query().'"';?>
                    <?php endif;?>
                </p>
            </div>
<!--            <div class="page-info__suggestion page-info__suggestion--res page-info__suggestion--video">-->
<!--                <div class="page-info__suggestion__preview">-->
<!--                    <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/video_2.png" alt="">-->
<!--                    <div class="overlay"></div>-->
<!--                </div>-->
<!--                <p>Watch our Customer Experience videos to see our technology in action.</p>-->
<!--            </div>-->
        </div>
    </div>
</section>

<section class="search-section">
    <div class="container">
        <div class="col">
            <h2>Looking for something else?</h2>
            <form role="search" method="get" id="searchform"
                  class="searchform" action="/">
                <div class="form-group">
                    <input type="text" placeholder='E.g., “fracture maps”' value="" name="s" id="s" class="search-result"/>
<!--                    <input type="submit" id="searchsubmit" value="Поиск" />-->
                    <button type="submit">
                        <i class="far fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
        <div class="col">

            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    ?>
                    <div class="search__element">
                        <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                        <p><?php the_excerpt() ?></p>
                        <?php
                        $str = get_permalink();
                        $request = parse_url($str);
                        $path = $request["path"];

                        $result = trim(str_replace(basename($_SERVER['SCRIPT_NAME']), '', $path), '/');

                        $result = explode('/', $result);
                        $max_level = 2;
                        while ($max_level < count($result)) {
                            unset($result[0]);
                        }
                        $result = '/'.implode('/', $result);
                        $result = substr($result, 1);
                        $index = strpos($result, '/');
//                        var_dump(substr($result,0,$index));
//                        resources/technical-papers-articles/
                        if(substr($result,0,$index) == 'techpapers') {
                            $link = '/resources/technical-papers-articles/';
                        }
                        else {
                            $link = '/'.substr($result,0,$index);
                        }

                        ?>
                        <div class="link">In: <a href="<?php echo $link; ?>"><?php echo substr($result,0,$index); ?></a></div>
                    </div>
                <?php endwhile; ?>
            <?php
            else : ?>
                <h2 class="no-result">Sorry, no results were found.</h2>
            <?php endif;
            ?>


<!--            <div class="search__element">-->
<!--                <h3>Search Result 2</h3>-->
<!--                <p>Commodo nulla facilisi nullam vehicula ipsum a arcu cursus vitae. Posuere ac ut consequat semper viverra nam. Molestie at elementum eu facilisis sed odio morbi quis…</p>-->
<!--                <div class="link">In: <a href="#">Company</a></div>-->
<!--            </div>-->
        </div>
<!--        <div class="row row--pagination">-->
            <div class="row row--pagination">
                <div class="pagination">
                    <?php reveal_pagination(); ?>
                </div>
            </div>
<!--            <div class="pagination">-->
<!--                --><?php
//                    the_posts_pagination( array(
//                        'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
//                        'show_all'     => true,
//                        'next_text'          => __( 'Next page', 'twentyfifteen' ),
//                        'before_page_number' => '',
//                    ) );
//                ?>
<!---->
<!---->
<!---->
<!---->
<!--                <ul>-->
<!---->
<!--                    <li><a href="" class="active">1</a></li>-->
<!--                    <li><a href="#">2</a></li>-->
<!--                    <li><a href="#">3</a></li>-->
<!--                    <li><a href="#">4</a></li>-->
<!--                </ul>-->
<!--                <div class="buttons">-->
<!--                    <a href="#" class="prev"><i class="far fa-arrow-left"></i></a>-->
<!--                    <a href="#" class="next"><i class="far fa-arrow-right"></i></a>-->
<!--                </div>-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
    </div>
</section>


<?php get_footer(); ?>
