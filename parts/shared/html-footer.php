
	<?php wp_footer(); ?>
    <!--footer-->
<div id="footer">
	<div id="footer_shadow">
    </div>
	<div id="footer_menu_cap" class="text_color_myriadpro_b">
		<ul>
        	<li value="home">SEIDENKRAFT HOME</li>
            <li value="account">ACCOUNT</li>
            <li value="support">SUPPORT</li>
            <li value="community">COMMUNITY MEDIA</li>
        </ul>
    </div>
    
	<div id="footer_menu" class="text_color_60_myriadpro_b">
		<?php footer_loop('footer_home') ?>
        <?php footer_loop('footer_account') ?>
        <?php footer_loop('footer_support') ?>
        <?php //footer_loop('footer_media') ?>
        <ul>
            <li>What is SeidenKraft Online?</li>
			<li>How can i join the community?</li>
			<li>Where is the company from?</li>
			<li>Visit Homepage !</li>
			<li>About us !</li>
        </ul>
	</div>
	<div id="footer_terms" class="text_color_myriadpro_b">
        <ul title="terms">
        	<li>TERMES OF USE</li>
        	<li>LEGAL</li>
        	<li>PRIVACY POLICY</li>
       		<li>COPYRIGHT INFRIGEMENT</li>
        	<li>CONTACT US</li>
        </ul>
        <br />
        <ul title="copy_rights">
        	<li>&#64;2012 SEIDENKRAFT GMBH. ALL RIGHTS RESERVED</li>
        </ul>
    </div>
    
    <!--footer bar-->
	<div id="footer_bar">
    	<div id="footer_stuffs">
    	<img title="logo_bw" alt="logo_bw" src="wp-content/themes/seidenkraft/images/footer/logo_bw.png" />
        <img title="icons" alt="icons" src="wp-content/themes/seidenkraft/images/footer/icons.png" />
        <img title="esrb" alt="esrb" src="wp-content/themes/seidenkraft/images/footer/esrb.png" />
        </div>
    </div>
	<!--footer bar-->
</div>
<!--footer END-->
	</body>
</html>