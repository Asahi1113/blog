<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends CommonController
{

    /*
     * 角色列表
     */
    public function getList(Request $request)
    {
        // 取得数据模型。
        $model = Role::latest('id');

        // 附加筛选条件。
        foreach ([
                     'id',
                     'name',
                     'remark',
                     'created_at'
                 ] as $field) {
            if ($request->filled($field)) {
                $model->where($field, $request->input($field));
            }
        }

        // 附加搜索条件。
        if ($request->filled('keyword')) {
            $keyword = trim((string) $request->input('keyword'));
            $model->where(function ($q) use ($keyword) {
                if (preg_match('/^[-+]?[0-9]+$/', $keyword)) {
                    $int_keyword = (int) $keyword;
                    $q->orWhere('id', 'like', "%{$int_keyword}%");
                }
                if (preg_match('/^[.,0-9]+$/', $keyword)) {
                    $float_keyword = (float) str_replace(',', '', $keyword);
                }
                if (preg_match('/^[- :0-9]+$/', $keyword)) {
                    $q->orWhere('created_at', 'like', "%{$keyword}%");
                }
                $keyword = preg_replace('/\s+/', '%', $keyword);
                $q->orWhere('name', 'like', "%{$keyword}%");
                $q->orWhere('remark', 'like', "%{$keyword}%");
            });
        }

        // 取得单页数据。
        $data = $model->paginate($_COOKIE['limit'] ?? 15);

        // 附加翻页参数。
        $data->appends($request->all());

        return view('admin.role.list', compact('data'));
    }

    /*
     * 删除角色
     */
    public function postDelete(Request $request)
    {
        // 验证输入。
        $this->validate($request, [
            'id' => 'required|exists:roles'
        ]);

        // 取得要删除的角色。
        $data = Role::find($request->id);
        if ($data) {
            $data->delete();
        }

        // 返回成功信息。
        return redirect()->back()->withMessageSuccess('删除成功。');
    }
}
