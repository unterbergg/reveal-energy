<?php
/*
 * Template Name: Search Result
 */

get_header(); ?>


<section class="page-info page-info--newsevents">
    <div class="container">
        <div class="row">
            <ul class="breadcrumbs">
                <li><a href="/">Home</a></li>
                <li><a href="#">Generic page</a></li>
            </ul>
        </div>
        <div class="row row--spacebetween">
            <div class="page-info__text page-info__text--frac">
                <h1>Generic Page Title</h1>
                <p>Generic Page Subtitle</p>
            </div>
            <div class="page-info__suggestion page-info__suggestion--res page-info__suggestion--video">
                <div class="page-info__suggestion__preview">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/video_2.png" alt="">
                    <div class="overlay"></div>
                </div>
                <p>Watch our Customer Experience videos to see our technology in action.</p>
            </div>
        </div>
    </div>
</section>

<section class="search-section">
    <div class="container">
        <div class="col">
            <h2>Looking for something else?</h2>
            <form action="">
                <div class="form-group">
                    <input type="text" placeholder="E.g., “fracture maps”">
                    <i class="far fa-search"></i>
                </div>
            </form>
        </div>
        <div class="col">
            <div class="search__element">
                <h3>Search Result 1</h3>
                <p>Commodo nulla facilisi nullam vehicula ipsum a arcu cursus vitae. Posuere ac ut consequat semper viverra nam. Molestie at elementum eu facilisis sed odio morbi quis…</p>
                <div class="link">In: <a href="#">Technology</a></div>
            </div>
            <div class="search__element">
                <h3>Search Result 2</h3>
                <p>Commodo nulla facilisi nullam vehicula ipsum a arcu cursus vitae. Posuere ac ut consequat semper viverra nam. Molestie at elementum eu facilisis sed odio morbi quis…</p>
                <div class="link">In: <a href="#">Company</a></div>
            </div>
        </div>
        <div class="row row--pagination">
            <div class="pagination">
                <ul>
                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                </ul>
                <div class="buttons">
                    <a href="#" class="prev"><i class="far fa-arrow-left"></i></a>
                    <a href="#" class="next"><i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
