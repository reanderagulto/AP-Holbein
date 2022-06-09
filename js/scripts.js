( function() {

	var app = {
		
		initNavigation: function() {
			var $nav = jQuery( '#nav' );
			if ( $nav.length > 0 ) $nav.navTabDoubleTap();
		},
		initFeaturedProperties: function() {
			/* Put featured properties code here */
		},
		initFeaturedCommunities: function() {
			/* Put featured communities code here */
		},
		initTestimonials: function() {
			/* Put testimonials code here */
		},
		initQuickSearch: function() {
			/* Put quick search code here */
		},
		initCustomFunction: function() {
			/* See the pattern? Create more functions like this if needed. */
		}
		
	}

	
	jQuery(document).ready( function() {
		
		/* Initialize navigation */
		app.initNavigation();
		
		/* Initialize featured properties */
		app.initFeaturedProperties();

		/* Initialize featured communities */
		app.initFeaturedCommunities();
		
		/* Initialize testimonials */
		app.initTestimonials();
		
		/* Initialize quick search */
		app.initQuickSearch();
		
	});
	
	jQuery(window).on('load', function(){
		fixedHeader();
		// featuredPropertyHover();
		quickSearchClicked();
		sliderConfig();
	})

	function fixedHeader(){
		$(window).scroll(function() {
			if ($(this).scrollTop()) {
				$('header.header').addClass('scrolled position-fixed fade-in-down');
			} else {
				$('header.header').removeClass('scrolled position-fixed fade-in-down');
			}
		});
	}

	function featuredPropertyHover(){
		$('.property-container').on('hover', () =>{
			$(this).toggleClass("hovered");
		});
	}

	function quickSearchClicked(){
		$('.topfold-qsearch-button').on('click', () =>{
			$('.topfold-qsearch').addClass('show-controls');
		});

		$('.close-button').on('click', () => {
			console.log("Clicked");
			$('.topfold-qsearch').removeClass('show-controls');
		})
	}

	function sliderConfig(){
		var $testiSlider = $('.testimonial-slider');
		$testiSlider.slick({
			slidesToScroll: 1,
			slideToShow: 1,
			infinite: true,
			arrows: true,
			autoPlay: true,
			autoplaySpeed: 1000,
			nextArrow: $('.testi-nav .testi-next'),
			prevArrow: $('.testi-nav .testi-prev')
		});

		$('.testi-prev').on('click', function() {
			$testiSlider.slick('slickPrev');
			console.log("clicked prev");
		});
		
		$('.testi-next').on('click', function() {
			$testiSlider.slick('slickNext');
			console.log("clicked prev");
		});

		var $bannerSlider = $('.banner-slider');
		$bannerSlider.slick({
			slidesToScroll: 1, 
			slideToShow: 1,
			infinite: true,
			arrows: false,
			autoplay: true,
			autoplaySpeed: 2500
		});
	}
})();