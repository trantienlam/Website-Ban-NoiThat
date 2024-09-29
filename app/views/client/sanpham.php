<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/ruiz/ruiz/shop-fullwidth.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Mar 2023 08:01:32 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ruiz - Watch Store HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="resource/images/favicon.ico">

    <!-- CSS
	============================================ -->
    <!-- cửa hàng toàn chiều rộng -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../../resource/css/vendor/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="../../../resource/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="../../../resource/css/vendor/simple-line-icons.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="../../../resource/css/plugins/animation.css">
    <link rel="stylesheet" href="../../../resource/css/plugins/slick.css">
    <link rel="stylesheet" href="../../../resource/css/plugins/animation.css">
    <link rel="stylesheet" href="../../../resource/css/plugins/nice-select.css">
    <link rel="stylesheet" href="../../../resource/css/plugins/fancy-box.css">
    <link rel="stylesheet" href="../../../resource/css/plugins/jqueryui.min.css">

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe) -->
    <!--
    <script src="../../../resource/js/vendor/vendor.min.js"></script>
    <script src="../../../resource/js/plugins/plugins.min.js"></script>
    -->

    <!-- Main Style CSS (Please use minify version for better website load performance) -->
    <link rel="stylesheet" href="../../../resource/css/style.css">
    <!--<link rel="stylesheet" href="../../../resource/css/style.min.css">-->

</head>

<body>

    <div class="main-wrapper">

        <!--  Header Start -->
        <header class="header">

            <!-- Header Top Start -->
            <div class="header-top-area d-none d-lg-block text-color-white bg-gren border-bm-1">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="header-top-settings">
                                <ul class="nav align-items-center">
                                    <li class="language">English <i class="fa fa-angle-down"></i>
                                        <ul class="dropdown-list">
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">French</a></li>
                                        </ul>
                                    </li>
                                    <li class="curreny-wrap">Currency <i class="fa fa-angle-down"></i>
                                        <ul class="dropdown-list curreny-list">
                                            <li><a href="#">$ USD</a></li>
                                            <li><a href="#"> € EURO</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="top-info-wrap text-end">
                                <ul class="my-account-container">
                                    <li><a href="my-account.html">My account</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Header Top End -->

            <!-- haeader Mid Start -->
            <div class="haeader-mid-area bg-gren border-bm-1 d-none d-lg-block ">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-4 col-5">
                            <div class="logo-area">
                                <a href="<?= BASE_URL . '/ ' ?>" class="text-decoration-none text-black fw-bold fs-4"><iconify-icon icon="ic:baseline-watch"></iconify-icon> <span class="">F-Watch</span></a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="search-box-wrapper">
                                <div class="search-box-inner-wrap">
                                    <form class="search-box-inner">
                                        <div class="search-select-box">
                                            <select class="nice-select">
                                                <optgroup label=" Watch">
                                                    <option value="volvo">All</option>
                                                    <option value="saab">Watch</option>
                                                    <option value="saab">Air cooler</option>
                                                </optgroup>
                                                <optgroup label="Fashion">
                                                    <option value="mercedes">Womens tops</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="search-field-wrap">
                                            <input type="text" class="search-field" placeholder="Search product...">

                                            <div class="search-btn">
                                                <button><i class="icon-magnifier"></i></button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="right-blok-box text-white d-flex">

                                <div class="user-wrap">
                                    <a href="wishlist.html"><span class="cart-total">2</span> <i class="icon-heart"></i></a>
                                </div>

                                <div class="shopping-cart-wrap">
                                    <a href="#"><i class="icon-basket-loaded"></i><span class="cart-total">2</span></a>
                                    <ul class="mini-cart">
                                        <li class="cart-item">
                                            <div class="cart-image">
                                                <a href="product-details.html"><img alt="" src="../../../resource/images/product/product-02.png"></a>
                                            </div>
                                            <div class="cart-title">
                                                <a href="product-details.html">
                                                    <h4>Product Name 01</h4>
                                                </a>
                                                <div class="quanti-price-wrap">
                                                    <span class="quantity">1 ×</span>
                                                    <div class="price-box"><span class="new-price">$130.00</span></div>
                                                </div>
                                                <a class="remove_from_cart" href="#"><i class="icon_close"></i></a>
                                            </div>
                                        </li>
                                        <li class="cart-item">
                                            <div class="cart-image">
                                                <a href="product-details.html"><img alt="" src="../../../resource/images/product/product-03.png"></a>
                                            </div>
                                            <div class="cart-title">
                                                <a href="product-details.html">
                                                    <h4>Product Name 03</h4>
                                                </a>
                                                <div class="quanti-price-wrap">
                                                    <span class="quantity">1 ×</span>
                                                    <div class="price-box"><span class="new-price">$130.00</span></div>
                                                </div>
                                                <a class="remove_from_cart" href="#"><i class="icon-trash icons"></i></a>
                                            </div>
                                        </li>
                                        <li class="subtotal-box">
                                            <div class="subtotal-title">
                                                <h3>Sub-Total :</h3><span>$ 260.99</span>
                                            </div>
                                        </li>
                                        <li class="mini-cart-btns">
                                            <div class="cart-btns">
                                                <a href="cart.html">View cart</a>
                                                <a href="checkout.html">Checkout</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- haeader Mid End -->

            <!-- haeader bottom Start -->
            <div class="haeader-bottom-area bg-gren header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 d-none d-lg-block">
                            <div class="main-menu-area white_text">
                                <!--  Start Mainmenu Nav-->
                                <nav class="main-navigation text-center">
                                    <ul>
                                        <li class="active"><a href="index.html">Home <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="index.html">Home Page 1</a></li>
                                                <li><a href="index-2.html">Home Page 2</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="#">Shop <i class="fa fa-angle-down"></i></a>
                                            <ul class="mega-menu">
                                                <li><a href="#">Shop Layouts</a>
                                                    <ul>
                                                        <li><a href="shop.html">Shop Left Sidebar</a></li>
                                                        <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a>
                                                        </li>
                                                        <li><a href="shop-list-left.html">Shop List Left Sidebar</a>
                                                        </li>
                                                        <li><a href="shop-list-right.html">Shop List Right Sidebar</a>
                                                        </li>
                                                        <li><a href="shop-fullwidth.html">Shop Full Width</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog.html">Product Details</a>
                                                    <ul>
                                                        <li><a href="product-details.html">Single Product Details</a>
                                                        </li>
                                                        <li><a href="variable-product-details.html">Variable Product
                                                                Details</a></li>
                                                        <li><a href="affiliate-product-details.html">affiliatel Product
                                                                Details</a></li>
                                                        <li><a href="gallery-product-details.html">Gallery Product
                                                                Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Shop Pages</a>
                                                    <ul>
                                                        <li><a href="error404.html">Error 404</a></li>
                                                        <li><a href="compare.html">Compare Page</a></li>
                                                        <li><a href="cart.html">Cart Page</a></li>
                                                        <li><a href="checkout.html">Checkout Page</a></li>
                                                        <li><a href="wishlist.html">Wish List Page</a></li>
                                                    </ul>
                                                </li>
                                            </ul>

                                        </li>
                                        <li><a href="blog.html">Blog <i class="fa fa-angle-down"></i></a>

                                            <ul class="sub-menu">
                                                <li><a href="blog.html">Blog Left Sidebar</a></li>
                                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                                <li><a href="blog-grid.html">Blog Grid Page</a></li>
                                                <li><a href="blog-largeimage.html">Blog Large Image</a></li>
                                                <li><a href="blog-details.html">Blog Details Page</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="#">Pages <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="frequently-questions.html">FAQ</a></li>
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="login-register.html">login &amp; register</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="contact-us.html">Contact</a></li>
                                    </ul>
                                </nav>

                            </div>
                        </div>

                        <div class="col-5 col-md-6 d-block d-lg-none">
                            <div class="logo"><a href="index.html"><img src="../../../resource/images/logo/logo.png" alt=""></a></div>
                        </div>


                        <div class="col-lg-3 col-md-6 col-7 d-block d-lg-none">
                            <div class="right-blok-box text-white d-flex">

                                <div class="user-wrap">
                                    <a href="wishlist.html"><span class="cart-total">2</span> <i class="icon-heart"></i></a>
                                </div>

                                <div class="shopping-cart-wrap">
                                    <a href="#"><i class="icon-basket-loaded"></i><span class="cart-total">2</span></a>
                                    <ul class="mini-cart">
                                        <li class="cart-item">
                                            <div class="cart-image">
                                                <a href="product-details.html"><img alt="" src="../../../resource/images/product/product-02.png"></a>
                                            </div>
                                            <div class="cart-title">
                                                <a href="product-details.html">
                                                    <h4>Product Name 01</h4>
                                                </a>
                                                <div class="quanti-price-wrap">
                                                    <span class="quantity">1 ×</span>
                                                    <div class="price-box"><span class="new-price">$130.00</span></div>
                                                </div>
                                                <a class="remove_from_cart" href="#"><i class="fa fa-times"></i></a>
                                            </div>
                                        </li>
                                        <li class="cart-item">
                                            <div class="cart-image">
                                                <a href="product-details.html"><img alt="" src="../../../resource/images/product/product-03.png"></a>
                                            </div>
                                            <div class="cart-title">
                                                <a href="product-details.html">
                                                    <h4>Product Name 03</h4>
                                                </a>
                                                <div class="quanti-price-wrap">
                                                    <span class="quantity">1 </span>
                                                    <div class="price-box"><span class="new-price">$130.00</span></div>
                                                </div>
                                                <a class="remove_from_cart" href="#"><i class="icon-trash icons"></i></a>
                                            </div>
                                        </li>
                                        <li class="subtotal-box">
                                            <div class="subtotal-title">
                                                <h3>Sub-Total :</h3><span>$ 260.99</span>
                                            </div>
                                        </li>
                                        <li class="mini-cart-btns">
                                            <div class="cart-btns">
                                                <a href="cart.html">View cart</a>
                                                <a href="checkout.html">Checkout</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="mobile-menu-btn d-block d-lg-none">
                                    <div class="off-canvas-btn">
                                        <a href="#"><img src="../../../resource/images/icon/bg-menu.png" alt=""></a>
                                    </div>
                                </div>

                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <!-- haeader bottom End -->

            <!-- off-canvas menu start -->
            <aside class="off-canvas-wrapper">
                <div class="off-canvas-overlay"></div>
                <div class="off-canvas-inner-content">
                    <div class="btn-close-off-canvas">
                        <i class="fa fa-times"></i>
                    </div>

                    <div class="off-canvas-inner">

                        <div class="search-box-offcanvas">
                            <form>
                                <input type="text" placeholder="Search product...">
                                <button class="search-btn"><i class="icon-magnifier"></i></button>
                            </form>
                        </div>

                        <!-- mobile menu start -->
                        <div class="mobile-navigation">

                            <!-- mobile menu navigation start -->
                            <nav>
                                <ul class="mobile-menu">
                                    <li class="menu-item-has-children"><a href="#">Home</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home Page 1</a></li>
                                            <li><a href="index-2.html">Home Page 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Shop</a>
                                        <ul class="megamenu dropdown">
                                            <li class="mega-title has-children"><a href="#">Shop Layouts</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.html">Shop Left Sidebar</a></li>
                                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                    <li><a href="shop-list-left.html">Shop List Left Sidebar</a></li>
                                                    <li><a href="shop-list-right.html">Shop List Right Sidebar</a></li>
                                                    <li><a href="shop-fullwidth.html">Shop Full Width</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-title has-children"><a href="#">Product Details</a>
                                                <ul class="dropdown">
                                                    <li><a href="product-details.html">Single Product Details</a></li>
                                                    <li><a href="variable-product-details.html">Variable Product
                                                            Details</a></li>
                                                    <li><a href="affiliate-product-details.html">affiliatel Product
                                                            Details</a></li>
                                                    <li><a href="gallery-product-details.html">Gallery Product
                                                            Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-title has-children"><a href="#">Shop Pages</a>
                                                <ul class="dropdown">
                                                    <li><a href="error404.html">Error 404</a></li>
                                                    <li><a href="compare.html">Compare Page</a></li>
                                                    <li><a href="cart.html">Cart Page</a></li>
                                                    <li><a href="checkout.html">Checkout Page</a></li>
                                                    <li><a href="wishlist.html">Wish List Page</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children "><a href="#">Blog</a>
                                        <ul class="dropdown">
                                            <li><a href="blog.html">Blog Left Sidebar</a></li>
                                            <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                            <li><a href="blog-grid.html">Blog Grid Page</a></li>
                                            <li><a href="blog-largeimage.html">Blog Large Image</a></li>
                                            <li><a href="blog-details.html">Blog Details Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children "><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="frequently-questions.html">FAQ</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="login-register.html">login &amp; register</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="contact-us.html">Contact</a></li>
                                </ul>
                            </nav>
                            <!-- mobile menu navigation end -->
                        </div>
                        <!-- mobile menu end -->


                        <div class="header-top-settings offcanvas-curreny-lang-support">
                            <h5>My Account</h5>
                            <ul class="nav align-items-center">
                                <li class="language">English <i class="fa fa-angle-down"></i>
                                    <ul class="dropdown-list">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">French</a></li>
                                    </ul>
                                </li>
                                <li class="curreny-wrap">Currency <i class="fa fa-angle-down"></i>
                                    <ul class="dropdown-list curreny-list">
                                        <li><a href="#">$ USD</a></li>
                                        <li><a href="#"> € EURO</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <!-- offcanvas widget area start -->
                        <div class="offcanvas-widget-area">
                            <div class="top-info-wrap text-left text-black">
                                <h5>My Account</h5>
                                <ul class="offcanvas-account-container">
                                    <li><a href="my-account.html">My account</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                            </div>

                        </div>
                        <!-- offcanvas widget area end -->
                    </div>
                </div>
            </aside>
            <!-- off-canvas menu end -->

        </header>
        <!--  Header Start -->
        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Shop Fullwidth</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area end -->


        <!-- main-content-wrap start -->
        <div class="main-content-wrap shop-page section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <!-- shop-product-wrapper start -->
                        <div class="shop-product-wrapper">
                            <div class="row align-itmes-center">
                                <div class="col">
                                    <!-- shop-top-bar start -->
                                    <div class="shop-top-bar">
                                        <!-- product-view-mode start -->

                                        <div class="product-mode">
                                            <!--shop-item-filter-list-->
                                            <ul class="nav shop-item-filter-list" role="tablist">
                                                <li class="active"><a class="active grid-view" data-bs-toggle="tab" href="#grid"><i class="fa fa-th"></i></a></li>
                                                <li><a class="list-view" data-bs-toggle="tab" href="#list"><i class="fa fa-th-list"></i></a></li>
                                            </ul>
                                            <!-- shop-item-filter-list end -->
                                        </div>
                                        <!-- product-view-mode end -->
                                        <!-- product-short start -->
                                        <div class="product-short">
                                            <p>Sort By :</p>
                                            <select class="nice-select" name="sortby">
                                                <option value="trending">Relevance</option>
                                                <option value="sales">Name(A - Z)</option>
                                                <option value="sales">Name(Z - A)</option>
                                                <option value="rating">Price(Low > High)</option>
                                                <option value="date">Rating(Lowest)</option>
                                            </select>
                                        </div>
                                        <!-- product-short end -->
                                    </div>
                                    <!-- shop-top-bar end -->
                                </div>
                            </div>

                            <!-- shop-products-wrap start -->
                            <div class="shop-products-wrap">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="grid">
                                        <div class="shop-product-wrap">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-6">
                                                    <!-- single-product-area start -->
                                                    <div class="single-product-area mt-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img class="primary-image" src="../../../resource/images/product/product-20.png" alt="">
                                                            </a>
                                                            <div class="label-product label_new">New</div>
                                                            <div class="action-links">
                                                                <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                                                <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                                                <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                                            </div>
                                                            <ul class="watch-color">
                                                                <li class="twilight"><span></span></li>
                                                                <li class="portage"><span></span></li>
                                                                <li class="pigeon"><span></span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-caption">
                                                            <h4 class="product-name"><a href="product-details.html">Simple Product 001</a>
                                                            </h4>
                                                            <div class="price-box">
                                                                <span class="new-price">$44.00</span>
                                                                <span class="old-price">$49.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-area end -->
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <!-- single-product-area start -->
                                                    <div class="single-product-area mt-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img class="primary-image" src="../../../resource/images/product/product-02.png" alt="">
                                                            </a>
                                                            <div class="label-product label_new">New</div>
                                                            <div class="action-links">
                                                                <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                                                <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                                                <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                                            </div>
                                                            <ul class="watch-color">
                                                                <li class="twilight"><span></span></li>
                                                                <li class="portage"><span></span></li>
                                                                <li class="pigeon"><span></span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-caption">
                                                            <h4 class="product-name"><a href="product-details.html">Simple Product 005</a>
                                                            </h4>
                                                            <div class="price-box">
                                                                <span class="new-price">$35.00</span>
                                                                <span class="old-price">$39.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-area end -->
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <!-- single-product-area start -->
                                                    <div class="single-product-area mt-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img class="primary-image" src="../../../resource/images/product/product-06.png" alt="">
                                                            </a>
                                                            <div class="action-links">
                                                                <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                                                <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                                                <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                                            </div>
                                                            <ul class="watch-color">
                                                                <li class="twilight"><span></span></li>
                                                                <li class="portage"><span></span></li>
                                                                <li class="pigeon"><span></span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-caption">
                                                            <h4 class="product-name"><a href="product-details.html">Simple Product 004</a>
                                                            </h4>
                                                            <div class="price-box">
                                                                <span class="new-price">$42.00</span>
                                                                <span class="old-price">$45.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-area end -->
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <!-- single-product-area start -->
                                                    <div class="single-product-area mt-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img class="primary-image" src="../../../resource/images/product/product-07.png" alt="">
                                                            </a>
                                                            <div class="label-product label_new">New</div>
                                                            <div class="action-links">
                                                                <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                                                <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                                                <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                                            </div>
                                                            <ul class="watch-color">
                                                                <li class="twilight"><span></span></li>
                                                                <li class="portage"><span></span></li>
                                                                <li class="pigeon"><span></span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-caption">
                                                            <h4 class="product-name"><a href="product-details.html">Simple Product 004</a>
                                                            </h4>
                                                            <div class="price-box">
                                                                <span class="new-price">$35.00</span>
                                                                <span class="old-price">$39.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-area end -->
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <!-- single-product-area start -->
                                                    <div class="single-product-area mt-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img class="primary-image" src="../../../resource/images/product/product-08.png" alt="">
                                                            </a>
                                                            <div class="label-product label_new">New</div>
                                                            <div class="action-links">
                                                                <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                                                <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                                                <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                                            </div>
                                                            <ul class="watch-color">
                                                                <li class="twilight"><span></span></li>
                                                                <li class="portage"><span></span></li>
                                                                <li class="pigeon"><span></span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-caption">
                                                            <h4 class="product-name"><a href="product-details.html">Simple Product 008</a>
                                                            </h4>
                                                            <div class="price-box">
                                                                <span class="new-price">$75.00</span>
                                                                <span class="old-price">$79.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-area end -->
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <!-- single-product-area start -->
                                                    <div class="single-product-area mt-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img class="primary-image" src="../../../resource/images/product/product-09.png" alt="">
                                                            </a>
                                                            <div class="action-links">
                                                                <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                                                <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                                                <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                                            </div>
                                                            <ul class="watch-color">
                                                                <li class="twilight"><span></span></li>
                                                                <li class="portage"><span></span></li>
                                                                <li class="pigeon"><span></span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-caption">
                                                            <h4 class="product-name"><a href="product-details.html">Simple Product 009</a>
                                                            </h4>
                                                            <div class="price-box">
                                                                <span class="new-price">$75.00</span>
                                                                <span class="old-price">$79.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-area end -->
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <!-- single-product-area start -->
                                                    <div class="single-product-area mt-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img class="primary-image" src="../../../resource/images/product/product-10.png" alt="">
                                                            </a>
                                                            <div class="label-product label_new">New</div>
                                                            <div class="action-links">
                                                                <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                                                <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                                                <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                                            </div>
                                                            <ul class="watch-color">
                                                                <li class="twilight"><span></span></li>
                                                                <li class="portage"><span></span></li>
                                                                <li class="pigeon"><span></span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-caption">
                                                            <h4 class="product-name"><a href="product-details.html">Simple Product 010</a>
                                                            </h4>
                                                            <div class="price-box">
                                                                <span class="new-price">$65.00</span>
                                                                <span class="old-price">$69.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-area end -->
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <!-- single-product-area start -->
                                                    <div class="single-product-area mt-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img class="primary-image" src="../../../resource/images/product/product-11.png" alt="">
                                                            </a>
                                                            <div class="label-product label_new">New</div>
                                                            <div class="action-links">
                                                                <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                                                <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                                                <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                                            </div>
                                                            <ul class="watch-color">
                                                                <li class="twilight"><span></span></li>
                                                                <li class="portage"><span></span></li>
                                                                <li class="pigeon"><span></span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-caption">
                                                            <h4 class="product-name"><a href="product-details.html">Simple Product 011</a>
                                                            </h4>
                                                            <div class="price-box">
                                                                <span class="new-price">$45.00</span>
                                                                <span class="old-price">$69.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-area end -->
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <!-- single-product-area start -->
                                                    <div class="single-product-area mt-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img class="primary-image" src="../../../resource/images/product/product-12.png" alt="">
                                                            </a>
                                                            <div class="label-product label_new">New</div>
                                                            <div class="action-links">
                                                                <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                                                <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                                                <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                                            </div>
                                                            <ul class="watch-color">
                                                                <li class="twilight"><span></span></li>
                                                                <li class="portage"><span></span></li>
                                                                <li class="pigeon"><span></span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-caption">
                                                            <h4 class="product-name"><a href="product-details.html">Simple Product 012</a>
                                                            </h4>
                                                            <div class="price-box">
                                                                <span class="new-price">$45.00</span>
                                                                <span class="old-price">$69.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-area end -->
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <!-- single-product-area start -->
                                                    <div class="single-product-area mt-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img class="primary-image" src="../../../resource/images/product/product-13.png" alt="">
                                                            </a>
                                                            <div class="action-links">
                                                                <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                                                <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                                                <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                                            </div>
                                                            <ul class="watch-color">
                                                                <li class="twilight"><span></span></li>
                                                                <li class="portage"><span></span></li>
                                                                <li class="pigeon"><span></span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-caption">
                                                            <h4 class="product-name"><a href="product-details.html">Simple Product 013</a>
                                                            </h4>
                                                            <div class="price-box">
                                                                <span class="new-price">$45.00</span>
                                                                <span class="old-price">$69.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-area end -->
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <!-- single-product-area start -->
                                                    <div class="single-product-area mt-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img class="primary-image" src="../../../resource/images/product/product-14.png" alt="">
                                                            </a>
                                                            <div class="label-product label_new">New</div>
                                                            <div class="action-links">
                                                                <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                                                <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                                                <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                                            </div>
                                                            <ul class="watch-color">
                                                                <li class="twilight"><span></span></li>
                                                                <li class="portage"><span></span></li>
                                                                <li class="pigeon"><span></span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-caption">
                                                            <h4 class="product-name"><a href="product-details.html">Simple Product 013</a>
                                                            </h4>
                                                            <div class="price-box">
                                                                <span class="new-price">$45.00</span>
                                                                <span class="old-price">$69.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-area end -->
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <!-- single-product-area start -->
                                                    <div class="single-product-area mt-30">
                                                        <div class="product-thumb">
                                                            <a href="product-details.html">
                                                                <img class="primary-image" src="../../../resource/images/product/product-15.png" alt="">
                                                            </a>
                                                            <div class="label-product label_new">New</div>
                                                            <div class="action-links">
                                                                <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                                                <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                                                <a href="#" class="quick-view" title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                                            </div>
                                                            <ul class="watch-color">
                                                                <li class="twilight"><span></span></li>
                                                                <li class="portage"><span></span></li>
                                                                <li class="pigeon"><span></span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-caption">
                                                            <h4 class="product-name"><a href="product-details.html">Simple Product 015</a>
                                                            </h4>
                                                            <div class="price-box">
                                                                <span class="new-price">$35.00</span>
                                                                <span class="old-price">$39.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-area end -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="list">
                                        <div class="shop-product-list-wrap">
                                            <div class="row product-layout-list mt-30">
                                                <div class="col-lg-3 col-md-3">
                                                    <!-- single-product-wrap start -->
                                                    <div class="single-product">
                                                        <div class="product-image">
                                                            <a href="product-details.html"><img src="../../../resource/images/product/product-01.png" alt="Produce Images"></a>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-wrap end -->
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="product-content-list text-left">

                                                        <h4><a href="product-details.html" class="product-name">Auctor
                                                                gravida enim</a></h4>
                                                        <div class="price-box">
                                                            <span class="new-price">$99.00</span>
                                                            <span class="old-price">$110.00</span>
                                                        </div>

                                                        <div class="product-rating">
                                                            <ul class="d-flex">
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li class="bad-reting"><a href="#"><i class="icon-star"></i></a></li>
                                                            </ul>
                                                        </div>

                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Architecto suscipit aliquam, dignissimos nesciunt, quos
                                                            voluptas tenetur necessitatibus voluptate vitae quo
                                                            quibusdam nihil.</p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3">
                                                    <div class="block2">
                                                        <ul class="stock-cont">
                                                            <li class="product-sku">Sku: <span>P006</span></li>
                                                            <li class="product-stock-status">Availability: <span class="in-stock">In Stock</span></li>
                                                        </ul>
                                                        <div class="product-button">

                                                            <ul class="actions">
                                                                <li class="add-to-wishlist">
                                                                    <a href="wishlist.html" class="add_to_wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                                                                </li>
                                                            </ul>
                                                            <div class="add-to-cart">
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-product-list-wrap">
                                            <div class="row product-layout-list mt-30">
                                                <div class="col-lg-3 col-md-3">
                                                    <!-- single-product-wrap start -->
                                                    <div class="single-product">
                                                        <div class="product-image">
                                                            <a href="product-details.html"><img src="../../../resource/images/product/product-02.png" alt="Produce Images"></a>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-wrap end -->
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="product-content-list text-left">

                                                        <h4><a href="product-details.html" class="product-name">Auctor
                                                                gravida enim</a></h4>
                                                        <div class="price-box">
                                                            <span class="new-price">$99.00</span>
                                                            <span class="old-price">$110.00</span>
                                                        </div>

                                                        <div class="product-rating">
                                                            <ul class="d-flex">
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li class="bad-reting"><a href="#"><i class="icon-star"></i></a></li>
                                                            </ul>
                                                        </div>

                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Architecto suscipit aliquam, dignissimos nesciunt, quos
                                                            voluptas tenetur necessitatibus voluptate vitae quo
                                                            quibusdam nihil.</p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3">
                                                    <div class="block2">
                                                        <ul class="stock-cont">
                                                            <li class="product-sku">Sku: <span>P006</span></li>
                                                            <li class="product-stock-status">Availability: <span class="in-stock">In Stock</span></li>
                                                        </ul>
                                                        <div class="product-button">

                                                            <ul class="actions">
                                                                <li class="add-to-wishlist">
                                                                    <a href="wishlist.html" class="add_to_wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                                                                </li>
                                                            </ul>
                                                            <div class="add-to-cart">
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row product-layout-list mt-30">
                                                <div class="col-lg-3 col-md-3">
                                                    <!-- single-product-wrap start -->
                                                    <div class="single-product">
                                                        <div class="product-image">
                                                            <a href="product-details.html"><img src="../../../resource/images/product/product-03.png" alt="Produce Images"></a>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-wrap end -->
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="product-content-list text-left">

                                                        <h4><a href="product-details.html" class="product-name">Auctor
                                                                gravida enim</a></h4>
                                                        <div class="price-box">
                                                            <span class="new-price">$99.00</span>
                                                            <span class="old-price">$110.00</span>
                                                        </div>

                                                        <div class="product-rating">
                                                            <ul class="d-flex">
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li class="bad-reting"><a href="#"><i class="icon-star"></i></a></li>
                                                            </ul>
                                                        </div>

                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Architecto suscipit aliquam, dignissimos nesciunt, quos
                                                            voluptas tenetur necessitatibus voluptate vitae quo
                                                            quibusdam nihil.</p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3">
                                                    <div class="block2">
                                                        <ul class="stock-cont">
                                                            <li class="product-sku">Sku: <span>P006</span></li>
                                                            <li class="product-stock-status">Availability: <span class="in-stock">In Stock</span></li>
                                                        </ul>
                                                        <div class="product-button">

                                                            <ul class="actions">
                                                                <li class="add-to-wishlist">
                                                                    <a href="wishlist.html" class="add_to_wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                                                                </li>
                                                            </ul>
                                                            <div class="add-to-cart">
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row product-layout-list mt-30">
                                                <div class="col-lg-3 col-md-3">
                                                    <!-- single-product-wrap start -->
                                                    <div class="single-product">
                                                        <div class="product-image">
                                                            <a href="product-details.html"><img src="../../../resource/images/product/product-04.png" alt="Produce Images"></a>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-wrap end -->
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="product-content-list text-left">

                                                        <h4><a href="product-details.html" class="product-name">Auctor
                                                                gravida enim</a></h4>
                                                        <div class="price-box">
                                                            <span class="new-price">$99.00</span>
                                                            <span class="old-price">$110.00</span>
                                                        </div>

                                                        <div class="product-rating">
                                                            <ul class="d-flex">
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                                <li class="bad-reting"><a href="#"><i class="icon-star"></i></a></li>
                                                            </ul>
                                                        </div>

                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Architecto suscipit aliquam, dignissimos nesciunt, quos
                                                            voluptas tenetur necessitatibus voluptate vitae quo
                                                            quibusdam nihil.</p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3">
                                                    <div class="block2">
                                                        <ul class="stock-cont">
                                                            <li class="product-sku">Sku: <span>P006</span></li>
                                                            <li class="product-stock-status">Availability: <span class="in-stock">In Stock</span></li>
                                                        </ul>
                                                        <div class="product-button">

                                                            <ul class="actions">
                                                                <li class="add-to-wishlist">
                                                                    <a href="wishlist.html" class="add_to_wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                                                                </li>
                                                            </ul>
                                                            <div class="add-to-cart">
                                                                <div class="product-button-action">
                                                                    <a href="#" class="add-to-cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- shop-products-wrap end -->

                            <!-- paginatoin-area start -->
                            <div class="paginatoin-area">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <ul class="pagination-box">
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li>
                                                <a class="Next" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- paginatoin-area end -->
                        </div>
                        <!-- shop-product-wrapper end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- main-content-wrap end -->

        <!-- footer Start -->
        <footer>
            <div class="footer-top section-pb section-pt-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">

                            <div class="widget-footer mt-40">
                                <h6 class="title-widget">Contact Info</h6>

                                <div class="footer-addres">
                                    <div class="widget-content mb--20">
                                        <p>Address: 123 Main Street, Anytown, <br> CA 12345 - USA.</p>
                                        <p>Phone: <a href="tel:">(012) 800 000 789</a></p>
                                        <p>Fax: <a href="tel:">(012) 800 888 789</a></p>
                                        <p>Email: <a href="tel:">demo@hashthemes.com</a></p>
                                    </div>
                                </div>

                                <ul class="social-icons">
                                    <li>
                                        <a class="facebook social-icon" href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="twitter social-icon" href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="instagram social-icon" href="#" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a class="linkedin social-icon" href="#" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a class="rss social-icon" href="#" title="Rss" target="_blank"><i class="fa fa-rss"></i></a>
                                    </li>
                                </ul>

                            </div>

                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="widget-footer mt-40">
                                <h6 class="title-widget">Information</h6>
                                <ul class="footer-list">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="contact.html">Quick Contact</a></li>
                                    <li><a href="blog.html">Blog Pages</a></li>
                                    <li><a href="#">Concord History</a></li>
                                    <li><a href="#">Client Feed</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="widget-footer mt-40">
                                <h6 class="title-widget">Extras</h6>
                                <ul class="footer-list">

                                    <li><a href="#">Concord History</a></li>
                                    <li><a href="#">Client Feed</a></li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="contact.html">Quick Contact</a></li>
                                    <li><a href="blog.html">Blog Pages</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="widget-footer mt-40">
                                <h6 class="title-widget">Get the app</h6>
                                <p>GreenLife App is now available on Google Play & App Store. Get it now.</p>
                                <ul class="footer-list">
                                    <li><img src="../../../resource/images/brand/img-googleplay.jpg" alt=""></li>
                                    <li><img src="../../../resource/images/brand/img-appstore.jpg" alt=""></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="copy-left-text">
                                <p>Copyright &copy; <a href="#">Ruiz</a> 2019. All Right Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="copy-right-image">
                                <img src="../../../resource/images/icon/img-payment.png" alt="">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer End -->

    </div>

    <!-- JS
============================================ -->

    <!-- Modernizer JS -->
    <script src="../../../resource/js/vendor/modernizr-3.6.0.min.js"></script>

    <!-- jquery -->
    <script src="../../../resource/js/vendor/jquery-3.6.1.min.js"></script>
    <script src="../../../resource/js/vendor/jquery-migrate-3.4.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="../../../resource/js/vendor/bootstrap.min.js"></script>

    <!-- Plugins JS -->
    <script src="../../../resource/js/plugins/slick.min.js"></script>
    <script src="../../../resource/js/plugins/jquery.nice-select.min.js"></script>
    <script src="../../../resource/js/plugins/countdown.min.js"></script>
    <script src="../../../resource/js/plugins/image-zoom.min.js"></script>
    <script src="../../../resource/js/plugins/fancybox.js"></script>
    <script src="../../../resource/js/plugins/scrollup.min.js"></script>
    <script src="../../../resource/js/plugins/jqueryui.min.js"></script>
    <script src="../../../resource/js/plugins/ajax-contact.js"></script>

    <!-- Vendor & Plugins JS (Please remove the comment from below vendor.min.js & plugins.min.js for better website load performance and remove js files from avobe) -->
    <!--
<script src="../../../resource/js/vendor/vendor.min.js"></script>
<script src="../../../resource/js/plugins/plugins.min.js"></script>
-->

    <!-- Main JS -->
    <script src="../../../resource/js/main.js"></script>

</body>


<!-- Mirrored from htmldemo.net/ruiz/ruiz/shop-fullwidth.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Mar 2023 08:01:32 GMT -->

</html>