<?php
/*
 Template Name: Account Panel template
*/
?>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>
<?php get_template_parts( array( 'parts/shared/content-top' ) ); ?>
<?php get_template_parts( array( 'parts/shared/content-left-top' ) ); ?>

<h1 value="page_title">
	Account Panel <span>- zenman</span>
</h1>

<div class="space10px"></div>

<div style="margin-left:10px;">
	<p>Account Balance:</p>
</div>
<div class="separation_line"></div>

<div class="account_balance">
	<div class="coins lefty">
		<span title="play_coins">PlayCoins:&nbsp;</span><span
			title="play_coins_no">50</span>
	</div>
	<div class="coins_info">
		<?php field_info('play_coins', 'You can get PlayCoins by donating !')?>
	</div>
	<div class="time_info lefty">
		<p>Last Donation: 24.11.2012</p>
	</div>
	<?php default_button('Donate', '');?>
</div>

<div class="separation_line"></div>

<div class="account_balance">
	<div class="coins lefty">
		<span title="play_coins">VoteCoins:&nbsp;</span><span
			title="play_coins_no">125</span>
	</div>
	<div class="coins_info">
		<?php field_info('vote_coins', 'You can get VoteCoins by voting !')?>
	</div>
	<div class="time_info lefty">
		<p>Last Voting: 24.11.2012</p>
	</div>
	<?php default_button('Vote', '');?>
</div>

<div class="separation_line"></div>

<div class="space20px"></div>

<div id="account_option_title">
	<p>Account Options:</p>
</div>
<div class="account_option_line" id="account1">
	<p title="h1">Get Kraft Coins</p>
	<p title="p">In order to use your PlayCoins or GameCoins in Seidenkraft
		Online you need to convert them first !</p>
</div>

<div class="account_option_line" id="account2">
	<p title="h1">Get Kraft Coins</p>
	<p title="p">In order to use your PlayCoins or GameCoins in Seidenkraft
		Online you need to convert them first !</p>
</div>

<div class="account_option_line" id="account3">
	<p title="h1">Get Kraft Coins</p>
	<p title="p">In order to use your PlayCoins or GameCoins in Seidenkraft
		Online you need to convert them first !</p>
</div>

<div class="account_option_line" id="account4">
	<p title="h1">Get Kraft Coins</p>
	<p title="p">In order to use your PlayCoins or GameCoins in Seidenkraft
		Online you need to convert them first !</p>
</div>

<div class="account_option_line" id="account5">
	<p title="h1">Get Kraft Coins</p>
	<p title="p">In order to use your PlayCoins or GameCoins in Seidenkraft
		Online you need to convert them first !</p>
</div>

<?php get_template_parts( array( 'parts/shared/content-left-bottom' ) ); ?>
<?php get_template_parts( array( 'parts/shared/content-right' ) ); ?>
<?php get_template_parts( array( 'parts/shared/content-bottom' ) ); ?>
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>