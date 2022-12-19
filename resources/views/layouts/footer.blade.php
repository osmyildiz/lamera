@php

    use App\Models\contact;
    $contact=contact::find(1);

@endphp
<footer id="contacts"
        class="contacts-section  ds overflow-visible background-contact s-pt-70 s-pb-60 s-pt-md-95 s-pb-md-80 s-pt-xl-30 s-pb-xl-140 c-gutter-30">

    <div class="container">
        <div class="row col-lg-3">
            <a href="./" class="logo mb-2">
                <img src="{{asset('assets1/images/footer_logo.png')}}" alt="img">
            </a>
        </div>
        <div class="row">

            <div class="col-lg-5 col-xl-4 animate" data-animation="scaleAppear">
                <h2 class="mt-0 contact-title text-uppercase">Contact us</h2>
                <div class="media mb-20">
                    <h4 class="fs-20 mb-0 min-w-100">Ori Artists Entertainment Talent Agency and Management Company</h4>

                </div>
                <div class="media mb-20">
                    <h5 class="fs-20 mb-0 min-w-100">Phone:</h5>
                    <div class="media-body ml-0 d-flex flex-column">
                        <span>{{$contact->phone}}</span>
                    </div>
                </div>
                <div class="media mb-20">
                    <h5 class="fs-20 mb-0 min-w-100">Email:</h5>
                    <div class="media-body ml-0 d-flex flex-column">
                        <span>{{$contact->email}}</span>
                        <span>{{$contact->email2}}</span>
                        <span>{{$contact->email3}}</span>
                    </div>
                </div>
                <div class="media mb-20">
                    <h5 class="fs-20 mb-0 min-w-100">Address:</h5>
                    <div class="media-body pr-lg-4 ml-0 d-flex flex-column">
                        <span>{{$contact->address}}</span>
                    </div>
                </div>
            </div>
            <!--.col-* -->
            <div class="fw-divider-space hidden-above-lg mt-20"></div>

            <div id="contactform" class="contactform col-lg-7 col-xl-8 animate" data-animation="scaleAppear">

                <form class="c-mb-20 c-gutter-20" method="post" action="{{url('/contact-me')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">

                            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                @if(Session::has($msg))
                                    <div class="alert alert-{{ $msg }} alert-dismissible color-main" role="alert">
                                        <i class="mdi mdi-check-all me-2"></i>
                                        {{ Session::get($msg) }}
                                    </div>

                                @endif
                            @endforeach

                        </div>
                    </div>
                    <div class="row">

                        <div class="col-sm-6">

                            <div class="form-group">
                                <input type="text" name="name" class="form-control"
                                       @if(old('name'))
                                       value="{{ old('name') }}"
                                 @else placeholder="full name" @endif >

                            </div>
                            <span class="alert-danger" role="alert">
                                       <strong> {!! $errors->first('name', '<h6 class="color-main">:message</h6>') !!}</strong>
                                    </span>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control"
                                       @if(old('email'))
                                       value="{{ old('email') }}"
                                       @else placeholder="email" @endif
                                >
                            </div>
                            <span class="alert-danger" role="alert">
                                       <strong> {!! $errors->first('email', '<h6 class="color-main">:message</h6>') !!}</strong>
                                    </span>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="tel" name="phone" class="form-control"
                                       @if(old('phone'))
                                       value="{{ old('phone') }}"
                                       @else placeholder="phone" @endif
                                >
                            </div>
                            <span class="alert-danger" role="alert">
                                       <strong> {!! $errors->first('phone', '<h6 class="color-main">:message</h6>') !!}</strong>
                                    </span>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" name="city" class="form-control"
                                       @if(old('city'))
                                       value="{{ old('city') }}"
                                       @else placeholder="your city" @endif >
                            </div>
                            <span class="alert-danger" role="alert">
                                       <strong> {!! $errors->first('city', '<h6 class="color-main">:message</h6>') !!}</strong>
                                    </span>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <textarea rows="6" cols="45" name="message" class="form-control"
                                          @if(!old('message')) placeholder="message" @endif >{{old('message')}}</textarea>

                                <button type="submit" class="btn-submit "><i class="fa fa-paper-plane"></i></button>
                            </div>
                            <span class="alert-danger" role="alert">
                                       <strong> {!! $errors->first('message', '<h6 class="color-main">:message</h6>') !!}</strong>
                                    </span>
                        </div>

                    </div>
                </form>
            </div>
            <!--.col-* -->
        </div>
    </div>

</footer>
<script src=
        "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>


