<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';

    /**
     * 角色名
     */
    public function getRolesNameAttribute()
    {
        return $this->username == 'admin' ? 'Root' : join(' & ', $this->roles->pluck('name')->all());
    }
    /**
     * 角色列表
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'admin_roles')->withTimestamps();
    }
}
