<?php get_header(); ?>

    <!-- Showcase -->
    <div class="container-fluid">
        <div class="row showcase">
            <div class="col-5 col-md-6 d-flex"><img src="<?php echo get_theme_mod('showcase_img', get_bloginfo('template_directory').'/img/women.png');?>" alt="Women"></div>
            <div class="col-7 col-md-6 showcase-content">
                <h3><?php echo get_theme_mod('showcase_heading', 'Need Shopify <span>Expert?</span>'); ?></h3>
                <form method="" action="#" class="form-inline">
                    <input type="email" name="email" class="form-control" placeholder="Email address">
                    <button type="submit" name="submit" class="btn-secondary">Let's Talk</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Shopify Partner -->
    <div class="shopify-partner">
        <div class="container">
            <h3><?php echo get_theme_mod('shopify_partner_heading', 'Your Dedicated <span>Shopify</span> Partner'); ?></h3>
            <div class="row">
                <div class="col-sm-4">
                    <img src="<?php echo get_theme_mod('shopify_partner_box1_img', get_bloginfo('template_directory').'/img/partner1.png'); ?>" alt="Partner" >
                    <h4><?php echo get_theme_mod('shopify_partner_box1_text', 'Agile Approach'); ?></h4>
                </div>
                <div class="col-sm-4">
                    <img src="<?php echo get_theme_mod('shopify_partner_box2_img', get_bloginfo('template_directory').'/img/partner2.png'); ?>" alt="Partner" >
                    <h4><?php echo get_theme_mod('shopify_partner_box2_text', 'Scalability'); ?></h4>
                </div>
                <div class="col-sm-4">
                <img src="<?php echo get_theme_mod('shopify_partner_box3_img', get_bloginfo('template_directory').'/img/partner3.png'); ?>" alt="Partner" >
                    <h4><?php echo get_theme_mod('shopify_partner_box3_text', 'Efficiency'); ?></h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Solution & Services -->
    <div id="solutionAndServices" class="solution-and-services">
        <div class="container">
            <h3><?php echo get_theme_mod('solution_and_services_heading', 'Solution <span>&</span> Services'); ?></h3>
            <div class="row">
                <div class="col-6 col-md-4 col-lg-3">
                    <img src="<?php echo get_theme_mod('solution_and_services_box1_img', get_bloginfo('template_directory').'/img/test.png'); ?>" alt="Partner" >
                    <h4><?php echo get_theme_mod('solution_and_services_box1_text', 'Store Setup'); ?></h4>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <img src="<?php echo get_theme_mod('solution_and_services_box2_img', get_bloginfo('template_directory').'/img/test.png'); ?>" alt="Partner" >
                    <h4><?php echo get_theme_mod('solution_and_services_box2_text', 'Custom Shopify Application'); ?></h4>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <img src="<?php echo get_theme_mod('solution_and_services_box3_img', get_bloginfo('template_directory').'/img/test.png'); ?>" alt="Partner" >
                    <h4><?php echo get_theme_mod('solution_and_services_box3_text', 'Shopify Integration'); ?></h4>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <img src="<?php echo get_theme_mod('solution_and_services_box4_img', get_bloginfo('template_directory').'/img/test.png'); ?>" alt="Partner" >
                    <h4><?php echo get_theme_mod('solution_and_services_box4_text', 'Shopify Backup Solution'); ?></h4>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                <img src="<?php echo get_theme_mod('solution_and_services_box5_img', get_bloginfo('template_directory').'/img/test.png'); ?>" alt="Partner" >
                    <h4><?php echo get_theme_mod('solution_and_services_box5_text', 'Theme Design and Development'); ?></h4>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <img src="<?php echo get_theme_mod('solution_and_services_box6_img', get_bloginfo('template_directory').'/img/test.png'); ?>" alt="Partner" >
                    <h4><?php echo get_theme_mod('solution_and_services_box6_text', 'Advance Dashboard and Reporting Tech'); ?></h4>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <img src="<?php echo get_theme_mod('solution_and_services_box7_img', get_bloginfo('template_directory').'/img/test.png'); ?>" alt="Partner" >
                    <h4><?php echo get_theme_mod('solution_and_services_box7_text', 'Improve User Experience'); ?></h4>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <img src="<?php echo get_theme_mod('solution_and_services_box8_img', get_bloginfo('template_directory').'/img/test.png'); ?>" alt="Partner" >
                    <h4><?php echo get_theme_mod('solution_and_services_box8_text', 'Shopify SEO'); ?></h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Showcase 2 -->
    <div class="container-fluid">
        <div class="row showcase-2">
            <div class="col-lg-7">
                <h3><?php echo get_theme_mod('showcase_two_heading', 'Hire a <span>Shopify</span> Expert'); ?></h3>
                <p><?php echo get_theme_mod('showcase_two_text', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, natus animi, id quibusdam officiis voluptatum earum laborum numquam pariatur excepturi omnis culpa. Similique provident error deleniti facilis veniam incidunt tempora.'); ?></p>
                <a href="<?php echo get_theme_mod('showcase_two_btn_url', '#contact'); ?>" class="btn-secondary btn-lg"><?php echo get_theme_mod('showcase_two_btn_text', "Let's Talk"); ?></a>
            </div>
        </div>
    </div>

    <!-- Improve Your Store -->
    <div class="improve-your-store">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-7">
                    <img src="<?php echo get_theme_mod('improve_your_store_img', get_bloginfo('template_directory').'/img/gadget.png');?>" alt="Gadget">
                </div>
                <div class="col-md-6 col-lg-5">
                    <h3><?php echo get_theme_mod('improve_your_store_heading', 'Improve Your <span>Store</span>'); ?></h3>
                    <p><?php echo get_theme_mod('improve_your_store_text', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam dolorum molestias cumque repellendus, fugiat, magni eligendi praesentium, sit voluptate tenetur voluptates libero laboriosam ex unde odit qui corporis cum temporibus?'); ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact -->
    <div id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 contact-text">
                    <h3><?php echo get_theme_mod('contact_heading', 'Got a <span>Project</span> in mind?'); ?></h3>
                    <p><?php echo get_theme_mod('contact_text', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita dolorum, recusandae assumenda libero neque soluta facere laudantium fuga eius sunt numquam hic, qui optio, placeat ex? Molestias rerum voluptatum ullam!'); ?></p>
                </div>
                <div class="col-lg-6">
                    <form method="" action="">
                        <div class="form-group">
                            <label>Your Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Your Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Contact Number</label>
                            <input type="text" name="contact" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="message" class="form-control"></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn-secondary btn-lg">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>