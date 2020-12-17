<?php

/**
 * Enqueue scripts and styles.
 *
 * @since Reveal 2.0
 */
function reveal_scripts() {
    // Add custom fonts, used in the main stylesheet.
    wp_enqueue_style( 'twentyfifteen-fonts', twentyfifteen_fonts_url(), array(), null );

    // Add Genericons, used in the main stylesheet.
    wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.2' );

    // Load our main stylesheet.
    wp_enqueue_style( 'twentyfifteen-style', get_stylesheet_uri() );

    // Load the Internet Explorer specific stylesheet.
    wp_enqueue_style( 'twentyfifteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentyfifteen-style' ), '20141010' );
    wp_style_add_data( 'twentyfifteen-ie', 'conditional', 'lt IE 9' );

    // Load the Internet Explorer 7 specific stylesheet.
    wp_enqueue_style( 'twentyfifteen-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'twentyfifteen-style' ), '20141010' );
    wp_style_add_data( 'twentyfifteen-ie7', 'conditional', 'lt IE 8' );

    wp_enqueue_script( 'twentyfifteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20141010', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    if ( is_singular() && wp_attachment_is_image() ) {
        wp_enqueue_script( 'twentyfifteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20141010' );
    }

    wp_enqueue_script( 'twentyfifteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20150330', true );
    wp_localize_script( 'twentyfifteen-script', 'screenReaderText', array(
        'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'twentyfifteen' ) . '</span>',
        'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'twentyfifteen' ) . '</span>',
    ) );
}
add_action( 'wp_enqueue_scripts', 'reveal_scripts' );


/**
 * Implement the Custom Header feature.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/customizer.php';



class Main_Walker_Nav_Menu extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = array())
    { //ul
        $indent = str_repeat("\t", $depth);
        $submenu = ($depth > 0) ? 'header__menu__child dropdown-menu ' : 'header__content__dropdown';
        $output .= "\n$indent<ul class=\"$submenu depth_$depth\">\n";
    }


    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) { 
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $li_attributes = '';
        $class_names = $value = '';

        $classes = empty($item->classes) ? array() : (array)$item->classes;

        $classes[] = ($args->walker->has_children) && $depth < 1 ? 'has-dropdown' : '';
        $classes[] = ($item->current || $item->current_item_anchestor) ? 'active' : '';
        $itemclass = $depth > 1 ? 'header__menu__childItem' : 'header__menu__item';
        $classes[] = 'menu-item-' . $item->ID . ' '. $itemclass;
        if ($depth && $args->walker->has_children) {
            $classes[] = 'dropdown-submenu';
        }

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

        $output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';

        $classname = $depth > 0 ? 'header__menu__title' : 'header__menu__link';
        if( $depth > 1) { $classname = '';}
        $attributes = !empty($item->url) ? ' class="'. $classname .'" href="' . esc_attr($item->url) . '"' : '';

        $attributes .= ($args->walker->has_children) ? ' class="dropdown-toggle menu__lnk" data-toggle="dropdown"' : '';

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= ($depth == 0 && $args->walker->has_children) ? '</a>' : '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);

    }
}

// This theme uses wp_nav_menu() in two locations.
register_nav_menus(array(
    'top' => __('Top Menu', 'reveal'),
));

function reveal_breadcrumbs()
{
    $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
    $home = 'Home'; // text for the 'Home' link
    $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
    $before = '<li class="current"><span>'; // tag before the current crumb
    $after = '</span></li>';

    global $post;
    $homeLink = get_bloginfo('url');

    if (is_home() || is_front_page()) {

        if ($showOnHome == 1) echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a></div>';

    } else {

        echo '<ul class="breadcrumb"><li><a href="' . $homeLink . '">' . $home . '</a></li>';

        if (is_category()) {
            $thisCat = get_category(get_query_var('cat'), false);
            if ($thisCat->parent != 0) echo '<li>' . get_category_parents($thisCat->parent, TRUE, '</li>');
            echo $before . single_cat_title('', false) . $after;
        }   elseif (is_page() && $post->post_parent) {
            $parent_id = $post->post_parent;
            $breadcrumbs = [];
            while ($parent_id) {
                $page = get_post($parent_id);
                $breadcrumbs[] = '<li>' . get_the_title($page->ID) . '</li>';
                $parent_id = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            for ($i = 0; $i < count($breadcrumbs); $i++) {
                echo $breadcrumbs[$i];
                if ($i != count($breadcrumbs) - 1) echo ' ';
            }
            if ($showCurrent == 1) echo ' ' . $before . get_the_title() . $after;
        }  elseif (is_404()) {
            echo $before . 'Error 404' . $after;
        }
        echo '</ul>';
    }
}

function reveal_pagination() {

	global $wp_query;

	if ( $wp_query->max_num_pages <= 1 ) return;

	$big = 999999999; // need an unlikely integer

	$pages = paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'current' => max( 1, get_query_var('paged') ),
		'total' => $wp_query->max_num_pages,
		'type'  => 'array',
		'prev_next'          => false
	) );
	$pages_max = $wp_query->max_num_pages;
	$page_current = get_query_var('paged', 1);

	if ($page_current === 0)
		$page_current = 1;
	if( is_array( $pages ) ) {
		$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
		echo '<ul class="pagination">';
		foreach ( $pages as $page ) {
			if (strpos($page, 'current')) {
				echo "<li class='active'><div class='page active'>$page</div></li>";
			} else if (strpos($page, 'dots')) {
				echo "<li>...</li>";
			} else {
				echo "<li>$page</li>";
			}
		}
		if($page_current != $pages_max) {

		echo "</ul><div class=\"buttons\"><a href='". get_previous_posts_page_link() ."' class=\"prev\"><i class=\"far fa-arrow-left\"></i></a><a href='". get_next_posts_page_link() ."' class=\"next\"><i class=\"far fa-arrow-right\"></i></a></div>";
		}
        if($page_current == $pages_max) {

            echo "</ul><div class=\"buttons\"><a href='". get_previous_posts_page_link() ."' class=\"prev\"><i class=\"far fa-arrow-left\"></i></a></div>";
        }
	}
}

function remove_empty_p( $content ) {
	$content = force_balance_tags( $content );
	$content = preg_replace( '#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content );
	$content = preg_replace( '~\s?<p>(\s|&nbsp;)+</p>\s?~', '', $content );
	return $content;
}
add_filter('the_content', 'remove_empty_p', 20, 1);

function reveal_post_types(){
    register_post_type('leadership', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Leadership', // основное название для типа записи
            'singular_name'      => 'Leadership', // название для одной записи этого типа
            'add_new'            => 'Add Leadership', // для добавления новой записи
            'add_new_item'       => 'Adding New Leadership', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Editing Leadership', // для редактирования типа записи
            'new_item'           => 'New Leadership', // текст новой записи
            'view_item'          => 'Check Leadership', // для просмотра записи этого типа.
            'search_items'       => 'Search Leadership', // для поиска по этим типам записи
            'not_found'          => 'Not Found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Leadership', // название меню
        ),
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => null, // зависит от public
        'exclude_from_search' => null, // зависит от public
        'show_ui'             => null, // зависит от public
        'show_in_menu'        => null, // показывать ли в меню адмнки
        'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
        'show_in_nav_menus'   => null, // зависит от public
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => null,
        'hierarchical'        => false,
        'supports'            => array('title','editor'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => array(),
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ) );

    register_post_type('News', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'News', // основное название для типа записи
            'singular_name'      => 'News', // название для одной записи этого типа
            'add_new'            => 'Add News', // для добавления новой записи
            'add_new_item'       => 'Adding News', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Editing News', // для редактирования типа записи
            'new_item'           => 'New News', // текст новой записи
            'view_item'          => 'View News', // для просмотра записи этого типа.
            'search_items'       => 'Search News', // для поиска по этим типам записи
            'not_found'          => 'Not Found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'News', // название меню
        ),
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => null, // зависит от public
        'exclude_from_search' => null, // зависит от public
        'show_ui'             => null, // зависит от public
        'show_in_menu'        => null, // показывать ли в меню адмнки
        'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
        'show_in_nav_menus'   => null, // зависит от public
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => null,
        'hierarchical'        => false,
        'supports'            => array('title','editor'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => array(),
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ) );

    register_post_type('techpapers', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'Technical Papers & Articles', // основное название для типа записи
            'singular_name'      => 'Technical Paper', // название для одной записи этого типа
            'add_new'            => 'Add Technical Paper', // для добавления новой записи
            'add_new_item'       => 'Adding Technical Paper', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Editing Technical Paper', // для редактирования типа записи
            'new_item'           => 'New Technical Paper', // текст новой записи
            'view_item'          => 'View Technical Paper', // для просмотра записи этого типа.
            'search_items'       => 'Search Technical Paper', // для поиска по этим типам записи
            'not_found'          => 'Not Found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Technical Papers', // название меню
        ),
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => null, // зависит от public
        'exclude_from_search' => null, // зависит от public
        'show_ui'             => null, // зависит от public
        'show_in_menu'        => null, // показывать ли в меню адмнки
        'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
        'show_in_nav_menus'   => null, // зависит от public
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => null,
        'hierarchical'        => false,
        'supports'            => array('title','editor'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => array(),
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ) );

    register_post_type('history', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'History', // основное название для типа записи
            'singular_name'      => 'History', // название для одной записи этого типа
            'add_new'            => 'Add History Date', // для добавления новой записи
            'add_new_item'       => 'Adding History Date', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Editing History Date', // для редактирования типа записи
            'new_item'           => 'New History Date', // текст новой записи
            'view_item'          => 'View History Date', // для просмотра записи этого типа.
            'search_items'       => 'Search History Date', // для поиска по этим типам записи
            'not_found'          => 'Not Found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'History', // название меню
        ),
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => null, // зависит от public
        'exclude_from_search' => null, // зависит от public
        'show_ui'             => null, // зависит от public
        'show_in_menu'        => null, // показывать ли в меню адмнки
        'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
        'show_in_nav_menus'   => null, // зависит от public
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => null,
        'hierarchical'        => false,
        'supports'            => array('title','editor'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => array(),
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ) );

    register_post_type('imagefrac', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'ImageFrac products', // основное название для типа записи
            'singular_name'      => 'ImageFrac product', // название для одной записи этого типа
            'add_new'            => 'Add Image Frac product', // для добавления новой записи
            'add_new_item'       => 'Adding Image Frac product', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Editing Image Frac product', // для редактирования типа записи
            'new_item'           => 'New Image Frac product', // текст новой записи
            'view_item'          => 'View Image Frac product', // для просмотра записи этого типа.
            'search_items'       => 'Search Image Frac product', // для поиска по этим типам записи
            'not_found'          => 'Not Found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in trash', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Image Frac products', // название меню
        ),
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => null, // зависит от public
        'exclude_from_search' => null, // зависит от public
        'show_ui'             => null, // зависит от public
        'show_in_menu'        => null, // показывать ли в меню адмнки
        'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
        'show_in_nav_menus'   => null, // зависит от public
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => null,
        'hierarchical'        => false,
        'supports'            => array('title','editor'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => array(),
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ) );

    register_post_type('restv', array(
        'label'  => null,
        'labels' => array(
            'name'               => 'RES-TV', // основное название для типа записи
            'singular_name'      => 'RES-TV', // название для одной записи этого типа
            'add_new'            => 'Add RES-TV Video', // для добавления новой записи
            'add_new_item'       => 'Adding RES-TV Video', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Editing RES-TV Video', // для редактирования типа записи
            'new_item'           => 'New RES-TV Video', // текст новой записи
            'view_item'          => 'View RES-TV Video', // для просмотра записи этого типа.
            'search_items'       => 'Search RES-TV Video', // для поиска по этим типам записи
            'not_found'          => 'Not Found',
            'not_found_in_trash' => 'Not found in trash',
            'parent_item_colon'  => '',
            'menu_name'          => 'RES-TV',
        ),
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => null, // зависит от public
        'exclude_from_search' => null, // зависит от public
        'show_ui'             => null, // зависит от public
        'show_in_menu'        => null, // показывать ли в меню адмнки
        'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
        'show_in_nav_menus'   => null, // зависит от public
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'query_var' => false,
        'has_archive' => true,
        'menu_icon'           => null,
        'supports'            => array('title','editor','thumbnail'),
        'rewrite'             => array( 'slug' => 'restv', 'with_front' => false ),
        'taxonomies'    => array('category'),
        "hierarchical"  => false,
    ) );
    add_post_type_support( 'restv', 'thumbnail' );
    flush_rewrite_rules(false);
}
add_action( 'init', 'reveal_post_types' );

add_theme_support('post-thumbnails');

function wpa_course_post_link( $post_link, $id = 0 ){
    $post = get_post($id);
    if ( is_object( $post ) ){
        $terms = wp_get_object_terms( $post->ID, 'category' );
        if( $terms ){
            return str_replace( '%restv-name%' , $terms[0]->slug , $post_link );
        }
    }
    return $post_link;
}
add_filter( 'post_type_link', 'wpa_course_post_link', 1, 3 );

function sendContactFormToSiteAdmin()
{
    try {
        switch ($_POST['form_type']) {
            case "default":
                if (!function_exists('wp_handle_upload')) {
                    require_once(ABSPATH . 'wp-admin/includes/file.php');
                }
                $upload_overrides = array('test_form' => false);
                foreach ($_FILES as $file) {
                    $file_info = wp_handle_upload($file, $upload_overrides);
                }
                $send_to = "info@reveal-energy.com";
                $subject = "Reveal new email from: " . $_POST['form_name'];
                $message = "Message from " . $_POST['form_name'] . ", " . $_POST['form_company'] . " - " . $_POST['form_title'] . " : \n\n " . $_POST['form_message'] . " \n\n Reply to: " . $_POST['form_email'] . " \n\n Call to: " . $_POST['form_phone'] . " \n\n File: " . $file_info['url'];
                if (wp_mail($send_to, $subject, $message)) {
                    echo json_encode(array('status' => 'success', 'message' => $message));
                    die();
                } else {
                    throw new Exception( '' . $message);
                }
                break;
            default:
                break;
        }
    } catch (Exception $e) {
        echo json_encode(array('status' => 'error', 'message' => $e->getMessage()));
        die();
    }
    die();
}
add_action("wp_ajax_contact_send", "sendContactFormToSiteAdmin");
add_action("wp_ajax_nopriv_contact_send", "sendContactFormToSiteAdmin");

function sendEventFormToSiteAdmin()
{
    try {
        global $wpdb;
        $charset_collate = $wpdb->get_charset_collate();
        $table_name = $wpdb->prefix . 'my_analysis';
        $query = $wpdb->prepare( 'SHOW TABLES LIKE %s', $wpdb->esc_like( $table_name ) );
        if ( ! $wpdb->get_var( $query ) == $table_name ) {
            $sql = "CREATE TABLE $table_name (
                id mediumint(9) NOT NULL AUTO_INCREMENT,
                firstname text NOT NULL,
                lastname text NOT NULL,
                email text NOT NULL,
                phone text NOT NULL,
                organization text NOT NULL,
                jobtitle text NOT NULL,
                UNIQUE KEY id (id)
            ) $charset_collate;";

            require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
            dbDelta( $sql );

        }

        $wpdb->insert($table_name, array(
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname'],
            'email' => $_POST['emailevent'],
            'phone' => $_POST['televent'],
            'organization' => $_POST['companyevent'],
            'jobtitle' => $_POST['jobevent'],
        ));
        echo json_encode(array('status' => 'success'));
        die();
//        switch ($_POST['form_type']) {
//            case "default":
//                if (!function_exists('wp_handle_upload')) {
//                    require_once(ABSPATH . 'wp-admin/includes/file.php');
//                }
//                $upload_overrides = array('test_form' => false);
//                foreach ($_FILES as $file) {
//                    $file_info = wp_handle_upload($file, $upload_overrides);
//                }
//                $send_to = "info@reveal-energy.com";
//                $subject = "Reveal new email from: " . $_POST['form_name'];
//                $message = "Message from " . $_POST['form_name'] . ", " . $_POST['form_company'] . " - " . $_POST['form_title'] . " : \n\n " . $_POST['form_message'] . " \n\n Reply to: " . $_POST['form_email'] . " \n\n Call to: " . $_POST['form_phone'] . " \n\n File: " . $file_info['url'];
//                if (wp_mail($send_to, $subject, $message)) {
//                    echo json_encode(array('status' => 'success', 'message' => $message));
//                    die();
//                } else {
//                    throw new Exception( '' . $message);
//                }
//                break;
//            default:
//                break;
//        }
    } catch (Exception $e) {
        echo json_encode(array('status' => 'error', 'message' => $e->getMessage()));
        die();
    }
    die();
}
add_action("wp_ajax_eventForm", "sendEventFormToSiteAdmin");
add_action("wp_ajax_nopriv_eventForm", "sendEventFormToSiteAdmin");

add_action( 'init', 'reveal_rewrite' );
function reveal_rewrite() {
 add_rewrite_rule( 'aogr$', 'index.php', 'top' );
}

// удаляет H2 из шаблона пагинации
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
    /*
    Вид базового шаблона:
    <nav class="navigation %1$s" role="navigation">
        <h2 class="screen-reader-text">%2$s</h2>
        <div class="nav-links">%3$s</div>
    </nav>
    */

    return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
}
if(function_exists('add_db_table_editor')){

    add_db_table_editor(array(
        'title'=>'Event Registrations',
        'table'=>'wp_my_analysis',
        'sql'=>'SELECT * FROM wp_my_analysis'
));
}