<?php 
	$title = wp_title('', false); 
	if ( $title == "" ) {
		get_template_part( 'template-parts/footer', 'c2a' );
	} 
?>
	<footer id="footer" class="footer-layout-4">
	<?php if( get_theme_mod('malina_footer_copyright', '') != '' || get_theme_mod('malina_footer_socials', true) ) { ?>
		<div class="container">
			<?php if( get_theme_mod('malina_footer_logo', false) ){ ?>
				<div class="span12">
					<h2 class="footer-logo">
						<?php if(get_theme_mod('malina_footer_logo_img','') != "") { ?>
							<a href="<?php echo esc_url(home_url()); ?>/" class="logo_main"><img src="<?php echo esc_url(get_theme_mod('malina_footer_logo_img')); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" /></a>
						<?php } else { ?>
							<a href="<?php echo esc_url(home_url()); ?>/" class="logo_text"><?php echo esc_attr(get_bloginfo('name')); ?></a>
						<?php } ?>
					</h2>
				</div>
			<?php } ?>
			<div class="span12">
			<h3 class="footer-menu-text">MENU</h3>
				<?php if( is_active_sidebar('footer-widgets') ){ ?>
					<div id="footer-widgets">
							<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-widgets') ); ?>
					</div>
				<?php } ?>
			</div>	
							
			<div class="span12">
				<?php if( get_theme_mod('malina_footer_socials', true ) && function_exists('malina_get_footer_social_links') ) { echo malina_get_footer_social_links(); } ?>
			</div>	
		</div>	
	<?php } ?>
	</footer>
	
	<?php if( get_theme_mod('malina_footer_copyright', '') != '' ) { ?>
			<div id="footer-copy-block" class="footer-layout-4">
				<div class="container">
					<div class="span12">
						<div class="copyright-text"><?php echo get_theme_mod('malina_footer_copyright', ''); ?></div>
					</div>
				</div>
			</div>
		<?php } ?>	
	<div class="clear"></div>

	</div> <!-- end boxed -->
	<?php wp_footer(); ?>
</body>
</html>
