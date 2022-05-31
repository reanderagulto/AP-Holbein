<?php get_header(); ?>

<section class="home-slider">
	<div class="slider-content">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Holbein Slider') ) : ?>
		<?php endif ?>
	</div>

	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Holbein Banner Text') ) : ?>
	<?php endif ?>
</section>

<section class="floating-smi">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Holbein Floating SMI') ) : ?>
	<?php endif ?>
</section>

<section class="home-featured-properties">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Holbein Featured Properties') ) : ?>
	<?php endif ?>
</section>

<section class="home-welcome">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Holbein Welcome') ) : ?>
	<?php endif ?>
</section>

<section class="home-communities">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Holbein Communities') ) : ?>
	<?php endif ?>
</section>

<section class="home-testimonials">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Holbein Testimonials') ) : ?>
	<?php endif ?>
</section>

<section class="home-ctas">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Holbein CTA') ) : ?>
	<?php endif ?>
</section>

<section class="latest-news">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Holbein Blogs') ) : ?>
	<?php endif ?>
</section>

<section class="social-media-walls">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Holbein Social Media Wall') ) : ?>
	<?php endif ?>
</section>

<?php get_footer(); ?>
