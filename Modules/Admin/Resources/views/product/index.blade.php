@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.home') }}"> Trang chủ </a></li>
            <li><a href="{{ route('admin.get.list.product') }}"> Sản Phẩm </a></li>
            <li> Danh sách </li>
        </ol>
    </div>
    <div class="table-responsive">
    <h2> Quản lý sản phẩm <a href="{{ route('admin.get.create.product') }}" class="pull-right"> Thêm mới </a></h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th> Tên danh mục </th>
                    <th> Title Seo </th>
                    <th> Trạng Thái </th>
                    <th> Thao Tác </th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
@stop