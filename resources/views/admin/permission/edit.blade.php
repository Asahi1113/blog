@extends('admin.layouts.master')

@section('title', '编辑权限')
@section('small-title', '创建或编辑权限。')

@section('breadcrumb')
    <li>管理人员</li>
    <li><a href="{{ route('AdminPermissionList') }}">权限管理</a></li>
    <li><a href="{{ route('AdminPermissionEdit', [ 'key' => ($data ? $data->key : '') ]) }}">编辑权限</a></li>
@endsection

@section('main')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">权限信息</header>
                <div class="panel-body">
                    <form method="post" class="form-horizontal" action="{{--{{ route('RootPermissionEditAction') }}--}}">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Key</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="key" value="{{ Request::old('key', ($data ? $data->key : '')) }}" @if ($data)readonly @endif>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">名称</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name" value="{{ Request::old('name', ($data ? $data->name : '')) }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">组名</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="group" value="{{ Request::old('group', ($data ? $data->group : '')) }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">备注</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="remark">{{ Request::old('remark', ($data ? $data->remark : '')) }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">操作</label>
                            <div class="col-sm-10">
                                @foreach ($routes as $key => $name)
                                    <label class="checkbox-custom inline check-info">
                                        <input type="checkbox" name="actions[]" value="{{ $key }}" id="route-{{ $key }}"
                                               @if (in_array($key, (array)Request::old('actions', $data ? $data->actions->all() : []))) checked @endif
                                               @if (false) disabled @endif
                                        >
                                        <label for="route-{{ $key }}">{{ $name }}</label>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-primary" type="submit" @if (false) disabled="disabled" @endif >保存</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
@endsection
