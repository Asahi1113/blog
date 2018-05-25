<div class="sidebar-left sticky-sidebar">
    <!--responsive view logo start-->
    <div class="logo dark-logo-bg visible-xs-* visible-sm-*">
        <a href="{{--{{ route('RootDashboard') }}--}}">
            <img src="{{ asset('slicklab/img/logo.png') }}" width="32" height="32" alt="">
            <span class="brand-name">管理中心</span>
        </a>
    </div>
    <!--responsive view logo end-->

    <div class="sidebar-left-info">
        <!--sidebar nav start-->
        <ul class="nav nav-pills nav-stacked side-navigation">
            @foreach (config('menu-admin') as $top => $son)
                @if ( ! is_array($son))
                    <li @if ($son == 'AdminDashboard') class="active" @endif>
                        <a href="{{ route($son) }}">{!! $top !!}</a>
                    </li>
                @else
                    <li class="menu-list">
                        <a href="#"> {!! $top !!}</a>
                        <ul class="child-list">
                            @foreach ($son as $title => $route_name)
                                    <li><a href="{{ route($route_name) }}">{!! $title !!}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @endif
            @endforeach
        </ul>
        <!--sidebar nav end-->
    </div>
</div>
@if ( ! @$_COOKIE['sidebar_collapsed'])
<script> $('.menu-list > .child-list').hide(); </script>
@endif
