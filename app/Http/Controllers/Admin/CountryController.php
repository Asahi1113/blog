<?php

namespace App\Http\Controllers\admin;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends CommonController
{
    public function getList(Request $request)
    {
        // 取得数据模型。
        $model = Country::oldest('code');

        // 附加筛选条件。
        foreach ([
                     'code',
                     'area_code'
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

        return view('admin.country.list', compact('data'));
    }
}
