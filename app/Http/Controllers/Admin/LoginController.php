<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Http\Requests\Admin\AuthLogin;
use Illuminate\Routing\Controller;

class LoginController extends Controller
{
    public function login()
    {
        if (session('admin')) {
            return redirect('admin/index');
        }
        return view('admin.login');
    }
    //登录验证
    public function postLogin(Authlogin $request)
    {
        $admin = Admin::where('username',$request->username)->first();
        if ($admin->username != $request->username || $admin->password != md5($request->password)) {
            return back()->withErrors('用户名与密码不匹配。');
        }
        session(['admin'=>$admin]);
        return redirect('admin/index');
    }
    //退出登录
    public function logout()
    {
        session(['admin'=>null]);
        return redirect('admin/login');
    }

}
