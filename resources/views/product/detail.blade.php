@extends('layouts.app')
@section('content')
    <style>
        .product-tab-content {
            overflow: hidden;
        }
        .product-tab-content h2 { font-size: 24px !important; }
        .product-tab-content h4 { font-size: 24px !important; }
        .product-tab-content h5 { font-size: 24px !important; }

        .product-tab-content img {
            margin: 0 auto;
            text-align: center;
            max-width: 100%;
        }
    </style>
    <!-- breadcrumbs area start -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="container-inner">
                        <ul>
                            <li class="home">
                                <a href=""> Trang chủ </a>
                                <span><i class="fa fa-angle-right"></i></span>
                            </li>
                            <li class="home">
                                <a href="">{{ $cateProduct->c_name }}</a>
                                <span><i class="fa fa-angle-right"></i></span>
                            </li>
                            <li class="category3"><span>{{ $productDetail->pro_name }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
    <!-- product-details Area Start -->
    <div class="product-details-area">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="zoomWrapper">
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <div style="">
                                    <img id="zoom1" src="{{ asset(pare_url_file($productDetail->pro_avatar)) }}" data-zoom-image="img/product-details/ex-big-1-1.jpg" alt="big-1">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="product-list-wrapper">
                        <div class="single-product">
                            <div class="product-content">
                                <h2 class="product-name"><a href="#">{{ $productDetail->pro_name }}</a></h2>
                                <div class="rating-price">	
                                    <div class="pro-rating">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                    <div class="price-boxes">
                                        <span class="new-price">{{ number_format($productDetail->pro_price, 0, ',','.') }}</span>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <p>{{ $productDetail->pro_content }}</p>
                                </div>
                                <p class="availability in-stock">Availability: <span>In stock</span></p>
                                <div class="actions-e">
                                    <div class="action-buttons-single">
                                        <div class="inputx-content">
                                            <label for="qty">Quantity:</label>
                                            <input type="text" name="qty" id="qty" maxlength="12" value="1" title="Qty" class="input-text qty">
                                        </div>
                                        <div class="add-to-cart">
                                            <a href="#">Add to cart</a>
                                        </div>
                                        <div class="add-to-links">
                                            <div class="add-to-wishlist">
                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                            </div>
                                            <div class="compare-button">
                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
                                            </div>									
                                        </div>
                                    </div>
                                </div>
                                <div class="singl-share">
                                    <a href="#"><img src="img/single-share.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="single-product-tab">
                    <!-- Nav tabs -->
                    <ul class="details-tab">
                        <li class="active"><a href="#home" data-toggle="tab"> Chi tiết sản phảm </a></li>
                        <li class=""><a href="#messages" data-toggle="tab"> Đánh giá </a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <div class="product-tab-content">
                                <p>{{ $productDetail->pro_description }}</p>
                            </div>
                        </div>
                        <div class="component_rating" style="margin-bottom: 20px">
                            <h3> Đánh giá sản phẩm </h3>
                            <div class="component_rating_content" style="display: flex; align-items: center">
                                <div class="rating_item" style="width: 20%; position: relative">
                                    <span class="fa fa-star" style="font-size: 100px; display: block; color: #ff9705; margin: 0 auto; text-align: center;">
                                        <b style="top: 50%; left: 50%; transform: translateX(-50%) translateY(-50%); color: white; font-size: 20px;">2.5</b>
                                    </span>
                                </div>
                                <div class="list_rating" style="width: 60%; padding: 20px"> 
                                    @for($i = 1; $i <= 5; $i++)
                                        <div class="item_rating" style="display: flex; align-items: center">
                                            <div style="width: 10%">
                                                {{ $i }}<span class="fa fa-star"></span>
                                            </div>
                                            <div style="width: 70%; margin: 0 20px;">
                                                <span class="width: 100%; height: 6px; display: block; border: 1px solid #dedede;"><b></b></span>
                                            </div>
                                            <div style="width: 20%">
                                                <a href=""> 200 đánh giá </a>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                                <div style="width: 20%">
                                    <a href="">Gửi đánh giá</a>
                                </div>
                            </div>
                        </div>
                    </div>					
                </div>
            </div>
        </div>
    </div>
    <!-- product-details Area end -->
@stop