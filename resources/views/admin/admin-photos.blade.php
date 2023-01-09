@extends('admin.layouts.master')

@section('title') GALLERY ADMIN PANEL @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    @component('admin.components.breadcrumb')
        @slot('li_1') Admin Panel @endslot
        @slot('title') Gallery @endslot
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
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Add Photo/Photos</h4>

                        <form class="form-horizontal" enctype="multipart/form-data" method="post" action="/add-photo">
                            @csrf

                            <div class="mb-4 row">
                                <label for="time" class="col-md-3 col-form-label">Category</label>

                                <div class="col-sm-9">
                                    <select id="time" class="form-select" name="category" required>
                                        <option value="0" selected>Select Category</option>
                                        @foreach($kategori_all as $kategori)
                                            <option value="{{$kategori->id}}">{{$kategori->name}}</option>
                                        @endforeach
                                    </select>

                                </div>

                            </div>
                            <div>

                                <input required type="file" class="form-control" name="image[]" id="images" multiple="multiple" >
                            </div>
                            <p>Photos max size should be 2MB</p>
                            <div>
                                <button type="submit" class="btn btn-primary w-md">Add Photo</button>
                            </div>

                        </form>

                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Add New Category</h4>
                    <form method="POST" class="form-horizontal" action="/add-photo-category" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4 row">
                            <label for="name_tr" class="col-md-3 col-form-label">Category Name</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text"
                                       id="name" name="name" required>
                            </div>
                        </div>


                        <div class="row mb-4">
                            <div class="row justify-content-end">
                                <div class="col-sm-9">
                                    <div>
                                        <button type="submit" class="btn btn-primary w-md">Add Category</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">CATEGORIES</h4>

                    <div class="table-responsive">

                        <table id="today_table" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Active/Passive</th>
                                <th>Priority</th>
                                <th>Edit</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach($kategori_all as $key=>$kategori)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$kategori->name}}</td>
                                    <td>{{$kategori->is_active==1?"Active":"Inactive"}}</td>
                                    <td>{{$kategori->priority}}</td>

                                    <td>
                                        <ul class="list-inline font-size-20 contact-links mb-0">

                                            <li class="list-inline-item px-1">
                                                <a href="{{route('photocategory.edit',$kategori->id)}}" title="edit"><i class="bx bxs-edit"></i></a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>

                        </table>

                    </div></div>

            </div>
        </div>


    </div>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">PHOTOS</h4>

                    <div class="table-responsive">

                        <table id="today_table" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Category</th>
                                <th>Url</th>
                                <th>Photo</th>
                                <th>Active/Passive</th>
                                <th>Edit/Delete</th>
                            </tr>
                            </thead>


                            <tbody>
                            @if($photo_all->count()==0)
                                <td colspan="8">No record found</td>
                            @else

                                @foreach($photo_all as $key=>$photo)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$photo->name}}</td>
                                        <td>{{$photo->url}}</td>
                                        <td><img src="{{url($photo->url)}}" alt=""
                                                 style="display:block;" width="100" height="70"></td>
                                        <td>{{$photo->is_active==1?"Active":"Passive"}}</td>



                                        <td>
                                            <ul class="list-inline font-size-20 contact-links mb-0">

                                                <li class="list-inline-item px-1">
                                                    <a href="{{route('photo.edit',$photo->id)}}" title="edit"><i class="bx bxs-edit"></i></a>
                                                </li>
                                                <li class="list-inline-item px-1">
                                                    <a href="{{route('photo.delete',$photo->id)}}" title="delete"><i class="bx bxs-trash"></i></a>
                                                </li>

                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach

                            @endif

                            </tbody>

                        </table>
                        {{$photo_all->links("pagination::bootstrap-4")}}


                    </div></div>



            </div>

        </div> <!-- end col -->

    </div> <!-- end row -->
    <div class="d-flex justify-content-center"></div>



@endsection
@section('script')
    <!-- Required datatable js -->
    <script src="{{ URL::asset('/assets/libs/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
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

        function submitForm() {

            var selectedOption = $('#select-action').val();
            var url = "/admin-photos/"+selectedOption;

            location.href=url;
            return false;
        }
    </script>


@endsection
