@extends('admin.layouts.master')

@section('title') What we offer client Page @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    @component('admin.components.breadcrumb')
        @slot('li_1') Admin Panel @endslot
        @slot('title') Client Page @endslot
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
        <form method="POST" class="form-horizontal" action="/whatweofferartist-update" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <h4 class="card-title mb-4">Edit</h4>
                <div class="row">

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">


                                <div class="row mb-4">
                                    <label for="title" class="col-sm-3 col-form-label">Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="title"
                                               name="title" value="{{$record->title}}">

                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="paragraph1" class="col-sm-3 col-form-label">Paragraph-1</label>
                                    <div class="col-sm-9">
                                    <textarea id="paragraph1" class="form-control" rows="5" name="paragraph1">{{$record->paragraph1}}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="paragraph2" class="col-sm-3 col-form-label">Paragraph-2</label>
                                    <div class="col-sm-9">
                                        <textarea id="paragraph2" class="form-control" rows="5" name="paragraph2">{{$record->paragraph2}}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="paragraph3" class="col-sm-3 col-form-label">Paragraph-3</label>
                                    <div class="col-sm-9">
                                        <textarea id="paragraph3" class="form-control" rows="5" name="paragraph3">{{$record->paragraph3}}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="title2" class="col-sm-3 col-form-label">Title 2</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="title2"
                                               name="title2" value="{{$record->title2}}">

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="item1" class="col-sm-3 col-form-label">Item-1</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="item1"
                                               name="item1" value="{{$record->item1}}">

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="item2" class="col-sm-3 col-form-label">Item-2</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="item2"
                                               name="item2" value="{{$record->item2}}">

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="item3" class="col-sm-3 col-form-label">Item-3</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="item3"
                                               name="item3" value="{{$record->item3}}">

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="item4" class="col-sm-3 col-form-label">Item-4</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="item4"
                                               name="item4" value="{{$record->item4}}">

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="quote" class="col-sm-3 col-form-label">Quote</label>
                                    <div class="col-sm-9">
                                        <textarea id="quote" class="form-control" rows="5" name="quote">{{$record->quote}}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="meta_title" class="col-sm-3 col-form-label">Meta Title</label>
                                    <div class="col-sm-9">
                                        <textarea id="meta_title" class="form-control" rows="5" name="meta_title">{{$record->meta_title}}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="meta_keywords" class="col-sm-3 col-form-label">Meta Keywords</label>
                                    <div class="col-sm-9">
                                        <textarea id="meta_keywords" class="form-control" rows="5" name="meta_keywords">{{$record->meta_keywords}}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="meta_description" class="col-sm-3 col-form-label">Meta Description</label>
                                    <div class="col-sm-9">
                                        <textarea id="meta_description" class="form-control" rows="5" name="meta_description">{{$record->meta_description}}</textarea>
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
