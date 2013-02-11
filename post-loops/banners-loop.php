<?php
/**
 $post_name - the post name
 $no_of_posts - the number of posts per page
 */
function banners_loop($post_name, $no_of_posts){

	$loop = new WP_Query( array( 'post_type' => $post_name, 'post_child' => 0, 'posts_per_page' => $no_of_posts ) );
	if ($loop->have_posts() ):

	$id_banner = 1;
	echo '<div class="banners_container">';
	while ( $loop->have_posts() ) : $loop->the_post();

	if($id_banner != 1){
		echo '<div class="banner" id="banner'.$id_banner++.'">';
	}else{
		echo '<div class="banner banner_start" id="banner'.$id_banner++.'">';
	}
	the_post_thumbnail('banner-size');

	echo '</div>';
	endwhile;
	
	echo '</div>';
	echo '<div id="banner_points">';
	echo '<div class="bullets_margin_left"></div>';

	echo '<div class="bullet bullet_on"></div>';
	for($i = 2; $i < $id_banner; $i++){
		echo '<div class="bullet"></div>';
	}
	echo '<div class="bullets_margin_right"></div>';
	echo '</div>';

	else: echo '<h2>No posts to display</h2>';endif;
}
?>