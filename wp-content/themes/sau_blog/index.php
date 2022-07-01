<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

    <div class="content">
        <div class="container">
            <div class="content__1">
                <div class="article">
                    <p>Make it your own</p>
                    <p>Anybody can create beautiful prints with our intuitive builders.</p>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-12 row-info">
                        <button><i class="lar la-image"></i></button>
                        <a href="#">01. Choose an image</a>
                        <p>Any image, any size or resolution. Upload from your computer from <strong>Instagram</strong> or <strong>Facebook</strong>.
                        </p>
                    </div>
                    <div class="col-md-4 col-sm-4 col-12 row-info">
                        <button><i class="las la-crop-alt"></i></button>
                        <a href="#">02. Customize</a>
                        <p>Choose the perfect <strong>size</strong>, framing options and even add one of our amazing photo filters and <strong>effects</strong> to make your image really pop!</p>
                    </div>
                    <div class="col-md-4 col-sm-4 col-12 row-info">
                        <button><i class="las la-shipping-fast"></i></button>
                        <a href="#">03. Shipping</a>
                        <p>Your canvas print is lovingly printed, hand-stretched and carefully packed and delivered to you in a few days.</p>
                    </div>
                </div>
            </div>
            <!--end 1-->
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="content__2">
                <div class="article">
                    <p>Our products</p>
                    <p>We offer more than just Canvas Prints</p>
                </div>
                <div class=" slider">
                    <button class=" btn-slider btn-pre"><i class="las la-angle-left icon-pre"></i></button>
                    <button class=" btn-slider btn-next"><i class="las la-angle-right icon-next"></i></button>
                    <div id="slide-show" class=" owl-carousel slide-show carousel-s">
                        <div class=" item content__2-list-item">
                            <a class="r2-img" href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/1.png"></a>
                            <a class="r2-link" href="#">Minimalscape Print</a>
                            <div class="r2-price">
                                <p></p>
                                <p class="">$12</p>
                            </div>
                        </div>
                        <div class=" item content__2-list-item ">
                            <a class="r2-img" href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/2.png"></a>
                            <a class="r2-link" href="#">Minimalscape Print</a>
                            <div class="r2-price">
                                <p></p>
                                <p class="">$12</p>
                            </div>
                        </div>
                        <div class=" item content__2-list-item ">
                            <a class="r2-img" href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/3.png"></a>
                            <a class="r2-link" href="#">Minimalscape Print</a>
                            <div class="r2-price">
                                <p>$20</p>
                                <p class="">$12</p>
                            </div>
                        </div>
                        <div class=" item content__2-list-item ">
                            <a class="r2-img" href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/4.png"></a>
                            <a class="r2-link" href="#">Minimalscape Print</a>
                            <div class="r2-price">
                                <p>$17</p>
                                <p class="">$12</p>
                            </div>
                        </div>
                        <div class=" item content__2-list-item ">
                            <a class="r2-img" href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/3.png"></a>
                            <a class="r2-link" href="#">Minimalscape Print</a>
                            <div class="r2-price">
                                <p></p>
                                <p class="">$12</p>
                            </div>
                        </div>
                        <div class=" item content__2-list-item last">
                            <a class="r2-img" href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/2.png"></a>
                            <a class="r2-link" href="#">Minimalscape Print</a>
                            <div class="r2-price">
                                <p>$15</p>
                                <p class="">$12</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end 2-->
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="content__3">
                <div class="article">
                    <p>Choose a category</p>
                    <p>We offer more than just Canvas Prints</p>
                </div>
                <div class="content__3-list">
                    <div class="content__3-list-item">
                        <a href="#">
                            <img class="r3-img" src="<?php bloginfo('template_url'); ?>/assets/images/category1.jpg" title="xem chi tiết">
                        </a>
                        <a class="r3-link" href="#">photo collage</a>
                        <p class="r3-text">
                            A beautiful way to display your photo memories
                        </p>
                    </div>
                    <!--end 1 item-->
                    <div class="content__3-list-item">
                        <a href="#">
                            <img class="r3-img" src="<?php bloginfo('template_url'); ?>/assets/images/category2.jpg" title="xem chi tiết">
                        </a>
                        <a class="r3-link" href="#">framed print</a>
                        <p class="r3-text">
                            Have your photos printed on artist-quality, fine art paper
                            and expertly fitted with a gorgeous wood frame
                        </p>
                    </div>
                    <!--end 1 item-->
                    <div class="content__3-list-item">
                        <a href="#">
                            <img class="r3-img" src="<?php bloginfo('template_url'); ?>/assets/images/category3.jpg" title="xem chi tiết">
                        </a>
                        <a class="r3-link" href="#">canvas print</a>
                        <p class="r3-text">
                            Preserve your photo memories on the highest quality
                            canvas available
                        </p>
                    </div>
                    <!--end 1 item-->
                    <div class="content__3-list-item">
                        <a href="#">
                            <img class="r3-img" src="<?php bloginfo('template_url'); ?>/assets/images/category4.jpg" title="xem chi tiết">
                        </a>
                        <a class="r3-link" href="#">pet portraits</a>
                        <p class="r3-text">
                            Creat a custom portrait that perfectly captures your pet
                            and their personality
                        </p>
                    </div>
                    <!--end 1 item-->
                </div>
            </div>
            <!--end 3-->
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="content__4">
                <div class="article">
                    <p>Made with love</p>
                    <p>That’s right, we love what we do and we take pride in making the best canvas and framed prints in the world.</p>
                </div>
                <button class="button-2">Creat your own</button>
            </div>
            <!--end 2-->
        </div>
    </div>
    <!--end phần content-->

<?php
get_footer();
