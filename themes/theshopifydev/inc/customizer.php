<?php
    function theshopifydev_customize_register($wp_customize) {

        // Color
        $wp_customize->add_section( 'color' , array(
            'title'      => __( 'Color', 'theshopifydev' ),
            'description' => sprintf(__('Options for color'. 'theshopifydev')),
            'priority'   => 130,
        ) );

        $wp_customize->add_setting( 'color_primary' , array(
            'default'   => _x('#000', 'theshopifydev'),
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control('color_primary', array(
            'label'    => __('Primary Color', 'theshopifydev'),
            'section'  => 'color',
            'priority' => 1
        ));

        $wp_customize->add_setting( 'color_secondary' , array(
            'default'   => _x('#006400', 'theshopifydev'),
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control('color_secondary', array(
            'label'    => __('Secondary Color', 'theshopifydev'),
            'section'  => 'color',
            'priority' => 2
        ));

         // Header
         $wp_customize->add_section( 'header' , array(
            'title'      => __( 'Header', 'theshopifydev' ),
            'priority'   => 130,
        ) );

        $wp_customize->add_setting( 'header_navbar_brand' , array(
            'default'   => get_bloginfo('template_directory').'/img/logo.png', 'theshopifydev',
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_navbar_brand', array(
            'label'    => __('Navbar Brand', 'theshopifydev'),
            'section'  => 'header',
            'settings' => 'header_navbar_brand',
            'priority' => 1
        )));

        $wp_customize->add_setting( 'logo_url' , array(
            'default'   => _x('http://localhost/theshopifydev/home/', 'theshopifydev'),
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control('logo_url', array(
            'label'    => __('Logo URL', 'theshopifydev'),
            'section'  => 'header',
            'priority' => 2
        ));


        // Showcase
        $wp_customize->add_section( 'showcase' , array(
            'title'      => __( 'Showcase', 'theshopifydev' ),
            'description' => sprintf(__('Options for showcase'. 'theshopifydev')),
            'priority'   => 130,
        ) );

        $wp_customize->add_setting( 'showcase_bg' , array(
            'default'   => get_bloginfo('template_directory').'/img/showcase1.png', 'theshopifydev',
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_bg', array(
            'label'    => __('Showcase Background', 'theshopifydev'),
            'section'  => 'showcase',
            'settings' => 'showcase_bg',
            'priority' => 1
        )));

        $wp_customize->add_setting( 'showcase_img' , array(
            'default'   => get_bloginfo('template_directory').'/img/women.png', 'theshopifydev',
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_img', array(
            'label'    => __('Showcase Image', 'theshopifydev'),
            'section'  => 'showcase',
            'settings' => 'showcase_img',
            'priority' => 2
        )));

        $wp_customize->add_setting( 'showcase_heading' , array(
            'default'   => _x('Need Shopify <span>Expert?</span>', 'theshopifydev'),
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control('showcase_heading', array(
            'label'    => __('Heading', 'theshopifydev'),
            'section'  => 'showcase',
            'priority' => 3
        ));

        // Shopify Partner
        $wp_customize->add_section( 'shopify_partner' , array(
            'title'      => __( 'Shopify Partner', 'theshopifydev' ),
            'description' => sprintf(__('Options for shopify partner'. 'theshopifydev')),
            'priority'   => 130,
        ) );

        $wp_customize->add_setting( 'shopify_partner_heading' , array(
            'default'   => _x('Your Dedicated <span>Shopify</span> Partner', 'theshopifydev'),
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control('shopify_partner_heading', array(
            'label'    => __('Heading', 'theshopifydev'),
            'section'  => 'shopify_partner',
            'priority' => 1
        ));

        $wp_customize->add_setting( 'shopify_partner_box1_img' , array(
            'default'   => get_bloginfo('template_directory').'/img/partner1.png', 'theshopifydev',
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'shopify_partner_box1_img', array(
            'label'    => __('Box One Image', 'theshopifydev'),
            'section'  => 'shopify_partner',
            'settings' => 'shopify_partner_box1_img',
            'priority' => 2
        )));

        $wp_customize->add_setting( 'shopify_partner_box1_text' , array(
            'default'   => _x('Agile Approach', 'theshopifydev'),
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control('shopify_partner_box1_text', array(
            'label'    => __('Box One Text', 'theshopifydev'),
            'section'  => 'shopify_partner',
            'priority' => 3
        ));

        $wp_customize->add_setting( 'shopify_partner_box2_img' , array(
            'default'   => get_bloginfo('template_directory').'/img/partner2.png', 'theshopifydev',
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'shopify_partner_box2_img', array(
            'label'    => __('Box Two Image', 'theshopifydev'),
            'section'  => 'shopify_partner',
            'settings' => 'shopify_partner_box2_img',
            'priority' => 4
        )));

        $wp_customize->add_setting( 'shopify_partner_box2_text' , array(
            'default'   => _x('Scalability', 'theshopifydev'),
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control('shopify_partner_box2_text', array(
            'label'    => __('Box Two Text', 'theshopifydev'),
            'section'  => 'shopify_partner',
            'priority' => 5
        ));

        $wp_customize->add_setting( 'shopify_partner_box3_img' , array(
            'default'   => get_bloginfo('template_directory').'/img/partner3.png', 'theshopifydev',
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'shopify_partner_box3_img', array(
            'label'    => __('Box Three Image', 'theshopifydev'),
            'section'  => 'shopify_partner',
            'settings' => 'shopify_partner_box3_img',
            'priority' => 6
        )));

        $wp_customize->add_setting( 'shopify_partner_box3_text' , array(
            'default'   => _x('Efficiency', 'theshopifydev'),
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control('shopify_partner_box3_text', array(
            'label'    => __('Box Three Text', 'theshopifydev'),
            'section'  => 'shopify_partner',
            'priority' => 7
        ));

        // Solution & Services
        $wp_customize->add_section( 'solution_and_services' , array(
            'title'      => __( 'Solution & Services', 'theshopifydev' ),
            'description' => sprintf(__('Options for Solution & Services'. 'theshopifydev')),
            'priority'   => 130,
        ) );

        $wp_customize->add_setting( 'solution_and_services_heading' , array(
            'default'   => _x('Solution <span>&</span> Services', 'theshopifydev'),
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control('solution_and_services_heading', array(
            'label'    => __('Heading', 'theshopifydev'),
            'section'  => 'solution_and_services',
            'priority' => 1
        ));

        $wp_customize->add_setting( 'solution_and_services_box1_img' , array(
            'default'   => get_bloginfo('template_directory').'/img/test.png', 'theshopifydev',
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'solution_and_services_box1_img', array(
            'label'    => __('Box One Image', 'theshopifydev'),
            'section'  => 'solution_and_services',
            'settings' => 'solution_and_services_box1_img',
            'priority' => 2
        )));

        $wp_customize->add_setting( 'solution_and_services_box1_text' , array(
            'default'   => _x('Store Setup', 'theshopifydev'),
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control('solution_and_services_box1_text', array(
            'label'    => __('Box One Text', 'theshopifydev'),
            'section'  => 'solution_and_services',
            'priority' => 3
        ));

        $wp_customize->add_setting( 'solution_and_services_box2_img' , array(
            'default'   => get_bloginfo('template_directory').'/img/test.png', 'theshopifydev',
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'solution_and_services_box2_img', array(
            'label'    => __('Box Two Image', 'theshopifydev'),
            'section'  => 'solution_and_services',
            'settings' => 'solution_and_services_box2_img',
            'priority' => 4
        )));

        $wp_customize->add_setting( 'solution_and_services_box2_text' , array(
            'default'   => _x('Custom Shopify Application', 'theshopifydev'),
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control('solution_and_services_box2_text', array(
            'label'    => __('Box Two Text', 'theshopifydev'),
            'section'  => 'solution_and_services',
            'priority' => 5
        ));

        $wp_customize->add_setting( 'solution_and_services_box3_img' , array(
            'default'   => get_bloginfo('template_directory').'/img/test.png', 'theshopifydev',
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'solution_and_services_box3_img', array(
            'label'    => __('Box Three Image', 'theshopifydev'),
            'section'  => 'solution_and_services',
            'settings' => 'solution_and_services_box3_img',
            'priority' => 6
        )));

        $wp_customize->add_setting( 'solution_and_services_box3_text' , array(
            'default'   => _x('Shopify Integration', 'theshopifydev'),
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control('solution_and_services_box3_text', array(
            'label'    => __('Box Three Text', 'theshopifydev'),
            'section'  => 'solution_and_services',
            'priority' => 7
        ));

        $wp_customize->add_setting( 'solution_and_services_box4_img' , array(
            'default'   => get_bloginfo('template_directory').'/img/test.png', 'theshopifydev',
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'solution_and_services_box4_img', array(
            'label'    => __('Box Four Image', 'theshopifydev'),
            'section'  => 'solution_and_services',
            'settings' => 'solution_and_services_box4_img',
            'priority' => 8
        )));

        $wp_customize->add_setting( 'solution_and_services_box4_text' , array(
            'default'   => _x('Shopify Backup Solution', 'theshopifydev'),
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control('solution_and_services_box4_text', array(
            'label'    => __('Box Four Text', 'theshopifydev'),
            'section'  => 'solution_and_services',
            'priority' => 9
        ));

        $wp_customize->add_setting( 'solution_and_services_box5_img' , array(
            'default'   => get_bloginfo('template_directory').'/img/test.png', 'theshopifydev',
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'solution_and_services_box5_img', array(
            'label'    => __('Box Five Image', 'theshopifydev'),
            'section'  => 'solution_and_services',
            'settings' => 'solution_and_services_box5_img',
            'priority' => 10
        )));

        $wp_customize->add_setting( 'solution_and_services_box5_text' , array(
            'default'   => _x('Theme Design and Development', 'theshopifydev'),
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control('solution_and_services_box5_text', array(
            'label'    => __('Box Five Text', 'theshopifydev'),
            'section'  => 'solution_and_services',
            'priority' => 11
        ));

        $wp_customize->add_setting( 'solution_and_services_box6_img' , array(
            'default'   => get_bloginfo('template_directory').'/img/test.png', 'theshopifydev',
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'solution_and_services_box6_img', array(
            'label'    => __('Box Six Image', 'theshopifydev'),
            'section'  => 'solution_and_services',
            'settings' => 'solution_and_services_box6_img',
            'priority' => 12
        )));

        $wp_customize->add_setting( 'solution_and_services_box6_text' , array(
            'default'   => _x('Advance Dashboard and Reporting Tech', 'theshopifydev'),
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control('solution_and_services_box6_text', array(
            'label'    => __('Box Six Text', 'theshopifydev'),
            'section'  => 'solution_and_services',
            'priority' => 13
        ));

        $wp_customize->add_setting( 'solution_and_services_box7_img' , array(
            'default'   => get_bloginfo('template_directory').'/img/test.png', 'theshopifydev',
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'solution_and_services_box7_img', array(
            'label'    => __('Box Seven Image', 'theshopifydev'),
            'section'  => 'solution_and_services',
            'settings' => 'solution_and_services_box7_img',
            'priority' => 14
        )));

        $wp_customize->add_setting( 'solution_and_services_box7_text' , array(
            'default'   => _x('Improve User Experience', 'theshopifydev'),
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control('solution_and_services_box7_text', array(
            'label'    => __('Box Seven Text', 'theshopifydev'),
            'section'  => 'solution_and_services',
            'priority' => 15
        ));

        $wp_customize->add_setting( 'solution_and_services_box8_img' , array(
            'default'   => get_bloginfo('template_directory').'/img/test.png', 'theshopifydev',
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'solution_and_services_box8_img', array(
            'label'    => __('Box Eight Image', 'theshopifydev'),
            'section'  => 'solution_and_services',
            'settings' => 'solution_and_services_box8_img',
            'priority' => 16
        )));

        $wp_customize->add_setting( 'solution_and_services_box8_text' , array(
            'default'   => _x('Shopify SEO', 'theshopifydev'),
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control('solution_and_services_box8_text', array(
            'label'    => __('Box Eight Text', 'theshopifydev'),
            'section'  => 'solution_and_services',
            'priority' => 17
        ));

        // Showcase 2
        $wp_customize->add_section( 'showcase_2' , array(
            'title'      => __( 'Showcase Two', 'theshopifydev' ),
            'description' => sprintf(__('Options for showcase two'. 'theshopifydev')),
            'priority'   => 130,
        ) );

        $wp_customize->add_setting( 'showcase_two_img' , array(
            'default'   => get_bloginfo('template_directory').'/img/showcase2.png', 'theshopifydev',
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_two_img', array(
            'label'    => __('Showcase Two Image', 'theshopifydev'),
            'section'  => 'showcase_2',
            'settings' => 'showcase_two_img',
            'priority' => 1
        )));

        $wp_customize->add_setting( 'showcase_two_heading' , array(
            'default'   => _x('Hire a <span>Shopify</span> Expert', 'theshopifydev'),
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control('showcase_two_heading', array(
            'label'    => __('Heading', 'theshopifydev'),
            'section'  => 'showcase_2',
            'priority' => 2
        ));

        $wp_customize->add_setting( 'showcase_two_text' , array(
            'default'   => _x('Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, natus animi, id quibusdam officiis voluptatum earum laborum numquam pariatur excepturi omnis culpa. Similique provident error deleniti facilis veniam incidunt tempora.', 'theshopifydev'),
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control('showcase_two_text', array(
            'label'    => __('Showcase Two Text', 'theshopifydev'),
            'section'  => 'showcase_2',
            'priority' => 3
        ));

        $wp_customize->add_setting( 'showcase_two_btn_text' , array(
            'default'   => _x("Let's Talk", 'theshopifydev'),
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control('showcase_two_btn_text', array(
            'label'    => __('Showcase Two Button Text', 'theshopifydev'),
            'section'  => 'showcase_2',
            'priority' => 4
        ));

        $wp_customize->add_setting( 'showcase_two_btn_url' , array(
            'default'   => _x('#contact', 'theshopifydev'),
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control('showcase_two_btn_url', array(
            'label'    => __('Showcase Two Button URL', 'theshopifydev'),
            'section'  => 'showcase_2',
            'priority' => 5
        ));

        // Improve Your Store
        $wp_customize->add_section( 'improve_your_store' , array(
            'title'      => __( 'Improve Your Store', 'theshopifydev' ),
            'description' => sprintf(__('Options for improve your store'. 'theshopifydev')),
            'priority'   => 130,
        ) );

        $wp_customize->add_setting( 'improve_your_store_img' , array(
            'default'   => get_bloginfo('template_directory').'/img/gadget.png', 'theshopifydev',
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'improve_your_store_img', array(
            'label'    => __('Improve Your Store Image', 'theshopifydev'),
            'section'  => 'improve_your_store',
            'settings' => 'improve_your_store_img',
            'priority' => 1
        )));

        $wp_customize->add_setting( 'improve_your_store_heading' , array(
            'default'   => _x('Improve Your <span>Store</span>', 'theshopifydev'),
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control('improve_your_store_heading', array(
            'label'    => __('Heading', 'theshopifydev'),
            'section'  => 'improve_your_store',
            'priority' => 2
        ));

        $wp_customize->add_setting( 'improve_your_store_text' , array(
            'default'   => _x('Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam dolorum molestias cumque repellendus, fugiat, magni eligendi praesentium, sit voluptate tenetur voluptates libero laboriosam ex unde odit qui corporis cum temporibus?', 'theshopifydev'),
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control('improve_your_store_text', array(
            'label'    => __('Text', 'theshopifydev'),
            'section'  => 'improve_your_store',
            'priority' => 3
        ));

        // Contact
        $wp_customize->add_section( 'contact' , array(
            'title'      => __( 'Contact', 'theshopifydev' ),
            'description' => sprintf(__('Options for contact'. 'theshopifydev')),
            'priority'   => 130,
        ) );

        $wp_customize->add_setting( 'contact_heading' , array(
            'default'   => _x('Got a <span>Project</span> in mind?', 'theshopifydev'),
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control('contact_heading', array(
            'label'    => __('Heading', 'theshopifydev'),
            'section'  => 'contact',
            'priority' => 1
        ));

        $wp_customize->add_setting( 'contact_text' , array(
            'default'   => _x('Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita dolorum, recusandae assumenda libero neque soluta facere laudantium fuga eius sunt numquam hic, qui optio, placeat ex? Molestias rerum voluptatum ullam!', 'theshopifydev'),
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control('contact_text', array(
            'label'    => __('Text', 'theshopifydev'),
            'section'  => 'contact',
            'priority' => 2
        ));

        // Footer
        $wp_customize->add_section( 'footer' , array(
            'title'      => __( 'Footer', 'theshopifydev' ),
            'description' => sprintf(__('Options for footer'. 'theshopifydev')),
            'priority'   => 130,
        ) );

        $wp_customize->add_setting( 'footer_logo_one' , array(
            'default'   => get_bloginfo('template_directory').'/img/logo.png', 'theshopifydev',
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo_one', array(
            'label'    => __('Footer Logo One', 'theshopifydev'),
            'section'  => 'footer',
            'settings' => 'footer_logo_one',
            'priority' => 1
        )));

        $wp_customize->add_setting( 'footer_logo_one_url' , array(
            'default'   => _x('http://localhost/theshopifydev/', 'theshopifydev'),
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control('footer_logo_one_url', array(
            'label'    => __('Logo One URL', 'theshopifydev'),
            'section'  => 'footer',
            'priority' => 2
        ));

        $wp_customize->add_setting( 'footer_logo_two' , array(
            'default'   => get_bloginfo('template_directory').'/img/logo2.png', 'theshopifydev',
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo_two', array(
            'label'    => __('Footer Logo Two', 'theshopifydev'),
            'section'  => 'footer',
            'settings' => 'footer_logo_two',
            'priority' => 3
        )));

        $wp_customize->add_setting( 'footer_logo_two_url' , array(
            'default'   => _x('http://localhost/theshopifydev/', 'theshopifydev'),
            'type'      => 'theme_mod'
        ) );

        $wp_customize->add_control('footer_logo_two_url', array(
            'label'    => __('Logo Two URL', 'theshopifydev'),
            'section'  => 'footer',
            'priority' => 4
        ));
    }

    add_action( 'customize_register', 'theshopifydev_customize_register' );