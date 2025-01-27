<div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="{{route('admin.home')}}"><img src="{{asset('assets/images/logo/logo.png')}}" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Menu</li>

                    <li class="sidebar-item {{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
                        <a href="{{ route('admin.home') }}" class="sidebar-link">
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    @can('user-create')
                    <li class="sidebar-item {{ Route::currentRouteName() == 'users.index' ? 'active' : '' }}">
                        <a href="{{ route('users.index') }}" class="sidebar-link">
                            <i class="bi bi-people"></i>
                            <span>Manage Vendors</span>
                        </a>
                    </li>
                    @endcan
                    @can('role-edit')
                    <li class="sidebar-item {{ Route::currentRouteName() == 'roles.index' ? 'active' : '' }}">
                        <a href="{{ route('roles.index') }}" class="sidebar-link">
                            <i class="bi bi-person-plus-fill"></i>
                            <span>Manage Roles</span>
                        </a>
                    </li>
                    @endcan
                    <li class="sidebar-item {{ Route::currentRouteName() == 'products.index' ? 'active' : '' }}">
                        <a href="{{ route('products.index') }}" class="sidebar-link">
                            <i class="bi bi-file-earmark-plus"></i>
                            <span>Manage Products</span>
                        </a>
                    </li>
                </ul>

                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>