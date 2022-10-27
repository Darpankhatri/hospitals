@extends('admin.layout.master')

@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">{{ ucwords($slug) }}</h4>
                        <div>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Extra</a></li> --}}
                                <li class="breadcrumb-item active">{{ Str::title($slug) }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="widget-rounded-circle card bg-dark shadow-none data-model-btn" style="cursor: pointer">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <h2 class="text-white mt-2">{{ Str::title($slug) }}</h2>
                                    {{-- <p class="text-white mb-0 text-truncate">{{ Auth::user()->name }}</p> --}}
                                </div>
                                <div class="col-6">
                                    <div class="avatar-lg rounded-circle bg-soft-light ms-auto">
                                        <i class="fe-layers font-24 avatar-title text-white"></i>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div>
                    </div> <!-- end widget-rounded-circle-->
                </div> <!-- end col-->
            </div>
        </div>

        <i style="color: green"></i>
        {{-- <table id="basic-datatable" class="table activate-select dt-responsive nowrap w-100"> --}}
        {{-- <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100"> --}}

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">{{ Str::title($slug) }} Record<hr></h4>
                            {!! $body !!}

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>


        

    </div>

@endsection


@section('css')

@endsection

@section('js')

@endsection
