<?php
/*
 * Template Name: Schedule a demo
 */

get_header(); ?>

<section class="page-info page-info--schedule">
    <div class="container">
        <div class="row">
            <ul class="breadcrumbs">
                <li><a href="/">Home</a></li>
                <li><a href="#">Schedule a Demo</a></li>
            </ul>
        </div>
        <div class="row row--spacebetween">
            <div class="page-info__text page-info__text--frac schedule">
                <h1>Schedule a DSCVR<i>i</i><sup>SM</sup> demo</h1>
                <p>To schedule a demo, you can give us a call, send an email or use the form below to leave your contact information. We will get back with you shortly! </p>
            </div>
        </div>
    </div>
</section>

<section class="contact-us">
    <div class="container">
        <div class="row row-first row-contact">
            <div class="info">
                <a href="tel:1-888-738-3250" class="info-element">
                    <div class="icon"><i class="fas fa-phone"></i></div>
                    <p>Call us: <span>1-888-738-3250</span></p>
                </a>
<!--                <a href="mailto:info@reveal-energy.com" class="info-element">
                    <div class="icon"><i class="fas fa-envelope"></i></div>
                    <p>Inquiries: <span>info@reveal-energy.com</span></p>
                </a>-->
            </div>
        </div>
    </div>
</section>

<section class="connect">
    <div class="container">
        <div class="line"></div>
    </div>
    <div class="container">
        <div class="col">
            <h2 class="margin-bottom">How can we help?</h2>
        </div>
        <div class="row row--form">
            <form action="" class="form contacts schedule" enctype="multipart/form-data" autocomplete="off">
                <div class="connect__row">
                    <div class="connect__col connect__col--half ">
                        <p>Company</p>
                        <input type="text" name="company" id="company">
                    </div>
                    <div class="connect__col connect__col--half">
                        <p>Title</p>
                        <input type="text" name="title" id="title">
                    </div>
                </div>
                <div class="connect__row">
                    <div class="connect__col connect__col--full">
                        <p>Full name (<span>required</span>)</p>
                        <input type="text" name="full" required id="full">
                    </div>
                </div>
                <div class="connect__row">
                    <div class="connect__col connect__col--half ">
                        <p>Email address (<span>required</span>)</p>
                        <input type="email" name="email" required id="email">
                    </div>
                    <div class="connect__col connect__col--half">
                        <p>Phone number</p>
                        <input type="tel" name="tel" id="tel">
                    </div>
                </div>
                <div class="connect__row">
                    <div class="connect__col connect__col--full">
                        <p>Message (<span>required</span>)</p>
                        <textarea name="message" required id="message" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="connect__row">
                    <input type="submit" value="Send your information">
                </div>
            </form>
        </div>
    </div>
</section>



<?php get_footer(); ?>