@extends('admin.layouts.master')

@section('title', '日志详情')
@section('small-title', '管理员在后台的操作记录详细信息。')

@section('breadcrumb')
    <li>管理人员</li>
    <li><a href="{{ route('AdminOperationRecordList') }}">操作日志</a></li>
    <li><a href="{{ route('AdminOperationRecordDetail', [ 'id' => $data->id  ]) }}">日志详情</a></li>
@endsection

@push('head')
<style>
    .line-break { white-space: pre-wrap; word-wrap: break-word; word-break: break-all; }
</style>
@endpush

@section('main')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading"> 记录详情 </header>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <td>{{ $data->id }}</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>时间</th>
                            <td>{{ $data->created_at }}</td>
                        </tr>
                        <tr>
                            <th>管理员</th>
                            <td>{{ $data->admin->username }}</td>
                        </tr>
                        <tr>
                            <th>模型</th>
                            <td>{{ class_basename($data->admin_type) }}</td>
                        </tr>
                        <tr>
                            <th>请求方式</th>
                            <td>{{ $data->method }}</td>
                        </tr>
                        <tr>
                            <th>操作</th>
                            <td>{{ preg_replace('/^routes\./', '', trans('routes.' . $data->route_name)) }}（{{ $data->route_name }}）</td>
                        </tr>
                        <tr>
                            <th>来源IP</th>
                            <td>
                                @foreach($data->ips as $ip)
                                    @include('admin.components.tooltip', [ 'text' => $ip, 'title' => $ip ])
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>UserAgent</th>
                            <td>{{ $data->user_agent }}</td>
                        </tr>
                        <tr>
                            <th>输入参数</th>
                            <td>
                                <dl class="dl-horizontal">
                                    @foreach ($data->input as $_key => $_value)
                                        <dt>{{ $_key }}</dt>
                                        <dd>
                                            <?php if( ! is_array($_value)): $_value = [$_value]; endif; ?>
                                            @foreach ($_value as $_v)
                                                @if (preg_match('/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$/', $_v))
                                                    <span class="line-break tooltips" data-toggle="tooltip" data-placement="top" data-original-title="{{ ip_query($_v) }}">{{ $_v }}</span>
                                                @else
                                                    <?php
                                                    if(json_decode($_v) && json_last_error() == JSON_ERROR_NONE){
                                                        $_v = json_encode(json_decode($_v, true), JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
                                                    }
                                                    $_v = htmlspecialchars($_v);
                                                    ?>
                                                    <span class="line-break">{!! $_v !!}</span>
                                                @endif
                                            @endforeach
                                        </dd>
                                    @endforeach
                                </dl>
                            </td>
                        </tr>
                        <tr>
                            <th>响应状态码</th>
                            <td>{{ $data->status_code }}</td>
                        </tr>
                        <tr>
                            <th>响应内容</th>
                            <td><a href="{{--{{ route('RootOperationRecordResponseView', [ 'id' => $data->id ]) }}--}}" target="_blank">查看</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
@endsection