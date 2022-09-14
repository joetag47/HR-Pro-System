@extends('layouts.sidebar_menu')
@section('tab-pane')
    @include('layouts.tab_panes.company_profile_pane')
@endsection
@push('page-css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/kt-2.7.0/r-2.3.0/sc-2.0.7/sb-1.3.4/sp-2.0.2/sl-1.4.0/datatables.min.css"/>
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
                        <h3 class="card-title">Employee Details ({{ $employee->name }})</h3>
                        {{--                        <div>--}}
                        {{--                            <a href="" class="btn btn-outline-primary btn-sm mt-4">View All Deals</a>--}}
                        {{--                        </div>--}}
                    </div>
                    <div class="card-body">
                        @include('layouts.errors')

                    </div>
                </div>
            </div>
        </div>
        @endsection

