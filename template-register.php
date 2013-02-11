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
								<?php field_info('username', 'jfansgdjkfdbgvfdjkvnbfagjkdhffadsfjEKLFEJNFSJNDVADJKVNVjda')?>
							</div>

							<div class="row">
								<div class="text">Web Password:</div>
								<div class="field"></div>
								<?php field_info('web_password', 'jfansgdjkfdbgvfdjkvnbfagjkdhffadsfjEKLFEJNFSJNDVADJKVNVjda')?>
							</div>

							<div class="row">
								<div class="text">Confirm W.Password:</div>
								<div class="field"></div>
							</div>

							<div class="separation_line_space20px"></div>

							<div class="row">
								<div class="text">Game Password:</div>
								<div class="field"></div>
								<?php field_info('game_password', 'jfansgdjkfdbgvfdjkvnbfagjkdhffadsfjEKLFEJNFSJNDVADJKVNVjda')?>
							</div>

							<div class="row">
								<div class="text">Confirm G.Password:</div>
								<div class="field"></div>
							</div>

							<div class="separation_line_space20px"></div>

							<div class="row">
								<div class="text">Email:</div>
								<div class="field"></div>
								<?php field_info('email', 'jfansgdjkfdbgvfdjkvnbfagjkdhffadsfjEKLFEJNFSJNDVADJKVNVjda')?>
							</div>

							<div class="row">
								<div class="text">Confirm Email:</div>
								<div class="field"></div>
							</div>

							<div class="separation_line_space20px"></div>

							<div class="row">
								<div class="text">SecureWord:</div>
								<div class="field"></div>
								<?php field_info('secure_word', 'jfansgdjkfdbgvfdjkvnbfagjkdhffadsfjEKLFEJNFSJNDVADJKVNVjda')?>
							</div>

							<div class="row">
								<div class="text">Confirm SecureWord:</div>
								<div class="field"></div>
							</div>

							<div class="separation_line_space20px"></div>

							<div class="terms_of_agreements">I accept the Termes of Agreement
								of Seidenkraft Online</div>
							<div class="register_form_button"></div>
							
<?php get_template_parts( array( 'parts/shared/content-left-bottom' ) ); ?>
<?php get_template_parts( array( 'parts/shared/content-right' ) ); ?>
<?php get_template_parts( array( 'parts/shared/content-bottom' ) ); ?>
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>
							
