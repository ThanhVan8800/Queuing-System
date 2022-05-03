    @extends('layouts.main')
@section('head')
<!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/templates/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="/templates/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/templates/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/templates/admin/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/templates/admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/templates/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/templates/admin/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/templates/admin/plugins/summernote/summernote-bs4.min.css">
@endsection
    @section('content')
    <!-- Small boxes (Stat box) -->
    <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                <div class="inner">
                    <h3>150</h3>

                    <p>Số thứ tự đã cấp
                    <span class="float-right text-white">
                        <i class="fas fa-arrow-up text-sm"></i>
                        12%
                    </span>
                    </p>
                    
                </div>
                <div class="icon">
                    <i class="ion ion-calendar"></i>
                </div>
                
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-blue">
                <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>
                    <p>Số thứ tự đã sử dụng
                        <span class="float-right text-white">
                            <i class="fas fa-arrow-down text-sm"></i>
                            12%
                        </span>
                    </p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box ">
                <div class="inner">
                    <h3>44</h3>

                    <p>Số thứ tự đang chờ
                        <span class="float-right text-green">
                            <i class="fas fa-arrow-up text-sm"></i>
                            12%
                        </span>
                    </p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                <div class="inner">
                    <h3>65</h3>

                    <p>Số thứ tự đã bỏ qua
                        <span class="float-right text-white">
                            <i class="fas fa-arrow-up text-sm"></i>
                            12%
                        </span>
                    </p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                </div>
            </div>
            <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                    <i class="fas fa-chart-pie mr-1"></i>
                            Bảng thống kê theo ngày
                    </h3>
                    <div class="card-tools">
                    <ul class="nav nav-pills ml-auto">
                        <li class="nav-item">
                        <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                        </li>
                    </ul>
                    </div>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content p-0">
                    <!-- Morris chart - Sales -->
                    <div class="chart tab-pane active" id="revenue-chart"
                        style="position: relative; height: 300px;">
                        <canvas id="revenue-chart-canvas" height="300" style="height: 300px;width: 100%;"></canvas>
                    </div>
                    <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                        <canvas id="sales-chart-canvas" height="300" style="height: 300px;width: 100%;"></canvas>
                    </div>
                    </div>
                </div><!-- /.card-body -->
                </div>
                <!-- /.card -->
                <!-- DIRECT CHAT -->
                

                <!-- TO DO List -->
                <div class="card">
                
                <!-- /.card-header -->
                <div class="card-body">
                    
                </div>
                <!-- /.card-body -->
                
                </div>
                <!-- /.card -->
            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">

                <!-- Map card -->
                <div class="card bg-gradient-primary">
                
                <!-- /.card-body-->
                <div class="card-footer bg-transparent">
                    <div class="row">
                    <div class="col-4 text-center">
                        <div id="sparkline-1"></div>
                        <div class="text-white">Số lượng vé</div>
                    </div>
                    <!-- ./col -->
                    <div class="col-4 text-center">
                        <div id="sparkline-2"></div>
                        <div class="text-white">Đang chờ</div>
                    </div>
                    <!-- ./col -->
                    <div class="col-4 text-center">
                        <div id="sparkline-3"></div>
                        <div class="text-white">Đã hủy</div>
                    </div>
                    <!-- ./col -->
                    </div>
                    <!-- /.row -->
                </div>
                </div>
                <!-- /.card -->

                <!-- solid sales graph -->
                <div class="card bg-gradient-info">
                <div class="card-header border-0">
                    
                </div>
                
                <!-- /.card-body -->
                
                <!-- /.card-footer -->
                </div>
                <!-- /.card -->

            
                <!-- /.card-header -->
                <div class="card-body pt-0">
                    <!--The calendar -->
                    <div id="calendar" style="width: 100%"></div>
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </section>
            <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
            </div>
    
    @endsection
    @section('footer')
        <!-- jQuery -->
        <script src="/templates/admin/plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="/templates/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="/templates/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="/templates/admin/plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="/templates/admin/plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="/templates/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="/templates/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="/templates/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="/templates/admin/plugins/moment/moment.min.js"></script>
        <script src="/templates/admin/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="/templates/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="/templates/admin/plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="/templates/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="/templates/admin/dist/js/adminlte.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="/templates/admin/dist/js/demo.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="/templates/admin/dist/js/pages/dashboard.js"></script>
    @endsection