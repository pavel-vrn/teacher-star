<footer>
<section class="container">
  <?php if ( get_theme_mod( 'hide_copyright')) :  else : ?>
<div class="row">
  <div class="col-md-6 col-sm-6 col-xs-12">
  <?php if ( get_theme_mod( 'copyright_textbox')) : ?> 
  <p><?php echo esc_html(get_theme_mod('copyright_textbox')); ?></p>
  <?php else : $footertext = '[copyright] [the-year] [site-name] [theme-credit]';
       $footertext = str_replace('[copyright]','&copy;',$footertext);
       $footertext = str_replace('[the-year]',date('Y'),$footertext);
       $footertext = str_replace('[site-name]',get_bloginfo('name'),$footertext);
       $footertext = str_replace('[theme-credit]','- WordPress Theme by <a href="'.esc_url( __( 'http://www.ydesignservices.com/', 'tribute' ) ).'" target="_blank">Y Design Services</a>',$footertext);
        echo '<p>'.do_shortcode($footertext).'</p>'; endif; ?>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12"><?php tribute_social_media_icons(); ?> </div>

</div><!--row-->
  <?php endif; ?>
</section>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>





