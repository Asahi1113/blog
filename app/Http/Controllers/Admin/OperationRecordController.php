<?php

namespace App\Http\Controllers\admin;

use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\OperationRecord;
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
        $model = OperationRecord::with('user')->latest()->where('user_type', Admin::class);

        // 附加筛选条件。
        foreach ([
                     'id',
                     'user_id',
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
        $data = $model->simplePaginate($request->cookie('limit', 15));

        // 附加翻页参数。
        $data->appends($request->all());

        // 系统中的所有管理员列表。
        $users = Admin::all('id', 'username');

        // 取得系统控制器列表。
        $routes = collect();
        foreach (Route::getRoutes() as $route) {
            $name = $route->getName();
            $middleware = (array) array_get($route->getAction(), 'middleware');
            if (! is_null($name) && in_array('permission:root', $middleware)) {
                $routes[$name] = trans('routes.' . $name);
                $routes[$name] = preg_replace('/^routes\./', '', $routes[$name]);
            }
        }
        $routes = $routes->sort();

        return view('admin.operation-record.list', compact('data', 'users', 'routes'));
    }
}