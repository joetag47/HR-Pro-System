@extends('layouts.sidebar_menu')
@section('tab-pane')
    @include('layouts.tab_panes.company_profile_pane')
@endsection
@push('page-css')
    <link href="{{ asset('assets/css/pages/wizard/wizard-2.css') }}" rel="stylesheet" type="text/css" />
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
                            <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Add Employees</h2>
                            <!--end::Page Title-->
                        </div>
                        <!--end::Page Heading-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Toolbar-->

                </div>
            </div>
            <div class="container">
                <div class="card card-custom">
                    <div class="card-body p-0">
                        <!--begin: Wizard-->
                        <div class="wizard wizard-2" id="kt_wizard" data-wizard-state="first" data-wizard-clickable="false">
                            <!--begin: Wizard Nav-->
                            <div class="wizard-nav border-right py-8 px-8 py-lg-20 px-lg-10">
                                <!--begin::Wizard Step 1 Nav-->
                                <div class="wizard-steps">
                                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                        <div class="wizard-wrapper">
                                            <div class="wizard-icon">
																<span class="svg-icon svg-icon-2x">
																	<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/General/User.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24"></polygon>
																			<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																			<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
																		</g>
																	</svg>
                                                                    <!--end::Svg Icon-->
																</span>
                                            </div>
                                            <div class="wizard-label">
                                                <h3 class="wizard-title">Employee Biodata</h3>
                                                <div class="wizard-desc">Employee Personal Details</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Wizard Step 1 Nav-->
                                    <!--begin::Wizard Step 2 Nav-->
                                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                                        <div class="wizard-wrapper">
                                            <div class="wizard-icon">
																<span class="svg-icon svg-icon-2x">
																	<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Map/Compass.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"></rect>
																			<path d="M12,21 C7.02943725,21 3,16.9705627 3,12 C3,7.02943725 7.02943725,3 12,3 C16.9705627,3 21,7.02943725 21,12 C21,16.9705627 16.9705627,21 12,21 Z M14.1654881,7.35483745 L9.61055177,10.3622525 C9.47921741,10.4489666 9.39637436,10.592455 9.38694497,10.7495509 L9.05991526,16.197949 C9.04337012,16.4735952 9.25341309,16.7104632 9.52905936,16.7270083 C9.63705011,16.7334903 9.74423017,16.7047714 9.83451193,16.6451626 L14.3894482,13.6377475 C14.5207826,13.5510334 14.6036256,13.407545 14.613055,13.2504491 L14.9400847,7.80205104 C14.9566299,7.52640477 14.7465869,7.28953682 14.4709406,7.27299168 C14.3629499,7.26650974 14.2557698,7.29522855 14.1654881,7.35483745 Z" fill="#000000"></path>
																		</g>
																	</svg>
                                                                    <!--end::Svg Icon-->
																</span>
                                            </div>
                                            <div class="wizard-label">
                                                <h3 class="wizard-title">Setup Location & Contact</h3>
                                                <div class="wizard-desc">Employee Location and Contact Details</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Wizard Step 2 Nav-->
                                    <!--begin::Wizard Step 3 Nav-->
                                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                                        <div class="wizard-wrapper">
                                            <div class="wizard-icon">
																<span class="svg-icon svg-icon-2x">
																	<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/General/Thunder-move.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"></rect>
																			<path d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z" fill="#000000"></path>
																			<path d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z" fill="#000000" opacity="0.3"></path>
																		</g>
																	</svg>
                                                                    <!--end::Svg Icon-->
																</span>
                                            </div>
                                            <div class="wizard-label">
                                                <h3 class="wizard-title">Family Details</h3>
                                                <div class="wizard-desc">Employee's Family Details</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Wizard Step 3 Nav-->
                                    <!--begin::Wizard Step 4 Nav-->
                                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                                        <div class="wizard-wrapper">
                                            <div class="wizard-icon">
																<span class="svg-icon svg-icon-2x">
																	<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Map/Position.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"></rect>
																			<path d="M19,11 L21,11 C21.5522847,11 22,11.4477153 22,12 C22,12.5522847 21.5522847,13 21,13 L19,13 C18.4477153,13 18,12.5522847 18,12 C18,11.4477153 18.4477153,11 19,11 Z M3,11 L5,11 C5.55228475,11 6,11.4477153 6,12 C6,12.5522847 5.55228475,13 5,13 L3,13 C2.44771525,13 2,12.5522847 2,12 C2,11.4477153 2.44771525,11 3,11 Z M12,2 C12.5522847,2 13,2.44771525 13,3 L13,5 C13,5.55228475 12.5522847,6 12,6 C11.4477153,6 11,5.55228475 11,5 L11,3 C11,2.44771525 11.4477153,2 12,2 Z M12,18 C12.5522847,18 13,18.4477153 13,19 L13,21 C13,21.5522847 12.5522847,22 12,22 C11.4477153,22 11,21.5522847 11,21 L11,19 C11,18.4477153 11.4477153,18 12,18 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																			<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="2"></circle>
																			<path d="M12,17 C14.7614237,17 17,14.7614237 17,12 C17,9.23857625 14.7614237,7 12,7 C9.23857625,7 7,9.23857625 7,12 C7,14.7614237 9.23857625,17 12,17 Z M12,19 C8.13400675,19 5,15.8659932 5,12 C5,8.13400675 8.13400675,5 12,5 C15.8659932,5 19,8.13400675 19,12 C19,15.8659932 15.8659932,19 12,19 Z" fill="#000000" fill-rule="nonzero"></path>
																		</g>
																	</svg>
                                                                    <!--end::Svg Icon-->
																</span>
                                            </div>
                                            <div class="wizard-label">
                                                <h3 class="wizard-title">Work Deteails</h3>
                                                <div class="wizard-desc">Employee's Work Details</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Wizard Step 4 Nav-->
                                    <!--begin::Wizard Step 5 Nav-->
                                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                                        <div class="wizard-wrapper">
                                            <div class="wizard-icon">
																<span class="svg-icon svg-icon-2x">
																	<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Shopping/Credit-card.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"></rect>
																			<rect fill="#000000" opacity="0.3" x="2" y="5" width="20" height="14" rx="2"></rect>
																			<rect fill="#000000" x="2" y="8" width="20" height="3"></rect>
																			<rect fill="#000000" opacity="0.3" x="16" y="14" width="4" height="2" rx="1"></rect>
																		</g>
																	</svg>
                                                                    <!--end::Svg Icon-->
																</span>
                                            </div>
                                            <div class="wizard-label">
                                                <h3 class="wizard-title">Educational Background</h3>
                                                <div class="wizard-desc">Employee's Educational Background</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Wizard Step 5 Nav-->
                                    <!--begin::Wizard Step 6 Nav-->
                                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                                        <div class="wizard-wrapper">
                                            <div class="wizard-icon">
																<span class="svg-icon svg-icon-2x">
																	<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/General/Like.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"></rect>
																			<path d="M9,10 L9,19 L10.1525987,19.3841996 C11.3761964,19.7920655 12.6575468,20 13.9473319,20 L17.5405883,20 C18.9706314,20 20.2018758,18.990621 20.4823303,17.5883484 L21.231529,13.8423552 C21.5564648,12.217676 20.5028146,10.6372006 18.8781353,10.3122648 C18.6189212,10.260422 18.353992,10.2430672 18.0902299,10.2606513 L14.5,10.5 L14.8641964,6.49383981 C14.9326895,5.74041495 14.3774427,5.07411874 13.6240179,5.00562558 C13.5827848,5.00187712 13.5414031,5 13.5,5 L13.5,5 C12.5694044,5 11.7070439,5.48826024 11.2282564,6.28623939 L9,10 Z" fill="#000000"></path>
																			<rect fill="#000000" opacity="0.3" x="2" y="9" width="5" height="11" rx="1"></rect>
																		</g>
																	</svg>
                                                                    <!--end::Svg Icon-->
																</span>
                                            </div>
                                            <div class="wizard-label">
                                                <h3 class="wizard-title">Completed!</h3>
                                                <div class="wizard-desc">Review and Submit</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Wizard Step 6 Nav-->
                                </div>
                            </div>
                            <!--end: Wizard Nav-->
                            <!--begin: Wizard Body-->
                            <div class="wizard-body py-8 px-8 py-lg-20 px-lg-10">
                                <!--begin: Wizard Form-->
                                <div class="row">
                                    <div class="offset-xxl-2 col-xxl-8">
                                        <form class="form fv-plugins-bootstrap fv-plugins-framework" id="kt_form">
                                            <!--begin: Wizard Step 1-->
                                            <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                                <h4 class="mb-10 font-weight-bold text-dark">Enter your Employee Personal Details</h4>
                                                <!--begin::Input-->
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="form-group fv-plugins-icon-container has-danger">
                                                            <label>Full Name <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control form-control-solid form-control-lg is-invalid" name="full_name" placeholder="First Name" value="">

                                                        </div>
                                                    </div>
                                                    <!--end::Input-->
                                                    <!--begin::Input-->
                                                    <div class="col-xl-6">
                                                    <div class="form-group fv-plugins-icon-container has-danger">
                                                        <label>Email Address <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control form-control-solid form-control-lg is-invalid" name="email" placeholder="Email Address" value="">
                                                    </div>
                                                    </div>
                                                </div>
                                                <!--end::Input-->
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <!--begin::Input-->
                                                        <div class="form-group fv-plugins-icon-container has-success">
                                                            <label>Date of Birth <span class="text-danger">*</span></label>
                                                            <input type="date" class="form-control form-control-solid form-control-lg" name="date_of_birth">
                                                        </div>
                                                        <!--end::Input-->
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <!--begin::Input-->
                                                        <div class="form-group fv-plugins-icon-container has-success">
                                                            <label>Place of Birth <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control form-control-solid form-control-lg" name="place_of_birth">
                                                        </div>
                                                        <!--end::Input-->
                                                    </div>
                                                    <div class="col-xl-7">
                                                        <!--begin::Input-->
                                                        <div class="form-group fv-plugins-icon-container has-success">
                                                            <label>Gender <span class="text-danger">*</span></label>
                                                            <select name="gender" class="form-control">
                                                                <option value="">--Select Gender--</option>
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Input-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end: Wizard Step 1-->
                                            <!--begin: Wizard Step 2-->
                                            <div class="pb-5" data-wizard-type="step-content">
                                                <h4 class="mb-10 font-weight-bold text-dark">Setup Your Current Location</h4>
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <!--begin::Input-->
                                                        <div class="form-group fv-plugins-icon-container">
                                                            <label>Residential Address <span class="textd-danger">*</span></label>
                                                            <input type="text" class="form-control form-control-solid form-control-lg" name="residential_address">
                                                            <!--end::Input-->
                                                        </div>
                                                    </div>
                                                        <div class="col-xl-6">
                                                            <!--begin::Input-->
                                                            <div class="form-group">
                                                                <label>Digital Address</label>
                                                                <input type="text" class="form-control form-control-solid form-control-lg" name="digital_address">
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <!--begin::Input-->
                                                            <div class="form-group fv-plugins-icon-container">
                                                                <label>Phone Number <span class="text-danger">*</span></label>
                                                                <input type="tel" class="form-control form-control-solid form-control-lg" name="phone_number">
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <!--begin::Input-->
                                                            <div class="form-group fv-plugins-icon-container">
                                                                <label>Identity Type <span class="text-danger">*</span></label>
                                                                <select name="identity_type" class="form-control">
                                                                    <option value="">--Select Identity Type--</option>
                                                                    <option value="voters_id">Voter's ID</option>
                                                                    <option value="passport">Passport</option>
                                                                    <option value="national_id">National ID</option>
                                                                    <option value="nhis">NHIS</option>
                                                                    <option value="drivers_license">Driver's License</option>
                                                                </select>
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <!--begin::Input-->
                                                            <div class="form-group fv-plugins-icon-container">
                                                                <label>Upload ID <span class="text-danger">*</span></label>
                                                                <input type="file" class="form-control form-control-solid form-control-lg" name="id_file">
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>
                                                    </div>
                                            </div>
                                            <!--end: Wizard Step 2-->
                                            <!--begin: Wizard Step 3-->
                                            <div class="pb-5" data-wizard-type="step-content">
                                                <h4 class="mb-10 font-weight-bold text-dark">Enter Family Details</h4>
                                                <!--begin::Select-->
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <!--begin::Input-->
                                                        <div class="form-group fv-plugins-icon-container">
                                                            <label>Father's Full Name<span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control form-control-solid form-control-lg" name="fathers_name">
                                                            <!--end::Input-->
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6" style="margin-top: 8%;">
                                                        <div class="form-group fv-plugins-icon-container">
                                                            <label class="checkbox">
                                                                <input type="checkbox" name="father_deceased"/>
                                                                <span></span>
                                                                Deceased?
                                                            </label>
                                                            <!--end::Input-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Select-->
                                                <!--begin::Select-->
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <!--begin::Input-->
                                                        <div class="form-group fv-plugins-icon-container">
                                                            <label>Mother's Full Name<span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control form-control-solid form-control-lg" name="mothers_name">
                                                            <!--end::Input-->
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6" style="margin-top: 8%;">
                                                        <div class="form-group fv-plugins-icon-container">
                                                            <label class="checkbox">
                                                                <input type="checkbox" name="mother_deceased"/>
                                                                <span></span>
                                                                Deceased?
                                                            </label>
                                                            <!--end::Input-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Select-->
                                                <!--begin::Select-->
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <!--begin::Input-->
                                                        <div class="form-group fv-plugins-icon-container">
                                                            <label>Marital Status <span class="text-danger">*</span></label>
                                                            <select name="marital_status" class="form-control">
                                                                <option value="Married">Married</option>
                                                                <option value="Single">Single</option>
                                                                <option value="Divorced">Divorced</option>
                                                                <option value="Widowed">Widowed</option>
                                                                <option value="In a Relationship">In a Relationship</option>
                                                            </select>
                                                            <!--end::Input-->
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="form-group fv-plugins-icon-container">
                                                            <label>Number of Children</label>
                                                            <input type="number" name="children" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="form-group fv-plugins-icon-container">
                                                            <label>Number of Dependants</label>
                                                            <input type="number" name="dependants" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Select-->

                                                <h4 class="mb-10 font-weight-bold text-dark">Next of Kin Details</h4>
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <!--begin::Input-->
                                                        <div class="form-group fv-plugins-icon-container">
                                                            <label>Full Name</label>
                                                            <input type="text" class="form-control form-control-solid form-control-lg" name="next_of_kin_name">
                                                            <!--end::Input-->
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <!--begin::Input-->
                                                        <div class="form-group fv-plugins-icon-container">
                                                            <label>Relationship</label>
                                                            <input type="text" class="form-control form-control-solid form-control-lg" name="next_of_kin_relationship">
                                                            <!--end::Input-->
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <!--begin::Input-->
                                                        <div class="form-group fv-plugins-icon-container">
                                                            <label>Address</label>
                                                            <input type="text" class="form-control form-control-solid form-control-lg" name="next_of_kin_address">
                                                            <!--end::Input-->
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <!--begin::Input-->
                                                        <div class="form-group fv-plugins-icon-container">
                                                            <label>Telephone</label>
                                                            <input type="text" class="form-control form-control-solid form-control-lg" name="next_of_kin_phone">
                                                            <!--end::Input-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end: Wizard Step 3-->
                                            <!--begin: Wizard Step 4-->
                                            <div class="pb-5" data-wizard-type="step-content">
                                                <h4 class="mb-10 font-weight-bold text-dark">Setup Employee Work Details</h4>
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <!--begin::Input-->
                                                        <div class="form-group fv-plugins-icon-container">
                                                            <label>Date Employed</label>
                                                            <input type="date" class="form-control form-control-solid form-control-lg" name="date_employed">
                                                        </div>
                                                        <!--end::Input-->
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <!--begin::Input-->
                                                        <div class="form-group fv-plugins-icon-container">
                                                            <label>Date of Exit</label>
                                                            <input type="date" class="form-control form-control-solid form-control-lg" name="date_of_exit">
                                                        </div>
                                                        <!--end::Input-->
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <!--begin::Input-->
                                                        <div class="form-group fv-plugins-icon-container">
                                                            <label>Department</label>
                                                            <select class="form-control" name="department">
                                                                <option value="">--Select Department</option>
                                                                <option value="">--Select Department</option>
                                                                <option value="">--Select Department</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Input-->
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <!--begin::Input-->
                                                        <div class="form-group">
                                                            <label>Position</label>
                                                            <input type="text" class="form-control form-control-solid form-control-lg" name="position">

                                                        </div>
                                                        <!--end::Input-->
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <!--begin::Input-->
                                                        <div class="form-group fv-plugins-icon-container">
                                                            <label>Postcode</label>
                                                            <input type="text" class="form-control form-control-solid form-control-lg" name="locpostcode" placeholder="Postcode" value="3072">
                                                            <span class="form-text text-muted">Please enter your Postcode.</span>
                                                            <div class="fv-plugins-message-container"></div></div>
                                                        <!--end::Input-->
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <!--begin::Input-->
                                                        <div class="form-group fv-plugins-icon-container">
                                                            <label>City</label>
                                                            <input type="text" class="form-control form-control-solid form-control-lg" name="loccity" placeholder="City" value="Preston">
                                                            <span class="form-text text-muted">Please enter your City.</span>
                                                            <div class="fv-plugins-message-container"></div></div>
                                                        <!--end::Input-->
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <!--begin::Input-->
                                                        <div class="form-group fv-plugins-icon-container">
                                                            <label>State</label>
                                                            <input type="text" class="form-control form-control-solid form-control-lg" name="locstate" placeholder="State" value="VIC">
                                                            <span class="form-text text-muted">Please enter your state.</span>
                                                            <div class="fv-plugins-message-container"></div></div>
                                                        <!--end::Input-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end: Wizard Step 4-->
                                            <!--begin: Wizard Step 5-->
                                            <div class="pb-5" data-wizard-type="step-content">
                                                <h4 class="mb-10 font-weight-bold text-dark">Enter your Payment Details</h4>
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <!--begin::Input-->
                                                        <div class="form-group fv-plugins-icon-container">
                                                            <label>Name on Card</label>
                                                            <input type="text" class="form-control form-control-solid form-control-lg" name="ccname" placeholder="Card Name" value="John Wick">
                                                            <span class="form-text text-muted">Please enter your Card Name.</span>
                                                            <div class="fv-plugins-message-container"></div></div>
                                                        <!--end::Input-->
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <!--begin::Input-->
                                                        <div class="form-group fv-plugins-icon-container">
                                                            <label>Card Number</label>
                                                            <input type="text" class="form-control form-control-solid form-control-lg" name="ccnumber" placeholder="Card Number" value="4444 3333 2222 1111">
                                                            <span class="form-text text-muted">Please enter your Address.</span>
                                                            <div class="fv-plugins-message-container"></div></div>
                                                        <!--end::Input-->
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-4">
                                                        <!--begin::Input-->
                                                        <div class="form-group fv-plugins-icon-container">
                                                            <label>Card Expiry Month</label>
                                                            <input type="number" class="form-control form-control-solid form-control-lg" name="ccmonth" placeholder="Card Expiry Month" value="01">
                                                            <span class="form-text text-muted">Please enter your Card Expiry Month.</span>
                                                            <div class="fv-plugins-message-container"></div></div>
                                                        <!--end::Input-->
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <!--begin::Input-->
                                                        <div class="form-group fv-plugins-icon-container">
                                                            <label>Card Expiry Year</label>
                                                            <input type="number" class="form-control form-control-solid form-control-lg" name="ccyear" placeholder="Card Expire Year" value="21">
                                                            <span class="form-text text-muted">Please enter your Card Expiry Year.</span>
                                                            <div class="fv-plugins-message-container"></div></div>
                                                        <!--end::Input-->
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <!--begin::Input-->
                                                        <div class="form-group fv-plugins-icon-container">
                                                            <label>Card CVV Number</label>
                                                            <input type="password" class="form-control form-control-solid form-control-lg" name="cccvv" placeholder="Card CVV Number" value="123">
                                                            <span class="form-text text-muted">Please enter your Card CVV Number.</span>
                                                            <div class="fv-plugins-message-container"></div></div>
                                                        <!--end::Input-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end: Wizard Step 5-->
                                            <!--begin: Wizard Step 6-->
                                            <div class="pb-5" data-wizard-type="step-content">
                                                <!--begin::Section-->
                                                <h4 class="mb-10 font-weight-bold text-dark">Review your Details and Submit</h4>
                                                <h6 class="font-weight-bolder mb-3">Current Address:</h6>
                                                <div class="text-dark-50 line-height-lg">
                                                    <div>Address Line 1</div>
                                                    <div>Address Line 2</div>
                                                    <div>Melbourne 3000, VIC, Australia</div>
                                                </div>
                                                <div class="separator separator-dashed my-5"></div>
                                                <!--end::Section-->
                                                <!--begin::Section-->
                                                <h6 class="font-weight-bolder mb-3">Delivery Details:</h6>
                                                <div class="text-dark-50 line-height-lg">
                                                    <div>Package: Complete Workstation (Monitor, Computer, Keyboard &amp; Mouse)</div>
                                                    <div>Weight: 25kg</div>
                                                    <div>Dimensions: 110cm (w) x 90cm (h) x 150cm (L)</div>
                                                </div>
                                                <div class="separator separator-dashed my-5"></div>
                                                <!--end::Section-->
                                                <!--begin::Section-->
                                                <h6 class="font-weight-bolder mb-3">Delivery Service Type:</h6>
                                                <div class="text-dark-50 line-height-lg">
                                                    <div>Overnight Delivery with Regular Packaging</div>
                                                    <div>Preferred Morning (8:00AM - 11:00AM) Delivery</div>
                                                </div>
                                                <div class="separator separator-dashed my-5"></div>
                                                <!--end::Section-->
                                                <!--begin::Section-->
                                                <h6 class="font-weight-bolder mb-3">Delivery Address:</h6>
                                                <div class="text-dark-50 line-height-lg">
                                                    <div>Address Line 1</div>
                                                    <div>Address Line 2</div>
                                                    <div>Preston 3072, VIC, Australia</div>
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end: Wizard Step 6-->
                                            <!--begin: Wizard Actions-->
                                            <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                                <div class="mr-2">
                                                    <button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Previous</button>
                                                </div>
                                                <div>
                                                    <button type="button" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit">Submit</button>
                                                    <button type="button" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-next">Next</button>
                                                </div>
                                            </div>
                                            <!--end: Wizard Actions-->
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </form>
                                    </div>
                                    <!--end: Wizard-->
                                </div>
                                <!--end: Wizard Form-->
                            </div>
                            <!--end: Wizard Body-->
                        </div>
                        <!--end: Wizard-->
                    </div>
                </div>
            </div>
        </div>

@endsection
@push('page-js')
            <script src="{{ asset('custom_scripts/js/employee_form.js') }}"></script>
    @endpush
