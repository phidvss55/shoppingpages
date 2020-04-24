@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="{{ route('admin.home') }}"> Trang chủ </a></li>
            <li><a href="{{ route('admin.get.list.transaction') }}"> Đơn hàng </a></li>
            <li> Danh sách </li>
        </ol>
    </div>
    <div class="table-responsive">
    <h2> Quản lý đơn hàng </h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th> Tên khách hàng </th>
                    <th> Địa chỉ </th>
                    <th> Số điện thoại </th>
                    <th> Tổng tiền </th>
                    <th> Trạng thái </th>
                    <th> Time </th>
                    <th> Thao Tác </th>
                </tr>
            </thead>
            <tbody>
                @if (isset($transactions))
                    @foreach ($transactions as $transaction)
                        <tr>
                            <td>{{ $transaction->id }}</td>
                            <td>{{ isset($transaction->user->name) ? $transaction->user->name : '[N/A]' }}</td>
                            <td>{{ $transaction->tr_address }}</td>
                            <td>{{ $transaction->tr_phone }}</td>
                            <td>{{ number_format($transaction->tr_total,0,',','.') }} VND</td>
                            <td>
                                @if ($transaction->tr_status == 1)
                                    <a href="#" class="label-success label"> Đã xử lý </a>
                                @else
                                    <a href="{{ route('admin.get.action.transaction', ['resolve',$transaction->id]) }}" class="label label-default"> Chưa xử lý </a>
                                @endif
                            </td>
                            <td>
                                {{ $transaction->created_at->format('d-M-Y') }} 
                            </td>
                            <td>
                                <a class="btn_customer_action" href="{{ route('admin.get.action.transaction', ['delete', $transaction->id]) }}"><i class="fas fa-trash-alt"></i> Delete </a>
                                <span style="margin: 0 4px"></span>                                
                                <a class="btn_customer_action js_order_item" data-id="{{ $transaction->id }}" href="{{ route('admin.get.view.order', $transaction->id) }}"><i class="fas fa-eye"></i> View </a>
                            </td>
                        </tr>  
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="myModalOrder" role="dialog">
        <div class="modal-dialog modal-lg">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"> Chi tiết mã đơn hàng #<b class="transaction_id"></b> </h4>
                </div>
                <div class="modal-body" id="md-content">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"> Đóng </button>
                </div>
            </div>
        </div>
    </div>
@stop
@section('script')
    <script>
        $(function() {
            $('.js_order_item').click(function(event) {
                event.preventDefault();
                let $this = $(this);
                let url = $this.attr('href');
                $('#md-content').html('');
                $('.transaction_id').text('').text($this.attr('data-id'));

                $('#myModalOrder').modal('show');

                $.ajax({
                    url: url,
                }).done(function(result) {
                    if(result) {
                        $('#md-content').append(result);
                    }
                });
            });
        });
    </script>
@stop