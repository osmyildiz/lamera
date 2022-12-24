@extends('layouts.master')


@section('content')


    <!-- Start Slider Area -->
    <header class="slider slider-prlx">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="assets1/img/slider-1.jpg" data-overlay-dark="7">
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
                    <div class="bg-img valign" data-background="assets1/img/slider-2.jpg" data-overlay-dark="7">
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
                    <a class="gallery-single-item popup-img" href="assets1/img/gallery/gallery-1.jpg">
                        <img src="assets1/img/gallery/gallery-1.jpg" alt="image">
                    </a>
                </div>
                <!-- gallery-single-item -->
                <div class="col-lg-4 col-md-6">
                    <a class="gallery-single-item popup-img" href="assets1/img/gallery/gallery-2.jpg">
                        <img src="assets1/img/gallery/gallery-2.jpg" alt="image">
                    </a>
                </div>
                <!-- gallery-single-item -->
                <div class="col-lg-4 col-md-6">
                    <a class="gallery-single-item popup-img" href="assets1/img/gallery/gallery-3.jpg">
                        <img src="assets1/img/gallery/gallery-3.jpg" alt="image">
                    </a>
                </div>
                <!-- gallery-single-item -->
                <div class="col-lg-4 col-md-6">
                    <a class="gallery-single-item popup-img" href="assets1/img/gallery/gallery-4.jpg">
                        <img src="assets1/img/gallery/gallery-4.jpg" alt="image">
                    </a>
                </div>
                <!-- gallery-single-item -->
                <div class="col-lg-4 col-md-6">
                    <a class="gallery-single-item popup-img" href="assets1/img/gallery/gallery-5.jpg">
                        <img src="assets1/img/gallery/gallery-5.jpg" alt="image">
                    </a>
                </div>
                <!-- gallery-single-item -->
                <div class="col-lg-4 col-md-6">
                    <a class="gallery-single-item popup-img" href="assets1/img/gallery/gallery-6.jpg">
                        <img src="assets1/img/gallery/gallery-6.jpg" alt="image">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallery Section -->

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
                                            <img src="assets1/img/client/testimonial-1.jpg" alt="testimonial">
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
                                            <img src="assets1/img/client/testimonial-2.jpg" alt="testimonial">
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
                                            <img src="assets1/img/client/testimonial-3.jpg" alt="testimonial">
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





@endsection



