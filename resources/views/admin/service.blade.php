@extends('admin.layouts.master')

@section('title') SERVICES @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    @component('admin.components.breadcrumb')
        @slot('li_1') Admin Panel @endslot
        @slot('title') Services @endslot
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
    <form method="POST" class="form-horizontal" action="/add-service" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <h4 class="card-title">Add New Services</h4>

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">

                        <div class="row mb-4">
                            <label for="name" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name"
                                       name="name">

                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="whom" class="col-sm-3 col-form-label">Whom</label>
                            <div class="col-sm-9">
                                <select id="select-action" class="form-select" name="whom">
                                    <option value="" selected>Select</option>
                                    <option value="Client" >Client</option>
                                    <option value="Artist">Artist</option>

                                </select>

                            </div>
                            </div>

                        <div class="row mb-4">
                            <label for="priority" class="col-sm-3 col-form-label">Priority</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="priority"
                                       name="priority">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="is_active" class="col-sm-3 col-form-label">Enable?</label>
                            <div class="col-sm-9">
                                <input class="form-check-input" type="checkbox" id="is_active" name="is_active"  checked>

                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="row justify-content-end">
                                <div class="col-sm-9">
                                    <div>
                                        <button type="submit" class="btn btn-primary w-md">Add</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>




        </div>
    </form>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Services</h4>

                    <div class="table-responsive">

                        <table id="today_table" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Whom</th>
                                <th>Enable?</th>
                                <th>Priority</th>
                                <th>Edit/Delete</th>
                            </tr>
                            </thead>


                            <tbody>
                            @if(count($records)==0)
                                <td colspan="8">No record found</td>
                            @else


                                @foreach($records as $key=>$record)

                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$record->name}}</td>
                                        <td>{{$record->whom}}</td>
                                        <td>{{$record->is_active}}</td>
                                        <td>{{$record->priority}}</td>

                                        <td>
                                            <ul class="list-inline font-size-20 contact-links mb-0">

                                                <li class="list-inline-item px-1">
                                                    <a href="{{route('service.edit',$record->id)}}" title="edit" class="btn btn-xs btn-warning"><i class="bx bxs-edit text-white"></i></a>
                                                </li>
                                                <li class="list-inline-item px-1">
                                                    <form method="POST" action="{{ route('service.delete',$record->id) }}">
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



    @endsection
    @section('script')
        <!-- Required datatable js -->
            <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
            <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
            <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
            <!-- Datatable init js -->
            <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>
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
                                form.submit();
                            }
                        });
                });

            </script>

@endsection
