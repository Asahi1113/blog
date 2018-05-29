<?php

namespace App\Http\Controllers\Admin;

use App\Models\OperationRecord;
use Illuminate\Http\Request;

class IndexController extends CommonController
{
    //仪表盘
    public function index()
    {
        $operation_records = OperationRecord::where('user_id',session('admin')->id)
            ->where('method','post')
            ->select('id', 'route_name', 'user_agent', 'ips', 'created_at')
            ->limit(10)
            ->latest()
            ->get();
        return view('admin.index',compact('operation_records'));
    }

}
