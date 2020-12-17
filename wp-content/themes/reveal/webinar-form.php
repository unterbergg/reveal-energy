<div class="web-form-right" id="popup-form">
    <div class="sidebarform">
        <div class="content-web casestudies-page ">
            <div class="web-adv">
                <div class="web-content">
<?php
$value;
if(get_queried_object()->slug == '') {
    $value = get_queried_object()->post_name;
} else {
    $value = get_queried_object()->slug;
}
?>
                    <p class="subject margin-more">How can we help you today?</p>
                    <div class="web-register-form">
                        <form class="register-form" action="" method="post" id="form">
                            <div class="form-row">
                                <input type="hidden" name="ga_event" value="<?php echo $value ?>">
                                <div class="form-input">
                                    <span>Company</span>
                                    <input type="hidden" name="action" value="custom_registration">
                                    <input id="company" type="text" name="company" value="" class="company">
                                </div>
                                <div class="form-input">
                                    <span>Title</span>
                                    <input id="title" type="text" name="title" value="" class="title">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-input">
                                    <span>First Name <strong>*</strong></span>
                                    <input id="fname" type="text" name="fname" value="" class="required fname">
                                </div>
                                <div class="form-input">
                                    <span>Last Name <strong>*</strong></span>
                                    <input id="lname" type="text" name="lname" value="" class="required lname">
                                </div>
                            </div>
                            <div class="form-row last">
                                <span>Company email <strong>*</strong></span>
                                <input id="email" type="text" name="email" value="" class="required email">
                            </div>
                            <div class="btn-reg-web">
                                <button class="register" type="submit" name="submit">SUBMIT</button>
                                <div class="webinar-popup-success">
                                    Thank you for interest in our services.
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>