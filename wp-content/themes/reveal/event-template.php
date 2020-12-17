<?php
/**
* Template Name: Event Template
 */

get_header('event');?>

<section class="page-info page-info--frac event">
    <div class="container">
        <div class="row">
            <div class="event-title">Parent well protection workshop</div>
        </div>
    </div>
</section>

<section class="technology-content">
    <div class="container">
        <div class="row row-event">
            <div class="technology-content__description event-block">
                <img src="<?php echo get_template_directory_uri(); ?>//img/map-crop.png">
                <p class="event-text"><span>Protecting a parent well from child</span> well fluid communication is a vital driver of unconventional completion designs. By creating the optimal completion, operators can minimize child well fluid communication, or frac hits, and the potential adverse effect on parent well production.</p>
                <p class="event-text">During this collaborative, informative workshop, operators will be discussing successful strategies to protect parent wells from frac hits. This knowledge-sharing workshop is not open to the public, will not be recorded, and materials will not be distributed after the event. </p>
                <p class="event-text">We hope you’ll join us for this exclusive invitation-only, half-day interactive workshop to further the industry’s understanding of frac hits. We’re looking forward to seeing you there. </p>
            </div>
            <div class="technology-content__awards event-block event-block-form">
                <div class="event-form-title">Thursday, February 27, 2020 • 1:00–6:00 p.m. Hilton Garden Inn, Midland</div>
                <div class="title-time">Agenda</div>
                <div class="event-time">1:00–4:00 p.m.  Presentations</div>
                <div class="event-time">4:00–4:45 p.m. Panel discussion</div>
                <div class="event-time">4:45–6:00 p.m. Networking happy hour</div>
                <div class="title-time">Registration</div>

                <div class="form-event-wrap">
                    <form action="<?php echo site_url();?>/wp-admin/admin-ajax.php" class="formevent" enctype="multipart/form-data" autocomplete="off" method="POST">

                        <div class="connect__row">
                            <div class="connect__col connect__col--full">
                                <p>First name</p>
                                <input type="text" name="firstname" required id="firstname">
                            </div>
                        </div>

                        <div class="connect__row">
                            <div class="connect__col connect__col--full">
                                <p>Last name</p>
                                <input type="text" name="lastname" required id="lastname">
                            </div>
                        </div>

                        <div class="connect__row">
                            <div class="connect__col connect__col--full">
                                <p>Email</p>
                                <input type="email" name="emailevent" required id="emailevent">
                            </div>
                        </div>


                        <div class="connect__row">
                            <div class="connect__col connect__col--full">
                                <p>Phone</p>
                                <input type="tel" name="televent" required id="televent">
                            </div>
                        </div>

                        <div class="connect__row">
                            <div class="connect__col connect__col--full">
                                <p>Organization</p>
                                <input type="text" name="companyevent" required id="companyevent">
                            </div>
                        </div>

                        <div class="connect__row">
                            <div class="connect__col connect__col--full">
                                <p>Job title</p>
                                <input type="text" name="jobevent" required id="jobevent">
                            </div>
                        </div>


                        <div class="connect__row btn-event">
                            <input type="submit" value="Register">
                        </div>
                        <input type="hidden" name="action" value="eventForm">
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>
