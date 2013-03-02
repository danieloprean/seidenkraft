<?php
/*
 Template Name: Empty template
*/
?>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<?php get_template_parts( array( 'parts/shared/content-top' ) ); ?>
<?php get_template_parts( array( 'parts/shared/content-left-top' ) ); ?>

<h1>Page title <?php echo the_page();?></h1>

<!-- Your code goes here -->
							
<?php get_template_parts( array( 'parts/shared/content-left-bottom' ) ); ?>
<?php get_template_parts( array( 'parts/shared/content-right' ) ); ?>
<?php get_template_parts( array( 'parts/shared/content-bottom' ) ); ?>
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>
							
