<?php get_header(); ?>

<!-- Homepage Slider Section -->
<section class="home-slider">
	<!-- Slider Content -->
	<div class="slider-content">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Holbein Slider') ) : ?>
		<?php endif ?>
	</div>

	<!-- Banner Text -->
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Holbein Banner Text') ) : ?>
	<?php endif ?>
</section>
<!-- Homepage Slider Section -->

<!-- Floating SMIs -->
<section class="floating-smi">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Holbein Floating SMI') ) : ?>
	<?php endif ?>
</section>
<!-- Floating SMIs -->

<!-- Featured Properties -->
<section class="home-featured-properties">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Holbein Featured Properties') ) : ?>
	<?php endif ?>
</section>
<!-- Featured Properties -->

<!-- Homepage Welcome Section -->
<section class="home-welcome">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Holbein Welcome') ) : ?>
	<?php endif ?>
</section>
<!-- Homepage Welcome Section -->

<!-- Communities Section -->
<section class="home-communities">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Holbein Communities') ) : ?>
	<?php endif ?>
</section>
<!-- Communities Section -->

<!-- Testimonial Slider -->
<section class="home-testimonials">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Holbein Testimonials') ) : ?>
	<?php endif ?>
</section>
<!-- Testimonial Slider -->

<!-- Homepage CTA buttons -->
<section class="home-ctas">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Holbein CTA') ) : ?>
	<?php endif ?>
</section>
<!-- Homepage CTA buttons -->

<!-- Blog Section -->
<section class="latest-news">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Holbein Blogs') ) : ?>
	<?php endif ?>
</section>
<!-- Blog Section -->

<!-- Social Media Wall -->
<section class="social-media-walls">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Holbein Social Media Wall') ) : ?>
	<?php endif ?>
</section>
<!-- Social Media Wall -->

<?php get_footer(); ?>
