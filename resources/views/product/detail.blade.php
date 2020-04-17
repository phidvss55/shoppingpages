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
                                    <?php
                                        $age = 0;
                                        if($productDetail->pro_total_rating) {
                                            $age = round($productDetail->pro_total_number / $productDetail->pro_total_rating, 2);
                                        }
                                    ?>
                                    <div class="pro-rating">
                                        @for($i = 1; $i <= 5; $i++)
                                            <a href="#"><i class="fa fa-star {{ $i <= $age ? 'active' : '' }}"></i></a>
                                        @endfor
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
                            <div class="component_rating_content" style="display: flex; align-items: center;border-radius:5px;border:1px solid #dedede">
                                <div class="rating_item" style="width: 20%; position: relative">
                                    <span style="font-size: 100px; display: block; color: #ff9705; margin: 0 auto; text-align: center;">
                                        <i class="fa fa-star" style="margin-left:40px"></i>
                                        <b style="position: absolute;top: 40%; right: 35%;color:white;font-size:20px;">2.5</b>
                                    </span>
                                </div>
                                <div class="list_rating" style="width: 60%; padding: 20px">
                                    @for($i = 1; $i <= 5; $i++)
                                        <div class="item_rating" style="display: flex; align-items: center">
                                            <div style="width: 10%; font-size: 14px">
                                                {{ $i }}<span class="fa fa-star"></span>
                                            </div>
                                            <div style="width: 70%; margin: 0 20px;">
                                                <span style="width: 100%; height: 8px; display: block; border: 1px solid #dedede;border-radius:5px; background-color: #dedede ">
                                                    <b style="width: 30%; background-color: #f25800;display: block;border-radius:5px;height:100%"></b>
                                                </span>
                                            </div>
                                            <div style="width: 20%">
                                                <a href=""> 200 đánh giá </a>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                                <div style="width: 20%">
                                    <a class="js_rating_action" href="#" style="background:#288ad6;padding:10px;color:white;border-radius:5px">Gửi đánh giá</a>
                                </div>
                            </div>
                            <?php
                               $listRatingText = [
                                    1 => 'Không thích',
                                    2 => 'Tạm được',
                                    3 => 'Bình thường',
                                    4 => 'Rất tốt',
                                    5 => 'Tuyệt vời',
                                ];
                            ?>
                            <div class="form_rating hidden">
                                <div style="display:flex;margin-top:15px;font-size:15px">
                                    <p> Chọn đánh giá của bạn</p>
                                    <span style="margin: 0 15px" class="list_start">
                                        @for($i = 1; $i <= 5; $i++)
                                            <i class="fa fa-star" data-key={{ $i }}></i>
                                        @endfor
                                    </span>
                                    <span class="list_text"></span>
                                    <input type="hidden" value="" class="number_rating">
                                </div>
                                <div style="margin-top:15px">
                                    <textarea name="" class="form-control" id="ra_content" cols="30" rows="3"></textarea>
                                </div>
                                <div style="margin-top:15px">
                                    <a href="{{ route('post.rating.product', $productDetail->id) }}" class="js_rating_product" style="width:200px;background:#288ad6;padding: 5px 10px;color:white;border-radius:5px;">Gưi đánh giá</a>
                                </div>
                            </div>

                        </div>
                        <div class="component_list_rating">
                            @if (isset($ratings))
                                @foreach ($ratings as $rating)
                                    <div class="rating_item" style="margin:10px 0">
                                        <div>
                                            <span style="color:#333;font-weight:bold;text-transform:capitalize">
                                                {{ isset($rating->user->name) ? $rating->user->name : '[N\A]' }}
                                            </span>
                                            <a href="" style="color:#2ba832"><i class="fa fa-check-circle-o"></i> Đã mua hàng ở đây </a>
                                        </div>
                                        <p style="margin:0">
                                            <span class="pro-rating">
                                                @for($i = 1; $i <= 5; $i++)
                                                    <i class="fa fa-star {{ $i <= $rating->ra_number ? 'active' : '' }}"></i>
                                                @endfor
                                            </span>
                                            <span>{{ $rating->ra_content }}</span>
                                        </p>
                                        <div>
                                            <span><i class="fa fa-clock-o"></i> {{ $rating->created_at }} </span>
                                        </div>
                                    </div>                                        
                                @endforeach
                            @endif
                        </div>
                    </div>					
                </div>
            </div>
        </div>
    </div>
    <!-- product-details Area end -->
@stop

@section('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(function() {
            let listStart = $('.list_start .fa');
            listRatingText = {
                1 : 'Không thích',
                2 : 'Tạm được',
                3 : 'Bình thường',
                4 : 'Rất tốt',
                5 : 'Tuyệt vời',
            };
            listStart.mouseover(function() {
                let $this = $(this);
                let number  = $this.attr('data-key');
                listStart.removeClass('rating_active');
                $('.number_rating').val(number);

                $.each(listStart, function(key, value) {
                    if(key + 1 <= number) {
                        $(this).addClass('rating_active');
                    } else {

                    }
                })
                $(".list_text").text('').text(listRatingText[number]).show();
            });

            $('.js_rating_action').click(function(event) {
                event.preventDefault();
                if($('.form_rating').hasClass('hidden')) {
                    $('.form_rating').addClass('active').removeClass('hidden');
                } else {
                    $('.form_rating').addClass('hidden').removeClass('active');
                }
            });

            $('.js_rating_product').click(function(e){
                e.preventDefault();
                let content = $('#ra_content').val();
                let number = $('.number_rating').val();
                let url =  $(this).attr('href');
                console.log();
                
                if(content && number) {
                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: {
                            number: number,
                            r_content: content
                        }
                    }).done(function(result) {
                        if(result.code == 1) {
                            alert(' Gửi đánh giá thành công. ');
                            window.reload();
                        }
                    });
                }
            });
        });
    </script>
@stop