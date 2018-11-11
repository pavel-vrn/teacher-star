<?php $awada_theme_options = awada_theme_options();
$col = 12 / (int)$awada_theme_options['footer_layout']; ?>
<?php if ($awada_theme_options['site_layout'] == 'boxed') { ?>
</div><!-- end wrapper -->
<?php } ?>
<footer id="awada_footer_area" class="footer-main <?php if ($awada_theme_options['site_layout'] == 'boxed') { echo 'container'; } ?>">
	<div class="container home_footer">
		<?php if (is_active_sidebar('footer-widget')) {
		dynamic_sidebar('footer-widget');
		} else {
			$args = array(
				'before_widget' => '<div class="col-lg-' . $col . ' col-md-' . $col . ' col-sm-6 col-xs-12"><div class="widget">',
				'after_widget' => '</div></div>',
				'before_title' => '<div class="title"><h3>',
				'after_title' => '</h3></div>',
			);
			the_widget('awada_footer_contact_widget', null, $args);
			the_widget('awada_footer_recent_posts', null, $args);
			the_widget('WP_Widget_Tag_Cloud', null, $args);
            the_widget('WP_Widget_Meta', null, $args);
		} ?>
	</div><!-- end container -->
</footer><!-- end awada_footer_area -->    

<div id="copyrights" <?php if ($awada_theme_options['site_layout'] == 'boxed') { ?> class="container" <?php } ?>>
	<div class="container">
		<?php if ($awada_theme_options['copyright_text_footer']==1) { ?>
		<div id="copyright_section" class="col-lg-5 col-md-6 col-sm-12">
			<div class="footer_copy_text">
				<p><span id="copyright_text"><?php echo esc_attr($awada_theme_options['footer_copyright']); ?> </span><span id="developed_by_text"> <?php echo esc_attr($awada_theme_options['developed_by_text']); ?> </span><a id="copyright_link" href="<?php echo esc_url($awada_theme_options['developed_by_link']); ?>"><span id="copyright_link_text"><?php echo esc_attr($awada_theme_options['developed_by_link_text']); ?></span></a></p>
			</div><!-- end footer copyright text -->
		</div><!-- end widget -->
		<?php } ?>
		<div id="copyright_menu" class="col-lg-7 col-md-6 col-sm-12 clearfix">
			<div class="footer-area-menu">
				<?php wp_nav_menu(array(
                        'theme_location' => 'secondary',
                        'container' => false,
                        'menu_class' => 'menu',
                ) ); ?>
			</div>
		</div><!-- end large-7 --> 
	</div><!-- end container -->
</div><!-- end copyrights -->
<?php if ($awada_theme_options['custom_css'] != '') { ?>
<style>
	<?php echo $awada_theme_options['custom_css']; ?>
</style>
<?php } ?>
<div class="awadatop"><?php _e('Scroll to Top', 'awada'); ?></div>
<?php wp_footer(); ?>
</body>
</html>