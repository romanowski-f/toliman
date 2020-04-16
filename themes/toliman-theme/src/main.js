jQuery(document).ready(function($) {
	$(document).on('click', '.mobile-nav-button', function() {
		$('.mobile-nav-button, .mobile-nav').addClass('open');
	})

	$(document).on('click', '.close-button', function() {
		$('.mobile-nav-button, .mobile-nav').removeClass('open');
	})
})