@extends('layouts.ecommerce.main')

@section('content')
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-6">
                <div class="shop">
                    <div class="shop-img">
                        <img src="img/xshop01.png.pagespeed.ic.0OLxVjlK5l.png" alt="">
                    </div>
                    <div class="shop-body">
                        <h3>Laptop<br>Collection</h3>
                        <a href="#" class="cta-btn">Shop now
                            <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-6">
                <div class="shop">
                    <div class="shop-img">
                        <img src="img/xshop03.png.pagespeed.ic.8NpHKbVVNM.png" alt="">
                    </div>
                    <div class="shop-body">
                        <h3>Accessories<br>Collection</h3>
                        <a href="#" class="cta-btn">Shop now
                            <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-6">
                <div class="shop">
                    <div class="shop-img">
                        <img src="img/xshop02.png.pagespeed.ic.lJiAjCgvog.png" alt="">
                    </div>
                    <div class="shop-body">
                        <h3>Cameras<br>Collection</h3>
                        <a href="#" class="cta-btn">Shop now
                            <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">New Products</h3>
                    <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <li class="active">
                                <a data-toggle="tab" href="#tab1">Laptops</a>
                            </li>
                           <li>
                                <a data-toggle="tab" href="#tab1">Smartphones</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab1">Cameras</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab1">Accessories</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    {{-- New Products data to go under here ! --}}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Top selling</h3>
                    <div class="section-nav">
                        <ul class="section-tab-nav tab-nav">
                            <li class="active">
                                <a data-toggle="tab" href="#tab2">Laptops</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab2">Smartphones</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab2">Cameras</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab2">Accessories</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    {{-- Top Selling Products to go under here! --}}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xs-6">
                <div class="section-title">
                    <h4 class="title">Top selling</h4>
                    <div class="section-nav">
                        <div id="slick-nav-3" class="products-slick-nav"></div>
                    </div>
                </div>
                <div class="products-widget-slick" data-nav="#slick-nav-3">
                    <div>
                        <div class="product-widget">
                            <div class="product-img">
                                <img src="img/xproduct07.png.pagespeed.ic.fLNCvoVVwK.png" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category">Category</p>
                                <h3 class="product-name">
                                    <a href="#">product name goes here</a>
                                </h3>
                                <h4 class="product-price">$980.00
                                    <del class="product-old-price">$990.00</del>
                                </h4>
                            </div>
                        </div>
                        </div>
                    <div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xs-6">
            <div class="section-title">
                <h4 class="title">Top selling</h4>
                <div class="section-nav">
                    <div id="slick-nav-4" class="products-slick-nav"></div>
                </div>
            </div>
            <div class="products-widget-slick" data-nav="#slick-nav-4">
                <div>
                    <div class="product-widget">
                        <div class="product-img">
                            <img src="img/xproduct04.png.pagespeed.ic.X-NiSwyfSW.png" alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category">Category</p>
                            <h3 class="product-name">
                                <a href="#">product name goes here</a>
                            </h3>
                            <h4 class="product-price">$980.00
                                <del class="product-old-price">$990.00</del>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix visible-sm visible-xs"></div>
        <div class="col-md-4 col-xs-6">
            <div class="section-title">
                <h4 class="title">Top selling</h4>
                <div class="section-nav">
                    <div id="slick-nav-5" class="products-slick-nav"></div>
                </div>
            </div>
            <div class="products-widget-slick" data-nav="#slick-nav-5">
                <div>
                    <div class="product-widget">
                        <div class="product-img">
                            <img src="img/xproduct01.png.pagespeed.ic.bnOya297qz.png" alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category">Category</p>
                            <h3 class="product-name">
                                <a href="#">product name goes here</a>
                            </h3>
                            <h4 class="product-price">$980.00
                                <del class="product-old-price">$990.00</del>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
