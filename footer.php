			<?php if ( !is_home() && !is_page_template( 'template-fullwidth.php' ) && !is_page_template( 'template-homepage.php' ) ) : ?>
			<div class="clearfix"></div>
			</div><!-- end of #inner-page-wrapper .inner -->
			</div><!-- end of #inner-page-wrapper -->
		<?php endif ?>

		
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Holbein Footer Top Contact') ) : ?>
		<?php endif ?>
	</main>
	
	
		<footer class="footer">
			<div class="container footer-top-smi"> 
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Holbein Footer Top') ) : ?>
				<?php endif ?>
				<!-- Padding Top 50px  Padding Bottom: 53px--> 
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Holbein Footer SMI') ) : ?>
				<?php endif ?>
			</div>
			<div class="container footer-nav-copyright">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'footernav', 'theme_location' => 'primary-menu','depth'=>1 ) ); ?>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Holbein Footer KW Logo') ) : ?><?php endif ?>
				<div class="copyright">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Holbein Footer Copyright') ) : ?>
					<?php endif ?>
				</div>
			</div>		
		</footer>
		
		<?php do_action('aios_neighborhoods_footer')?>
		<?php do_action('aios_landing_page_footer')?>
		
	</div><!-- end of #main-wrapper -->


	<?php wp_footer(); ?>
</body>
</html>
