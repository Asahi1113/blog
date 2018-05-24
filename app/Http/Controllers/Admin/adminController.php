<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;

class adminController extends CommonController
{
    public function getList(Request $request)
    {
        $admins = Admin::oldest('id');
        // 附加筛选条件。
        foreach ([
                     'id',
                     'username'
                 ] as $field) {
            if ($request->filled($field)) {
                $value = $request->input($field);
                $admins->{is_array($value) ? 'whereIn' : 'where'}($field, $value);
            }
        }
        $data = $admins->paginate($request->cookie('limit', 15));
        $data->appends($request->all());
        return view('admin.admin.list',compact('data'));
    }
}
