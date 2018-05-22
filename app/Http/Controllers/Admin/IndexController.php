<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends CommonController
{
    //仪表盘
    public function index()
    {
        return view('admin.index');
    }

    //退出登录
    public function logout()
    {
        session(['admin'=>null]);
        return redirect('admin/login');
    }
}
