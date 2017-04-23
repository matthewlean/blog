<?php

	// Add RSS links to <head> section

	automatic_feed_links();


add_theme_support( 'post-thumbnails' );

// Pull Masonry from the core of WordPress
wp_enqueue_script( 'masonry' );


	// Load jQuery

	if ( !is_admin() ) {

	   wp_deregister_script('jquery');

	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"), false);

	   wp_enqueue_script('jquery');

	}



	// Clean up the <head>

	function removeHeadLinks() {

    	remove_action('wp_head', 'rsd_link');

    	remove_action('wp_head', 'wlwmanifest_link');

    }

    add_action('init', 'removeHeadLinks');

    remove_action('wp_head', 'wp_generator');



	// Declare sidebar widget zone

    if (function_exists('register_sidebar')) {

    	register_sidebar(array(

    		'name' => 'Sidebar Widgets',

    		'id'   => 'sidebar-widgets',

    		'description'   => 'These are widgets for the sidebar.',

    		'before_widget' => '<div id="%1$s" class="widget %2$s">',

    		'after_widget'  => '</div>',

    		'before_title'  => '<h2>',

    		'after_title'   => '</h2>'

    	));

    }





    if (function_exists('register_nav_menus')) {

    register_nav_menus(

        array(
            'main_nav' => 'Main Navigation Menu'

        )

    );

}/** * Filter the except length to 20 words. * * @param int $length Excerpt length. * @return int (Maybe) modified excerpt length. */add_theme_support( 'post-thumbnails' );// Pull Masonry from the core of WordPresswp_enqueue_script( 'masonry' );
?>

<?php function sm_custom_meta() {
    add_meta_box( 'sm_meta', __( 'Featured Posts', 'sm-textdomain' ), 'sm_meta_callback', 'post' );
}
function sm_meta_callback( $post ) {
    $featured = get_post_meta( $post->ID );
    ?>

	<p>
    <div class="sm-row-content">
        <label for="meta-checkbox">
            <input type="checkbox" name="meta-checkbox" id="meta-checkbox" value="yes" <?php if ( isset ( $featured['meta-checkbox'] ) ) checked( $featured['meta-checkbox'][0], 'yes' ); ?> />
            <?php _e( 'Featured this post', 'sm-textdomain' )?>
        </label>

    </div>
</p>

    <?php
}
add_action( 'add_meta_boxes', 'sm_custom_meta' );
?>
<?php
/**
 * Saves the custom meta input
 */
function sm_meta_save( $post_id ) {

    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'sm_nonce' ] ) && wp_verify_nonce( $_POST[ 'sm_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';

    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }

 // Checks for input and saves
if( isset( $_POST[ 'meta-checkbox' ] ) ) {
    update_post_meta( $post_id, 'meta-checkbox', 'yes' );
} else {
    update_post_meta( $post_id, 'meta-checkbox', '' );
}

}
add_action( 'save_post', 'sm_meta_save' );
?>
