<?php
// Register menu
function register_my_menus() {
    register_nav_menus(
        array(
            'menu' => 'main-menu' ,
            'menu2' => 'top-menu'
        )
    );
}
add_action( 'init', 'register_my_menus' );


// Register Custom Post Types
add_action('init', 'register_custom_posts_init');
function register_custom_posts_init() {
    // Register Products
    $testimonial_labels = array(
        'name'               => 'Testimonial',
        'singular_name'      => 'Testimonial',
        'menu_name'          => 'Testimonial',
        'all_items'          => 'All Testimonial',
        'add_new'            => 'Add New Testimonial',
        'add_new_item'       => 'Add New Testimonial',
		'edit'               => 'Edit Testimonial',
		'edit_item'          => 'Edit Testimonial',
		'new_item'           => 'New Testimonial',
		'view_item'          => 'View Testimonial',
        'title'              => 'Testimonial'
    );

    $testimonial_args = array(
        'description'        => 'This is the post type for Testimonial',
        'labels'             => $testimonial_labels,
        'public'             => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'supports'           => array( 'title' ),
        'menu_icon'          => 'dashicons-calendar-alt',
        'menu_position'      => 8
    );

    // Register resources
    $resources_labels = array(
        'name'               => 'Resources',
        'singular_name'      => 'Resources',
        'menu_name'          => 'Resources',
        'all_items'          => 'All Resources',
        'add_new'            => 'Add New Resources',
        'add_new_item'       => 'Add New Resources',
        'edit'               => 'Edit Resources',
        'edit_item'          => 'Edit Resources',
        'new_item'           => 'New Resources',
        'view_item'          => 'View Resources',
        'title'              => 'Resources'
    );

    $resources_args = array(
        'description'        => 'This is the post type for Resources',
        'labels'             => $resources_labels,
        'public'             => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'supports'           => array( 'title', 'author' ),
        'menu_icon'          => 'dashicons-calendar-alt',
        'menu_position'      => 8
    );
    register_post_type('resource', $resources_args);
    register_post_type('testimonial', $testimonial_args);
}
// Register taxonomy for resources page
add_action( 'init', 'register_taxonomy_init' );
function register_taxonomy_init()
{
    register_taxonomy('offence',
        array('resource'), /* change this to be the post type you're making the taxonomy for! */
        array('hierarchical' => true,    /* if this is false, it acts like tags */
            'labels' => array(
                'name' => __('offences', 'bonestheme'), /* name of the custom taxonomy */
                'singular_name' => __('offence', 'bonestheme'), /* single taxonomy name */
                'search_items' => __('Search offences', 'bonestheme'), /* search title for taxomony */
                'all_items' => __('All offences', 'bonestheme'), /* all title for taxonomies */
                'parent_item' => __('Parent offence', 'bonestheme'), /* parent title for taxonomy */
                'parent_item_colon' => __('Parent offence:', 'bonestheme'), /* parent taxonomy title */
                'edit_item' => __('Edit offence', 'bonestheme'), /* edit custom taxonomy title */
                'update_item' => __('Update offence', 'bonestheme'), /* update title for taxonomy */
                'add_new_item' => __('Add New offence', 'bonestheme'), /* add new title for taxonomy */
                'new_item_name' => __('New offence', 'bonestheme') /* name title for taxonomy */
            ),
            'show_admin_column' => true,
            'show_ui' => true,
            'query_var' => true,
        )
    );
};

//Register sidebar widgets
if ( function_exists( 'register_sidebar' ) ) {
    register_sidebar( array(
        'name'          => 'Sidebar (main)',
        'id'            => 'sidebar',
        'description'   => 'Default Sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s posts_holder">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>'
    ) );
    register_sidebar( array(
        'name'          => 'Sidebar Contact',
        'id'            => 'sidebar-contact',
        'description'   => 'Sidebar for contact page',
        'before_widget' => '<div id="%1$s" class="widget %2$s posts_holder">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>'
    ) );
    register_sidebar( array(
        'name'          => 'Sidebar Resources',
        'id'            => 'sidebar-resources',
        'description'   => 'Sidebar for resources page',
        'before_widget' => '<div id="%1$s" class="widget %2$s posts_holder">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>'
    ) );
    register_sidebar( array(
        'name'          => 'Footer Column 1',
        'id'            => 'footer_column_1',
        'description'   => 'Footer Column 1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ) );
    register_sidebar( array(
        'name'          => 'Footer Column 2',
        'id'            => 'footer_column_2',
        'description'   => 'Footer Column 2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ) );
    register_sidebar( array(
        'name'          => 'Footer column 3',
        'id'            => 'footer_column_3',
        'description'   => 'Footer Column 3',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ) );
    register_sidebar( array(
        'name'          => 'Footer column 4',
        'id'            => 'footer_column_4',
        'description'   => 'Footer Column 4',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ) );
    register_sidebar( array(
        'name'          => 'Footer text',
        'id'            => 'footer_text',
        'description'   => 'Footer Text',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => ''
    ) );
}
