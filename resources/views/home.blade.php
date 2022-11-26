@extends('layouts.sidebar_menu')
@section('tab-pane')
    @include('layouts.tab_panes.dashboard_pane')
@endsection
@section('content')
    <!--end::Head-->
    <!--begin::Body-->

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
                            <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Dashboard</h2>
                            <!--end::Page Title-->
                        </div>
                        <!--end::Page Heading-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Toolbar-->
                    <div class="d-flex align-items-center flex-wrap">
                        <!--begin::Button-->
                        <a href="#" class="btn button-color btn-fixed-height font-weight-bold px-2 px-lg-5 mr-2">
										<span class="svg-icon svg-icon-lg">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Communication/Add-user.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
													<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
												</g>
											</svg>
                                            <!--end::Svg Icon-->
										</span>
                            <span class="d-none d-md-inline">New Employee</span>
                        </a>
                        <!--end::Button-->
                        <!--begin::Dropdown-->
                        <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
                            <a href="#" class="btn btn-primary btn-fixed-height font-weight-bold px-2 px-lg-5 mr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span class="svg-icon svg-icon-lg">
												<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Files/File.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24" />
														<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
														<rect fill="#000000" x="6" y="11" width="9" height="2" rx="1" />
														<rect fill="#000000" x="6" y="15" width="5" height="2" rx="1" />
													</g>
												</svg>
                                                <!--end::Svg Icon-->
											</span>
                                <span class="d-none d-md-inline">Reports</span>
                            </a>
                            <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                <!--begin::Navigation-->
                                <ul class="navi navi-hover">
                                    <li class="navi-separator mb-3 opacity-70"></li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
														<span class="navi-text">
															<span class="label label-xl label-inline label-light-success">Customer</span>
														</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
														<span class="navi-text">
															<span class="label label-xl label-inline label-light-danger">Partner</span>
														</span>
                                        </a>
                                    </li>
                                </ul>
                                <!--end::Navigation-->
                            </div>
                        </div>
                        <!--end::Dropdown-->
                    </div>
                    <!--end::Toolbar-->
                </div>
            </div>
            <!--end::Subheader-->
            <!--begin::Entry-->
            <div class="d-flex flex-column-fluid">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Dashboard-->
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-xl-4">
                            <!--begin::Mixed Widget 4-->
                            <div class="card card-custom bg-radial-gradient-danger gutter-b card-stretch">
                                <!--begin::Header-->
                                <div class="card-header border-0 py-5">
                                    <h3 class="card-title font-weight-bolder text-white">Sales Progress</h3>
                                    <div class="card-toolbar">
                                        <div class="dropdown dropdown-inline">
                                            <a href="#" class="btn btn-text-white btn-hover-white btn-sm btn-icon border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ki ki-bold-more-hor"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                <!--begin::Navigation-->
                                                <ul class="navi navi-hover">
                                                    <li class="navi-header pb-1">
                                                        <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-shopping-cart-1"></i>
																		</span>
                                                            <span class="navi-text">Order</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-calendar-8"></i>
																		</span>
                                                            <span class="navi-text">Event</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-graph-1"></i>
																		</span>
                                                            <span class="navi-text">Report</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-rocket-1"></i>
																		</span>
                                                            <span class="navi-text">Post</span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-writing"></i>
																		</span>
                                                            <span class="navi-text">File</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!--end::Navigation-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body d-flex flex-column p-0">
                                    <!--begin::Chart-->
                                    <div id="kt_mixed_widget_4_chart" style="height: 200px"></div>
                                    <!--end::Chart-->
                                    <!--begin::Stats-->
                                    <div class="card-spacer bg-white card-rounded flex-grow-1">
                                        <!--begin::Row-->
                                        <div class="row m-0">
                                            <div class="col px-8 py-6 mr-8">
                                                <div class="font-size-sm text-muted font-weight-bold">Average Sale</div>
                                                <div class="font-size-h4 font-weight-bolder">$650</div>
                                            </div>
                                            <div class="col px-8 py-6">
                                                <div class="font-size-sm text-muted font-weight-bold">Commission</div>
                                                <div class="font-size-h4 font-weight-bolder">$233,600</div>
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Row-->
                                        <div class="row m-0">
                                            <div class="col px-8 py-6 mr-8">
                                                <div class="font-size-sm text-muted font-weight-bold">Annual Taxes</div>
                                                <div class="font-size-h4 font-weight-bolder">$29,004</div>
                                            </div>
                                            <div class="col px-8 py-6">
                                                <div class="font-size-sm text-muted font-weight-bold">Annual Income</div>
                                                <div class="font-size-h4 font-weight-bolder">$1,480,00</div>
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Mixed Widget 4-->
                        </div>
                        <div class="col-xl-8">
                            <!--begin::Base Table Widget 6-->
                            <div class="card card-custom gutter-b">
                                <!--begin::Header-->
                                <div class="card-header border-0 pt-5">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label font-weight-bolder text-dark">Authors Earnings</span>
                                        <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
                                    </h3>
                                    <div class="card-toolbar">
                                        <ul class="nav nav-pills nav-pills-sm nav-dark-75">
                                            <li class="nav-item">
                                                <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_6_1">Month</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_6_2">Week</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link py-2 px-4 active" data-toggle="tab" href="#kt_tab_pane_6_3">Day</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-2 pb-0 mt-n3">
                                    <div class="tab-content mt-5" id="myTabTables6">
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade" id="kt_tab_pane_6_1" role="tabpanel" aria-labelledby="kt_tab_pane_6_1">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-borderless table-vertical-center">
                                                    <thead>
                                                    <tr>
                                                        <th class="p-0 w-50px"></th>
                                                        <th class="p-0 min-w-150px"></th>
                                                        <th class="p-0 min-w-120px"></th>
                                                        <th class="p-0 min-w-70px"></th>
                                                        <th class="p-0 min-w-70px"></th>
                                                        <th class="p-0 min-w-50px"></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="pl-0">
                                                            <div class="symbol symbol-50 symbol-light mr-2 mt-2">
																				<span class="symbol-label">
																					<img src="https://preview.keenthemes.com/metronic/theme/html/demo3/dist/assets/media/svg/avatars/018-girl-9.svg" class="h-75 align-self-end" alt="" />
																				</span>
                                                            </div>
                                                        </td>
                                                        <td class="pl-0">
                                                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Jessie Clarcson</a>
                                                            <span class="text-muted font-weight-bold d-block">HTML, CSS Coding</span>
                                                        </td>
                                                        <td></td>
                                                        <td class="text-right">
                                                            <span class="text-muted font-weight-bold d-block font-size-sm">Paid</span>
                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$1,200,000</span>
                                                        </td>
                                                        <td class="text-right">
                                                            <span class="font-weight-bolder text-warning">+52%</span>
                                                        </td>
                                                        <td class="text-right pr-0">
                                                            <a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
                                                                                    <!--end::Svg Icon-->
																				</span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl-0">
                                                            <div class="symbol symbol-50 symbol-light mr-2 mt-2">
																				<span class="symbol-label">
																					<img src="https://preview.keenthemes.com/metronic/theme/html/demo3/dist/assets/media/svg/avatars/047-girl-25.svg" class="h-75 align-self-end" alt="" />
																				</span>
                                                            </div>
                                                        </td>
                                                        <td class="pl-0">
                                                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Lebron Wayde</a>
                                                            <span class="text-muted font-weight-bold d-block">ReactJS Developer</span>
                                                        </td>
                                                        <td></td>
                                                        <td class="text-right">
                                                            <span class="text-muted font-weight-bold d-block font-size-sm">Paid</span>
                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$3,400,000</span>
                                                        </td>
                                                        <td class="text-right">
                                                            <span class="font-weight-bolder text-danger">-34%</span>
                                                        </td>
                                                        <td class="text-right pr-0">
                                                            <a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
                                                                                    <!--end::Svg Icon-->
																				</span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl-0">
                                                            <div class="symbol symbol-50 symbol-light mr-2 mt-2">
																				<span class="symbol-label">
																					<img src="https://preview.keenthemes.com/metronic/theme/html/demo3/dist/assets/media/svg/avatars/014-girl-7.svg" class="h-75 align-self-end" alt="" />
																				</span>
                                                            </div>
                                                        </td>
                                                        <td class="pl-0">
                                                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Natali Trump</a>
                                                            <span class="text-muted font-weight-bold d-block">UI/UX Designer</span>
                                                        </td>
                                                        <td></td>
                                                        <td class="text-right">
                                                            <span class="text-muted font-weight-bold d-block font-size-sm">Paid</span>
                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$4,500,000</span>
                                                        </td>
                                                        <td class="text-right">
                                                            <span class="font-weight-bolder text-success">+48%</span>
                                                        </td>
                                                        <td class="text-right pr-0">
                                                            <a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
                                                                                    <!--end::Svg Icon-->
																				</span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl-0">
                                                            <div class="symbol symbol-50 symbol-light mr-2 mt-2">
																				<span class="symbol-label">
																					<img src="https://preview.keenthemes.com/metronic/theme/html/demo3/dist/assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
																				</span>
                                                            </div>
                                                        </td>
                                                        <td class="pl-0">
                                                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Brad Simmons</a>
                                                            <span class="text-muted font-weight-bold d-block">Successful Fellas</span>
                                                        </td>
                                                        <td></td>
                                                        <td class="text-right">
                                                            <span class="text-muted font-weight-bold d-block font-size-sm">Paid</span>
                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$2,000,000</span>
                                                        </td>
                                                        <td class="text-right">
                                                            <span class="font-weight-bolder text-primary">+28%</span>
                                                        </td>
                                                        <td class="text-right pr-0">
                                                            <a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
                                                                                    <!--end::Svg Icon-->
																				</span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl-0">
                                                            <div class="symbol symbol-50 symbol-light mr-2 mt-2">
																				<span class="symbol-label">
																					<img src="https://preview.keenthemes.com/metronic/theme/html/demo3/dist/assets/media/svg/avatars/043-boy-18.svg" class="h-75 align-self-end" alt="" />
																				</span>
                                                            </div>
                                                        </td>
                                                        <td class="pl-0">
                                                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Kevin Leonard</a>
                                                            <span class="text-muted font-weight-bold d-block">Art Director</span>
                                                        </td>
                                                        <td></td>
                                                        <td class="text-right">
                                                            <span class="text-muted font-weight-bold d-block font-size-sm">Paid</span>
                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$35,600,000</span>
                                                        </td>
                                                        <td class="text-right">
                                                            <span class="font-weight-bolder text-info">+230%</span>
                                                        </td>
                                                        <td class="text-right pr-0">
                                                            <a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
                                                                                    <!--end::Svg Icon-->
																				</span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade" id="kt_tab_pane_6_2" role="tabpanel" aria-labelledby="kt_tab_pane_6_2">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-borderless table-vertical-center">
                                                    <thead>
                                                    <tr>
                                                        <th class="p-0 w-50px"></th>
                                                        <th class="p-0 min-w-150px"></th>
                                                        <th class="p-0 min-w-120px"></th>
                                                        <th class="p-0 min-w-70px"></th>
                                                        <th class="p-0 min-w-70px"></th>
                                                        <th class="p-0 min-w-50px"></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="pl-0">
                                                            <div class="symbol symbol-50 symbol-light mr-2 mt-2">
																				<span class="symbol-label">
																					<img src="https://preview.keenthemes.com/metronic/theme/html/demo3/dist/assets/media/svg/avatars/014-girl-7.svg" class="h-75 align-self-end" alt="" />
																				</span>
                                                            </div>
                                                        </td>
                                                        <td class="pl-0">
                                                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Natali Trump</a>
                                                            <span class="text-muted font-weight-bold d-block">UI/UX Designer</span>
                                                        </td>
                                                        <td></td>
                                                        <td class="text-right">
                                                            <span class="text-muted font-weight-bold d-block font-size-sm">Paid</span>
                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$4,500,000</span>
                                                        </td>
                                                        <td class="text-right">
                                                            <span class="font-weight-bolder text-success">+48%</span>
                                                        </td>
                                                        <td class="text-right pr-0">
                                                            <a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
                                                                                    <!--end::Svg Icon-->
																				</span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl-0">
                                                            <div class="symbol symbol-50 symbol-light mr-2 mt-2">
																				<span class="symbol-label">
																					<img src="https://preview.keenthemes.com/metronic/theme/html/demo3/dist/assets/media/svg/avatars/043-boy-18.svg" class="h-75 align-self-end" alt="" />
																				</span>
                                                            </div>
                                                        </td>
                                                        <td class="pl-0">
                                                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Kevin Leonard</a>
                                                            <span class="text-muted font-weight-bold d-block">Art Director</span>
                                                        </td>
                                                        <td></td>
                                                        <td class="text-right">
                                                            <span class="text-muted font-weight-bold d-block font-size-sm">Paid</span>
                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$35,600,000</span>
                                                        </td>
                                                        <td class="text-right">
                                                            <span class="font-weight-bolder text-info">+230%</span>
                                                        </td>
                                                        <td class="text-right pr-0">
                                                            <a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
                                                                                    <!--end::Svg Icon-->
																				</span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl-0">
                                                            <div class="symbol symbol-50 symbol-light mr-2 mt-2">
																				<span class="symbol-label">
																					<img src="https://preview.keenthemes.com/metronic/theme/html/demo3/dist/assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
																				</span>
                                                            </div>
                                                        </td>
                                                        <td class="pl-0">
                                                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Brad Simmons</a>
                                                            <span class="text-muted font-weight-bold d-block">Successful Fellas</span>
                                                        </td>
                                                        <td></td>
                                                        <td class="text-right">
                                                            <span class="text-muted font-weight-bold d-block font-size-sm">Paid</span>
                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$2,000,000</span>
                                                        </td>
                                                        <td class="text-right">
                                                            <span class="font-weight-bolder text-primary">+28%</span>
                                                        </td>
                                                        <td class="text-right pr-0">
                                                            <a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
                                                                                    <!--end::Svg Icon-->
																				</span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl-0">
                                                            <div class="symbol symbol-50 symbol-light mr-2 mt-2">
																				<span class="symbol-label">
																					<img src="https://preview.keenthemes.com/metronic/theme/html/demo3/dist/assets/media/svg/avatars/018-girl-9.svg" class="h-75 align-self-end" alt="" />
																				</span>
                                                            </div>
                                                        </td>
                                                        <td class="pl-0">
                                                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Jessie Clarcson</a>
                                                            <span class="text-muted font-weight-bold d-block">HTML, CSS Coding</span>
                                                        </td>
                                                        <td></td>
                                                        <td class="text-right">
                                                            <span class="text-muted font-weight-bold d-block font-size-sm">Paid</span>
                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$1,200,000</span>
                                                        </td>
                                                        <td class="text-right">
                                                            <span class="font-weight-bolder text-warning">+52%</span>
                                                        </td>
                                                        <td class="text-right pr-0">
                                                            <a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
                                                                                    <!--end::Svg Icon-->
																				</span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl-0">
                                                            <div class="symbol symbol-50 symbol-light mr-2 mt-2">
																				<span class="symbol-label">
																					<img src="https://preview.keenthemes.com/metronic/theme/html/demo3/dist/assets/media/svg/avatars/047-girl-25.svg" class="h-75 align-self-end" alt="" />
																				</span>
                                                            </div>
                                                        </td>
                                                        <td class="pl-0">
                                                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Lebron Wayde</a>
                                                            <span class="text-muted font-weight-bold d-block">ReactJS Developer</span>
                                                        </td>
                                                        <td></td>
                                                        <td class="text-right">
                                                            <span class="text-muted font-weight-bold d-block font-size-sm">Paid</span>
                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$3,400,000</span>
                                                        </td>
                                                        <td class="text-right">
                                                            <span class="font-weight-bolder text-danger">-34%</span>
                                                        </td>
                                                        <td class="text-right pr-0">
                                                            <a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
                                                                                    <!--end::Svg Icon-->
																				</span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade show active" id="kt_tab_pane_6_3" role="tabpanel" aria-labelledby="kt_tab_pane_6_3">
                                            <!--begin::Table-->
                                            <div class="table-responsive">
                                                <table class="table table-borderless table-vertical-center">
                                                    <thead>
                                                    <tr>
                                                        <th class="p-0 w-50px"></th>
                                                        <th class="p-0 min-w-150px"></th>
                                                        <th class="p-0 min-w-120px"></th>
                                                        <th class="p-0 min-w-70px"></th>
                                                        <th class="p-0 min-w-70px"></th>
                                                        <th class="p-0 min-w-50px"></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="pl-0">
                                                            <div class="symbol symbol-50 symbol-light mr-2 mt-2">
																				<span class="symbol-label">
																					<img src="https://preview.keenthemes.com/metronic/theme/html/demo3/dist/assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
																				</span>
                                                            </div>
                                                        </td>
                                                        <td class="pl-0">
                                                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Brad Simmons</a>
                                                            <span class="text-muted font-weight-bold d-block">Successful Fellas</span>
                                                        </td>
                                                        <td></td>
                                                        <td class="text-right">
                                                            <span class="text-muted font-weight-bold d-block font-size-sm">Paid</span>
                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$2,000,000</span>
                                                        </td>
                                                        <td class="text-right">
                                                            <span class="font-weight-bolder text-primary">+28%</span>
                                                        </td>
                                                        <td class="text-right pr-0">
                                                            <a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
                                                                                    <!--end::Svg Icon-->
																				</span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl-0">
                                                            <div class="symbol symbol-50 symbol-light mr-2 mt-2">
																				<span class="symbol-label">
																					<img src="https://preview.keenthemes.com/metronic/theme/html/demo3/dist/assets/media/svg/avatars/018-girl-9.svg" class="h-75 align-self-end" alt="" />
																				</span>
                                                            </div>
                                                        </td>
                                                        <td class="pl-0">
                                                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Jessie Clarcson</a>
                                                            <span class="text-muted font-weight-bold d-block">HTML, CSS Coding</span>
                                                        </td>
                                                        <td></td>
                                                        <td class="text-right">
                                                            <span class="text-muted font-weight-bold d-block font-size-sm">Paid</span>
                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$1,200,000</span>
                                                        </td>
                                                        <td class="text-right">
                                                            <span class="font-weight-bolder text-warning">+52%</span>
                                                        </td>
                                                        <td class="text-right pr-0">
                                                            <a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
                                                                                    <!--end::Svg Icon-->
																				</span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl-0">
                                                            <div class="symbol symbol-50 symbol-light mr-2 mt-2">
																				<span class="symbol-label">
																					<img src="https://preview.keenthemes.com/metronic/theme/html/demo3/dist/assets/media/svg/avatars/047-girl-25.svg" class="h-75 align-self-end" alt="" />
																				</span>
                                                            </div>
                                                        </td>
                                                        <td class="pl-0">
                                                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Lebron Wayde</a>
                                                            <span class="text-muted font-weight-bold d-block">ReactJS Developer</span>
                                                        </td>
                                                        <td></td>
                                                        <td class="text-right">
                                                            <span class="text-muted font-weight-bold d-block font-size-sm">Paid</span>
                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$3,400,000</span>
                                                        </td>
                                                        <td class="text-right">
                                                            <span class="font-weight-bolder text-danger">-34%</span>
                                                        </td>
                                                        <td class="text-right pr-0">
                                                            <a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
                                                                                    <!--end::Svg Icon-->
																				</span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl-0">
                                                            <div class="symbol symbol-50 symbol-light mr-2 mt-2">
																				<span class="symbol-label">
																					<img src="https://preview.keenthemes.com/metronic/theme/html/demo3/dist/assets/media/svg/avatars/014-girl-7.svg" class="h-75 align-self-end" alt="" />
																				</span>
                                                            </div>
                                                        </td>
                                                        <td class="pl-0">
                                                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Natali Trump</a>
                                                            <span class="text-muted font-weight-bold d-block">UI/UX Designer</span>
                                                        </td>
                                                        <td></td>
                                                        <td class="text-right">
                                                            <span class="text-muted font-weight-bold d-block font-size-sm">Paid</span>
                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$4,500,000</span>
                                                        </td>
                                                        <td class="text-right">
                                                            <span class="font-weight-bolder text-success">+48%</span>
                                                        </td>
                                                        <td class="text-right pr-0">
                                                            <a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
                                                                                    <!--end::Svg Icon-->
																				</span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl-0">
                                                            <div class="symbol symbol-50 symbol-light mr-2 mt-2">
																				<span class="symbol-label">
																					<img src="https://preview.keenthemes.com/metronic/theme/html/demo3/dist/assets/media/svg/avatars/043-boy-18.svg" class="h-75 align-self-end" alt="" />
																				</span>
                                                            </div>
                                                        </td>
                                                        <td class="pl-0">
                                                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Kevin Leonard</a>
                                                            <span class="text-muted font-weight-bold d-block">Art Director</span>
                                                        </td>
                                                        <td></td>
                                                        <td class="text-right">
                                                            <span class="text-muted font-weight-bold d-block font-size-sm">Paid</span>
                                                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$35,600,000</span>
                                                        </td>
                                                        <td class="text-right">
                                                            <span class="font-weight-bolder text-info">+230%</span>
                                                        </td>
                                                        <td class="text-right pr-0">
                                                            <a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-md svg-icon-success">
																					<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Navigation/Arrow-right.svg-->
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
                                                                                    <!--end::Svg Icon-->
																				</span>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end::Tap pane-->
                                    </div>
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Base Table Widget 6-->
                        </div>
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-lg-12 col-xxl-12">
                            <!--begin::Advance Table Widget 9-->
                            <div class="card card-custom card-stretch gutter-b">
                                <!--begin::Header-->
                                <div class="card-header border-0 py-5">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label font-weight-bolder text-dark">Agents Stats</span>
                                        <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
                                    </h3>
                                    <div class="card-toolbar">
                                        <a href="#" class="btn btn-info font-weight-bolder font-size-sm mr-3">New Arrivals</a>
                                        <a href="#" class="btn btn-danger font-weight-bolder font-size-sm">Create</a>
                                    </div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-0 pb-3">
                                    <div class="tab-content">
                                        <!--begin::Table-->
                                        <div class="table-responsive">
                                            <table class="table table-head-custom table-vertical-center table-head-bg table-borderless">
                                                <thead>
                                                <tr class="text-left">
                                                    <th style="min-width: 250px" class="pl-7">
                                                        <span class="text-dark-75">products</span>
                                                    </th>
                                                    <th style="min-width: 120px">earnings</th>
                                                    <th style="min-width: 100px">comission</th>
                                                    <th style="min-width: 100px">company</th>
                                                    <th style="min-width: 100px">rating</th>
                                                    <th style="min-width: 100px"></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="pl-0 py-8">
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-50 symbol-light mr-4">
																				<span class="symbol-label">
																					<img src="https://preview.keenthemes.com/metronic/theme/html/demo3/dist/assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
																				</span>
                                                            </div>
                                                            <div>
                                                                <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Brad Simmons</a>
                                                                <span class="text-muted font-weight-bold d-block">HTML, JS, ReactJS</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$8,000,000</span>
                                                        <span class="text-muted font-weight-bold">In Proccess</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$520</span>
                                                        <span class="text-muted font-weight-bold">Paid</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Intertico</span>
                                                        <span class="text-muted font-weight-bold">Web, UI/UX Design</span>
                                                    </td>
                                                    <td>
                                                        <img src="https://preview.keenthemes.com/metronic/theme/html/demo3/dist/assets/media/logos/stars.png" alt="image" style="width: 5rem" />
                                                        <span class="text-muted font-weight-bold d-block">Best Rated</span>
                                                    </td>
                                                    <td class="pr-0 text-right">
                                                        <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">View Offer</a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end::Table-->
                                    </div>
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Advance Table Widget 9-->
                        </div>
                    </div>
                    <!--end::Row-->
                    <!--end::Dashboard-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Entry-->
        </div>
        <!--end::Content-->

        <!--end::Main-->
@endsection
