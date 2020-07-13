<main>
	<section class="call-to-action d-flex align-items-lg-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="iphone-wrapper d-none d-sm-block">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/iphone-top.png" alt="">
				</div>
				<div class="col-sm c2a-content">
					<h2>Help Your Patients Get Informed</h2>
					<?php $submenus = array(
						get_field('submenu_1'),
						get_field('submenu_2'),
						get_field('submenu_3'),
						get_field('submenu_4'),
						get_field('submenu_5'),
						get_field('submenu_6')
					); ?>
					
					<ul class="descriptions">
						<?php $i = 0; ?>
						<?php foreach($submenus as $submenu) : ?>
							
							<?php if ($submenu['enabled']) : ?>
							<li class="submenus-<?php echo $i; if ($i == 0) : echo ' active'; endif; ?>">
								<p><?php echo $submenu['description']; ?></p>
							</li>
							<?php $i++; ?>
							<?php endif; ?>

						
						<?php endforeach; ?>
					</ul>

					<ul class="categories d-none d-md-block">

						<?php $i = 0; ?>
						<?php foreach($submenus as $submenu) : ?>
							
							<?php if ($submenu['enabled']) : ?>
							<li class="submenus-<?php echo $i; if ($i == 0) : echo ' active'; endif; ?>">
								<?php echo $submenu['name']; ?>
							</li>
							<?php $i++; ?>
							<?php endif; ?>

						
						<?php endforeach; ?>

					</ul>
					<div class="d-none d-md-block">
						<a class="btn btn-primary create" href="<?php echo get_bloginfo('url'); ?>/how-it-works">Create Your App</a>
					</div>
				</div>
					<ul class="categories d-md-none text-center">

						<?php $i = 0; ?>
						<?php foreach($submenus as $submenu) : ?>
							
							<?php if ($submenu['enabled']) : ?>
							<li class="submenus-<?php echo $i; if ($i == 0) : echo ' active'; endif; ?>">
								<?php echo $submenu['name']; ?>
							</li>
							<?php $i++; ?>
							<?php endif; ?>

						
						<?php endforeach; ?>
						
					</ul>
					<div class="d-md-none" style="width: 100%">
						<a class="btn btn-primary create d-block mx-auto" style="width: 160px" href="<?php echo get_bloginfo('url'); ?>/how-it-works">Create Your App</a>
					</div>
			</div>
		</div>
	</section>

	<div class="divider">
		<div class="divider-inner"></div>
	</div>

	<div class="container-fluid">
		<?php get_template_part('template-parts/proven', 'success'); ?>
	</div>


	<div class="container" style="padding: 20px 0; position: relative">
		<h2 class="text-center">Client Experience</h2>
		<div class="row">
			<div class="col-sm-6 d-flex flex-column align-items-center">
<!--  				<a href="https://breastadvocateapp.com" target="_blank" class="mb-3">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ba-logo-white.png" alt="Breast Advocate App Logo">
				</a> -->
				<h3 class="text-center">Breast Advocate</h3>
				<div class="btn-wrapper center">
					<a class="btn btn-secondary" href="https://breastadvocateapp.com">Visit Site</a>
				</div>

			</div>
			<div class="col-sm-6 d-flex flex-column align-items-center">
				<h3 class="text-center">Cancer Be Glammed</h3>
				<div class="btn-wrapper center">
					<a class="btn btn-secondary" href="https://cancerbeglammed.com">Visit Site</a>
				</div>

			</div>
		</div>
	</div>

	<div class="container-fluid divided reminder-trigger" style="background:#fff; padding-bottom: 100px">

	<div class="reminder offscreen">
		<div class="reminder__dismiss">
			<i class="fas fa-times"></i>
		</div>
		<div class="reminder__phone">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/reminder.png" alt="iPhone">
			<a class="btn btn-primary mx-auto d-block" style="width:160px" href="<?php echo bloginfo('url'); ?>/contact">Create Your App</a>
		</div>



	</div>

		<section class="container pb-5" style="padding-top:150px">
			<?php get_template_part('template-parts/about'); ?>
		</section>
	</div>
</main>