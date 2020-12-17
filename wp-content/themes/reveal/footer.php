<footer>
    <div class="container">
        <nav>
            <ul>
                <li><a href="/products-and-services/technology/" >SERVICES</a></li>
                <li><a href="/technology/imagefrac/">IMAGE Frac</a></li>
                <li><a href="/technology/fraceye/">FracEYE</a></li>
                <li><a href="/technology/dscvri/">DSCVR<i>i</i></a></li>
            </ul>
            <ul>
                <li><a href="/orchid/">ORCHID</a></li>
            </ul>
            <ul>
                <li><a href="/company/">COMPANY</a></li>
                <li><a href="/company/leadership/">Leadership</a></li>
                <li><a href="/patents/">Technology</a></li>
            </ul>
            <ul>
                <li class="inactive"><a href="javascript:void(0)" oncontextmenu="return false;">RES-TV</a></li>
                <li><a href="/res-tv/customer-experience/">Customer Experience</a></li>
                <li><a href="/res-tv/talks/">Talks</a></li>
                <li><a href="/res-tv/webinars/">Webinars</a></li>
                <li><a href="/res-tv/crossword/">Crossword</a></li>
            </ul>
            <ul>
                <li class="inactive"><a href="javascript:void(0)" oncontextmenu="return false;">RESOURCES</a></li>
                <li><a href="/resources/technical-papers-articles/">Technical Papers & Articles</a></li>
            </ul>
            <ul>
                <li><a href="/news/">NEWS & EVENTS</a></li>
                <li><a href="/careers/" class="main">Careers</a></li>
            </ul>
            <ul>
                <li><a href="tel:18887383250" class="data">1.888.738.3250</a></li>
                <li><a href="/contact/" class="main">Contact</a></li>
            </ul>
        </nav>
        <div class="bottom">
            <div class="bottom-logo">
                <div class="bottom-logo-wrap"><img src="/wp-content/themes/reveal/img/Gray_WOA2019_finalist1.png"></div>
                <div class="bottom-logo-wrap"><img src="/wp-content/themes/reveal/img/hbj-bptw-2019-logo-OL-grey.png"></div>
                <a href="https://www.epmag.com/2018-meritorious-awards-engineering-innovation-1697656#p=full" target="_blank" class="avard">
                    <div class="avard__logo"></div>
                    <div class="avard__text">
                        <h3>WINNER 2018</h3>
                        <p>Meritorious Awards for<br>Engineering Innovation</p>
                    </div>
                </a>
            </div>
            <div class="copyright">
                <div class="copyright__top">Follow us
                    <a href="https://www.instagram.com/revealenergyservices/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com/RevealEnergy" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.facebook.com/RevealEnergyServices/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.linkedin.com/company/reveal-energy-services-inc." target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="copyright__bottom">
                    <div class="copyright__text">© <?php echo date("Y"); ?> Reveal Energy Services</div>
<!--                    <a href="#">Privacy Policy</a>-->
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="success__popup active">
    <div class="wrapper">
        <h2>Thank you!</h2>
        <p>We will contact you soon</p>
    </div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/app/libs/plyr/plyr.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/app/js/scripts.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/app/js/pagination.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/app/libs/owl/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/app/libs/fancybox/jquery.fancybox.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/app/libs/slickslider/slick/slick.min.js"></script>
<script>
    var options = {

    };

    var isSafari = !!navigator.userAgent.match(/safari/i) && !navigator.userAgent.match(/chrome/i) && typeof document.body.style.webkitFilter !== "undefined" && !window.chrome;

    isSafari ? addtodropdown() : '';

    function addtodropdown() {
        var dropdowns = document.querySelectorAll('.header__content__dropdown');

        dropdowns.forEach(function(item) {
            console.log(item.classList);
            item.classList.add('safari');
        })
    }
    var hackerList = new List('news-js', options);


    $('a[href="#"]').on('click', function(event) {

        var target = $( $(this).attr('href') );

        if( target.length ) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 500);
        }

    });
</script>
<script>
    var style = [
        {
            "featureType": "all",
            "elementType": "labels.text.fill",
            "stylers": [
                { "saturation": 36 }
                ,
                { "color": "#000000" }
                ,

                { "lightness": 40 }
            ]
        },
        {
            "featureType": "all",
            "elementType": "labels.text.stroke",
            "stylers": [
                { "visibility": "on" }
                ,
                { "color": "#000000" }
                ,

                { "lightness": 16 }
            ]
        },
        {
            "featureType": "all",
            "elementType": "labels.icon",
            "stylers": [

                { "visibility": "off" }
            ]
        },
        {
            "featureType": "administrative",
            "elementType": "geometry.fill",
            "stylers": [
                { "color": "#000000" }
                ,

                { "lightness": 20 }
            ]
        },
        {
            "featureType": "administrative",
            "elementType": "geometry.stroke",
            "stylers": [
                { "color": "#000000" }
                ,
                { "lightness": "15" }
                ,

                { "weight": 1.2 }
            ]
        },
        {
            "featureType": "landscape",
            "elementType": "geometry",
            "stylers": [
                { "color": "#000000" }
                ,

                { "lightness": "22" }
            ]
        },
        {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [
                { "color": "#000000" }
                ,

                { "lightness": 21 }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry.fill",
            "stylers": [
                { "color": "#000000" }
                ,

                { "lightness": 17 }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [
                { "color": "#000000" }
                ,
                { "lightness": 29 }
                ,

                { "weight": 0.2 }
            ]
        },
        {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [
                { "color": "#000000" }
                ,

                { "lightness": 18 }
            ]
        },
        {
            "featureType": "road.local",
            "elementType": "geometry",
            "stylers": [
                { "color": "#000000" }
                ,

                { "lightness": 16 }
            ]
        },
        {
            "featureType": "transit",
            "elementType": "geometry",
            "stylers": [
                { "color": "#000000" }
                ,

                { "lightness": 19 }
            ]
        },
        {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [
                { "color": "#2b2b2b" }
                ,

                { "lightness": "0" }
            ]
        }
    ];

    var markerIcon = '<?php echo get_template_directory_uri(); ?>/img/icon.png';
    function initMap() {

        var positions = {
            ululu: {lat: -25.344, lng: 131.036},
            newPosition: {lat: -19.344, lng: 132.036}
        };
        var map = new google.maps.Map(
            document.getElementById('map'), {zoom: 4, center: positions.ululu, styles: style, disableDefaultUI: true});

        var markers = [
            new google.maps.Marker({position: positions.ululu, map: map, icon: markerIcon, title: 'Eagle Ford Shale'}),
            new google.maps.Marker({position: positions.newPosition, map: map, icon: markerIcon, title: 'Eagle Ford Shale'})
        ];
        markers.forEach(function(item) {
            item.setMap(map);
        });

    }


</script>
<!--Load the API from the specified URL
* The async attribute allows the browser to render the page while the API loads
* The key parameter will contain your own API key (which is not needed for this tutorial)
* The callback parameter executes the initMap() function
-->
<!-- <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyADeL4bPME00RcirgRBP5RAbwr3dYeMpsU&callback=initMap">
</script> -->

<script>
    $(document).ready(function(){
        $(".hamburger").click(function(){
            $(this).toggleClass("is-active");
            $('.header__content').toggleClass('active');
            $('.has-dropdown').each(function() { //три строчки
                $( this ).removeClass( "toggled" );
            });
            $('.header').toggleClass('mobile-active');
        });
    });

    var clickedLinks = new Map();
    var anchor = document.querySelectorAll('a.header__menu__link');

    function onLinkClicked(event) {
        
        if ($('.mob_test').css('color') == 'rgb(255, 243, 230)') {
            if ($('.hamburger').hasClass("is-active")) {
                $('.hamburger').toggleClass("is-active");
                $('.header__content').toggleClass('active');
                $('.header').toggleClass('mobile-active');
            }
        }


        if (!clickedLinks.has(event.target)) {
            anchor.forEach(function(item) {
                item.parentElement.classList.remove('toggled');
                clickedLinks.delete(item);
            });
            event.target.parentElement.classList.toggle('toggled');
            clickedLinks.set(event.target, true);
            event.preventDefault();
            return;
        } else {
            event.target.parentElement.classList.toggle('toggled');
            clickedLinks.delete(event.target);
            event.preventDefault();
        }
    }

    anchor.forEach(function(anchor, index) {
        anchor.addEventListener('click', onLinkClicked);
    });
</script>


<!--script>
    $('.header__menu__item').click(function(e) {
        e.preventDefault();
        $(this).toggleClass('active');
        $('.header__content__dropdown').fadeToggle(200);
    });

    $(document).mousedown(function(e) {
        //при клике вне кнопки меню, самого меню и его потомков
        if (!$('.header__menu__item,.header__content__dropdown').is(e.target) && $('.header__content__dropdown').has(e.target).length === 0) {
            $('.toggled').removeClass('active');
            $('.header__content__dropdown').hide();
        }
    });
</script-->

<? wp_footer(); ?>
</body>
</html>