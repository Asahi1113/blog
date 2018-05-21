@extends('admin.layouts.master')

@section('title', '仪表盘')
@section('small-title', '欢迎访问管理后台。')

@section('main')
    <div class="row">
        <div class="col-lg-6">
            <section class="panel">
                <header class="panel-heading">
                    最近操作
                </header>
                <div class="panel-body">
                    {{--@if ($operation_records->isEmpty())
                        <p class="text-center">没有任何项目</p>
                    @else--}}
                        <table class="table">
                            <thead>
                            <tr>
                                <th>时间</th>
                                <th>操作</th>
                                <th>IP</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            {{--@foreach ($operation_records as $item)
                                <tr>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ preg_replace('/^routes\./', '', trans('routes.' . $item->route_name)) }}</td>
                                    <td>
                                        @foreach($item->ips as $ip)
                                            @include('root.components.tooltip', [ 'text' => $ip, 'title' => ip_query($ip) ])
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach--}}
                            </tbody>
                        </table>
                    {{--@endif--}}
                </div>
            </section>
        </div>
    </div>
@endsection
