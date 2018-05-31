<?php

use Latrell\QQWry\Facades\QQWry;

if (! function_exists('ip_query')) {

    /**
     * IP地址查询
     */
    function ip_query($ip)
    {
        return $ip;
        try {
            $result = QQWry::query($ip)->implode(' ');
        } catch (QQWryException $e) {
            $result = $e->getMessage();
        }
        return $result;
    }
}
if (! function_exists('has_role')) {

    /**
     * 检查用户是否拥有指定角色
     */
    function has_role($user, $role)
    {
        foreach ($role->permissions as $permission) {
            if (! has_permission($user, $permission)) {
                return false;
            }
        }
        return true;
    }
}