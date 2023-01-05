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
        <div class="container" id="booking" name="booking">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h6 class="sub-title">Book A Table</h6>
                        <h2>Make a Reservation</h2>
                    </div>
                </div>
            </div>
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
            <form id="reservation-form" class="form" method="POST" action="/book_a_table_form" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <span class="error"style="color:red" role="alert">
                                       <strong> {!! $errors->first('guest_number', '<h6 class="help-block">:message</h6>') !!}</strong>
                                    </span>
                            <select class="wide" id="guest_number" name="guest_number">
                                <option {{ old('guest_number') ? "selected" : "" }} value="{{ old('guest_number') }}">{{ old('guest_number')?old('guest_number'):"Guest Number" }}</option>
                                <option value="1 Person">1 Person</option>
                                <option value="2 Person">2 Person</option>
                                <option value="3 Person">3 Person</option>
                                <option value="4 Person">4 Person</option>
                                <option value="5 Person">5 Person</option>
                                <option value="6 Person">6 Person</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <span class="error"style="color:red" role="alert">
                                       <strong> {!! $errors->first('time', '<h6 class="help-block">:message</h6>') !!}</strong>
                                    </span>
                            <select class="wide" id="time" name="time">
                                <option {{ old('time') ? "selected" : "" }} value="{{ old('time') }}">{{ old('time')?old('time'):"Time" }}</option>
                                <option value="09.00 am">09.00 am</option>
                                <option value="09.30 am">09.30 am</option>
                                <option value="10.00 am">10.00 am</option>
                                <option value="10.30 am">10.30 am</option>
                                <option value="11.00 am">11.00 am</option>
                                <option value="11.30 am">11.30 am</option>
                                <option value="12.00 am">12.00 am</option>
                                <option value="12.30 am">12.30 am</option>
                                <option value="01.00 pm">01.00 pm</option>
                                <option value="01.30 pm">01.30 pm</option>
                                <option value="02.00 pm">02.00 pm</option>
                                <option value="02.30 pm">02.30 pm</option>
                                <option value="03.00 pm">03.00 pm</option>
                                <option value="03.30 pm">03.30 pm</option>
                                <option value="04.00 pm">04.00 pm</option>
                                <option value="04.30 pm">04.30 pm</option>
                                <option value="05.00 pm">05.00 pm</option>
                                <option value="05.30 pm">05.30 pm</option>
                                <option value="06.00 pm">06.00 pm</option>
                                <option value="06.30 pm">06.30 pm</option>
                                <option value="07.00 pm">07.00 pm</option>
                                <option value="07.30 pm">07.30 pm</option>
                                <option value="08.00 pm">08.00 pm</option>
                                <option value="08.30 pm">08.30 pm</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <span class="error"style="color:red" role="alert">
                                       <strong> {!! $errors->first('res_date', '<h6 class="help-block">:message</h6>') !!}</strong>
                                    </span>
                            <input type="text" id="datepicker" class="reservation-date" placeholder="Booking Date" name="res_date" value="{{ old('res_date') }}" >
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <span class="error"style="color:red" role="alert">
                                       <strong> {!! $errors->first('name', '<h6 class="help-block">:message</h6>') !!}</strong>
                                    </span>
                            <input type="text" id="name" class="reservation-date" placeholder="Name" name="name" value="{{ old('name') }}" >
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <span class="error"style="color:red" role="alert">
                                       <strong> {!! $errors->first('email', '<h6 class="help-block">:message</h6>') !!}</strong>
                                    </span>
                            <input type="email" id="email" class="reservation-date" placeholder="Email" name="email" value="{{ old('email') }}" >
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <span class="error"style="color:red" role="alert">
                                       <strong> {!! $errors->first('phone', '<h6 class="help-block">:message</h6>') !!}</strong>
                                    </span>
                            <input type="text" id="phone" class="reservation-date" placeholder="Phone" name="phone" value="{{ old('phone') }}" >
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <input type="text" id="message" class="reservation-date" placeholder="Message" name="message">{{ old('message') }}
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <button type="submit" class="default-btn">Book A Table <span></span></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- End Reservation Section -->


@endsection



