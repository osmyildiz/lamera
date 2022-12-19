@extends('admin.layouts.master')

@section('title') Artist Packages @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    @component('admin.components.breadcrumb')
        @slot('li_1') Admin Panel @endslot
        @slot('title') Artist Packages @endslot
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
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Packages for Artist</h4>


                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#package1" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Package-1</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#package2" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Package-2</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#package3" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                <span class="d-none d-sm-block">Package-3</span>
                            </a>
                        </li>

                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="package1" role="tabpanel">
                            <div class="row">
                                <form method="POST" class="form-horizontal" action="/package-update/1" enctype="multipart/form-data">
                                    @csrf

                                    <div class="col-xl-6">
                                        <div class="card">
                                            <div class="card-body">

                                                <div class="row mb-4">
                                                    <label for="packages1_name" class="col-sm-3 col-form-label">Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="packages1_name"
                                                               name="packages1_name" value="{{$packages[0]->name}}">

                                                    </div>
                                                </div>

                                                <div class="row mb-4">
                                                    <label for="packages1_top_text" class="col-sm-3 col-form-label">Top Text</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="packages1_top_text"
                                                               name="packages1_top_text" value="{{$packages[0]->top_text}}">

                                                    </div>
                                                </div>

                                                <div class="row mb-4">
                                                    <label for="packages1_bottom_text" class="col-sm-3 col-form-label">Bottom Text</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="packages1_bottom_text"
                                                               name="packages1_bottom_text" value="{{$packages[0]->bottom_text}}">

                                                    </div>
                                                </div>

                                                @foreach($item1 as $key=>$it)
                                                    <div class="row mb-4">
                                                        <label for="item_name_{{$it->id}}" class="col-sm-3 col-form-label">Item-{{$key+1}}</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="item_name_{{$it->id}}"
                                                                   name="item_name_{{$it->id}}" value="{{$it->name}}">

                                                        </div>
                                                    </div>

                                                @endforeach





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
                                </form>





                            </div>
                        </div>
                        <div class="tab-pane" id="package2" role="tabpanel">
                            <div class="row">
                                <form method="POST" class="form-horizontal" action="/package-update/2" enctype="multipart/form-data">
                                    @csrf

                                    <div class="col-xl-6">
                                        <div class="card">
                                            <div class="card-body">

                                                <div class="row mb-4">
                                                    <label for="packages2_name" class="col-sm-3 col-form-label">Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="packages2_name"
                                                               name="packages2_name" value="{{$packages[1]->name}}">

                                                    </div>
                                                </div>

                                                <div class="row mb-4">
                                                    <label for="packages2_top_text" class="col-sm-3 col-form-label">Top Text</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="packages2_top_text"
                                                               name="packages2_top_text" value="{{$packages[1]->top_text}}">

                                                    </div>
                                                </div>

                                                <div class="row mb-4">
                                                    <label for="packages2_bottom_text" class="col-sm-3 col-form-label">Bottom Text</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="packages2_bottom_text"
                                                               name="packages2_bottom_text" value="{{$packages[1]->bottom_text}}">

                                                    </div>
                                                </div>

                                                @foreach($item2 as $key=>$it)
                                                    <div class="row mb-4">
                                                        <label for="item_name_{{$it->id}}" class="col-sm-3 col-form-label">Item-{{$key+1}}</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="item_name_{{$it->id}}"
                                                                   name="item_name_{{$it->id}}" value="{{$it->name}}">

                                                        </div>
                                                    </div>

                                                @endforeach





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
                                </form>





                            </div>
                        </div>
                        <div class="tab-pane" id="package3" role="tabpanel">
                            <div class="row">
                                <form method="POST" class="form-horizontal" action="/package-update/3" enctype="multipart/form-data">
                                    @csrf

                                    <div class="col-xl-6">
                                        <div class="card">
                                            <div class="card-body">

                                                <div class="row mb-4">
                                                    <label for="package3_name" class="col-sm-3 col-form-label">Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="package3_name"
                                                               name="package3_name" value="{{$packages[2]->name}}">

                                                    </div>
                                                </div>

                                                <div class="row mb-4">
                                                    <label for="package3_top_text" class="col-sm-3 col-form-label">Top Text</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="package3_top_text"
                                                               name="package3_top_text" value="{{$packages[2]->top_text}}">

                                                    </div>
                                                </div>

                                                <div class="row mb-4">
                                                    <label for="package3_bottom_text" class="col-sm-3 col-form-label">Bottom Text</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="package3_bottom_text"
                                                               name="package3_bottom_text" value="{{$packages[2]->bottom_text}}">

                                                    </div>
                                                </div>

                                                @foreach($item3 as $key=>$it)
                                                    <div class="row mb-4">
                                                        <label for="item_name_{{$it->id}}" class="col-sm-3 col-form-label">item-{{$key+1}}</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="item_name_{{$it->id}}"
                                                                   name="item_name_{{$it->id}}" value="{{$it->name}}">

                                                        </div>
                                                    </div>

                                                @endforeach





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
                                </form>





                            </div>
                        </div>

                    </div>

                </div>
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
