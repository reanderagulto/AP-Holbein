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
		$('.topfold-qsearch-title').on('click', () =>{
			$('.topfold-qsearch').addClass('show-controls');
		});

		$('.close-button').on('click', () => {
			console.log("Clicked");
			$('.topfold-qsearch').removeClass('show-controls');
		})
	}
	


})();