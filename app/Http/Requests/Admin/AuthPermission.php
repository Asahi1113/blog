<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

/**
 * 权限保存验证
 * Class AuthPermission
 * @package App\Http\Requests\Admin
 */
class AuthPermission extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'key' => 'required',
            'name' => 'required',
            'actions' => 'required|array'
        ];
    }

    public function attributes()
    {
        return [
            'actions' => '权限规则'
        ];
    }
}
