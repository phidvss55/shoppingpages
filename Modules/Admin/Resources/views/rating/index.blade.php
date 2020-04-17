@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.home') }}"> Trang chủ </a></li>
            <li><a href="{{ route('admin.get.list.rating') }}"> Đánh giá </a></li>
            <li> Danh sách </li>
        </ol>
    </div>
    <div class="table-responsive">
    <h2> Quản lý đánh giá </h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th> Tên thành viên </th>
                    <th> Sản phẩm </th>
                    <th> Nội dung </th>
                    <th> Rating </th>
                    <th> Thao Tác </th>
                </tr>
            </thead>
            <tbody>
                @if(isset($ratings))
                    @foreach($ratings as $rating) 
                        <tr>
                            <td>{{ $rating->id }}</td>
                            <td>{{ isset($rating->user->name) ? $rating->user->name : '[N\A]' }}</td>
                            <td>{{ isset($rating->product->pro_name) ? $rating->product->pro_name : '[N\A]' }}</td>
                            <td>{{ $rating->ra_content }}</td>
                            <td>{{ $rating->ra_number }}</td>
                            <td>
                                <a class="action-support" href=""><i class="fas fa-trash-alt"></i> Delete </a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@stop