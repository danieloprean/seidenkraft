<?php
function alerts_loop(){

$loop = new WP_Query( array( 'post_type' => 'alerts', 'post_child' => 0, 'posts_per_page' => 1 ) );             
if ($loop->have_posts() ):
echo '<ol>';
while ( $loop->have_posts() ) : $loop->the_post();
	echo '<li>';
	echo '<article>';
		
		the_excerpt();		
		echo '<a href="',esc_url( the_permalink() ),'" title="',the_title(),'" rel="more">More Info</a>';
		
	echo '</article>';
	echo '</li>';
endwhile;
echo '</ol>';
else: echo '<h2>No posts to display</h2>';endif;
}
?>