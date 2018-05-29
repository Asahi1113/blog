<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="shortcut icon" href="{{ asset('favicon.ico') }}"> -->
    <title>404</title>

    <!--common style-->
    <link href="{{ asset('slicklab/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('slicklab/css/style-responsive.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="body-404">

<section class="error-wrapper">
    <i class="icon-404"></i>
    <div class="text-center">
        <h2 class="green-bg">找不到页面</h2>
    </div>
    <p>出了错，或者页面不存在。</p>
    <a href="{{ route('AdminDashboard') }}" class="back-btn">返回仪表盘</a>
</section>

</body>
</html>