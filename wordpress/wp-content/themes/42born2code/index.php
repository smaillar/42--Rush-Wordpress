<?php get_header() ?>

<div id="content_index">
</div>

<?php
		if ( !is_user_logged_in())?>
		<form action="<?php echo site_url('wp-login.php?action=register', 'login_post') ?>" method="post">
    	<input type="text" name="user_login" value="Username" id="user_login" class="input" />
    	<br />
    	<input type="text" name="user_email" value="E-mail" id="user_email" class="input" />
    	<?php do_action('register_form'); ?>
    	<input type="submit" value="Register" id="register" />
		</form>

<?php get_footer() ?>
<?php get_comments(); ?>