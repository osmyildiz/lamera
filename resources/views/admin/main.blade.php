@extends('admin.layouts.master')

@section('title') FAQ @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    @component('admin.components.breadcrumb')
        @slot('li_1') Admin Panel @endslot
        @slot('title') ÖZET BÖLÜMÜ @endslot
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
    <form method="POST" class="form-horizontal" action="/add-summary" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Yeni özet bilgi ekleyiniz</h4>

                        <div class="mb-4 row">
                            <label for="name" class="col-md-3 col-form-label">Başlık</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" id="name" name="name">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="number" class="col-sm-3 col-form-label">Değeri</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="number"
                                       name="number" required>

                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="priority" class="col-sm-3 col-form-label">Priority</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="priority"
                                       name="priority" required>

                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="url" class="col-sm-3 col-form-label">Icon Resmi</label>
                            <div class="col-sm-9">
                                <div class="input-group ">
                                    <input type="file" class="form-control" id="url" name="url" >

                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="row justify-content-end">
                                <div class="col-sm-9">


                                    <div>
                                        <button type="submit" class="btn btn-primary w-md">Ekle</button>
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

                    <h4 class="card-title">Özet Bilgiler</h4>
                    <p class="card-title-desc">Tüm özet bilgileri buradan inceleyebilirsiniz.</p>

                    <div class="table-responsive">

                        <table id="today_table" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Icon Resmi</th>
                                <th>Başlık</th>
                                <th>Değeri</th>
                                <th>Priority</th>
                                <th>Edit/Delete</th>
                            </tr>
                            </thead>


                            <tbody>
                            @if(count($summaries)==0)
                                <td colspan="8">No record found</td>
                            @else

                                @foreach($summaries as $key=>$summary)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td><div class="media" style="background-color: darkblue;width:75px;height:75px">
                                                <div class="me-3">
                                                    <img src="{{url($summary->icon==NULL?"":$summary->icon)}}" alt=""
                                                         style="display:block;width:75px;height:75px" >
                                                </div>
                                            </div></td>
                                        <td>{{$summary->name}}</td>
                                        <td>{{$summary->number}}</td>
                                        <td>{{$summary->priority}}</td>





                                        <td>
                                            <ul class="list-inline font-size-20 contact-links mb-0">

                                                <li class="list-inline-item px-1">
                                                    <a href="{{route('summary.edit',$summary->id)}}" title="edit" class="btn btn-xs btn-warning text-white"><i class="bx bxs-edit"></i></a>
                                                </li>
                                                <li class="list-inline-item px-1">
                                                    <form method="POST" action="{{ route('summary.delete',$summary->id) }}">
                                                        @csrf
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button type="submit" class="btn btn-xs btn-danger  show_confirm" data-toggle="tooltip" title='Delete'><i class="bx bxs-trash"></i></button>
                                                    </form>
                                                <!--<a href="{{route('summary.delete',$summary->id)}}" title="delete"><i class="bx bxs-trash"></i></a>-->
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
                        title: `Bu kaydı silmek istediğinizden emin misiniz?`,
                        text: "Onayladığınızda kayıt tamamen silinecektir.",
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
