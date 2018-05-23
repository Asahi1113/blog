<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class ProfileController extends CommonController
{
    public function getModifyPassword()
    {
        return view('admin/profile/modify-password');
    }

    public function postModifyPassword(Request $request)
    {
        // 验证输入。
        $this->validate($request, [
            'old_password' => 'required',
            'password' => 'required|confirmed|between:6,16'
        ], [
            'old_password.required' => '旧密码不能为空。',
            'password.required' => '新密码不能为空。',
            'password.confirmed' => '密码与确认密码不匹配。',
            'password.between' => '新密码必须在6~16个字符之间。'
        ]);
        $admin = session('admin');
        if ($admin->password != md5($request->old_password)) {
            return redirect()->back()->withErrors(['old_password'=>'旧密码验证不通过']);
        }
        $admin->password = md5($request->password);
        $admin->save();
        return redirect('admin/logout');
    }
}
