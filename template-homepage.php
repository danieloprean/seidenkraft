<?php
/*
Template Name: Homepage template
 */
?>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<?php get_template_parts( array( 'parts/shared/content-top' ) ); ?>

<?php get_template_parts( array( 'parts/shared/content-left-top' ) ); ?>
        
<?php if ( have_posts() ): ?>
<h2>Latest Posts</h2>	
<ol>
<?php while ( have_posts() ) : the_post(); ?>
	<li>
		<article>
			<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
			<?php the_content(); ?>
		</article>
	</li>
<?php endwhile; ?>
</ol>
<?php else: ?>
<h2>No posts to display</h2>
<?php endif; ?>
		 
        		<h1 value="content_title">Latest News</h1>
                <div class="content_news">
                	<h2  value="news_title">NickNamePlayer just bought the thief epic armor!</h2>
                	<p title="news_commented_by">by George, 33 minutes ago</p>
                	<p title="news_comments_count">11 comments</p>
                    
                	<img value="news_image" alt="news_image" src="wp-content/themes/seidenkraft/images/middle/left/content/news/news_image1.png" />
                    <p title="news_text">One hundred dollars. Of all the friends I've had… you're the first. And yet you haven't said what I told you to say! How can any of us trust you? Alright, let's mafia things up a bit. Joey, burn down the ship. Clamps, burn down the crew. Yeah, and if you were the pope they'd be all, "Straighten your pope hat." And "Put on your good vestments." Oh, all right, I am. But if anything happens to me, tell them I died robbing some old man.</p>
                    <br />
                    <a rel="more" href="url">More</a> 
                </div>
                
                <div class="content_news">
                	<h2  value="news_title">NickNamePlayer just bought the thief epic armor!</h2>
                	<p title="news_commented_by">by George, 33 minutes ago</p>
                	<p title="news_comments_count">11 comments</p>
                    
                	<img value="news_image" alt="news_image" src="wp-content/themes/seidenkraft/images/middle/left/content/news/news_image1.png" />
                    <p title="news_text">One hundred dollars. Of all the friends I've had… you're the first. And yet you haven't said what I told you to say! How can any of us trust you? Alright, let's mafia things up a bit. Joey, burn down the ship. Clamps, burn down the crew. Yeah, and if you were the pope they'd be all, "Straighten your pope hat." And "Put on your good vestments." Oh, all right, I am. But if anything happens to me, tell them I died robbing some old man.</p>
                    <br />
                    <a rel="more" href="url">More</a> 
                </div>
                
                <div class="content_news">
                	<h2  value="news_title">NickNamePlayer just bought the thief epic armor!</h2>
                	<p title="news_commented_by">by George, 33 minutes ago</p>
                	<p title="news_comments_count">11 comments</p>
                    
                	<img value="news_image" alt="news_image" src="wp-content/themes/seidenkraft/images/middle/left/content/news/news_image1.png" />
                    <p title="news_text">One hundred dollars. Of all the friends I've had… you're the first. And yet you haven't said what I told you to say! How can any of us trust you? Alright, let's mafia things up a bit. Joey, burn down the ship. Clamps, burn down the crew. Yeah, and if you were the pope they'd be all, "Straighten your pope hat." And "Put on your good vestments." Oh, all right, I am. But if anything happens to me, tell them I died robbing some old man.</p>
                    <br />
                    <a rel="more" href="url">More</a> 
                </div>
                                

<?php get_template_parts( array( 'parts/shared/content-left-bottom' ) ); ?>

<?php get_template_parts( array( 'parts/shared/content-right' ) ); ?>
<?php get_template_parts( array( 'parts/shared/content-bottom' ) ); ?>
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>