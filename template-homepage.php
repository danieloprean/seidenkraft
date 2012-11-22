<?php
/*
Template Name: Homepage template
 */
?>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<?php get_template_parts( array( 'parts/shared/content-top' ) ); ?>

<?php get_template_parts( array( 'parts/shared/content-left-top' ) ); ?>
        
<h1 value="content_title">Latest News</h1>

<?php posts_loop('news', 3, 0); ?>

<?php get_template_parts( array( 'parts/shared/content-left-bottom' ) ); ?>

<?php get_template_parts( array( 'parts/shared/content-right' ) ); ?>
<?php get_template_parts( array( 'parts/shared/content-bottom' ) ); ?>
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>