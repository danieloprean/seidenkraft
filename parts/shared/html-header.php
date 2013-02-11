<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]-->
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
<title><?php bloginfo( 'name' ); ?> <?php wp_title( '|' ); ?></title>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Remove if you're not building a responsive site. (But then why would you do such a thing?) -->
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon"
	href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<!--header-->
	<div id="header">
		<div id="header_content">
			<div class="logo_seidenkraft"></div>

			<div id="header_text">
				<p title="welcome">Welcome zenman</p>
				<p title="server_time">Server time is 12:24 PM</p>
			</div>

			<?php default_button_m('Account', ''); ?>
			<?php default_button_m('Support', ''); ?>
			<?php default_button_m('Donate', ''); ?>
			<?php default_button_m('Download', ''); ?>
			<?php default_button_m('LogOff', ''); ?>
			
		</div>
	</div>
	<!--header END-->