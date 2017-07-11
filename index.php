
<?php 
/**
 * The main template file
 * It puts together the home page if no home.php file exists.
 *
 * @package Simple Blog Theme
 */
 get_header(); ?>
 
<!-- the beginning of the page or post content -->
<div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                <div class="post-preview">

<?php 
// Note: this loop is a simplified version of a loop published in a post at Elegant Themes
// Source: https://www.elegantthemes.com/blog/tips-tricks/converting-html-sites-to-wordpress-sites

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	 <div id="post-preview-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="post-preview">
			<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p class="post-meta">By <?php the_author_posts_link(); ?>, <?php the_time( 'M j y' ); ?></p>
		</header>
			<div class="entry clear">
				<?php the_content(); ?>
				<br/>
			</div>
	</div>

<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
  <div class="navigation index">
     <div class="btn btn-secondary alignleft"><?php next_posts_link( '&larr; Older' ); ?></div>
     <div class="btn btn-secondary alignright"><?php previous_posts_link( 'Newer &rarr;' ); ?></div>
  </div>
<?php else : ?>
<?php endif; ?>
					
					 </div>
            </div>
        </div>
</div>

    <hr>

<?php get_footer(); ?>