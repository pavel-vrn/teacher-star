<?php
function tribute_themes_customizer($wp_customize) {
$wp_customize->add_section(
    'theme_setting_section',
    array(
        'title' => __( 'Themes Settings', 'tribute'),
        'description' => esc_html__('This is a Themes Settings section.', 'tribute'),
        'priority' => 35,
    )
);

$wp_customize->add_setting(
'front_placement',
array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field',
				'transport'   => 'refresh',

			)
);
 
$wp_customize->add_control(
'front_placement',
array(
    'type' => 'radio',
    'label' =>__('Front placement', 'tribute'),
    'section' => 'theme_setting_section',
    'choices' => array(
        'banner' => esc_html__('Banner', 'tribute'),
        'slider' => esc_html__('Slider', 'tribute'),
    ),
)
);


$wp_customize->add_setting(
'copyright_textbox',
array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field',
				'transport'   => 'refresh',

			)
);
$wp_customize->add_control(
'copyright_textbox',
array(
    'label' =>__('Copyright text', 'tribute'),
    'section' => 'theme_setting_section',
    'type' => 'textarea',
)
);

$wp_customize->add_setting(
'hide_copyright', array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field',
				'transport'   => 'refresh',

			)
);

$wp_customize->add_control(
'hide_copyright',
array(
    'type' => 'checkbox',
    'label' =>__('Hide copyright text', 'tribute'),
    'section' => 'theme_setting_section',
)
);

$wp_customize->add_setting(
'logo_placement',
array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field',
				'transport'   => 'refresh',

			)
);
 
$wp_customize->add_control(
'logo_placement',
array(
    'type' => 'radio',
    'label' =>__('Logo placement', 'tribute'),
    'section' => 'theme_setting_section',
    'choices' => array(
        'left' => esc_html__('Left', 'tribute'),
        'right' => esc_html__('Right', 'tribute'),
        'center' => esc_html__('Center', 'tribute'),
    ),
)
);

$wp_customize->add_setting(
'color-setting',
array(
    'default' => '#da4453',
    'sanitize_callback' => 'sanitize_hex_color',
)
);

$wp_customize->add_control(
new WP_Customize_Color_Control(
    $wp_customize,
    'color-setting',
    array(
        'label' =>__('Theme Color Setting', 'tribute'),
        'section' => 'theme_setting_section',
        'settings' => 'color-setting',
    )
)
);

$wp_customize->add_setting(
'bgcolor-setting',
array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color',
)
);

$wp_customize->add_control(
new WP_Customize_Color_Control(
    $wp_customize,
    'bgcolor-setting',
    array(
        'label' =>__('Background Color Setting', 'tribute'),
        'section' => 'theme_setting_section',
        'settings' => 'bgcolor-setting',
    )
)
);

$wp_customize->add_setting('bgimg-upload',array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw',
				'transport'   => 'refresh',

			) );
 
$wp_customize->add_control(
new WP_Customize_Upload_Control(
    $wp_customize,
    'bgimg-upload',
    array(
        'label' =>__('Banner Image Change', 'tribute'),
        'section' => 'banner_section',
        'settings' => 'bgimg-upload'
    )
)
);




$wp_customize->add_setting(
'banner_title',array(
				'default' => 'Free Responsive WordPress Theme',
				'sanitize_callback' => 'sanitize_text_field',
				'transport'   => 'refresh',
			)
);
$wp_customize->add_control(
'banner_title',
array(
    'type' => 'text',
    'label' =>__('Banner Title', 'tribute'),
    'section' => 'banner_section',
)
);

$wp_customize->add_setting(
'banner_text',array(
				'default' => 'Tribute is a free WordPress theme for blogs that are designed to have beautiful typography.',
				'sanitize_callback' => 'sanitize_text_field',
				'transport'   => 'refresh',

			)
);

$wp_customize->add_control(
'banner_text',
array(
    'type' => 'textarea',
    'label' =>__('Banner Text', 'tribute'),
    'section' => 'banner_section',
)
);


$wp_customize->add_setting(
			'logo-upload',
			array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw',
				'transport'   => 'refresh',

			)
		);
 
$wp_customize->add_control(
new WP_Customize_Image_Control(
    $wp_customize,
    'logo-upload',
    array(
        'label' =>__('Logo Upload', 'tribute'),
        'section' => 'theme_setting_section',
        'settings' => 'logo-upload'
    )
)

);


$wp_customize->add_section(
    'slider_section',
    array(
        'title' => __( 'Slider Section ', 'tribute'),
        'description' => esc_html__('This is a Slider Settings section.', 'tribute'),
        'priority' => 10,
    )
);

$wp_customize->add_section(
    'banner_section',
    array(
        'title' => __( 'Banner Section ', 'tribute'),
        'description' => esc_html__('This is a Banner Settings section.', 'tribute'),
        'priority' => 10,
    )
);


			
			
 // Slide Image 01
 
 $wp_customize->add_setting('slider_img_upload',array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw',
				'transport'   => 'refresh',

			) );
 
 $wp_customize->add_control(
new WP_Customize_Upload_Control(
    $wp_customize,
    'slider_img_upload',
    array(
        'label' =>__('Slider First', 'tribute'),
        'section' => 'slider_section',
        'settings' => 'slider_img_upload'
    )
)
);

$wp_customize->add_setting(
'slider_title',array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field',
				'transport'   => 'refresh',
			)
);
$wp_customize->add_control(
'slider_title',
array(
    'type' => 'text',
    'label' =>__('Slider Title', 'tribute'),
    'section' => 'slider_section',
)
);

$wp_customize->add_setting(
'slider_text',array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field',
				'transport'   => 'refresh',

			)
);

$wp_customize->add_control(
'slider_text',
array(
    'type' => 'textarea',
    'label' =>__('slider Text', 'tribute'),
    'section' => 'slider_section',
)
);





 // Slide Image 02
 
 $wp_customize->add_setting('slider2_img_upload',array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw',
				'transport'   => 'refresh',

			) );
 
 $wp_customize->add_control(
new WP_Customize_Upload_Control(
    $wp_customize,
    'slider2_img_upload',
    array(
        'label' =>__('Slider Second', 'tribute'),
        'section' => 'slider_section',
        'settings' => 'slider2_img_upload'
    )
)
);

$wp_customize->add_setting(
'slider2_title',array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field',
				'transport'   => 'refresh',
			)
);
$wp_customize->add_control(
'slider2_title',
array(
    'type' => 'text',
    'label' =>__('Slider Title', 'tribute'),
    'section' => 'slider_section',
)
);

$wp_customize->add_setting(
'slider2_text',array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field',
				'transport'   => 'refresh',

			)
);

$wp_customize->add_control(
'slider2_text',
array(
    'type' => 'textarea',
    'label' =>__('slider Text', 'tribute'),
    'section' => 'slider_section',
)
);


 // Slide Image 03
 
  $wp_customize->add_setting('slider3_img_upload',array(
				'default' => '',
				'sanitize_callback' => 'esc_url_raw',
				'transport'   => 'refresh',

			) );
 
 
 $wp_customize->add_control(
new WP_Customize_Upload_Control(
    $wp_customize,
    'slider3_img_upload',
    array(
        'label' =>__('Slider Third', 'tribute'),
        'section' => 'slider_section',
        'settings' => 'slider3_img_upload'
    )
)
);

$wp_customize->add_setting(
'slider3_title',array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field',
				'transport'   => 'refresh',
			)
);
$wp_customize->add_control(
'slider3_title',
array(
    'type' => 'text',
    'label' =>__('Slider Title', 'tribute'),
    'section' => 'slider_section',
)
);

$wp_customize->add_setting(
'slider3_text',array(
				'default' => '',
				'sanitize_callback' => 'sanitize_text_field',
				'transport'   => 'refresh',

			)
);

$wp_customize->add_control(
'slider3_text',
array(
    'type' => 'textarea',
    'label' =>__('slider Text', 'tribute'),
    'section' => 'slider_section',
)
);



}
add_action('customize_register', 'tribute_themes_customizer');




function tribute_customizer_social_media_array() {
 
	/* store social site names in array */
	$social_sites = array( 'facebook','twitter', 'linkedin', 'instagram','google-plus', 'flickr', 'pinterest', 'youtube', 'tumblr', 'dribbble', 'rss',  'email');
 
	return $social_sites;
}
/* add settings to create various social media text areas. */
add_action('customize_register', 'tribute_add_social_sites_customizer');
function tribute_add_social_sites_customizer($wp_customize) {
	$wp_customize->add_section('my_social_settings', array(
			'title'    => __('Social Media Icons', 'tribute'),
			'priority' => 35,
	) );
	$social_sites = tribute_customizer_social_media_array();
	$priority = 5;
	foreach($social_sites as $social_site) {
		$wp_customize->add_setting( "$social_site", array(
				'type'              => 'theme_mod',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw'
		) );
		$wp_customize->add_control($social_site, array(
				'label'    =>$social_site.' '.__("url:", 'tribute'),
				'section'  => 'my_social_settings',
				'type'     => 'text',
				'priority' => $priority,
		) );
		$priority = $priority + 5;
	}
}

?>
