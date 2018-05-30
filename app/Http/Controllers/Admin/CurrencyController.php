<?php

namespace App\Http\Controllers\admin;

use App\models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends CommonController
{
    public function getList(Request $request)
    {
        // 取得数据模型。
        $model = Currency::oldest('code');

        // 附加筛选条件。
        foreach ([
                     'code'
                 ] as $field) {
            if ($request->filled($field)) {
                $value = $request->input($field);
                $model->{is_array($value) ? 'whereIn' : 'where'}($field, $value);
            }
        }

        // 取得单页数据。
        $data = $model->paginate($_COOKIE['limit'] ?? 15);

        // 附加翻页参数。
        $data->appends($request->all());

        return view('admin.currency.list', compact('data'));
    }
}
