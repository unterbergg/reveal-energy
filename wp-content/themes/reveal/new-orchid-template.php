<?php
/**
* Template Name: New Orchid Product Page
 */

get_header();?>

<section class="page-info page-info-orchid">
    <div class="container">
        <div class="row">
            <ul class="breadcrumbs">
                <li><a href="/">Home</a></li>
                <li><a href="#">Orchid</a></li>
            </ul>
        </div>
        <div class="row row-info">
            <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/app/img/orchid/colored-logo.svg"></div>
            <div class="info-wrap">
                <div class="info">Open interpretation platform that supports improved decision-making for unconventional wells</div>
                <a class="button" href="/contact/"><span>Interested in ORCHID?</span><br>Contact Us to get registered for the beta program.</a>
            </div>
        </div>
    </div>

    <div class="container wrapper-text">
        <div class="row">
             <div class="min-text"><img src="<?php echo get_template_directory_uri(); ?>/app/img/orchid/123.svg"> Mark of Reveal Energy Services</div>
        </div>
    </div>
</section>

<section class="product product--eye">
    <div class="container">
        <div class="col">
            <div class="orchid">
                <div class="title">Closing the gaps in unconventional field diagnostics data management and interpretation</div>
                <div class="sub-title">Visualizing the data makes all the difference</div>
                <div class="text">The ability of humans to visualize and interpret information faster than a machine is well-documented. From visual cues, humans draw connections quicker to understand the similarities and differences in images, graphs, and charts, for example, instead of tediously reviewing large data sets. Human visual interpretation can seem almost instantaneous. What we see and the rapid understanding and knowledge we can derive are based on how the brain quickly processes and comprehends a picture, which is worth a thousand words. Could the human visual interpretation model be applied in the unconventional oilfield as the foundation for a new completions data analysis platform?</div>
                <div class="info-wrap">
                    <div class="list">
                        <div class="text">The Orchid* open interpretation platform is transforming the completions data dynamic with a “human-in-the-loop” foundation that allows engineers to visually, interactively, and intuitively manage the tsunami of oilfield data. Engineers are reversing the 80-20 scenario of data cleansing, data QC and data fusion because they can easily extract knowledge and value by visually interacting with every step of the workflow. The human-centric technology enables multi-project analyses even with the varying data formats from multiple vendors. By closing the gaps in unconventional field diagnostics data management and interpretation, Orchid enables engineers to reduce nonproductive time by more than 90%. Here is one engineer’s story:</div>
                    </div>
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/app/img/orchid/img5.jpg"></div>
                </div>
                <div class="sub-title">How I used to work</div>
                <div class="text">I spent way too much time on data management, resulting a big amount of NPT. Most of you know the situation with unconventional oilfield data. The wells generate vast data volumes from drilling to completion and production, which are often enriched with geology, economics, and diagnostics. We are completing multiple pads over the course of a few months.</div>
                <div class="text">Every vendor has a different data format. The data are often stored in the cloud with a managed service provider, but the tools don’t let me easily access the raw information or even know if the quality control is correct. Key metadata, such as the time zone and coordinate system, are often missing from the .txt files. Excel can’t handle everything, and the information I do have in the spreadsheets is truncated and unclear. How do I connect my offset pressure data with treatment data? How do I relate that work to precise spatial locations/distance information in 3D?</div>
                <div class="text">Improving completions efficiency, based on all the well and field data, is important now. But the right tools have been limited. I could never efficiently navigate through all the available fracture measurements in the large data sets. </div>
                <div class="info-wrap">
                    <div class="list">
                        <div class="sub-title">A picture is worth a thousand words</div>
                        <div class="text">I need a deeper, more insightful view of all the available data not just a superficial look. When I have a four-well pad with 50 stages per well there are a lot of data that have be managed. Machine learning and AI are great, but what about the human element? I prefer visualizing the data to understand the connections and relationships instead of looking at a spreadsheet or the output of a machine learning algorithm.  I’ve been looking for a solution built from the ground-up that lets me interpret large volumes of data visually with images, graphs, and charts.</div>
                    </div>
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/app/img/orchid/img1.jpg"></div>
                </div>
                <div class="text">Orchid is now providing me with “human-centric” analysis and workflows. All the workflows are user-guided even when automation is applied, which speeds up tedious work by letting me directly interrogate and interact with raw source data. I can filter and modify the data in a transparent and auditable manner. I have a 360-degree perspective of operations with interactive control of the temporal timeline as the field or well data are imported. Local and remote hardware resources with the comprehensive, interactive user interfaces integrate data in multiple time zones to enable the mapping of data to a common global time reference.</div>
                <div class="sub-title">From 20% to 80% </div>
                <div class="text">Orchid solves my frustrating data challenges. I’m now spending 80% of my time on data analyses and extracting value from my data  instead of data loading and cleansing because I can quickly understand the evolution of the fracture geometry and relate this knowledge to multi-physics observations from offset pressure, fiber optics and slow strain, acoustic fluid imaging, microseismic, and many other diagnostics.</div>
                <div class="text">The templates support the import and management of extremely large data sets in a large variety of formats. Integration and cleansing that used to take several days can now be completed in a few minutes with enhanced interpretation productivity because I can see the issues with the data. </div>
                <div class="info-wrap">
                    <div class="list">
                        <div class="text min-padding">Data fusion links multiple data sources and cross-references them to create an integrated structure that lets me uncover trends and relationships that are not present in the primary data sources on their own. Data fusion is extremely important because we know that the most valuable lessons can be retrieved at the intersection of data sources.</div>
                        <div class="text no-padding">The Orchid platform is reducing NPT to ensure that we withstand the multitude of disruptors that are reshaping the industry. I’m working considerably faster and more efficiently to ensure economics-driven well completions. </div>
                        <a class="button" href="/contact/"><span>Interested in ORCHID?</span><br>Contact Us to get registered for the beta program.</a>
                    </div>
                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/app/img/orchid/img4.png"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>