<?php
/**
* Template Name: New Orchid Product Page
 */

get_header('nozoom');?>


    <div class="orchid-page">
        <section class="page-info page-info-orchid">
            <div class="container">
                <div class="row">
                    <ul class="breadcrumbs">
                        <li><a href="/">Home</a></li>
                        <li><a href="#">Orchid</a></li>
                    </ul>
                </div>
                <div class="row logo-row">
                    <div class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/app/img/orchid/colored-logo.svg">
                    </div>
                    <div class="info-wrap">
                        <h1 class="title"><?php echo get_field('mscrn__title');?></h1>
                        <div class="info">
                            <?php echo get_field('mscrn__text');?>
                        </div>
                        <?php if(get_field('mscrn__Button')['link'] && (get_field('mscrn__Button')['title'] ||
                                get_field('mscrn__Button')['description'])):?>
                            <a class="button" href="<?php echo get_field('mscrn__Button')['link'];?>">
                                <span><?php echo get_field('mscrn__Button')['title'];?></span>
                                <br>
                                <?php echo get_field('mscrn__Button')['description'];?>
                            </a>
                        <?php endif;?>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mark-wrap">
                    <!--<div class="min-text"><img src="<?php /*echo get_template_directory_uri(); */?>/app/img/orchid/123.svg"> Mark of Reveal Energy Services</div>-->
                    <div class="logo-wrap"><img class="img" src="<?php echo get_template_directory_uri();?>/app/img/content-landing-page/oil-logo.png"></div>
                </div>
            </div>
        </section>
        <section class="product-orchid">
            <div class="container">
                <div class="page-content">
                    <?php if(get_field('showing__items')):?>
                        <div class="b1">
                        <div class="title">
                            <?php echo get_field('showing__title');?>
                        </div>
                        <div class="items-wrap">
                            <?php foreach (get_field('showing__items') as $item):?>
                                <div class="item">
                                    <div class="img">
                                        <img src="<?php echo $item['image']['url'];?>"
                                             alt="<?php echo $item['image']['alt'];?>"
                                        >
                                    </div>
                                    <div class="item-title">
                                        <?php echo $item['title'];?>
                                    </div>
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                    <?php endif;?>
                    <?php if(get_field('reviews')):?>
                        <div class="b2">
                        <div class="title"><?php echo get_field('reviews__title');?></div>
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
                                                    <img src="<?php echo get_template_directory_uri(); ?>/app/img/orchid/logo.png">
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
                    <?php endif;?>
                    <?php if(get_field('get__slider')):?>
                        <div class="b4">
                            <div class="row title-wrapper">
                                <?php if(get_field('get__section_title')):?>
                                    <div class="text">
                                        <?php echo get_field('get__section_title');?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="slider-wrapper">
                                <div class="get-slider">
                                    <?php foreach(get_field('get__slider') as $slide):?>
                                        <div class="slide">
                                            <div class="row info">
                                                <div class="text"><?php echo $slide['title'];?></div>
                                                <a class="button" href="<?php echo $slide['button']['link'];?>">
                                                    <?php echo $slide['button']['text'];?>
                                                </a>
                                            </div>
                                            <div class="row">
                                                <div class="img">
                                                    <img src="<?php echo $slide['image']['url'];?>"
                                                         alt="<?php echo $slide['image']['alt'];?>"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach;?>
                                </div>
                                <div class="get-arrow"></div>
                            </div>
                        </div>
                    <?php endif;?>
                    <?php if(get_field('information_blocks')):?>
                        <div class="b5">
                            <?php /* if(get_field('vblock__video')['poster'] && get_field('vblock__video')['link'] &&
                            get_field('vblock__video')['title'] && get_field('vblock__video')['description']):?>
                            <div class="video-wrap">
                                <div class="container dscvriv-vidio">
                                    <div class="content-col__videowrapper dscvriv-vidio-wrap">
                                        <video poster="<?php echo get_field('vblock__video')['poster']['url'];?>"
                                               controls
                                               data-plyr-config='{ "title": "<?php echo get_field('vblock__video')['title'];?>", "description": "<?php echo get_field('vblock__video')['description'];?>"}'
                                               class="player_main"
                                               playsinline
                                        >
                                            <source src="<?php echo get_field('vblock__video')['link'];?>"
                                                    type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div>
                        <?php endif;*/?>
                            <?php foreach(get_field('information_blocks') as $information):?>
                                <div class="block">
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
                            <?php endforeach;?>
                        </div>
                    <?php endif;?>
                    <?php if(get_field('orchiddemo__text') || (get_field('orchiddemo__button')['text'] &&
                            get_field('orchiddemo__button')['link'])):?>
                        <div class="b6">
                            <div class="row">
                                <?php if(get_field('orchiddemo__text')):?>
                                    <div class="text">
                                        <?php echo get_field('orchiddemo__text');?>
                                    </div>
                                <?php endif;?>
                                <?php if(get_field('orchiddemo__button')['text'] && get_field('orchiddemo__button')['link']):?>
                                    <a class="button" href="<?php echo get_field('orchiddemo__button')['link'];?>">
                                        <?php echo get_field('orchiddemo__button')['text'];?>
                                    </a>
                                <?php endif;?>
                            </div>
                        </div>
                    <?php endif;?>
                    <?php if(get_field('faqs__faqs')):?>
                        <div class="b7">

                            <div class="title">
                                <?php echo get_field('faqs__title');?>
                            </div>
                            <div class="faq-wrap">
                                <?php foreach(get_field('faqs__faqs') as $key => $item):?>
                                    <button class="accordion <?php echo $key%2 === 0 ? '':'even';?>">
                                        <?php echo $item['question'];?>
                                    </button>
                                    <div class="panel <?php echo $key%2 === 0 ? '':'even';?>">
                                        <?php echo $item['answer'];?>
                                    </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    <?php endif;?>
                    <?php if(get_field('contact__iframe')):?>
                    <div class="b8">
                        <div class="title"><?php echo get_field('contact__title');?></div>
                        <?php echo get_field('contact__iframe');?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
        </section>
        <!--<section class="connect">
            <div class="container">
                <div class="col">
                    <h2 class="margin-bottom">How can we help?</h2>
                </div>
                <div class="row row--form">
                    <form action="" class="form contacts" enctype="multipart/form-data" autocomplete="off">
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
                    </form>
                </div>
            </div>
        </section>-->
    </div>

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight){
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
<?php get_footer(); ?>