<?php

namespace App\Http\Controllers\Admin;

use App\models\Permission;
use Illuminate\Http\Request;

class PermissionController extends CommonController
{
    //权限列表
    public function getList(Request $request)
    {
        // 取得数据模型。
        $model = Permission::oldest('key');

        // 附加筛选条件。
        foreach ([
                     'key',
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
                    // noop.
                }
                if (preg_match('/^[.,0-9]+$/', $keyword)) {
                    $float_keyword = (float) str_replace(',', '', $keyword);
                    // noop.
                }
                if (preg_match('/^[- :0-9]+$/', $keyword)) {
                    $q->orWhere('created_at', 'like', "%{$keyword}%");
                }
                $keyword = preg_replace('/\s+/', '%', $keyword);
                $q->orWhere('key', 'like', "%{$keyword}%");
                $q->orWhere('name', 'like', "%{$keyword}%");
                $q->orWhere('remark', 'like', "%{$keyword}%");
            });
        }

        // 取得单页数据。
        $data = $model->paginate($_COOKIE['limit'] ?? 15);

        // 附加翻页参数。
        $data->appends($request->all());

        return view('admin.permission.list', compact('data'));
    }

    /*
     * 删除权限
     */
    public function postDelete(Request $request)
    {
        // 验证输入。
        $this->validate($request, [
            'key' => 'required|exists:permissions'
        ]);

        // 取得要删除的权限。
        $data = Permission::find($request->key);
        if ($data) {
            // 删除权限。
            $data->delete();
        }

        // 返回成功信息。
        return redirect()->back()->withMessageSuccess('删除成功。');
    }
}
