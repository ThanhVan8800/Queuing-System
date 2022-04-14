@extends('layouts.main')

@section('content')
<div class="card card-primary mt-3">
    <a href="">
        <label for="" class="ad-dev">Thêm thiết bị</label>
    </a>
    <div class="card-body">
                    <div class="row">
                                <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Trạng thái hoạt động</label>
                                                        <select class="form-control select2" style="width: 100%;">
                                                            <option selected="selected">Alabama</option>
                                                            <option>Alaska</option>
                                                            <option>California</option>
                                                            <option>Delaware</option>
                                                            <option>Tennessee</option>
                                                            <option>Texas</option>
                                                            <option>Washington</option>
                                                        </select>
                                        </div>
                                </div>
                                <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Trạng thái kết nối</label>
                                                        <select class="form-control select2" style="width: 100%;">
                                                            <option selected="selected">Alabama</option>
                                                            <option>Alaska</option>
                                                            <option>California</option>
                                                            <option>Delaware</option>
                                                            <option>Tennessee</option>
                                                            <option>Texas</option>
                                                            <option>Washington</option>
                                                        </select>
                                        </div>
                                </div>
                                <div class="col-md-3 offset-md-1">
                                    <form action="simple-results.html">
                                        <label for="">Từ khóa</label>
                                        <div class="input-group">
                                            <input type="search" class="form-control form-control-lg" style="height:36px;" placeholder="Type your keywords here">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn  btn-default" style="height:36px;">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                    </div>
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th style="width: 90px; " class="id-dev" >Mã thiết bị</th>
                        <th style="width: 99px; " class="id-dev1">Tên thiết bị</th>
                        <th style="width: 138px;" class="id-dev">Địa chỉ IP</th>
                        <th style="width: 171px" class="id-dev">Trạng thái hoạt động</th>
                        <th style="width: 145px;" class="id-dev">Trạng thái kết nối</th>
                        <th style="width: 268px;" class="id-dev">Dịch vụ sử dụng</th>
                        <th style="width:82px" class="id-dev"></th>
                        <th style="width:82px" class="id-dev"></th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Update software</td>
                            <td>
                                <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                </div>
                            </td>
                            <td><span class="badge bg-danger">55%</span></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="">Chi tiết</a>
                            </td>
                            <td>
                                <a href="">Cập nhật</a>
                            </td>
                        </tr>
                    
                    </tbody>
                    </table>
    </div>
    
</div>
@endsection