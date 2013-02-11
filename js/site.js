//jQuery(document)
//		.ready(
//				function($) {
//
//					// Your JavaScript goes here
//					function setFocus(elementId) {
//						document.getElementById(elementId).focus();
//						document.getElementById(elementId + '_lable').style.display = 'none';
//					}
//
//					// function to empty the form fields
//					function emptyFields(elementId) {
//						document.getElementById(elementId).value = '';
//					}
//
//					function emptyLoginForm() {
//						emptyFields('username');
//						emptyFields('password');
//					}
//
//					function setBackgroundPosition() {
//						this.style.backgroundPosition = '0px -27px';
//					}
//

jQuery(document).ready(function() {
	var $ = jQuery;

	// default buttons START
	jQuery('.default_menu_button').on('mouseover', function() {
		jQuery(this).css('background-position', '0px -27px')
	});
	jQuery('.default_menu_button').on('mouseout', function() {
		jQuery(this).css('background-position', '0px 0px')
	});
	// default buttons END

	// content menu buttons START
	var toggleContentMenuButton = function() {
		jQuery(this).toggleClass("content_menu_mouseover");
	};
	jQuery("#content_menu ul li").on("mouseover", function() {
		jQuery(this).css('background-position', '0px -83px')
	});
	jQuery("#content_menu ul li").on("mouseout", function() {
		jQuery(this).css('background-position', '0px 0px')
	});
	// content menu buttons END
	
	// content menu buttons START
	function show(){
		jQuery(this).parent().find('.field_info_holder').css('display','block');
	}
	function hide(){
		jQuery(this).parent().find('.field_info_holder').css('display','none');
	}
	jQuery('.more_info').on('mouseover', show);
	jQuery('.more_info').on('mouseout', hide);
	// content menu buttons END
	
	

	// animates the banners;
	var myCarusel;
	function carusel() {
		var end_value = '0px';// the end value of left attribute
		var start_value = '710px';// the start value of left attribute
		var default_delay_value = '5000';
		var delay_value = default_delay_value;// delay between transitions
		var transition = '1000';// the transition time
		var banners = jQuery(".banner");// holds the banners
		var banners_length = banners.size();

		var isEnabled = false;
		var bullets = jQuery(".bullet");// holds the bullets
		var bullets_length = bullets.size();
		var index = 1;

		setTimeout(function() {
			slideAndGlide();
			myCarusel = setInterval(slideAndGlide, delay_value);
		}, delay_value);

		function slideAndGlide() {
			if (index == banners_length) {
				index = 0;
			}
			enableBullets(false);
			setBullets();
			animateObject(banners[index]);
		}

		function setBullets() {
			jQuery(bullets[index]).addClass("bullet_on");
			for ( var i = 0; i < bullets_length; i++) {
				if (i != index) {
					if (jQuery(bullets[i]).hasClass("bullet_on")) {
						jQuery(bullets[i]).removeClass("bullet_on");
					}
				}
			}
		}

		function enableBullets(value) {
			isEnable = value;
		}

		function setIndex(event) {
			if (isEnable == true) {
				enableBullets(false);

				clearInterval(myCarusel);

				index = event.data.value;
				slideAndGlide();

				setTimeout(function() {
					clearInterval(myCarusel);
					myCarusel = setInterval(slideAndGlide, delay_value);
				}, delay_value);
			}
		}

		function addEvent() {
			for ( var i = 0; i < bullets_length; i++) {
				jQuery(bullets[i]).on('click', {
					value : i
				}, setIndex);
			}
		}

		function moveEverythingOut() {
			for ( var i = 0; i < banners_length; i++) {
				if (i != index) {
					jQuery(banners[i]).css('z-index', '10000');
					jQuery(banners[i]).css('left', start_value);
				}
			}
			jQuery(banners[index]).css('z-index', '10000');
		}

		function animateObject(object) {
			jQuery(object).css('z-index', '11000');
			jQuery(object).animate({
				left : end_value
			}, transition, function() {
				moveEverythingOut();
				enableBullets(true);
				index++; // increment banners index
			});
		}

		addEvent();
	}

	carusel();
});
