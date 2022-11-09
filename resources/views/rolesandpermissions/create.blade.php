@extends('layouts.sidebar_menu')
@section('tab-pane')
    @include('layouts.tab_panes.roles_pane')
@endsection
@push('page-css')
    {{--    <link rel="stylesheet" type="text/css" href="{{ asset('Datatable/datatable.min.css') }}"/>--}}

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
                            <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Roles</h2>
                            <!--end::Page Title-->
                        </div>
                        <!--end::Page Heading-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Toolbar-->
{{--                    <div class="d-flex align-items-center flex-wrap">--}}
{{--                        <!--begin::Button-->--}}
{{--                        <a href="#" class="btn btn-primary btn-shadow" data-toggle="modal" data-target="#departmentAddModal">--}}
{{--                            <i class="flaticon-plus"></i> Add Role--}}
{{--                        </a>--}}
{{--                    </div>--}}
                </div>
            </div>
            <div class="container">
                <div class="card card-custom gutter-b example example-compact shadow-lg">
                    <div class="card-header">
                        <h3 class="card-title">Create Role</h3>
                    </div>
                    <div class="card-body">
                        @include('layouts.partials.messages')
                        <div class="data-tables">
                            <form action="{{ route("rolesandpermissions.store") }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Role Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Please Enter Role Name">
                                </div>

                                {{--List of permissions--}}
                                <div class="form-group">
                                    <label for="permissions">Permissions</label>

                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkPermissionAll" value="1">
                                        <label class="form-check-label" for="checkPermissionAll">All</label>
                                    </div>
                                    <hr>
                                    @php $i = 1; @endphp
                                    @foreach ($permission_groups as $group)
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="form-check">
{{--                                                    name="permissions[]"--}}
                                                    <input type="checkbox" class="form-check-input" id="{{ $i }}Management" value="{{ $group->name }}" onclick="checkPermissionByGroup('role-{{ $i }}-management-checkbox', this)">
                                                    <label class="form-check-label" for="checkPermission">{{ $group->name }}</label>
                                                </div>
                                            </div>
                                            <div class="clo-9 role-{{ $i }}-management-checkbox">
                                                @php
//                                                    $permissions = App\User::getpermissionsByGroupName($group->name);
                                                    $j = 1;
                                                @endphp
                                                @foreach ($permissions as $permission)
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" name="permissions[]" id="checkPermission{{ $permission->id }}" value="{{ $permission->name }}">
                                                        <label class="form-check-label" for="checkPermission{{ $permission->id }}">{{ $permission->name }}</label>
                                                    </div>
                                                    @php $j++; @endphp
                                                @endforeach
                                                <br >
                                            </div>
                                        </div>
                                        @php $i++; @endphp
                                    @endforeach
                                </div>
                                <button type="submit" class="btn btn-primary mt-4 pr-1 pl-4">Save Role</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
        @push('page-js')
            {{--            {!! $dataTable->scripts() !!}--}}
            {{--            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>--}}
            <script type="text/javascript" src="{{ asset('Datatable/pdfmake.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('Datatable/pdfmake_font.js') }}"></script>
            <script type="text/javascript" src="{{ asset('Datatable/datatable.min.js') }}"></script>
            <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
            <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootsrap4.min.js"></script>
            <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
            <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.bootstrap.min.js"></script>
            {{--            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>--}}
            <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/kt-2.7.0/r-2.3.0/sc-2.0.7/sb-1.3.4/sp-2.0.2/sl-1.4.0/datatables.min.js"></script>

            <script>
                if ($('#dataTable').length){
                    $('#dataTable').DataTable({
                        responsive:true
                    });
                }
            </script>

            <script>
                $("#checkPermissionAll").click(function(){
                    if($(this).is(':checked')){
                    //    Check all the checkboxes
                        $('input[type=checkbox]').prop('checked', true);
                    }else {
                    //    uncheck all the checkboxes
                        $('input[type=checkbox]').prop('checked', false);
                    }
                })

                function checkPermissionByGroup(className, checkThis){
                    const groupIdName = $("#"+checkThis.id);
                    const classCheckBox = $('.'+className+' input');

                    if(groupIdName.is(':checked')){
                        classCheckBox.prop('checked', true);
                    }else{
                        classCheckBox.prop('checked', false);
                    }
                }
            </script>
    @endpush
