<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>ehardwares</title>
    <meta name="description" content="Ehardwares is a hardware based ecommerce site." />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Ehardwares - Hardwares ecommerce site" />
    <meta property="og:url" content="PAGE_URL" />
    <meta property="og:site_name" content="Ehardwares - Hardwares ecommerce site" />
    <!-- For the og:image content, replace the # with a link of an image -->
    <meta property="og:image" content="#" />
    <meta property="og:description" content="Ehardwares - Hardwares ecommerce site" />
    <meta name="robots" content="noindex, follow" />
    <!-- Add site Favicon -->
    <link rel="icon" href="{{ asset ('ecommerce/img/icon.jpeg') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset ('ecommerce/img/icon.jpeg') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset ('ecommerce/img/icon.jpeg') }}" />
    <meta name="msapplication-TileImage" content="{{ asset ('ecommerce/img/icon.jpeg') }}" />
    <!-- Structured Data  -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "name": "ehardwares",
            "url": "ehardwares.co.tz"
        }
    </script>

    <!-- vendor css (Bootstrap & Icon Font) -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css" />
    <!-- <link rel="stylesheet" href="assets/css/vendor/simple-line-icons.css" />
    <link rel="stylesheet" href="assets/css/vendor/ionicons.min.css" /> -->

    <!-- plugins css (All Plugins Files) -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/animate.css" />
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/jquery.lineProgressbar.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css" />
    <link rel="stylesheet" href="assets/css/plugins/venobox.css" /> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="{{ asset ('ecommerce/assets/web/dist/css/vendor/vendor.min.css') }}" />
    <link rel="stylesheet" href="{{ asset ('ecommerce/assets/web/dist/css/plugins/plugins.min.css') }}" />
    <link rel="stylesheet" href="{{ asset ('ecommerce/assets/web/dist/css/style.min.css') }}">

    <!-- Main Style -->
    <!-- <link rel="stylesheet" href="assets/css/style.css" /> -->

</head>

<body>
    <!-- Header Area start  -->
    <div class="header section">
        <!-- Header Top Message Start -->
        <!-- Header Top  End -->
        <!-- Header Bottom  Start -->
        <div class="header-bottom d-none d-lg-block">
            <div class="container position-relative">
                <div class="row align-self-center">
                    <!-- Header Logo Start -->
                    <div class="col-auto align-self-center">
                        <div class="header-logo">
                            <a href="index.html"><img src="assets/images/logo/logo.png" alt="Site Logo" /></a>
                        </div>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Action Start -->
                    <div class="col align-self-center">
                        <div class="header-actions">
                            <div class="header_account_list">
                                <a href="javascript:void(0)" class="header-action-btn search-btn"><i
                                        class="icon-magnifier"></i></a>
                                <div class="dropdown_search">
                                    <form class="action-form" action="#">
                                        <input class="form-control" placeholder="Enter your search key" type="text">
                                        <button class="submit" type="submit"><i class="icon-magnifier"></i></button>
                                    </form>
                                </div>
                            </div>
                            <!-- Single Wedge Start -->
                            <div class="header-bottom-set dropdown">
                                <button class="dropdown-toggle header-action-btn" data-bs-toggle="dropdown"><i
                                        class="icon-user"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="my-account.html">My account</a></li>
                                    <li><a class="dropdown-item" href="checkout.html">Checkout</a></li>
                                    <li><a class="dropdown-item" href="login.html">Sign in</a></li>
                                </ul>
                            </div>
                            <!-- Single Wedge End -->
                            <a href="#offcanvas-cart" class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                <i class="icon-handbag"></i>
                                <span class="header-action-num">01</span>
                                <!-- <span class="cart-amount">€30.00</span> -->
                            </a>
                            <a href="#offcanvas-mobile-menu" class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                <i class="icon-menu"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Header Action End -->
                </div>
            </div>
        </div>
        <!-- Header Bottom  End -->
        <!-- Header Bottom  Start -->
        <div class="header-bottom d-lg-none sticky-nav bg-white">
            <div class="container position-relative">
                <div class="row align-self-center">
                    <!-- Header Logo Start -->
                    <div class="col-auto align-self-center">
                        <div class="header-logo">
                            <a href="index.html"><img src="assets/images/logo/logo.png" alt="Site Logo" /></a>
                        </div>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Action Start -->
                    <div class="col align-self-center">
                        <div class="header-actions">
                            <div class="header_account_list">
                                <a href="javascript:void(0)" class="header-action-btn search-btn"><i
                                        class="icon-magnifier"></i></a>
                                <div class="dropdown_search">
                                    <form class="action-form" action="#">
                                        <input class="form-control" placeholder="Enter your search key" type="text">
                                        <button class="submit" type="submit"><i class="icon-magnifier"></i></button>
                                    </form>
                                </div>
                            </div>
                            <!-- Single Wedge Start -->
                            <div class="header-bottom-set dropdown">
                                <button class="dropdown-toggle header-action-btn" data-bs-toggle="dropdown"><i
                                        class="icon-user"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="my-account.html">My account</a></li>
                                    <li><a class="dropdown-item" href="checkout.html">Checkout</a></li>
                                    <li><a class="dropdown-item" href="login.html">Sign in</a></li>
                                </ul>
                            </div>
                            <!-- Single Wedge End -->
                            <a href="#offcanvas-cart" class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                <i class="icon-handbag"></i>
                                <span class="header-action-num">01</span>
                                <!-- <span class="cart-amount">€30.00</span> -->
                            </a>
                            <a href="#offcanvas-mobile-menu" class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                <i class="icon-menu"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Header Action End -->
                </div>
            </div>
        </div>
        <!-- Header Bottom  End -->
        <!-- Main Menu Start -->
        <div class="bg-black d-none d-lg-block sticky-nav">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-12 align-self-center">
                        <div class="main-menu">
                            <ul>
                                <li class="dropdown"><a href="#">Home <i class="ion-ios-arrow-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About us</a></li>
                                <li class="dropdown position-static"><a href="#">Shop <i
                                            class="ion-ios-arrow-down"></i></a>
                                    <ul class="mega-menu d-block">
                                        <li class="d-flex">
                                            <ul class="d-block">
                                                <li class="title"><a href="#">Shop Page</a></li>
                                                <li><a href="shop-3-column.html">Shop 3 Column</a></li>
                                                <li><a href="shop-4-column.html">Shop 4 Column</a></li>
                                                <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="title"><a href="#">product Details Page</a></li>
                                                <li><a href="single-product.html">Product Single</a></li>
                                                <li><a href="single-product-variable.html">Product Variable</a></li>
                                                <li><a href="single-product-affiliate.html">Product Affiliate</a></li>
                                                <li><a href="single-product-group.html">Product Group</a></li>
                                                <li><a href="single-product-tabstyle-2.html">Product Tab 2</a></li>
                                                <li><a href="single-product-tabstyle-3.html">Product Tab 3</a></li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="title"><a href="#">Single Product Page</a></li>
                                                <li><a href="single-product-slider.html">Product Slider</a></li>
                                                <li><a href="single-product-gallery-left.html">Product Gallery Left</a>
                                                </li>
                                                <li><a href="single-product-gallery-right.html">Product Gallery Right</a>
                                                </li>
                                                <li><a href="single-product-sticky-left.html">Product Sticky Left</a></li>
                                                <li><a href="single-product-sticky-right.html">Product Sticky Right</a></li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="title"><a href="#">Other Pages</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout Page</a></li>
                                                <li><a href="compare.html">Compare Page</a></li>
                                                <li><a href="wishlist.html">Wishlist Page</a></li>
                                                <li><a href="my-account.html">Account Page</a></li>
                                                <li><a href="login.html">Login & Register Page</a></li>
                                                <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                            </ul>
                                        </li>
                                        <li>

                                            <ul class="menu-banner w-100">
                                                <li>
                                                    <a class="p-0" href="shop-left-sidebar.html"><img class="img-responsive w-100" src="assets/images/banner/3.jpg" alt=""></a>
                                                </li>
                                                <li>
                                                    <a class="p-0" href="shop-left-sidebar.html"><img class="img-responsive w-100" src="assets/images/banner/4.jpg" alt=""></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Pages <i class="ion-ios-arrow-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="404.html">404 Page</a></li>
                                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                        <li><a href="faq.html">Faq Page</a></li>
                                        <li><a href="coming-soon.html">Coming Soon Page</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown "><a href="#">Blog <i class="ion-ios-arrow-down"></i></a>
                                    <ul class="sub-menu">
                                        <li class="dropdown position-static"><a href="blog-grid-left-sidebar.html">Blog Grid
                                            <i class="ion-ios-arrow-right"></i></a>
                                            <ul class="sub-menu sub-menu-2">
                                                <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                                <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="blog-list-left-sidebar.html">Blog List
                                            <i class="ion-ios-arrow-right"></i></a>
                                            <ul class="sub-menu sub-menu-2">
                                                <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                                <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="blog-single-left-sidebar.html">Single
                                            Blog <i class="ion-ios-arrow-right"></i></a>
                                            <ul class="sub-menu sub-menu-2">
                                                <li><a href="blog-single-left-sidebar.html">Single Blog Left Sidebar</a>
                                                </li>
                                                <li><a href="blog-single-right-sidebar.html">Single Blog Right Sidebar</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Menu End -->
    </div>
    <!-- Header Area End  -->

    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
        <div class="inner">
            <div class="head">
                <span class="title">Cart</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/1.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Walnut Cutting Board</a>
                            <span class="quantity-price">1 x <span class="amount">$91.86</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/2.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Lucky Wooden Elephant</a>
                            <span class="quantity-price">1 x <span class="amount">$453.28</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product.html" class="image"><img src="assets/images/product-image/3.jpg" alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product.html" class="title">Fish Cut Out Set</a>
                            <span class="quantity-price">1 x <span class="amount">$87.34</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="sub-total">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-start">Sub-Total :</td>
                                <td class="text-end">$523.30</td>
                            </tr>
                            <tr>
                                <td class="text-start">Eco Tax (-2.00) :</td>
                                <td class="text-end">$4.52</td>
                            </tr>
                            <tr>
                                <td class="text-start">VAT (20%) :</td>
                                <td class="text-end">$104.66</td>
                            </tr>
                            <tr>
                                <td class="text-start">Total :</td>
                                <td class="text-end theme-color">$632.48</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="buttons">
                    <a href="cart.html" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                    <a href="checkout.html" class="btn btn-outline-dark current-btn">checkout</a>
                </div>
                <p class="minicart-message">Free Shipping on All Orders Over $100!</p>
            </div>
        </div>
    </div>
    <!-- OffCanvas Cart End -->

    <!-- OffCanvas Menu Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <button class="offcanvas-close"></button>
        <div class="inner customScroll">

            <div class="offcanvas-menu mb-20px">
                <ul>
                    <li><a href="#"><span class="menu-text">Home</span></a>
                        <ul class="sub-menu">
                            <li><a href="index.html"><span class="menu-text">Home 1</span></a></li>
                            <li><a href="index-2.html"><span class="menu-text">Home 2</span></a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="#"><span class="menu-text">Shop</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><span class="menu-text">Shop Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="shop-3-column.html">Shop 3 Column</a></li>
                                    <li><a href="shop-4-column.html">Shop 4 Column</a></li>
                                    <li><a href="shop-left-sidebar.html">Shop Grid Left Sidebar</a></li>
                                    <li><a href="shop-right-sidebar.html">Shop Grid Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">product Details Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product.html">Product Single</a></li>
                                    <li><a href="single-product-variable.html">Product Variable</a></li>
                                    <li><a href="single-product-affiliate.html">Product Affiliate</a></li>
                                    <li><a href="single-product-group.html">Product Group</a></li>
                                    <li><a href="single-product-tabstyle-2.html">Product Tab 2</a></li>
                                    <li><a href="single-product-tabstyle-3.html">Product Tab 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Single Product Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product-slider.html">Product Slider</a></li>
                                    <li><a href="single-product-gallery-left.html">Product Gallery Left</a>
                                    </li>
                                    <li><a href="single-product-gallery-right.html">Product Gallery Right</a>
                                    </li>
                                    <li><a href="single-product-sticky-left.html">Product Sticky Left</a></li>
                                    <li><a href="single-product-sticky-right.html">Product Sticky Right</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Other Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="cart.html">Cart Page</a></li>
                                    <li><a href="checkout.html">Checkout Page</a></li>
                                    <li><a href="compare.html">Compare Page</a></li>
                                    <li><a href="wishlist.html">Wishlist Page</a></li>
                                    <li><a href="my-account.html">Account Page</a></li>
                                    <li><a href="login.html">Login & Register Page</a></li>
                                    <li><a href="empty-cart.html">Empty Cart Page</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Pages</span></a>
                        <ul class="sub-menu">
                            <li><a href="404.html">404 Page</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="faq.html">Faq Page</a></li>
                            <li><a href="coming-soon.html">Coming Soon Page</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Blog</span></a>
                        <ul class="sub-menu">
                            <li><a href="#"><span class="menu-text">Blog Grid</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                    <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span class="menu-text">Blog List</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                    <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span class="menu-text">Blog Single</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                                    <li><a href="blog-single-right-sidebar.html">Blog Single Right Sidbar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
            <!-- OffCanvas Menu End -->

            <!-- Language Currency start -->
            <div class="offcanvas-userpanel mt-8">
                <ul>
                    <!-- Language Start -->
                    <li class="offcanvas-userpanel__role">
                        <a href="#">English <i class="ion-ios-arrow-down"></i></a>
                        <ul class="user-sub-menu">
                            <li><a class="current" href="#">English</a></li>
                            <li><a href="#"> Italiano</a></li>
                            <li><a href="#"> Français</a></li>
                            <li><a href="#"> Filipino</a></li>
                        </ul>
                    </li>
                    <!-- Language End -->
                    <!-- Currency Start -->
                    <li class="offcanvas-userpanel__role">
                        <a href="#">USD $ <i class="ion-ios-arrow-down"></i></a>
                        <ul class="user-sub-menu">
                            <li><a class="current" href="#">USD $</a></li>
                            <li><a href="#">EUR €</a></li>
                            <li><a href="#">POUND £</a></li>
                            <li><a href="#">FRANC ₣</a></li>
                        </ul>
                    </li>
                    <!-- Currency End -->
                </ul>
            </div>
            <!-- Language Currency End -->
            <div class="offcanvas-social mt-auto">
                <ul>
                    <li>
                        <a href="#"><i class="ion-social-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="ion-social-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="ion-social-google"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="ion-social-youtube"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="ion-social-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- OffCanvas Menu End -->


    <div class="offcanvas-overlay"></div>

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
                                    <img src="assets/images/slider-image/slider-1.png" alt="" />
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
                                    <img src="assets/images/slider-image/slider-2.png" alt="" />
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
                                <img src="assets/images/icons/1.png" alt="">
                                <span class="title">Office Chair</span>
                            </div>
                        </a>
                    </div>
                    <!-- Single Category -->
                    <div class=" swiper-slide">
                        <a href="shop-left-sidebar.html" class="category-inner ">
                            <div class="category-single-item">
                                <img src="assets/images/icons/2.png" alt="">
                                <span class="title">Book Shelf</span>
                            </div>
                        </a>
                    </div>
                    <!-- Single Category -->
                    <div class=" swiper-slide">
                        <a href="shop-left-sidebar.html" class="category-inner ">
                            <div class="category-single-item">
                                <img src="assets/images/icons/3.png" alt="">
                                <span class="title">Light & Sofa</span>
                            </div>
                        </a>
                    </div>
                    <!-- Single Category -->
                    <div class=" swiper-slide">
                        <a href="shop-left-sidebar.html" class="category-inner ">
                            <div class="category-single-item">
                                <img src="assets/images/icons/4.png" alt="">
                                <span class="title">Reading Table</span>
                            </div>
                        </a>
                    </div>
                    <!-- Single Category -->
                    <div class="swiper-slide">
                        <a href="shop-left-sidebar.html" class="category-inner ">
                            <div class="category-single-item">
                                <img src="assets/images/icons/5.png" alt="">
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
                        <div class="tab-pane fade show active" id="tab-product-new-arrivals">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets/images/product-image/1.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/2.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Simple minimal Chair </a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="400">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets/images/product-image/3.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/4.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">-10%</span>
                                            <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Wooden decorations</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            <span class="old">$48.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="600">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets/images/product-image/5.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/6.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">-7%</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">High quality vase bottle</a></h5>
                                            <span class="price">
                                                <span class="new">$30.50</span>
                                            <span class="old">$38.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="800">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets/images/product-image/7.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/8.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Chair</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets/images/product-image/9.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/10.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">-5%</span>
                                            <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Table</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            <span class="old">$40.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6  mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="400">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets/images/product-image/11.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/12.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Wooden decorations</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-es-30px" data-aos="fade-up" data-aos-delay="600">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets/images/product-image/13.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/14.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">High quality vase bottle</a></h5>
                                            <span class="price">
                                                <span class="new">$30.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 " data-aos="fade-up" data-aos-delay="800">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets/images/product-image/15.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/16.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Chair</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                            </div>
                        </div>
                        <!-- 1st tab end -->
                        <!-- 2nd tab start -->
                        <div class="tab-pane fade" id="tab-product-best-sellers">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets/images/product-image/1.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/2.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Simple minimal Chair </a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="400">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets/images/product-image/3.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/4.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">-10%</span>
                                            <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Wooden decorations</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            <span class="old">$48.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="600">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets/images/product-image/5.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/6.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">-7%</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">High quality vase bottle</a></h5>
                                            <span class="price">
                                                <span class="new">$30.50</span>
                                            <span class="old">$38.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="800">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets/images/product-image/7.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/8.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Chair</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets/images/product-image/9.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/10.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">-5%</span>
                                            <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Table</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            <span class="old">$40.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6  mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="400">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets/images/product-image/11.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/12.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Wooden decorations</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-es-30px" data-aos="fade-up" data-aos-delay="600">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets/images/product-image/13.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/14.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">High quality vase bottle</a></h5>
                                            <span class="price">
                                                <span class="new">$30.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 " data-aos="fade-up" data-aos-delay="800">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets/images/product-image/15.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/16.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Chair</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                            </div>
                        </div>
                        <!-- 2nd tab end -->
                        <!-- 3rd tab start -->
                        <div class="tab-pane fade" id="tab-product-sale-item">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets/images/product-image/1.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/2.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Simple minimal Chair </a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="400">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets/images/product-image/3.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/4.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">-10%</span>
                                            <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Wooden decorations</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            <span class="old">$48.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="600">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets/images/product-image/5.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/6.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">-7%</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">High quality vase bottle</a></h5>
                                            <span class="price">
                                                <span class="new">$30.50</span>
                                            <span class="old">$38.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="800">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets/images/product-image/7.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/8.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Chair</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets/images/product-image/9.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/10.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">-5%</span>
                                            <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Table</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            <span class="old">$40.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6  mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="400">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets/images/product-image/11.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/12.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Wooden decorations</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-es-30px" data-aos="fade-up" data-aos-delay="600">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets/images/product-image/13.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/14.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">High quality vase bottle</a></h5>
                                            <span class="price">
                                                <span class="new">$30.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 " data-aos="fade-up" data-aos-delay="800">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets/images/product-image/15.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/16.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Chair</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                            </div>
                        </div>
                        <!-- 3rd tab end -->
                        <!-- 4th tab start -->
                        <div class="tab-pane fade" id="tab-product-on-sales">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets/images/product-image/1.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/2.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Simple minimal Chair </a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="400">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets/images/product-image/3.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/4.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">-10%</span>
                                            <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Wooden decorations</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            <span class="old">$48.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="600">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets/images/product-image/5.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/6.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">-7%</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">High quality vase bottle</a></h5>
                                            <span class="price">
                                                <span class="new">$30.50</span>
                                            <span class="old">$38.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="800">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets/images/product-image/7.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/8.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Chair</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets/images/product-image/9.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/10.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="sale">-5%</span>
                                            <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Table</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            <span class="old">$40.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6  mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="400">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets/images/product-image/11.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/12.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Wooden decorations</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-es-30px" data-aos="fade-up" data-aos-delay="600">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets/images/product-image/13.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/14.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">High quality vase bottle</a></h5>
                                            <span class="price">
                                                <span class="new">$30.50</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 " data-aos="fade-up" data-aos-delay="800">
                                    <!-- Single Prodect -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="shop-left-sidebar.html" class="image">
                                                <img src="assets/images/product-image/15.jpg" alt="Product" />
                                                <img class="hover-image" src="assets/images/product-image/16.jpg" alt="Product" />
                                            </a>
                                            <span class="badges">
                                                <span class="new">New</span>
                                            </span>
                                            <div class="actions">
                                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i
                                                        class="icon-heart"></i></a>
                                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                        class="icon-size-fullscreen"></i></a>
                                                <a href="compare.html" class="action compare" title="Compare"><i
                                                        class="icon-refresh"></i></a>
                                            </div>
                                            <button title="Add To Cart" class=" add-to-cart">Add
                                                To Cart</button>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="shop-left-sidebar.html">Living & Bedroom Chair</a></h5>
                                            <span class="price">
                                                <span class="new">$38.50</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Prodect -->
                                </div>
                            </div>
                        </div>
                        <!-- 4th tab end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product tab Area End -->

    <!-- Banner Section Start -->
    <div class="section pb-100px pt-100px">
        <div class="container">
            <!-- Banners Start -->
            <div class="row">
                <!-- Banner Start -->
                <div class="col-lg-6 col-12 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                    <a href="shop-left-sidebar.html" class="banner">
                        <img src="assets/images/banner/1.jpg" alt="" />
                        <div class="info justify-content-end">
                            <div class="content align-self-center">
                                <h3 class="title">
                                    Sale Furniture <br /> For Summer
                                </h3>
                                <p>Great Discounts Here</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Banner End -->

                <!-- Banner Start -->
                <div class="col-lg-6 col-12" data-aos="fade-up" data-aos-delay="400">
                    <a href="shop-left-sidebar.html" class="banner">
                        <img src="assets/images/banner/2.jpg" alt="" />
                        <div class="info justify-content-start">
                            <div class="content align-self-center">
                                <h3 class="title">
                                    Office Chair <br /> For Best Offer</h3>
                                <p>Great Discounts Here</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Banner End -->
            </div>
            <!-- Banners End -->
        </div>
    </div>
    <!-- Banner Section End -->
    <!--  Blog area Start -->
    <div class="main-blog-area pb-100px">
        <div class="container">
            <!-- section title start -->
            <div class="row">
                <div class="col-md-12" data-aos="fade-up">
                    <div class="section-title text-center mb-11">
                        <h2 class="title">Latest News</h2>
                        <p class="sub-title">Torem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmo tempor incididunt ut labore
                        </p>
                    </div>
                </div>
            </div>
            <!-- section title start -->
            <div class="blog-slider swiper-container slider-nav-style-1" data-aos="fade-up" data-aos-delay="200">
                <!-- Start single blog -->
                <div class="swiper-wrapper">
                    <div class="single-blog swiper-slide">
                        <div class="blog-image">
                            <a href="blog-single-left-sidebar.html"><img src="assets/images/blog-image/1.jpg" class="img-responsive w-100" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date">
                                <a class="blog-date" href="#">14 November</a>
                            </div>
                            <h5 class="blog-heading"><a class="blog-heading-link" href="blog-single-left-sidebar.html">Interior design is the art.</a></h5>
                            <p class="blog-detail-text">Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididu ut labore et dolore magna aliqua.</p>

                            <a href="#" class="btn btn-lg btn-hover-color-primary btn-color-dark mt-25px">Read More</a>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <div class="single-blog swiper-slide">
                        <div class="blog-image">
                            <a href="blog-single-left-sidebar.html"><img src="assets/images/blog-image/2.jpg" class="img-responsive w-100" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date">
                                <a class="blog-date" href="#">14 November</a>
                            </div>
                            <h5 class="blog-heading"><a class="blog-heading-link" href="blog-single-left-sidebar.html">Decorate your home with furns.</a></h5>
                            <p class="blog-detail-text">Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididu ut labore et dolore magna aliqua.</p>

                            <a href="#" class="btn btn-lg btn-hover-color-primary btn-color-dark mt-25px">Read More</a>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <div class="single-blog swiper-slide">
                        <div class="blog-image">
                            <a href="blog-single-left-sidebar.html"><img src="assets/images/blog-image/3.jpg" class="img-responsive w-100" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date">
                                <a class="blog-date" href="#">14 November</a>
                            </div>
                            <h5 class="blog-heading"><a class="blog-heading-link" href="blog-single-left-sidebar.html">Spatialize with that the furns.</a></h5>
                            <p class="blog-detail-text">Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididu ut labore et dolore magna aliqua.</p>

                            <a href="#" class="btn btn-lg btn-hover-color-primary btn-color-dark mt-25px">Read More</a>
                        </div>
                    </div>
                    <!-- End single blog -->
                    <div class="single-blog swiper-slide">
                        <div class="blog-image">
                            <a href="blog-single-left-sidebar.html"><img src="assets/images/blog-image/4.jpg" class="img-responsive w-100" alt=""></a>
                        </div>
                        <div class="blog-text">
                            <div class="blog-athor-date">
                                <a class="blog-date" href="#">14 November</a>
                            </div>
                            <h5 class="blog-heading"><a class="blog-heading-link" href="blog-single-left-sidebar.html">Unique products will impress.</a></h5>
                            <p class="blog-detail-text">Lorem ipsum dolor sit amet, consectetur adipi elit, sed do eiusmod tempor incididu ut labore et dolore magna aliqua.</p>

                            <a href="#" class="btn btn-lg btn-hover-color-primary btn-color-dark mt-25px">Read More</a>
                        </div>
                    </div>
                    <!-- End single blog -->
                </div>
                <!-- Add Arrows -->
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
    <!--  Blog area End -->

    <!-- Instagram Area Start -->
    <div class="section pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-md-12" data-aos="fade-up">
                    <div class="section-title text-center mb-11">
                        <h2 class="title">Follow Us Instagram</h2>
                        <p class="sub-title">Torem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmo tempor incididunt ut labore</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Item -->
                <div class="col-lg-3 col-md-6 col-sm-6 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                    <div class="insta-wrapper">
                        <a href="https://www.instagram.com/" target="_blank"><img class="w-100" src="assets/images/instragram-image/1.png" alt="">

                        </a>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-lg-3 col-md-6 col-sm-6 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="400">
                    <div class="insta-wrapper">
                        <a href="https://www.instagram.com/" target="_blank"><img class="w-100" src="assets/images/instragram-image/2.png" alt="">

                        </a>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-lg-3 col-md-6 col-sm-6 mb-xs-30px" data-aos="fade-up" data-aos-delay="600">
                    <div class="insta-wrapper">
                        <a href="https://www.instagram.com/" target="_blank"><img class="w-100" src="assets/images/instragram-image/3.png" alt="">

                        </a>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-lg-3 col-md-6 col-sm-6 " data-aos="fade-up" data-aos-delay="800">
                    <div class="insta-wrapper">
                        <a href="https://www.instagram.com/" target="_blank"><img class="w-100" src="assets/images/instragram-image/4.png" alt="">

                        </a>
                    </div>
                </div>
                <!-- Single Item -->
            </div>
        </div>
    </div>
    <!-- Instagram Area End -->

    <!-- Footer Area Start -->
    <div class="footer-area">
        <div class="footer-container">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <!-- Start single blog -->
                        <div class="col-md-6 col-lg-4 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                            <div class="single-wedge">
                                <h4 class="footer-herading">about us</h4>
                                <p class="about-text">Lorem ipsum dolor sit amet cons adipisicing elit sed do eiusm tempor incididunt ut labor et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                </p>
                                <ul class="link-follow">
                                    <li class="li">
                                        <a class="paypal icon-paypal m-0" title="Paypal" href="#"></a>
                                    </li>
                                    <li class="li">
                                        <a class="tumblr icon-social-tumblr" title="Tumblr" href="#"></a>
                                    </li>
                                    <li class="li">
                                        <a class="twitter icon-social-twitter" title="Twitter" href="#"></a>
                                    </li>
                                    <li class="li">
                                        <a class="pinterest icon-social-pinterest" title="Pinterest" href="#"></a>
                                    </li>
                                    <li class="li">
                                        <a class="linkedin icon-social-linkedin" title="Linkedin" href="#"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-6 col-sm-6 col-lg-3 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="400">
                            <div class="single-wedge">
                                <h4 class="footer-herading">information</h4>
                                <div class="footer-links">
                                    <div class="footer-row">
                                        <ul class="align-items-center">
                                            <li class="li"><a class="single-link" href="about.html">About us</a></li>
                                            <li class="li"><a class="single-link" href="#">Delivery Information</a></li>
                                            <li class="li"><a class="single-link" href="privacy-policy.html">Privacy & Policy</a></li>
                                            <li class="li"><a class="single-link" href="#">Terms & Condition</a></li>
                                            <li class="li"><a class="single-link" href="#">Manufactures</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-6 col-lg-2 col-sm-6 mb-lm-30px" data-aos="fade-up" data-aos-delay="600">
                            <div class="single-wedge">
                                <h4 class="footer-herading">my account</h4>
                                <div class="footer-links">
                                    <div class="footer-row">
                                        <ul class="align-items-center">
                                            <li class="li"><a class="single-link" href="my-account.html">My
                                                    Account</a>
                                            </li>
                                            <li class="li"><a class="single-link" href="cart.html">My Cart</a></li>
                                            <li class="li"><a class="single-link" href="login.html">Login</a></li>
                                            <li class="li"><a class="single-link" href="wishlist.html">Wishlist</a></li>
                                            <li class="li"><a class="single-link" href="checkout.html">Checkout</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="800">
                            <div class="single-wedge">
                                <h4 class="footer-herading">newsletter</h4>
                                <div class="footer-links">
                                    <!-- News letter area -->
                                    <div id="mc_embed_signup" class="subscribe-form">
                                        <form id="mc-embedded-subscribe-form" class="validate" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                            <div id="mc_embed_signup_scroll" class="mc-form">
                                                <input class="email" type="email" required="" placeholder="Your Mail*" name="EMAIL" value="" />
                                                <div class="mc-news" aria-hidden="true">
                                                    <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" />
                                                </div>
                                                <div class="clear">
                                                    <button id="mc-embedded-subscribe" class="button btn-primary" type="submit" name="subscribe" value=""><i
                                                            class="icon-cursor"></i> Send Mail</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- News letter area  End -->
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row flex-sm-row-reverse">
                        <div class="col-md-6 text-end">
                            <div class="payment-link">
                                <img src="assets/images/icons/payment.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 text-start">
                            <p class="copy-text"> © 2021 <strong>Furns</strong> Made With <i class="ion-heart" aria-hidden="true"></i> By <a class="company-name" href="https://hasthemes.com/">
                                <strong> HasThemes</strong></a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Area End -->



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">x</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12 mb-lm-30px mb-sm-30px">
                            <!-- Swiper -->
                            <div class="swiper-container gallery-top mb-20px">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/2.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/3.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/4.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/5.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-container gallery-thumbs slider-nav-style-1 small-nav">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/2.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/3.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/4.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="assets/images/product-image/5.jpg" alt="">
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-buttons">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="product-details-content quickview-content">
                                <h2>Originals Kaval Windbr</h2>
                                <p class="reference">Reference:<span> demo_17</span></p>
                                <div class="pro-details-rating-wrap">
                                    <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <span class="read-review"><a class="reviews" href="#">Read reviews (1)</a></span>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price not-cut">$18.90</li>
                                    </ul>
                                </div>
                                <p class="quickview-para">Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                                <div class="pro-details-size-color">
                                    <div class="pro-details-color-wrap">
                                        <span>Color</span>
                                        <div class="pro-details-color-content">
                                            <ul>
                                                <li class="blue"></li>
                                                <li class="maroon active"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                    </div>
                                    <div class="pro-details-cart btn-hover">
                                        <button class="add-cart btn btn-primary btn-hover-primary ml-4"> Add To
                                            Cart</button>
                                    </div>
                                </div>
                                <div class="pro-details-wish-com">
                                    <div class="pro-details-wishlist">
                                        <a href="wishlist.html"><i class="ion-android-favorite-outline"></i>Add to
                                            wishlist</a>
                                    </div>
                                    <div class="pro-details-compare">
                                        <a href="compare.html"><i class="ion-ios-shuffle-strong"></i>Add to compare</a>
                                    </div>
                                </div>
                                <div class="pro-details-social-info">
                                    <span>Share</span>
                                    <div class="social-info">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="ion-social-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-google"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->







    <!-- Global Vendor, plugins JS -->

    <!-- Vendor JS -->
    <!-- <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script> -->

    <!--Plugins JS-->
    <!-- <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/countdown.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/plugins/jquery.waypoints.js"></script>
    <script src="assets/js/plugins/jquery.lineProgressbar.js"></script>
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="assets/js/plugins/venobox.min.js"></script>
    <script src="assets/js/plugins/ajax-mail.js"></script> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="{{ asset ('ecommerce/assets/web/dist/js/vendor/vendor.min.js') }}"></script>
    <script src="{{ asset ('ecommerce/assets/web/dist/js/plugins/plugins.min.js') }}"></script>

    <!-- Main Js -->
    <script src="{{ asset ('ecommerce/assets/web/dist/js/main.js') }}"></script>
</body>

</html>
