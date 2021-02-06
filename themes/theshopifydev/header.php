<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
    <style>
        :root {
            --primary-color: <?php echo get_theme_mod('color_primary', '#000') ; ?>;
            --secondary-color: <?php echo get_theme_mod('color_secondary', '#006400') ; ?>;
        }

        .showcase {
            background: url('<?php echo get_theme_mod('showcase_bg', get_bloginfo('template_directory').'/img/showcase1.png');?>') no-repeat;
            background-size: cover;
            background-position: center;
            height: 100%;
        }

        .showcase-2 {
            background: url('<?php echo get_theme_mod('showcase_two_img', get_bloginfo('template_directory').'/img/showcase2.png');?>') no-repeat;
            background-size: cover;
            background-position: center;
            height: 100%;
        }
    </style>
    <?php wp_head(); ?>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="<?php echo get_theme_mod('logo_url'), 'http://localhost/theshopifydev/home/' ; ?>"><img src="<?php echo get_theme_mod('header_navbar_brand', get_bloginfo('template_directory').'/img/logo.png');?>" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ml-auto text-uppercase">
                    <li class="nav-item">
                        <a href="http://localhost/theshopifydev/home/" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#solutionAndServices" class="nav-link">Solution & Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contacts</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>    