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
                                <tr>
                                    <td>2018-05-22 10:46:22</td>
                                    <td>编辑管理员（操作）</td>
                                    <td>
                                        <span class="tooltips " data-toggle="tooltip" data-placement="top" data-original-title="纯真网络 2017年9月15日IP数据">127.0.0.1</span>														</td>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    {{--@endif--}}
                </div>
            </section>
        </div>
    </div>
@endsection
