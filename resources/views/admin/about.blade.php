@extends('admin.layouts.master')

@section('title') About US @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    @component('admin.components.breadcrumb')
        @slot('li_1') Admin Panel @endslot
        @slot('title') About @endslot
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
        <form method="POST" class="form-horizontal" action="/about-update" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <h4 class="card-title mb-4">Edit</h4>
                <div class="row">

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">

                                <div class="row mb-4">
                                    <label for="yellow_title" class="col-sm-3 col-form-label">Yellow Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="yellow_title"
                                               name="yellow_title" value="{{$record->yellow_title}}">

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="title" class="col-sm-3 col-form-label">Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="title"
                                               name="title" value="{{$record->title}}">

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="content1" class="col-sm-3 col-form-label">Content</label>
                                    <div class="col-sm-9">
                                        <textarea id="content1" class="form-control" rows="5" name="content1">{{$record->content1}}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-4" >
                                    <label for="img" class="col-sm-3 col-form-label">Back Image</label>

                                    <div class="media">
                                        <div class="me-3">
                                            <img src="{{url($record->img==NULL?"":$record->img)}}" alt=""
                                                 style="display:block;" width="50%" height="50%">
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div><span class="alert-info" role="alert"> Image size should be 430x300</span></div>

                                        <div class="input-group">
                                            <input type="file" class="form-control " id="img" name="img" >

                                        </div>

                                    </div>
                                </div>
                                <div class="row mb-4" >
                                    <label for="img1" class="col-sm-3 col-form-label">Front Image</label>

                                    <div class="media">
                                        <div class="me-3">
                                            <img src="{{url($record->img1==NULL?"":$record->img1)}}" alt=""
                                                 style="display:block;" width="50%" height="50%">
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div><span class="alert-info" role="alert"> Image size should be 430x300</span></div>

                                        <div class="input-group">
                                            <input type="file" class="form-control " id="img1" name="img1" >

                                        </div>

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="box1_title" class="col-sm-3 col-form-label">Box 1 Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="box1_title"
                                               name="box1_title" value="{{$record->box1_title}}">

                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="box1_content" class="col-sm-3 col-form-label">Box 1 Content</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="box1_content"
                                               name="box1_content" value="{{$record->box1_content}}">

                                    </div>
                                </div>


                                <div class="row mb-4">
                                    <label for="box2_title" class="col-sm-3 col-form-label">Box 2 Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="box2_title"
                                               name="box2_title" value="{{$record->box2_title}}">

                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="box2_content" class="col-sm-3 col-form-label">Box 2 Content</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="box2_content"
                                               name="box2_content" value="{{$record->box2_content}}">

                                    </div>
                                </div>


                                <div class="row mb-4">
                                    <label for="box3_title" class="col-sm-3 col-form-label">Box 3 Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="box3_title"
                                               name="box3_title" value="{{$record->box3_title}}">

                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="box3_content" class="col-sm-3 col-form-label">Box 3 Content</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="box3_content"
                                               name="box3_content" value="{{$record->box3_content}}">

                                    </div>
                                </div>

                                <div class="row mb-4" >
                                    <label for="slider_img" class="col-sm-3 col-form-label">About Slider</label>

                                    <div class="media">
                                        <div class="me-3">
                                            <img src="{{url($slider->img==NULL?"":$slider->img)}}" alt=""
                                                 style="display:block;" width="50%" height="50%">
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div><span class="alert-info" role="alert"> Image size should be 1400x400</span></div>

                                        <div class="input-group">
                                            <input type="file" class="form-control " id="slider_img" name="slider_img" >

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
