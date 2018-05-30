@extends('admin.layouts.master')

@section('title', '货币信息')
@section('small-title', '系统那支持的货币信息管理。')

@section('breadcrumb')
    <li>系统管理</li>
    <li><a href="{{ route('AdminCurrencyList') }}">货币信息</a></li>
@endsection

@section('main')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    货币列表
                </header>
                <div class="tbl-top">
                    <form class="form-inline" role="form">
                        <div class="form-group">
                            <label class="sr-only">货币代码</label>
                            <input class="form-control" type="text" name="code" value="{{ Request::get('code') }}" placeholder="货币代码">
                        </div>

                        <button type="submit" class="btn btn-success">搜索</button>
                    </form>
                </div>
                <div class="panel-body">
                    @if ($data->isEmpty())
                        <p class="text-center">没有任何项目</p>
                    @else
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>货币代码</th>
                                <th>名称（英文）</th>
                                <th>名称（简体中文）</th>
                                <th>名称（繁体中文）</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->code }}</td>
                                    <td>{{ $item->name_en }}</td>
                                    <td>{{ $item->getAttribute('name_zh-CN') }}</td>
                                    <td>{{ $item->getAttribute('name_zh-HK') }}</td>
                                    <td></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
                @include('admin.layouts.paginate')
            </section>
        </div>
    </div>
@endsection
