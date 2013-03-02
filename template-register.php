<?php
/*
 Template Name: Register Form template
*/
?>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<?php get_template_parts( array( 'parts/shared/content-top' ) ); ?>
<?php get_template_parts( array( 'parts/shared/content-left-top' ) ); ?>

							<h1 value="page_title">Registration Page</h1>

							<div class="separation_line_space20px"></div>

							<div class="row">
								<div class="text">Username:</div>
								<div class="field"></div>
								<?php field_info('username', 'The username')?>
							</div>
							
							<div class="row">
								<div class="text">Login name:</div>
								<div class="field"></div>
								<?php field_info('login_name', 'The login name')?>
							</div>
							
							<div class="separation_line_space20px"></div>
							
							<div class="row">
								<div class="text">Password:</div>
								<div class="field req"></div>
								<?php field_info('password', 'The password')?>
							</div>

							<div class="row">
								<div class="text">Confirm Password:</div>
								<div class="field"></div>
							</div>

							<div class="separation_line_space20px"></div>

							<div class="row">
								<div class="text">Email:</div>
								<div class="field"></div>
								<?php field_info('email', 'Your email address.')?>
							</div>

							<div class="row">
								<div class="text">Confirm Email:</div>
								<div class="field"></div>
							</div>
							
							<div class="separation_line_space20px"></div>
							
							<div class="row">
								<div class="text">Phone:</div>
								<div class="field"></div>
								<?php field_info('phone', 'The phone number')?>
							</div>

							<div class="separation_line_space20px"></div>

							<div class="terms_of_agreements">I accept the Termes of Agreement
								of Seidenkraft Online</div>
							<div class="register_form_button"></div>
							
<?php get_template_parts( array( 'parts/shared/content-left-bottom' ) ); ?>
<?php get_template_parts( array( 'parts/shared/content-right' ) ); ?>
<?php get_template_parts( array( 'parts/shared/content-bottom' ) ); ?>
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>
							
