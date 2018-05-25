<?php

namespace App\Http\Middleware;

use Closure;
use Route;
use App\Models\OperationRecord as OperationRecordModel;

class OperationRecord
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // 取得当前用户。
        $admin = session('admin');

        // 记录请求。
        $record = new OperationRecordModel();
        $record->user()->associate($admin);
        $record->method = $request->getMethod();
        $record->route_name = Route::currentRouteName();
        $record->route_action = Route::currentRouteAction();
        $record->input = $request->input();
        $record->user_agent = $request->header('user-agent');
        $record->ips = $request->getClientIps();
        $record->save();

        $response = $next($request);

        // 记录响应。
        $record->status_code = $response->getStatusCode();
        $record->response = [
            'header' => $response->headers,
            'content' => $response->getContent()
        ];
        $record->save();

        return $response;
    }
}
