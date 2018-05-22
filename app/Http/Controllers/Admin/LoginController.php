<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\AuthLogin;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
    public function login()
    {
        if (session('admin')) {
            return redirect('admin/index');
        }
        return view('admin.login');
    }

    public function postLogin(Authlogin $request)
    {
        $admin = Admin::first();
        if ($admin->username != $request->username || Crypt::decrypt($admin->password) != $request->password) {
            return back()->withErrors('用户名与密码不匹配。');
        }
        session(['admin'=>$admin]);
        return redirect('admin/index');
    }

}
