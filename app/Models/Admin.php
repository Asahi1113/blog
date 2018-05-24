<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';
    protected $appends = [
        'roles_name'
    ];

    /**
     * 角色名
     */
    public function getRolesNameAttribute()
    {
        return $this->id == 1 ? 'Root' : join(' & ', $this->roles->pluck('name')->all());
    }
}
