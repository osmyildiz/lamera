@extends('layouts.master')


@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area" style="background-image:url({{url($slider->img)}})">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Our Menu</h2>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>Menu</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

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





@endsection



