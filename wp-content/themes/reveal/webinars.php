<?php
/*
 * Template Name: Webinars
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
                </div>
                <a href="/res-tv/casestudies/" class="page-info__suggestion page-info__suggestion--res page-info__suggestion--video">
                    <div class="page-info__suggestion__preview">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/video_2.png" alt="">
                        <div class="overlay"></div>
                    </div>
                    <p>Watch our case studies to see our technology in action.</p>
                </a>
            </div>
        </div>
    </section>

    <section class="news news--white">
        <div class="container">
            <div class="row">
                <div class="news__filter">
                    <p>Filter:</p>
                    <a href="#" class="active">All</a>
                    <a href="#">Tech papers</a>
                    <a href="#">Articles</a>
                </div>
            </div>
            <div class="row">
                <div class="content-col content-col--white">
                    <div class="content-col__wrapper">
                        <a href="/generic-page/" class="content-col__row">
                            <p class="content-col__row__date">Article</p>
                            <p class="content-col__row__title">Innovative Pressure Map Offers Insights on Frac Hits</p>
                            <p class="content-col__row__post-info">Sep 26, 2018</p>
                            <div class="icon"><i class="fas fa-external-link-alt"></i></div>
                        </a>
                        <a href="/generic-page/" class="content-col__row">
                            <p class="content-col__row__date">Tech Paper</p>
                            <p class="content-col__row__title">URTeC: 2886118 – Estimation of Fracture Geometries From Poroelastic Pressure Responses in Offset Wells</p>
                            <p class="content-col__row__post-info">Sep 26, 2018</p>
                            <div class="icon"><i class="fas fa-external-link-alt"></i></div>
                        </a>
                        <a href="/generic-page/" class="content-col__row">
                            <p class="content-col__row__date">Tech Paper</p>
                            <p class="content-col__row__title">URTeC: 2902114 – Rapid Evaluation of Diverter Effectiveness Pressure Response in Offset Wells</p>
                            <p class="content-col__row__post-info">Sep 26, 2018</p>
                            <div class="icon"><i class="fas fa-external-link-alt"></i></div>
                        </a>
                        <a href="/generic-page/" class="content-col__row">
                            <p class="content-col__row__date">Article</p>
                            <p class="content-col__row__title">Operating Under Pressure</p>
                            <p class="content-col__row__post-info">Sep 26, 2018</p>
                            <div class="icon"><i class="fas fa-external-link-alt"></i></div>
                        </a>
                    </div>
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