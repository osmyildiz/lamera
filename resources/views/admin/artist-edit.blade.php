@extends('admin.layouts.master')

@section('title') Artist Edit Page @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('/assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

    @component('admin.components.breadcrumb')
        @slot('li_1') Admin Panel @endslot
        @slot('title') Artist Edit @endslot
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
        <form method="POST" class="form-horizontal" action="/artist-update/{{$record->id}}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <h4 class="card-title mb-4">Edit</h4>
                <div class="row">

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">


                                <div class="row mb-4" >
                                    <label for="cover_img" class="col-sm-3 col-form-label"><div class="me-3">

                                            <img src="{{url($record->cover_img)}}" alt=""
                                                 style="display:block;background-color: black" width="100" height="70">

                                        </div>
                                    </label>

                                    <div class="col-sm-9">

                                        <div class="input-group">
                                            <input type="file" class="form-control" id="cover_img" name="cover_img" >

                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="name" class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="name"
                                               name="name" value="{{$record->name}}">

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="surname" class="col-sm-3 col-form-label">Surname</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="surname"
                                               name="surname" value="{{$record->surname}}">

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="phone" class="col-sm-3 col-form-label">Phone</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="phone"
                                               name="phone" value="{{$record->phone}}">

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="email" class="col-sm-3 col-form-label">email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="email"
                                               name="email" value="{{$record->email}}">

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="city" class="col-sm-3 col-form-label">City</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="city"
                                               name="city" value="{{$record->city}}">

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="website" class="col-sm-3 col-form-label">Website</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="website"
                                               name="website" value="{{$record->website}}">

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="instagram" class="col-sm-3 col-form-label">instagram</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="instagram"
                                               name="instagram" value="{{$record->instagram}}">

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="facebook" class="col-sm-3 col-form-label">facebook</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="facebook"
                                               name="facebook" value="{{$record->facebook}}">

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="youtube" class="col-sm-3 col-form-label">youtube</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="youtube"
                                               name="youtube" value="{{$record->youtube}}">

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
                                    <label for="video_url" class="col-sm-3 col-form-label">Video URL</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="video_url"
                                               name="video_url" value="{{$record->video_url}}">

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="priority" class="col-sm-3 col-form-label">Priority</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" id="priority"
                                               name="priority" value="{{$record->priority}}">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="is_active" class="col-sm-3 col-form-label">Enable?</label>
                                    <div class="col-sm-9">
                                        <input class="form-check-input" type="checkbox" id="is_active" name="is_active"  {{$record->is_active ==1?"checked":""}}>

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
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-4">
                                    <label for="brief" class="col-sm-3 col-form-label">Brief</label>
                                    <div class="col-sm-9">
                                        <textarea id="brief" class="form-control" rows="5" name="brief">{{$record->brief}}</textarea>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <label for="paragraph1" class="col-sm-3 col-form-label">First Paragraph</label>
                                    <div class="col-sm-9">
                                        <textarea id="paragraph1" class="form-control" rows="12" name="paragraph1">{{$record->paragraph1}}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="paragraph2" class="col-sm-3 col-form-label">Second Paragraph</label>
                                    <div class="col-sm-9">
                                        <textarea id="paragraph2" class="form-control" rows="12" name="paragraph2">{{$record->paragraph2}}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="paragraph3" class="col-sm-3 col-form-label">Third Paragraph</label>
                                    <div class="col-sm-9">
                                        <textarea id="paragraph3" class="form-control" rows="12" name="paragraph3">{{$record->paragraph3}}</textarea>
                                    </div>
                                </div>
                                <div>

                                </div>
                                <div class="row mb-4">
                                    <label for="paragraph4" class="col-sm-3 col-form-label">Fourth Paragraph</label>
                                    <div class="col-sm-9">
                                        <textarea id="paragraph4" class="form-control" rows="12" name="paragraph4">{{$record->paragraph4}}</textarea>
                                    </div>
                                </div>


                                <div class="row mb-4">


                                            <label for="paragraph4" class="col-sm-3 col-form-label">Fields</label>
                                            <div class="col-sm-9">


                                            @foreach($categories as $key=> $category)

                                                    @if(in_array($category->id, $fi))
                                                        <div class="form-check form-check-primary mb-3">
                                                            <input name="checkbox_{{$key}}" id="checkbox_{{$key}}" class="form-check-input" type="checkbox" id="formCheckcolor1" checked>
                                                            <label class="form-check-label" for="formCheckcolor1">
                                                                {{$category->name}}
                                                            </label>
                                                        </div>
                                                    @else
                                                        <div class="form-check form-check-primary mb-3">
                                                            <input class="form-check-input" name="checkbox_{{$key}}" id="checkbox_{{$key}}" type="checkbox" id="formCheckcolor1">
                                                            <label class="form-check-label" for="formCheckcolor1">
                                                                {{$category->name}}
                                                            </label>
                                                        </div>
                                                    @endif



                                            @endforeach

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

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Photos</h4>

                    <div class="table-responsive">

                        <table id="today_table" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>img</th>
                                <th>Delete</th>
                            </tr>
                            </thead>


                            <tbody>
                            @if(count($photos)==0)
                                <td colspan="8">No record found</td>
                            @else


                                @foreach($photos as $key=>$photo)

                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td><div class="media">
                                                    <div class="me-3">
                                                        <img src="{{url($photo->img==NULL?"":$photo->img)}}" alt=""
                                                             style="display:block;" width="200px" height="200px">
                                                    </div>
                                                </div>
                                            </td>


                                            <td>
                                                <ul class="list-inline font-size-20 contact-links mb-0">

                                                    <li class="list-inline-item px-1">
                                                        <form method="POST" action="{{ route('photo.delete',$photo->id) }}">
                                                            @csrf

                                                            <input name="_method" type="hidden" value="DELETE">
                                                            <button type="submit" class="btn btn-xs btn-danger  show_confirm" data-toggle="tooltip" title='Delete'><i class="bx bxs-trash"></i></button>
                                                        </form>
                                                    </li>

                                                </ul>
                                            </td>
                                        </tr>

                                @endforeach

                            @endif

                            </tbody>

                        </table>



                    </div></div>



            </div>

        </div>
        <div class="d-flex justify-content-center"></div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="flash-message">
                        @foreach (['success1'] as $msg)
                            @if(Session::has($msg))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <i class="mdi mdi-check-all me-2"></i>
                                    {{ Session::get($msg) }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

                            @endif
                        @endforeach
                    </div>

                    <h4 class="card-title">Add new photos</h4>
                    <p class="card-title-desc">Drag and Drop Images (png,jpg,jpeg)
                    </p>

                    <div>
                        <form action="/add-photos/{{$record->id}}" method="POST" enctype="multipart/form-data" class="dropzone" id='image-upload'>
                            @csrf
                            <div class="fallback">
                                <input name="file" type="file" multiple="multiple">
                            </div>
                            <div class="dz-message needsclick">
                                <div class="mb-3">
                                    <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div> <!-- end col -->

    </div>
    <div class="row justify-content-end">
        <div class="col-sm-12">
            <div>
                <form method="POST" action="{{ route('artist.delete',$record->id) }}" name="deleteform" id="deleteform">
                    @csrf

                    <input name="_method" type="hidden" value="DELETE">
                    <div class="d-grid gap-2">

                        <button type="submit" class="btn btn-danger btn-lg show_confirm btn-sm waves-effect waves-light" data-toggle="tooltip" title='Delete'>DELETE ARTIST
                        </button>
                    </div>

                </form>
            </div>
        </div>
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
    <script>
        $(document).ready(function(){
            $('.alert-success').fadeIn().delay(3000).fadeOut('slow');
            $('.alert-danger').fadeIn().delay(3000).fadeOut('slow');
        });
    </script>
    <script type="text/javascript">

        $('.show_confirm').click(function(event) {
            var form =  $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: 'Are you sure you want to delete the record?',
                text: "If you delete, it will be gone forever.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        $("#deleteform").submit();
                    }
                });
        });

    </script>
    <script src="{{ URL::asset('/assets/libs/dropzone/dropzone.min.js') }}"></script>


    <script type="text/javascript">
        Dropzone.options.imageUpload ={
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
