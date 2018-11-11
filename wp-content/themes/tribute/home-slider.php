<div class="flexslider">
  <ul class="slides">
    <li>
      <div class="slider-image" style=" <?php if(get_theme_mod('slider_img_upload')){ ?>background-image:url(<?php echo get_theme_mod('slider_img_upload'); ?>)<?php } else{?>background-image:url(<?php echo get_template_directory_uri ();?>/images/slide.jpg);<?php }?>"></div>
   <?php if(get_theme_mod('slider_img_upload')){?>
      <img src="<?php echo get_theme_mod('slider_img_upload'); ?>" alt=""/>
   <?php }else{ ?>
    <img src="<?php echo get_template_directory_uri ();?>/images/slide.jpg" alt=""/>
    <?php }?>
      <div class="flex-caption">
        <h1 class="banner-title"><?php echo get_theme_mod('slider_title'); ?></h2>
        <h3 class="banner-description"><?php echo get_theme_mod('slider_text'); ?></h3>
      </div>
    </li>
    <li>
        <div class="slider-image" style=" <?php if(get_theme_mod('slider2_img_upload')){ ?>background-image:url(<?php echo get_theme_mod('slider2_img_upload'); ?>)<?php } else{?>background-image:url(<?php echo get_template_directory_uri ();?>/images/slide2.jpg);<?php }?>"></div>
   <?php if(get_theme_mod('slider2_img_upload')){?>
      <img src="<?php echo get_theme_mod('slider2_img_upload'); ?>" alt=""/>
   <?php }else{ ?>
    <img src="<?php echo get_template_directory_uri ();?>/images/slide2.jpg" alt=""/>
    <?php }?>
      <div class="flex-caption">
        <h1 class="banner-title"><?php echo get_theme_mod('slider2_title'); ?></h2>
        <h3 class="banner-description"><?php echo get_theme_mod('slider2_text'); ?></h3>
      </div>
    </li>
    <li>
<div class="slider-image" style=" <?php if(get_theme_mod('slider3_img_upload')){ ?>background-image:url(<?php echo get_theme_mod('slider3_img_upload'); ?>)<?php } else{?>background-image:url(<?php echo get_template_directory_uri ();?>/images/slide3.jpg);<?php }?>"></div>
   <?php if(get_theme_mod('slider3_img_upload')){?>
      <img src="<?php echo get_theme_mod('slider3_img_upload'); ?>" alt=""/>
   <?php }else{ ?>
    <img src="<?php echo get_template_directory_uri ();?>/images/slide3.jpg" alt=""/>
    <?php }?>
      <div class="flex-caption">
        <h1 class="banner-title"><?php echo get_theme_mod('slider3_title'); ?></h2>
        <h3 class="banner-description"><?php echo get_theme_mod('slider3_text'); ?></h3>
      </div>
    </li>
  </ul>
</div>
