<?php
/*
 * Template Name: Contacts Us
 */

get_header('nozoom');?>

<section class="page-info page-info--newsevents">
    <div class="container">
        <div class="row">
            <ul class="breadcrumbs">
                <li><a href="/">Home</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="row row--spacebetween">
            <div class="page-info__text page-info__text--frac">
                <h1>Contact us</h1>
                <p>Reveal Energy Services is a Houston-based oil & gas services company working on revolutionizing fracture diagnostics methods through innovative engineering.</p>
            </div>
            <a href="https://www.linkedin.com/company/reveal-energy-services-inc./" target="_blank" class="page-info__suggestion page-info__suggestion--link">
                <div class="page-info__suggestion__image page-info__suggestion__image--linkedin">
                    <i class="fab fa-linkedin-in"></i>
                </div>
                <div class="page-info__suggestion__text page-info__suggestion__text--linkedin">
                    <h2>STAY CONNECTED</h2>
                    <p>Follow us on LinkedIn to learn about our career opportunities first.</p>
                </div>
            </a>
        </div>
    </div>
</section>

<section class="contact-us">
    <div class="container">
        <div class="row row-first row-contact">
            <div class="headquarter">
                <h2>Houston office</h2>
                <p>1500 Citywest Blvd, Suite 741<br>Houston, Texas 77042<br>USA</p>
            </div>
            <div class="info">
                <a href="tel:1-888-738-3250" class="info-element">
                    <div class="icon"><i class="fas fa-phone"></i></div>
                    <p>Call us: <span><?php echo get_field('call_us');?></span></p>
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
            <h2 class="margin-bottom"><?php echo get_field('form_title');?></h2>
        </div>
        <div class="form-wrapper">
            <?php echo get_field('form_iframe');?>
            <!--<form action="" class="form contacts" enctype="multipart/form-data" autocomplete="off">
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
						<p>Attach document</p>
                        <input type="file" name="file" id="file" class="inputfile" />
                        <div class="file-line" id="file-label">Choose file…</div>
                        <label for="file"></label>
                    </div>
                </div>
                <div class="connect__row">
                    <div class="connect__col connect__col--full">
                        <p>Message (<span>required</span>)</p>
                        <textarea name="message" required id="message" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="connect__row">
                    <input type="submit" value="Send message">
                </div>
            </form>-->
        </div>
    </div>
</section>



<?php get_footer(); ?>
