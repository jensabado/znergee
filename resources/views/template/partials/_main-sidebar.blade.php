<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link text-center">
        <span class="brand-text font-weight-bolder text-primary">ZNERGEE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ Auth::guard('employee')->user()->avatar != null ? asset('avatar/employee/' . Auth::guard('employee')->user()->avatar) : asset('avatar/no-avatar/avatar-3.png') }}"
                    class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#"
                    class="d-block">{{ Auth::guard('employee')->user()->first_name . ' ' . Auth::guard('employee')->user()->last_name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu"
                data-accordion="false">

                @if (Auth::guard('employee'))
                    <li class="nav-item">
                        <a href="pages/widgets.html" class="nav-link">
                            <i class="nav-icon fas fa-solid fa-gift"></i>
                            <p>
                                Santas Fun
                            </p>
                        </a>
                    </li>
                    <li class="nav-item @if(url()->full() == url('my-kpi')) menu-is-opening menu-open @endif">
                        <a href="#" class="nav-link @if(url()->full() == url('my-kpi')) active @endif">
                            <i class="nav-icon fas fa-solid fa-chart-line"></i>
                            <p>
                                KPI
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview text-sm">
                            <li class="nav-item">
                                <a href="{{ url('my-kpi') }}" class="nav-link">

                                    <p>My KPI</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('') }}" class="nav-link @if(url()->full() == url('')) active @endif">
                            <i class="nav-icon fas fa-solid fa-house-user"></i>
                            <p>
                                HOME
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-solid fa-box-open"></i>
                            <p>
                                HR OPS
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview text-sm">
                            <li class="nav-item">
                                <a href="pages/layout/top-nav.html" class="nav-link">
                                    <p>Welcome Kit</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/top-nav.html" class="nav-link">

                                    <p>Wellness</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/top-nav.html" class="nav-link">

                                    <p>Safety & Health (OSH)</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/top-nav.html" class="nav-link">

                                    <p>Training</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/top-nav.html" class="nav-link">

                                    <p>Compliance</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item @if(url()->full() == url('employee-details')) menu-is-opening menu-open @endif">
                        <a href="#" class="nav-link @if(url()->full() == url('employee-details')) active @endif">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                MY PROFILE
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview text-sm">
                            <li class="nav-item">
                                <a href="{{ url('employee-details') }}" class="nav-link">

                                    <p>Information</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-solid fa-business-time"></i>
                            <p>
                                TIMEKEEPING
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview text-sm">
                            <li class="nav-item">
                                <a href="pages/layout/top-nav.html" class="nav-link">
                                    <p>Time In/Out</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/top-nav.html" class="nav-link">

                                    <p>My DTR</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/top-nav.html" class="nav-link">

                                    <p>My Shifts</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/top-nav.html" class="nav-link">

                                    <p>SCP</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/layout/top-nav.html" class="nav-link">

                                    <p>My PTO</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
