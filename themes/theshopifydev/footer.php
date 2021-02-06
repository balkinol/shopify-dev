    <footer>
        <div class="container-fluid d-flex justify-content-between">
            <a href="<?php echo get_theme_mod('footer_logo_one_url'), 'http://localhost/theshopifydev/' ; ?>">
                <img src="<?php echo get_theme_mod('footer_logo_one', get_bloginfo('template_directory').'/img/logo.png');?>" alt="Logo">
            </a>
            <a href="<?php echo get_theme_mod('footer_logo_two_url'), 'http://localhost/theshopifydev/' ; ?>">
                <img src="<?php echo get_theme_mod('footer_logo_two', get_bloginfo('template_directory').'/img/logo2.png');?>" alt="Logo 2">
            </a>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
