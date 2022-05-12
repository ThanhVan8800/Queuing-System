<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Num_lv;
use App\Models\Device;
use App\Models\User;
use PDF;
use Auth;
class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $device = Device::pluck('device_name','id');
        $lstNum = Num_lv::all();
        return view('admin.report.list',[
            'title' => ' Lập báo cáo',
            'lstNum' => $lstNum,
            'device' => $device
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function download(){
        $device = Device::pluck('device_name','id');
        $lstNum = Num_lv::all();
        $pdf = PDF::loadView('admin.report.pdf', compact('lstNum','device'),['title' =>'Tải báo cáo']);
        // return $pdf->download('lstNum.pdf');


            //$result = DB::table('education')->where('education.degree' ,'=','PHD')->where('user_id' ,'=', $user_id)->get();
           // return view('pdf/personalpdf',compact('user', 'result'));
            return $pdf->download('lstNum.pdf');
        
    }
}
