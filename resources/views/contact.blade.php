@extends('layouts.master')
<style>
    .alert {
        padding: 20px;
        background-color: #f44336;
        color: white;
        opacity: 0.83;
        transition: opacity 0.6s;
        margin-bottom: 15px;
    }

    .alert.success {background-color: #04AA6D;}
    .alert.info {background-color: #2196F3;}
    .alert.warning {background-color: #ff9800;}

    .closebtn {
        padding-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 20px;
        line-height: 18px;
        cursor: pointer;
        transition: 0.3s;
    }

    .closebtn:hover {
        color: black;
    }
</style>

@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-area" style="background-image:url({{url($slider->img)}})">
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
                        @if(session()->has('message'))
                            <div class="alert {{session('alert') ?? 'info'}} alert-dismissible fade show">
                                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>

                                @if(session('alert')=="success")
                                {{session('message')}}
                                @else
                                    {{session('message')}}
                                @endif
                            </div>
                        @endif
                        <p class="form-message"></p>
                        <form id="contact-form" class="form" action="/add_send_contact_form" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <span class="error"style="color:red" role="alert">
                                       <strong> {!! $errors->first('name', '<h6 class="help-block">:message</h6>') !!}</strong>
                                    </span>
                                    <div class="form-group">
                                        <input type="text" name="name" value="{{ old('name') }}"   id="name" class="form-control" placeholder="Your Name">

                                    </div>


                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <span class="error"style="color:red" role="alert">
                                       <strong> {!! $errors->first('email', '<h6 class="help-block">:message</h6>') !!}</strong>
                                    </span>
                                    <div class="form-group">
                                        <input type="email" name="email" value="{{ old('email') }}"  id="email" class="form-control"  placeholder="Your Email">
                                    </div>

                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <span class="error"style="color:red" role="alert">
                                       <strong> {!! $errors->first('phone', '<h6 class="help-block">:message</h6>') !!}</strong>
                                    </span>
                                    <div class="form-group">
                                        <input type="text" name="phone" id="phone" value="{{ old('phone') }}"   class="form-control" placeholder="Your Phone">
                                    </div>

                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <span class="error"style="color:red" role="alert">
                                       <strong> {!! $errors->first('subject', '<h6 class="help-block">:message</h6>') !!}</strong>
                                    </span>
                                    <div class="form-group">
                                        <input type="text" name="subject" id="subject" value="{{ old('subject') }}"   class="form-control"  placeholder="Your Subject">
                                    </div>

                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <span class="error"style="color:red" role="alert">
                                       <strong> {!! $errors->first('message', '<h6 class="help-block">:message</h6>') !!}</strong>
                                    </span>
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message"    cols="30" rows="6"  placeholder="Your Message">{{ old('message') }}</textarea>
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

@section('script')

    <script>
        $(document).ready(function(){
            $('.alert-success').fadeIn().delay(3000).fadeOut('slow');
            $('.alert-danger').fadeIn().delay(3000).fadeOut('slow');
        });
    </script>

@endsection

