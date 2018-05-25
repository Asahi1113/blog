@extends('admin.layouts.master')

@section('title', '修改密码')
@section('small-title', '修改当前账号的登陆密码。')

@section('breadcrumb')
    <li>账号信息</li>
    <li><a href="{{ route('AdminChangePassowrd') }}">修改密码</a></li>
@endsection

@section('main')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading"> 修改密码 </header>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{ route('AdminChangePassowrdPost') }}" method="POST">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">旧密码</label>
                            <div class="col-lg-10">
                                <input class="form-control" type="password" name="old_password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">新密码</label>
                            <div class="col-lg-10">
                                <input class="form-control" type="password" name="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">确认密码</label>
                            <div class="col-lg-10">
                                <input class="form-control" type="password" name="password_confirmation">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-primary" type="submit">提交</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
@endsection