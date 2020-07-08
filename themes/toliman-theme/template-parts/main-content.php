<main>
	<section class="call-to-action d-flex align-items-lg-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="iphone-wrapper d-none d-sm-block">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/iphone-top.png" alt="">
				</div>
				<div class="col-sm c2a-content">
					<h2>Help Your Patients Get Informed</h2>
					<ul class="descriptions">
						<li class="active desc-proven-success">
							<p>Patients want to feel involved in decisions about their treatment.  Use your customized app to give them a voice&mdash;an informed, meaningful voice&mdash;in the treatment planning conversation.  Your patients can review relevant treatment information at their own pace, whenever and wherever is convenient for them.  A collaborative approach improves patient outcomes and satisfaction.</p>
						</li>
						<li class="desc-functionality">
							<p>We offer a top-quality patient-centric mobile app tailored to your needs – one that will run on an iPhone, iPad, and Android.</p>
						</li>
						<li class="desc-customizable">
							<p>We will design an app that addresses your specific patient care needs.</p>
						</li>
						<li class="desc-value">
							<p>No other healthcare app company offers the high quality of Toliman at such an affordable price.</p>
						</li>
						<li class="desc-quality">
							<p>Ours is the highest-quality shared decision-making app available anywhere.</p>
						</li>
						<li class="desc-speed">
							<p>Your customized app will accept and output information at the same speed to which your patients have become accustomed on other apps.</p>
						</li>
					</ul>
					<ul class="categories d-none d-md-block">
						<li class="active desc-proven-success">Proven Success</li>
						<li class="desc-functionality">Functional</li>
						<li class="desc-customizable">Customizable</li>
						<li class="desc-value">Value</li>
						<li class="desc-quality">Quality</li>
						<li class="desc-speed">Speed</li>
					</ul>
					<div class="d-none d-md-block">
						<a class="btn btn-primary create" href="<?php echo get_bloginfo('url'); ?>/how-it-works">Create Your App</a>
					</div>
				</div>
					<ul class="categories d-md-none text-center">
						<li class="active desc-proven-success">Proven Success</li>
						<li class="desc-functionality">Functionality</li>
						<li class="desc-customizable">Customizable</li>
						<li class="desc-value">Value</li>
						<li class="desc-quality">Quality</li>
						<li class="desc-speed">Speed</li>
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