<?php if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') : ?>

	<?php get_template_part('template-parts/loop'); ?>

<?php else : ?>

	<?php get_header(); ?>

		<?php get_template_part('template-parts/main', 'content'); ?>

	<?php get_footer(); ?>

	<script>
		modal.open = true;
		jQuery('html').css({'overflow-y': 'hidden'});
		jQuery('#overlay').css('overflow-y', 'scroll');
	</script>

<?php endif; ?>

