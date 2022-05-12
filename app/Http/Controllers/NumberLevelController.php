<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Num_lv;
use App\Models\Service;
use App\Models\Device;

class NumberLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dev = Device::pluck('device_name','id');
        $lstNum = Num_lv::with('device')->get();
        return view('admin.number_lv.list',[
            'title' => ' Danh sách cấp số',
            'lstNum' => $lstNum,
            'dev' => $dev
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ser = Service::pluck('service_name','id');
        $lstNum = Num_lv::with('service')->where('status',0)->get();
        return view('admin.number_lv.create',[
                'title' => 'Create a new resource',
                
                
        ],compact('lstNum','ser'));
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
        $num_lv = new Num_lv();
        // $num_lv->stt = $data['stt'];
        // $num_lv->user_name = $data['user_name'];
        // $num_lv->hsd = $data['hsd'];
        // $num_lv->status = $data['status'];
        // $num_lv->sdt = $data['sdt'];
        // $num_lv->email = $data['email'];
        $num_lv->service = $data['service'];
        // $num_lv->device_id = $data['device_id'];
        $num_lv->save();
        return redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Num_lv $numlv)
    {
        return view('admin.number_lv.show',[
            'title' =>'Quản lí cấp số',
            'numlv' => $numlv
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
