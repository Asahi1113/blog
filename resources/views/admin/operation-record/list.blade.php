@extends('admin.layouts.master')

@section('title', '操作记录')
@section('small-title', '所有管理员在后台中的操作记录。')

@section('breadcrumb')
    <li>管理人员</li>
    <li><a href="{{ route('AdminOperationRecordList') }}">操作日志</a></li>
@endsection

@push('head')
<link rel="stylesheet" type="text/css" href="{{ asset('slicklab/css/select2.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('slicklab/css/select2-bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('slicklab/js/bootstrap-daterangepicker/daterangepicker.css') }}"/>
<style>
    #InputDate { min-width: 210px; }
</style>
@endpush

@section('main')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    记录列表
                </header>
                <div class="tbl-top">
                    <form class="form-inline" role="form">
                        <div class="form-group">
                            <label class="sr-only" for="InputUserId">管理员</label>
                            <select id="InputUserId" class="form-control select2-multiple" name="user_id" style="height: 33px; min-width: 180px;">
                                <option value=""></option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}" @if ($user->id == Request::get('user_id')) selected @endif >{{ $user->username }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="InputMethod">请求方式</label>
                            <select id="InputMethod" class="form-control select2-multiple" name="method" style="height: 33px; min-width: 180px;">
                                <option value=""></option>
                                @foreach ([ 'GET', 'POST' ] as $method)
                                    <option value="{{ $method }}" @if ($method == Request::get('method')) selected @endif >{{ $method }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="InputRouteName">操作</label>
                            <select id="InputRouteName" class="form-control select2-multiple" name="route_name[]" multiple="multiple" size="1" style="height: 33px; min-width: 260px;">
                                <option value=""></option>
                                @foreach ($routes as $key => $name)
                                    <option value="{{ $key }}" @if (in_array($key, (array)Request::get('route_name'))) selected @endif >{{ $name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="InputDate">日期</label>
                            <div class="input-group">
                                <input id="InputDate" class="form-control" type="text" name="date" value="{{ Request::get('date') }}" placeholder="日期" data-mask="9999-99-99 ~ 9999-99-99" autocomplete="off">
                            </div>
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
                                <th>时间</th>
                                <th>管理员</th>
                                <th>操作</th>
                                <th>IP</th>
                                <th>UserAgent</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->user->username }}</td>
                                    <td>{{ preg_replace('/^routes\./', '', trans('routes.' . $item->route_name)) }}</td>
                                    <td>
                                        @foreach($item->ips as $ip)
                                            @include('admin.components.tooltip', [ 'text' => $ip, 'title' => ip_query($ip) ])
                                        @endforeach
                                    </td>
                                    <td>{{ str_limit($item->user_agent, 50) }}</td>
                                    <td>
                                        <a class="btn btn-xs btn-info" href="{{--{{ route('RootOperationRecordDetail', [ 'id' => $item->id ]) }}--}}"><i class="fa fa-info"></i> 详情</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
                @include('admin.layouts.paginate-simple')
            </section>
        </div>
    </div>
@endsection

@push('script')
<script src="{{ asset('slicklab/js/select2.js') }}"></script>
<script src="{{ asset('slicklab/js/bs-input-mask.min.js') }}"></script>
<script src="{{ asset('slicklab/js/bootstrap-daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('slicklab/js/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script>
    $('#InputUserId').select2({
        minimumResultsForSearch: 10,
        allowClear: true,
        placeholder: '管理员'
    });
    $('#InputMethod').select2({
        minimumResultsForSearch: Infinity,
        allowClear: true,
        placeholder: '请求方式'
    });
    $('#InputRouteName').select2({
        minimumResultsForSearch: 10,
        allowClear: true,
        placeholder: '操作'
    });

    $('#InputDate').daterangepicker({
        ranges: {
            '最近7天': [moment().subtract(7, 'day'), moment()],
            '最近30天': [moment().subtract(30, 'day'), moment()],
            '本周': [moment().startOf('isoWeek'), moment().endOf('isoWeek')],
            '上周': [moment().subtract(1, 'week').startOf('isoWeek'), moment().subtract(1, 'week').endOf('isoWeek')],
            '本月': [moment().startOf('month'), moment().endOf('month')],
            '上月': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'left',
        maxDate: moment(),
        locale: {
            format: 'YYYY-MM-DD',
            separator: ' ~ ',
            applyLabel: '应用',
            cancelLabel: '清空',
            weekLabel: '周',
            customRangeLabel: '自定义时间段',
            daysOfWeek: ['日', '一', '二', '三', '四', '五','六'],
            monthNames: ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月'],
            firstDay: 1
        },
        buttonClasses: ['btn']
    }).on('cancel.daterangepicker', function() {
        $(this).val('');
    }).val('{{ Request::get('date') }}');
</script>
@endpush
