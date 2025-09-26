<!DOCTYPE html>
<html lang="fa" dir="rtl">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="laraplus">
    <meta name="keywords" content="laraplus">
    <meta name="author" content="laraplus">
    <link rel="icon" href="{{'front/images/favicon/2.png'}}" type="image/x-icon">
    <title>دمو دوم - قالب فروشگاهی </title>

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset('front/css/vendors/bootstrap.css') }}">

    <!-- wow css -->
    <link rel="stylesheet" href="{{ asset('front/css/animate.min.css') }}">

    <!-- Iconly css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/bulk-style.css') }}">

    <!-- Template css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/font/iranyekan.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/font/aviny.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/rtl.css') }}">
</head>

<body class="theme-color-1">

<!-- Loader Start -->
<div class="fullpage-loader">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
</div>
<!-- Loader End -->

<!-- Header Start -->
<header class="pb-md-4 pb-0">
    <div class="header-top bg-dark">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-xxl-3 d-xxl-block d-none">
                    <div class="top-left-header">
                        <i class="iconly-Location icli text-white"></i>
                        <span class="text-white">تهران بلوار آزادی</span>
                    </div>
                </div>

                <div class="col-xxl-6 col-lg-9 d-lg-block d-none">
                    <div class="header-offer">
                        <div class="notification-slider">
                            <div>
                                <div class="timer-notification">
                                    <h6><strong class="me-1">به خوش آمدید !</strong>بهترین تجربه خرید را برای شما آرزو
                                        میکنیم..<strong class="ms-1">کد تخفیف خرید اول : laraplus
                                        </strong>

                                    </h6>
                                </div>
                            </div>

                            <div>
                                <div class="timer-notification">
                                    <h6>تا 90 درصد تخفیف برای ابزارآلات کشاورزی !
                                        <a href="shop-left-sidebar.html" class="text-white">خرید آنلاین
                                        </a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <ul class="about-list right-nav-about">
                        <li class="right-nav-list">
                            <div class="dropdown theme-form-select">
                                <button class="btn dropdown-toggle" type="button" id="select-language"
                                        data-bs-toggle="dropdown">
                                    <img src="{{ asset('front/images/country/united-states.png') }}"
                                         class="img-fluid blur-up lazyload" alt="">
                                    <span>انگلیسی</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)" id="english">
                                            <img src="{{ asset('front/images/country/united-kingdom.png') }}"
                                                 class="img-fluid blur-up lazyload" alt="">
                                            <span>انگلیسی</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)" id="france">
                                            <img src="{{ asset('front/images/country/germany.png') }}"
                                                 class="img-fluid blur-up lazyload" alt="">
                                            <span>آلمانی</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)" id="chinese">
                                            <img src="{{ asset('front/images/country/turkish.png') }}"
                                                 class="img-fluid blur-up lazyload" alt="">
                                            <span>ترکی</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="right-nav-list">
                            <div class="dropdown theme-form-select">
                                <button class="btn dropdown-toggle" type="button" id="select-dollar"
                                        data-bs-toggle="dropdown">
                                    <span>دلار</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end sm-dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" id="aud" href="javascript:void(0)">درهم</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" id="eur" href="javascript:void(0)">یورو</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" id="cny" href="javascript:void(0)">تومان</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="top-nav top-header sticky-header">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="navbar-top">
                        <button class="navbar-toggler d-xl-none d-inline navbar-menu-button" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#primaryMenu">
                                <span class="navbar-toggler-icon">
                                    <i class="fa-solid fa-bars"></i>
                                </span>
                        </button>
                        <a href="index.html" class="web-logo nav-logo">
                            <img src="{{ asset('front/images/logo/2.png') }}" class="img-fluid blur-up lazyload" alt="">
                        </a>

                        <div class="middle-box">
                            <div class="location-box">
                                <button class="btn location-button" data-bs-toggle="modal"
                                        data-bs-target="#locationModal">
                                        <span class="location-arrow">
                                            <i data-feather="map-pin"></i>
                                        </span>
                                    <span class="locat-name">آدرس شما</span>
                                    <i class="fa-solid fa-angle-down"></i>
                                </button>
                            </div>

                            <div class="search-box">
                                <div class="input-group">
                                    <input type="search" class="form-control" placeholder="جستجو برای ...">
                                    <button class="btn search-button-2" type="button" id="button-addon2">
                                        <i data-feather="search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="rightside-box">
                            <div class="search-full">
                                <div class="input-group">
                                        <span class="input-group-text">
                                            <i data-feather="search" class="font-light"></i>
                                        </span>
                                    <input type="text" class="form-control search-type" placeholder="جستجو کنید ...">
                                    <span class="input-group-text close-search">
                                            <i data-feather="x" class="font-light"></i>
                                        </span>
                                </div>
                            </div>
                            <ul class="right-side-menu">
                                <li class="right-side">
                                    <div class="delivery-login-box">
                                        <div class="delivery-icon">
                                            <div class="search-box">
                                                <i data-feather="search"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="right-side">
                                    <a href="contact-us.html" class="delivery-login-box">
                                        <div class="delivery-icon">
                                            <i data-feather="phone-call"></i>
                                        </div>
                                        <div class="delivery-detail">
                                            <h6>پشتیبانی 24 ساعته</h6>
                                            <h5>0123-456-7891</h5>
                                        </div>
                                    </a>
                                </li>
                                <li class="right-side">
                                    <a href="wishlist.html" class="btn p-0 position-relative header-wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                                <li class="right-side">
                                    <div class="onhover-dropdown header-badge">
                                        <button type="button" class="btn p-0 position-relative header-wishlist">
                                            <i data-feather="shopping-cart"></i>
                                            <span class="position-absolute top-0 start-100 translate-middle badge">2
                                                    <span class="visually-hidden">پیام جدید</span>
                                                </span>
                                        </button>

                                        <div class="onhover-div">
                                            <ul class="cart-list">
                                                <li class="product-box-contain">
                                                    <div class="drop-cart">
                                                        <a href="product.html" class="drop-image">
                                                            <img src="{{ asset('front/images/vegetable/product/1.png') }}"
                                                                 class="blur-up lazyload" alt="">
                                                        </a>

                                                        <div class="drop-contain">
                                                            <a href="product.html">
                                                                <h5>شکلات قهوه ای فرانسوی با ظرف شیشه ای</h5>
                                                            </a>
                                                            <h6><span>1 x</span> 80.000 تومان</h6>
                                                            <button class="close-button close_button">
                                                                <i class="fa-solid fa-xmark"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="product-box-contain">
                                                    <div class="drop-cart">
                                                        <a href="product.html" class="drop-image">
                                                            <img src="{{ asset('front/images/vegetable/product/2.png') }}"
                                                                 class="blur-up lazyload" alt="">
                                                        </a>

                                                        <div class="drop-contain">
                                                            <a href="product.html">
                                                                <h5>بیسکویت کره بادام زمینی 600 گرمی
                                                                </h5>
                                                            </a>
                                                            <h6><span>1 x</span> 25.000 تومان</h6>
                                                            <button class="close-button close_button">
                                                                <i class="fa-solid fa-xmark"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>

                                            <div class="price-box">
                                                <h5>جمع کل :</h5>
                                                <h4 class="theme-color fw-bold">103.000 تومان</h4>
                                            </div>

                                            <div class="button-group">
                                                <a href="cart.html" class="btn btn-sm cart-button">سبد خرید</a>
                                                <a href="checkout.html" class="btn btn-sm cart-button theme-bg-color
                                                    text-white">پرداخت نهایی</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="right-side onhover-dropdown">
                                    <div class="delivery-login-box">
                                        <div class="delivery-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                        <div class="delivery-detail">
                                            <h6>سلام,</h6>
                                            <h5>حساب کاربری</h5>
                                        </div>
                                    </div>

                                    <div class="onhover-div onhover-div-login">
                                        <ul class="user-box-name">
                                            <li class="product-box-contain">
                                                <i></i>
                                                <a href="login.html">ورود</a>
                                            </li>

                                            <li class="product-box-contain">
                                                <a href="sign-up.html">عضویت</a>
                                            </li>

                                            <li class="product-box-contain">
                                                <a href="forgot.html">فراموشی رمز عبور</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid-lg">
        <div class="row">
            <div class="col-12">
                <div class="header-nav">
                    <div class="header-nav-left">
                        <button class="dropdown-category dropdown-category-2">
                            <i data-feather="align-left"></i>
                            <span>دسته بندی ها</span>
                        </button>

                        <div class="category-dropdown">
                            <div class="category-title">
                                <h5>دسته بندی</h5>
                                <button type="button" class="btn p-0 close-button text-content">
                                    <i class="fa-solid fa-xmark"></i>
                                </button>
                            </div>

                            @include('front.layouts.__top_categories')
                        </div>
                    </div>

                    <div class="header-nav-middle">
                        <div class="main-nav navbar navbar-expand-xl navbar-light navbar-sticky">
                            <div class="offcanvas offcanvas-collapse order-xl-2" id="primaryMenu">
                                <div class="offcanvas-header navbar-shadow">
                                    <h5>منو</h5>
                                    <button class="btn-close lead" type="button"
                                            data-bs-dismiss="offcanvas"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                               data-bs-toggle="dropdown">خانه</a>

                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="index.html">کارت شاپ</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="index-2.html">سوییت شاپ</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="index-3.html">اورگانیک</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="index-4.html">سوپرشاپ</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="index-5.html">کلاسیک</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="index-6.html">مبلمان</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="index-7.html">جستجوگرا</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="index-8.html">دسته بندی شده</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="index-9.html">مد و لباس</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="index-10.html">کتاب</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="index-11.html">دیجیتال</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                               data-bs-toggle="dropdown">فروشگاه</a>

                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="shop-category-slider.html">محصولات
                                                        (اسلایدر دسته بندی)</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-category.html">محصولات (سایدبار
                                                        دسته بندی )</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-banner.html">محصولات با بنر</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-right-sidebar.html">محصولات
                                                        (سایدبار راست)</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-list.html">لیست محصولات</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-left-sidebar.html">محصولات
                                                        (سایدبار چپ)</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="shop-top-filter.html">محصولات (فیلتر
                                                        بالای محصولات)</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                               data-bs-toggle="dropdown">محصولات</a>

                                            <div class="dropdown-menu dropdown-menu-3 dropdown-menu-2">
                                                <div class="row">
                                                    <div class="col-xl-3">
                                                        <div class="dropdown-column m-0">
                                                            <h5 class="dropdown-header">
                                                                برگه محصولات </h5>
                                                            <a class="dropdown-item"
                                                               href="product.html">محصولات (دارای تامبنیل)</a>
                                                            <a class="dropdown-item"
                                                               href="product-4-image.html">محصولات (4 تصویر)</a>
                                                            <a class="dropdown-item"
                                                               href="product-slider.html">اسلایدر محصولات</a>
                                                            <a class="dropdown-item"
                                                               href="product-sticky.html">محصولات چسبان</a>
                                                            <a class="dropdown-item"
                                                               href="product-accordion.html">محصولات بازشونده</a>
                                                            <a class="dropdown-item"
                                                               href="product-circle.html">تب محصولات</a>
                                                            <a class="dropdown-item"
                                                               href="product-digital.html">محصولات دیجیتال</a>

                                                            <h5 class="custom-mt dropdown-header">ویژگی محصولات
                                                            </h5>
                                                            <a class="dropdown-item"
                                                               href="product-circle.html">تخفیف (فروش ویژه)</a>
                                                            <a class="dropdown-item"
                                                               href="product.html">پروفرش ترین ها <label
                                                                        class="menu-label">جدید</label>
                                                            </a>
                                                            <a class="dropdown-item"
                                                               href="product-sold-out.html">تمام شده</a>
                                                            <a class="dropdown-item" href="product-circle.html">
                                                                فروش ویژه</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3">
                                                        <div class="dropdown-column m-0">
                                                            <h5 class="dropdown-header">
                                                                استایل محصولات </h5>
                                                            <a class="dropdown-item"
                                                               href="product-rectangle.html">مستطیل متغیر</a>
                                                            <a class="dropdown-item"
                                                               href="product-circle.html">دایره متغیر <label
                                                                        class="menu-label">جدید</label></a>
                                                            <a class="dropdown-item"
                                                               href="product-color-image.html">نمونه تصویر متفاوت</a>
                                                            <a class="dropdown-item"
                                                               href="product-color.html">رنگ متفاوت</a>
                                                            <a class="dropdown-item"
                                                               href="product-radio.html">دکمه رادیویی متفاوت</a>
                                                            <a class="dropdown-item"
                                                               href="product-dropdown.html">کشویی متغیر</a>
                                                            <h5 class="custom-mt dropdown-header">مشخصات محصول
                                                            </h5>
                                                            <a class="dropdown-item"
                                                               href="product.html">تسویه حساب چسبنده</a>
                                                            <a class="dropdown-item"
                                                               href="product-dynamic.html">پرداخت پویا</a>
                                                            <a class="dropdown-item"
                                                               href="product-sticky.html">پرداخت ایمن</a>
                                                            <a class="dropdown-item"
                                                               href="product-bundle.html">نمای محصول فعال</a>
                                                            <a class="dropdown-item" href="product-bundle.html">
                                                                آخرین سفارشات فعال
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3">
                                                        <div class="dropdown-column m-0">
                                                            <h5 class="dropdown-header">
                                                                مشخصات محصول </h5>
                                                            <a class="dropdown-item"
                                                               href="product-image.html">محصول ساده</a>
                                                            <a class="dropdown-item" href="product-rectangle.html">
                                                                محصول طبقه بندی شده <label
                                                                        class="menu-label">جدید</label>
                                                            </a>
                                                            <a class="dropdown-item"
                                                               href="product-size-chart.html">جدول اندازه ها <label
                                                                        class="menu-label">جدید</label></a>
                                                            <a class="dropdown-item"
                                                               href="product-size-chart.html">تحویل و برگشت</a>
                                                            <a class="dropdown-item"
                                                               href="product-size-chart.html">بررسی محصول</a>
                                                            <a class="dropdown-item" href="product-expert.html">از یک
                                                                متخصص بپرسید</a>
                                                            <h5 class="custom-mt dropdown-header">مشخصات محصول
                                                            </h5>
                                                            <a class="dropdown-item"
                                                               href="product-bottom-thumbnail.html">برچسب های محصول</a>
                                                            <a class="dropdown-item" href="product-image.html">اطلاعات
                                                                فروشگاه</a>
                                                            <a class="dropdown-item"
                                                               href="product-image.html">شبکه اجتماعی <label
                                                                        class="menu-label warning-label">جدید</label>
                                                            </a>
                                                            <a class="dropdown-item"
                                                               href="product.html">محصولات مرتبط
                                                                <label class="menu-label warning-label">جدید</label>
                                                            </a>
                                                            <a class="dropdown-item"
                                                               href="product-right-thumbnail.html">لیست علاقه مندی و
                                                                مقایسه</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 d-xl-block d-none">
                                                        <div class="dropdown-column m-0">
                                                            <div class="menu-img-banner">
                                                                <a class="text-title" href="product-circle.html">
                                                                    <img src="{{ asset('front/images/mega-menu.png') }}"
                                                                         alt="banner">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="nav-item dropdown dropdown-mega">
                                            <a class="nav-link dropdown-toggle ps-xl-2 ps-0"
                                               href="javascript:void(0)" data-bs-toggle="dropdown">مگامنو</a>

                                            <div class="dropdown-menu dropdown-menu-2">
                                                <div class="row">
                                                    <div class="dropdown-column col-xl-3">
                                                        <h5 class="dropdown-header">سبزیجات روزانه</h5>
                                                        <a class="dropdown-item" href="shop-left-sidebar.html">لوبیا</a>

                                                        <a class="dropdown-item"
                                                           href="shop-left-sidebar.html">بروکلی</a>

                                                        <a href="shop-left-sidebar.html"
                                                           class="dropdown-item">فلفل</a>

                                                        <a class="dropdown-item"
                                                           href="shop-left-sidebar.html">سبزیجات</a>

                                                        <a class="dropdown-item"
                                                           href="shop-left-sidebar.html">کدو و خیار</a>

                                                        <a class="dropdown-item" href="shop-left-sidebar.html">کاهئ و
                                                            برگ کلم</a>

                                                        <a href="demo-personal-portfolio.html"
                                                           class="dropdown-item">ریحان</a>
                                                    </div>

                                                    <div class="dropdown-column col-xl-3">
                                                        <h5 class="dropdown-header">پرفروش ترین</h5>
                                                        <a class="dropdown-item" href="shop-left-sidebar.html">لوبیا و
                                                            برنجال</a>

                                                        <a class="dropdown-item"
                                                           href="shop-left-sidebar.html">کلم بروکلی</a>

                                                        <a class="dropdown-item"
                                                           href="shop-left-sidebar.html"> فلفل قرمز، سیر </a>

                                                        <a class="dropdown-item"
                                                           href="shop-left-sidebar.html">سبزیجات و سالاد</a>

                                                        <a class="dropdown-item"
                                                           href="shop-left-sidebar.html">کدو، خیار</a>

                                                        <a class="dropdown-item"
                                                           href="shop-left-sidebar.html">ریحان</a>

                                                        <a href="shop-left-sidebar.html" class="dropdown-item">کاهو و
                                                            برگ</a>
                                                    </div>

                                                    <div class="dropdown-column col-xl-3">
                                                        <h5 class="dropdown-header">میوه ها</h5>
                                                        <a class="dropdown-item"
                                                           href="shop-left-sidebar.html">موز شلیل و هلو</a>

                                                        <a class="dropdown-item"
                                                           href="shop-left-sidebar.html">هندوانه و خربزه</a>

                                                        <a class="dropdown-item"
                                                           href="shop-left-sidebar.html">سیب و انار</a>

                                                        <a class="dropdown-item"
                                                           href="shop-left-sidebar.html">میوه های استوایی</a>

                                                        <a class="dropdown-item"
                                                           href="shop-left-sidebar.html">چیلی</a>
                                                    </div>
                                                </div>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                               data-bs-toggle="dropdown">وبلاگ</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="blog-detail.html">جزئیات وبلاگ</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="blog-grid.html">آرشیو بلاگ (شبکه
                                                        ای)</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="blog-list.html">آرشیو وبلاگ
                                                        (لیست)</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item dropdown new-nav-item">
                                            <label class="new-dropdown">جدید</label>
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                               data-bs-toggle="dropdown">برگه ها</a>
                                            <ul class="dropdown-menu">
                                                <li class="sub-dropdown-hover">
                                                    <a class="dropdown-item" href="javascript:void(0)">قالب ایمیل<span
                                                                class="new-text"><i
                                                                    class="fa-solid fa-bolt-lightning"></i></span></a>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a
                                                                    href="">یادآوری خرید</a>
                                                        </li>
                                                        <li>
                                                            <a href="">ایمیل تخفیف</a>
                                                        </li>
                                                        <li>
                                                            <a href="">خرید موفق</a>
                                                        </li>
                                                        <li>
                                                            <a href="">بازیابی رمز عبور</a>
                                                        </li>
                                                        <li>
                                                            <a href="">خوش آمد گویی</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="sub-dropdown-hover">
                                                    <a class="dropdown-item" href="javascript:void(0)">قالب <span
                                                                class="new-text"><i
                                                                    class="fa-solid fa-bolt-lightning"></i></span></a>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a href="#">قالب فاکتور 1</a>
                                                        </li>

                                                        <li>
                                                            <a href="#">قالب فاکتور 2</a>
                                                        </li>

                                                        <li>
                                                            <a href="#">قالب فاکتور 3</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="404.html">برگه 404</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="about-us.html">درباره ما</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="cart.html">سبد خرید</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="contact-us.html">تماس با ما</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="checkout.html">پرداخت نهایی</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="coming-soon.html">بزودی</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="compare.html">مقایسه</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="faq.html">سوالات متداول</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="order-success.html">خرید موفق</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="order-tracking.html">پیگیری
                                                        سفارشات</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="otp.html">تایید حساب کاربری</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="search.html">جستجو</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="user-dashboard.html">پروفایل
                                                        کاربری</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="wishlist.html">لیست علاقه مندی ها</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                                               data-bs-toggle="dropdown">فروشندگان</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="seller-become.html">فروشنده شوید</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="seller-dashboard.html">داشبورد
                                                        فروشندگان</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="seller-detail.html">اطلاعات فروشندگان
                                                        1</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="seller-detail-2.html">اطلاعات
                                                        فروشندگان 2</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="seller-grid.html">فروشنده (شبکه ای
                                                        1)</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="seller-grid-2.html">فروشنده (شبکه ای
                                                        2)</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="header-nav-right">
                        <button class="btn deal-button" data-bs-toggle="modal" data-bs-target="#deal-box">
                            <i data-feather="zap"></i>
                            <span>پرفروش ترین ها</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->

@yield('content')

<!-- Footer Section Start -->
<footer class="section-t-space">
    <div class="container-fluid-lg">
        <div class="service-section">
            <div class="row g-3">
                <div class="col-12">
                    <div class="service-contain">
                        <div class="service-box">
                            <div class="service-image">
                                <img src="{{ asset('front/svg/product.svg') }}" class="blur-up lazyload" alt="">
                            </div>

                            <div class="service-detail">
                                <h5>محصولات تازه و اورگانیک</h5>
                            </div>
                        </div>

                        <div class="service-box">
                            <div class="service-image">
                                <img src="{{ asset('front/svg/delivery.svg') }}" class="blur-up lazyload" alt="">
                            </div>

                            <div class="service-detail">
                                <h5>ارسال رایگان برای خرید بالای 500 تومان</h5>
                            </div>
                        </div>

                        <div class="service-box">
                            <div class="service-image">
                                <img src="{{ asset('front/svg/discount.svg') }}" class="blur-up lazyload" alt="">
                            </div>

                            <div class="service-detail">
                                <h5>تخفیف های ویژه روزانه</h5>
                            </div>
                        </div>

                        <div class="service-box">
                            <div class="service-image">
                                <img src="{{ asset('front/svg/market.svg') }}" class="blur-up lazyload" alt="">
                            </div>

                            <div class="service-detail">
                                <h5>بهترین قیمت در سراسر وب</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-footer section-b-space section-t-space">
            <div class="row g-md-4 g-3">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="footer-logo">
                        <div class="theme-logo">
                            <a href="index.html">
                                <img src="{{ asset('front/images/logo/1.png') }}" class="blur-up lazyload" alt="">
                            </a>
                        </div>

                        <div class="footer-logo-contain">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است.</p>

                            <ul class="address">
                                <li>
                                    <i data-feather="home"></i>
                                    <a href="javascript:void(0)">تهران - برج میلاد</a>
                                </li>
                                <li>
                                    <i data-feather="mail"></i>
                                    <a href="javascript:void(0)">support@test.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="footer-title">
                        <h4>دسته بندی</h4>
                    </div>

                    <div class="footer-contain">
                        <ul>
                            <li>
                                <a href="shop-left-sidebar.html" class="text-content">میوه وسبزیجات</a>
                            </li>
                            <li>
                                <a href="shop-left-sidebar.html" class="text-content">گوشت</a>
                            </li>
                            <li>
                                <a href="shop-left-sidebar.html" class="text-content">غذای دریایی</a>
                            </li>
                            <li>
                                <a href="shop-left-sidebar.html" class="text-content">غذای منجمد شده</a>
                            </li>
                            <li>
                                <a href="shop-left-sidebar.html" class="text-content">بیسکویت</a>
                            </li>
                            <li>
                                <a href="shop-left-sidebar.html" class="text-content">انرژی زا</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl col-lg-2 col-sm-3">
                    <div class="footer-title">
                        <h4>دسترسی سریع</h4>
                    </div>

                    <div class="footer-contain">
                        <ul>
                            <li>
                                <a href="index.html" class="text-content">خانه</a>
                            </li>
                            <li>
                                <a href="shop-left-sidebar.html" class="text-content">فروشگاه</a>
                            </li>
                            <li>
                                <a href="about-us.html" class="text-content">درباره ما</a>
                            </li>
                            <li>
                                <a href="blog-list.html" class="text-content">وبلاگ</a>
                            </li>
                            <li>
                                <a href="contact-us.html" class="text-content">تماس با ما</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-2 col-sm-3">
                    <div class="footer-title">
                        <h4>لینک های مهم</h4>
                    </div>

                    <div class="footer-contain">
                        <ul>
                            <li>
                                <a href="order-success.html" class="text-content">خرید راحت</a>
                            </li>
                            <li>
                                <a href="user-dashboard.html" class="text-content">حساب کاربری</a>
                            </li>
                            <li>
                                <a href="order-tracking.html" class="text-content">پیگیری سفارش</a>
                            </li>
                            <li>
                                <a href="wishlist.html" class="text-content">لیست علاقه‌مندی</a>
                            </li>
                            <li>
                                <a href="search.html" class="text-content">جستجو</a>
                            </li>
                            <li>
                                <a href="faq.html" class="text-content">سوالات متداول</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="footer-title">
                        <h4>تماس با ما</h4>
                    </div>

                    <div class="footer-contact">
                        <ul>
                            <li>
                                <div class="footer-number">
                                    <i data-feather="phone"></i>
                                    <div class="contact-number">
                                        <h6 class="text-content">پشتیبانی 24 ساعته :</h6>
                                        <h5>0936.000.0000</h5>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="footer-number">
                                    <i data-feather="mail"></i>
                                    <div class="contact-number">
                                        <h6 class="text-content">آدرس ایمیل :</h6>
                                        <h5>[ایمیل شما]</h5>
                                    </div>
                                </div>
                            </li>

                            <li class="social-app mb-0">
                                <h5 class="mb-2 text-content">دانلود اپلیکیشن :</h5>
                                <ul>
                                    <li class="mb-0">
                                        <a href="https://play.google.com/store/apps" target="_blank">
                                            <img src="{{ asset('front/images/playstore.svg') }}"
                                                 class="blur-up lazyload"
                                                 alt="">
                                        </a>
                                    </li>
                                    <li class="mb-0">
                                        <a href="https://www.apple.com/in/app-store/" target="_blank">
                                            <img src="{{ asset('front/images/appstore.svg') }}" class="blur-up lazyload"
                                                 alt="">
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="sub-footer section-small-space">
            <div class="reserve">
                <h6 class="text-content">فارسی سازی و راست چین شده توسط </h6>
            </div>

            <div class="payment">
                <img src="{{ asset('front/images/payment/1.png') }}" class="blur-up lazyload" alt="">
            </div>

            <div class="social-link">
                <h6 class="text-content">شبکه های اجتماعی :</h6>
                <ul>
                    <li>
                        <a href="https://www.facebook.com/" target="_blank">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/" target="_blank">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://in.pinterest.com/" target="_blank">
                            <i class="fa-brands fa-pinterest-p"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Location Modal Start -->
<div class="modal location-modal fade theme-modal" id="locationModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">آدرس خود را انتخاب کنید</h5>
                <p class="mt-1 text-content">آدرس خود را وارد کنید تا ما پیشنهاد را برای منطقه شما مشخص می کنیم.</p>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="location-list">
                    <div class="search-input">
                        <input type="search" class="form-control" placeholder="محل خود را جستجو کنید">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>

                    <div class="disabled-box">
                        <h6>انتخاب مکان شما</h6>
                    </div>

                    <ul class="location-select custom-height">
                        <li>
                            <a href="javascript:void(0)">
                                <h6>آلاباما</h6>
                                <span>حداقل: 100 تومان</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>آریزوانا</h6>
                                <span>حداقل: 150 تومان</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>کالیفرنیا</h6>
                                <span>حداقل: 170 تومان</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>ایران</h6>
                                <span>حداقل: 150 تومان</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>فلوریدا</h6>
                                <span>حداقل: 160 تومان</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>جورجیا</h6>
                                <span>حداقل: 110 تومان</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>کانزاس</h6>
                                <span>حداقل: 130 تومان</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>مینه سوتا</h6>
                                <span>حداقل: 140 تومان</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>نیویورک</h6>
                                <span>حداقل: 120 تومان</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                <h6>واشنگتن</h6>
                                <span>حداقل: 160 تومان</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Location Modal End -->

<!-- Quick View Modal Box Start -->
<div class="modal fade theme-modal view-modal" id="view" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header p-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row g-sm-4 g-2">
                    <div class="col-lg-6">
                        <div class="slider-image">
                            <img src="{{ asset('front/images/product/category/1.jpg') }}"
                                 class="img-fluid blur-up lazyload"
                                 alt="">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="right-sidebar-modal">
                            <h4 class="title-name">کیک خامه ای سفید رنگ با روکش قرم 500 گرمی</h4>
                            <h4 class="price">36.000 تومان</h4>
                            <div class="product-rating">
                                <ul class="rating">
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star" class="fill"></i>
                                    </li>
                                    <li>
                                        <i data-feather="star"></i>
                                    </li>
                                </ul>
                                <span class="ms-2">8 بازخورد</span>
                                <span class="ms-2 text-danger">6 عدد در 16 ساعت گذشته فروخته شد</span>
                            </div>

                            <div class="product-detail">
                                <h4>جزئیات محصول :</h4>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                    برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                                    می باشد.</p>
                            </div>

                            <ul class="brand-list">
                                <li>
                                    <div class="brand-box">
                                        <h5>نام برند :</h5>
                                        <h6>جنگل سیاه</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="brand-box">
                                        <h5>کد محصول :</h5>
                                        <h6>W0690034</h6>
                                    </div>
                                </li>

                                <li>
                                    <div class="brand-box">
                                        <h5>نوع محصول :</h5>
                                        <h6>کیک خامه ای سفید</h6>
                                    </div>
                                </li>
                            </ul>

                            <div class="select-size">
                                <h4>اندازه کیک :</h4>
                                <select class="form-select select-form-size">
                                    <option selected>انتخاب وزن</option>
                                    <option value="1.2">1/2 کیلوگرم</option>
                                    <option value="0">1 کیلوگرم</option>
                                    <option value="1.5">1/5 کیلوگرم</option>
                                    <option value="red">با رز های قرمز</option>
                                    <option value="pink">با رزهای صورتی</option>
                                </select>
                            </div>

                            <div class="modal-button">
                                <button onclick="location.href = 'cart.html';"
                                        class="btn btn-md add-cart-button icon">افزودن به سبد خرید
                                </button>
                                <button onclick="location.href = 'product-left.html';"
                                        class="btn theme-bg-color view-button icon text-white fw-bold btn-md">
                                    نمایش جزئیات بیشتر
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quick View Modal Box End -->

<!-- Deal Box Modal Start -->
<div class="modal fade theme-modal deal-modal" id="deal-box" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h5 class="modal-title w-100" id="deal_today">پرفروش ترین های امروز</h5>
                    <p class="mt-1 text-content">محصولات پیشنهادی برای شما</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="deal-offer-box">
                    <ul class="deal-offer-list">
                        <li class="list-1">
                            <div class="deal-offer-contain">
                                <a href="shop-left-sidebar.html" class="deal-image">
                                    <img src="{{ asset('front/images/vegetable/product/10.png') }}"
                                         class="blur-up lazyload"
                                         alt="">
                                </a>

                                <a href="shop-left-sidebar.html" class="deal-contain">
                                    <h5>قهوه فوری مخلوط 50 گرم</h5>
                                    <h6>52.720 تومان
                                        <del>55.720</del>
                                        <span>500 گرم</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-2">
                            <div class="deal-offer-contain">
                                <a href="shop-left-sidebar.html" class="deal-image">
                                    <img src="{{ asset('front/images/vegetable/product/11.png') }}"
                                         class="blur-up lazyload"
                                         alt="">
                                </a>

                                <a href="shop-left-sidebar.html" class="deal-contain">
                                    <h5>قهوه فوری مخلوط 50 گرم</h5>
                                    <h6>52.720 تومان
                                        <del>55.720</del>
                                        <span>500 گرم</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-3">
                            <div class="deal-offer-contain">
                                <a href="shop-left-sidebar.html" class="deal-image">
                                    <img src="{{ asset('front/images/vegetable/product/12.png') }}"
                                         class="blur-up lazyload"
                                         alt="">
                                </a>

                                <a href="shop-left-sidebar.html" class="deal-contain">
                                    <h5>قهوه فوری مخلوط 50 گرم</h5>
                                    <h6>52.720 تومان
                                        <del>55.720</del>
                                        <span>500 گرم</span></h6>
                                </a>
                            </div>
                        </li>

                        <li class="list-1">
                            <div class="deal-offer-contain">
                                <a href="shop-left-sidebar.html" class="deal-image">
                                    <img src="{{ asset('front/images/vegetable/product/13.png') }}"
                                         class="blur-up lazyload"
                                         alt="">
                                </a>

                                <a href="shop-left-sidebar.html" class="deal-contain">
                                    <h5>قهوه فوری مخلوط 50 گرم</h5>
                                    <h6>52.720 تومان
                                        <del>55.720</del>
                                        <span>500 گرم</span></h6>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Deal Box Modal End -->

<!-- Add to cart Modal Start -->
<div class="add-cart-box">
    <div class="add-image">
        <img src="{{ asset('front/images/cake/pro/1.jpg') }}" class="img-fluid blur-up lazyload" alt="">
    </div>

    <div class="add-contain">
        <h6>افزودن به سبد خرید</h6>
    </div>
</div>
<!-- Add to cart Modal End -->

<!-- Tap to top and theme setting button start -->
<div class="theme-option">
    <div class="setting-box">
        <button class="btn setting-button">
            <i class="fa-solid fa-gear"></i>
        </button>

        <div class="theme-setting-2">
            <div class="theme-box">
                <ul>
                    <li>
                        <div class="setting-name">
                            <h4>Color</h4>
                        </div>
                        <div class="theme-setting-button color-picker">
                            <form class="form-control">
                                <label for="colorPick" class="form-label mb-0">Theme Color</label>
                                <input type="color" class="form-control form-control-color" id="colorPick"
                                       value="#d99f46" title="Choose your color">
                            </form>
                        </div>
                    </li>

                    <li>
                        <div class="setting-name">
                            <h4>Dark</h4>
                        </div>
                        <div class="theme-setting-button">
                            <button class="btn btn-2 outline" id="darkButton">Dark</button>
                            <button class="btn btn-2 unline" id="lightButton">Light</button>
                        </div>
                    </li>

                    <li>
                        <div class="setting-name">
                            <h4>RTL</h4>
                        </div>
                        <div class="theme-setting-button rtl">
                            <button class="btn btn-2 rtl-unline">LTR</button>
                            <button class="btn btn-2 rtl-outline">RTL</button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="back-to-top">
        <a id="back-to-top" href="#">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
</div>
<!-- Tap to top and theme setting button end -->

<!-- Bg overlay Start -->
<div class="bg-overlay"></div>
<!-- Bg overlay End -->

<!-- latest jquery-->
<script src="{{ asset('front/js/jquery-3.6.0.min.js') }}"></script>

<!-- jquery ui-->
<script src="{{ asset('front/js/jquery-ui.min.js') }}"></script>

<!-- sidebar open js -->
<script src="{{ asset('front/js/filter-sidebar.js') }}"></script>

<!-- Bootstrap js-->
<script src="{{ asset('front/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('front/js/bootstrap/popper.min.js') }}"></script>

<!-- feather icon js-->
<script src="{{ asset('front/js/feather/feather.min.js') }}"></script>
<script src="{{ asset('front/js/feather/feather-icon.js') }}"></script>

<!-- Lazyload Js -->
<script src="{{ asset('front/js/lazysizes.min.js') }}"></script>

<!-- Slick js-->
<script src="{{ asset('front/js/slick/slick.js') }}"></script>
<script src="{{ asset('front/js/slick/custom_slick.js') }}"></script>
<script src="{{ asset('front/js/bootstrap/bootstrap-notify.min.js') }}"></script>

<!-- Auto Height Js -->
<script src="{{ asset('front/js/auto-height.js') }}"></script>

<!-- Timer Js -->
<script src="{{ asset('front/js/timer1.js') }}"></script>

<!-- Fly Cart Js -->
<script src="{{ asset('front/js/fly-cart.js') }}"></script>

<!-- Quantity js -->
<script src="{{ asset('front/js/quantity-2.js') }}"></script>

<!-- WOW js -->
<script src="{{ asset('front/js/wow.min.js') }}"></script>
<script src="{{ asset('front/js/custom-wow.js') }}"></script>

<!-- script js -->
<script src="{{ asset('front/js/script.js') }}"></script>

<!-- theme setting js -->
<script src="{{ asset('front/js/theme-setting.js') }}"></script>
</body>


</html>
