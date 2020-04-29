@extends('layouts.app')
@section('content')
    <!-- breadcrumbs area start -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="container-inner">
                        <ul>
                            <li class="home">
                                <a href=""> Home </a>
                                <span><i class="fa fa-angle-right"></i></span>
                            </li>
                            <li class="category3"><span> Bài viết </span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
    <!-- contact-details start -->
    <div class="main-contact-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    @include('components.article')
                </div>
                <div class="col-sm-4">
                    <div class="taglstbox">
                        <div class="caption">
                            <div class="lead"> Từ khoá phổ biến </div>
                        </div>
                        <ul class="nav">
                            <li><a href="#" class="hastag"> Đội tuyển Việt Nam </a></li>
                            <li><a href="#" class="hastag"> Việt Nam </a></li>
                            <li><a href="#" class="hastag"> Máy Tính </a></li>
                            <li><a href="#" class="hastag"> Laptop </a></li>
                            <li><a href="#" class="hastag"> Vi tính </a></li>
                            <li><a href="#" class="hastag"> Phụ Kiện Chính Hãng </a></li>
                            <li><a href="#" class="hastag"> Điện Thoại </a></li>
                            <li><a href="#" class="hastag"> Tay Nghe </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>	
    </div>
    <!-- contact-details end -->
@stop