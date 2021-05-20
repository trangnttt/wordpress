<?php
function itng_customize_register_social( $wp_customize ) {
		// Social Icons
	$wp_customize->add_section('itng_social_section', array(
			'title' 	=> esc_html__('Social Icons','it-news-grid'),
			'priority' 	=> 70,
			'panel'		=> 'itng_header'
	));
	
	$wp_customize->add_setting(
		'itng_social_enable', array(
			'default'	=>	1,
			'sanitize_callback'	=>	'itng_sanitize_checkbox'
		)
	);
	
	$wp_customize->add_control(
		'itng_social_enable', array(
			'label'	=>	__('Enable Social Icons in Header', 'it-news-grid'),
			'type'	=>	'checkbox',
			'section'	=>	'itng_social_section',
			'priority'	=>	5
		)
	);

	$social_networks = array( //Redefinied in Sanitization Function.
					'none' 			=> esc_html__('-','it-news-grid'),
					'facebook-f' 	=> esc_html__('Facebook', 'it-news-grid'),
					'twitter' 		=> esc_html__('Twitter', 'it-news-grid'),
					'instagram' 	=> esc_html__('Instagram', 'it-news-grid'),
					'rss' 			=> esc_html__('RSS Feeds', 'it-news-grid'),
					'pinterest-p' 	=> esc_html__('Pinterest', 'it-news-grid'),
					'vimeo' 		=> esc_html__('Vimeo', 'it-news-grid'),
					'youtube' 		=> esc_html__('Youtube', 'it-news-grid'),
					'flickr' 		=> esc_html__('Flickr', 'it-news-grid'),
				);


    $social_count = count($social_networks);

	for ($x = 1 ; $x <= ($social_count - 3) ; $x++) :

		$wp_customize->add_setting(
			'itng_social_'.$x, array(
				'sanitize_callback' => 'itng_sanitize_social',
				'default' 			=> 'none',
				'transport'			=> 'postMessage'
			));

		$wp_customize->add_control( 'itng_social_' . $x, array(
					'settings' 	=> 'itng_social_'.$x,
					'label' 	=> esc_html__('Icon ','it-news-grid') . $x,
					'section' 	=> 'itng_social_section',
					'type' 		=> 'select',
					'choices' 	=> $social_networks,
		));

		$wp_customize->add_setting(
			'itng_social_url'.$x, array(
				'sanitize_callback' => 'esc_url_raw'
			));

		$wp_customize->add_control( 'itng_social_url' . $x, array(
			'label' 		=> esc_html__('Icon ','it-news-grid') . $x . esc_html__(' Url','it-news-grid'),
					'settings' 		=> 'itng_social_url' . $x,
					'section' 		=> 'itng_social_section',
					'type' 			=> 'url',
					'choices' 		=> $social_networks,
		));

	endfor;

	function itng_sanitize_social( $input ) {
		$social_networks = array(
					'none' ,
					'facebook-f',
					'twitter',
					'instagram',
					'rss',
					'pinterest-p',
					'vimeo',
					'youtube',
					'flickr'
				);
		if ( in_array($input, $social_networks) )
			return $input;
		else
			return '';
	}
}
add_action( 'customize_register', 'itng_customize_register_social' );