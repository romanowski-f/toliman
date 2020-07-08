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