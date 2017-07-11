<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Simple Blog Theme
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<?php wp_head(); ?>
</head>

<body>
    <!-- Navigation -->
	
	<?php
/**
	* Displays a navigation menu
	* @param array $args Arguments
	*/
	$args = array(
		'theme_location' => '',
		'menu' => '',
		'container' => 'div',
		'container_class' => 'menu-{menu-slug}-container collapse navbar-collapse',
		'container_id' => 'navbarResponsive',
		'menu_class' => 'navbar-nav ml-auto',
		'menu_id' => '',
		'echo' => true,
		'fallback_cb' => 'wp_page_menu',
		'before' => '',
		'after' => '',
		'link_before' => '',
		'link_after' => '',
		'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
		'depth' => 0,
		'walker' => ''
	);

	?> 
	
    <nav class="navbar fixed-top navbar-toggleable-md navbar-light" id="mainNav">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="index.html">Start Bootstrap</a>
           <?php wp_nav_menu( $args ); ?>
			
			<!-- 
			<div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                 </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="post.html">Sample Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
				-->
        </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('<?php echo wpse207895_featured_image();?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="site-heading">
                       
						<?php if( $title = get_post_meta($post->ID, 'header_title', true) ) { ?>
						<h1><?php echo $title; ?></h1>
						<?php } else { ?>
						<h1>My Blog</h1>
						<?php } ?>
						
                        <span class="subheading">A Blog Theme by Start Bootstrap</span>
                    </div>		
                </div>
            </div>
        </div>
    </header>


