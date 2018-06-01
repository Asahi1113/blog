@extends('admin.layouts.master')

@section('title', '权限管理')
@section('small-title', '系统内的权限管理。')

@section('breadcrumb')
    <li>管理人员</li>
    <li><a href="{{ route('AdminPermissionList') }}">权限管理</a></li>
@endsection

@section('main')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    权限列表
                </header>
                <div class="tbl-head clearfix">
                    <div class="btn-group">
                        <a class="btn btn-primary btn-sm" href="{{ route('AdminPermissionEdit') }}"><i class="fa fa-plus"></i> 创建</a>
                    </div>
                </div>
                <div class="panel-body">
                    @if ($data->isEmpty())
                        <p class="text-center">没有任何项目</p>
                    @else
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Key</th>
                                <th>名称</th>
                                <th>组名</th>
                                <th>备注</th>
                                <th>创建时间</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($data as $item)
                                <tr data-key="{{ $item->key }}" data-name="{{ $item->name }}">
                                    <td>{{ $item->key }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->group }}</td>
                                    <td>@include('admin.components.tooltip', [ 'text' => str_limit($item->remark, 20), 'title' => $item->remark ])</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <a class="btn btn-xs btn-info" href="{{ route('AdminPermissionEdit', ['key'=>$item->key]) }}"><i class="fa fa-edit"></i> 编辑</a>
                                        <button class="btn btn-xs btn-danger" type="button" data-role="delete" @if (false) disabled="disabled" @endif ><i class="fa fa-trash-o"></i> 删除</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
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
            action	: '{{ route('AdminPermissionDelete') }}',
            body		: '确定要删除权限 ' + data.name + ' 吗？',
            data		: data
        });
        return false;
    });
</script>
@endpush
