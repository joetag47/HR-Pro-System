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
                    <div class="d-flex align-items-center flex-wrap">
                        <!--begin::Button-->
                        <a href="{{ route("rolesandpermissions.create") }}" class="btn btn-primary btn-shadow" data-toggle="" data-target="#">
                            <i class="flaticon-plus"></i> Add Role
                        </a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="card card-custom gutter-b example example-compact shadow-lg">
{{--                    <div class="card-header">--}}
{{--                        <h3 class="card-title">All Roles</h3>--}}
{{--                        <div>--}}
{{--                            <a href="" class="btn btn-outline-primary btn-sm mt-4">View All Roles</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="card-body">
{{--                        <div class="table-responsive">--}}
{{--                            {!! $dataTable->table(['class' => 'table table-hover']) !!}--}}
{{--                        </div>--}}
                        <div class="data-tables">
                            <table id="dataTable" class="text-center">
                                <thead class="bg-light text-capitali">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal-->
        <div class="modal fade" id="departmentAddModal" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New Role</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
{{--                    <form class="addItem" action="{{ route('rolesandpermissions.store') }}" method="POST">--}}
{{--                        @csrf--}}
{{--                        @method('POST')--}}
{{--                        <div class="modal-body">--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Role Name <span class="text-danger">*</span></label>--}}
{{--                                <input type="text" class="form-control" name="name">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="modal-footer">--}}
{{--                            <button type="button" class="btn btn-danger font-weight-bold" data-dismiss="modal">Close</button>--}}
{{--                            <input type="submit" class="btn btn-primary font-weight-bold" value="Save Role">--}}
{{--                        </div>--}}
{{--                    </form>--}}
                </div>
            </div>
        </div>
        <div class="modal fade" id="departmentEditModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Department</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <form class="addItem" id="editDepartmentForm" action="" method="POST">
                        @csrf
                        @method('POST')
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name" id="editName">
                            </div>
                            <div class="form-group">
                                <label>Description </label>
                                <textarea class="form-control" name="description" id="editDescription"></textarea>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger font-weight-bold" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary font-weight-bold">Update Department</button>
                        </div>
                    </form>
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
    @endpush
