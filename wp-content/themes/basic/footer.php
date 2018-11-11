</div> 

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter50822829 = new Ya.Metrika2({
                    id:50822829,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/50822829" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- #main -->

<?php do_action( 'basic_before_footer' ); ?>

<footer id="footer">

	<?php do_action( 'basic_before_footer_menu' ); ?>

	<?php if (has_nav_menu('bottom')) : ?>
	<div class="footer-menu maxwidth">
		<?php 
		wp_nav_menu( array(
				'theme_location' => 'bottom',
				'menu_id' => 'footer-menu',
				'depth' => 1,
				'container' => false,
				'items_wrap' => '<ul class="footmenu clearfix">%3$s</ul>'
			)); 
		?>
	</div>
	<?php endif; ?>

	<?php do_action( 'basic_before_footer_copyrights' ); ?>

	<div class="maxwidth grid">
		<div class="col6">
			<p id="copy">
				<!--noindex--><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="nofollow"><?php bloginfo('name'); ?></a><!--/noindex--> &copy; <?php echo date("Y",time()); ?>
				<br/>
				<span class="copyright-text"><?php echo basic_get_theme_option('copyright_text'); ?></span>
			</p>
		</div>



	<?php do_action( 'basic_after_footer_copyrights' ); ?>

</footer>

</div> 
<!-- .wrapper -->

<a id="toTop">&#10148;</a>

<?php wp_footer(); ?>

</body>
</html>