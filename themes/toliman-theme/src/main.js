//let base = '/toliman/'
var getUrl = document.location.origin;
console.log(getUrl);

let base = '/';
if (getUrl != 'https://tolimanhealth.com') {
	base = '/toliman/'
}

let siteDomain = base;
let popState = false;

let $ = jQuery;

const animationEnd = 'animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd';
const transitionEnd = 'transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd';

const mobile = () => {
	if (window.innerWidth < 577) return true;
	return false;
}


Array.from( document.querySelectorAll( ':not(.admin-bar) a' ) ).forEach( a => {
    a.classList.add( location.hostname === a.hostname || !a.hostname.length ? 'open-modal' : 'external' );
});



var modal = {

	open: false,

	create: function(type, pageurl) {
		modal.open = true;

		var structure = '<div class="tol-modal-overlay fade-in ' + type + '"><div class="load-icon"><i class="fas fa-circle-notch fa-spin"></i></div>';
			structure += '<div class="tol-modal-box"><div id="exit"><i class="fas fa-times"></i></div><div class="tol-modal-content">';
			structure += '</div></div>';
			structure += '</div>';

		jQuery('#overlay').prepend(structure).addClass('active');

		switch(type) {
			case 'page':
			default:

			break;

			case 'success':
				$('.tol-modal-overlay').addClass('.proven-success');
			break;
		}

		modal.load(pageurl);
		jQuery('html').css({'overflow-y': 'hidden'});
		jQuery('#overlay').css('overflow-y', 'scroll');		

		setTimeout(function() {
			jQuery('.tol-modal-overlay').removeClass('fade-in');
		}, 250);
	},

	changePage: function(pageurl) {
		jQuery('.load-icon').removeClass('fade-out');
		jQuery('.load-icon').bind(animationEnd, function() {
			jQuery('.load-icon').remove();
		});
		jQuery('.tol-modal-content').addClass('fade-out-slow');
		setTimeout(function() {
			modal.load(pageurl);
		}, 500);
	},

	load: function(pageurl) {
		var post_id = 3;
		if (pageurl != window.location && pageurl != undefined && !popState) {
			history.pushState({path: pageurl}, '', pageurl);
		}

		if (pageurl != undefined) {
			siteDomain = pageurl;
		} else {
			siteDomain = base + 'ajax';
		}


		jQuery.ajaxSetup({cache:false});
		jQuery('.tol-modal-box').addClass('fade-in');
		jQuery('.tol-modal-content').load(siteDomain, {id: post_id}, function(responseText, textStatus, req) {
			jQuery('.load-icon').addClass('animated fade-out');
			jQuery('.load-icon').bind(animationEnd, function() {
				jQuery('.load-icon').remove();
			});
			jQuery('#overlay').scrollTop(1);

			setTimeout(function() {
				jQuery('.tol-modal-content').addClass('fade-in-slow').removeClass('fade-out-slow');
				jQuery('body').addClass('noscroll');
				var title = jQuery('.page h1').first().text();
				if (modal.type == 'page') document.title = title + ' | Toliman';
			}, 250);

			if (req.statusText == 'Not Found') {
				jQuery('.tol-modal-content').html('<h1>Page Not Found</h1><p>Sorry!</p>');
			}
		});

		return false;
	},

	destroy: function() {
		var signUp = jQuery('.contact-content');
		if (modal.open) {
			if (!popState) history.pushState({path: base}, '', base);
			jQuery('.tol-modal-overlay').addClass('fade-out');
			modal.open = false;

			jQuery('html').css({'overflow-y': 'auto'});
			 jQuery('#overlay').css('overflow-y', 'hidden');
			 jQuery('body').removeClass('noscroll');

			setTimeout(function() {
				if (signUp.length != 0) jQuery('.contact-form-container').prepend(signUp);
				jQuery('.tol-modal-overlay').remove();
				jQuery('#overlay').removeClass('active');
				document.title = 'Toliman';
			}, 250)
		};
	}

};

// ---------------- Check if element is in view
$.fn.isInViewport = function(diff) {
	if (diff == null) {
		diff = 0;
	}

	var elementTop = $(this).offset().top + diff;
	var elementBottom = elementTop + $(this).outerHeight();
	var viewportTop = $(window).scrollTop();
	var viewportBottom = viewportTop + $(window).height();
	return elementBottom > viewportTop && elementTop < viewportBottom;
};


jQuery(document).ready(function($) {

// ------------------ Mobile nav toggle
	$(document).on('click', '.mobile-nav-button', function() {
		$('.mobile-nav-button, .mobile-nav').addClass('open');
	})

	$(document).on('click', '.close-button', function() {
		$('.mobile-nav-button, .mobile-nav').removeClass('open');
	});


// ------------------ Adjust slider height based on slide content
	const setSliderHeight = (parent, children) => {
		let elementHeights = [];
		let highest = 0;
		children.each(function() {
			elementHeights.push($(this).outerHeight(true));
		})
		elementHeights.forEach(height => {
			if (height > highest) highest = height;
		})
		parent.css('height', highest + 'px');
		children.each(function() {
			$(this).css('height', '100%');
		});

		console.log(elementHeights);		
	}
	setSliderHeight($('ul.descriptions'), $('ul.descriptions li p'));

	$(window).resize(function() {
		setSliderHeight($('ul.descriptions'), $('ul.descriptions li p'));
	})



// ------------------ Call to action slider controls
$(document).on('click', 'ul.categories li', function() {
	$('ul.categories li, ul.descriptions li').removeClass('active');
	let cat = $(this).attr('class');
	$(this).addClass('active');
	$('ul.descriptions li.' + cat).addClass('active');
})



// ------------------ Scroll Events
let inView = false;
let reminderInView = false;
const titles = $('.phone h2');
const phones = $('.phone');
$(window).scroll(function() {
	console.log('scrolling');
    let scrollTop = $(window).scrollTop();

    if ($('.proven-success').isInViewport(250) && !inView) {
    	inView = true;

    	let delay = 0;
    	titles.each(function() {
    		let title = $(this);
    		setTimeout(function() {
    			if (title.parent('.phone-community').length) {
    				title.addClass('fadeInRight');
    			} else {
					title.addClass('fadeInLeft');
    			}
    		}, delay);
    		delay += 75;
    	});

    	delay = 0;
    	phones.each(function() {
    		var phone = $(this);
    		setTimeout(function() {
    			phone.addClass('animated fadeInUp');
    		}, delay);
    		delay += 75;
    	})
    }

    if ($('.reminder').length && $('.reminder').isInViewport(250) && !reminderInView) {
    	$('.reminder').addClass('animated fadeInRight');
    	reminderInView = true;
    	setTimeout(function() { $('.reminder').removeClass('offscreen fadeInRight')}, 1000)
    }
});

$(document).on('click', '.reminder__dismiss', function() {
	$('.reminder').addClass('fadeOutRight');
	setTimeout(function() {
		$('.reminder').remove();
	}, 1000);
})



// ------------------ Modal control
$(document).on('click', '.open-modal', function(e) {
	e.preventDefault();
	var pageurl;
	var	modalType = 'page';
	if ($(this).hasClass('phone')) modalType = 'success';
	if ($(this).attr('href') != undefined) {
		pageurl = $(this).attr('href');
		var canChange = true;
		if (pageurl.includes('#')) {
			canChange = false;
		}
	}

	if (canChange) {
		if (!modal.open) {
	     	setTimeout(function() {
		    	modal.create('page', pageurl);
	    	}, 1)
	     } else {
	     	modal.changePage(pageurl);
	     }
	} else { // Scroll page
		var section = pageurl.split('#');
			section = '#' + section[1];
		$('html, body').animate({
	        scrollTop: $(section).offset().top - 100
	    },750);
	}

	$('.mobile-nav').removeClass('open');

});


window.onpopstate = function(e) {
	popState    = true;
	popStateurl = window.location.pathname;

	if (modal.open && popStateurl != base) {
		modal.load(popStateurl);
	} else if (popStateurl == base) {
		modal.destroy();
	} else {
		modal.create('page', popStateurl);
	}

	popState = false;
}


// ------------------ Prevent modal overscroll
const overlay = $('#overlay');
$('#overlay').scroll(function() {
	if ($('#overlay').scrollTop() < 1) {
		$('#overlay').scrollTop(1);
	} else if (overlay[0].scrollHeight - $('#overlay').scrollTop() - $('#overlay').outerHeight() <= 1) {
		$('#overlay').scrollTop($('#overlay').scrollTop() - 1);
	}
});


// ------------------ Close modal window by clicking outside of element
$(document).click(function(event) {
    if(!$(event.target).closest('.tol-modal-box, .load-icon').length && modal.open) {
        if($('.tol-modal-box').is(":visible")) {
        	modal.destroy();
        }
    }
});

$(document).on('click', '#exit, .exit-modal', function(e) {
	e.preventDefault();
	modal.destroy();
})






function normalizeSlideHeights() {
    $('.carousel').each(function(){
      var items = $('.carousel-item', this);
      // reset the height
      items.css('min-height', 0);
      // set the height
      var maxHeight = Math.max.apply(null, 
          items.map(function(){
              return $(this).outerHeight()}).get() );
      items.css('min-height', maxHeight + 'px');
      console.log('check');
    })
}

$(window).on(
    'load resize orientationchange', 
    normalizeSlideHeights);






function waitForWebfonts(fonts, callback) {
    var loadedFonts = 0;
    for(var i = 0, l = fonts.length; i < l; ++i) {
        (function(font) {
            var node = document.createElement('span');
            // Characters that vary significantly among different fonts
            node.innerHTML = 'giItT1WQy@!-/#';
            // Visible - so we can measure it - but not on the screen
            node.style.position      = 'absolute';
            node.style.left          = '-10000px';
            node.style.top           = '-10000px';
            // Large font size makes even subtle changes obvious
            node.style.fontSize      = '300px';
            // Reset any font properties
            node.style.fontFamily    = 'sans-serif';
            node.style.fontVariant   = 'normal';
            node.style.fontStyle     = 'normal';
            node.style.fontWeight    = 'normal';
            node.style.letterSpacing = '0';
            document.body.appendChild(node);

            // Remember width with no applied web font
            var width = node.offsetWidth;

            node.style.fontFamily = font + ', sans-serif';

            var interval;
            function checkFont() {
                // Compare current width with original width
                if(node && node.offsetWidth != width) {
                    ++loadedFonts;
                    node.parentNode.removeChild(node);
                    node = null;
                }

                // If all fonts have been loaded
                if(loadedFonts >= fonts.length) {
                    if(interval) {
                        clearInterval(interval);
                    }
                    if(loadedFonts == fonts.length) {
                        callback();
                        return true;
                    }
                }
            };

            if(!checkFont()) {
                interval = setInterval(checkFont, 50);
            }
        })(fonts[i]);
    }
};

waitForWebfonts(['Gotham Book'], function() {
    setSliderHeight($('ul.descriptions'), $('ul.descriptions li p'));
});

})