@extends('layouts.main')
@section('url')
<li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Báo cáo <span class=""> > </span>Lập báo cáo</a>
</li>
@endsection
@section('content')
<div class="card card-primary mt-3">
    
    <div class="card-body">
                    <div class="row">
                                <div class="col-md-3">
                                        <!-- <div class="form-group">
                                            <label>Chọn thời gian</label>
                                                        
                                        </div> -->
                                        <button class="btn btn-warning">Tải về</button>
                                </div>
                            
                    </div>
                    <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th style="width: 90px; " class="id-dev" >Tên đăng nhập</th>
                            <th style="width: 99px; " class="id-dev1">Thời gian tác động</th>
                            <th style="width: 138px;" class="id-dev">IP thực hiện</th>
                            <th style="width: 171px" class="id-dev"> Thao tác thực hiện </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>thanh@gmail.com</td>
                            <td>05/07/2022 11:01 AM</td>
                            <td>192.168.1.2</td>
                            <td>Thêm mới thiết bị</td>
                        </tr>
                        <tr>
                            <td>le@gmail.com</td>
                            <td>05/01/2022 02:01 AM</td>
                            <td>192.168.1.10</td>
                            <td>Cấp số mới</td>
                        </tr>
                        <tr>
                            <td>anh@gmail.com</td>
                            <td>04/07/2022 13:01 PM</td>
                            <td>192.168.1.2</td>
                            <td>Thêm dịch vụ</td>
                        </tr>
                    </tbody>
                </table>
                
    </div>
    
</div>
@endsection