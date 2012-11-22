<?php
function footer_loop($post_type_name){

$loop = new WP_Query( array( 'post_type' => $post_type_name, 'post_child' => 0 ) );             
if ($loop->have_posts() ):
echo '<ul>';
while ( $loop->have_posts() ) : $loop->the_post();
	echo '<li>';
		echo '<a href="',esc_url( the_permalink() ),'" title="',the_title(),'" rel="more">',the_title(),'</a>';
	echo '</li>';
endwhile;
echo '</ul>';
endif;
}
?>