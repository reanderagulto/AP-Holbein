<?php 

/*
 * Register sidebars
 */
function register_ai_child_starter_theme_sidebars() {
	
	register_sidebar(array( 
	   'name' => 'My Custom Sidebar',
	   'id'=>'my-custom-sidebar',
	   'before_widget' => '',
	   'after_widget' => '',
	   'before_title' => '',
	   'after_title' => ''
    ));

    register_sidebar([
        'name' => 'Holbein Header Logo',
		'id' => 'ap-holbein-header-logo',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
    ]);

    register_sidebar([
        'name' => 'Holbein Slider',
		'id' => 'ap-holbein-slider',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
    ]);

    register_sidebar([
        'name' => 'Holbein Banner Text',
		'id' => 'ap-holbein-banner-text',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
    ]);

	register_sidebar([
        'name' => 'Holbein Floating SMI',
		'id' => 'ap-holbein-floating-smi',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
    ]);

	// Homepage
    register_sidebar([
        'name' => 'Holbein Featured Properties',
		'id' => 'ap-holbein-featured-properties',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
    ]);

	register_sidebar([
        'name' => 'Holbein Welcome',
		'id' => 'ap-holbein-home-welcome',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
    ]);

	register_sidebar([
        'name' => 'Holbein Communities',
		'id' => 'ap-holbein-home-communities',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
    ]);
	register_sidebar([
        'name' => 'Holbein Testimonials',
		'id' => 'ap-holbein-testimonials',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
    ]);
	register_sidebar([
        'name' => 'Holbein CTA',
		'id' => 'ap-holbein-cta',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
    ]);
	register_sidebar([
        'name' => 'Holbein Blogs',
		'id' => 'ap-holbein-blogs',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
    ]);
	register_sidebar([
        'name' => 'Holbein Social Media Wall',
		'id' => 'ap-holbein-social-wall',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
    ]);
	// End of Homepage

	// Footer Top Contact Form
	register_sidebar([
        'name' => 'Holbein Footer Top Contact',
		'id' => 'ap-holbein-footer-contact-form',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
    ]);

	register_sidebar([
        'name' => 'Holbein Footer KW Logo',
		'id' => 'ap-holbein-footer-kw-logo',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
    ]);

	// Footer
    register_sidebar([
        'name' => 'Holbein Footer Top',
		'id' => 'ap-holbein-footer-top',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
    ]);

    register_sidebar([
        'name' => 'Holbein Footer SMI',
		'id' => 'ap-holbein-footer-smi',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
    ]);

    register_sidebar([
        'name' => 'Holbein Footer Copyright',
		'id' => 'ap-holbein-footer-copyright',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => ''
    ]);
	// End of Footer
	
}