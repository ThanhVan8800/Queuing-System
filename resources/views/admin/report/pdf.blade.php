<div class="card card-primary mt-3">
    
    <div class="card-body">
                    
                    <table class="table table-bordered ">
                    <thead>
                        <tr>
                        <th style="width: 90px; " class="id-dev" >Số thứ tự</th>
                        <th style="width: 99px; " class="id-dev1">Tên dịch vụ</th>
                        <th style="width: 138px;" class="id-dev">Thời gian cấp</th>
                        <th style="width: 171px" class="id-dev">Tình trạng </th>
                        <th style="width: 171px" class="id-dev">Nguồn cấp</th>
                        

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lstNum as $num )
                        <tr>
                            <td>{{ $num->stt}}</td>
                            <td>{{ $num->service }}</td>
                            <td>
                                {{ $num->updated_at}}
                            </td>
                            <td>
                                @if($num->status == 0)
                                <span class="btn btn-primary btn-xs"></span>Đang chờ
                                @elseif ($num->status == 1)  
                                <span class="btn btn-secondary btn-xs"></span>Đã sử dụng  
                                @elseif ($num->status == 2)  
                                <span class="btn btn-danger btn-xs"></span> Bỏ qua
                                @endif
                            </td>
                            <td>{{$num->device->device_name }}</td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
                
    </div>
    
</div>