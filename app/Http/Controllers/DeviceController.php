<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lstDevice = Device::all();
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
        


        return view('admin.device.create',[
            'title' => 'Thêm thiết bị',
            
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $device = Device::find($id);


        return view('admin.device.edit',[
            'title' => 'Cập nhật',
            'device' => $device,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $device =  Device::find($id);
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
