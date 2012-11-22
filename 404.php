<?php
/**
 * The template for displaying 404 pages (Not Found)
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

<div id="page-not-found">
	<h2>Page not found</h2>
</div>

<?php get_template_parts( array( 'parts/shared/content-left-bottom' ) ); ?>

<?php get_template_parts( array( 'parts/shared/content-right' ) ); ?>
<?php get_template_parts( array( 'parts/shared/content-bottom' ) ); ?>
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>