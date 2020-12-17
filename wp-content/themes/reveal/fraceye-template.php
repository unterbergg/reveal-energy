<?php
/**
* Template Name: FracEYE Template
 */

get_header();?>

<section class="page-info page-info--eye">
    <div class="container">
        <div class="row">
            <ul class="breadcrumbs">
                <li><a href="/">Home</a></li>
                <li><a href="javascript:void(0)" class="no-active">Services</a></li>
                <li><a href="#">FracEYE</a></li>
            </ul>
        </div>
        <div class="row row--spacebetween">
            <div class="page-info__text page-info__text--frac">
                <h1>FracEYE</h1>
                <p>Frac Hit Analysis Service</p>
            </div>
            <div class="wrapper">
                <a href="services/dscvri/" class="service__element service__element--color-0 service__element--block">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/DSCVRiIconp.png" alt="">
                    </div>
                    <div class="text">
                        <div class="wrapper">
                            <h3>DSCVRi<sup>sm</sup></h3>
                            <p>Improve Completion Performance</p>
                        </div>
                        <div class="icon"></div>
                    </div>
                </a>
                <a href="services/imagefrac/" class="service__element service__element--color-0 service__element--block">
                    <div class="icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/FHLBasedMap_Transparent.png" alt="">
                    </div>
                    <div class="text">
                        <div class="wrapper">
                            <h3>IMAGE Frac<sup>tm</sup></h3>
                            <p>Pressure-Based Fracture Maps</p>
                        </div>
                        <div class="icon"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="product product--eye" id="fracscan">
    <div class="container">
        <div class="col">
            <div class="product__short">
            <div class="product__type product__type--eye">FRAC HIT ANALYSIS</div>
				<p class="description-short"><img src="<?php echo get_template_directory_uri(); ?>/img/fraceye-logo-big.svg" alt=""><span>The FracEYE frac</span> hit analysis service lets you make informed, better decisions about when to change the stimulation treatment to minimize the effect of frac hits and the potential adverse effect on parent well production.</p>
<!--                <a href="#" class="download"><i class="fas fa-file-alt"></i> FracEYE Service Brochure.pdf</a>-->
                <a href="/restv/498/" class="page-info__suggestion page-info__suggestion--frac page-info__suggestion--video black">
                    <div class="page-info__suggestion__preview gallery">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/v-gallery-bg.svg" alt="">
                    </div>
                    <p>
                        Watch our Customer Experience videos to see FracEYE in action.
                    </p>
                </a>
            </div>
            <div class="product__full visible">
                <img src="<?php echo get_template_directory_uri(); ?>/img/fraceye_0.png" alt="">
                <h3>How does this all work?</h3>
                <p>The new FracEYE frac hit analysis service categorizes the type and severity of interwell communication by measuring the pressure response from a parent well as hydraulic fracturing proceeds normally in child wells. With this information, you can minimize the effect of frac hits.</p>
                <p>The creation of a hydraulic fracture results in a pressure increase in the surrounding fluid-filled porous medium. A combination of fluid migration and rock compression creates the pressure response we see in a parent well.</p>
                <p>Looking at the timing of the pressure response, the compression forces can be felt instantaneously over hundreds of feet while the pressure increase can take minutes to hours because of fluid migration. A team of our geoscientists and completion engineers uses the timing and geomechanic principles to classify the observed pressure response into one of four categories:</p>
                <ul>
                    <li>direct fluid transport: large and rapid overall pressure increase in the offset well</li>
                    <li>fluid migration: gradual pressure increase that lingers post-stage completion in the offset well</li>
                    <li>undrained compression: instantaneous pressure response in the offset well</li>
                    <li>no signal: no significant pressure change in the offset well.</li>
                </ul>
                <p>With the FracEYE service, you can decide if or when you need to change the stimulation treatment to minimize the effect of frac hits and the potential adverse effect on parent well production.</p>
                <h3 class="define">Case study: Child wells that act out</h3>
                <p>Vertical or lateral communication?</p>
                <p>What insights do you get?</p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/fraceye_1.png" alt="">
                <p>A Canadian operator working in the Montney, developing the D1 and D2 horizons shown in the 3D view, top left, was interested in learning how child well completions affect parent wells. We deployed our FracEYE service to quantify and categorize the induced pressure in the parent wells to find out.</p>
                <p>The treatment data for the stage being fracked in D2-6H is shown bottom left. The induced stress on the parent wells is shown in the top-right track. We see direct fluid communication with the adjacent D2 parent well, shown by the blue curve, while we see fluid diffusion toward the D1 parent well, shown by the green curve. This analysis is supported by the temperature data, bottom right.</p>
                <p>The data showed an increasing effect of fluid communication between the parent and the child well toward the heel of both wells. Direct fluid communication between wells is restricted to wells within the same horizon. The pressure responses also indicate some faulting near the middle of the lateral section. The 3D view shows the categorized signals while fracking the three child wells affecting the D1 parent well.</p>
                <p>With the FracEYE frac hit analysis service, the operator had insight into zonal isolation, interwell communication, and effective fluid pathways created by the fracture network. The operator made an informed, better decision about when to change the stimulation treatment to minimize the effect of frac hits and the potential adverse effect on parent well production.</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>