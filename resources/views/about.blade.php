@extends('layouts.master')


@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>About Us</h2>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->
    <!-- Start About Section -->
    <section class="about-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-content">
                        <h6 class="sub-title">{{$about->yellow_title}}</h6>
                        <h2>{{$about->title}}</h2>
                        <p>{{$about->content}}</p>

                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-img">
                        <div class="about-img-1">
                            <img src="{{$about->img}}" alt="">
                        </div>
                        <div class="about-img-2">
                            <img src="{{$about->img1}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->
    <!-- Start Features Section -->
    <section class="features-section pt-70 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-features-item">
                        <div class="features-icon">
                            <img src="assets1/img/icons/features-icon-1.svg" alt="svg icon">
                        </div>
                        <h3>{{$about->box1_title}}</h3>
                        <p>{{$about->box1_content}}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-features-item">
                        <div class="features-icon">
                            <img src="assets1/img/icons/features-icon-2.svg" alt="svg icon">
                        </div>
                        <h3>{{$about->box2_title}}</h3>
                        <p>{{$about->box2_content}}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-features-item">
                        <div class="features-icon">
                            <img src="assets1/img/icons/features-icon-3.svg" alt="svg icon">
                        </div>
                        <h3>{{$about->box3_title}}</h3>
                        <p>{{$about->box3_content}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Features Section -->
    <!-- Start Testimonials Section -->
    <section class="testimonial-design-two section-padding">
        <div class="container">
            <div class="row">
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



