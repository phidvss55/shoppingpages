@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.home') }}"> Trang chủ </a></li>
            <li><a href="{{ route('admin.get.list.page_static') }}"> Page static </a></li>
            <li> Danh sách </li>
        </ol>
    </div>
    <div class="table-responsive">
    <h2> Quản lý bài viết <a href="{{ route('admin.get.create.page_static') }}" class="pull-right"><i class="fas fa-plus-circle"></i> Thêm mới </a></h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th> Tiêu đề </th>
                    <th> Ngày tạo </th>
                    <th> Thao tác </th>
                </tr>
            </thead>
            <tbody>
                @if( isset($pages))
                    @foreach($pages as $page)
                        <tr>
                            <td>{{ $page->id }}</td>
                            <td>
                                {{ $page->ps_name }}
                            </td>
                            <td>
                                {{ $page->created_at }}
                            </td>
                            <td>
                                <a class="action-support" href="{{ route('admin.get.edit.page_static', $page->id) }}"><i class="fas fa-pen"></i> Edit </a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@stop