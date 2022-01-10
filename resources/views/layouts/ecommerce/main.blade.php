<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        @include('layouts.ecommerce.stylesheets.link_stylesheets')

        <script>(function(w,d){!function(e,t,r,a,s){e[r]=e[r]||{},e[r].executed=[],e.zaraz={deferred:[]};var n=t.getElementsByTagName("title")[0];e[r].c=t.cookie,n&&(e[r].t=t.getElementsByTagName("title")[0].text),e[r].w=e.screen.width,e[r].h=e.screen.height,e[r].j=e.innerHeight,e[r].e=e.innerWidth,e[r].l=e.location.href,e[r].r=t.referrer,e[r].k=e.screen.colorDepth,e[r].n=t.characterSet,e[r].o=(new Date).getTimezoneOffset(),//
            e[s]=e[s]||[],e.zaraz._preTrack=[],e.zaraz.track=(t,r)=>e.zaraz._preTrack.push([t,r]),e[s].push({"zaraz.start":(new Date).getTime()});var i=t.getElementsByTagName(a)[0],o=t.createElement(a);o.defer=!0,o.src="../../cdn-cgi/zaraz/sd41d.js?"+new URLSearchParams(e[r]).toString(),i.parentNode.insertBefore(o,i)}(w,d,"zarazData","script","dataLayer");})(window,document);
        </script>
    </head>
    <body>
        @include('layouts.ecommerce.header')
        @include('layouts.ecommerce.navigation')
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

    @include('layouts.ecommerce.footer')

    @include('layouts.ecommerce.scripts.scripts');
    </body>

</html>
