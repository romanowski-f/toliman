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

	<section class="container proven-success">
		<div class="row">
			<div class="proven-success-header">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/proven-success-title.png" alt="Proven Success">
			</div>
			<div class="hands">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/hands.png" alt="Hands holding and iPhone with the Breast Advocate App open">
			</div>
			<div class="phones">
				<div class="phone phone-community" data-toggle="modal" data-target="#modalCommunity">
					<h2>Community</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/community-chat.png" alt="Community">
				</div>
				<div class="phone phone-knowledge" data-toggle="modal" data-target="#modalKnowledge">
					<h2>Knowledge Center</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/knowledge-center.png" alt="Knowledge Center">
				</div>
				<div class="phone phone-decision" data-toggle="modal" data-target="#modalDecision">
					<h2>Decision Wizard</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/decision-wizard.png" alt="Community">
				</div>
			</div>
		</div>
	</section>

<div class="modal fade" id="modalCommunity" tabindex="-1" role="dialog" aria-labelledby="modalCommunity" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>   
        <h2 class="text-center">Community</h2>
        <p>Connect with others in the same situation – locally or anywhere on the planet. </p>
        <div class="modal-control-prev"  data-dismiss="modal" data-toggle="modal" data-target="#modalKnowledge">
        	<div class="control prev"></div> 
        	<span>Knowledge Center</span>      	
        </div>
		<div class="modal-control-next" data-dismiss="modal" data-toggle="modal" data-target="#modalDecision">
			<div class="control next"></div>  
			<span>Decision Wizard</span>
		</div>       
      </div>
    </div>
  </div>
</div>	

<div class="modal fade" id="modalKnowledge" tabindex="-1" role="dialog" aria-labelledby="modalKnowledge" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>  
        <h2 class="text-center">Knowledge Center</h2>      	
		<ul>
			<li>Determine treatment options based on the latest expert information by choosing simple statements that apply to you.</li>
			<li>Access medical journal abstracts for your own information or to discuss with your team.</li>
			<li>Access assistance programs (financial, legal, etc.), book recommendations, and more.</li>
		</ul>
		<div class="modal-control-prev"  data-dismiss="modal" data-toggle="modal" data-target="#modalDecision">
			<div class="control prev"></div> 
			<span>Decision Wizard</span> 
		</div>
		<div class="modal-control-next"  data-dismiss="modal" data-toggle="modal" data-target="#modalCommunity">
			<div class="control next"></div>
			<span>Community</span>
		</div>   
      </div>
    </div>
  </div>
</div>	

<div class="modal fade" id="modalDecision" tabindex="-1" role="dialog" aria-labelledby="modalDecision" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> 
        <h2 class="text-center">Decision Wizard</h2>
			<p>Get treatment recommendations based on your individual situation and preferences, along with peer-reviewed articles explaining them. Get updated customized recommendations if your preferences change.</p>
		<div class="modal-control-next"  data-dismiss="modal" data-toggle="modal" data-target="#modalKnowledge">
        	<div class="control next"></div>
        	<span>Knowledge Center</span> 
        </div>
		<div class="modal-control-prev" data-dismiss="modal" data-toggle="modal" data-target="#modalCommunity">
			<div class="control prev"></div>
			<span>Community</span>
		</div>        
      </div>
    </div>
  </div>
</div>	


	<div class="container" style="padding: 100px 0">
		<div class="row">
			<div class="col-6">
				<a class="ba-logo" href="https://breastadvocateapp.com" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ba-logo.png" alt="Breast Advocate App Logo">
				</a>				
				<h3 class="text-center">Breast Advocate</h3>
				<div class="btn-wrapper center">
					<a class="btn btn-secondary" href="https://breastadvocateapp.com">Visit Site</a>
				</div>
				
			</div>
			<div class="col-6">
				<h3 class="text-center">Cancer Be Glammed</h3>
				<div class="btn-wrapper center">
					<a class="btn btn-secondary" href="https://cancerbeglammed.com">Visit Site</a>
				</div>
				
			</div>
		</div>
	</div>

	<div class="container-fluid divided" style="background:#fff; padding-bottom: 100px">

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