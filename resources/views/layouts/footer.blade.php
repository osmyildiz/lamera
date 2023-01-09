@php
    use App\Models\Contact;
    $contact = Contact::find(1);
@endphp
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
<!-- Start Footer Section -->
<section class="footer-area">
    <div class="container" id="footer">
        <div class="row">
            <div class="col-lg-3 col-md-6 footer-box-item">
                <div class="footer-about footer-list">
                    <a class="footer-logo" href="/">
                        <img src="assets1/img/logo.png" class="white-logo" alt="logo">
                    </a>
                    <p>{{$contact->description}}</p>
                    <ul class="footer-social-icon">
                        <li><a href="https://en-gb.facebook.com/LaMelaHackney/"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://twitter.com/lamelahackney?lang=en"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/lamelahackney/?hl=en"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 footer-box-item">
                <div class="footer-list">
                    <h5 class="title">Contact Info</h5>
                    <div class="footer-contact-info">
                        <ul class="footer-contact-list">
                            <li><i class="fa fa-location-dot"></i>{{$contact->address}}</li>
                            <li><i class="fa fa-mobile-screen-button"></i> <a href="tel:{{$contact->phone}}">{{$contact->phone}}</a></li>
                            <li><i class="fa fa-envelope"></i> <a href="mailto:{{$contact->email}}">{{$contact->email}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 footer-box-item">
                <div class="footer-list">
                    <h5 class="title">Opening Time</h5>
                    <ul class="footer-opening-time-list">
                        <li>{{$contact->work_day1}}<span>{{$contact->work_day1_hours}}</span></li>
                        <li>{{$contact->work_day2}}<span>{{$contact->work_day2_hours}}</span></li>
                        <li>{{$contact->work_day3}}<span>{{$contact->work_day3_hours}}</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 footer-box-item">
                <div class="footer-list">
                    <h5 class="title">Subscribe Newsletter</h5>
                    <div class="footer-info-newsletter">
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
                        <form class="newsletter-form" action="/add_subscriber" method="POST" enctype="multipart/form-data">
                            @csrf
                            <span class="error"style="color:red" role="alert">
                                       <strong> {!! $errors->first('footeremail', '<h6 class="help-block">:message</h6>') !!}</strong>
                                    </span>
                            <input type="email" class="input-newsletter" placeholder="Enter your email" name="footeremail" autocomplete="off">
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
                <p>© 2022 - All Rights Reserved - Designed by <span class="author-name"><a href="mayfairdigital.co.uk">Mayfair Digital</a></span></p>
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

