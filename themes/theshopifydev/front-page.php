<?php get_header(); ?>

    <?php get_template_part('template-parts/content', 'showcase'); ?>

    <?php get_template_part('template-parts/content', 'shopify-partner'); ?>

    <!-- This Section Created using WP Bakery Start-->
       <div class="container-fluid">
            <?php the_content(); ?>
       </div>
    <!-- This Section Created using WP Bakery End -->

    <?php get_template_part('template-parts/content', 'contact'); ?>

<?php get_footer(); ?>
