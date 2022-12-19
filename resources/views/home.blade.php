@extends('layouts.master')


@section('content')


    <!-- Start Slider Area -->
    <header class="slider slider-prlx">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="assets/img/slider-1.jpg" data-overlay-dark="7">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2 col-md-12">
                                    <div class="caption">
                                        <h4 class="custom-font">Foodies Welcome Here</h4>
                                        <h1>Fresh & Tasty Meals</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, magna aliqua. ipsum is simply dummy text of the printing.</p>
                                        <div class="banner-btn home-slider-btn">
                                            <a href="#0" class="default-btn-one">Check Our Menu <span></span></a>
                                            <a href="#0" class="default-btn">Book A Table <span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="assets/img/slider-2.jpg" data-overlay-dark="7">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2 col-md-12">
                                    <div class="caption">
                                        <h4 class="custom-font">Foodies Welcome Here</h4>
                                        <h1>Savor The Flavors</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, magna aliqua. ipsum is simply dummy text of the printing.</p>
                                        <div class="banner-btn home-slider-btn">
                                            <a href="#0" class="default-btn-one">Check Our Menu <span></span></a>
                                            <a href="#0" class="default-btn">Book A Table <span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider setting -->
            <div class="control-text">
                <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                    <span class="arrow prv"></span>
                </div>
                <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                    <span class="arrow nxt"></span>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </header>
    <!-- End Slider Area -->

    <!-- Start Features Section -->
    <section class="features-section pt-70 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-features-item">
                        <div class="features-icon">
                            <img src="assets/img/icons/features-icon-1.svg" alt="svg icon">
                        </div>
                        <h3>Premium Quality</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-features-item">
                        <div class="features-icon">
                            <img src="assets/img/icons/features-icon-2.svg" alt="svg icon">
                        </div>
                        <h3>100% ECO Ingredients</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-features-item">
                        <div class="features-icon">
                            <img src="assets/img/icons/features-icon-3.svg" alt="svg icon">
                        </div>
                        <h3>Wood Burned Grill</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt dolore magna aliqua</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Features Section -->

    <!-- Start About Section -->
    <section class="about-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-content">
                        <h6 class="sub-title">Explore Our Story</h6>
                        <h2>Nothing brings people together like good food</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, nostrud consectetur adipiscing elit.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, nostrud consectetur adipiscing elit. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="#" class="default-btn">Read Our Story <span></span></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-img">
                        <div class="about-img-1">
                            <img src="assets/img/about-1.jpg" alt="">
                        </div>
                        <div class="about-img-2">
                            <img src="assets/img/about-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- Start Menu Section -->
    <section class="menu-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h6 class="sub-title">Best Selections</h6>
                        <h2>Our Menu List</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="menu-filter-box">
                        <ul class="nav" id="menu-filter">
                            <li class="filter filter-active" data-filter=".all">All Items</li>
                            <li class="filter" data-filter=".lunch">Lunch</li>
                            <li class="filter" data-filter=".dinner">Dinner</li>
                            <li class="filter" data-filter=".drinks">Drinks</li>
                            <li class="filter" data-filter=".dessert">Dessert</li>
                        </ul>
                    </div>
                </div>
                <div class="menu-product-container">
                    <!-- Menu Grid Item -->
                    <div class="col-lg-6 col-md-12 menu-grid-item all">
                        <div class="menu-product-box">
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details">
                                        <a class="menu-product-title" href="#">Scallop shell pies</a>
                                        <p>Our passion for the excellent food</p>
                                    </div>
                                    <div class="menu-product-price"><span>$12.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details"><a class="menu-product-title" href="#">Brown shrimp Ranhofer</a>
                                        <p>Our passion for the excellent food</p>
                                    </div>
                                    <div class="menu-product-price"><span>$2.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details"><a class="menu-product-title" href="#">Moules marinière</a>
                                        <p>Our passion for the excellent food</p>
                                    </div>
                                    <div class="menu-product-price"><span>$6.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details"><a class="menu-product-title" href="#">Smoky salmon</a>
                                        <p>Our passion for the excellent food</p>
                                    </div>
                                    <div class="menu-product-price"><span>$2.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu Grid Item -->
                    <div class="col-lg-6 col-md-12 menu-grid-item all">
                        <div class="menu-product-box">
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details"><a class="menu-product-title" href="#">Garlic chilli clams</a>
                                        <p>Our passion for the excellent food</p>
                                    </div>
                                    <div class="menu-product-price"><span>$12.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details"><a class="menu-product-title" href="#">Sea bream ceviche</a>
                                        <p>Our passion for the excellent food</p>
                                    </div>
                                    <div class="menu-product-price"><span>$2.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details"><a class="menu-product-title" href="#">Seared tuna tataki</a>
                                        <p>Our passion for the excellent food</p>
                                    </div>
                                    <div class="menu-product-price"><span>$5.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details"><a class="menu-product-title" href="#">Green gazpacho</a>
                                        <p>Our passion for the excellent food</p>
                                    </div>
                                    <div class="menu-product-price"><span>$2.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu Grid Item -->
                    <div class="col-lg-6 col-md-12 menu-grid-item all lunch">
                        <div class="menu-product-box">
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details">
                                        <a class="menu-product-title" href="#">Lobster Bisque</a>
                                        <p>Our passion for the excellent food</p>
                                    </div>
                                    <div class="menu-product-price"><span>$12.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details"><a class="menu-product-title" href="#">Buffalo Wings or Tenders</a>
                                        <p>Our passion for the excellent food</p>
                                    </div>
                                    <div class="menu-product-price"><span>$2.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details"><a class="menu-product-title" href="#">Mozzarella Sticks</a>
                                        <p>Our passion for the excellent food</p>
                                    </div>
                                    <div class="menu-product-price"><span>$6.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details"><a class="menu-product-title" href="#">Grilled chicken</a>
                                        <p>Our passion for the excellent food</p>
                                    </div>
                                    <div class="menu-product-price"><span>$6.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu Grid Item -->
                    <div class="col-lg-6 col-md-12 menu-grid-item all lunch">
                        <div class="menu-product-box">
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details"><a class="menu-product-title" href="#">Onion Rings</a>
                                        <p>Our passion for the excellent food</p>
                                    </div>
                                    <div class="menu-product-price"><span>$12.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details"><a class="menu-product-title" href="#">Caesar Selections</a>
                                        <p>Our passion for the excellent food</p>
                                    </div>
                                    <div class="menu-product-price"><span>$2.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details"><a class="menu-product-title" href="#">Crab Cake Sandwich</a>
                                        <p>Our passion for the excellent food</p>
                                    </div>
                                    <div class="menu-product-price"><span>$5.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details"><a class="menu-product-title" href="#">Roast Turkey</a>
                                        <p>Our passion for the excellent food</p>
                                    </div>
                                    <div class="menu-product-price"><span>$5.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu Grid Item -->
                    <div class="col-lg-6 col-md-12 menu-grid-item dinner">
                        <div class="menu-product-box">
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details"><a class="menu-product-title" href="#">Plump lobster meat</a>
                                        <p>Our passion for the excellent food</p>
                                    </div>
                                    <div class="menu-product-price"><span>$12.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details"><a class="menu-product-title" href="#">Tuna salad</a>
                                        <p>Our passion for the excellent food</p>
                                    </div>
                                    <div class="menu-product-price"><span>$2.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details"><a class="menu-product-title" href="#">French onion soup</a>
                                        <p>Our passion for the excellent food</p>
                                    </div>
                                    <div class="menu-product-price"><span>$6.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu Grid Item -->
                    <div class="col-lg-6 col-md-12 menu-grid-item dinner">
                        <div class="menu-product-box">
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details"><a class="menu-product-title" href="#">Soup and Sandwich</a>
                                        <p>Our passion for the excellent food</p>
                                    </div>
                                    <div class="menu-product-price"><span>$12.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details"><a class="menu-product-title" href="#">Crisp romaine lettuce</a>
                                        <p>Our passion for the excellent food</p>
                                    </div>
                                    <div class="menu-product-price"><span>$2.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details"><a class="menu-product-title" href="#">savory crouton</a>
                                        <p>Our passion for the excellent food</p>
                                    </div>
                                    <div class="menu-product-price"><span>$5.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu Grid Item -->
                    <div class="col-lg-6 col-md-12 menu-grid-item drinks">
                        <div class="menu-product-box">
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details"><a class="menu-product-title" href="#">Coke, Coke Light and Tab</a>
                                        <p>Our passion for the excellent food</p>
                                    </div>
                                    <div class="menu-product-price"><span>$10.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details"><a class="menu-product-title" href="#">Fanta</a>
                                        <p>Our passion for the excellent food</p>
                                    </div>
                                    <div class="menu-product-price"><span>$1.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details"><a class="menu-product-title" href="#">Lemonade</a>
                                        <p>Our passion for the excellent food</p>
                                    </div>
                                    <div class="menu-product-price"><span>$3.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu Grid Item -->
                    <div class="col-lg-6 col-md-12 menu-grid-item drinks">
                        <div class="menu-product-box">
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details"><a class="menu-product-title" href="#">Ginger ale</a>
                                        <p>Our passion for the excellent food</p>
                                    </div>
                                    <div class="menu-product-price"><span>$8.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details"><a class="menu-product-title" href="#">Dry Lemon Appletizer</a>
                                        <p>Our passion for the excellent food</p>
                                    </div>
                                    <div class="menu-product-price"><span>$7.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details"><a class="menu-product-title" href="#">Fresh Citrus</a>
                                        <p>Our passion for the excellent food</p>
                                    </div>
                                    <div class="menu-product-price"><span>$7.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu Grid Item -->
                    <div class="col-lg-6 col-md-12 menu-grid-item dessert">
                        <div class="menu-product-box">
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details"><a class="menu-product-title" href="#">Mixed berry mousse</a>
                                        <p>Our passion for the excellent food</p>
                                    </div>
                                    <div class="menu-product-price"><span>$12.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details"><a class="menu-product-title" href="#">Mango and coconut</a>
                                        <p>Our passion for the excellent food</p>
                                    </div>
                                    <div class="menu-product-price"><span>$2.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details"><a class="menu-product-title" href="#">Homemade carrot cake</a>
                                        <p>Our passion for the excellent food</p>
                                    </div>
                                    <div class="menu-product-price"><span>$6.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Menu Grid Item -->
                    <div class="col-lg-6 col-md-12 menu-grid-item dessert">
                        <div class="menu-product-box">
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details"><a class="menu-product-title" href="#">Sponge Cake</a>
                                        <p>Our passion for the excellent food</p>
                                    </div>
                                    <div class="menu-product-price"><span>$12.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details"><a class="menu-product-title" href="#">Full Month Cakes</a>
                                        <p>Our passion for the excellent food</p>
                                    </div>
                                    <div class="menu-product-price"><span>$2.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details"><a class="menu-product-title" href="#">Sliced Cake</a>
                                        <p>Our passion for the excellent food</p>
                                    </div>
                                    <div class="menu-product-price"><span>$5.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Menu Section -->

    <!-- Start Video Opening Hours Section -->
    <section class="video-opening-hours-area">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-md-4">
                    <div class="video-box">
                        <a href="https://www.youtube.com/watch?v=xg7iNd0qkDM" class="video-btn popup-video">
                            <img src="assets/img/play-button-light.svg" alt="play button icon">
                        </a>
                        <h3>Best Place Of Brulee</h3>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-8">
                    <div class="store-location-opening-hours-box">
                        <div class="contact-opening-hours-title">
                            <h3>Make Call For Reservations</h3>
                            <h2>Contact Info & Opening Hours</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="single-store-location">
                                    <h3>Store at USA</h3>
                                    <p>Email: <a href="mailto:random@exmaple.com">demo@exmaple.com</a></p>
                                    <p>Phone: <a href="tel:0802235678">+080 707 555-321</a></p>
                                    <p>526 Melrose Street, 11976 New York</p>
                                </div>
                                <div class="opening-hours-box">
                                    <h3 class="day">Monday to Saturday</h3>
                                    <span class="time">9:00 AM - 10:00 PM</span>
                                    <p>Closed Sundays</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Video Opening Hours Section -->

    <!-- Start Offer Section -->
    <section class="offer-area section-padding">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="offer-content">
                        <h6 class="sub-title">Special Offer</h6>
                        <h2>Fast and yummy - A taste you’ll remember</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, nostrud consectetur adipiscing elit.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, nostrud consectetur adipiscing elit. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="#" class="default-btn">Order Now <span></span></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="offer-img">
                        <img src="assets/img/offer.png" alt="">
                        <div class="discount-img">
                            <img src="assets/img/discount.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Offer Section -->

    <!-- Start Gallery Section -->
    <section id="gallery" class="gallery-area bg-dark section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="section-title">
                        <h6 class="sub-title">View Our Place</h6>
                        <h2>Brulee Gallery</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- gallery-single-item -->
                <div class="col-lg-4 col-md-6">
                    <a class="gallery-single-item popup-img" href="assets/img/gallery/gallery-1.jpg">
                        <img src="assets/img/gallery/gallery-1.jpg" alt="image">
                    </a>
                </div>
                <!-- gallery-single-item -->
                <div class="col-lg-4 col-md-6">
                    <a class="gallery-single-item popup-img" href="assets/img/gallery/gallery-2.jpg">
                        <img src="assets/img/gallery/gallery-2.jpg" alt="image">
                    </a>
                </div>
                <!-- gallery-single-item -->
                <div class="col-lg-4 col-md-6">
                    <a class="gallery-single-item popup-img" href="assets/img/gallery/gallery-3.jpg">
                        <img src="assets/img/gallery/gallery-3.jpg" alt="image">
                    </a>
                </div>
                <!-- gallery-single-item -->
                <div class="col-lg-4 col-md-6">
                    <a class="gallery-single-item popup-img" href="assets/img/gallery/gallery-4.jpg">
                        <img src="assets/img/gallery/gallery-4.jpg" alt="image">
                    </a>
                </div>
                <!-- gallery-single-item -->
                <div class="col-lg-4 col-md-6">
                    <a class="gallery-single-item popup-img" href="assets/img/gallery/gallery-5.jpg">
                        <img src="assets/img/gallery/gallery-5.jpg" alt="image">
                    </a>
                </div>
                <!-- gallery-single-item -->
                <div class="col-lg-4 col-md-6">
                    <a class="gallery-single-item popup-img" href="assets/img/gallery/gallery-6.jpg">
                        <img src="assets/img/gallery/gallery-6.jpg" alt="image">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery Section -->

    <!-- Start Team Section -->
    <section class="team-area pt-100 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h6 class="sub-title">Our Staff</h6>
                        <h2>Expert Chefs</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-team-box">
                        <div class="team-image">
                            <img src="assets/img/team/team-1.jpg" alt="team" />
                            <div class="team-social-icon">
                                <a href="#" class="social-color-1"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social-color-2"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="social-color-3"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="team-info">
                            <h3>Lewis Lucas</h3>
                            <span>Executive Head Chef</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-team-box">
                        <div class="team-image">
                            <img src="assets/img/team/team-2.jpg" alt="team" />
                            <div class="team-social-icon">
                                <a href="#" class="social-color-1"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social-color-2"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="social-color-3"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="team-info">
                            <h3>Arturo Fuller</h3>
                            <span>Executive Chef</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-team-box">
                        <div class="team-image">
                            <img src="assets/img/team/team-3.jpg" alt="team" />
                            <div class="team-social-icon">
                                <a href="#" class="social-color-1"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social-color-2"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="social-color-3"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="team-info">
                            <h3>Velma Cain</h3>
                            <span>Executive Chef</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-team-box">
                        <div class="team-image">
                            <img src="assets/img/team/team-4.jpg" alt="team" />
                            <div class="team-social-icon">
                                <a href="#" class="social-color-1"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social-color-2"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="social-color-3"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="team-info">
                            <h3>Marc Gibbs</h3>
                            <span>Executive Assistant Chef</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Section -->

    <!-- Start Testimonials Section -->
    <section class="testimonial-design-two section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h6 class="sub-title">Our Customer Say</h6>
                        <h2>Our Feedback</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="testimonial-slide-two">
                        <div class="owl-carousel owl-theme">
                            <!-- testimonials item -->
                            <div class="single-testimonial-two">
                                <div class="testimonial-two-content">
                                    <div class="testimonial-text">
                                        <div class="logo-box">
                                            <img src="assets/img/client/testimonial-logo-1.png" alt="logo">
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut laboredolore magna aliqua</p>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="author-info-box">
                                        <div class="author-img">
                                            <img src="assets/img/client/testimonial-1.jpg" alt="testimonial">
                                        </div>
                                        <div class="author-bio-info">
                                            <h3>Stanley Tate</h3>
                                            <span>Customer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- testimonials item -->
                            <div class="single-testimonial-two">
                                <div class="testimonial-two-content">
                                    <div class="testimonial-text">
                                        <div class="logo-box">
                                            <img src="assets/img/client/testimonial-logo-2.png" alt="logo">
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut laboredolore magna aliqua</p>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="author-info-box">
                                        <div class="author-img">
                                            <img src="assets/img/client/testimonial-2.jpg" alt="testimonial">
                                        </div>
                                        <div class="author-bio-info">
                                            <h3>Lana Shelton</h3>
                                            <span>Customer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- testimonials item -->
                            <div class="single-testimonial-two">
                                <div class="testimonial-two-content">
                                    <div class="testimonial-text">
                                        <div class="logo-box">
                                            <img src="assets/img/client/testimonial-logo-3.png" alt="logo">
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut laboredolore magna aliqua</p>
                                        <div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="author-info-box">
                                        <div class="author-img">
                                            <img src="assets/img/client/testimonial-3.jpg" alt="testimonial">
                                        </div>
                                        <div class="author-bio-info">
                                            <h3>Mario Houston</h3>
                                            <span>Customer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- Start Reservation Section -->
    <section class="reservation-section booking">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h6 class="sub-title">Book A Table</h6>
                        <h2>Make a Reservation</h2>
                    </div>
                </div>
            </div>
            <form id="reservation-form" class="form">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <select class="wide">
                                <option value="0">Party Size</option>
                                <option value="1">1 Person</option>
                                <option value="2">2 Person</option>
                                <option value="3">3 Person</option>
                                <option value="4">4 Person</option>
                                <option value="5">5 Person</option>
                                <option value="6">6 Person</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <select class="wide">
                                <option value="0">Time</option>
                                <option value="1">04.00 pm</option>
                                <option value="2">04.30 pm</option>
                                <option value="3">05.00 pm</option>
                                <option value="4">05.30 pm</option>
                                <option value="5">06.00 pm</option>
                                <option value="6">06.30 pm</option>
                                <option value="7">07.00 pm</option>
                                <option value="8">07.30 pm</option>
                                <option value="9">08.00 pm</option>
                                <option value="10">08.30 pm</option>
                                <option value="11">09.00 pm</option>
                                <option value="12">09.30 pm</option>
                                <option value="13">10.00 pm</option>
                                <option value="14">10.30 pm</option>
                                <option value="15">11.00 pm</option>
                                <option value="16">11.30 pm</option>
                                <option value="17">12.00 pm</option>
                                <option value="18">12.30 am</option>
                                <option value="19">01.00 am</option>
                                <option value="20">01.30 am</option>
                                <option value="21">02.00 am</option>
                                <option value="22">02.30 am</option>
                                <option value="23">03.00 am</option>
                                <option value="24">03.30 am</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <input type="text" id="datepicker" class="reservation-date" placeholder="Booking Date">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <a href="#0" class="default-btn">Book A Table <span></span></a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- End Reservation Section -->

    <!-- Start Blog Section -->
    <section class="blog-section pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>Blog & Article</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-single-item">
                        <div class="blog-image">
                            <a href="single-blog.html">
                                <img src="assets/img/blog/blog-1.jpg" alt="image">
                            </a>
                        </div>
                        <div class="blog-description">
                            <ul class="blog-list">
                                <li>
                                    <a href="#"> <i class="fa fa-user-alt"></i> Author</a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fas fa-calendar-week"></i>17 June 2022</a>
                                </li>
                            </ul>
                            <div class="blog-content">
                                <h3>
                                    <a href="single-blog.html">
                                        Why Meat Quality Matters When Picking Your Turkey
                                    </a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt</p>
                                <div class="blog-btn">
                                    <a href="single-blog.html" class="default-btn blog-btn-one">Continue Reading <span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-single-item">
                        <div class="blog-image">
                            <a href="single-blog.html">
                                <img src="assets/img/blog/blog-2.jpg" alt="image">
                            </a>
                        </div>
                        <div class="blog-description">
                            <ul class="blog-list">
                                <li>
                                    <a href="#"> <i class="fa fa-user-alt"></i> Author</a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fas fa-calendar-week"></i>17 June 2022</a>
                                </li>
                            </ul>
                            <div class="blog-content">
                                <h3>
                                    <a href="single-blog.html">
                                        Unforgettable Chicken recipes to Serve to Your Guests
                                    </a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt</p>
                                <div class="blog-btn">
                                    <a href="single-blog.html" class="default-btn blog-btn-one">Continue Reading <span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-single-item">
                        <div class="blog-image">
                            <a href="single-blog.html">
                                <img src="assets/img/blog/blog-3.jpg" alt="image">
                            </a>
                        </div>
                        <div class="blog-description">
                            <ul class="blog-list">
                                <li>
                                    <a href="#"> <i class="fa fa-user-alt"></i> Author</a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fas fa-calendar-week"></i>17 June 2022</a>
                                </li>
                            </ul>
                            <div class="blog-content">
                                <h3>
                                    <a href="single-blog.html">
                                        3 Slow Cooker Meal Recipes for Those Busy Mornings
                                    </a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt</p>
                                <div class="blog-btn">
                                    <a href="single-blog.html" class="default-btn blog-btn-one">Continue Reading <span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Section -->

    <!-- Start Partner Logo Section -->
    <div class="partner-area bg-grey">
        <div class="container">
            <div class="section-title">
                <h2>Trusted Partners</h2>
            </div>
            <div id="partner-carousel" class="partner-carousel owl-carousel owl-theme owl-loaded">
                <div class="partner-slide-item">
                    <a href="#0">
                        <img src="assets/img/partner-logo/client-1.jpg" alt="partner-image">
                    </a>
                </div>
                <div class="partner-slide-item">
                    <a href="#0">
                        <img src="assets/img/partner-logo/client-2.jpg" alt="partner-image">
                    </a>
                </div>
                <div class="partner-slide-item">
                    <a href="#0">
                        <img src="assets/img/partner-logo/client-3.jpg" alt="partner-image">
                    </a>
                </div>
                <div class="partner-slide-item">
                    <a href="#0">
                        <img src="assets/img/partner-logo/client-4.jpg" alt="partner-image">
                    </a>
                </div>
                <div class="partner-slide-item">
                    <a href="#0">
                        <img src="assets/img/partner-logo/client-5.jpg" alt="partner-image">
                    </a>
                </div>
                <div class="partner-slide-item">
                    <a href="#0">
                        <img src="assets/img/partner-logo/client-6.jpg" alt="partner-image">
                    </a>
                </div>
                <div class="partner-slide-item">
                    <a href="#0">
                        <img src="assets/img/partner-logo/client-7.jpg" alt="partner-image">
                    </a>
                </div>
                <div class="partner-slide-item">
                    <a href="#0">
                        <img src="assets/img/partner-logo/client-8.jpg" alt="partner-image">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Partner Logo Section -->

    <!-- Start Footer Section -->
    <section class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-box-item">
                    <div class="footer-about footer-list">
                        <a class="footer-logo" href="#">
                            <img src="assets/img/logo.png" class="white-logo" alt="logo">
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore et dolore magna aliqua</p>
                        <ul class="footer-social-icon">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 footer-box-item">
                    <div class="footer-list">
                        <h5 class="title">Contact Info</h5>
                        <div class="footer-contact-info">
                            <ul class="footer-contact-list">
                                <li><i class="fa fa-location-dot"></i> 770 East Linden Street New York</li>
                                <li><i class="fa fa-mobile-screen-button"></i> <a href="tel:101202303">+707 355-633-755</a></li>
                                <li><i class="fa fa-envelope"></i> <a href="mailto:random@example.com">contact-info@example.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 footer-box-item">
                    <div class="footer-list">
                        <h5 class="title">Opening Time</h5>
                        <ul class="footer-opening-time-list">
                            <li>Week days <span>09:00 – 22:00</span></li>
                            <li>Saturday <span>08:00 – 08:00</span></li>
                            <li>Sunday <span>Day Off</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 footer-box-item">
                    <div class="footer-list">
                        <h5 class="title">Subscribe Newsletter</h5>
                        <div class="footer-info-newsletter">
                            <form class="newsletter-form">
                                <input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL" required="" autocomplete="off">
                                <button class="default-btn" type="submit">Subscribe Now <span></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Footer Section -->

    <!-- Start Footer Copyright Section -->
    <div class="copyright-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <p>© 2022 - All Rights Reserved - Designed by <span class="author-name">Barakah Themes</span></p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <ul>
                        <li> <a href="terms-condition.html">Terms & Conditions</a></li>
                        <li> <a href="privacy-policy.html">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Copyright Section -->

    <!-- Start Go Top Section -->
    <div class="go-top">
        <i class="fas fa-chevron-up"></i>
        <i class="fas fa-chevron-up"></i>
    </div>
    <!-- End Go Top Section -->


@endsection



