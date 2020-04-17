@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.home') }}"> Trang chủ </a></li>
            <li><a href="{{ route('admin.get.list.contact') }}"> Liên hệ </a></li>
            <li> Danh sách </li>
        </ol>
    </div>
    <div class="table-responsive">
    <h2> Quản lý đánh giá </h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th> Tên liên hệ </th>
                    <th> Email </th>
                    <th> Tiêu đề </th>
                    <th> Nội dung </th>
                    <th> Status </th>
                    <th> Thao Tác </th>
                </tr>
            </thead>
            <tbody>
                @if(isset($contacts))
                    @foreach($contacts as $contact) 
                        <tr>
                            <td>{{ $contact->id }}</td>
                            <td>{{ $contact->c_name }}</td>
                            <td>{{ $contact->c_email }}</td>
                            <td>{{ $contact->c_title }}</td>
                            <td>{{ $contact->c_content }}</td>
                            <td>
                                @if($contact->c_status)
                                    <span class="label label-success"> Đã xử lý </span>
                                @else
                                    <span class="label label-default"> Chưa xử lý </span>
                                @endif
                            </td>
                            <td>
                                <a class="action-support" href=""><i class="fas fa-trash-alt"></i> Xử lý </a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        <h4> Chỗ này sửa, khi click vào detail -> ra modal -> trong transaction -> display detail </h4>
        <h4> Chỗ xử lý, khi click vô sẽ là sang label-danger, text = đã xử lý, xem trong phần admin </h4>
        <h4> Model xử để status= 0 -> text-display là chauw xử lý, = 1 -> đã xử lý và không cho click vào </h4>
    </div>
@stop