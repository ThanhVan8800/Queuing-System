@extends('layouts.main')

@section('content')
<form action="{{route('setting.store')}}" method="post">
    <div class="card card-primary mt-3">
        <div class="card-body">
                        <div class="col-md-3">
                                <div class="form-group">
                                                <label style="color:#FF7506;">Thông tin vai trò</label>
                                </div>
                        </div>
                        <div class="row">
                                <div class="form-group col-md-6">
                                    <label >Tên vai trò: <span style="color:#FF4747;">*</span> </label>
                                    <input type="text" name="" class="form-control" id="exampleInputEmail1" placeholder="Nhập mã thiết bị">
                                    <label >Mô tả: <span style="color:#FF4747;">*</span> </label><br />
                                    <textarea name="description"  class="textarea"id="" cols="88" rows="4"></textarea>
                                </div>
                            
                                <div class="form-group col-md-6">
                                        <label> Phân quyền chức năng: <span style="color:#FF4747;">*</span></label><br>
                                        <label style="color:#FF7506;">Nhóm chức năng A</label>
                                        <!-- checkbox -->
                                        <!-- checkbox -->
                                                        <div class="form-group">
                                                            <div class="custom-control custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                                            <label for="customCheckbox1" class="custom-control-label">Tất cả</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                            <input class="custom-control-input" type="checkbox" id="customCheckbox2" checked>
                                                            <label for="customCheckbox2" class="custom-control-label">Chức năng x</label>
                                                            </div>
                                                            
                                                            <div class="custom-control custom-checkbox">
                                                            <input class="custom-control-input " type="checkbox" id="customCheckbox4" checked>
                                                            <label for="customCheckbox4" class="custom-control-label">Chức năng y</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input " type="checkbox" id="customCheckbox5" checked>
                                                                <label for="customCheckbox5" class="custom-control-label">Chức năng z</label>
                                                            </div>
                                                            <label style="color:#FF7506;">Nhóm chức năng A</label>
                                                            <div class="form-group">
                                                                        <div class="">
                                                                                <input class="" type="checkbox" id="" value="">
                                                                                <label   >Tất cả</label>
                                                                        </div>
                                                                        <div class="">
                                                                                <input class="" type="checkbox" id="" value="">
                                                                                <label  class=" ">Chức năng x</label>
                                                                        </div>
                                                                        <div class="">
                                                                                <input class="" type="checkbox" id="" value="">
                                                                                <label  class=" ">Chức năng y</label>
                                                                        </div>
                                                                        <div class="">
                                                                                <input class="" type="checkbox" id="" value="">
                                                                                <label  class=" ">Chức năng z</label>
                                                                        </div>
                                                            </div>
                                                        </div>
                                                        
                                </div>                     
                        </div>
                        <div class="row">
                        <div class="form-group col-md-6">
                                        
                            
                        </div>
                        <label for="" style="color: #7E7D88;margin-left:10px;"><span style="color:#FF4747;">*</span> Là trường thông tin bắt buộc</label>
                        
        </div>
        
    </div>
    <div class="row">

        <!-- <label for="" class="btn-cancel">Hủy bỏ</label> -->
        <a href="" ><label for="" class="btn-cancel">Hủy bỏ</label></a>
        <button class="btn-create">Thêm </button>
        @csrf
    </div>
</form>
@endsection
@section('footer')
    <script language="JavaScript">

    </script>
@endsection