<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="headercontainer">
 *
 * @package Prism
 * @since Prism 1.0
 */
?>
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <!DOCTYPE html>
    <!--[if IE 7]>
    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>>
    <![endif]-->
    <!--[if IE 8]>
    <html class="no-js lt-ie9" <?php language_attributes(); ?>>
    <![endif]-->
    <!--[if !(IE 7) | !(IE 8)  ]><!-->
    <html <?php language_attributes(); ?>>
        <!--<![endif]-->
        <head>
            <meta charset="<?php bloginfo('charset'); ?>" />
            <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

            <title><?php wp_title('|', true, 'right'); ?></title>
            <meta http-equiv="cleartype" content="on">

            <!-- Responsive and mobile friendly stuff -->
            <meta name="HandheldFriendly" content="True">
            <meta name="MobileOptimized" content="320">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <link rel="profile" href="http://gmpg.org/xfn/11" />
            <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


            <?php wp_head(); ?>
        </head>

        <body <?php body_class(); ?>>

            <div id="wrapper" class="hfeed site">

                <div class="visuallyhidden skip-link"><a href="#primary" title="<?php esc_attr_e('Skip to main content', 'prism'); ?>"><?php esc_html_e('Skip to main content', 'prism'); ?></a></div>
                <div class="social-wrapper">
                    <div class="header-contact clearfix">
                        <div class="col grid_6_of_12">
                            <?php if (get_theme_mod('header_contact') != '') { ?>
                                <p><?php echo esc_html(get_theme_mod('header_contact')); ?></p>
                            <?php } else { ?>
                                <p><?php esc_html_e('Call us 24x7: 800-555-0101', 'prism') ?> </p>
                            <?php } ?>
                        </div>
                        <div class="col grid_6_of_12 social-icons-container last"> 
                            <div class="social-links clearfix">
                                <ul id="header-social-links" class="clearfix">
                                    <?php if (get_theme_mod('facebook_link_url')) { ?>
                                        <li class="prism-fb"><a href="<?php echo esc_url(get_theme_mod('facebook_link_url')); ?>"></a></li>
                                    <?php } ?>
                                    <?php if (get_theme_mod('twitter_link_url')) { ?>
                                        <li class="prism-twitter"><a href="<?php echo esc_url(get_theme_mod('twitter_link_url')); ?>"></a></li>
                                    <?php } ?>
                                    <?php if (get_theme_mod('googleplus_link_url')) { ?>
                                        <li class="prism-gplus"><a href="<?php echo esc_url(get_theme_mod('googleplus_link_url')); ?>"></a></li>
                                    <?php } ?>
                                    <?php if (get_theme_mod('pinterest_link_url')) { ?>
                                        <li class="prism-pinterest"><a href="<?php echo esc_url(get_theme_mod('pinterest_link_url')); ?>"></a></li>
                                    <?php } ?>
                                    <?php if (get_theme_mod('github_link_url')) { ?>
                                        <li class="prism-github"><a href="<?php echo esc_url(get_theme_mod('github_link_url')); ?>"></a></li>
                                    <?php } ?>
                                    <?php if (get_theme_mod('youtube_link_url')) { ?>
                                        <li class="prism-youtube"><a href="<?php echo esc_url(get_theme_mod('youtube_link_url')); ?>"></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div><!-- /.header-extras -->
                    </div>
                </div>
                <div id="headercontainer" class="fxd">

                    <header id="masthead" class="site-header row" role="banner">
                        <div class="col grid_4_of_12 header-title">
                            <h1 class="site-title">
                                <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>" rel="home">
                                    <?php echo get_bloginfo('name'); ?>	
                                </a>
                            </h1>
                            <p class="site-description"> 
                                <?php echo get_bloginfo('description'); ?>
                            </p>

                            <?php if (get_header_image()) : ?>
                                <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php header_image(); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
                            <?php endif; ?>
                        </div> <!-- /.col.grid_6_of_12 -->

                        <div class="col grid_8_of_12 header-extras last"> 
                            <nav id="site-navigation" class="main-navigation" role="navigation">
                                 <?php if(is_front_page() && get_theme_mod('prism_one_page_nav_check')) {
                                  ?>
                              <div id="pattern" class="pattern menu">
                <a href="#menu" class="menu-link hamburgerIcon"><span></span><h2>Menu</h2></a>
            <?php wp_nav_menu( array( 
                    'theme_location' => 'main_menu', /*registered in functions.php*/
                    'container'       => 'nav', 
                    'menu_class'      => 'nav', 
                    'fallback_cb'   => 'false', /*if no menu assigned, do nothing*/
                    'container_id'  => 'menu',
             ) ); ?>
        </div>




                                    
                                <?php  }
                                 else {
                                     
                                     wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'primary-menu', 'container_class' => 'menu')); 
                                
                                     
                                 } ?>
                                
                                <div id="mobile-menu"></div>
                            </nav> <!-- /.site-navigation.main-navigation -->
                        </div><!-- /.header-extras -->
                    </header> <!-- /#masthead.site-header.row -->


                </div> <!-- /#headercontainer -->