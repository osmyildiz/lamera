@extends('admin.layouts.master')

@section('title') SLIDER @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    @component('admin.components.breadcrumb')
        @slot('li_1') Admin Panel @endslot
        @slot('title') Slider Edit Page @endslot
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
        <form method="POST" class="form-horizontal" action="/slider-update/{{$slider->id}}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <h4 class="card-title mb-4">Edit Slider</h4>
                <div class="row">

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">

                                <div class="row mb-4">
                                    <label for="img" class="col-sm-3 col-form-label"><div class="me-3">

                                            <img src="{{url($slider->img)}}" alt=""
                                                 style="display:block;" width="100" height="70">

                                        </div>
                                    </label>

                                    <div class="col-sm-9">

                                        <div class="input-group">
                                            <input type="file" class="form-control" id="img" name="img" >

                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="yellow_title" class="col-sm-3 col-form-label">Yellow Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="yellow_title"
                                               name="yellow_title" value="{{$slider->yellow_title}}">

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="title" class="col-sm-3 col-form-label">Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="title"
                                               name="title" value="{{$slider->title}}">

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="content" class="col-sm-3 col-form-label">Content</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="content"
                                               name="content" value="{{$slider->text}}">

                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="priority" class="col-sm-3 col-form-label">Priority</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="priority"
                                               name="priority" value="{{$slider->priority}}">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="is_active" class="col-sm-3 col-form-label">Enable?</label>
                                    <div class="col-sm-9">
                                        <input class="form-check-input" type="checkbox" id="is_active" name="is_active"  {{$slider->is_active ==1?"checked":""}}>

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
