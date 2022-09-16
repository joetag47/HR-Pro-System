@extends('layouts.sidebar_menu')
@section('tab-pane')
    @include('layouts.tab_panes.company_profile_pane')
@endsection
@push('page-css')
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
                            <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Employee Details</h2>
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
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-body">
                        <!--begin::Details-->
                        <div class="d-flex mb-9">
                            <!--begin: Pic-->
                            <div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">
                                <div class="symbol symbol-50 symbol-lg-120">
                                    <img src="https://preview.keenthemes.com/metronic/theme/html/demo3/dist/assets/media/users/300_1.jpg" alt="image">
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
                                        <a href="#" class="text-dark-75 text-hover-primary font-size-h5 font-weight-bold mr-3">{{ $employee->name }}</a>
                                        <a href="#">
                                            <i class="flaticon2-correct text-success font-size-h5"></i>
                                        </a>
                                    </div>
                                    <div class="my-lg-0 my-3">
                                        <a href="#" class="btn btn-sm btn-light-warning font-weight-bolder text-uppercase mr-3"><span class="fa fa-edit"></span>Update</a>
                                    </div>
                                </div>
                                <!--end::Title-->
                                <!--begin::Content-->
                                <div class="d-flex flex-wrap justify-content-between mt-1">
                                    <div class="d-flex flex-column flex-grow-1 pr-8">
                                        <div class="d-flex flex-wrap mb-4">
                                            <a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                                <i class="flaticon2-new-email mr-2 font-size-lg"></i>{{ $employee->email }}</a>
                                            <a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                                                <i class="flaticon2-calendar-3 mr-2 font-size-lg"></i>{{ $employee->position }}</a>
                                            <a href="#" class="text-dark-50 text-hover-primary font-weight-bold">
                                                <i class="flaticon2-placeholder mr-2 font-size-lg"></i>{{ $employee->department->name ?? '' }}</a>
                                        </div>
{{--                                        <span class="font-weight-bold text-dark-50">I distinguish three main text objectives could be merely to inform people.</span>--}}
{{--                                        <span class="font-weight-bold text-dark-50">A second could be persuade people.You want people to bay objective</span>--}}
                                    </div>
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Details-->
                        <div class="separator separator-solid"></div>
                        <ul class="nav nav-light-success nav-pills nav-fill mt-4" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link btn-sm btn-primary active" data-toggle="pill" role="tab" data-target="#employee_biodata">Employee Biodata</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-sm btn-primary" data-toggle="pill" role="tab" data-target="#contact_info">Contact Info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-sm btn-primary" data-toggle="pill" role="tab" data-target="#family_details">Family Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-sm btn-primary" data-toggle="pill" role="tab" data-target="#work_details">Work Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-sm btn-primary" data-toggle="pill" role="tab" data-target="#educational_background">Education</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end::Card-->
                <div class="card card-custom gutter-b">
                    <div class="tab-content mt-5" id="myTab-tabContent">
                        <div class="tab-pane active" id="employee_biodata" role="tabpanel" aria-labelledby="employee_biodata">
                            <div class=" card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table col-md-7 table-bordered">
                                            <tr><td style="width: 200px; font-weight: bold;">Full Name</td><td>{{ $employee->name }}</td></tr>
                                            <tr><td style="width: 200px; font-weight: bold;">Email Address</td><td>{{ $employee->email }}</td></tr>
                                            <tr><td style="width: 200px; font-weight: bold;">Date of Birth</td><td>{{ date('Y-m-d', strtotime($employee->date_of_birth)) }}</td></tr>
                                            <tr><td style="width: 200px; font-weight: bold;">Place of Birth</td><td>{{ $employee->place_of_birth }}</td></tr>
                                            <tr><td style="width: 200px; font-weight: bold;">Gender</td><td>{{ $employee->gender }}</td></tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="contact_info" role="tabpanel" aria-labelledby="contact_info">
                            <div class=" card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table col-md-7 table-bordered">
                                            <tr><td style="width: 200px; font-weight: bold;">Residential Address</td><td>{{ $employee->residential_address }}</td></tr>
                                            <tr><td style="width: 200px; font-weight: bold;">Digital Address</td><td>{{ $employee->digital_address }}</td></tr>
                                            <tr><td style="width: 200px; font-weight: bold;">Phone Number</td><td>{{ $employee->phone_number }}</td></tr>
                                            <tr><td style="width: 200px; font-weight: bold;">Identity Type</td><td>{{ str_replace('_', ' ', ucwords($employee->identity_type)) }}</td></tr>
                                            @if(!empty($employee->id_file))
                                            <tr><td style="width: 200px; font-weight: bold;">ID File</td><td><a download href="{{ asset($employee->id_file) }}" class="btn btn-sm btn-dark"><span class="fa fa-download"></span> Download ID</a></td></tr>
                                            @endif
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="family_details" role="tabpanel" aria-labelledby="family_details">
                            <div class=" card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table col-md-7 table-bordered">
                                            <tr><td style="width: 200px; font-weight: bold;">Father's Name</td><td>{{ $employee->fathers_name }} {{ $employee->father_deceased == true ? '(Deceased)' : null }}</td></tr>
                                            <tr><td style="width: 200px; font-weight: bold;">Mother's Name</td><td>{{ $employee->digital_address }} {{ $employee->mother_deceased == true ? '(Deceased)' : null }}</td></tr>
                                            <tr><td style="width: 200px; font-weight: bold;">Marital Status</td><td>{{ $employee->marital_status }}</td></tr>
                                            <tr><td style="width: 200px; font-weight: bold;">Number of Children</td><td>{{ $employee->children  }}</td></tr>
                                            <tr><td style="width: 200px; font-weight: bold;">Number of Dependants</td><td>{{ $employee->dependants  }}</td></tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="work_details" role="tabpanel" aria-labelledby="work_details">
                            <div class=" card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table col-md-7 table-bordered">
                                            <tr><td style="width: 200px; font-weight: bold;">Date Employed</td><td>{{ $employee->date_employed }}</td></tr>
                                            <tr><td style="width: 200px; font-weight: bold;">Date of Exit</td><td>{{ $employee->date_of_exit }}</td></tr>
                                            <tr><td style="width: 200px; font-weight: bold;">Department</td><td>{{ $employee->department->name ?? null }}</td></tr>
                                            <tr><td style="width: 200px; font-weight: bold;">Position</td><td>{{ $employee->position  }}</td></tr>
                                            <tr><td style="width: 200px; font-weight: bold;">Years of Experience</td><td>{{ $employee->experience  }}</td></tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="educational_background" role="tabpanel" aria-labelledby="educational_background">
                            <div class="card card-custom gutter-b">
                                <div class="card-body">
                                    @if(!empty($employee->education))
                                        @php $count = 0; @endphp
                                    <!--begin::Accordion-->
                                    <div class="accordion accordion-solid accordion-toggle-plus" id="accordionExample6">
                                        @foreach($employee->education as $education)
                                            @php $count++ @endphp
                                        <div class="card">
                                            <div class="card-header" id="headingOne6">
                                                <div class="card-title" data-toggle="collapse" data-target="#collapse{{ $count }}">
                                                    <i class="flaticon-pie-chart-1"></i>Experience #{{ $count }}</div>
                                            </div>
                                            <div id="collapse{{ $count }}" class="collapse {{ $count === 1 ? 'show' : null }}" data-parent="#accordionExample6">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table col-md-7 table-bordered">
                                                            <tr><td style="width: 200px; font-weight: bold;">Institution</td><td>{{ $education->institution }}</td></tr>
                                                            <tr><td style="width: 200px; font-weight: bold;">Address</td><td>{{ $education->address }}</td></tr>
                                                            <tr><td style="width: 200px; font-weight: bold;">From</td><td>{{ $education->from }}</td></tr>
                                                            <tr><td style="width: 200px; font-weight: bold;">To</td><td>{{ $education->to }}</td></tr>
                                                            <tr><td style="width: 200px; font-weight: bold;">Certification</td><td>{{ $education->certificate }}</td></tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    @endif
                                    <!--end::Accordion-->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection

