<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordersNotification = Order::all()->where('status', 0)->take(5);
        $users = User::all();
        return view('admin.users.index', compact('users', 'ordersNotification'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ordersNotification = Order::all()->where('status', 0)->take(5);
        return view('admin.users.create', compact('ordersNotification'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $password = $request->password;
        $repassword = $request->repassword;
        if ($password == $repassword) {
            if ($request->hasFile('avatar')) {
                $avatar = $this->uploadImage($request);
            } else {
                $avatar = '/image/avatar/avatar-default.png';
            }
            $attr = [
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => bcrypt($request->get('password')),
                'phone' => $request->get('phone'),
                'address' => $request->get('address'),
                'avatar' => $avatar,
                'role' => $request->role,
            ];
            User::create($attr);

            return redirect()->route('admin.users.index')->with('alert', 'Đăng Ký Tài Khoản Thành Công!');
        } else {
            return redirect()->route('admin.users.create')->with('error', 'Mật Khẩu Không Trùng Khớp! Vui Lòng Nhập Lại!');
        }
    }

    private function uploadImage(Request $request)
    {
        $destinationDir = public_path('image/avatar');
        $fileName = uniqid('avatar').'.'.$request->avatar->extension();
        $request->avatar->move($destinationDir, $fileName);
        $avatar = '/image/avatar/'.$fileName;
        return $avatar;
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
        $ordersNotification = Order::all()->where('status', 0)->take(5);
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user', 'ordersNotification'));
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
        $password = $request->password;
        $repassword = $request->repassword;
        if ($password == $repassword) {
            $user = User::findOrFail($id);
            if ($request->hasFile('avatar')) {
                $avatar = $this->uploadImage($request);
            } else {
                $avatar = $user->avatar;
            }
            $attr = [
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => bcrypt($request->get('password')),
                'phone' => $request->get('phone'),
                'address' => $request->get('address'),
                'avatar' => $avatar,
                'role' => $request->role,
            ];
            $user->update($attr);

            return redirect()->route('admin.users.index')->with('alert', 'Đăng Ký Tài Khoản Thành Công!');
        } else {
            return redirect()->route('admin.users.create')->with('error', 'Mật Khẩu Không Trùng Khớp! Vui Lòng Nhập Lại!');
        }
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
