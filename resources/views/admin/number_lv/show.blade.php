@extends('layouts.main')
@section('url')
<li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Dashboard <span class=""> > </span>Thiết bị<span class=""> > </span>Chi tiết</a>
</li>
@endsection
@section('content')
<form action="{{route('numlv.update',['numlv' => $numlv])}}" method="post" enctype="multipart/form">
            @method('PATCH')
    @csrf      

    <div class="card-body">
            <div class="row">
                <div class="col-md-4  ">
                    <h4>Thông tin cấp số</h4>
                
                </div>
            </div>
            <div class="row">

            
                <div class="col-md-4">
                    <div class="form-group col-md-8 margin-top">
                        <label for="name">Họ tên: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <span>{{$numlv->username_cus}}</span>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="name">Tên dịch vụ:</label>
                        <span class="md-4">{{$numlv->service}}</span>

                    </div>
                    <div class="form-group col-md-8">
                        <label for="name">Số thứ tự:</label>
                        <span>{{$numlv->stt}}</span>

                    </div>
                    <div class="form-group col-md-8">
                        <label for="name">Thời gian cấp:</label>
                        <span>{{$numlv->updated_at}}</span>

                    </div>
                    <div class="form-group col-md-8">
                        <label for="name">Hạn sử dụng:</label>
                        <span>{{$numlv->hsd}}</span>

                    </div>
                </div>
                <div class="col-md-4">
                    
                    
                    <div class="form-group col-md-8">
                        <label for="name">Nguồn cấp:</label>
                        <span>{{$numlv->device_id}}</span>
                    </div>
                    <div class="form-group col-md-8 margin-top">
                        <label for="name">Trạng thái:</label>
                        <span>{{$numlv->status}}</span>
                    </div>
                    <div class="form-group col-md-8 margin-top">
                        <label for="name">Số điện thoại:</label>
                        <span>{{$numlv->sdt}}</span>
                    </div>
                    <div class="form-group col-md-8 margin-top">
                        <label for="name">Địa chỉ email:</label>
                        <span>{{$numlv->email}}</span>
                    </div>
                </div>
            </div>
            
            <!-- /.card-body -->
        </div>
    
</div>
<div class="card-footer clearfix">
        
</div>
</form>
@endsection