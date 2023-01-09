@extends('admin.layouts.master')

@section('title') MENU @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    @component('admin.components.breadcrumb')
        @slot('li_1') Admin Panel @endslot
        @slot('title') MENU @endslot
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
                    <h4 class="card-title mb-4">Add Menu</h4>
                    <form method="POST" class="form-horizontal" action="/add-menu" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4 row">
                            <label for="time" class="col-md-3 col-form-label">Category</label>

                            <div class="col-sm-9">
                                <select id="time" class="form-select" name="category" required>
                                    <option selected>Select Category</option>
                                    @foreach($kategori_all as $kategori)
                                    <option value="{{$kategori->id}}">{{$kategori->name}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="mb-4 row">
                            <label for="name" class="col-md-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" id="name" name="name">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="price" class="col-sm-3 col-form-label">Price</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="price"
                                       name="price">

                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="description" class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                            <textarea id="description" class="form-control"  rows="4" name="description"
                                      ></textarea>
                            </div></div>
                        <div class="row mb-4">
                            <label for="priority" class="col-sm-3 col-form-label">Priority</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="priority"
                                       name="priority" required>

                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="row justify-content-end">
                                <div class="col-sm-9">

                                    <div>
                                        <button type="submit" class="btn btn-primary w-md">SAVE</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Add Menu Category</h4>
                    <form method="POST" class="form-horizontal" action="/add-foodtype" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4 row">
                            <label for="name" class="col-md-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text"
                                       id="name" name="name" required>
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <label for="priority" class="col-md-3 col-form-label">Priority</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="number"
                                       id="priority" name="priority" required>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="row justify-content-end">
                                <div class="col-sm-9">


                                    <div>
                                        <button type="submit" class="btn btn-primary w-md">SAVE</button>
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
                                <th>Active/Inactive</th>
                                <th>Priority</th>
                                <th>Edit/Delete</th>
                            </tr>
                            </thead>


                            <tbody>
                            @if($kategori_all->count()==0)
                                <td colspan="8">Bugüne ait bir kayıt bulunamadı.</td>
                            @else

                                @foreach($kategori_all as $key=>$kategori)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$kategori->name}}</td>
                                        <td>{{$kategori->is_active==1?"Active":"Inactive"}}</td>
                                        <td>{{$kategori->priority}}</td>

                                        <td>
                                            <ul class="list-inline font-size-20 contact-links mb-0">

                                                <li class="list-inline-item px-1">
                                                    <a href="{{route('foodtype.edit',$kategori->id)}}" title="edit"><i class="bx bxs-edit"></i></a>
                                                </li>
                                                <li class="list-inline-item px-1">
                                                    <a href="{{route('foodtype.delete',$kategori->id)}}" title="delete"><i class="bx bxs-trash"></i></a>
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

    </div>




    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">MENU</h4>

                    <form method="POST" class="form-horizontal" onsubmit="return submitForm()" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">

                                <div class="mb-4 row">
                                    <label for="time" class="col-md-3 col-form-label">Category</label>
                                    @if($data==0)
                                        <td colspan="8">No records found</td>
                                    @else

                                        <div class="col-sm-9">
                                            <select id="select-action" class="form-select" name="action">
                                                <option value="{{$kategori1->id}}" selected>{{$kategori1->name}}</option>
                                                @foreach($kategori_all as $kategori)
                                                    @if($kategori->id !=$kategori1->id)
                                                        <option value="{{$kategori->id}}">{{$kategori->name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>

                                        </div>
                                </div>

                                @if($menu_all->count()!=0)

                                    <div class="row justify-content-end">
                                        <div class="col-sm-9">


                                            <div>
                                                <button type="submit" class="btn btn-primary w-md">GO</button>
                                            </div>
                                        </div>
                                    </div>
                            @endif



                            <!-- end card -->
                            </div>
                            <!-- end col -->


                        </div>
                </div>
                </form>

                <div class="table-responsive">

                    <table id="today_table" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Priority</th>
                            <th>Edit/Delete</th>
                        </tr>
                        </thead>


                        <tbody>
                        @if($menu_all->count()==0)
                            <td colspan="8">No records found</td>
                        @else

                            @foreach($menu_all as $key=>$menu)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$menu->name}}</td>
                                    <td>{{$menu->price}}</td>
                                    <td>{{$menu->description}}</td>
                                    <td>{{$menu->priority}}</td>



                                    <td>
                                        <ul class="list-inline font-size-20 contact-links mb-0">

                                            <li class="list-inline-item px-1">
                                                <a href="{{route('menu.edit',$menu->id)}}" title="edit"><i class="bx bxs-edit"></i></a>
                                            </li>
                                            <li class="list-inline-item px-1">
                                                <a href="{{route('menu.delete',$menu->id)}}" title="delete"><i class="bx bxs-trash"></i></a>
                                            </li>

                                        </ul>
                                    </td>
                                </tr>
                            @endforeach

                        @endif

                        </tbody>

                    </table>
                    {{$menu_all->links("pagination::bootstrap-4")}}


                    @endif

                </div></div>



        </div>

    </div>
    <div class="d-flex justify-content-center"></div>



@endsection
@section('script')
    <!-- Required datatable js -->
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
            var url = "/admin-menu/"+selectedOption;

            location.href=url;
            return false;
        }
    </script>
@endsection
