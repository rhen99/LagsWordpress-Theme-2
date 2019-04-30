<?php
function wp_customize_register($wp_customize){
    //Showcase Section
    $wp_customize->add_section('showcase', [
        'title' => __('Showcase', 'lagstheme2'),
        'description' => sprintf(__('Edit your showcase.', 'lagstheme2')),
        'priority' => 130 
    ]);
    //Showcase Image
    $wp_customize->add_setting('showcase_image', [
        'type' => 'theme_mod',
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', [
        'label' => __('Secondary Image', 'lagstheme2'),
        'section' => 'showcase',
        'settings' => 'showcase_image',
        'priority ' => 1
    ]));
    //Showcase Heading
    $wp_customize->add_setting('showcase_heading', [
        'default' => _x('Showcase Heading', 'lagstheme2'),
        'type' => 'theme_mod',
    ]);
    $wp_customize->add_control('showcase_heading', [
        'label' => __('Heading', 'lagstheme2'),
        'section' => 'showcase',
        'priority ' => 2
    ]);
    //Showcase Secondary Text
    $wp_customize->add_setting('showcase_secondary', [
        'default' => _x('Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis, corrupti.', 'lagstheme2'),
        'type' => 'theme_mod',
    ]);
    $wp_customize->add_control('showcase_secondary', [
        'label' => __('Secondary Text', 'lagstheme2'),
        'section' => 'showcase',
        'priority ' => 3
    ]);
    //Showcase Buton Text
    $wp_customize->add_setting('showcase_btn_text', [
        'default' => _x('Read More', 'lagstheme2'),
        'type' => 'theme_mod',
    ]);
    $wp_customize->add_control('showcase_btn_text', [
        'label' => __('Button Text', 'lagstheme2'),
        'section' => 'showcase',
        'priority ' => 4
    ]);
}
add_action('customize_register', 'wp_customize_register');