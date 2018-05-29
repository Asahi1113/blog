<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\Observers\OperationRecordObserver;

/*
 * 操作记录
 */
class OperationRecord extends Model
{
    protected $casts = [
        'id' => 'integer',
        'admin_id' => 'integer',
        'admin_type' => 'string',
        'method' => 'string',
        'path' => 'string',
        'input' => 'collection',
        'user_agent' => 'string',
        'ips' => 'collection',
        'status_code' => 'integer',
        'response' => 'collection',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public static function boot()
    {
        parent::boot();

        static::observe(new OperationRecordObserver());
    }

    /**
     * 所属用户
     */
    public function admin()
    {
        return $this->morphTo();
    }
}
