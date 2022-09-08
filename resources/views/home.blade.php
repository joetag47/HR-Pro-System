@extends('layouts.sidebar_menu')
@section('content')
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-secondary-enabled page-loading">

<!--begin::Main-->
<!--begin::Header Mobile-->
<div id="kt_header_mobile" class="header-mobile">
    <!--begin::Logo-->
    <a href="{{ route('home') }}">
        <img alt="Logo" src="https://preview.keenthemes.com/metronic/theme/html/demo3/dist/assets/media/logos/logo-letter-2.png" class="logo-default max-h-30px" />
    </a>
    <!--end::Logo-->
    <!--begin::Toolbar-->
    <div class="d-flex align-items-center">
        <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
            <span></span>
        </button>
    </div>
    <!--end::Toolbar-->
</div>
<!--end::Header Mobile-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
        <!--begin::Aside-->
        <div class="aside aside-left d-flex aside-fixed" id="kt_aside">
            <!--begin::Primary-->
            <div class="aside-primary d-flex flex-column align-items-center flex-row-auto">
                <!--begin::Brand-->
                <div class="aside-brand d-flex flex-column align-items-center flex-column-auto py-5 py-lg-12">
                    <!--begin::Logo-->
                    <a href="{{ route('home') }}">
                        <img alt="Logo" src="https://preview.keenthemes.com/metronic/theme/html/demo3/dist/assets/media/logos/logo-letter-2.png" class="max-h-30px" />
                    </a>
                    <!--end::Logo-->
                </div>
                <!--end::Brand-->
                <!--begin::Nav Wrapper-->
                <div class="aside-nav d-flex flex-column align-items-center flex-column-fluid py-5 scroll scroll-pull">
                    <!--begin::Nav-->
                    <ul class="nav flex-column" role="tablist">
                        <!--begin::Item-->
                        <li class="nav-item mb-3" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Latest Projects">
                            <a href="#" class="nav-link btn btn-icon btn-clean btn-lg active" data-toggle="tab" data-target="#kt_aside_tab_1" role="tab">
										<span class="svg-icon svg-icon-xl">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
													<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
												</g>
											</svg>
                                            <!--end::Svg Icon-->
										</span>
                            </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item mb-3" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Metronic Features">
                            <a href="#" class="nav-link btn btn-icon btn-clean btn-lg" data-toggle="tab" data-target="#kt_aside_tab_2" role="tab">
										<span class="svg-icon svg-icon-xl">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Communication/Group.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
													<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
												</g>
											</svg>
                                            <!--end::Svg Icon-->
										</span>
                            </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item mb-3" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Latest Reports">
                            <a href="#" class="nav-link btn btn-icon btn-clean btn-lg" data-toggle="tab" data-target="#kt_aside_tab_3" role="tab">
										<span class="svg-icon svg-icon-xl">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Media/Equalizer.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
													<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
													<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
													<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
												</g>
											</svg>
                                            <!--end::Svg Icon-->
										</span>
                            </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item mb-3" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Project Management">
                            <a href="#" class="nav-link btn btn-icon btn-clean btn-lg" data-toggle="tab" data-target="#kt_aside_tab_4" role="tab">
										<span class="svg-icon svg-icon-xl">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/General/Shield-check.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3" />
													<path d="M11.1750002,14.75 C10.9354169,14.75 10.6958335,14.6541667 10.5041669,14.4625 L8.58750019,12.5458333 C8.20416686,12.1625 8.20416686,11.5875 8.58750019,11.2041667 C8.97083352,10.8208333 9.59375019,10.8208333 9.92916686,11.2041667 L11.1750002,12.45 L14.3375002,9.2875 C14.7208335,8.90416667 15.2958335,8.90416667 15.6791669,9.2875 C16.0625002,9.67083333 16.0625002,10.2458333 15.6791669,10.6291667 L11.8458335,14.4625 C11.6541669,14.6541667 11.4145835,14.75 11.1750002,14.75 Z" fill="#000000" />
												</g>
											</svg>
                                            <!--end::Svg Icon-->
										</span>
                            </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item mb-3" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="User Management">
                            <a href="#" class="nav-link btn btn-icon btn-clean btn-lg" data-toggle="tab" data-target="#kt_aside_tab_5" role="tab">
										<span class="svg-icon svg-icon-xl">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Home/Library.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
													<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
												</g>
											</svg>
                                            <!--end::Svg Icon-->
										</span>
                            </a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item mb-3" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Finance &amp; Accounting">
                            <a href="#" class="nav-link btn btn-icon btn-clean btn-lg" data-toggle="tab" data-target="#kt_aside_tab_6" role="tab">
										<span class="svg-icon svg-icon-xl">
											<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Files/File-plus.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
													<path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000" />
												</g>
											</svg>
                                            <!--end::Svg Icon-->
										</span>
                            </a>
                        </li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Nav-->
                </div>
                <!--end::Nav Wrapper-->
                <!--begin::Footer-->
                <div class="aside-footer d-flex flex-column align-items-center flex-column-auto py-4 py-lg-10">
                    <!--begin::Aside Toggle-->
                    <span class="aside-toggle btn btn-icon btn-primary btn-hover-primary shadow-sm" id="kt_aside_toggle" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Toggle Aside">
								<i class="ki ki-bold-arrow-back icon-sm"></i>
							</span>
                    <!--end::Aside Toggle-->
                    <!--begin::Quick Actions-->
                    <a href="#" class="btn btn-icon btn-clean btn-lg mb-1" id="kt_quick_actions_toggle" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Quick Actions">
								<span class="svg-icon svg-icon-xl">
									<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Media/Equalizer.svg-->
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24" />
											<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
											<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
											<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
											<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
										</g>
									</svg>
                                    <!--end::Svg Icon-->
								</span>
                    </a>
                    <!--end::Quick Actions-->
                    <!--begin::Quick Panel-->
                    <a href="#" class="btn btn-icon btn-clean btn-lg mb-1 position-relative" id="kt_quick_panel_toggle" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Quick Panel">
								<span class="svg-icon svg-icon-xl">
									<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24" />
											<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
											<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
										</g>
									</svg>
                                    <!--end::Svg Icon-->
								</span>
                        <span class="label label-sm label-light-danger label-rounded font-weight-bolder position-absolute top-0 right-0 mt-1 mr-1">3</span>
                    </a>
                    <!--end::Quick Panel-->
                    <!--begin::User-->
                    <a href="#" class="btn btn-icon btn-clean btn-lg w-40px h-40px" id="kt_quick_user_toggle" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="User Profile">
								<span class="symbol symbol-30 symbol-lg-40">
									<span class="svg-icon svg-icon-xl">
										<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/General/User.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24" />
												<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
												<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
											</g>
										</svg>
                                        <!--end::Svg Icon-->
									</span>
                                    <!--<span class="symbol-label font-size-h5 font-weight-bold">S</span>-->
								</span>
                    </a>
                    <!--end::User-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Primary-->
            <!--begin::Secondary-->
            <div class="aside-secondary d-flex flex-row-fluid">
                <!--begin::Workspace-->
                <div class="aside-workspace scroll scroll-push my-2">
                    <!--begin::Tab Content-->
                    <div class="tab-content">
                        <!--begin::Tab Pane-->
                        <div class="tab-pane p-3 px-lg-7 py-lg-5 fade show active" id="kt_aside_tab_1">
                            <!--begin::Form-->
                            <!--end::Form-->
                            <h3 class="p-2 p-lg-3 my-1 my-lg-3">Projects</h3>
                            <!--begin::List-->
                            <div class="list list-hover">
                                <!--begin::Item-->
                                <div class="list-item hoverable p-2 p-lg-3 mb-2">
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40 symbol-light mr-4">
													<span class="symbol-label bg-hover-white">
														<img src="https://preview.keenthemes.com/metronic/theme/html/demo3/dist/assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" />
													</span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Text-->
                                        <div class="d-flex flex-column flex-grow-1 mr-2">
                                            <span class="text-dark-75 font-size-h6 mb-0">Bravio Application</span>
                                            <a href="#" class="text-muted text-hover-primary font-weight-bold">By James</a>
                                        </div>
                                        <!--begin::End-->
                                    </div>
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="list-item hoverable p-2 p-lg-3 mb-2">
                                    <div class="d-flex align-items-center">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40 symbol-light mr-4">
													<span class="symbol-label bg-hover-white">
														<img src="https://preview.keenthemes.com/metronic/theme/html/demo3/dist/assets/media/svg/misc/010-vimeo.svg" class="h-50 align-self-center" />
													</span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Text-->
                                        <div class="d-flex flex-column flex-grow-1 mr-2">
                                            <span class="text-dark-75 font-size-h6 mb-0">Quick Reports</span>
                                            <a href="#" class="text-muted text-hover-primary font-weight-bold">By Ana</a>
                                        </div>
                                        <!--begin::End-->
                                    </div>
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::List-->
                        </div>
                        <!--end::Tab Pane-->
                        <!--begin::Tab Pane-->
                        <div class="tab-pane fade" id="kt_aside_tab_2">
                            <!--begin::Aside Menu-->
                            <div class="aside-menu-wrapper flex-column-fluid px-3 px-lg-10 py-5" id="kt_aside_menu_wrapper">
                                <!--begin::Menu Container-->
                                <div id="kt_aside_menu" class="aside-menu min-h-lg-800px" data-menu-vertical="1" data-menu-scroll="1">
                                    <!--begin::Menu Nav-->
                                    <ul class="menu-nav">
                                        <li class="menu-item menu-item-active" aria-haspopup="true">
                                            <a href="{{ route('home') }}" class="menu-link">
														<span class="svg-icon menu-icon">
															<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Layers.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
																</g>
															</svg>
                                                            <!--end::Svg Icon-->
														</span>
                                                <span class="menu-text">Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="menu-section">
                                            <h4 class="menu-text">Custom</h4>
                                            <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                                        </li>
                                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                            <a href="javascript:;" class="menu-link menu-toggle">
														<span class="svg-icon menu-icon">
															<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Shopping/Barcode-read.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<rect fill="#000000" opacity="0.3" x="4" y="4" width="8" height="16" />
																	<path d="M6,18 L9,18 C9.66666667,18.1143819 10,18.4477153 10,19 C10,19.5522847 9.66666667,19.8856181 9,20 L4,20 L4,15 C4,14.3333333 4.33333333,14 5,14 C5.66666667,14 6,14.3333333 6,15 L6,18 Z M18,18 L18,15 C18.1143819,14.3333333 18.4477153,14 19,14 C19.5522847,14 19.8856181,14.3333333 20,15 L20,20 L15,20 C14.3333333,20 14,19.6666667 14,19 C14,18.3333333 14.3333333,18 15,18 L18,18 Z M18,6 L15,6 C14.3333333,5.88561808 14,5.55228475 14,5 C14,4.44771525 14.3333333,4.11438192 15,4 L20,4 L20,9 C20,9.66666667 19.6666667,10 19,10 C18.3333333,10 18,9.66666667 18,9 L18,6 Z M6,6 L6,9 C5.88561808,9.66666667 5.55228475,10 5,10 C4.44771525,10 4.11438192,9.66666667 4,9 L4,4 L9,4 C9.66666667,4 10,4.33333333 10,5 C10,5.66666667 9.66666667,6 9,6 L6,6 Z" fill="#000000" fill-rule="nonzero" />
																</g>
															</svg>
                                                            <!--end::Svg Icon-->
														</span>
                                                <span class="menu-text">Pages</span>
                                                <i class="menu-arrow"></i>
                                            </a>
                                            <div class="menu-submenu">
                                                <i class="menu-arrow"></i>
                                                <ul class="menu-subnav">
                                                    <li class="menu-item menu-item-parent" aria-haspopup="true">
																<span class="menu-link">
																	<span class="menu-text">Pages</span>
																</span>
                                                    </li>
                                                    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                        <a href="javascript:;" class="menu-link menu-toggle">
                                                            <i class="menu-bullet menu-bullet-dot">
                                                                <span></span>
                                                            </i>
                                                            <span class="menu-text">Login</span>
                                                            <i class="menu-arrow"></i>
                                                        </a>
                                                        <div class="menu-submenu">
                                                            <i class="menu-arrow"></i>
                                                            <ul class="menu-subnav">
                                                                <li class="menu-item" aria-haspopup="true">
                                                                    <a href="https://preview.keenthemes.com/metronic/demo3/custom/pages/login/login-1.html" class="menu-link">
                                                                        <i class="menu-bullet menu-bullet-dot">
                                                                            <span></span>
                                                                        </i>
                                                                        <span class="menu-text">Login 1</span>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item" aria-haspopup="true">
                                                                    <a href="https://preview.keenthemes.com/metronic/demo3/custom/pages/login/login-2.html" class="menu-link">
                                                                        <i class="menu-bullet menu-bullet-dot">
                                                                            <span></span>
                                                                        </i>
                                                                        <span class="menu-text">Login 2</span>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                                    <a href="javascript:;" class="menu-link menu-toggle">
                                                                        <i class="menu-bullet menu-bullet-dot">
                                                                            <span></span>
                                                                        </i>
                                                                        <span class="menu-text">Login 3</span>
                                                                        <span class="menu-label">
																					<span class="label label-inline label-info">Wizard</span>
																				</span>
                                                                        <i class="menu-arrow"></i>
                                                                    </a>
                                                                    <div class="menu-submenu">
                                                                        <i class="menu-arrow"></i>
                                                                        <ul class="menu-subnav">
                                                                            <li class="menu-item" aria-haspopup="true">
                                                                                <a href="https://preview.keenthemes.com/metronic/demo3/custom/pages/login/login-3/signup.html" class="menu-link">
                                                                                    <i class="menu-bullet menu-bullet-dot">
                                                                                        <span></span>
                                                                                    </i>
                                                                                    <span class="menu-text">Sign Up</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="menu-item" aria-haspopup="true">
                                                                                <a href="https://preview.keenthemes.com/metronic/demo3/custom/pages/login/login-3/signin.html" class="menu-link">
                                                                                    <i class="menu-bullet menu-bullet-dot">
                                                                                        <span></span>
                                                                                    </i>
                                                                                    <span class="menu-text">Sign In</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="menu-item" aria-haspopup="true">
                                                                                <a href="https://preview.keenthemes.com/metronic/demo3/custom/pages/login/login-3/forgot.html" class="menu-link">
                                                                                    <i class="menu-bullet menu-bullet-dot">
                                                                                        <span></span>
                                                                                    </i>
                                                                                    <span class="menu-text">Forgot Password</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                                    <a href="javascript:;" class="menu-link menu-toggle">
                                                                        <i class="menu-bullet menu-bullet-dot">
                                                                            <span></span>
                                                                        </i>
                                                                        <span class="menu-text">Login 4</span>
                                                                        <span class="menu-label">
																					<span class="label label-inline label-info">Wizard</span>
																				</span>
                                                                        <i class="menu-arrow"></i>
                                                                    </a>
                                                                    <div class="menu-submenu">
                                                                        <i class="menu-arrow"></i>
                                                                        <ul class="menu-subnav">
                                                                            <li class="menu-item" aria-haspopup="true">
                                                                                <a href="https://preview.keenthemes.com/metronic/demo3/custom/pages/login/login-4/signup.html" class="menu-link">
                                                                                    <i class="menu-bullet menu-bullet-dot">
                                                                                        <span></span>
                                                                                    </i>
                                                                                    <span class="menu-text">Sign Up</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="menu-item" aria-haspopup="true">
                                                                                <a href="https://preview.keenthemes.com/metronic/demo3/custom/pages/login/login-4/signin.html" class="menu-link">
                                                                                    <i class="menu-bullet menu-bullet-dot">
                                                                                        <span></span>
                                                                                    </i>
                                                                                    <span class="menu-text">Sign In</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="menu-item" aria-haspopup="true">
                                                                                <a href="https://preview.keenthemes.com/metronic/demo3/custom/pages/login/login-4/forgot.html" class="menu-link">
                                                                                    <i class="menu-bullet menu-bullet-dot">
                                                                                        <span></span>
                                                                                    </i>
                                                                                    <span class="menu-text">Forgot Password</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                                                    <a href="javascript:;" class="menu-link menu-toggle">
                                                                        <i class="menu-bullet menu-bullet-dot">
                                                                            <span></span>
                                                                        </i>
                                                                        <span class="menu-text">Classic</span>
                                                                        <i class="menu-arrow"></i>
                                                                    </a>
                                                                    <div class="menu-submenu">
                                                                        <i class="menu-arrow"></i>
                                                                        <ul class="menu-subnav">
                                                                            <li class="menu-item" aria-haspopup="true">
                                                                                <a href="https://preview.keenthemes.com/metronic/demo3/custom/pages/login/classic/login-1.html" class="menu-link">
                                                                                    <i class="menu-bullet menu-bullet-dot">
                                                                                        <span></span>
                                                                                    </i>
                                                                                    <span class="menu-text">Login 1</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="menu-item" aria-haspopup="true">
                                                                                <a href="https://preview.keenthemes.com/metronic/demo3/custom/pages/login/classic/login-2.html" class="menu-link">
                                                                                    <i class="menu-bullet menu-bullet-dot">
                                                                                        <span></span>
                                                                                    </i>
                                                                                    <span class="menu-text">Login 2</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="menu-item" aria-haspopup="true">
                                                                                <a href="https://preview.keenthemes.com/metronic/demo3/custom/pages/login/classic/login-3.html" class="menu-link">
                                                                                    <i class="menu-bullet menu-bullet-dot">
                                                                                        <span></span>
                                                                                    </i>
                                                                                    <span class="menu-text">Login 3</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="menu-item" aria-haspopup="true">
                                                                                <a href="https://preview.keenthemes.com/metronic/demo3/custom/pages/login/classic/login-4.html" class="menu-link">
                                                                                    <i class="menu-bullet menu-bullet-dot">
                                                                                        <span></span>
                                                                                    </i>
                                                                                    <span class="menu-text">Login 4</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="menu-item" aria-haspopup="true">
                                                                                <a href="https://preview.keenthemes.com/metronic/demo3/custom/pages/login/classic/login-5.html" class="menu-link">
                                                                                    <i class="menu-bullet menu-bullet-dot">
                                                                                        <span></span>
                                                                                    </i>
                                                                                    <span class="menu-text">Login 5</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="menu-item" aria-haspopup="true">
                                                                                <a href="https://preview.keenthemes.com/metronic/demo3/custom/pages/login/classic/login-6.html" class="menu-link">
                                                                                    <i class="menu-bullet menu-bullet-dot">
                                                                                        <span></span>
                                                                                    </i>
                                                                                    <span class="menu-text">Login 6</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                    <!--end::Menu Nav-->
                                </div>
                                <!--end::Menu Container-->
                            </div>
                            <!--end::Aside Menu-->
                        </div>
                        <!--end::Tab Pane-->
                    </div>
                    <!--end::Tab Content-->
                </div>
                <!--end::Workspace-->
            </div>
            <!--end::Secondary-->
        </div>
        <!--end::Aside-->
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
            <!--begin::Footer-->
            <!--doc: add "bg-white" class to have footer with solod background color-->
            <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                <!--begin::Container-->
                <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <!--begin::Copyright-->
                    <div class="text-dark order-2 order-md-1">
                        <span class="text-muted font-weight-bold mr-2">{{ date('Y') }}©</span>
                        <a href="#" target="_blank" class="text-dark-75 text-hover-primary">Company</a>
                    </div>
                    <!--end::Copyright-->
                    <!--begin::Nav-->
                    <div class="nav nav-dark order-1 order-md-2">
                        <a href="#" target="_blank" class="nav-link pr-3 pl-0">About</a>
                        <a href="#" target="_blank" class="nav-link px-3">Team</a>
                        <a href="#" target="_blank" class="nav-link pl-3 pr-0">Contact</a>
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->
@endsection
