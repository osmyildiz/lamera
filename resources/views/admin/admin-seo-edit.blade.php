@extends('admin.layouts.master')

@section('title') SEO @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    @component('admin.components.breadcrumb')
        @slot('li_1') Admin Panel @endslot
        @slot('title') SEO EDIT @endslot
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
        <form method="POST" class="form-horizontal" action="/update-seo/{{$seo->id}}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <h4 class="card-title mb-4">EDIT SEO</h4>
                <div class="row">

                    <div class="col-xl-6">



                        <div class="mb-4 row">
                            <label for="title" class="col-md-3 col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text"
                                       value="{{$seo->title}}"     id="title" autofocus name="title">
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="description" class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                            <textarea id="description" class="form-control"  rows="4" name="description">{{$seo->description}}</textarea>
                            </div></div>

                        <div class="row mb-4">
                            <label for="keywords" class="col-sm-3 col-form-label">Keywords</label>
                            <div class="col-sm-9">
                                <textarea id="keywords" class="form-control"  rows="4" name="keywords">{{$seo->keywords}}</textarea>
                            </div></div>
                        <div class="row mb-4">
                            <div class="row justify-content-end">
                                <div class="col-sm-9">


                                    <div>
                                        <button type="submit" class="btn btn-primary w-md">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- end card -->
                    </div>




                    <!-- end col -->
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
