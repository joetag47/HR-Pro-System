@extends('layouts.sidebar_menu')
@section('tab-pane')
    @include('layouts.tab_panes.company_profile_pane')
@endsection

@push('page-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('Datatable/datatable.min.css') }}"/>
    <style>
        .nav.nav-pills .nav-link{
            color: #fff !important;
            cursor: pointer;
        }
        .nav.nav-pills .nav-link.active{
            color: #000 !important;
        }

        .nav.nav-pills .nav-link:hover{
            background: #1BC5BD !important;
        }
    </style>
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
                            <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Company Details : {{ $company->name }}</h2>
                            <!--end::Page Title-->
                        </div>
                        <!--end::Page Heading-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Toolbar-->
                    <div class="d-flex align-items-center flex-wrap">
                        <!--begin::Button-->
                        <a href="{{ route('company.employee.create') }}" class="btn btn-primary btn-shadow">
                            <i class="flaticon-plus"></i> Add User
                        </a>
                    </div>
                </div>
            </div>
            <div class="container" id="pageSection">
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-body">
                        <!--begin::Details-->
                        <div class="d-flex mb-9">
                            <!--begin: Pic-->
                            <div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">
                                    <div class="symbol symbol-50 symbol-lg-120">
                                        <img src="{{ asset(auth()->user()->company->logo) }}" alt="image" id="companyLogo">
                                    </div>
                                <div class="symbol symbol-50 symbol-lg-120 symbol-primary d-none">
                                    <span class="font-size-h3 symbol-label font-weight-boldest">JM</span>
                                </div>
                            </div>
                            <!--end::Pic-->
                            <!--begin::Info-->
                            <div class="flex-grow-1">
                                <!--begin::Title-->
                                <div class="d-flex justify-content-between flex-wrap mt-1">
                                    <div class="d-flex mr-3">
                                        <a href="#" class="text-dark-75 text-hover-primary font-size-h5 font-weight-bold mr-3" id="companyName">{{ auth()->user()->company->name }}</a>
                                        <a href="#">
                                            <i class="flaticon2-correct text-success font-size-h5"></i>
                                        </a>
                                    </div>
                                    <div class="my-lg-0 my-3">
                                        <a href="#updateCompany" class="btn btn-sm btn-light-warning font-weight-bolder text-uppercase mr-3"><span class="fa fa-edit"></span>Update</a>
                                    </div>
                                </div>
                                <!--end::Title-->
                                <!--begin::Content-->
                                <div class="d-flex flex-wrap justify-content-between mt-1">
                                    <div class="d-flex flex-column flex-grow-1 pr-8">
                                        <div class="d-flex flex-wrap mb-4">
                                            <a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                                <i class="flaticon2-new-email mr-2 font-size-lg"></i><span id="companyEmail">{{ auth()->user()->company->email }}</span></a>
                                            <a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                                <i class="fa fa-phone mr-2 font-size-lg"></i><span id="companyPhone">{{ auth()->user()->company->phone }}</span></a>
                                            <a href="#" class="text-dark-50 text-hover-primary font-weight-bold">
                                                <i class="flaticon2-placeholder mr-2 font-size-lg"></i><span id="companyAddress">{{ auth()->user()->company->address }}</span></a>
                                        </div>
                                        <span class="font-weight-bold text-dark-50" id="companyDescription">{{ auth()->user()->company->description }}</span>
                                    </div>
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Details-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="card card-custom gutter-b">
                            <div class="card-header p-5">
                                <h4>Update Company Profile</h4>
                            </div>
                            <div class="card-body">
                                <form class="row updateCompany" id="updateCompany" method="POST" action="{{ route('company.profile.update') }}">
                                    @csrf
                                    @method('POST')
                                    <div class="form-group col-md-12">
                                        <label>Name of Organization <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="name_of_organization" value="{{ $company->name }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Sector <span class="text-danger">*</span></label>
                                        <select class="form-control" name="sector">
                                            <option value="">-- Select Organization Type --</option>
                                            @foreach($business_types as $type)
                                                <option value="{{ $type->id }}" {{ auth()->user()->company->sector_id == $type->id ? 'selected' : null }}>{{ $type->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Organization's Email <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="email" value="{{ $company->email }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Address <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="address" value="{{ $company->address }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Phone <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="phone" value="{{ $company->phone }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Logo <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control" name="logo">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Description</label>
                                        <textarea class="form-control" name="description" style="resize: none;" rows="8">{{ $company->description }}</textarea>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-success">Update Company</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card card-custom gutter-b">
                            <div class="card-header p-5">
                                <h4>Departments</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    {!! $departments->table(['id' => 'departments', 'class' => 'table table-hover']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header p-5">
                                <h4>Employees</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    {!! $employees->table(['id' => 'employees', 'class' => 'table table-hover']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @push('page-js')

        {!! $employees->scripts() !!}
        {!! $departments->scripts() !!}
        <script type="text/javascript" src="{{ asset('Datatable/pdfmake.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('Datatable/pdfmake_font.js') }}"></script>
        <script type="text/javascript" src="{{ asset('Datatable/datatable.min.js') }}"></script>
    @endpush
@endsection
