@extends('layouts.master')


@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Book A Table</h2>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>Book A Table</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
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


@endsection



