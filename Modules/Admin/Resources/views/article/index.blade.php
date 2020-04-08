@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.home') }}"> Trang chủ </a></li>
            <li><a href="{{ route('admin.get.list.article') }}"> Bài viết </a></li>
            <li> Danh sách </li>
        </ol>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <form action="" class="form-inline" style="margin-bottom: 10px">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder=" Tên sản phẩm ..." name="name" value="{{ \Request::get('name') }}">
                </div>
                <button class="btn btn-default"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <div class="table-responsive">
    <h2> Quản lý bài viết <a href="{{ route('admin.get.create.article') }}" class="pull-right"><i class="fas fa-plus-circle"></i> Thêm mới </a></h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th style="width: 20%"> Tên bài viết </th>
                    <th style="width: 100px"> Hình ảnh </th>
                    <th style="width: 400px"> Mô tả </th>
                    <th> Trạng thái </th>
                    <th> Ngày tạo </th>
                    <th> Thao tác </th>
                </tr>
            </thead>
            <tbody>
                @if( isset($articles))
                    @foreach($articles as $article)
                        <tr>
                            <td>{{ $article->id }}</td>
                            <td>
                                {{ $article->a_name }}
                            </td>
                            <td>
                                <img src="{{ pare_url_file($article->a_avatar) }}" alt="" class="img img-responsive" width="80px" height="80px">
                            </td>
                            <td>{{ $article->a_description }}</td>
                            <td>
                                <a href="{{ route('admin.get.action.article', ['active', $article->id]) }}" class="label {{ $article->getStatus($article->a_active)['class'] }}">{{ $article->getStatus($article->a_active)['name'] }}</a>
                            </td>
                            <td>{{ $article->created_at }}</td>
                            <td>
                                <a class="action-support" href="{{ route('admin.get.edit.article', $article->id) }}"><i class="fas fa-pen"></i> Edit </a>
                                <a class="action-support" href="{{ route('admin.get.action.article', ['delete', $article->id]) }}"><i class="fas fa-trash-alt"></i> Delete </a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@stop