@extends('layouts.app')
@section('content')

    <!-- Start home slider -->
    {{-- @include('components.slide') --}}
    <!-- End home slider -->

    <!-- Start home banner -->
    {{-- @include('components.banner') --}}
    <!-- End home banner -->

    <!-- product section start -->
    <div class="our-product-area new-product">
        <div class="container">
            <div class="area-title">
                <h2> Sản phẩm nổi bật </h2>
            </div>
            <!-- our-product area start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="features-curosel">
                            @if (isset($productHot))
                                @foreach ($productHot as $proHot)
                                    <!-- single-product start -->
                                    <div class="col-lg-12 col-md-12">
                                        <div class="single-product first-sale">
                                            <div class="product-img">
                                                @if ($proHot->pro_number == 0)
                                                    <span style="position:absolute;background:#a91e63;color:white;padding:2px 6px;border-radius:5px;"> Tạm hết hàng </span>
                                                @endif
                                                @if ($proHot->pro_sale > 0)
                                                <span style="position:absolute;background-image:linear-gradient(-90deg,#ec1f1f 0%,#ff9c00 100%);border-radius:10px;padding:5px 10px;color:white;right:0"> Giảm {{ $proHot->pro_sale }} %</span>
                                                @endif
                                                <a href="{{ route('get.detail.product',[$proHot->pro_slug, $proHot->id]) }}">
                                                    <img class="primary-image" src="{{ asset(pare_url_file($proHot->pro_avatar)) }}" alt="" >
                                                    <img class="secondary-image" src="{{ asset(pare_url_file($proHot->pro_avatar)) }}" alt="" />
                                                </a>
                                                <div class="action-zoom">
                                                    <div class="add-to-cart">
                                                        <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                    </div>
                                                </div>
                                                <div class="actions">
                                                    <div class="action-buttons">
                                                        <div class="add-to-links">
                                                            <div class="add-to-wishlist">
                                                                <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                            </div>
                                                            <div class="compare-button">
                                                                <a href="{{ route('add.shopping.cart',$proHot->id) }}" title="Add to Cart"><i class="icon-bag"></i></a>
                                                            </div>									
                                                        </div>
                                                        <div class="quickviewbtn">
                                                            <a href="{{ route('get.detail.product',[$proHot->pro_slug, $proHot->id]) }}" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="price-box">
                                                    <span class="new-price">{{ number_format($proHot->pro_price, 0, ',','.') }} đ</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name"><a href="#"> {{ $proHot->pro_name }} </a></h2>
                                                <p>{{ $proHot->pro_description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                                @endforeach
                            @endif
                        </div>
                    </div>	
                </div>
            </div>
            <!-- our-product area end -->	
        </div>
    </div>
    @include('components.product_suggest')
    <!-- product section end -->
    <div id="product_view"></div>
    <!-- latestpost area start -->
    @if(isset($articleNews))
    <div class="latest-post-area">
        <div class="container">
            <div class="area-title">
                <h2> Bài viết mới </h2>
            </div>
            <div class="row">
                <div class="all-singlepost">
                    @foreach ($articleNews as $article)
                        <!-- single latestpost start -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-post" style="margin-bottom: 10px">
                                <div class="post-thumb">
                                    <a href="#">
                                        <img src="{{ asset(pare_url_file($article->a_avatar)) }}" alt="" style="width: 370px; height:280px">
                                    </a>
                                </div>
                                <div class="post-thumb-info">
                                    <div class="post-time">
                                        <a href="#">Beauty</a>
                                        <span>/</span>
                                        <span>Post by</span>
                                        <span>BootExperts</span>
                                    </div>
                                    <div class="postexcerpt">
                                        <p style="height: 40px">{{ $article->a_name }}</p>
                                        <a href="#" class="read-more"> Xem thêm </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single latestpost end -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endif
    <!-- latestpost area end -->
    <!-- block category area start -->
    <div class="block-category">
        <div class="container">
            <div class="row">
                @if (isset($categoriesHome))
                <!-- featured block start -->
                    @foreach ($categoriesHome as $categoryHome)
                        <div class="col-md-4">
                            <!-- block title start -->
                            <div class="block-title">
                                <h2>{{ $categoryHome->c_name }}</h2>
                            </div>
                            <!-- block title end -->
                            <!-- block carousel start -->
                            @if( isset($categoryHome->products ))
                                <div class="block-carousel">
                                    @foreach ($categoryHome->products as $product)
                                    <?php
                                        $age = 0;
                                        if($product->pro_total_rating) {
                                            $age = round($product->pro_total_number / $product->pro_total_rating, 2);
                                        }
                                    ?>
                                    <div class="block-content">
                                        <!-- single block start -->
                                        <div class="single-block">
                                            <div class="block-image pull-left">
                                                <a href="{{ route('get.detail.product', [$product->pro_slug, $product->id] )}}"><img src="{{ pare_url_file($product->pro_avatar) }}" style="width:170px;height:208px" alt="" /></a>
                                            </div>
                                            <div class="category-info">
                                                <h3><a href="{{ route('get.detail.product', [$product->pro_slug, $product->id] )}}">{{ $product->pro_name }}</a></h3>
                                                <p>{{ $product->pro_description }}</p>
                                                <div class="cat-price">{{ number_format($product->pro_price, 0,',','.')}}<span class="old-price">{{ number_format($product->pro_price,0,',','.') }} VNĐ</span></div>
                                                <div class="cat-rating">
                                                    @for($i = 1; $i <= 5; $i++)
                                                        <a href="#"><i class="fa fa-star {{ $i <= $age ? 'active' : '' }}"></i></a>
                                                    @endfor
                                                </div>								
                                            </div>
                                        </div>
                                        <!-- single block end -->
                                    </div>
                                    @endforeach
                                </div>
                            @endif
                            <!-- block carousel end -->
                        </div>
                    @endforeach
                <!-- featured block end -->
                @endif
            </div>
        </div>
    </div>
    <!-- block category area end -->
    <!-- testimonial area start -->
    <div class="testimonial-area lap-ruffel">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="crusial-carousel">
                        <div class="crusial-content">
                            <p>“Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat."</p>
                            <span>BootExperts</span>
                        </div>
                        <div class="crusial-content">
                            <p>“Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat."</p>
                            <span>Lavoro Store!</span>
                        </div>
                        <div class="crusial-content">
                            <p>“Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat."</p>
                            <span>MR Selim Rana</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial area end -->
    <!-- Brand Logo Area Start -->
    <div class="brand-area">
        <div class="container">
            <div class="row">
                <div class="brand-carousel">
                    <div class="brand-item"><a href="#"><img src="img/brand/bg1-brand.jpg" alt="" /></a></div>
                    <div class="brand-item"><a href="#"><img src="img/brand/bg2-brand.jpg" alt="" /></a></div>
                    <div class="brand-item"><a href="#"><img src="img/brand/bg3-brand.jpg" alt="" /></a></div>
                    <div class="brand-item"><a href="#"><img src="img/brand/bg4-brand.jpg" alt="" /></a></div>
                    <div class="brand-item"><a href="#"><img src="img/brand/bg5-brand.jpg" alt="" /></a></div>
                    <div class="brand-item"><a href="#"><img src="img/brand/bg2-brand.jpg" alt="" /></a></div>
                    <div class="brand-item"><a href="#"><img src="img/brand/bg3-brand.jpg" alt="" /></a></div>
                    <div class="brand-item"><a href="#"><img src="img/brand/bg4-brand.jpg" alt="" /></a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Logo Area End -->
@stop

@section('script')
    <script>
         $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(function() {
            let routeRenderProduct = '{{ route("post.product.view") }}';
            $(document).on('scroll', function() {
                checkRender = false;
                if($(window).scrollTop() > 150 && checkRender == false) {
                    checkRender = true;
                    let products = localStorage.getItem('products');
                    products = $.parseJSON(products);

                    if(products.length > 0) {
                        $.ajax({
                            url: routeRenderProduct,
                            method: "POST",
                            data: { id : products},
                            success: function(result) {
                                console.log(result);
                                $('#product_view').html('').append(result.data);
                            }
                        });
                    }                    
                }
            });
        });
    </script>
@endsection