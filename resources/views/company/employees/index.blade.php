@extends('layouts.sidebar_menu')
@section('tab-pane')
    @include('layouts.tab_panes.company_profile_pane')
@endsection
@push('page-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('Datatable/datatable.min.css') }}"/>
@endpush
@section('content')
    <!--begin::Wrapper-->
    <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
        <!--begin::Content-->
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            <!--begin::Subheader-->
            <div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
                <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                    <!--begin::Info-->
                    <div class="d-flex align-items-center mr-1">
                        <!--begin::Page Heading-->
                        <div class="d-flex align-items-baseline flex-wrap mr-5">
                            <!--begin::Page Title-->
                            <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Employees</h2>
                            <!--end::Page Title-->
                        </div>
                        <!--end::Page Heading-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Toolbar-->
                    <div class="d-flex align-items-center flex-wrap">
                        <!--begin::Button-->
                        <a href="{{ route('company.employee.create') }}" class="btn btn-primary btn-shadow">
                            <i class="flaticon-plus"></i> Add Employee
                        </a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="card card-custom gutter-b example example-compact shadow-lg">
                    <div class="card-header">
                        <h3 class="card-title">All Employees</h3>
                        {{--                        <div>--}}
                        {{--                            <a href="" class="btn btn-outline-primary btn-sm mt-4">View All Deals</a>--}}
                        {{--                        </div>--}}
                    </div>
                    <div class="card-body">
                        @include('layouts.errors')
                        <div class="table-responsive">
                            {!! $dataTable->table(['class' => 'table table-hover']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
        @push('page-js')
            {!! $dataTable->scripts() !!}
            <script type="text/javascript" src="{{ asset('Datatable/pdfmake.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('Datatable/pdfmake_font.js') }}"></script>
            <script type="text/javascript" src="{{ asset('Datatable/datatable.min.js') }}"></script>
    @endpush
