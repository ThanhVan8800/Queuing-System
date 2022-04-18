    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-white-primary elevation-4">
            <!-- Brand Logo -->
            
            
            <!-- Sidebar -->
            <div class="sidebar">
            <!-- Sidebar user (optional) -->
                <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                    <img src="/templates/admin/dist/img/yua-mikami.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                    <a href="#" class="d-block">Alexander Thanh</a>
                    </div>
                </div> -->

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
                                <a href="#" class="nav-link">
                                <i class="nav-icon far fa-calendar-alt "></i>
                                <p>
                                    Dashboard
                                
                                </p>
                                </a>
                                
                            </li>
                            <li class="nav-item">
                                <a href="/admin/devices/device" class="nav-link">
                                        <i class="nav-icon far fa-calendar-alt "></i>
                                        <p>
                                            Thiết bị
                                            <!-- <i class="right fas fa-angle-left"></i> -->
                                        </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/services/service" class="nav-link">
                                <!-- <i class=" nav-icon far fa-images"></i> -->
                                <i class="nav-icon far fa-solid fa-address-card"></i>
                                <p>
                                    Dịch vụ
                                
                                </p>
                                </a>
                            
                            </li>
                            <li class="nav-item">
                                <a href=""class="nav-link">
                                <i class="nav-icon far fa-calendar-alt "></i>
                                    Cấp số
                                </a>
                            
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                <i class="nav-icon far fa-calendar-alt "></i>
                                <p>
                                    Báo cáo
                                
                                </p>
                                </a>
                            
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                <!-- <i class="nav-icon far fa-calendar-alt "></i> -->
                                <i class="nav-icon far fa-solid fa-calendar"></i>
                                <p>
                                    Cài đặt hệ thống
                                </p>
                            </a>
                            
                            </li>                    
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                @auth
                    {{Auth::user()->name}} || 
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <input type="submit" value="Đăng xuất" class="btn btn-logout " style="color:#FF7506;">
                        <i class="fas fa-sign-out-alt"></i></input>
                    </form>
                @endauth
                <!-- <a href="" class="btn btn-logout " style="color:#FF7506;">
                    <i class="nav-icon far fa-solid fa-calendar"></i>
                        Đăng xuất
                </a> -->
            <!-- /.sidebar -->
</aside>