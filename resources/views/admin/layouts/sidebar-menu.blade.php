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

        <!--sidebar nav end-->
    </div>
</div>
@if ( ! @$_COOKIE['sidebar_collapsed'])
<script> $('.menu-list > .child-list').hide(); </script>
@endif
