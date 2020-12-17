<?php
/*
 * Template Name: Careers Template
 */

get_header(); ?>

<section class="page-info page-info--newsevents">
    <div class="container">
        <div class="row">
            <ul class="breadcrumbs">
                <li><a href="/">Home</a></li>
                <li><a href="#">Careers</a></li>
            </ul>
        </div>
        <div class="row row--spacebetween">
            <div class="page-info__text page-info__text--frac">
                <h1>Careers</h1>
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

<section class="careers">
    <div class="container">
        <div class="row row--center">
<!--        <div class="careers--nopositions">
                <h3>No positions available at this time.</h3>
                <p>Thank you for your interest in Reveal Energy Services career opportunities. Currently we do not have any position openings.</p>
            </div>-->
            <div class="careers__element">
                <div class="left">
                    <div class="icon"></div>
                    <div class="text">
                        <h2>Completions Analyst</h2>
                        <div class="careers__info">
                            <div class="place">Houston, Texas, United States </div>
                            <!--<div class="date"></div>-->
                        </div>
                        <p><b>Skills:</b> Petroleum Engineering, Seismic , Fracturing </p>
                        <p><b>Other Skills:</b> Workover or Completion </p>
                        <p><b>Experience:</b> 3 + Years  </p>
                        <p><b>Education:</b> Bachelors/3-5 yr Degree  </p>
                        <p><b>Employment Type:</b> Full Time Salaried Employee </p>
                        <p>
                            The Houston team is looking for a completion's analyst, with a high level of curiosity and investigative mind-set. The roll requires high attention to detail, a passion for data analytics and a vision of how to develop the business.
                        </p>
                        <ul>
                            <li>The ideal candidate will have knowledge of the shale industry and experience in completions, with exposure to geophysics or reservoir engineering.</li>
                            <li>The position will require the ability to work in a lean technology start-up and function in a multi-disciplinary capacity.</li>
                            <li>The ability to learn quickly, understand customer needs, converting abstract engineering concepts into concrete workflows for project execution is critical.</li>
                            <li>The ability to deliver high-quality results under tight deadlines.</li>
                            <li>The candidate will analyze acquired field data using Reveal's proprietary software.</li>
                            <li>If some does not match these criteria, you will not be able to apply for this position.</li>
                        </ul>
                    </div>
                </div>
                <a class="button" href="https://www.rigzone.com/oil/jobs/postings/1046687?sh_in=0&iwsdf=123">Apply online via RigZone</a>
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
            <h2>Questions about our career opportunities?</h2>
            <h3>Drop us a line</h3>
        </div>
        <div class="row row--form">
            <form class="form contacts" >
                <div class="connect__row">
                    <div class="connect__col connect__col--full ">
                        <p>Full name (<span>required</span>)</p>
                        <input type="text" required>
                    </div>
                </div>
                <div class="connect__row">
                    <div class="connect__col connect__col--half ">
                        <p>Email address (<span>required</span>)</p>
                        <input type="email" required>
                    </div>
                    <div class="connect__col connect__col--half">
                        <p>Phone number</p>
                        <input type="tel">
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
                    <div class="connect__col connect__col--full  req--textarea">
                        <p>Message (<span>required</span>)</p>
                        <textarea name="" required id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="connect__row">
                    <input type="submit" value="Send message">
                </div>
            </form>
        </div>
    </div>
</section>




<?php get_footer(); ?>
