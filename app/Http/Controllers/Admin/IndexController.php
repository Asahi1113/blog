<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class IndexController extends CommonController
{
    //仪表盘
    public function index()
    {
        return view('admin.index');
    }

}
