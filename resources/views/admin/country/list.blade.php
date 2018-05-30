@extends('admin.layouts.master')

@section('title', '国家信息')
@section('small-title', '系统那支持的国家信息管理。')

@section('breadcrumb')
    <li>系统管理</li>
    <li><a href="{{ route('AdminCountryList') }}">国家信息</a></li>
@endsection

@section('main')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    国家列表
                </header>
                <div class="tbl-top">
                    <form class="form-inline" role="form">
                        <div class="form-group">
                            <label class="sr-only">国家代码</label>
                            <input class="form-control" type="text" name="code" value="{{ Request::get('code') }}" placeholder="国家代码">
                        </div>
                        <div class="form-group">
                            <label class="sr-only">国家区号</label>
                            <input class="form-control" type="text" name="area_code" value="{{ Request::get('area_code') }}" placeholder="国家区号">
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
                                <th>国家代码</th>
                                <th>国家区号</th>
                                <th>名称（英文）</th>
                                <th>名称（简体中文）</th>
                                <th>名称（繁体中文）</th>
                                <th>语言</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->code }}</td>
                                    <td>{{ $item->area_code }}</td>
                                    <td>{{ $item->name_en }}</td>
                                    <td>{{ $item->getAttribute('name_zh-CN') }}</td>
                                    <td>{{ $item->getAttribute('name_zh-HK') }}</td>
                                    <td>{{ $item->language ?: 'en' }}</td>
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
