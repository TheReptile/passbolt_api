<div class="message-wrapper">
	<p class="message error"><strong><?php echo __('Disclaimer:'); ?></strong>
		<a href="https://en.wikipedia.org/wiki/Disposable_email_address" target="_blank" rel="nofollow">
			<?php echo __('please use a disposable email address.'); ?></a><p>
	<p class="message warning">
		<?php echo __('This is a demo instance of passbolt for trial purposes only.'); ?>
		<?php echo __('Do not use it to store sensitive information.'); ?>
		<?php echo __('Do not use it if you are not confortable with other testers being able to see your name and email address.'); ?>
	</p>
</div>
<p>
	<?php
	echo __('By signing up, you agree to the %sTerms of Service%s and %sPrivacy Policy%s, including our use of Cookies.',
		'<a href="https://www.passbolt.com/terms">','</a>',
		'<a href="https://www.passbolt.com/privacy">','</a>'
	); ?>
</p>