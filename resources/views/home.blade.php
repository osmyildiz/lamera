@extends('layouts.master')


@section('content')


    <!-- Start Slider Area -->
    <header class="slider slider-prlx">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
                @foreach($sliders as $slider)
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="{{$slider->img}}" data-overlay-dark="7">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2 col-md-12">
                                    <div class="caption">
                                        <h4 class="custom-font">{{$slider->yellow_title}}</h4>
                                        <h1>{{$slider->title}}</h1>
                                        <p>{{$slider->content}}</p>
                                        <div class="banner-btn home-slider-btn">
                                            <a href="/menu" class="default-btn-one">Check Our Menu <span></span></a>
                                            <a href="/booking" class="default-btn">Book A Table <span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

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
    <section class="reservation-section booking" id="reservation">
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
                            <input type="text" id="name" class="reservation-date" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <input type="email" id="email" class="reservation-date" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <input type="text" id="phone" class="reservation-date" placeholder="Phone">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <input type="text" id="phone" class="reservation-date" placeholder="Message">
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
                            @foreach($menu_category as $cat)
                            <li class="filter" data-filter=".{{strtolower($cat->slug)}}">{{$cat->name}}</li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                <div class="menu-product-container">

                    <!-- Menu Grid Item Brunch -->

                    <div class="col-lg-6 col-md-12 menu-grid-item all">
                        <div class="menu-product-box">
                            @foreach($menu_brunch as $key=>$brunch)
                                @if($key<4)
                            <div class="menu-single-product">
                                <div class="menu-product-info-box">
                                    <div class="menu-product-details"><a class="menu-product-title" href="#">{{$brunch->name}}</a>
                                        <p>{{$brunch->description}}</p>
                                    </div>
                                    <div class="menu-product-price"><span>£{{$brunch->price}}</span>
                                    </div>
                                </div>
                            </div>
                                @endif
                            @endforeach

                        </div>
                    </div>

                    <!-- Menu Grid Item Lunch -->

                    <div class="col-lg-6 col-md-12 menu-grid-item all">
                        <div class="menu-product-box">
                            @foreach($menu_lunch as $key=>$brunch)
                                @if($key<6)
                                    <div class="menu-single-product">
                                        <div class="menu-product-info-box">
                                            <div class="menu-product-details"><a class="menu-product-title" href="#">{{$brunch->name}}</a>
                                                <p>{{$brunch->description}}</p>
                                            </div>
                                            <div class="menu-product-price"><span>£{{$brunch->price}}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>

                    <!-- Menu Grid Item Sandwich -->

                    <div class="col-lg-6 col-md-12 menu-grid-item all">
                        <div class="menu-product-box">
                            @foreach($menu_sand as $key=>$brunch)
                                @if($key<4)
                                    <div class="menu-single-product">
                                        <div class="menu-product-info-box">
                                            <div class="menu-product-details"><a class="menu-product-title" href="#">{{$brunch->name}}</a>
                                                <p>{{$brunch->description}}</p>
                                            </div>
                                            <div class="menu-product-price"><span>£{{$brunch->price}}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>

                    <!-- Menu Grid Item Kids -->

                    <div class="col-lg-6 col-md-12 menu-grid-item all">
                        <div class="menu-product-box">
                            @foreach($menu_kids as $key=>$brunch)
                                @if($key<6)
                                    <div class="menu-single-product">
                                        <div class="menu-product-info-box">
                                            <div class="menu-product-details"><a class="menu-product-title" href="#">{{$brunch->name}}</a>
                                                <p>{{$brunch->description}}</p>
                                            </div>
                                            <div class="menu-product-price"><span>£{{$brunch->price}}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>

                    <!-- Menu Grid Item Brunch -->
                    <div class="col-lg-6 col-md-12 menu-grid-item brunch">
                        <div class="menu-product-box">
                            @foreach($menu_brunch as $key=>$brunch)
                                @if($key<4)
                                    <div class="menu-single-product">
                                        <div class="menu-product-info-box">
                                            <div class="menu-product-details"><a class="menu-product-title" href="#">{{$brunch->name}}</a>
                                                <p>{{$brunch->description}}</p>
                                            </div>
                                            <div class="menu-product-price"><span>£{{$brunch->price}}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 menu-grid-item brunch">
                        <div class="menu-product-box">
                            @foreach($menu_brunch as $key=>$brunch)
                                @if(($key>3)&($key<8))
                                    <div class="menu-single-product">
                                        <div class="menu-product-info-box">
                                            <div class="menu-product-details"><a class="menu-product-title" href="#">{{$brunch->name}}</a>
                                                <p>{{$brunch->description}}</p>
                                            </div>
                                            <div class="menu-product-price"><span>£{{$brunch->price}}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 menu-grid-item brunch">
                        <div class="menu-product-box">
                            @foreach($menu_brunch as $key=>$brunch)
                                @if(($key>8)&($key<12))
                                    <div class="menu-single-product">
                                        <div class="menu-product-info-box">
                                            <div class="menu-product-details"><a class="menu-product-title" href="#">{{$brunch->name}}</a>
                                                <p>{{$brunch->description}}</p>
                                            </div>
                                            <div class="menu-product-price"><span>£{{$brunch->price}}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>

                    <!-- Menu Grid Item Lunch -->
                    <div class="col-lg-6 col-md-12 menu-grid-item lunch">
                        <div class="menu-product-box">
                            @foreach($menu_lunch as $key=>$brunch)
                                @if($key<4)
                                    <div class="menu-single-product">
                                        <div class="menu-product-info-box">
                                            <div class="menu-product-details"><a class="menu-product-title" href="#">{{$brunch->name}}</a>
                                                <p>{{$brunch->description}}</p>
                                            </div>
                                            <div class="menu-product-price"><span>£{{$brunch->price}}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 menu-grid-item lunch">
                        <div class="menu-product-box">
                            @foreach($menu_lunch as $key=>$brunch)
                                @if(($key>3)&($key<8))
                                    <div class="menu-single-product">
                                        <div class="menu-product-info-box">
                                            <div class="menu-product-details"><a class="menu-product-title" href="#">{{$brunch->name}}</a>
                                                <p>{{$brunch->description}}</p>
                                            </div>
                                            <div class="menu-product-price"><span>£{{$brunch->price}}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 menu-grid-item lunch">
                        <div class="menu-product-box">
                            @foreach($menu_lunch as $key=>$brunch)
                                @if(($key>8)&($key<12))
                                    <div class="menu-single-product">
                                        <div class="menu-product-info-box">
                                            <div class="menu-product-details"><a class="menu-product-title" href="#">{{$brunch->name}}</a>
                                                <p>{{$brunch->description}}</p>
                                            </div>
                                            <div class="menu-product-price"><span>£{{$brunch->price}}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>
                    <!-- Menu Grid Item Sandwiches -->
                    <div class="col-lg-6 col-md-12 menu-grid-item sandwiches">
                        <div class="menu-product-box">
                            @foreach($menu_sand as $key=>$brunch)
                                @if($key<4)
                                    <div class="menu-single-product">
                                        <div class="menu-product-info-box">
                                            <div class="menu-product-details"><a class="menu-product-title" href="#">{{$brunch->name}}</a>
                                                <p>{{$brunch->description}}</p>
                                            </div>
                                            <div class="menu-product-price"><span>£{{$brunch->price}}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 menu-grid-item sandwiches">
                        <div class="menu-product-box">
                            @foreach($menu_sand as $key=>$brunch)
                                @if(($key>3)&($key<8))
                                    <div class="menu-single-product">
                                        <div class="menu-product-info-box">
                                            <div class="menu-product-details"><a class="menu-product-title" href="#">{{$brunch->name}}</a>
                                                <p>{{$brunch->description}}</p>
                                            </div>
                                            <div class="menu-product-price"><span>£{{$brunch->price}}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>
                    <!-- Menu Grid Item Kids -->
                    <div class="col-lg-6 col-md-12 menu-grid-item kids">
                        <div class="menu-product-box">
                            @foreach($menu_kids as $key=>$brunch)
                                @if($key<4)
                                    <div class="menu-single-product">
                                        <div class="menu-product-info-box">
                                            <div class="menu-product-details"><a class="menu-product-title" href="#">{{$brunch->name}}</a>
                                                <p>{{$brunch->description}}</p>
                                            </div>
                                            <div class="menu-product-price"><span>£{{$brunch->price}}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 menu-grid-item kids">
                        <div class="menu-product-box">
                            @foreach($menu_kids as $key=>$brunch)
                                @if(($key>3)&($key<8))
                                    <div class="menu-single-product">
                                        <div class="menu-product-info-box">
                                            <div class="menu-product-details"><a class="menu-product-title" href="#">{{$brunch->name}}</a>
                                                <p>{{$brunch->description}}</p>
                                            </div>
                                            <div class="menu-product-price"><span>£{{$brunch->price}}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>
                    <!-- Menu Grid Item Pancakes -->
                    <div class="col-lg-6 col-md-12 menu-grid-item pancakes">
                        <div class="menu-product-box">
                            @foreach($menu_panc as $key=>$brunch)
                                @if($key<4)
                                    <div class="menu-single-product">
                                        <div class="menu-product-info-box">
                                            <div class="menu-product-details"><a class="menu-product-title" href="#">{{$brunch->name}}</a>
                                                <p>{{$brunch->description}}</p>
                                            </div>
                                            <div class="menu-product-price"><span>£{{$brunch->price}}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

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
                        <h2>LA MERA Gallery</h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="menu1-section col-md-12 justify-content-center">
                    <div class="menu1-filter-box ">
                        <ul class="nav" id="menu1-filter">
                            <li class="filter filter-active" data-filter=".all">All Items</li>
                            <li class="filter" data-filter=".food">Food</li>
                            <li class="filter" data-filter=".place">Venue</li>

                        </ul>
                    </div>
                </div>
                </div>
            <div class="menu1-product-container">
                <div class="row">
                <!-- gallery-single-item -->
                    @foreach($food as $key=>$foo)
                        @if($key<3)
                            <div class="col-lg-4 col-md-6 menu1-grid-item all">
                                <a class="gallery-single-item popup-img" href="{{$foo->url}}">
                                    <img src="{{$foo->url}}" alt="image">
                                </a>
                            </div>
                        @endif
                    @endforeach
                    @foreach($place as $key=>$foo)
                        @if($key<3)
                            <div class="col-lg-4 col-md-6 menu1-grid-item all">
                                <a class="gallery-single-item popup-img" href="{{$foo->url}}">
                                    <img src="{{$foo->url}}" alt="image">
                                </a>
                            </div>
                        @endif
                    @endforeach
                    @foreach($foods as $foo)
                <div class="col-lg-4 col-md-6 menu1-grid-item {{$foo->category_id==2?"place":"food"}}">
                    <a class="gallery-single-item popup-img" href="{{$foo->url}}">
                        <img src="{{$foo->url}}" alt="image">
                    </a>
                </div>
                @endforeach

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
                            @foreach($testimonials as $tst)
                            <div class="single-testimonial-two">
                                <div class="testimonial-two-content">
                                    <div class="testimonial-text">
                                        <p>{{$tst->content}}</p>
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
                                            <img src="{{$tst->img}}" alt="testimonial">
                                        </div>
                                        <div class="author-bio-info">
                                            <h3>{{$tst->name}}</h3>
                                            <span>{{$tst->job}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonials Section -->





@endsection



