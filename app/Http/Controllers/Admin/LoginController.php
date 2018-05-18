<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\Admin\AuthLogin;

class LoginController extends CommonController
{
    public function login()
    {
        return view('admin.login');
    }

    public function postLogin(Authlogin $request)
    {
        // 登录验证。
        if (! Auth::guard('root')->attempt([
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ], $request->input('remember_me', 'false') == 'true')) {
            return redirect()->back()->withErrors('用户名与密码不匹配。');
        }

        // 登录成功。
        return redirect()->intended();
    }
}
