<?php
/**
 * Theme Header Section for our theme.
 *
 * @package gosarin.com
 * @subpackage MyWpTheme
 * @since MyWpTheme 0.0
 */
?><!DOCTYPE html>

<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head>
        <!-- Generic meta and utility tags -->
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <!-- Stylesheets -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libweb/components-font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libweb/bootstrap/dist/css/bootstrap.min.css" />
        <style>

            .dropdown-menu .dropdown-depth-1 {                
                padding-left: 0px;
            }
            .dropdown-menu .dropdown-depth-2 {                
                padding-left: 20px;
            }
            .dropdown-menu .dropdown-depth-3 {                
                padding-left: 40px;
            }.dropdown-menu .dropdown-depth-4 {
                padding-left: 60px;
            }

            #menu-my-social-menu li a::before {
                display: inline-block;
                padding: 0 22px 0 0;
                font-family: FontAwesome;
                font-size: 20px;
                vertical-align: baseline;
                content: "\f005";
                color: #ccc;
            }

            #menu-my-social-menu li a[href*="facebook.com"]::before {
                content: '\f09a';
                color: #3b5998;
            }
            #menu-my-social-menu li a[href*="twitter.com"]::before {
                content: '\f099';
                color: #00aced;
            }
            #menu-my-social-menu li a[href*="plus.google.com"]::before {
                content: '\f0d5';
                color: #dd4b39;
            }
            #menu-my-social-menu li a[href*="youtube.com"]::before {
                content: '\f167';
                color: #bb0000;
            }
            #menu-my-social-menu li a[href*="pinterest.com"]::before {
                content: '\f0d2';
                color: #cb2027;
            }
            #menu-my-social-menu li a[href*="instagram.com"]::before {
                content: '\f16d';
                color: #517fa4;
            }

            #menu-my-social-menu li a span {
                display: none;
            }



            header.jumbotron {
                /* jumbotron overwritten propertiees */
                border-radius: 0; 
                margin-bottom: 0px;
                /*padding-top: 138px; /* TODO: 64 jumbotron + 74 (computed navbar) */
                /* jumbotron addition properties */
                background-repeat: no-repeat;
                background-position: center center;
                background-size: auto auto;
                background-attachment: fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }

            header.jumbotron h1, header.jumbotron p.lead {
                text-shadow: 0 0 6px rgb(82, 86, 88); /* TODO: jumbotron text colour x 2 = rgb value */
            }

        </style>
        <!-- Wordpress autogenerated - HEAD hook -->
        <?php
        wp_head();
        ?>
    </head>

    <body <?php body_class(); ?> style="background-color: #f2f2f2;">
        <?php
        get_template_part('partial', 'header');
        ?>        
        <?php
        get_template_part('partial', 'navbar');
        ?>
        

