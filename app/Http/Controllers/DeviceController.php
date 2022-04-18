<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
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
        $lstDevice = Device::orderByDesc('id')->paginate(7);
        return view('admin.device.list',[
            'title' => 'Thiết bị',
            'lstDevice' => $lstDevice
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
}
