<?php
/**
 * 
 * Description: Displays a full-width front page. The front page template provides an optional
 * featured section that allows for highlighting a key message. It can contain up to 2 widget areas,
 * in one or two columns. These widget areas are dynamic so if only one widget is used, it will be
 * displayed in one column. If two are used, then they will be displayed over 2 columns.
 * There are also four front page only widgets displayed just beneath the two featrued widgets. Like the
 * featured widgets, they will be displayed in anywhere from one to four columns, depending on
 * how many widgets are active.
 * 
 * The front page template also displays EDD featured products and featured posts 
 * depending on the settings from Theme Customizer 
 *
 * @package Prism
 * @since Prism 1.0
 */
get_header();
?>


<div class="slider-wrapper">
    <div class="flexslider"  id="main-slider">
        <ul class="slides">
            <?php 
            // check if the slider is blank.
            // if there are no slides by user then load default slides. 
            
            if ( get_theme_mod('slider_one') =='' ) {  ?>
                <li>
                <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/slider1.jpg" alt=""/>
                <div class="flex-caption">
                    <div class="slider-text-container">
                     <h2 class="slider-title"><a href="#"><?php esc_html_e('Upgrade to Pro version!', 'prism') ?></a></h2>
                          <p><?php esc_html_e('The pro version comes with much more exciting features including more slider images, testimonials and color schemes. A lot more there!', 'prism') ?> </p>
                    </div>
                    </div>
                </li>
                
                <li>
                <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/slider2.jpg" alt=""/>
                <div class="flex-caption">
                    <div class="slider-text-container">
                     <h2 class="slider-title"><a href="#"><?php esc_html_e('Dedicated support & upgrades', 'prism') ?></a></h2>
                          <p><?php esc_html_e('Pro version gives you access to dedicated support & feature rich upgrades.', 'prism') ?> </p>
                     </div>
                </div>
                </li>
               
            <?php } ?>
                
          <?php 
          // if user adds a cusotm slide then display the slides 
          // load first slide
          if ( get_theme_mod('slider_one') !='' ) {  ?>
                    <li id="slider1" class="home-slider"> 
                        <img href="<?php if ( get_theme_mod('slider_one_url') !='' ) { echo esc_url(get_theme_mod('slider_one_url')); } ?>" src="<?php echo get_theme_mod('slider_one'); ?>" alt=""/>
                    <?php if ( get_theme_mod('slider_title_one') !='' || get_theme_mod('slider_one_url') !='' || get_theme_mod('slider_one_description') !='' ) {  ?>    
                        <div class="flex-caption">
                            <div class="slider-text-container">
                                <h2 class="slider-title"><a href="<?php echo esc_url(get_theme_mod('slider_one_url')); ?>"><?php echo esc_html(get_theme_mod('slider_title_one')); ?></a></h2>
                                <p><?php echo esc_html(get_theme_mod('slider_one_description')); ?></p>
                             </div>
                         </div>
                    <?php } ?>
                    </li>
                    
                     <?php 
                     // load second slide
                     if ( get_theme_mod('slider_two') !='' ) {  ?>
                    <li id="slider2" class="home-slider"> 
                        <img href="<?php if ( get_theme_mod('slider_two_url') !='' ) { echo esc_url(get_theme_mod('slider_two_url')); } ?>" src="<?php echo get_theme_mod('slider_two'); ?>" alt=""/>
                       
                    <?php if ( get_theme_mod('slider_title_two') !='' || get_theme_mod('slider_two_url') !='' || get_theme_mod('slider_two_description') !='' ) {  ?>
                        <div class="flex-caption">
                            <div class="slider-text-container">
                            <h2 class="slider-title"><a href="<?php echo esc_url(get_theme_mod('slider_two_url')); ?>"><?php echo esc_html(get_theme_mod('slider_title_two')); ?></a></h2>
                            <p><?php echo esc_html(get_theme_mod('slider_two_description')); ?></p>
                            </div>
                         </div>
                    <?php } ?>
                    </li>
                     <?php } ?>
           <?php } ?>
        </ul>
    </div>
</div>

     <!-- Start business-tagline area -->
        <div class="business-tagline-area">
            <div class="business-tagline">
                <?php if ( get_theme_mod('tagline_title') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('tagline_title')); ?></h3>

                  <?php } else {  ?> <h3><?php esc_html_e('Premium WP Theme with 1-click installation and Live Customization.', 'prism') ?></h3>
                           <?php } ?>

                  <?php if ( get_theme_mod('tagline_description') !='' ) {  ?>
                  <p><?php echo esc_html(get_theme_mod('tagline_description')); ?></p>
                           <?php } else { ?>
                          <p><?php esc_html_e('Setting up your WP website with a brand new theme was never so easy.
                              With Prism, it takes only few clicks to load your content with Live Preview.
                              Change color schemes, add social icons, personalize the theme.', 'prism') ?> </p>
                                           <?php } ?>
            </div>
        </div><!-- end business tagline area -->
        <!-- Start home featured area -->
        
        <div class="home-featured-title-area" id="featured-title">
            <div class="home-featured-title">
                 <?php if ( get_theme_mod('home_title') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('home_title')); ?></h3>
                  <?php } else {  ?> <h3><?php esc_html_e('Theme Features', 'prism') ?></h3>
                           <?php } ?>
            </div>
        </div>
        <div class="home-featured-area">
            <div class="home-featured">
                <div class="home-featured-one grid_3_of_12 col">
                    <?php if ( get_theme_mod('home_featured_one') !='' ) {  ?>
                     <div class="featured-image"><img src="<?php echo get_theme_mod('home_featured_one'); ?>" /></div>
                    <?php } else {  ?>
                     <div class="featured-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img1.jpg" /></div>
                     <?php } ?>


                           <?php if ( get_theme_mod('home_title_one') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('home_title_one')); ?></h3>
                  <?php } else {  ?> <h3><?php esc_html_e('Responsive Design', 'prism') ?></h3>
                           <?php } ?>

                  <?php if ( get_theme_mod('home_description_one') !='' ) {  ?>
                  <p><?php echo esc_html(get_theme_mod('home_description_one')); ?></p>
                           <?php } else { ?>
                          <p><?php esc_html_e('Your site looks beautiful on all kind of devices and screen sizes. Mobile responsive navigation makes it easy to access the site on mobile devices.', 'prism') ?> </p>
                                           <?php } ?>
                          
                      <a class="read-more" href="<?php if ( get_theme_mod('home_one_link_url') !='' ) { echo esc_url(get_theme_mod('home_one_link_url')); } ?>">
                           <?php if ( get_theme_mod('home_one_link_text') !='' ) {  ?><?php echo esc_html(get_theme_mod('home_one_link_text')); ?>

                  <?php } else {  ?> <?php esc_html_e('Read More', 'prism') ?>
                           <?php } ?></a>
                </div>

                <div class="home-featured-two grid_3_of_12 col">
                    <?php if ( get_theme_mod('home_featured_two') !='' ) {  ?>
                     <div class="featured-image"><img src="<?php echo get_theme_mod('home_featured_two'); ?>" /></div>
                    <?php } else {  ?>
                     <div class="featured-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img2.jpg" /></div>
                     <?php } ?>


                           <?php if ( get_theme_mod('home_title_two') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('home_title_two')); ?></h3>
                  <?php } else {  ?> <h3><?php esc_html_e('1-Click Installation', 'prism') ?></h3>
                           <?php } ?>

                  <?php if ( get_theme_mod('home_description_two') !='' ) {  ?>
                  <p><?php echo esc_html(get_theme_mod('home_description_two')); ?></p>
                           <?php } else { ?>
                          <p><?php esc_html_e('Install, activate the theme and you are ready with a brand new website. It gets loaded with sample content that you can easily modify.', 'prism') ?> </p>
                                           <?php } ?>

                      <a class="read-more" href="<?php if ( get_theme_mod('home_two_link_url') !='' ) { echo esc_url(get_theme_mod('home_two_link_url')); } ?>">
                           <?php if ( get_theme_mod('home_two_link_text') !='' ) {  ?><?php echo esc_html(get_theme_mod('home_two_link_text')); ?>

                  <?php } else {  ?> <?php esc_html_e('Read More', 'prism') ?>
                           <?php } ?></a>
                </div>


                <div class="home-featured-three grid_3_of_12 col">
                    <?php if ( get_theme_mod('home_featured_three') !='' ) {  ?>
                     <div class="featured-image"><img src="<?php echo get_theme_mod('home_featured_three'); ?>" /></div>
                    <?php } else {  ?>
                     <div class="featured-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img3.jpg" /></div>
                     <?php } ?>


                           <?php if ( get_theme_mod('home_title_three') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('home_title_three')); ?></h3>
                  <?php } else {  ?> <h3><?php esc_html_e('Live Customization', 'prism') ?></h3>
                           <?php } ?>

                  <?php if ( get_theme_mod('home_description_three') !='' ) {  ?>
                  <p><?php echo esc_html(get_theme_mod('home_description_three')); ?></p>
                           <?php } else { ?>
                          <p><?php esc_html_e('Live preview your site as you add the content to various sections. Theme customizer allows you the flexibility and ease of use.', 'prism') ?> </p>
                                           <?php } ?>

                      <a class="read-more" href="<?php if ( get_theme_mod('home_three_link_url') !='' ) { echo esc_url(get_theme_mod('home_three_link_url')); } ?>">
                           <?php if ( get_theme_mod('home_three_link_text') !='' ) {  ?><?php echo esc_html(get_theme_mod('home_three_link_text')); ?>

                    <?php } else {  ?> <?php esc_html_e('Read More', 'prism') ?>
                           <?php } ?></a>
                </div>
                
                <div class="home-featured-four grid_3_of_12 col">
                    <?php if ( get_theme_mod('home_featured_four') !='' ) {  ?>
                     <div class="featured-image"><img src="<?php echo get_theme_mod('home_featured_four'); ?>" /></div>
                    <?php } else {  ?>
                     <div class="featured-image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/img4.jpg" /></div>
                     <?php } ?>


                           <?php if ( get_theme_mod('home_title_four') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('home_title_four')); ?></h3>
                  <?php } else {  ?> <h3><?php esc_html_e('Color Schemes', 'prism') ?></h3>
                           <?php } ?>

                  <?php if ( get_theme_mod('home_description_four') !='' ) {  ?>
                  <p><?php echo esc_html(get_theme_mod('home_description_four')); ?></p>
                           <?php } else { ?>
                          <p><?php esc_html_e('Multiple color schemes are pre-packaged to fit all your requirements. Upgrade to pro version for more exciting features. ', 'prism') ?> </p>
                                           <?php } ?>

                      <a class="read-more" href="<?php if ( get_theme_mod('home_four_link_url') !='' ) { echo esc_url(get_theme_mod('home_four_link_url')); } ?>">
                           <?php if ( get_theme_mod('home_four_link_text') !='' ) {  ?><?php echo esc_html(get_theme_mod('home_four_link_text')); ?>

                    <?php } else {  ?> <?php esc_html_e('Read More', 'prism') ?>
                           <?php } ?></a>
                </div>
            </div>
        </div><!-- end home featured area -->
        
        <?php  // Display featured posts on front page
            get_template_part('content', 'frontposts'); ?>
       
        
        <div class="home-cta-area">
                <div class="home-cta">
                    <div class="cta-wrapper">
                    <div class="home-cta-one grid_8_of_12 col">
                        <?php if ( get_theme_mod('cta_text') !='' ) {  ?>
                        <p><?php echo esc_html(get_theme_mod('cta_text')); ?></p>
                           <?php } else { ?>
                          <p><?php esc_html_e('Checkout the complete collection on our website.', 'prism') ?> </p>
                                           <?php } ?>
                    </div>
                    <div class="home-cta-two grid_4_of_12 col">
                        <a class="cta-button" href="<?php if ( get_theme_mod('home_cta_link_url') !='' ) { echo esc_url(get_theme_mod('home_cta_link_url')); } ?>">
                           <?php if ( get_theme_mod('home_cta_link_text') !='' ) {  ?><?php echo esc_html(get_theme_mod('home_cta_link_text')); ?>

                    <?php } else {  ?> <?php esc_html_e('Buy Now', 'prism') ?>
                           <?php } ?></a>
                    </div>
                  </div>
                </div>
            </div>
        
        <div class="client-feedback-area" id="feedback-title">
            <div class="client-feedback-title">
                 <?php if ( get_theme_mod('feedback_title') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('feedback_title')); ?></h3>
                  <?php } else {  ?> <h3><?php esc_html_e('Testimonials', 'prism') ?></h3>
                           <?php } ?>
            </div>
        </div>
        <!-- Home testimonial slider starts here --> 
        <div class="testimonial-slider">
            <div class="flexslider" id="reviewslider">
                <ul class="slides">
                    
                     <?php if ( get_theme_mod('tslider_one') =='' ) {  ?>
                        <li id="tslider1">
                        <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/img1.jpg" alt=""/>
                        <div class="flex-caption">
                          <p><?php esc_html_e('Showcase your multiple services and let users understand about your business.', 'prism') ?> </p>
                       </div>
                    </li>
                    
                    <li id="tslider2">
                        <img  src="<?php echo get_template_directory_uri(); ?>/assets/images/img2.jpg" alt=""/>
                        <div class="flex-caption">
                               <p><?php esc_html_e('Showcase your multiple services and let users understand about your business.', 'prism') ?> </p>                  
                         </div>
                    </li>
                   
                    <?php } ?>
                    
                      <?php if ( get_theme_mod('tslider_one') !='' ) {  ?>
                    <li id="tslider1">
                        <img  src="<?php echo get_theme_mod('tslider_one'); ?>" alt=""/>
                        <?php if ( get_theme_mod('tslider_one_description') !='' ) {  ?>
                        <div class="flex-caption">
                                <?php echo wpautop(esc_html(get_theme_mod('tslider_one_description'))); ?>
                         </div>
                         <?php } ?>
                    </li>
                    
                    <?php if ( get_theme_mod('tslider_two') !='' ) {  ?>
                    <li id="tslider2">
                        <img  src="<?php echo get_theme_mod('tslider_two'); ?>" alt=""/>
                     
                         <?php if ( get_theme_mod('tslider_two_description') !='' ) {  ?>
                        <div class="flex-caption">
                                <?php echo wpautop(esc_html(get_theme_mod('tslider_two_description'))); ?>
                         </div>
                            <?php } ?>
                    </li>
                     <?php } ?>
                <?php } ?>
               </ul>
            </div>
        </div>

       
        <div class="home-contact-area" id="contact-title">
            <div class="home-contact-title">
                 <?php if ( get_theme_mod('home_contact_title') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('home_contact_title')); ?></h3>
                  <?php } else {  ?> <h3><?php esc_html_e('Contact', 'prism') ?></h3>
                           <?php } ?>
            </div>
        </div>
        
        <!-- Start home Video area -->
        <div class="contact-detail-area">
            <div class="contact-detail-wrap">
                <div class="home-contact-form grid_6_of_12 col">
                     <?php if ( get_theme_mod('contact_form_title') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('contact_form_title')); ?></h3>
                  <?php } else {  ?> <h3><?php esc_html_e('Contact', 'prism') ?></h3>
                           <?php } ?>
                   <?php if ( get_theme_mod('prism_contact_form') !='' ) {  ?> 
                    <?php echo do_shortcode(get_theme_mod('prism_contact_form')); ?>
                   <?php } else { ?>
                   <?php 
                   echo esc_html_e('You can add a contact form here using your favorite plugin. Simply add the shortcode for the form from Theme Customizer and it will be displayed here.', 'prism'); ?> 
                     <?php } ?>
                </div>
                  

                <div class="home-video-two grid_6_of_12 col">
                    <div class="contact-details">
                         <?php if ( get_theme_mod('contact_title') !='' ) {  ?><h3><?php echo esc_html(get_theme_mod('contact_title')); ?></h3>

                            <?php } else {  ?> <h3><?php esc_html_e('Contact', 'prism') ?></h3>
                                     <?php } ?>

                            <?php if ( get_theme_mod('address_detail') !='' ) {  ?>
                            <p id="address"><?php echo esc_html(get_theme_mod('address_detail')); ?></p>
                                     <?php } else { ?>
                                    <p id="address"><?php esc_html_e('205, Gitanjali Mansion,
                                                          Above ICICI Bank, Sector 11
                                                          Udaipur, Rajasthan, India.', 'prism') ?> </p>
                                            <?php } ?>

                               <?php if ( get_theme_mod('contact_email') !='' ) {  ?><p id="email"><?php echo esc_html(get_theme_mod('contact_email')); ?>

                            <?php } else {  ?> <p id="email"><?php esc_html_e('hello@ideaboxcreations.com', 'prism') ?></p>
                                     <?php } ?>

                            <?php if ( get_theme_mod('contact_phone') !='' ) {  ?><p id="phone"><?php echo esc_html(get_theme_mod('contact_phone')); ?>

                            <?php } else {  ?> <p id="phone"><?php esc_html_e('0294-678456', 'prism') ?></p>
                                     <?php } ?>
                          
                    </div>
                    
                    <div class="contact-map">
                        
                        <?php if ( get_theme_mod('contact_map') !='' ) {  ?> 
                            <?php echo get_theme_mod('contact_map'); ?>
                               <?php } else { ?>
                                <img src="<?php echo get_template_directory_uri().'/assets/images/map.jpg'; ?>" alt="home-map-image"/>
                                 <?php } ?>
                       
                    </div>
                </div>
            </div>
         </div><!-- end home video area -->
    
         <span class="top"><a class="back-to-top"><i class="fa fa-arrow-up"></i></a></span>
            
  
<?php
get_footer();
?>