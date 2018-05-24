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
     * 角色列表
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'admin_roles')->withTimestamps();
    }
}
