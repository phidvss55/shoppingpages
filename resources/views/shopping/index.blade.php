@extends('layouts.app')
@section('content')
    <div class="our-product-area new-product">
        <div class="container">
            <div class="area-title">
                <h2> Giỏ hàng của bạn </h2>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th> STT </th>
                        <th> Tên sản phẩm </th>
                        <th> Hình ảnh </th>
                        <th> Giá </th>
                        <th> Số lượng </th>
                        <th> Thành tiền </th>
                        <th> Thao tác </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    @foreach($products as $product)
                    <tr>
                        <td>#{{ $i }} </td>
                        <td>{{ $product->name }}</td>
                        <td>
                            <img src="{{ pare_url_file($product->options->avatar) }}" alt="" style="width: 70px; height: 80px">
                        </td>
                        <td>{{ number_format($product->price, 0, ',', '.') }} đ</td>
                        <td>{{ $product->qty }}</td>
                        <td>{{ number_format($product->price * $product->qty, 0, ',', '.') }}</td>
                        <td>
                            <a href=""><i class="fa fa-pencil"></i> Edit </a>
                            <a href=""><i class="fa fa-trash-o"></i> Delete </a>
                        </td>
                    </tr>
                    <?php $i++ ?>
                    @endforeach
                </tbody>
            </table>
            <h5 class="pull-right"> Tổng tiền cần thanh toán {{ \Cart::subtotal() }}</h5>
            <a href="" class="btn btn-success pull-right"> Thanh toán </a>
        </div>
    </div>
@endsection