@extends('layouts.master')


@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Contact Us</h2>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Contact Section -->
    <div class="contact-section contact-page-form section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="contact-information-box-1">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="single-contact-info-box">
                                    <div class="contact-info">
                                        <h6>Address:</h6>
                                        <p>{{$contact->address}}</p>
                                    </div>
                                    <div class="contact-info-bg-icon">
                                        <i class="pe-7s-map-marker"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="single-contact-info-box">
                                    <div class="contact-info">
                                        <h6>Phone:</h6>
                                        <p>{{$contact->phone}}</p>

                                    </div>
                                    <div class="contact-info-bg-icon">
                                        <i class="pe-7s-call"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="single-contact-info-box">
                                    <div class="contact-info">
                                        <h6>Email:</h6>
                                        <p>{{$contact->email}}</p>

                                    </div>
                                    <div class="contact-info-bg-icon">
                                        <i class="pe-7s-mail"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="contact-form contact-form-1">
                        <p class="form-message"></p>
                        <form id="contact-form" class="form" action="php-mails.php" method="POST">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="phone" id="phone" required class="form-control" placeholder="Your Phone">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="subject" id="subject" class="form-control" required placeholder="Your Subject">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="6" required placeholder="Your Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">Send Message <span></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Section -->

    <!-- Map Section Start -->
    <div class="map-area">
        <div class="map-content">
            <div class="map-canvas" id="contact-map"></div>
        </div>
    </div>
    <!-- Map Section End -->



@endsection


