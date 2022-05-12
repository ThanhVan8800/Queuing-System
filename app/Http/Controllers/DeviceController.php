<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\User;
use DB;
use Illuminate\Support\Str;
class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $string = "aaaa aaaa aaa aaaaa aaaa aaa aaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa";
        // dd(Str::of($string)->words(5));
        $user = User::all();
        $lstDevice = Device::orderByDesc('id')->paginate(7);
        return view('admin.device.list',[
            'title' => 'Thiết bị',
            'lstDevice' => $lstDevice,
            'user' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lstDevice = Device::all();


        return view('admin.device.create',[
            'title' => 'Thêm thiết bị',
            'lstDevice' => $lstDevice
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $device = new Device();
        $device -> id_device = $data['id_device'];
        $device -> device_name = $data['device_name'];
        $device -> ip_address = $data['ip_address'];
        $device -> service_use = $data['service_use'];
        $device -> type = $data['type'];
        $device -> user_name = $data['user_name'];
        $device -> password = $data['password'];
        $device -> save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Device $device)
    {
        return view('admin.device.show',[
            'title' => 'Quản lí thiết bị',
            'device' => $device
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($device)
    {
        $device = Device::find($device);
        $lstDevice = Device::all();

        return view('admin.device.update',[
            'title' => 'Cập nhật',
            'device' => $device,
            'lstDevice' => $lstDevice
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $device)
    {
        $data = $request->all();
        $device =  Device::find($device);
        $device -> device_name = $data['device_name'];
        $device -> ip_address = $data['ip_address'];
        $device -> service_use = $data['service_use'];
        $device -> type = $data['type'];
        $device -> user_name = $data['user_name'];
        $device -> password = $data['password'];
        $device -> save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function search(Request $request)
    {
            $output = '';
            $lst_Dev = Device::where('device_name','LIKE','%'.$request->keyword.'%')->get();
            $lst_Devv = Device::where('status','LIKE','%'.$request->keyword.'%')->get();

            foreach($lst_Dev as $device) {
                $output .='<tr>
                            <td>'.$device->id_device.'</td>
                            <td value="'.$device->device_name.'">'.$device->device_name.'</td>
                            <td>'.$device->ip_address.'</td>
                            <td value="'.$device->status.'">'.$device->status === '1' ?  'Hoạt động':'Ngưng'.' </td>
                            <td>'.$device->status_connect.'</td>
                            <td>
                                '.$device->service_use.'
                                
                                <!-- <span>View Blog</span> -->
                            </td>
                            
                            <td>
                                <a href="'.route('device.show',['device' => $device]).'">Chi tiết</a>
                            </td>
                            <td>
                                <a href="'.route('device.edit',['device' => $device]).'" >Cập nhật</a>
                            </td>
                        </tr>';
            }
            
            return response()->json($output);
    }
    public function filter(Request $request)
    {
        $lstDevice = Device::orderByDesc('id')->paginate(7);
            $device = DB::table('Devices')->get();
            if($request->status_connect)
            {
                // dd($request->status_connect);
                $result = Device::where('status_connect','LIKE','%'.$request->status_connect.'%')->get();
                // dd($result);
            }
            if($request->status)
            {
                // dd($request->status_connect);
                $result = Device::where('status','LIKE','%'.$request->status.'%')->get();
                // dd($result);
            }
            
            return view('admin.device.search',compact('device','lstDevice'),['title' => 'ds','result'=>$result]);
    }
}
