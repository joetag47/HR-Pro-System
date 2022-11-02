<div class="tab-pane p-3 px-lg-7 py-lg-5 fade show active" id="kt_aside_tab_1">

    <h3 class="p-2 p-lg-3 my-1 my-lg-3">User Management</h3>
    <div class="list list-hover">
        <!--begin::Item-->

        <div class="list-item hoverable shadow mb-10 p-5">
            <div class="d-flex align-items-center">
                <div class="d-flex flex-column flex-grow-1 mr-2">
                    <a href="{{ route('userManagement.index') }}" class="text-dark-75 font-size-h6 mb-0">Users</a>
                </div>
                <div class="symbol symbol-40 symbol-light mr-4">
						<span class="symbol-label bg-primary">
                            <i class="fa fa-sitemap text-white"></i>
						</span>
                </div>
                <!--begin::End-->
            </div>
        </div>
    </div>
    <div class="list list-hover">
        <!--begin::Item-->

        <div class="list-item hoverable shadow mb-10 p-5">
            <div class="d-flex align-items-center">
                <div class="d-flex flex-column flex-grow-1 mr-2">
                    <a href="{{ route('rolesandpermissions.roleindex') }}" class="text-dark-75 font-size-h6 mb-0">Roles</a>
                </div>
                <div class="symbol symbol-40 symbol-light mr-4">
						<span class="symbol-label bg-primary">
                            <i class="fa fa-users text-white"></i>
						</span>
                </div>
                <!--begin::End-->
            </div>
        </div>


        <div class="list-item hoverable shadow mb-10 p-5">
            <div class="d-flex align-items-center">
                <div class="d-flex flex-column flex-grow-1 mr-2">
                    <a href="{{ route('rolesandpermissions.create') }}" class="text-dark-75 font-size-h6 mb-0">Permissions</a>
                </div>
                <div class="symbol symbol-40 symbol-light mr-4">
						<span class="symbol-label bg-primary">
                            <i class="fa fa-users text-white"></i>
						</span>
                </div>
                <!--begin::End-->
            </div>
        </div>

    </div>
</div>
