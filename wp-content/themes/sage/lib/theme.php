<?php

/**
 * Distributing ACF
 */
add_action('init', 'acf_option_page_function');
function acf_option_page_function() {
    // Create options page of plugin
    if( function_exists('acf_add_options_page') ) {

        acf_add_options_page(array(
            'page_title' 	=> 'Options',
            'menu_title'	=> 'Options',
            'menu_slug' 	=> 'cwm-options',
            'capability'	=> 'edit_posts',
            'redirect'	=> false
        ));

        acf_add_options_sub_page(array(
            'page_title' 	=> 'Page Options',
            'menu_title'	=> 'Page Options',
            'parent_slug'	=> 'cwm-options',
        ));

    }
}

add_filter('acf/settings/path', 'my_acf_settings_path');



function my_acf_settings_path( $path ) {

    // update path
    $path = get_stylesheet_directory() . '/acf/';

    // return
    return $path;

}

add_filter('acf/settings/dir', 'my_acf_settings_dir');

function my_acf_settings_dir( $dir ) {

    // update path
    $dir = get_stylesheet_directory_uri() . '/acf/';

    // return
    return $dir;

}

///Hide ACF field group menu item
//add_filter('acf/settings/show_admin', '__return_false');

include_once( get_stylesheet_directory() . '/acf/acf.php' );
include_once( get_stylesheet_directory() . '/acf/fields-options.php' );


// Google Map
function jordan_acf_google_map_api( $api ){
    if($api_key = get_field('google_map_api','options')){
        $api['key'] = $api_key;
    }
    return $api;
}
add_filter('acf/fields/google_map/api', 'jordan_acf_google_map_api');


//// ACF PLUGINS
//
define('acf_inc_path', TEMPLATEPATH . '/acf/');
define('acf_inc_url', get_template_directory_uri(). '/acf/');
//require_once get_template_directory_uri(). '/acf/plugins/link-picker-field/acf-link_picker.php';



//// ACF OPTION FIELD
include_once acf_inc_path.'fields-options.php';


/**
 * Image Crop
 */

add_image_size( 'post-thumb', 370, 225, true );
add_image_size( 'avatar-thumb', 140, 148, true );
add_image_size( 'project-thumb', 570, 460, array( 'center', 'top' ) );
add_image_size( 'fundraise-thumb', 600, 300, true );


/**
 * SEO PLUGIN
 */

add_filter( 'wpseo_breadcrumb_links', 'my_wpseo_breadcrumb_links' );
function my_wpseo_breadcrumb_links( $links ) {

    if ( is_single() ) {
        $cpt_object = get_post_type_object( get_post_type() );
        if ( ! $cpt_object->_builtin ) {
            $landing_page = get_page_by_path( $cpt_object->rewrite['slug'] );
            array_splice( $links, -1, 0, array(
                array(
                    'id'    => $landing_page->ID
                )
            ));
        }
    }
    return $links;
}


/**
 * INcludes
 */

/*Register Fonts*/
function jordan_fonts_url() {
    $fonts_url = '';
    $fonts     = array();
    $subsets   = 'latin,latin-ext';

    /* translators: If there are characters in your language that are not supported by Roboto, translate this to 'off'. Do not translate into your own language. */
    if ( 'off' !== _x( 'on', 'Roboto font: on or off', 'architect' ) ) {
        $fonts[] = 'Roboto:400,300italic,300,100,500,700,900';
    }
    /* translators: If there are characters in your language that are not supported by Open Sans, translate this to 'off'. Do not translate into your own language. */
    if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'architect' ) ) {
        $fonts[] = 'Open Sans:400,300,600,700,800';
    }

    if ( $fonts ) {
        $fonts_url = add_query_arg( array(
            'family' => urlencode( implode( '|', $fonts ) ),
            'subset' => urlencode( $subsets ),
        ), 'https://fonts.googleapis.com/css' );
    }

    return $fonts_url;
}
/*Add theme css and js*/
function jordan_stylesheets(){
    // Web fonts
    wp_enqueue_style( 'jordan-fonts', jordan_fonts_url(), array(), '2.2' );
}
add_action( 'wp_enqueue_scripts', 'jordan_stylesheets' );


/**
 * Excerpt
 */

function jordan_custom_excerpt_length($length){
    return 20;
}
add_filter( 'excerpt_length', 'jordan_custom_excerpt_length');

function jordan_new_excerpt_more($more){
    return '...';
}
add_filter('excerpt_more', 'jordan_new_excerpt_more');


/**
 * custom Post Type
 */
function custom_post_type() {

    // Set UI labels for Team Post Type
    $labels = array(
        'name'                => _x( 'Project', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Project', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Project', 'twentythirteen' ),
        'all_items'           => __( 'All Project', 'twentythirteen' ),
        'view_item'           => __( 'View Project', 'twentythirteen' ),
        'add_new_item'        => __( 'Add New Project', 'twentythirteen' ),
        'add_new'             => __( 'Add New', 'twentythirteen' ),
        'edit_item'           => __( 'Edit Project', 'twentythirteen' ),
        'update_item'         => __( 'Update Project', 'twentythirteen' ),
        'search_items'        => __( 'Search Project', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );

    // Set other options for Project Post Type

    $args = array(
        'label'               => __( 'project', 'twentythirteen' ),
        'description'         => __( 'Project', 'twentythirteen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'thumbnail' ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        //'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 20,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );

    // Registering your Project Post Type
    register_post_type( 'project', $args );

    ////////

    // Set UI labels for Fundraise Post Type
    $labels = array(
        'name'                => _x( 'Fundraise', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Fundraise', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Fundraise', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Fundraise', 'twentythirteen' ),
        'all_items'           => __( 'All Fundraise', 'twentythirteen' ),
        'view_item'           => __( 'View Fundraise', 'twentythirteen' ),
        'add_new_item'        => __( 'Add New Fundraise', 'twentythirteen' ),
        'add_new'             => __( 'Add New', 'twentythirteen' ),
        'edit_item'           => __( 'Edit Fundraise', 'twentythirteen' ),
        'update_item'         => __( 'Update Fundraise', 'twentythirteen' ),
        'search_items'        => __( 'Search Fundraise', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );

    // Set other options for Fundraise Post Type

    $args = array(
        'label'               => __( 'fundraise_type', 'twentythirteen' ),
        'description'         => __( 'Fundraise', 'twentythirteen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'thumbnail' ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        //'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 20,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );

    // Registering your Fundraise Post Type
    register_post_type( 'fundraise_type', $args );

    ////////

    // Set UI labels for Team Post Type
    $labels = array(
        'name'                => _x( 'Team', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Team', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Team', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Team', 'twentythirteen' ),
        'all_items'           => __( 'All Team', 'twentythirteen' ),
        'view_item'           => __( 'View Team', 'twentythirteen' ),
        'add_new_item'        => __( 'Add New Team', 'twentythirteen' ),
        'add_new'             => __( 'Add New', 'twentythirteen' ),
        'edit_item'           => __( 'Edit Team', 'twentythirteen' ),
        'update_item'         => __( 'Update Team', 'twentythirteen' ),
        'search_items'        => __( 'Search Team', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );

    // Set other options for Team Post Type

    $args = array(
        'label'               => __( 'team_type', 'twentythirteen' ),
        'description'         => __( 'Team', 'twentythirteen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'thumbnail' ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        //'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 20,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );

    // Registering your Team Post Type
    register_post_type( 'team_type', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'custom_post_type', 0 );




///// excerpt

function custom_length_excerpt($word_count_limit) {
    $content = wp_strip_all_tags(get_the_content() , true );
    echo wp_trim_words($content, $word_count_limit);
}


///// WIDGET Newsletter
class Newsletter_Widget extends WP_Widget {

    public function __construct() {

        parent::__construct(
            'tutsplustext_widget',
            __( 'Newsletter Widget', 'newslettertextdomain' ),
            array(
                'classname'   => 'tutsplustext_widget',
                'description' => __( 'Newsletter Shortcode', 'newslettertextdomain' )
            )
        );

        load_plugin_textdomain( 'newslettertextdomain', false, basename( dirname( __FILE__ ) ) . '/languages' );

    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {

        extract( $args );

        $title      = apply_filters( 'widget_title', $instance['title'] );
        $message    = $instance['message'];

        echo $before_widget;

        if ( $title ) {
            echo $before_title . $title . $after_title;
        } ?>

        <div class="form-newsletter">
            <?php echo do_shortcode($message); ?>
        </div>

        <?php echo $after_widget;

    }


    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {

        $instance = $old_instance;

        $instance['title'] = strip_tags( $new_instance['title'] ); ?>

        <?php $instance['message'] = strip_tags( $new_instance['message'] );

        return $instance;

    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {

        $title      = esc_attr( $instance['title'] );
        $message    = esc_attr( $instance['message'] );
        ?>

        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('message'); ?>"><?php _e('Shortcode'); ?></label>
            <textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('message'); ?>" name="<?php echo $this->get_field_name('message'); ?>"><?php echo $message; ?></textarea>
        </p>

        <?php
    }

}

/* Register the widget */
add_action( 'widgets_init', function(){
    register_widget( 'Newsletter_Widget' );
});