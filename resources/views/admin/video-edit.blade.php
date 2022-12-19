@extends('admin.layouts.master')

@section('title') Admin Panel @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    @component('admin.components.breadcrumb')
        @slot('li_1') Admin Panel @endslot
        @slot('title') Video Güncelle @endslot
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
        <form method="POST" class="form-horizontal" action="/update-photo/{{$video->id}}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <h4 class="card-title mb-4">Video Güncelle</h4>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-4 row">
                                    <label for="priority" class="col-md-3 col-form-label">Priority</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" id="priority" name="priority" value="{{$video->priority}}">
                                    </div>
                                </div>
                                <div class="mb-4 row">
                                    <label for="url" class="col-md-3 col-form-label">URL</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" id="url" name="url" value="https://www.youtube.com/watch?v={{$video->url}}">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="avatar">Video</label>
                                    <div class="media">
                                        <div class="me-3">
                                            <iframe class="responsive-iframe" type="text/html" width="720" height="405"
                                                    src="https://www.youtube.com/embed/{{$video->url==NULL?"":$video->url}}?enablejsapi=1" frameborder="0" allowfullscreen></iframe>


                                        </div>
                                    </div>

                                </div>
                                <div class="row mb-4">
                                    <div class="row justify-content-end">
                                        <div class="col-sm-9">


                                            <div>
                                                <button type="submit" class="btn btn-primary w-md">Güncelle</button>
                                                <a href="{{route('admin_video_gallery')}}"  class="btn btn-xs btn-warning text-white">Video Galeri</i></a>
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
