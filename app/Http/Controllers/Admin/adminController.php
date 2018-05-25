<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;

class adminController extends CommonController
{
    //管理员账号
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
    //删除管理员
    public function postDelete(Request $request)
    {
        // 验证输入。
        $this->validate($request, [
            'id' => 'required|exists:admin|not_in:1'
        ]);
        $data = Admin::find($request->id);
        $admin = session('admin');
        if($admin->id == $request->id)
        {
            return redirect()->back()->withMessageWarning('不能删除当前登录账户。');
        }
        $data->delete();
        return redirect()->back()->withMessageSuccess('删除成功。');
    }
}
