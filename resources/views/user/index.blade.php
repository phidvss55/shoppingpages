@extends('user.layout')
@section('content')

    <h1 class="page-header"> Tổng Quan</h1>
    <div class="row placeholders">
        <div class="col-xs-6 col-sm-3 placeholder">
            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4 class="name-dashboard"> {{ $totalTransactions }} tổng số đơn hàng </h4>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4 class="name-dashboard"> {{ $totalTransactionsDone }} đã xử lý </h4>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4 class="name-dashboard"> {{ $totalTransactions - $totalTransactionsDone }} chưa xử lý </h4>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4 class="name-dashboard"> Tìm được cái gì thì làm </h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h2> Danh sách các đơn hàng mới nhất </h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th> Địa chỉ giao </th>
                        <th> Số điện thoại </th>
                        <th> Tổng tiền </th>
                        <th> Trạng thái </th>
                        <th> Time </th>
                    </tr>
                </thead>
                <tbody>
                    @if( isset($transactions))
                        @foreach($transactions as $transaction)
                            <tr>
                                <td># {{ $transaction->id }}</td>
                                <td>{{ $transaction->tr_address }}</td>
                                <td>{{ $transaction->tr_phone }}</td>
                                <td>{{ number_format($transaction->tr_total,0,',','.') }} VNĐ</td>
                                <td>
                                    @if( $transaction->tr_status == 1) 
                                        <a href="" class="label label-success"> Đã xử lý </a>
                                    @else
                                        <a href="" class="label label-default"> chưa xử lý </a>
                                    @endif
                                </td>
                                <td>
                                    {{ $transaction->created_at }}
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>

@stop