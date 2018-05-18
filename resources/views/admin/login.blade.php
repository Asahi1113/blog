<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="shortcut icon" href="{{ asset('favicon.ico') }}"> -->
    <title>管理员登陆</title>

    <!-- Base Styles -->
    <link href="{{ asset('slicklab/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('slicklab/css/style-responsive.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="login-body">

<div class="login-logo" style="text-transform: none;">
    {{ config('app.name') }}
</div>

<h2 class="form-heading">管理员登录</h2>
<div class="container log-row">
    <form class="form-signin" action="{{ route('AdminLogin') }}" method="post">
        {!! csrf_field() !!}
        <div class="login-wrap">
            <input type="text" class="form-control" placeholder="用户名" name="username" value="{{ Request::old('username') }}" autofocus>
            <input type="password" class="form-control" placeholder="密码" name="password" autocomplete="off">
            <button class="btn btn-lg btn-success btn-block" type="submit">登录</button>
            <label class="checkbox-custom check-success pull-left">
                <input type="checkbox" name="remember_me" value="true" id="checkbox1">
                <label for="checkbox1">记住我</label>
            </label>
            <!--
            <label class="checkbox-custom pull-right">
                <a data-toggle="modal" href="#ForgotPass"> 忘记密码？</a>
            </label>
             -->
        </div>
    </form>
</div>

<div id="alertModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="alertModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="alertModalLabel">消息</h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal" type="button">确定</button>
            </div>
        </div>
    </div>
</div>

<!--jquery-1.10.2.min-->
<script src="{{ asset('slicklab/js/jquery-1.11.1.min.js') }}"></script>
<!--Bootstrap Js-->
<script src="{{ asset('slicklab/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('slicklab/js/common.js') }}"></script>

@if(Session::has('errors'))
    <script>
        ialert('{{ head(head(Session::get('errors')->getMessages())) }}');
    </script>
@endif
</body>
</html>
