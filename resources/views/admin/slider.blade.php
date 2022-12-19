@extends('admin.layouts.master')

@section('title') SLIDERS @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    @component('admin.components.breadcrumb')
        @slot('li_1') Admin Panel @endslot
        @slot('title') Homepage Slider Section @endslot
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
    <form method="POST" class="form-horizontal" action="/add-slider" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <h4 class="card-title">Add New Slider</h4>

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">

                        <div class="row mb-4">
                            <label for="url" class="col-sm-3 col-form-label">Image/Video</label>
                            <div class="col-sm-9">

                            <div class="input-group">
                                <input type="file" class="form-control" id="url" name="url" >

                            </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="uptitle" class="col-sm-3 col-form-label">Up Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="uptitle"
                                       name="uptitle">

                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="downtitle" class="col-sm-3 col-form-label">Down Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="downtitle"
                                       name="downtitle">

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
                            <label for="is_active" class="col-sm-3 col-form-label">Video?</label>
                            <div class="col-sm-9">
                                <input class="form-check-input" type="checkbox" id="is_video" name="is_video">

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

                    <h4 class="card-title">Sliders</h4>

                    <div class="table-responsive">

                        <table id="today_table" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>img</th>
                                <th>Up Title</th>
                                <th>Down Title</th>
                                <th>Enable?</th>
                                <th>Video?</th>
                                <th>Priority</th>
                                <th>Edit/Delete</th>
                            </tr>
                            </thead>


                            <tbody>
                            @if(count($sliders)==0)
                                <td colspan="8">No record found</td>
                            @else


                                @foreach($sliders as $key=>$slider)
                                    @if($slider->is_video==0)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td><div class="media">
                                                <div class="me-3">
                                                    <img src="{{url($slider->url==NULL?"":$slider->url)}}" alt=""
                                                         style="display:block;" width="200px" height="200px">
                                                </div>
                                            </div></td>

                                        <td>{{$slider->uptitle}}</td>
                                        <td>{{$slider->downtitle}}</td>
                                        <td>{{$slider->is_active}}</td>
                                        <td>{{$slider->is_video}}</td>
                                        <td>{{$slider->priority}}</td>

                                        <td>
                                            <ul class="list-inline font-size-20 contact-links mb-0">

                                                <li class="list-inline-item px-1">
                                                    <a href="{{route('slider.edit',$slider->id)}}" title="edit" class="btn btn-xs btn-warning"><i class="bx bxs-edit text-white"></i></a>
                                                </li>
                                                <li class="list-inline-item px-1">
                                                    <form method="POST" action="{{ route('slider.delete',$slider->id) }}">
                                                        @csrf

                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button type="submit" class="btn btn-xs btn-danger  show_confirm" data-toggle="tooltip" title='Delete'><i class="bx bxs-trash"></i></button>
                                                    </form>
                                                </li>

                                            </ul>
                                        </td>
                                    </tr>
                                    @else
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td><div class="media">
                                                    <div class="me-3">
                                                        <iframe class="embed-responsive-item" src="{{url($slider->url==NULL?"":$slider->url)}}" controls="1" frameborder="1" allowfullscreen width="200px" height="200px"></iframe>

                                                    </div>
                                                </div></td>

                                            <td>{{$slider->uptitle}}</td>
                                            <td>{{$slider->downtitle}}</td>
                                            <td>{{$slider->is_active}}</td>
                                            <td>{{$slider->is_video}}</td>
                                            <td>{{$slider->priority}}</td>

                                            <td>
                                                <ul class="list-inline font-size-20 contact-links mb-0">

                                                    <li class="list-inline-item px-1">
                                                        <a href="{{route('slider.edit',$slider->id)}}" title="edit" class="btn btn-xs btn-warning"><i class="bx bxs-edit text-white"></i></a>
                                                    </li>
                                                    <li class="list-inline-item px-1">
                                                        <form method="POST" action="{{ route('slider.delete',$slider->id) }}">
                                                            @csrf

                                                            <input name="_method" type="hidden" value="DELETE">
                                                            <button type="submit" class="btn btn-xs btn-danger  show_confirm" data-toggle="tooltip" title='Delete'><i class="bx bxs-trash"></i></button>
                                                        </form>
                                                    </li>

                                                </ul>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach

                            @endif

                            </tbody>

                        </table>



                    </div></div>



            </div>

        </div>
        <div class="d-flex justify-content-center"></div>
    </div>



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
