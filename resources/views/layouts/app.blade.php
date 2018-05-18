<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <noscript>
        <link href="{{ mix('css/noscript.css') }}" rel="stylesheet">
    </noscript>
    @stack('head')
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li @if (Route::is('home')) class="active" @endif ><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
                    @if (count(C('coins')) > 1)
                        <li class="dropdown @if (Route::is('buy')) active @endif ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ __('Buy') }}
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                @foreach (C('coins') as $coin)
                                    <li><a href="{{ route('buy', [ 'coin' => $coin ]) }}">{{ $coin }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="dropdown @if (Route::is('sell')) active @endif ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ __('Sell') }}
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                @foreach (C('coins') as $coin)
                                    <li><a href="{{ route('sell', [ 'coin' => $coin ]) }}">{{ $coin }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        @php
                        $coin = array_first(C('coins'));
                        @endphp
                        <li @if (Route::is('buy')) class="active" @endif ><a href="{{ route('buy', [ 'coin' => $coin ]) }}">{{ __('Buy ' . $coin) }}</a></li>
                        <li @if (Route::is('sell')) class="active" @endif ><a href="{{ route('sell', [ 'coin' => $coin ]) }}">{{ __('Sell ' . $coin) }}</a></li>
                    @endif
                    <li @if (Route::is('counter.create')) class="active" @endif ><a href="{{ route('counter.create') }}">{{ __('Create Counter') }}</a></li>
                    {{--	                    	<li>
                                                    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=364597111&site=qq&menu=yes">
                                                        <strong class="text-danger">售前客服1：364597111</strong>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2964816&site=qq&menu=yes">
                                                        <strong class="text-danger">售前客服2：2964816</strong>
                                                    </a>
                                                </li>--}}
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                    <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @else
                        @php
                        // 取得未读消息数。
                        $unread_message_count = 0;
                        if (Auth::check()) {
                        $unread_message_count = App\Models\Message::where('target_id', Auth::id())->where('is_read', false)->count();
                        }
                        @endphp
                        <li @if (Route::is('order.*')) class="active" @endif >
                            <a href="{{ route('order.list') }}">
                                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                                {{ __('Order') }}
                                @if ($unread_message_count)
                                    <span class="badge">{{ $unread_message_count }}</span>
                                @endif
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('wallet') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                                {{ __('Wallet') }}
                                <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li class="dropdown-header">
                                    <dl>
                                        <dt>{{ __('Available balance') }}:</dt>
                                        <dd>
                                            @foreach (C('coins') as $coin)
                                                {{ btc_format(Auth::user()->wallet($coin)->balance_available) }} <span class="coin">{{ $coin }}</span><br>
                                            @endforeach
                                        </dd>
                                    </dl>
                                </li>
                                <li class="dropdown-header">
                                    <dl>
                                        <dt>{{ __('Locked balance') }}:</dt>
                                        <dd>
                                            @foreach (C('coins') as $coin)
                                                {{ btc_format(Auth::user()->wallet($coin)->balance_locked) }} <span class="coin">{{ $coin }}</span><br>
                                            @endforeach
                                        </dd>
                                    </dl>
                                </li>
                                <li class="dropdown-header">
                                    <dl>
                                        <dt>{{ __('Total balance') }}:</dt>
                                        <dd>
                                            @foreach (C('coins') as $coin)
                                                {{ btc_format(Auth::user()->wallet($coin)->balance_total) }} <span class="coin">{{ $coin }}</span><br>
                                            @endforeach
                                        </dd>
                                    </dl>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('wallet', 'deposit') }}">{{ __('Deposit') }}</a></li>
                                <li><a href="{{ route('wallet', 'withdraw') }}">{{ __('Withdraw') }}</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                {{ Auth::user()->username }}
                                <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('profile') }}">{{ __('User center') }}</a></li>
                                <li><a href="{{ route('counter.list', [ 'type' => App\Models\Counter::TYPE_ONLINE_BUY, 'status' => App\Models\Counter::STATUS_OPEN ]) }}">{{ __('My counter') }}</a></li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="post">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-default">{{ __('Logout') }}</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endguest
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    @include('components.language')
</div>

@include('components.modal')
@stack('modal')

        <!-- Scripts -->
<script>
    window.app_name = '{{ config('app.name') }}';
    @if (Auth::check())
            window.auth = {};
    window.auth.id = {{ Auth::id() }};
    @endif
            window.users = {};
</script>
@stack('data')
<script src="//{{ config('broadcasting.host') }}:{{ config('broadcasting.port') }}/socket.io/socket.io.js" id="socket.io"></script>
<script src="{{ mix('js/app.js') }}"></script>
@stack('script')
<div class="hide"><script src="https://s13.cnzz.com/z_stat.php?id=1267378074&web_id=1267378074" language="JavaScript"></script></div>
</body>
</html>