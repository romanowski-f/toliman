	<?php
	if ( have_posts() ) : while ( have_posts() ) : the_post();
		$thumb = get_the_post_thumbnail();
		$hide_header_text = get_post_meta($post->ID, 'page_option_header', true);

		if (is_singular('page')) : ?>
			<ul class="breadcrumbs">
				<li><a class="exit-modal" href="<?php echo bloginfo('home'); ?>">Home</a></li>
				<li><a class="open-modal" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			</ul>
		<?php endif; ?>

		<?php if ($hide_header_text != 'true') :	?>
			<h1 class="page-title" style="text-transform: none"><?php the_title(); ?></h1>
		<?php endif; ?>

		<?php the_content(); ?>
		<?php echo $thumb; ?>

	<?php endwhile;
	endif;
	?>