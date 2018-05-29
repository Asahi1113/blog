@extends('admin.layouts.master')

@section('title', '403')
@section('small-title', '没有权限')

@section('breadcrumb')
    <li><a href="{{ route(Route::currentRouteName()) }}">403</a></li>
@endsection

@push('head')
<link href="{{ asset('slicklab/css/error.css') }}" rel="stylesheet" type="text/css"/>
@endpush

@section('main')
    <div class="row-fluid">
        <div class="span12 page-403">
            <div class=" number">403</div>
            <div class=" details">
                <h3>您没有权限访问该功能</h3>
                <p>请检查您当前登陆的账号是否拥有访问该功能的权限。</p>
                <p>操作名称：{{ preg_replace('/^routes\\./', '', trans('routes.' . Route::currentRouteName())) }}</p>
            </div>
        </div>
    </div>
@endsection
