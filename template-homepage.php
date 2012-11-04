<?php
/*
Template Name: Homepage template
 */
get_header();
?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
<div class="wrapper page-content page-description">
	<div class="crammed highlight">
		<?php the_content(); ?>
	</div>

<?php endwhile; endif; ?>
	<div id="banner">
	<?php
		// @TODO add banner code
	?>
	</div>
	<?php
	?>
<?php
?>

</div>
    </div>
<?php get_footer(); ?>
