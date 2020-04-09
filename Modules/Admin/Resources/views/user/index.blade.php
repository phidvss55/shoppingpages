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
                    <th> Email </th>
                    <th> Số điện thoại </th>
                    <th> Hình ảnh </th>
                    <th> Thao Tác </th>
                </tr>
            </thead>
            <tbody>
                @if(isset($users))
                    @foreach($users as $user) 
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->avatar }}</td>
                            <td>
                                {{-- <a class="action-support" href="{{ route('admin.get.edit.user', $user->id) }}"><i class="fas fa-pen"></i> Edit </a> --}}
                                {{-- <a class="action-support" href="{{ route('admin.get.action.user', ['delete', $user->id]) }}"><i class="fas fa-trash-alt"></i> Delete </a> --}}
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@stop