<?php
/**
* Template Name: Content Landing Page
 */

get_header('landing');?>


<!-- TODO: Заменить BUTTON проверку-->
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
                    <?php if(get_field('mscrn__points')):?>
                        <div class="list">
                            <?php foreach (get_field('mscrn__points') as $item):?>
                                <div class="item">
                                    <?php echo $item['text'];?>
                                </div>
                            <?php endforeach;?>
                        </div>
                    <?php endif;?>
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


    <?php if(get_field('covered__items')): ?>
        <section id="landing-s3" class="landing-page-icons">
            <div class="container">
                <div class="row">
                    <div class="text">
                        <?php echo get_field('covered__title');?>
                    </div>
                </div>
                <div class="icons-wrapper">
                    <?php foreach(get_field('covered__items') as $item): ?>
                        <div class="item">
                            <div class="icon">
                                <?php if($item['image']): ?>
                                    <img src="<?php echo $item['image']['url'];?>"
                                         alt="<?php echo $item['image']['alt'];?>"
                                    />
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri();?>/app/img/content-landing-page/AccessIcon.png"
                                         alt=""
                                    />
                                <?php endif; ?>
                            </div>
                            <div class="title"><?php echo $item['title'];?></div>
                            <div class="text"><?php echo $item['text'];?></div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        </section>
    <?php endif;?>
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
                                            <!--TODO:ЗАГЛУШКУ-->
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
    <?php if(get_field('get__title') || get_field('get__button') || get_field('get__image')): ?>
        <section id="landing-s5" class="landing-page-demo">
            <div class="container">
                <div class="row title-wrap">
                    <?php if(get_field('get__title')):?>
                        <div class="title">
                            <?php echo get_field('get__title');?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <?php if(get_field('get__text')):?>
                        <div class="text">
                            <?php echo get_field('get__text');?>
                        </div>
                    <?php endif; ?>
                    <?php if(get_field('get__button')):?>
                        <a class="button" href="<?php echo get_field('get__button')['link'];?>">
                            <?php echo get_field('get__button')['text'];?>
                        </a>
                    <?php endif; ?>
                </div>
                <?php if(get_field('get__image')):?>
                    <div class="row">
                        <div class="img">
                            <img src="<?php echo get_field('get__image')['url'];?>"
                                 alt="<?php echo get_field('get__image')['alt'];?>"
                            />
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>
</div>

<?php get_footer('landing'); ?>