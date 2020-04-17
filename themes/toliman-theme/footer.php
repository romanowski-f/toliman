<div id="overlay" class="<?php if (!is_front_page()) : echo 'active'; endif; ?>">
    <?php
        if (!is_front_page()) : ?>
        <div class="tol-modal-overlay page faded-in">
            <div class="load-icon animated fade-out"><i class="fas fa-circle-notch fa-spin"></i></div>
            <div class="tol-modal-box zoomed-in fade-in">
                <div id="exit"><i class="fas fa-times"></i></div>
                <div class="tol-modal-content faded-in">
                    <?php get_template_part('template-parts/loop'); ?>
                </div>
            </div>
        </div>
        <?php endif;
     ?>
</div>

<footer class="footer pb-5">
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<div class="footer-col">
				<a href="<?php echo get_bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-dark.png" style="margin-top: -23px"></a>
			</div>
			<div class="footer-col">
				<p class="attract">Create Your App <span>Today!</span></p>
			</div>
			<div class="footer-col">
				<ul class="more-info mb-0" style="padding-left: 10px">
					<li>Sed ut perspiciatis unde omnis iste natus error sit.</li>
					<li>Accusantium doloremque laudantium, totam rem aperiam them.</li>
					<li>Pasa quae ab illo inventore veritatis et quasi architecto.</li>
				</ul>
			</div>
			<div class="footer-col">
				<a href="#" class="btn btn-square">Create Your App</a>
			</div>
		</div>
        <div class="menu-wrapper d-flex align-items-center justify-content-center">
            <?php
                wp_nav_menu( array(
                    'theme_location'    => 'menu-1',
                    'menu_id'        => 'footer-menu',
                    'menu_class'     => 'nav-home nav',
                    'container'      => 'nav',
                    'container_class'   => 'toliman-footer-menu'
                ) );
            ?>
            <a href="#" class="contact">Contact Us</a>
        </div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>