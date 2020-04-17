jQuery(document).ready(function($) {
	$(document).on('click', '.mobile-nav-button', function() {
		$('.mobile-nav-button, .mobile-nav').addClass('open');
	})

	$(document).on('click', '.close-button', function() {
		$('.mobile-nav-button, .mobile-nav').removeClass('open');
	})



	// Call to action text
	const descriptions = $('ul.descriptions li');
	const categories   = $('ul.categories li');

	console.log(descriptions);

	$(document).on('click', 'ul.categories li', function() {
		$('ul.categories li').removeClass('active');
		$(this).addClass('active');		
	})	
})