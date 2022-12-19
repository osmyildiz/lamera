@extends('admin.layouts.master')

@section('title') WHAT WE OFFER @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    @component('admin.components.breadcrumb')
        @slot('li_1') Admin Panel @endslot
        @slot('title') WHAT WE OFFER PAGE @endslot
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
        <form method="POST" class="form-horizontal" action="/update-offer-page" enctype="multipart/form-data">
            @csrf
        <div class="card-body">
                <h4 class="card-title mb-4">Edit What We Offer Page</h4>
            <p>Edit and update what we offer page contents.</p>
                <div class="row">

                    <div class="col-xl-12">
                        <div class="row mb-12">
                            <label for="right_title" class="col-sm-3 col-form-label">Left Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="left_title"
                                       value="{{$offer->left_title}}"  >

                            </div>
                        </div>
                        <div class="row mb-12">
                            <label for="right_title" class="col-sm-3 col-form-label">Right Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="right_title"
                                       value="{{$offer->right_title}}"  >

                            </div>
                        </div>


                        <div class="row justify-content-end">
                            <div class="col-sm-12">


                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Update</button>
                                </div>
                            </div>
                        </div>



                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <!-- end col -->
                </div>
            </div>
        </form>
    </div>



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
@endsection
