@extends('admin::layouts.master')

@section('content')
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
