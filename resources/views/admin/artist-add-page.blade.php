@extends('admin.layouts.master')

@section('title') Add Artist Page @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('/assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

    @component('admin.components.breadcrumb')
        @slot('li_1') Admin Panel @endslot
        @slot('title') Add an Artist @endslot
    @endcomponent
    @if(!empty($data['success']))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="mdi mdi-check-all me-2"></i>
            {{$data['success']}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
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

    <div class="card" name="startform" id="startform">
        <form method="POST" class="form-horizontal " action="/artist-add" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <h4 class="card-title mb-4">New</h4>
                <div class="row">

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">


                                <div class="row mb-4" >
                                    <label for="cover_img" class="col-sm-3 col-form-label">Cover Image</label>


                                    <div class="col-sm-9">
                                        <div><span class="alert-info" role="alert"> Image size should be 1080x1520</span></div>

                                        <div class="input-group">
                                            <input type="file" class="form-control " id="cover_img" name="cover_img" >

                                            <span class="alert-danger" role="alert">
                                                <strong> {!! $errors->first('cover_img', '<h6 class="alert-danger">:message</h6>') !!}</strong>
                                                <strong> {!! $errors->first('cover_img.*', '<h6 class="alert-danger">:message</h6>') !!}</strong>
                                            </span>
                                        </div>

                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="name" class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="name"
                                               value="{{ old('name') }}"     name="name" >

                                        <span class="alert-danger" role="alert">
                                            <strong> {!! $errors->first('name', '<h6 class="alert-danger">:message</h6>') !!}</strong>
                                        </span>
                                    </div>

                                </div>
                                <div class="row mb-4">
                                    <label for="surname" class="col-sm-3 col-form-label">Surname</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="surname"
                                               value="{{ old('surname') }}"      name="surname" >
                                        <span class="alert-danger" role="alert">
                                                <strong> {!! $errors->first('surname', '<h6 class="alert-danger">:message</h6>') !!}</strong>
                                            </span>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="phone" class="col-sm-3 col-form-label">Phone</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="phone"
                                               value="{{ old('phone') }}"     name="phone" >
                                        <span class="alert-danger" role="alert">
                                                <strong> {!! $errors->first('phone', '<h6 class="alert-danger">:message</h6>') !!}</strong>
                                            </span>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="email" class="col-sm-3 col-form-label">email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="email"
                                               value="{{ old('email') }}"      name="email" >
                                        <span class="alert-danger" role="alert">
                                                <strong> {!! $errors->first('email', '<h6 class="alert-danger">:message</h6>') !!}</strong>
                                            </span>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="city" class="col-sm-3 col-form-label">City</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="city"
                                               value="{{ old('city') }}"       name="city">

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="website" class="col-sm-3 col-form-label">Website</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="website"
                                               value="{{ old('website') }}"      name="website" >

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="instagram" class="col-sm-3 col-form-label">instagram</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="instagram"
                                               value="{{ old('instagram') }}"     name="instagram" >

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="facebook" class="col-sm-3 col-form-label">facebook</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="facebook"
                                               value="{{ old('facebook') }}"    name="facebook" >

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="youtube" class="col-sm-3 col-form-label">youtube</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="youtube"
                                               value="{{ old('youtube') }}"     name="youtube" >

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="twitter" class="col-sm-3 col-form-label">twitter</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="twitter"
                                               value="{{ old('twitter') }}"     name="twitter">

                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="meta_title" class="col-sm-3 col-form-label">Meta Title</label>
                                    <div class="col-sm-9">
                                        <textarea id="meta_title" class="form-control" rows="5" name="meta_title">{{old('meta_title')}}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="meta_keywords" class="col-sm-3 col-form-label">Meta Keywords</label>
                                    <div class="col-sm-9">
                                        <textarea id="meta_keywords" class="form-control" rows="5" name="meta_keywords">{{old('meta_keywords')}}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="meta_description" class="col-sm-3 col-form-label">Meta Description</label>
                                    <div class="col-sm-9">
                                        <textarea id="meta_description" class="form-control" rows="5" name="meta_description">{{old('meta_description')}}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="priority" class="col-sm-3 col-form-label">Priority</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="priority"
                                               value="{{ old('priority') }}"      name="priority" >
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="video_url" class="col-sm-3 col-form-label">Add Video URL</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="video_url"
                                               value="{{ old('video_url') }}"     name="video_url" >

                                    </div>
                                </div>




                                <div class="row mb-4">
                                    <div class="row justify-content-end">
                                        <div class="col-sm-9">
                                            <div>
                                                <button type="submit" class="btn btn-primary w-md">Add</button>
                                                <p>You can add photos after creating an artist.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-4">
                                    <label for="brief" class="col-sm-3 col-form-label">Brief</label>
                                    <div class="col-sm-9">
                                        <textarea id="brief" class="form-control" rows="5" name="brief">{{old('brief')}}</textarea>
                                        <span class="alert-danger" role="alert">
                                                <strong> {!! $errors->first('brief', '<h6 class="alert-danger">:message</h6>') !!}</strong>
                                            </span>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="paragraph1" class="col-sm-3 col-form-label">First Paragraph</label>
                                    <div class="col-sm-9">
                                        <textarea id="paragraph1" class="form-control" rows="12" name="paragraph1">{{old('paragraph1')}}</textarea>
                                        <span class="alert-danger" role="alert">
                                                <strong> {!! $errors->first('paragraph1', '<h6 class="alert-danger">:message</h6>') !!}</strong>
                                            </span>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="paragraph2" class="col-sm-3 col-form-label">Second Paragraph</label>
                                    <div class="col-sm-9">
                                        <textarea id="paragraph2" class="form-control" rows="12" name="paragraph2">{{old('paragraph2')}}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="paragraph3" class="col-sm-3 col-form-label">Third Paragraph</label>
                                    <div class="col-sm-9">
                                        <textarea id="paragraph3" class="form-control" rows="12" name="paragraph3">{{old('paragraph3')}}</textarea>
                                    </div>
                                </div>
                                <div>

                                </div>
                                <div class="row mb-4">
                                    <label for="paragraph4" class="col-sm-3 col-form-label">Fourth Paragraph</label>
                                    <div class="col-sm-9">
                                        <textarea id="paragraph4" class="form-control" rows="12" name="paragraph4">{{old('paragraph4')}}</textarea>
                                    </div>
                                </div>


                                <div class="row mb-4">


                                            <label for="paragraph4" class="col-sm-3 col-form-label">Fields</label>
                                            <div class="col-sm-9">


                                            @foreach($categories as $key=> $category)

                                                        <div class="form-check form-check-primary mb-3">
                                                            <input class="form-check-input" name="checkbox_{{$key}}" id="checkbox_{{$key}}" type="checkbox" id="formCheckcolor1">
                                                            <label class="form-check-label" for="formCheckcolor1">
                                                                {{$category->name}}
                                                            </label>
                                                        </div>


                                            @endforeach

                                            </div>
                                        </div>
                                    </div>





                            </div>
                        </div>
                    </div>

                </div> <!-- end col -->





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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script language="javascript" type="text/javascript">
        function limitText(limitField, limitNum) {
            if (limitField.value.length > limitNum) {
                limitField.value = limitField.value.substring(0, limitNum);
            }
        }


    </script>

    <script src="{{ URL::asset('/assets/libs/dropzone/dropzone.min.js') }}"></script>


    <script type="text/javascript">

        Dropzone.options.myDropzone ={
            maxFilesize: 10,
            renameFile: function (file) {
                var dt = new Date();
                var time = dt.getTime();
                return time + file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 60000,
            dictDefaultMessage: 'Drag an image here to upload.Maximum 10 files.',
            success: function (file, response) {
                console.log(response);
            },
            error: function (file, response) {
                return false;
            }
        };
    </script>
@endsection
