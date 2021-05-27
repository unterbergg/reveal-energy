<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <!-- <base href="/"> -->

    <title>
        <?php

        $site_description = get_bloginfo( 'description', 'display' );
        $site_name = get_bloginfo( 'name' );
        $cat_id = get_query_var('cat');
        $term = get_queried_object();
        $slug = $term->slug;
        //for home page
        if ( $site_description && ( is_home() || is_front_page() ) ) {
            echo $site_name; echo ' | ' . $site_description;
        }
        // проверяем не является ли текущая страница постом
        elseif (!is_category($cat_id) && !is_home()) {
            echo the_title() . ' | '. $site_name;
        }
        // проверяем является ли текущая страница страницей
        elseif (is_category())  {
            single_term_title(); echo ' | '. $site_name;
        }
        ?>
    </title>
    <meta name="description" content="">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Template Basic Images Start -->

    <!-- Favicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico">

    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-96x96.png" sizes="96x96">
    <!-- Apple/Safari icon -->
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-180x180.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/app/img/apple-icon-precomposed.png">
    <!-- Square Windows tiles -->
    <meta name="msapplication-square70x70logo" content="<?php echo get_template_directory_uri(); ?>/img/favicon/ms-icon-70x70.png">
    <meta name="msapplication-square150x150logo" content="<?php echo get_template_directory_uri(); ?>/img/favicon/ms-icon-150x150.png">
    <meta name="msapplication-square310x310logo" content="<?php echo get_template_directory_uri(); ?>/img/favicon/ms-icon-310x310.png">
    <!-- Template Basic Images End -->

    <!-- Custom Browsers Color Start -->
    <meta name="theme-color" content="#000">
    <!-- Custom Browsers Color End -->

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/app/css/main.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/app/libs/fapro/css/all.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/app/libs/plyr/plyr.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/app/css/plyr-custom.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/app/libs/owl/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/app/libs/owl/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/app/libs/fancybox/jquery.fancybox.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/app/libs/slickslider/slick/slick.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/app/libs/slickslider/slick/slick-theme.css"/>


    <script>
        var admin_url = "<?php echo admin_url("admin-ajax.php") ?>";
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94007339-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-94007339-1');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115166232-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-115166232-1'); // our GA
    </script>
<meta property="og:type" content="article" />
<meta property="og:image" content="http://st.reveal-energy.com/wp-content/uploads/2019/05/thumbnail_image007.jpg" />
<meta property="og:description" content="Innovative pressure based maps of the fractured environment." />

</head>

<body class="body-landing">
<?php
    $parentPage = get_post_field( 'post_name', $post->post_parent );
    $currentPage = get_post_field( 'post_name', $post->id );
    $currentPageType = get_post_field('post_type', $post->id);
?>

<header class="header">
    <div class="mob_test"></div>
    <div class="container">
        <div class="row row--spacebetween">
            <div class="header__logo">
                <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/app/img/logo.svg" alt=""></a>
            </div>
            <div class="header__content">
                <a class="button" href="/contact/">Get in Touch</a>
            </div>
        </div>
    </div>
</header>

