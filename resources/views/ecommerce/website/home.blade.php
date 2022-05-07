@extends('ecommerce.website.index')

@section('content')
<!-- Hero/Intro Slider Start -->
<div class="section ">
    <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
        <!-- Hero slider Active -->
        <div class="swiper-wrapper">
            <!-- Single slider item -->
            <div class="hero-slide-item slider-height swiper-slide d-flex">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                            <div class="hero-slide-content slider-animated-1">
                                <span class="category">New Products</span>
                                <h2 class="title-1">Flexible Chair </h2>
                                <p>Torem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmo tempor incididunt ut labore et dolore magna</p>
                                <a href="#" class="btn btn-lg btn-primary btn-hover-dark mt-5">Shop Now</a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 col-md-5 col-sm-5">
                            <div class="hero-slide-image">
                                <img src="{{ asset ('ecommerce/assets/web/dist/images/slider-image/slider-1.png') }}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single slider item -->
            <div class="hero-slide-item slider-height swiper-slide d-flex">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                            <div class="hero-slide-content slider-animated-1">
                                <span class="category">New Products</span>
                                <h2 class="title-1">Flexible Chair </h2>
                                <p>Torem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmo tempor incididunt ut labore et dolore magna</p>
                                <a href="#" class="btn btn-lg btn-primary btn-hover-dark mt-5">Shop Now</a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 col-md-5 col-sm-5">
                            <div class="hero-slide-image">
                                <img src="{{ asset ('ecommerce/assets/web/dist/images/slider-image/slider-2.png') }}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- Add Arrows -->
        <div class="swiper-buttons">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>

<!-- Hero/Intro Slider End -->

<!-- Product Category Start -->
<div class="section pt-100px pb-100px">
    <div class="container">
        <div class="category-slider swiper-container" data-aos="fade-up">
            <div class="category-wrapper swiper-wrapper">
                <!-- Single Category -->
                <div class=" swiper-slide">
                    <a href="shop-left-sidebar.html" class="category-inner ">
                        <div class="category-single-item">
                            <img src="{{ asset ('ecommerce/assets/web/dist/images/icons/1.png') }}" alt="Category">
                            <span class="title">Office Chair</span>
                        </div>
                    </a>
                </div>
                <!-- Single Category -->
                <div class=" swiper-slide">
                    <a href="shop-left-sidebar.html" class="category-inner ">
                        <div class="category-single-item">
                            <img src="{{ asset ('ecommerce/assets/web/dist/images/icons/2.png') }}" alt="Category">
                            <span class="title">Book Shelf</span>
                        </div>
                    </a>
                </div>
                <!-- Single Category -->
                <div class=" swiper-slide">
                    <a href="shop-left-sidebar.html" class="category-inner ">
                        <div class="category-single-item">
                            <img src="{{ asset ('ecommerce/assets/web/dist/images/icons/3.png') }}" alt="Category">
                            <span class="title">Light & Sofa</span>
                        </div>
                    </a>
                </div>
                <!-- Single Category -->
                <div class=" swiper-slide">
                    <a href="shop-left-sidebar.html" class="category-inner ">
                        <div class="category-single-item">
                            <img src="{{ asset ('ecommerce/assets/web/dist/images/icons/4.png') }}" alt="Category">
                            <span class="title">Reading Table</span>
                        </div>
                    </a>
                </div>
                <!-- Single Category -->
                <div class="swiper-slide">
                    <a href="shop-left-sidebar.html" class="category-inner ">
                        <div class="category-single-item">
                            <img src="{{ asset ('ecommerce/assets/web/dist/images/icons/5.png') }}" alt="Category">
                            <span class="title">Corner Table</span>
                        </div>
                    </a>
                </div>
                <!-- Single Category -->
            </div>
        </div>
    </div>
</div>

<!-- Product Category End -->

<!-- Product tab Area Start -->
<div class="section product-tab-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center" data-aos="fade-up">
                <div class="section-title mb-0">
                    <h2 class="title">Our Products</h2>
                    <p class="sub-title mb-30px">Torem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmo tempor incididunt ut labore</p>
                </div>
            </div>

            <!-- Tab Start -->
            <div class="col-md-12 text-center mb-40px" data-aos="fade-up" data-aos-delay="200">
                <ul class="product-tab-nav nav justify-content-center">
                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#tab-product-new-arrivals">New Arrivals</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-product-best-sellers">Best
                            Sellers </a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-product-sale-item">Sale
                            Items</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-product-on-sales">On
                            Sales</a></li>
                </ul>
            </div>
            <!-- Tab End -->
        </div>
        <div class="row">
            <div class="col">
                <div class="tab-content">
                    <!-- 1st tab start -->
                    @include('ecommerce.website.products.tabs.new_arrivals')
                    <!-- 1st tab end -->
                    <!-- 2nd tab start -->
                    @include('ecommerce.website.products.tabs.best_sellers')
                    <!-- 2nd tab end -->
                    <!-- 3rd tab start -->
                    @include('ecommerce.website.products.tabs.sale_item')
                    <!-- 3rd tab end -->
                    <!-- 4th tab start -->
                    @include('ecommerce.website.products.tabs.on_sales')
                    <!-- 4th tab end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product tab Area End -->

<!-- Banner Section Start -->
@include('ecommerce.website.products.banner')
<!-- Banner Section End -->



@endsection
