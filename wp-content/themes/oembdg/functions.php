<?php

function bdg_theme_support(){

    add_theme_support( 'custom-logo');
    add_theme_support( 'post-thumbnails');
    
}

add_action( 'after_setup_theme', 'bdg_theme_support');

function bdg_menus(){

    $locations = array(
        'primary' => "Desktop Primary Menu",
        'mobile' => "Mobile Menu",
        'footer_1' => "Footer Menu 1",
        'footer_2' => "Footer Menu 2",
        'footer_3' => "Footer Menu 3",
        'footer_4' => "Footer Menu 4",
        'footer_5' => "Footer Menu 5",
        'sidebar' => "Side Bar Menu Items",
        'secondary' => "Archive Header Menu",
        'subheaderleft' => "Scroll Down Header Left",
        'subheaderright' => "Scroll Down Header Right",
    );

    register_nav_menus($locations);
}

add_action( 'init', 'bdg_menus');

function bdg_register_styles(){

    wp_enqueue_style('bdg-style', get_template_directory_uri() . "/style.css", array('bdg-bootstrap','bdg-swipercss'), '2.0','all');
    wp_enqueue_style('bdg-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css", array(), '4.5.2','all');
    wp_enqueue_style('bdg-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", array(), '4.7.0','all');
    wp_enqueue_style('bdg-Montserrat', "https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap", array(), '1.0','all');
    wp_enqueue_style('bdg-BaiJamjuree', "https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@400;600&display=swap", array(), '1.0','all');
    wp_enqueue_style('bdg-Prompt', "https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700&display=swap", array(), '1.0','all');
    wp_enqueue_style('bdg-swipercss', "https://unpkg.com/swiper/swiper-bundle.css", array(), '1.0', false);
    wp_enqueue_style('bdg-aos', "https://unpkg.com/aos@2.3.1/dist/aos.css", array(), '2.3.1', 'all');
    
}

add_action( 'wp_enqueue_scripts', 'bdg_register_styles');

function bdg_register_scripts(){

   wp_enqueue_script('bdg-swiperjs', "https://unpkg.com/swiper/swiper-bundle.js", array('bdg-bootstrapjs'), '1.0', false);
    wp_enqueue_script('bdg-jquery', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js", array(), '3.2.1', true);
    wp_enqueue_script('bdg-popper', "https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js", array(), '1.12.9', true);
    wp_enqueue_script('bdg-bootstrapjs', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js", array(), '4.0.0', true);
    wp_enqueue_script('bdg-fontawesome', "https://kit.fontawesome.com/be2f0329fd.js", array(), '1.0', true);
    wp_enqueue_script('bdg-aosjs', "https://unpkg.com/aos@2.3.1/dist/aos.js", array(), '2.3.1', true);
    
    
}
add_action( 'wp_enqueue_scripts', 'bdg_register_scripts' );

function wpshout_longer_excerpts( $length ) {
	// Don't change anything inside /wp-admin/
	if ( is_admin() ) {
		return $length;
	}
	// Set excerpt length to 140 words
	return 15;
}
// "999" priority makes this run last of all the functions hooked to this filter, meaning it overrides them
add_filter( 'excerpt_length', 'wpshout_longer_excerpts', 999 );

add_filter( 'menu_image_default_sizes', function($sizes){
  
    // remove the default 36x36 size
    unset($sizes['menu-36x36']);
    
    // add a new size
    $sizes['menu-35x35'] = array(35,35);
    
    // return $sizes (required)
    return $sizes;
    
  });

if (!function_exists('dd')) {
    function dd($data)
    {
        ini_set("highlight.comment", "#969896; font-style: italic");
        ini_set("highlight.default", "#FFFFFF");
        ini_set("highlight.html", "#D16568");
        ini_set("highlight.keyword", "#7FA3BC; font-weight: bold");
        ini_set("highlight.string", "#F2C47E");
        $output = highlight_string("<?php\n\n" . var_export($data, true), true);
        echo "<div style=\"background-color: #1C1E21; padding: 1rem\">{$output}</div>";
        die();
    }
}


class Walker_Nav_Primary extends Walker_Nav_menu {
	
	function start_lvl( &$output, $depth ){ //ul
		$indent = str_repeat("\t",$depth);
        if ($depth === 0) {
            $output .= "\n$indent<ul class=\"sub-menu-1\"><div class=\"back-button d-flex d-md-none\"><img src=\"https://www.bdgoem.com/wp-content/themes/oembdg/asset/menu-back-button.png\"><p>Back</p></div>\n";
        } else if ($depth === 1) {
            $output .= "\n$indent<ul class=\"sub-menu-2\">\n";
        } else {
            $output .= "\n$indent<ul class=\" $submenu depth_$depth \">\n";
        }
	}
	
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ){ //li a span
		
		$indent = ( $depth ) ? str_repeat("\t",$depth) : '';
		
		$li_attributes = '';
		$class_names = $value = '';
		
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		
		$classes[] = ($args->walker->has_children) ? '' : '';
		$classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
		$classes[] = 'menu-item-' . $item->ID;
		if( $depth && $args->walker->has_children ){
			$classes[] = 'dropdown-submenu';
		}
		

		$class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = ' class="' . esc_attr($class_names) . '"';
		
		$id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
		
		$output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';
		
		$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
		$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';
        if ($depth < 1) {

            $attributes .= ( $args->walker->has_children ) ? ' onclick="return false"': '';
        }
		
		$attributes .= ( $args->walker->has_children ) ? ' class="dropdown-toggle--disabled" data-toggle="dropdown"' : '';
        
		
		$item_output = $args->before;
		$item_output .= '<a' . $attributes . '><div class="menu-list">';
        if ($depth < 2) {
            $item_output .= '<img src="'. get_field('menu_icon', $item->ID) .'" alt="" />';
        }
        $item_output .= '<div class="menu-item-text">';
		$item_output .= $args->link_before;
        $item_output .= '<p class="title-en">';
        $item_output .= apply_filters( 'the_title', $item->title, $item->ID );
        $item_output .= '</p>';
        if ($depth < 2) {
            $item_output .= '<p class="title-th">';
            $item_output .= get_field('menu_subtitle', $item->ID);
            $item_output .= '</p>';
        }
        $item_output .= $args->link_after;
        $item_output .= '</div>';
		$item_output .= ( $depth < 2 && $args->walker->has_children ) ? ' <img class="right-arrow" src="https://www.bdgoem.com/wp-content/themes/oembdg/asset/menu-right-arrow.png" alt="" /></div></a>' : '</div></a>';
		$item_output .= $args->after;
		
		$output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		
	}
	
/*	
	function end_el(){ // closing li a span
		
	}
	
	function end_lvl(){ // closing ul
		
	}
*/
	
}

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('BDG Settings'),
            'menu_title'    => __('BDG Settings'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}

// function ajax_form_scripts() {
// 	$translation_array = array(
//         'ajax_url' => admin_url( 'admin-ajax.php' )
//     );
//     wp_localize_script( 'main', 'cpm_object', $translation_array );
// }

// add_action( 'wp_enqueue_scripts', 'ajax_form_scripts' );

// add_action( 'wp_ajax_nopriv_set_form', 'set_form'); //execute when logged out

// function set_form(){
// 	$name = $_POST['name'];
//     $surname = $_POST['surname'];
//     $tel = $_POST['tel'];
// 	$email = $_POST['email'];
// 	$message = $_POST['message'];
// 	$admin =get_option('admin_email');
// 	// wp_mail($email,$name,$message);  main sent to admin and the user
// 	if(wp_mail($email, $name, $surname, $tel, $message)  &&  wp_mail($admin, $name, $surname, $tel, $message) )
//        {
//            echo "mail sent";
//    } else {
//           echo "mail not sent";
//    }
// 	die();

// }

// Product Custom Post type

// function products_post() {

// //Set up product labels

//     $labels = array(
//     'name'                     => _x( 'Mails ', 'post type general name' ),
//     'singular_name'        => _x( 'Mail ', 'post type singular name' ),
//     'add_new'                 => _x( 'Add New', 'mail' ),
//     'add_new_item'          => __( 'Add New Mails ' ),
//     'edit_item'               => __( 'Edit Mail' ),
//     'new_item'                => __( 'New Mail' ),
//     'all_items'               => __( 'All Mails' ),
//     'view_item'               => __( 'View Mail' ),
//     'search_items'           => __( 'Search Mails' ),
//     'not_found'               => __( 'No product found' ),
//     'not_found_in_trash'  => __( 'No product found in the Trash' ), 
//     'parent_item_colon'   => '',
//     'menu_name'               => 'Mails'
//     );

// //register post type

//     $args = array(
//     'labels'                 => $labels,
//     'description'          => 'Holds mails',
//     'public'                 => true,
//     'menu_position'       => 5,
//     'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
//     'has_archive'         => true,
//     );
//     register_post_type( 'mail', $args );
// }
// add_action( 'init', 'products_post' );

// $new_post = array(
//     'post_title'    => $name,
//     'post_content'  => $message,
//     'post_status'   => 'draft',           // Choose: publish, preview, future, draft, etc.
//     'post_type' => 'mail'  //'post',page' or use a custom post type if you want to
//  );
    
 // show the email in meta box
// $pid = wp_insert_post($new_post);
// if ( empty( $email ) OR ! $email )
// {
//     delete_post_meta( $pid,  'meta_email');
// }
// elseif ( ! get_post_meta( $pid, 'meta_email' ) )
// {
//     add_post_meta( $pid, 'meta_email', $email );
// }
// else
// {
//     update_post_meta( $pid, 'meta_email', $email );
// }