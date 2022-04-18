<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lstService = Service::all();


        return view('admin.service.list',[
            'title' => 'Dich vu thiet bi',
            'lstService' => $lstService
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lstService = Service::all();
        return view('admin.service.create',[
            'title' => 'Tạo dịch vụ',
            'lstService' => $lstService
            
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
        try{
            $data = $request->all();
            $service = new Service();
            $service->id_service = $data['id_service'];
            $service->service_name = $data['service_name'];
            $service->description = $data['description'];
            $service->status = $data['status'];
            $service->save();
            Session::flash('success','Tạo thành công');
        } catch(\Exception $err)
        {
                Session::flash('error',$err->getMessage());
                return false;
        }
        
        
        

        return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        

        return view('admin.service.show',[
            'title' => 'Chi tiết dịch vụ',
            'service' => $service
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $ser = Service::find($service);
        $lstService = Service::all();

        return view('admin.service.update',[
            'title' => 'Cập nhật dịch vụ',
            'lstService' => $lstService,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $data = $request->all();
        $service = Service::find($service);
        $service->id_service = $data['id_service'];
        $service->service_name = $data['service_name'];
        $service->description = $data['description'];
        $service->status = $data['status'];
        $service->save();

        return redirect()->route('service.index');
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
