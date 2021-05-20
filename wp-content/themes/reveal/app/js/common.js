$(function() {
    const players = Array.from(document.querySelectorAll('.player_main')).map(p => new Plyr(p));

    var owlProducts = $('.products-owl').owlCarousel({
        loop:false,
        margin:15,
        nav: false,
        items: 3,
        autoWidth:true
    });


    var owlRes = $('.res-owl').owlCarousel({
        loop:false,
        margin:15,
        nav: false,
        items: 1,
        autoWidth:true
    });

    var owlHistory = $('.history__slider').owlCarousel({
        loop:true,
        margin:15,
        nav: false,
        autoHeight:true,
        items: 1,
        navText: ["<i class=\"far fa-arrow-left\"></i>","<i class=\"far fa-arrow-right\"></i>"]
    });

    $('.history__element').on('click', function() {
        owlHistory.trigger('to.owl.carousel', $(this).data( 'id' ) );
    });

    owlHistory.on('changed.owl.carousel', function (e) {
        $('.history__element').each(function() {
            $(this).removeClass('history__element--active');
        });
        var offset = $('.history__element-' + e.page.index).offset().left - $('.history__line').offset().left + $('.history__line').scrollLeft();
        $('.history__line').animate({scrollLeft: offset}, 500);
        $('.history__element-' + e.page.index).addClass('history__element--active');
    });

    $('.owl-scroll').click(function() {
        var scrollDirection = $(this).data('direction');
        owlProducts.trigger(scrollDirection + '.owl');
    });
    owlProducts.on('changed.owl.carousel', function(event)
    {
        var count = event.item.count;
        var pos = event.relatedTarget.normalize(event.item.index, true);

        $('.owl-scroll--last').removeClass('disabled');
        $('.owl-scroll--first').removeClass('disabled');
        if(pos === 0) {
            $('.owl-scroll--first').addClass('disabled');
        }
        if(pos === count - 3) {
            $('.owl-scroll--last').addClass('disabled');
        }
    });

    $('.owl-scroll').click(function() {
        var scrollDirection = $(this).data('direction');
        owlRes.trigger(scrollDirection + '.owl');
    });
    owlRes.on('changed.owl.carousel', function(event)
    {
        var count = event.item.count;
        var pos = event.relatedTarget.normalize(event.item.index, true);

        $('.owl-scroll--last').removeClass('disabled');
        $('.owl-scroll--first').removeClass('disabled');
        if(pos === 0) {
            $('.owl-scroll--first').addClass('disabled');
        }
        if(pos === count - 3) {
            $('.owl-scroll--last').addClass('disabled');
        }
    });

        $('.less').click(function(e) {
            e.preventDefault();
            $(this).hasClass('plus') ? $(this).html('Show less') : $(this).html('Show more');
            $(this).toggleClass('plus');
            $(this).parent().prev().toggleClass('visible');
        })
});


$(".form").submit(function (e) {
    if ($(this).hasClass('contacts')) {
        e.preventDefault();

        var fd = new FormData();
        fd.append('action', 'contact_send');
        fd.append('form_type', 'default');
        if (!$(this).hasClass('schedule'))
        {
            fd.append('file', $(this).find("#file").prop('files')[0]);
        }
        fd.append('form_company', $(this).find("#company").val());
        fd.append('form_name', $(this).find("#full").val());
        fd.append('form_title', $(this).find("#title").val());
        fd.append('form_email', $(this).find("#email").val());
        fd.append('form_phone', $(this).find("#tel").val());
        fd.append('form_message', $(this).find("#message").val());
        jQuery.ajax({
            url: admin_url,
            type: "post",
            dataType: "JSON",
            data: fd,
            processData: false,
            contentType: false,
            success: function (data) {
                $('.success__popup>.wrapper>p').html('Your message was sent successfully. We will contact you soon.');
                $(".success__popup").toggleClass('visible');
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                $('.success__popup>.wrapper>p').html('ERROR');
                $(".success__popup").toggleClass('visible');
            }
        });

    }
    else {
        e.preventDefault();
        return false;
    }
});
$(".formevent").submit(function (e) {
        e.preventDefault();
        var fd = new FormData();
        fd.append('action', "eventForm");
        fd.append('firstname', $(this).find("#firstname").val());
        fd.append('lastname', $(this).find("#lastname").val());
        fd.append('emailevent', $(this).find("#emailevent").val());
        fd.append('televent', $(this).find("#televent").val());
        fd.append('companyevent', $(this).find("#companyevent").val());
        fd.append('jobevent', $(this).find("#jobevent").val());
        console.log(fd);
        jQuery.ajax({
            url: $(this).attr("action"),
            type: "post",
            dataType: "JSON",
            data: fd,
            processData: false,
            contentType: false,
            success: function (data) {
                $('.success__popup>.wrapper>p').html('Registration completed successfully');
                $(".success__popup").toggleClass('visible');
                setTimeout(()=>{
                    $(".success__popup").removeClass('visible');
                    window.location.href = "/";
                },10000);
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                $('.success__popup>.wrapper>p').html('ERROR');
                $(".success__popup").toggleClass('visible');
            }
        });

});
$(".success__popup").click(function() {
    $(".success__popup").toggleClass('visible');
})


var inp = $("#file");
var label = $("#file-label");
inp.change(function () {
    console.log('input - ', inp);
    console.log('label - ', label);
    var file_name = inp.val().replace("C:\\fakepath\\", '');
    console.log('filename - ', file_name);
    if (!file_name.length)
        return;

    label.html(file_name);

}).change();


$(document).ready(function(){
    $("#mouse-wrap").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });
});


// $('.menu-search-item ').click(function() {
//     $('#s').focus();
// });


$(document).ready(function(){
    $('.dscvri-slider-tablet').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        asNavFor: '.dscvri-slider-for3',
        infinite: true
    });
    $('.dscvri-slider-text').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.dscvri-slider-for2',
        infinite: true
    });
    $('.dscvri-slider-item').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.dscvri-slider-for',
        dots: false,
        focusOnSelect: true,
        infinite: true,
        appendArrows: $('.dscvri-arrow'),
        prevArrow: '<button id="prev" type="button" class="owl-prev-d"><i class="fas fa-arrow-left"></i></button>',
        nextArrow: '<button id="next" type="button" class="owl-next-d"><i class="fas fa-arrow-right"></i></button>'
    });
});
$(document).ready(function(){
    $('.reviews-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        focusOnSelect: true,
        infinite: true,
        appendArrows: $('.reviews-arrow'),
        prevArrow: '<button id="prev" type="button" class="owl-prev-d"><i class="fas fa-arrow-left"></i></button>',
        nextArrow: '<button id="next" type="button" class="owl-next-d"><i class="fas fa-arrow-right"></i></button>'
    });
});


$(document).ready(function(){
    $('.get-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        focusOnSelect: true,
        infinite: true,
        appendArrows: $('.get-arrow'),
        prevArrow: '<button id="prev" type="button" class="owl-prev-d"><i class="fas fa-arrow-left"></i></button>',
        nextArrow: '<button id="next" type="button" class="owl-next-d"><i class="fas fa-arrow-right"></i></button>'
    });
});