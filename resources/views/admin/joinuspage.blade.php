@extends('admin.layouts.master')

@section('title') BECOMEANORIARTIST Page @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    @component('admin.components.breadcrumb')
        @slot('li_1') Admin Panel @endslot
        @slot('title') BECOME AN ORI ARTIST Page @endslot
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
        <form method="POST" class="form-horizontal" action="/joinuspage-update" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <h4 class="card-title mb-4">Edit</h4>
                <div class="row">

                    <div class="col-xl-12">
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
                                    <label for="first_paragraph" class="col-sm-3 col-form-label">First Paragraph</label>
                                    <div class="col-sm-9">
                                    <textarea id="first_paragraph" class="form-control"  name="first_paragraph">{{$record->first_paragraph}}</textarea>
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
    <script src="{{ URL::asset('assets/libs/tinymce/tinymce.min.js')}}"></script>

    <script src="{{ URL::asset('assets/js/pages/form-editor.init.js')}}"></script>

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
    <script>
        $(document).ready(function () {
            if ($("#first_paragraph").length > 0) {
                tinymce.init({
                    selector: "textarea#first_paragraph",
                    entity_encoding : "raw",
                    height: 500,
                    plugins: ["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker", "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking", "save table contextmenu directionality emoticons template paste textcolor"],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                    style_formats: [{
                        title: 'Bold text',
                        inline: 'b'
                    }, {
                        title: 'Red text',
                        inline: 'span',
                        styles: {
                            color: '#ff0000'
                        }
                    }, {
                        title: 'Red header',
                        block: 'h1',
                        styles: {
                            color: '#ff0000'
                        }
                    }, {
                        title: 'Example 1',
                        inline: 'span',
                        classes: 'example1'
                    }, {
                        title: 'Example 2',
                        inline: 'span',
                        classes: 'example2'
                    }, {
                        title: 'Table styles'
                    }, {
                        title: 'Table row 1',
                        selector: 'tr',
                        classes: 'tablerow1'
                    }]
                });
            }

            $('.note-toolbar  [data-toggle=dropdown]').attr("data-bs-toggle", "dropdown");
        });
    </script>
@endsection
