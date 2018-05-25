@extends('admin.layouts.master')

@section('title', '管理员管理')
@section('small-title', '系统内的管理员管理。')

@section('breadcrumb')
    <li>管理人员</li>
    <li><a href="{{ url('admin/admin-list') }}">管理员账号</a></li>
@endsection

@section('main')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    管理员列表
                </header>
                <div class="tbl-head clearfix">
                    <div class="btn-group">
                        <a class="btn btn-primary btn-sm" href="###"><i class="fa fa-plus"></i> 创建</a>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>用户名</th>
                            <th>角色</th>
                            <th>创建时间</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $item)
                            <tr data-id="{{ $item->id }}" data-username="{{ $item->username }}">
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->roles_name }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    <a class="btn btn-xs btn-info" href="{{--{{ route('RootAdminEdit', ['id'=>$item->id]) }}--}}"><i class="fa fa-edit"></i> 编辑</a>
                                    <button class="btn btn-xs btn-danger @if ($item->username == 'admin')disabled @endif" type="button" data-role="delete"><i class="fa fa-trash-o"></i> 删除</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @include('admin.layouts.paginate')
            </section>
        </div>
    </div>
@endsection

@push('script')
<script>
    $('[data-role="delete"]').on('click', function(){
        var data = $(this).parents('tr').data();
        iconfirm({
            action	: '{{ url('admin/admin-delete') }}',
            body		: '确定要删除管理员 ' + data.username + ' 吗？',
            data		: data
        });
        return false;
    });
</script>
@endpush