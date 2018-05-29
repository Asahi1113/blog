<?php

namespace App\Http\Controllers\admin;

use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\OperationRecord;
use Illuminate\Support\Facades\Cookie;
use Route;

class OperationRecordController extends CommonController
{
    /**
     * 操作记录列表
     */
    public function getList(Request $request)
    {
        // 验证输入。
        $this->validate($request, [
            'date' => [
                'nullable',
                'regex:/^\d{4}-\d{2}-\d{2}\s~\s\d{4}-\d{2}-\d{2}$/'
            ]
        ]);

        // 取得时间范围。
        $date_start = null;
        $date_end = null;
        if ($request->filled('date')) {
            list ($date_start, $date_end) = explode(' ~ ', $request->input('date'));
            $date_start = Carbon::parse($date_start)->startOfDay();
            $date_end = Carbon::parse($date_end)->endOfDay();
        }

        // 取得数据模型。
        $model = OperationRecord::with('admin')->latest()->where('admin_type', Admin::class);

        // 附加筛选条件。
        foreach ([
                     'id',
                     'admin_id',
                     'method',
                     'route_name'
                 ] as $field) {
            if ($request->filled($field)) {
                $data = $request->input($field);
                if (is_array($data)) {
                    $model->whereIn($field, $data);
                } else {
                    $model->where($field, $data);
                }
            }
        }
        if ($date_start) {
            $model->where('created_at', '>=', $date_start);
        }
        if ($date_end) {
            $model->where('created_at', '<=', $date_end);
        }

        // 取得单页数据。
        $data = $model->simplePaginate($_COOKIE['limit'] ?? 15);

        // 附加翻页参数。
        $data->appends($request->all());

        // 系统中的所有管理员列表。
        $users = Admin::all('id','username');

        // 取得系统控制器列表。
        $routes = collect();
        foreach (Route::getRoutes() as $route) {
            $name = $route->getName();
            if (! is_null($name) && (stripos($name,'.') === false)) {
                $routes[$name] = trans('routes.' . $name);
                $routes[$name] = preg_replace('/^routes\./', '', $routes[$name]);
            }
        }
        $routes = $routes->sort();

        return view('admin.operation-record.list', compact('data', 'users', 'routes'));
    }

    public function getDetail(Request $request)
    {
        $data = OperationRecord::find($request->id);
        if (is_null($data)) {
            abort(404);
        }
        return view('admin.operation-record.detail', compact('data'));
    }
}
