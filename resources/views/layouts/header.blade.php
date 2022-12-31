@php
    use App\Models\contact;
    $contact = contact::find(1);
@endphp
<div class="preloader">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="lds-spinner">
                <div></div><div></div><div></div>
                <div></div><div></div><div></div>
                <div></div><div></div><div></div>
                <div></div><div></div><div></div>
            </div>
        </div>
    </div>
</div>
<!-- End Preloader Area -->

<!-- Start Navbar Area -->
<div class="header-navber-area">
    <div class="nav-top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="call-to-action">
                        <p><i class="fa fa-location-dot"></i>{{$contact->address}}</p>
                        <p><i class="fa fa-mobile-screen-button"></i> <a href="tel:{{$contact->phone}}">{{$contact->phone}}</a></p>
                        <!--<p><i class="fa fa-envelope"></i> <a href="mailto:lamelabistro@gmail.com">lamelabistro@gmail.com</a></p>-->
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <ul class="top-social">
                        <li><a href="https://en-gb.facebook.com/LaMelaHackney/"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://twitter.com/lamelahackney?lang=en"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/lamelahackney/?hl=en"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                    <!--<div class="opening-hours">
                        <p><i class="fa fa-clock"></i> Opening Hours : 9:00am - 7:00pm</p>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-area">
        <div class="brulee-responsive-nav">
            <div class="container">
                <div class="brulee-responsive-menu">
                    <div class="logo">
                        <a href="/">
                            <img src="assets1/img/logo.png" class="white-logo" alt="logo">
                            <img src="assets1/img/logo-black.png" class="black-logo" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="brulee-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="/">
                        <img src="assets1/img/logo.png" class="white-logo" alt="logo">
                        <img src="assets1/img/logo-black.png" class="black-logo" alt="logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="/" class="nav-item">Home</a>

                            </li>
                            <li class="nav-item">
                                <a href="/about" class="nav-link">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="/menu" class="nav-link">Menu</a>
                            </li>

                            <li class="nav-item">
                                <a href="/contact" class="nav-link">Contact</a>
                            </li>
                        </ul>
                        <div class="other-option">
                            <a class="default-btn" href="/booking">Book A Table <span></span></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Navbar Area -->
