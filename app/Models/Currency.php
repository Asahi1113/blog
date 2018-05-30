<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $primaryKey = 'code';

    protected $keyType = 'string';

    public $incrementing = false;

    public $timestamps = false;

    public function getNameAttribute()
    {
        $language = session()->get('language');
        $field = strtolower('name_' . $language);
        foreach ($this->attributes as $attribute => $value) {
            if (strtolower($attribute) == $field) {
                return $value;
            }
        }
    }
}
