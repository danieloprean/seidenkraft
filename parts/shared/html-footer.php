	<?php wp_footer(); ?>
	<!--footer-->
	<div id="footer">
		<div id="footer_shadow"></div>
		<div id="footer_menu_cap" class="text_color_myriadpro_b">
			<ul>
				<li title="home">SEIDENKRAFT HOME</li>
				<li title="account">ACCOUNT</li>
				<li title="support">SUPPORT</li>
				<li title="community">COMMUNITY MEDIA</li>
			</ul>
		</div>

		<!-- footer_menu -->
		<div id="footer_menu" class="text_color_60_myriadpro_b">
			<?php footer_loop('footer_home') ?>
			<?php footer_loop('footer_account') ?>
			<?php footer_loop('footer_support') ?>
			<?php footer_loop('footer_media') ?>
		</div>
		<!-- footer_menu END -->

		<!-- footer terms -->
		<div id="footer_terms" class="text_color_myriadpro_b">
			<ul title="terms">
				<li>TERMES OF USE</li>
				<li>LEGAL</li>
				<li>PRIVACY POLICY</li>
				<li>COPYRIGHT INFRIGEMENT</li>
				<li>CONTACT US</li>
			</ul>
			<br />
			<div id="copy_right">&#64;2012 SEIDENKRAFT GMBH. ALL RIGHTS RESERVED</div>
		</div>
		<!-- footer terms END -->

		<div class="footer_space"></div>
		<!-- footer bar -->
		<div id="footer_bar">
			<!-- footer stuffs -->
			<div class="footer_stuffs">
				<div class="logo_bw"></div>
				<div class="icons"></div>
				<div class="esrb"></div>
			</div>
			<!-- footer stuffs END -->
		</div>
		<!-- footer bar END -->

	</div>
	<!--footer END-->


</body>
</html>