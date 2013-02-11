<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]--> 
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]--> 
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]--> 
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]--> 
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
	<head>
		<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Remove if you're not building a responsive site. (But then why would you do such a thing?) -->
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico"/>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

<!--header-->
<script>

</script>
<div id="header">
	<div id="header_bar">
	</div>
    <div id="header_content">
    	<img alt="logo_seidenkraft_online" src="wp-content/themes/seidenkraft/images/header/logo.png" />
        <img alt="facebook_seidenkraft_online" src="wp-content/themes/seidenkraft/images/header/f_logo.png" />
        <form>
        	<div class="input_field">
            	<label onClick="setFocus('username')" id="username_lable">Username ...</label>
        		<input alt="input" type="text" value="" name="username" id="username"/>
            </div>
            <div id="passwordbox" class="input_field">
            	<label onClick="setFocus('password')" id="password_lable">Password ...</label>
            	<input alt="input" type="password"  value="" name="password" id="password"/>
            </div>
            <div class="submit_field">
            	<input alt="submit" type="submit" value="Login Now" name="submit" />
            </div>
        </form>
        <div id="header_text">
        	<p title="new_here">New here?</p>
            <p title="create_account">Create an account!</p>
        </div>
    </div>
</div>
<!--header END-->
