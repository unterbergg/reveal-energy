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
                    <div class="min-text"><img src="<?php echo get_template_directory_uri(); ?>/app/img/orchid/123.svg"> Mark of Reveal Energy Services</div>
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
                        <div class="title">Feedback from our partners</div>
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
                                                    <img src="https://i.pinimg.com/originals/28/61/41/2861419363eb4a02c2fb0cacbce5f87e.jpg">
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
                    <?php if(get_field('clients__clients')):?>
                        <div class="b3">
                        <div class="logo-wrap">
                            <?php foreach(get_field('clients__clients') as $client):?>
                                <div class="logo">
                                    <img src="<?php echo $client['logo']['url'];?>" alt="<?php echo $client['logo']['alt'];
                                    ?>">
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                    <?php endif;?>
                    <?php if(get_field('showing__items')):?>
                        <div class="b4">
                            <div class="row">
                                <div class="text">The critical insight has been to focus on human factors</div>
                                <a class="button" href="#">Interested in ORCHID?</a>
                            </div>
                            <div class="row">
                                <div class="img">
                                    <img src="https://freebornaiden.com/wp-content/uploads/2018/02/maxresdefault-1170x658.jpg" alt=""/>
                                </div>
                            </div>
                        </div>
                    <?php endif;?>
                    <?php if(get_field('showing__items')):?>
                        <div class="b5">
                            <div class="video-wrap">
                                <div class="container dscvriv-vidio">
                                    <div class="content-col__videowrapper dscvriv-vidio-wrap">
                                        <video poster="/wp-content/uploads/2019/07/ScreenDSCVRi-e1562671115426.png" controls data-plyr-config='{ "title": "Protect Parent Well. Enhance Child Wells.", "description": "Can you protect the parent well while enhancing the fracture geometry of the child well?"}' class="player_main" playsinline controls>
                                            <source src="https://www.dropbox.com/s/cmsl9jdjyu29bz6/dscvri-19-07-16REVISED.mp4?raw=1" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div>
                            <div class="info-wrap">
                                <div class="title">Maecenas tempus</div>
                                <ol class="text-wrap">
                                    <li>Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</li>
                                    <li>Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.</li>
                                    <li>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</li>
                                    <li>Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.</li>
                                </ol>
                            </div>
                        </div>
                    <?php endif;?>
                    <?php if(get_field('showing__items')):?>
                        <div class="b6">
                            <div class="row">
                                <div class="text">The critical insight has been to focus on human factors</div>
                                <a class="button" href="#">Schedule a ORCHID Demo</a>
                            </div>
                        </div>
                    <?php endif;?>
                    <?php if(get_field('showing__items')):?>
                        <div class="b7">
                            <div class="title"></div>
                            <div class="faq-wrap">
                                <button class="accordion">Section 1</button>
                                <div class="panel">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>

                                <button class="accordion">Section 2</button>
                                <div class="panel">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>

                                <button class="accordion">Section 3</button>
                                <div class="panel">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>

                            </div>
                        </div>
                    <?php endif;?>
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
        </section>
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