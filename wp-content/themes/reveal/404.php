<?php
get_header();
?>
    <section class="page-info page-info--newsevents">
        <div class="container">
            <div class="row">
                <ul class="breadcrumbs">
                    <li><a href="/">Home</a></li>
                    <li><a href="#">404</a></li>
                </ul>
            </div>
            <div class="row row--spacebetween">
                <div class="page-info__text page-info__text--frac">
                    <h1>404</h1>
                    <p>No Page Found</p>
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

    <section class="notfound">
        <div class="container">
            <div class="col">
                <h2>Oops! This page is missing. Try this:</h2>
<!--                <h3>Search the site</h3>-->
<!--                <form action="">-->
<!--                    <div class="form-group">-->
<!--                        <input type="text" placeholder="E.g., “fracture maps”">-->
<!--                        <i class="far fa-search"></i>-->
<!--                    </div>-->
<!--                </form>-->
<!--                <div class="or">or</div>-->
                <a href="/" class="button">Go home</a>
            </div>
        </div>
    </section>
<?php get_footer(); ?>