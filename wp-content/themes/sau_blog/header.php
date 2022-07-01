<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Print</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!--awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
          integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/fonts/line-awesome-1.3.0/1.3.0/css/line-awesome.min.css">
    <!--Owl carosel assets-->
    <!-- <link rel="stylesheet" href="./js/Powerful-Customizable-jQuery-Carousel-Slider-OWL-Carousel/Powerful-Customizable-jQuery-Carousel-Slider-OWL-Carousel/owl-carousel/owl.carousel.css"> -->
    <link rel="stylesheet"
          href="<?php bloginfo('template_url'); ?>/assets/js/Powerful-Customizable-jQuery-Carousel-Slider-OWL-Carousel/Powerful-Customizable-jQuery-Carousel-Slider-OWL-Carousel/owl-carousel/owl.theme.css">
    <link rel="stylesheet"
          href="<?php bloginfo('template_url'); ?>/assets/js/Powerful-Customizable-jQuery-Carousel-Slider-OWL-Carousel/Powerful-Customizable-jQuery-Carousel-Slider-OWL-Carousel/assets/js/google-code-prettify/prettify.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/owl.theme.default.min.css">

    <!--fonts-->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
    <link rel='stylesheet' type='text/css' media='screen' href='<?php bloginfo('template_url'); ?>/assets/scss/print.css'>
</head>
<body <?php body_class(); ?>>
<div class="filler"></div>
<div class="contact">
    <div class="container">
        <div class="d-flex justify-content-between algin-item-center">
            <p class="contact-phone"><span>Call Us</span> +(581) 765-2289</p>
            <p class="contact-text">FREE SHIPPING ALL OVER $200 🚀</p>
            <div class="nav contact-listIcon">
                <a href="#"><i class="lab la-facebook-f icon"></i></a>
                <a href="#"><i class="lab la-instagram icon"></i></a>
                <a href="#"><i class="lab la-twitter icon"></i></a>
                <a href="#"><i class="lab la-pinterest-p icon"></i></a>
            </div>
        </div>
    </div>
</div>
<!--end contact-->
<div class="">
    <div class="header">
        <!--menu mobile-->
        <div class="header__mobile hide-menu">
            <div class="header__mobile-top">
                <div class="m-head-top">
                    <div class="m-head-top-left">
                        <button><i class="lar la-heart"></i></button>
                        <button><i class="las la-user"></i></button>
                    </div>
                    <button class="button close"><i class="las la-times"></i></button>
                </div>
                <div class="m-menu k">
                    <ul class="m-menu-ul">
                        <li class="m-menu-1">
                            <a href="#">Home</a>
                            <button class="button m-icon"><i class="las la-angle-down"></i></button>
                            <ul class="m-menu-2">
                                <li><a href="#">home 1</a></li>
                                <li><a href="#">home 1</a></li>
                                <li><a href="#">home 1</a></li>
                                <li><a href="#">home 1</a></li>
                            </ul>
                        </li>
                        <li class="m-menu-1">
                            <a href="#">About</a>
                        </li>
                        <li class="m-menu-1">
                            <a href="#">shop</a>
                            <button class="button m-icon"><i class="las la-angle-down"></i></button>
                            <ul class="m-menu-2">
                                <li><a href="#">home 1</a></li>
                                <li><a href="#">home 1</a></li>
                                <li><a href="#">home 1</a></li>
                                <li><a href="#">home 1</a></li>
                            </ul>
                        </li>
                        <li class="m-menu-1">
                            <a href="#">blogs</a>
                            <button class="button m-icon"><i class="las la-angle-down"></i></button>
                            <ul class="m-menu-2">
                                <li><a href="#">home 1</a></li>
                                <li><a href="#">home 1</a></li>
                                <li><a href="#">home 1</a></li>
                                <li><a href="#">home 1</a></li>
                            </ul>
                        </li>
                        <li class="m-menu-1">
                            <a href="#">pages</a>
                            <button class="button m-icon"><i class="las la-angle-down"></i></button>
                            <ul class="m-menu-2">
                                <li><a href="#">home 1</a></li>
                                <li><a href="#">home 1</a></li>
                                <li><a href="#">home 1</a></li>
                                <li><a href="#">home 1</a></li>
                            </ul>
                        </li>
                        <li class="m-menu-1">
                            <a href="#">contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="header__mobile-bottom">
                <div class="d-flex footer-column-icon">
                    <a href="#"><i class="fab fa-facebook-f icon"></i></a>
                    <a href="#"><i class="fab fa-instagram icon"></i></a>
                    <a href="#"><i class="fab fa-twitter icon"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p icon"></i></a>
                </div>
            </div>
        </div>
        <!--end menu mobile-->
        <div class=" header__nav">
            <div class="container">
                <div class="d-flex align-items-center">
                    <div class="header__nav-bar-icon">
                        <i class="las la-bars"></i>
                    </div>
                    <div class="header__nav-logo">
                        <a href="#">Wooler</a>
                    </div>
                    <div class="header__nav-menu">
                        <ul class="nav menu-nav">
                            <li class="menu-1"><a href="#">Home<i class="las la-angle-down"></i></a>
                                <ul class="menu-2">
                                    <li><a href="">Home shoe</a></li>
                                    <li><a href="">Home clothing</a></li>
                                    <li><a href="">Home fashion</a></li>
                                    <li><a href="">Home 4</a></li>
                                </ul>
                            </li>
                            <li><a href="#">about</a></li>
                            <li class="menu-1"><a href="#">shop<i class="las la-angle-down"></i></a>
                                <ul class="menu-2">
                                    <li><a href="">Home shoe</a></li>
                                    <li><a href="">Home clothing</a></li>
                                    <li><a href="">Home fashion</a></li>
                                    <li><a href="">Home 4</a></li>
                                </ul>
                            </li>
                            <li class="menu-1"><a href="#">blog<i class="las la-angle-down"></i></a>
                                <ul class="menu-2">
                                    <li><a href="">Home shoe</a></li>
                                    <li><a href="">Home clothing</a></li>
                                    <li><a href="">Home fashion</a></li>
                                    <li><a href="">Home 4</a></li>
                                </ul>
                            </li>
                            <li class="menu-1"><a href="#">pages<i class="las la-angle-down"></i></a>
                                <ul class="menu-2">
                                    <li><a href="">Home shoe</a></li>
                                    <li><a href="">Home clothing</a></li>
                                    <li><a href="">Home fashion</a></li>
                                    <li><a href="">Home 4</a></li>
                                </ul>
                            </li>
                            <li><a href="#">contact</a></li>
                        </ul>
                    </div>
                    <div class="header__nav-icon">
                        <button><i class="las la-search"></i></button>
                        <button><i class="lar la-heart"></i></button>
                        <button><i class="las la-user"></i></button>
                        <button><i class="las la-shopping-bag"></i>
                            <span class="amout-bag">1</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!--end header-nav-->

        <div class="header__banner">
            <div class="container header__banner-text">
                <heading>We love printing photos <span>on canvas</span></heading>
                <button class="button">Explore now</button>
            </div>
        </div>
    </div>
</div>