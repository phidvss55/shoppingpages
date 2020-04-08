@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.home') }}"> Trang chủ </a></li>
            <li><a href="{{ route('admin.get.list.user') }}"> Thành viên </a></li>
            <li> Danh sách </li>
        </ol>
    </div>
    <div class="table-responsive">
    <h2> Quản lý thành viên </h2>
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