@extends('admin::layouts.master')
@section('content')

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>

    <h1 class="page-header"> Tổng Quan</h1>
    <div class="row placeholders">
        <div class="col-xs-6 col-sm-3 placeholder">
            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4 class="name-dashboard"> 140 thành viên</h4>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4 class="name-dashboard"> 100 Sản phẩm</h4>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4 class="name-dashboard">20 Bài viết </h4>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4 class="name-dashboard"> 30 Lượt đánh gía</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div id="container" style="min-width:310px;height:400px:margin:0 auto"></div>
        </div>
        <div class="col-sm-8">
            <h2> Danh sách các đơn hàng mới nhất </h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th> Tên khách hàng </th>
                        <th> Số điện thoại </th>
                        <th> Tổng tiền </th>
                        <th> Trạng thái </th>
                        <th> Time </th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($transactionNews))
                        @foreach ($transactionNews as $transaction)
                            <tr>
                                <td>{{ $transaction->id }}</td>
                                <td>{{ isset($transaction->user->name) ? $transaction->user->name : '[N/A]' }}</td>
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
                            </tr>  
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <h2 class="sub-header"> Danh sách liên hệ mới nhất </h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th> Tên liên hệ </th>
                            <th> Email </th>
                            <th> Tiêu đề </th>
                            <th> Status </th>
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
                                    <td>
                                        @if($contact->c_status)
                                            <span class="label label-success"> Đã xử lý </span>
                                        @else
                                            <span class="label label-default"> Chưa xử lý </span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-6">
            <h2> Đánh giá mới nhất </h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th> Tên thành viên </th>
                            <th> Sản phẩm </th>
                            <th> Rating </th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($ratings))
                            @foreach($ratings as $rating) 
                                <tr>
                                    <td>{{ $rating->id }}</td>
                                    <td>{{ isset($rating->user->name) ? $rating->user->name : '[N\A]' }}</td>
                                    <td><a href="">{{ isset($rating->product->pro_name) ? $rating->product->pro_name : '[N\A]' }}</a></td>
                                    <td>{{ $rating->ra_number }}</td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        // Create the chart
        let data = "{{ $dataMoney }}";
        dataChart = JSON.parse(data.replace(/&quot;/g,'"'));
        console.log(dataChart);
        
        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Biểu đồ doanh thu ngày và tháng. '
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: ' Mức độ '
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.1f} VNĐ'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
            },

            series: [
                {
                    name: "Browsers",
                    colorByPoint: true,
                    data: dataChart,
                }
            ]
        });
    </script>
@stop