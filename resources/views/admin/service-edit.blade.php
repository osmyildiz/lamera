@extends('admin.layouts.master')

@section('title') Services @endsection

@section('css')
    <!-- DataTables -->
    <link href="{{ asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')

    @component('admin.components.breadcrumb')
        @slot('route') admin-services @endslot
        @slot('li_1') Services @endslot
        @slot('title') Service Edit Page @endslot
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
        <form method="POST" class="form-horizontal" action="/service-update/{{$record->id}}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <h4 class="card-title mb-4">Edit</h4>
                <div class="row">

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">

                                <div class="row mb-4">
                                    <label for="name" class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="name"
                                               name="name" value="{{$record->name}}">

                                    </div>
                                </div>
                                @php
                                $whom = ['Client','Artist'];
                                @endphp
                                <div class="row mb-4">
                                    <label for="whom" class="col-sm-3 col-form-label">Whom</label>
                                    <div class="col-sm-9">
                                        <select id="select-action" class="form-select" name="whom">
                                            @foreach($whom as $who)
                                                <option value="{{$who}}" {{$who == $record->whom?"selected":""}}>{{$who}}</option>
                                            @endforeach

                                        </select>

                                        </span>

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
                                                <button type="submit" class="btn btn-primary w-md">Güncelle</button>
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
