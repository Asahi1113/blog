<?php
use Latrell\QQWry\QQWryException;

if (! function_exists('ip_query')) {

    /**
     * IP地址查询
     */
    function ip_query($ip)
    {
        try {
            $result = QQWry::query($ip)->implode(' ');
        } catch (QQWryException $e) {
            $result = $e->getMessage();
        }

        return $result;
    }
}