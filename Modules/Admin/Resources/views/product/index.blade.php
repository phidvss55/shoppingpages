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
                    <th> Tên sản phẩm </th>
                    <th> Mô tả </th>
                    <th> Loại sản phẩm </th>
                    <th> Trạng thái </th>
                    <th> Thao Tác </th>
                </tr>
            </thead>
            <tbody>
                @if( isset($products))
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->pro_name }}</td>
                            <td>{{ $product->pro_description }}</td>
                            <td>{{ $product->pro_category_id }}</td>
                            <td>
                                <a href="#" class="label {{ $product->getStatus($product->pro_active)['class'] }}">{{ $product->getStatus($product->pro_active)['name'] }}</a>
                            </td>
                            <td>
                                <a href="{{ route('admin.get.edit.product', $product->id) }}"> Edit </a>
                                <a href="{{ route('admin.get.action.product', ['delete', $product->id]) }}"> Delete </a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@stop