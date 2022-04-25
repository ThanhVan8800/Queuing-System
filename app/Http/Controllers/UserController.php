<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    protected function fixImage(User $user)
    {
        // chạy lệnh php artisan storage:link
        if(Storage::disk('public')->exists($user->thumb)){
            $user->thumb = Storage::url($user->thumb);
        }else{
            $user->thumb = '';
            // khi khoong co' anh 
        }

    }
    public function index(User $user)
    {
        $lstUser = User::all();
        // foreach($lstUser as $us)
        // {
        //     $this->fixImage($us);
        // }
        return view('admin.user.list',[
            'title' => 'Quản lí tài khoản',
            'lstUser' => $lstUser
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lstUser = User::all();
        return view('admin.user.create',[
            'title' => 'Tạo tài khoản',
            'lstUser' => $lstUser
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
        $data = $request->validate([
            'name' => 'required',
            'password' => 'required|min:6|'
        ]);
        $data = $request->all();

        $user = new User();
        $user->username = $data['username'];
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->sdt = $data['sdt'];
        $user->password = Hash::make($data['password']);
        $user->role = $data['role'];
        $user->status = $data['status'];
        $user->thumb = '';
        $user->save();
        if($request->hasFile('thumb')){
            $user->thumb = $request->file('thumb')->store('thumb/us/'.$user->id,'public');
        }
        $user->save();
        return Redirect::route('user.index',['user'=>$user]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $user = User::find(Auth::user()->id);
            return view('admin.user.info',[
                'title' =>'Thông tin cá nhân',
                'user' => $user,
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $this->fixImage($user);
        $lstUser = User::all();
        return view('admin.user.update',[
            'title' => 'Cập nhật thông tin',
            'user' => $user,
            'lstUser' => $lstUser,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user)
    {
    
        if($request->hasFile('thumb')){
            $user->thumb = $request->file('thumb')->store('thumb/us/'.$user->id,'public');
        }
        $data = $request->all();

        // $user =  User::find($user);
        $user->username = $data['username'];
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->sdt = $data['sdt'];
        $user->password = Hash::make($data['password']);
        $user->role = $data['role'];
        $user->status = $data['status'];
        // $user->fill([
        //     'username' => $request->input('username'),
        //     'name' => $request->input('name'),
        //     'email' => $request->input('email'),
        //     'sdt' => $request->input('sdt'),
        //     'password' => Hash::make($request->input('password')),
        //     'role' => $request->input('role'),
        //     'status' => $request->input('status'),
        // ]);
        $user->save();
        //return response()->json($user);
        return Redirect::route('user.index',[
            'user' => $user
        ]);
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
    public function info(User $user)
    {
        $user = User::find(Auth::user()->id);
            return view('admin.user.info',[
                'title' =>'Thông tin cá nhân',
                'user' => $user,
            ]);
    }
}
