@extends('layouts.main')

@section('content')
<form action="{{route('numlv.store')}}" method="post">
    <div class="card card-primary mt-3">
        <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                        <div class="row">
                                <div class="form-group col-md-12">

                                    <label style="color:#FF7506;margin-left: 45%;">Cấp số mới</label><br>
                                    <label style="margin-left: 40%;" >Dịch vụ khách hàng lựa chọn</label>
                                </div>
                                
                        </div>
                        <div class="col-md-3 ">
                                        <div class="form-group">
                                            
                                                        <select class="form-control select2" style="width: 100%;    margin-left: 150%;">
                                                            <option selected="selected">Tất cả</option>
                                                            <option>Hoạt động</option>
                                                            <option>Ngưng hoạt động</option>
                                                        </select>
                                        </div>
                        </div>
        
        </div>
    </div>
    <div class="row">

        <!-- <label for="" class="btn-cancel">Hủy bỏ</label> -->
        <a href="" ><label for="" class="btn-cancel">Hủy bỏ</label></a>
        <button class="btn-create">In số</button>
        @csrf
    </div>
</form>
@endsection

@section('footer')

@endsection