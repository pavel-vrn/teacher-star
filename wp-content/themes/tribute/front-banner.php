<section id="banner">
<?php if(get_theme_mod('banner_title','Free Responsive WordPress Theme') || get_theme_mod('banner_text','Tribute is a free WordPress theme for blogs that are designed to have beautiful typography.')) : ?>
<div class="banner-cnt">
    <?php if(get_theme_mod('banner_title','Free Responsive WordPress Theme')){ ?>
    <h1 class="banner-title"><?php echo esc_html(get_theme_mod('banner_title','Free Responsive WordPress Theme')); ?></h1>
    <?php } if(get_theme_mod('banner_text','Tribute is a free WordPress theme for blogs that are designed to have beautiful typography.')){ ?>
  <h3 class="banner-description"><?php echo esc_html(get_theme_mod('banner_text','Tribute is a free WordPress theme for blogs that are designed to have beautiful typography.')); ?></h3>
    <?php } ?>
</div>
<?php endif; ?>

  </section>