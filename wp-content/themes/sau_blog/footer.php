<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>


<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 footer-column col-12 footer__col">
                <article>Categories</article>
                <a href="#">Skateboard Completed</a>
                <a href="#">Skateboard Desks</a>
                <a href="#">Skateboard Wheels</a>
                <a href="#">Accessories</a>
                <a href="#">T-Shirts</a>
            </div>
            <div class="col-md-3 col-sm-6 col-12 footer-column footer__col">
                <article>ABOUT US</article>
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Contact</a>
                <a href="#">FAQs</a>
                <a href="#">Privacy & Policy</a>
                <a href="#">Terms & Conditions</a>
            </div>
            <div class="col-md-3 col-sm-6 col-12 footer-column footer__col">
                <article>CONTACT</article>
                <p href="#"><b>Address:</b> 249 Cherry St.
                    Arlington Heights, IL 60004, United States of America</p>
                <p href="#"><b>Phone:</b> +(581) 765-2289; </p>
                <p href="#"><b>Hours:</b> All Week from 9 a.m to 9 p.m</p>
                <p href="#"><b>Email:</b> wow.perfect@gmail.com</p>
            </div>
            <div class="col-md-3 col-sm-6 col-12 footer-column footer__col">
                <article>NEWSLETER</article>
                <p>Sign up for our e-mail and be the first who know our special offers!</p>
                <div class="footer-column-input">
                    <input type="email" placeholder="Your email">
                    <i class="las la-paper-plane icon-send"></i>
                </div>
                <div class="d-flex footer-column-icon">
                    <a href="#"><i class="fab fa-facebook-f icon"></i></a>
                    <a href="#"><i class="fab fa-instagram icon"></i></a>
                    <a href="#"><i class="fab fa-twitter icon"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p icon"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-end">
    <p><i class="far fa-copyright"></i>Wow 2020. All Rights Reserved</p>
</div>


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/Powerful-Customizable-jQuery-Carousel-Slider-OWL-Carousel/Powerful-Customizable-jQuery-Carousel-Slider-OWL-Carousel/owl-carousel/owl.carousel.js"></script> -->

<script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/owl.carousel.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/owl.carousel.min.js"></script>

<!--bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/print.js"></script>
</body>
</html>
