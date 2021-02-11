<?php
/**
* Template Name: Get a Demo Page
 */

get_header('landing');?>


<div class="landing-page">
    <section id="landing-s1" class="landing-page-info">
        <div class="container">
            <div class="row">
                <div class="info-wrap">
                    <div class="info">
                        <div class="title">
                            <?php echo get_field('mscrn__title');?>
                        </div>
                        <div class="text">
                            <?php echo get_field('mscrn__description');?>
                        </div>
                    </div>
                </div>
                <div class="form-wrap">
                    <div class="title"><?php echo get_field('mscrn__form_title');?></div>
                    <img class="form-img" src="<?php echo get_template_directory_uri();?>/app/img/content-landing-page/oil-logo.png">
                    <div title="form-iframe"><?php echo get_field('mscrn__form_iframe');?></div>
              <!--      <form action="" class="form-download landing-page" enctype="multipart/form-data" autocomplete="off">
                        <div class="connect__row">
                            <div class="connect__col connect__col--full">
                                <p>Full name</p>
                                <input type="text" name="full" required id="full">
                            </div>
                        </div>
                        <div class="connect__row">
                            <div class="connect__col connect__col--full">
                                <p>Email</p>
                                <input type="email" name="email" required id="email">
                            </div>
                        </div>
                        <div class="connect__row">
                            <div class="connect__col connect__col--full">
                                <p>Phone number</p>
                                <input type="tel" name="tel" id="tel">
                            </div>
                        </div>
                        <div class="connect__row">
                            <input class="button" type="submit" value="Download">
                        </div>
                    </form>-->
                </div>
            </div>
        </div>
        <div class="mouse" id="mouse-wrap">
            <a href="#landing-s2" class="mouse-icon">
                <span class="mouse-wheel"></span>
            </a>
        </div>
    </section>
    <?php if(get_field('reviews')): ?>
        <section id="landing-s4" class="landing-page-reviews">
            <div class="container">
                <div class="row">
                    <div class="text"><?php echo get_field('reviews__block_title');?></div>
                </div>
                <div class="reviews-slider-wrap">
                    <div class="reviews-slider">
                        <?php foreach(get_field('reviews') as $review):?>
                            <div class="review">
                                <div class="text-wrap">
                                    <div class="title">
                                        <?php echo $review['title'];?>
                                    </div>
                                    <div class="text">
                                        <?php echo $review['text'];?>
                                    </div>
                                </div>
                                <div class="about-wrap">
                                    <div class="photo">
                                        <?php if($review['partner']['image']):?>
                                            <img src="<?php echo $review['partner']['image']['url'];?>"
                                                 alt="<?php echo $review['partner']['image']['alt'];?>">
                                        <?php else:?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/app/img/orchid/logo2.png">
                                        <?php endif;?>
                                    </div>
                                    <div class="name">
                                        <?php echo $review['partner']['name'];?>
                                    </div>
                                    <div class="position">
                                        <?php echo $review['partner']['position'];?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                    <div class="reviews-arrow"></div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php if(get_field('information_blocks')):?>
        <div class="b5">
            <?php foreach(get_field('information_blocks') as $information):?>
                <div class="block">
                    <div class="info-wrapper container">
                        <div class="image-wrap">
                            <img src="<?php echo $information['image']['url'];?>"
                                 alt="<?php echo $information['image']['alt'];?>">
                        </div>
                        <div class="info-wrap">
                            <div class="title">
                                <?php echo $information['title'];?>
                            </div>
                            <?php echo $information['text'];?>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    <?php endif;?>


<?php get_footer('landing'); ?>