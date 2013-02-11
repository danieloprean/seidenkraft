<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<?php get_template_parts( array( 'parts/shared/content-top' ) ); ?>
<?php get_template_parts( array( 'parts/shared/content-left-top' ) ); ?>
      
<?php     
	if (have_posts() ):

while ( have_posts() ) : the_post();
	echo '<h1 value="page_title">',the_title(),'</h1>';
	
	echo '<article>';            
		echo '<p title="news_commented_by">by ';the_author();
		echo ', <time datetime="',the_time( 'Y-m-d' ),'" pubdate>',get_the_date(),the_time(),'</time></p>';
		
		echo '<div class="separation_line_space20px"></div>';
		the_content();
				
		if ( get_the_author_meta( 'description' ) ) :
			echo get_avatar( get_the_author_meta( 'user_email' ) );
			echo '<h3>About', get_the_author(),'</h3>';
			the_author_meta( 'description' ); 
		endif;

		comments_template( '', true );
	echo '</article>';
endwhile;
else: echo '<h2>No posts to display</h2>';endif;
?>	

<?php get_template_parts( array( 'parts/shared/content-left-bottom' ) ); ?>
<?php get_template_parts( array( 'parts/shared/content-right' ) ); ?>
<?php get_template_parts( array( 'parts/shared/content-bottom' ) ); ?>
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>