<?php
function jpen_enqueue_assets() {
		wp_enqueue_script('jquery');
	
		wp_enqueue_style( 'bootstrap',  get_stylesheet_directory_uri() . '/vendor/bootstrap/css/bootstrap.css' , false,  '4.0.0' );
		wp_enqueue_style( 'font-awesome',  get_stylesheet_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css' , false,  '4.0.0' );
		wp_enqueue_style( 'font-awesome-italic',  get_stylesheet_directory_uri() . '//fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' , false,  '4.0.0' );
		wp_enqueue_style( 'font-awesome-open_sans',  get_stylesheet_directory_uri() . '//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' , false,  '4.0.0' );
		wp_enqueue_style( 'clean-blog-min',  get_stylesheet_directory_uri() . '/css/clean-blog.min.css' , false,  '4.0.0' );	
		wp_enqueue_style( 'style' , get_stylesheet_uri() );
	
		wp_enqueue_script( 'tether', get_stylesheet_directory_uri() . '/vendor/tether/tether.js', ('jquery'), '1.0', true);
		wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', ('jquery'), '1.0', true);
		wp_enqueue_script( 'clean-blog', get_stylesheet_directory_uri() . '/js/clean-blog.min.js', ('jquery'), '1.0', true);
	
}
add_action( 'wp_enqueue_scripts' , 'jpen_enqueue_assets' );

function themes_setup(){
		add_theme_support('title-tag');
}
add_action( 'after_setup_theme' , 'themes_setup');

/* add theme menu area */
register_nav_menus (array(
  'primary' => 'Primary Menu',
));

add_theme_support('post-thumbnails');

function wpse207895_featured_image() {
    //Execute if singular
    if ( is_singular() ) {

        $id = get_queried_object_id ();

        // Check if the post/page has featured image
        if ( has_post_thumbnail( $id ) ) {

            // Change thumbnail size, but I guess full is what you'll need
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'full' );

            $url = $image[0];

        } 
    }else {

            //Set a default image if Featured Image isn't set
            $url = get_stylesheet_directory_uri() . '/img/home-bg.jpg';

        }

    return $url;
}

add_action( 'add_meta_boxes', 'add_page_title_metabox' );
function add_page_title_metabox(){
	add_meta_box( 'page_title', 'Page Title', 'callable_page_title', array('post', 'page') );
}

function callable_page_title(){

}

/*function set_title(){
	global $post;
	$post->ID;
 	get_post_meta( $post, 'header_title', false );
	return get_metadata('post', $post_id, $key, $single);
	
}*/
?>