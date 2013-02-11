<?php
/**
$post_name - the post name
$no_of_posts - the number of posts per page
*/
function posts_loop($post_name, $no_of_posts){

$loop = new WP_Query( array( 'post_type' => $post_name, 'post_child' => 0, 'posts_per_page' => $no_of_posts ) );             
if ($loop->have_posts() ):
echo '<ol>';
while ( $loop->have_posts() ) : $loop->the_post();
	echo '<div class="separation_line"></div>';
	echo '<li>';
	echo '<article>';
		echo '<h2 value="news_title"><a href="',esc_url( the_permalink() ),'" title="Permalink to ',
									the_title(),'" rel="bookmark">',the_title(),'</a></h2>';
            
		echo '<p title="news_commented_by">by ';the_author();
		echo ', <time datetime="',the_time( 'Y-m-d' ),'" pubdate>',get_the_date(),the_time(),'</time></p>';
            
		echo '<p title="news_comments_count">',comments_popup_link('Leave a Comment', '1 Comment', '% Comments'),'</p>';
		the_post_thumbnail('home-news-thumbnail');
		
		echo '<div>';
		the_excerpt();	
		echo '<a href="',esc_url( the_permalink() ),'" title="',the_title(),'" rel="more">More</a>';
		echo '</div>';
		
	echo '</article>';
	echo '</li>';
endwhile;
echo '</ol>';
else: echo '<h2>No posts to display</h2>';endif;
}
?>