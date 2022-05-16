    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-white-primary elevation-4">
            <!-- Brand Logo -->
            
            
            <!-- Sidebar -->
            <div class="sidebar">
            <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                    <img src="/assets/img/logoAlta.png" class="" style="height: 100px;width: 150px;margin-left: 20px;" alt="User Image">
                    </div>
                    <div class="info">
                    
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <!-- <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                    </div> -->
                </div>

                <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                            with font-awesome or any other icon font library -->
                            <li class="nav-item">
                                <a href="/admin/dashboards/dashboard" class="nav-link">

                                <i class="nav-icon fas fa-solid fa-fax"></i>
                                <p>
                                    Dashboard
                                
                                </p>
                                </a>
                                
                            </li>
                            <li class="nav-item">
                                <a href="/admin/devices/device" class="nav-link">
                                        <!-- <i class="nav-icon fas fa-users"></i> -->
                                        <i class="nav-icon fas fa-solid fa-desktop"></i>
                                        <p>
                                            Thiết bị
                                            <!-- <i class="right fas fa-angle-left"></i> -->
                                        </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/services/service" class="nav-link">
                                <!-- <i class=" nav-icon far fa-images"></i> -->
                                <i class="nav-icon fas fa-comments"></i>
                                
                                <p>
                                    Dịch vụ
                                
                                </p>
                                </a>
                            
                            </li>
                            <li class="nav-item">
                                <a href="/admin/num_lvs/numlv"class="nav-link">
                                <i class="nav-icon fas fa-copy "></i>
                                    Cấp số
                                </a>
                            
                            </li>
                            <li class="nav-item">
                                <a href="/admin/settings/setting" class="nav-link" >
                                        <!-- <i class="nav-icon far fa-calendar-alt "></i> -->
                                        <!-- <i class="nav-icon far fa-solid fa-calendar"></i> -->
                                        <!-- <i class="nav-icon fas fa-solid"></i> -->
                                        <i class="nav icon fas fa-solid fa-wrench">
                                        <!-- <i class="fa-solid fa-wrench"></i> -->
                                                <p> Cài đặt hệ thống</p>
                                        </i>                                    
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <!-- ghi đường dẫn vô -->
                                                <a href="/admin/users/user" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Quản lý tài khoản</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="/admin/settings/setting" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Danh sách vai trò </p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="/admin/history/setting" class="nav-link" >
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Nhật ký hoạt động </p>
                                                </a>
                                            </li>
                                        </ul>
                            
                            </a>
                            
                            </li>        
                            <li class="nav-item">
                                <a href="/admin/reports/report" class="nav-link" style="margin-bottom:200px">
                                <i class="nav-icon far fa-calendar-alt "></i>
                                <p>
                                    Báo cáo
                                
                                </p>
                                </a>
                            
                            </li>
                                        
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                @auth
                    
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        
                        <button type="submit" value="Đăng xuất" class="btn btn-logout mt-5  " style="color:#FF7506;">
                        
                        <i class="fas fa-sign-out-alt"></i>Đăng xuất
                    
                        </button>
                        <!-- <i class="fas fa-sign-out-alt"></i> -->
                    </form>
                @endauth
                <!-- <a href="" class="btn btn-logout " style="color:#FF7506;">
                    <i class="nav-icon far fa-solid fa-calendar"></i>
                        Đăng xuất
                </a> -->
            <!-- /.sidebar -->
</aside>