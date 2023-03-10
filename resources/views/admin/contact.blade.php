@extends('admin.layouts.master')

@section('title') Contact @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    @component('admin.components.breadcrumb')
        @slot('li_1') Admin Panel @endslot
        @slot('title') Contact @endslot
    @endcomponent
    <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has($msg))
                <div class="alert alert-{{ $msg }} alert-dismissible fade show" role="alert">
                    <i class="mdi mdi-check-all me-2"></i>
                    {{ Session::get($msg) }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            @endif
        @endforeach
    </div>

    <div class="card">
        <form method="POST" class="form-horizontal" action="/contact-update" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <h4 class="card-title mb-4">Edit</h4>
                <div class="row">

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">

                                <div class="row mb-4">
                                    <label for="phone" class="col-sm-3 col-form-label">Phone</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="phone"
                                               name="phone" value="{{$record->phone}}">

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="address" class="col-sm-3 col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="address"
                                               name="address" value="{{$record->address}}">

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="email"
                                               name="email" value="{{$record->email}}">

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="instagram" class="col-sm-3 col-form-label">Instagram</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="instagram"
                                               name="instagram" value="{{$record->instagram}}">

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="facebook" class="col-sm-3 col-form-label">Facebook</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="facebook"
                                               name="facebook" value="{{$record->facebook}}">

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="twitter" class="col-sm-3 col-form-label">twitter</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="twitter"
                                               name="twitter" value="{{$record->twitter}}">

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="linkedin" class="col-sm-3 col-form-label">LinkedIn</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="linkedin"
                                               name="linkedin" value="{{$record->linkedin}}">

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="work_day1" class="col-sm-3 col-form-label">Work Day1:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="work_day1"
                                               name="work_day1" value="{{$record->work_day1}}">

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="work_day1_hours" class="col-sm-3 col-form-label">Work Day1 Hours:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="work_day1_hours"
                                               name="work_day1_hours" value="{{$record->work_day1_hours}}">

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="work_day2" class="col-sm-3 col-form-label">Work Day2:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="work_day2"
                                               name="work_day2" value="{{$record->work_day2}}">

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="work_day2_hours" class="col-sm-3 col-form-label">Work Day2 Hours:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="work_day2_hours"
                                               name="work_day2_hours" value="{{$record->work_day2_hours}}">

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="work_day3" class="col-sm-3 col-form-label">Work Day3:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="work_day3"
                                               name="work_day3" value="{{$record->work_day3}}">

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="work_day3_hours" class="col-sm-3 col-form-label">Work Day3 Hours:</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="work_day3_hours"
                                               name="work_day3_hours" value="{{$record->work_day3_hours}}">

                                    </div>
                                </div>
                                <div class="row mb-4" >
                                    <label for="cover_img" class="col-sm-3 col-form-label">Contact Slider</label>

                                    <div class="media">
                                        <div class="me-3">
                                            <img src="{{url($slider->img==NULL?"":$slider->img)}}" alt=""
                                                 style="display:block;" width="50%" height="50%">
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div><span class="alert-info" role="alert"> Image size should be 1400x400</span></div>

                                        <div class="input-group">
                                            <input type="file" class="form-control " id="img" name="img" >

                                        </div>

                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="row justify-content-end">
                                        <div class="col-sm-9">
                                            <div>
                                                <button type="submit" class="btn btn-primary w-md">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>





                </div>
            </div>
    </div>
    </form>
    </div>



@endsection
@section('script')
    <!-- Required datatable js -->
    <script src="{{ asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ asset('/assets/js/pages/datatables.init.js') }}"></script>
    <script language="javascript" type="text/javascript">
        function limitText(limitField, limitNum) {
            if (limitField.value.length > limitNum) {
                limitField.value = limitField.value.substring(0, limitNum);
            }
        }


    </script>
    <script>
        $(document).ready(function(){
            $('.alert-success').fadeIn().delay(3000).fadeOut('slow');
            $('.alert-danger').fadeIn().delay(3000).fadeOut('slow');
        });
    </script>
@endsection
