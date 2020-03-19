<!DOCTYPE html>
<html lang="fa">
<head>
   @include('layouts.organiq.partials.head')
</head>
<body>
<!-- LOADER -->
<div id="preloader">
    <div class="line-scale">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</div>
<!-- END LOADER -->
<!-- START HEADER -->
<header class="header_wrap dark_skin main_menu_uppercase">
    <div class="top-header bg_gray">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <ul class="contact_detail border_list list_none text-center text-md-left">
                        <li><a href="#"><i class="ti-mobile"></i> <span>0211234567</span></a></li>
                        <li><a href="#"><i class="ti-email"></i> <span>info@gmail.com</span></a></li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <ul class="header_list border_list list_none header_dropdown text-center text-md-right">
                        <li>
                            <div class="custome_dropdown">
                                <select name="countries" class="custome_select">
                                    <option value="en" data-title="English">انگلیسی</option>
                                    <option value="fn" data-title="France">فرانسه</option>
                                    <option value="us" data-title="United States">عربی</option>
                                </select>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown">پروفایل کاربری</a>
                            <div class="dropdown-menu shadow dropdown-menu-right">
                                <ul>
                                    <li><a class="dropdown-item" href="my-account.html">پروفایل کاربری</a></li>
                                    <li><a class="dropdown-item" href="wishlist.html">لیست علاقه مندی</a></li>
                                    <li><a class="dropdown-item" href="checkout.html">سبد خرید</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.html">
                <img class="logo_light" src="assets/images/logo_white.png" alt="آرم">
                <img class="logo_dark" src="assets/images/logo_dark.png" alt="آرم">
                <img class="logo_default" src="assets/images/logo_dark.png" alt="آرم">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="ناوبری را تغییر دهید"><span
                    class="ion-android-menu"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link active" href="#" data-toggle="dropdown">صفحه اصلی</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a class="dropdown-item nav-link nav_item active" href="index.html">صفحه اصلی 1</a>
                                </li>
                                <li><a class="dropdown-item nav-link nav_item" href="index-2.html">صفحه اصلی 2</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="index-3.html">صفحه اصلی 3</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="nav-link" href="about.html">درباره ما</a>
                    </li>
                    <li class="dropdown dropdown-mega-menu">
                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">فروشگاه</a>
                        <div class="dropdown-menu">
                            <ul class="mega-menu d-lg-flex">
                                <li class="mega-menu-col col-lg-3">
                                    <ul>
                                        <li class="dropdown-header">صفحه فروشگاه</li>
                                        <li><a class="dropdown-item nav-link nav_item" href="shop-list-view.html">لیست فروشگاه</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="shop-grid-view.html">لیست عمودی فروشگاه</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="shop-three-columns.html">فروشگاه سه ستون</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="shop-four-columns.html">فروشگاه دو ستون</a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu-col col-lg-3">
                                    <ul>
                                        <li class="dropdown-header">جزییات محصول</li>
                                        <li><a class="dropdown-item nav-link nav_item" href="product-detail.html">جزییات محصول</a></li>
                                        <li><a class="dropdown-item nav-link nav_item"
                                               href="product-detail-left-sidebar.html">محصول سایدبار چپ</a></li>
                                        <li><a class="dropdown-item nav-link nav_item"
                                               href="product-detail-right-sidebar.html">محصول سایدبار راست</a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu-col col-lg-3">
                                    <ul>
                                        <li class="dropdown-header">صفحات</li>
                                        <li><a class="dropdown-item nav-link nav_item" href="cart.html">سبد خرید</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="checkout.html">پرداخت</a>
                                        </li>
                                        <li><a class="dropdown-item nav-link nav_item" href="wishlist.html">لیست علاقه مندی</a>
                                        </li>
                                        <li><a class="dropdown-item nav-link nav_item" href="my-account.html">پروفایل کاربری</a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu-col col-lg-3">
                                    <div class="ads_banner">
                                        <a href="#"><img src="assets/images/mega_menu_ads.jpg" alt="mega_menu_ads"></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">وبلاگ</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li>
                                    <a class="dropdown-item nav-link nav_item dropdown-toggler" href="#">چیدمان وبلاگ</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                   href="blog-standard-fullwidth.html">وبلاگ تمام صفحه</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                   href="blog-standard-left-sidebar.html">وبلاگ کناری چپ</a>
                                            </li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                   href="blog-standard-right-sidebar.html">وبلاگ کناری راست</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                   href="blog-three-columns.html">وبلاگ سه ستون</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                   href="blog-four-columns.html">وبلاگ چهار ستون</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="dropdown-item nav-link nav_item dropdown-toggler" href="#">چیدمان وبلاگ</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                   href="blog-masonry-three-columns.html">وبلاگ سه ستون</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                   href="blog-masonry-four-columns.html">وبلاگ چهار ستون</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                   href="blog-masonry-three-columns-wide.html">وبلاگ سه ستون تمام عرض</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                   href="blog-masonry-four-columns-wide.html">وبلاگ چهار ستون تمام عرض</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="dropdown-item nav-link nav_item dropdown-toggler" href="#">لیست پست ها</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                   href="blog-list-left-sidebar.html"></a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                   href="blog-list-right-sidebar.html">پست عمودی</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a class="dropdown-item nav-link nav_item dropdown-toggler" href="#">پست تکی</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a class="dropdown-item nav-link nav_item" href="blog-single.html">پیشفرض</a>
                                            </li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                   href="blog-single-left-sidebar.html">سایدبارچپ</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                   href="blog-single-right-sidebar.html">سایدبار راست</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                   href="blog-single-slider.html">پست کناری</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                   href="blog-single-video.html">ویدئو پست</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                   href="blog-single-audio.html">پست صوتی</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">صفحات</a>
                        <div class="dropdown-menu">
                            <ul>
                                <li><a class="dropdown-item nav-link nav_item" href="team.html">تیم ما</a></li>
                                <li><a class="dropdown-item nav-link nav_item dropdown-toggler" href="#">گالری</a>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                   href="gallery-three-columns.html">گالری سه ستون</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                   href="gallery-four-columns.html">گالری دو ستون</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                   href="gallery-three-columns-wide.html">گالری سه ستون تمام عرض</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                   href="gallery-four-columns-wide.html">گالری چهار ستون تمام عرض</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                   href="gallery-masonry-three-columns.html">گالری سه ستون تمام عرض</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                   href="gallery-masonry-four-columns.html">گالری چهار ستون تمام عرض</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                   href="gallery-masonry-three-columns-wide.html">گالری سه ستون</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                   href="gallery-masonry-four-columns-wide.html">گالری چهار ستون</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="gallery-detail.html">جزییات گالری</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a class="dropdown-item nav-link nav_item" href="faq.html">پرسش پاسخ</a></li>
                                <li><a class="dropdown-item nav-link nav_item" href="coming-soon.html">صفحه به زودی</a>
                                </li>
                                <li><a class="dropdown-item nav-link nav_item" href="404.html">صفحه 404</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown dropdown-mega-menu">
                        <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">المان ها</a>
                        <div class="dropdown-menu">
                            <ul class="mega-menu d-lg-flex">
                                <li class="mega-menu-col col-lg-3">
                                    <ul>
                                        <li><a class="dropdown-item nav-link nav_item" href="accordions.html"><i
                                                class="ti-layout-accordion-separated"></i>  آکاردئونها</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="blockquotes.html"><i
                                                class="ti-quote-left"></i>  بلاک ها</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="buttons.html"><i
                                                class="ti-mouse"></i>  دکمه ها</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="call-to-action.html"><i
                                                class="ti-headphone-alt"></i>  فراخوانی برای اقدام</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="carousel.html"><i
                                                class="ti-layout-slider"></i>  چرخ فلک</a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu-col col-lg-3">
                                    <ul>
                                        <li><a class="dropdown-item nav-link nav_item" href="colors.html"><i
                                                class="ti-paint-bucket"></i> رنگ ها</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="columns.html"><i
                                                class="ti-layout-column3-alt"></i> ستون</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="countdown.html"><i
                                                class="ti-alarm-clock"></i> شمارش معکوس</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="counter.html"><i
                                                class="ti-timer"></i> پیشخوان</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="heading.html"><i
                                                class="ti-text"></i> سرفصل</a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu-col col-lg-3">
                                    <ul>
                                        <li><a class="dropdown-item nav-link nav_item" href="highlights.html"><i
                                                class="ti-underline"></i> نکات برجسته</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="icon-boxes.html"><i
                                                class="ti-widget"></i> جعبه آیکون</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="lists.html"><i
                                                class="ti-list"></i> لیست ها</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="maps.html"><i
                                                class="ti-map-alt"></i> نقشه</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="pricing-table.html"><i
                                                class="ti-layout-column3"></i> جدول قیمت گذاری</a></li>
                                    </ul>
                                </li>
                                <li class="mega-menu-col col-lg-3">
                                    <ul>
                                        <li><a class="dropdown-item nav-link nav_item" href="progress-bars.html"><i
                                                class="ti-layout-list-post"></i> میله های پیشرفت</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="social-icons.html"><i
                                                class="ti-facebook"></i> شبکه های اجتماعی</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="tab.html"><i
                                                class="ti-layout-accordion-separated"></i> برگه </a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="table.html"><i
                                                class="ti-layout-tab"></i> جدول</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="testimonial.html"><i
                                                class="ti-layout-slider-alt"></i> توصیفات</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="nav-link" href="contact.html">تماس با ما</a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav attr-nav align-items-center">
                <li><a href="javascript:void(0);" class="nav-link search_trigger"><i class="ion-ios-search-strong"></i></a>
                    <div class="search-overlay">
                        <div class="search_wrap">
                            <form>
                                <div class="rounded_input">
                                    <input type="text" placeholder="جستجو" class="form-control" id="search_input">
                                </div>
                                <button type="submit" class="search_icon"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </li>
                <li class="dropdown cart_wrap">
                    <a class="nav-link" href="#" data-toggle="dropdown"><i class="ion-bag"></i><span class="cart_count">2</span></a>
                    <div class="cart_box dropdown-menu dropdown-menu-right">
                        <ul class="cart_list">
                            <li>
                                <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                <a href="#"><img src="assets/images/cart_thamb1.jpg" alt="cart_thumb1">نام محصول ارگانیک </a>
                                <p><span class="float-right">1 x </span> <span class="float-right">1500 تومان</span></p>
                            </li>
                            <li>
                                <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                <a href="#"><img src="assets/images/cart_thamb2.jpg" alt="cart_thumb2">نام محصول ارگانیک</a>
                                <p><span class="float-right">1 x </span> <span class="float-right">1500 تومان</span></p>
                            </li>
                        </ul>
                        <div class="cart_footer">
                            <p class="cart_total">جمع کل : <span class="cart_amount"> <span class="price_symbole">2500 تومان</span></span>
                            </p>
                            <p class="cart_buttons"><a href="cart.html" class="btn btn-default btn-radius view-cart">مشاهده سبد خرید</a>
                                <a href="checkout.html" class="btn btn-dark btn-radius checkout">پرداخت</a>
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</header>
<!-- END HEADER -->
<!-- START SECTION BANNER -->
<section class="banner_slider p-0">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active bg_light_green background_bg"
                 data-img-src="assets/images/slide_bg_pattern.png">
                <div class="banner_slide_content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 offset-xl-1 col-lg-9 offset-lg-1">
                                <div class="banner_content banner_content_pad animation" data-animation="fadeIn"
                                     data-animation-delay="0.4s"
                                     data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 10}">
                                    <h2 class="animation" data-animation="fadeInDown" data-animation-delay="0.5s">میوه های ارگانیک</h2>
                                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                                    <a class="btn btn-default btn-radius btn-borderd animation" href="#"
                                       data-animation="fadeInUp" data-animation-delay="0.7s">ادامه مطلب</a>
                                    <a class="btn btn-white btn-radius btn-borderd animation" href="#"
                                       data-animation="fadeInUp" data-animation-delay="0.8s">تماس با ما</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner_shape">
                    <div class="shape1">
                        <div class="animation" data-animation="rollIn" data-animation-delay="0.5s">
                            <img data-parallax="{&quot;y&quot;: -30, &quot;smoothness&quot;: 20}"
                                 src="assets/images/shape1.png" alt="شکل 1">
                        </div>
                    </div>
                    <div class="shape2">
                        <div class="animation" data-animation="bounceInDown" data-animation-delay="0.5s">
                            <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}"
                                 src="assets/images/shape2.png" alt="شکل2">
                        </div>
                    </div>
                    <div class="shape3">
                        <div class="animation" data-animation="bounceInRight" data-animation-delay="0.5s">
                            <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}"
                                 src="assets/images/shape3.png" alt="شکل 3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item bg_light_yellow">
                <div class="banner_slide_content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-10">
                                <div class="banner_content border_shape text-center animation" data-animation="zoomIn"
                                     data-animation-delay="0.4s"
                                     data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 10}">
                                    <h2 class="animation" data-animation="fadeInDown" data-animation-delay="0.5s">
                                       میوه های 100% ارگانیک</h2>
                                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم استt<br>
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
                                    <a class="btn btn-default btn-radius btn-borderd animation" href="#"
                                       data-animation="fadeInUp" data-animation-delay="0.7s">ادامه مطلب</a>
                                    <a class="btn btn-white btn-radius btn-borderd animation" href="#"
                                       data-animation="fadeInUp" data-animation-delay="0.8s">تماس با ما</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner_shape">
                    <div class="shape4">
                        <div class="animation" data-animation="fadeInLeftBig" data-animation-delay="0.5s">
                            <img data-parallax="{&quot;y&quot;: -30, &quot;smoothness&quot;: 20}"
                                 src="assets/images/shape4.png" alt="شکل 4">
                        </div>
                    </div>
                    <div class="shape5">
                        <div class="animation" data-animation="slideInDown" data-animation-delay="0.5s">
                            <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}"
                                 src="assets/images/shape5.png" alt="شکل 5">
                        </div>
                    </div>
                    <div class="shape6">
                        <div class="animation" data-animation="bounceInDown" data-animation-delay="0.5s">
                            <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}"
                                 src="assets/images/shape6.png" alt="شکل 6">
                        </div>
                    </div>
                    <div class="shape7">
                        <div class="animation" data-animation="fadeInRightBig" data-animation-delay="0.5s">
                            <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}"
                                 src="assets/images/shape7.png" alt="شکل 7">
                        </div>
                    </div>
                    <div class="shape8">
                        <div class="animation" data-animation="slideInUp" data-animation-delay="0.5s">
                            <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}"
                                 src="assets/images/shape8.png" alt="شکل 8">
                        </div>
                    </div>
                    <div class="shape9">
                        <div class="animation" data-animation="bounceInUp" data-animation-delay="0.5s">
                            <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}"
                                 src="assets/images/shape9.png" alt="شکل 9">
                        </div>
                    </div>
                    <div class="shape10">
                        <div class="animation" data-animation="bounceInUp" data-animation-delay="0.5s">
                            <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}"
                                 src="assets/images/shape10.png" alt="شکل 10">
                        </div>
                    </div>
                    <div class="shape11">
                        <div class="animation" data-animation="bounceInUp" data-animation-delay="0.5s">
                            <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}"
                                 src="assets/images/shape11.png" alt="شکل 11">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item bg_light_blue">
                <div class="banner_slide_content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 offset-xl-1 col-lg-9 offset-lg-1 col-md-10">
                                <div class="banner_content banner_content_pad animation" data-animation="fadeIn"
                                     data-animation-delay="0.4s"
                                     data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 10}">
                                    <h2 class="animation font_style1" data-animation="fadeInDown"
                                        data-animation-delay="0.5s">میوه های ارگانیک</h2>
                                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است<br
                                                class="d-none d-lg-block"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
                                    <a class="btn btn-default btn-radius btn-borderd animation" href="#"
                                       data-animation="fadeInUp" data-animation-delay="0.7s">ادامه مطلب</a>
                                    <a class="btn btn-white btn-radius btn-borderd animation" href="#"
                                       data-animation="fadeInUp" data-animation-delay="0.8s">تماس با ما</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner_shape">
                    <div class="shape12">
                        <div class="animation" data-animation="slideInDown" data-animation-delay="0.5s">
                            <img data-parallax="{&quot;y&quot;: -30, &quot;smoothness&quot;: 20}"
                                 src="assets/images/shape12.png" alt="شکل 12">
                        </div>
                    </div>
                    <div class="shape13">
                        <div class="animation" data-animation="slideInDown" data-animation-delay="0.5s">
                            <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}"
                                 src="assets/images/shape13.png" alt="شکل 13">
                        </div>
                    </div>
                    <div class="shape14">
                        <div class="animation" data-animation="zoomIn" data-animation-delay="0.5s">
                            <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}"
                                 src="assets/images/shape14.png" alt="شکل 14">
                        </div>
                    </div>
                    <div class="shape15">
                        <div class="animation" data-animation="bounceInUp" data-animation-delay="0.5s">
                            <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}"
                                 src="assets/images/shape15.png" alt="شکل 15">
                        </div>
                    </div>
                    <div class="shape16">
                        <div class="animation" data-animation="zoomInUp" data-animation-delay="0.5s">
                            <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}"
                                 src="assets/images/shape16.png" alt="شکل 16">
                        </div>
                    </div>
                    <div class="shape17">
                        <div class="animation" data-animation="slideInLeft" data-animation-delay="0.5s">
                            <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}"
                                 src="assets/images/shape17.png" alt="شکل 17">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev"><i
                class="ion-chevron-right"></i></a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next"><i
                class="ion-chevron-left"></i></a>
    </div>
</section>
<!-- END SECTION BANNER -->

<!-- START SECTION BANNER BOX -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4 animation" data-animation="bounceInUp" data-animation-delay="0.2s">
                <div class="banner_box box_shadow4 radius_all_10">
                    <div class="banner_text">
                        <h3>نام محصول</h3>
                        <p>لورم ایپسوم متن ساختگی</p>
                        <em><a href="#"><u>خریدکن</u></a></em>
                    </div>
                    <div class="banner_img">
                        <img src="assets/images/banner_img1.png" alt="banner_img1">
                    </div>
                </div>
            </div>
            <div class="col-md-4 animation" data-animation="bounceInUp" data-animation-delay="0.3s">
                <div class="banner_box box_shadow4 radius_all_10">
                    <div class="banner_text">
                        <h3>نام محصول</h3>
                        <p>لورم ایپسوم متن ساختگی</p>
                        <em><a href="#"><u>خریدکن</u></a></em>
                    </div>
                    <div class="banner_img">
                        <img src="assets/images/banner_img2.png" alt="banner_img2">
                    </div>
                </div>
            </div>
            <div class="col-md-4 animation" data-animation="bounceInUp" data-animation-delay="0.4s">
                <div class="banner_box box_shadow4 radius_all_10">
                    <div class="banner_text">
                        <h3>نام محصول</h3>
                        <p>لورم ایپسوم متن ساختگی</p>
                        <em><a href="#"><u>خریدکن</u></a></em>
                    </div>
                    <div class="banner_img">
                        <img src="assets/images/banner_img3.png" alt="banner_img3">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER BOX -->

<!-- START SECTION WHY CHOOSE US -->
<section class="bg_gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-md-6 col-sm-8 text-center">
                <div class="heading_s1 text-center animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                    <h2>چرا انتخاب ما</h2>
                </div>
                <p class="animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-6">
                <div class="icon_box icon_box_style1 bg-white radius_all_10 animation" data-animation="fadeInUp"
                     data-animation-delay="0.04s">
                    <div class="box_icon">
                        <img src="assets/images/icon1.png" alt="icon1">
                    </div>
                    <div class="intro_desc">
                        <h6>چای ارگانیک طبیعی</h6>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                    </div>
                </div>
                <div class="icon_box icon_box_style1 bg-white radius_all_10 animation" data-animation="fadeInUp"
                     data-animation-delay="0.05s">
                    <div class="box_icon">
                        <img src="assets/images/icon2.png" alt="icon2">
                    </div>
                    <div class="intro_desc">
                        <h6>چای ارگانیک طبیعی</h6>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 order-lg-last">
                <div class="icon_box icon_box_style1 bg-white radius_all_10 animation" data-animation="fadeInUp"
                     data-animation-delay="0.04s">
                    <div class="box_icon">
                        <img src="assets/images/icon3.png" alt="icon3">
                    </div>
                    <div class="intro_desc">
                        <h6>میوه های 100% ارگانیک</h6>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                    </div>
                </div>
                <div class="icon_box icon_box_style1 bg-white radius_all_10 animation" data-animation="fadeInUp"
                     data-animation-delay="0.05s">
                    <div class="box_icon">
                        <img src="assets/images/icon4.png" alt="icon4">
                    </div>
                    <div class="intro_desc">
                        <h6>چای ارگانیک طبیعی</h6>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="why_choose_img bounceimg">
                    <img src="assets/images/why_choose_img.png" alt="چرا_چواش_یمگ">
                </div>
            </div>
        </div>
    </div>
    <div class="wave_shape"><img src="assets/images/wave_shape.png" alt="موج_شکل"></div>
    <div class="overlap_shape">
        <div class="ol_shape1">
            <div class="animation" data-animation="bounceInDown" data-animation-delay="0.5s">
                <img data-parallax="{&quot;y&quot;: -30, &quot;smoothness&quot;: 20}" src="assets/images/shape18.png"
                     alt="شکل 18">
            </div>
        </div>
        <div class="ol_shape2">
            <div class="animation" data-animation="zoomIn" data-animation-delay="0.5s">
                <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="assets/images/shape19.png"
                     alt="شکل 19">
            </div>
        </div>
        <div class="ol_shape3">
            <div class="animation" data-animation="zoomIn" data-animation-delay="0.5s">
                <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="assets/images/shape20.png"
                     alt="شکل 20">
            </div>
        </div>
        <div class="ol_shape4">
            <div class="animation" data-animation="bounceInUp" data-animation-delay="0.5s">
                <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="assets/images/shape21.png"
                     alt="شکل 21">
            </div>
        </div>
        <div class="ol_shape5">
            <div class="animation" data-animation="slideInRight" data-animation-delay="0.5s">
                <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="assets/images/shape22.png"
                     alt="شکل22">
            </div>
        </div>
        <div class="ol_shape6">
            <div class="animation" data-animation="slideInRight" data-animation-delay="0.5s">
                <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="assets/images/shape23.png"
                     alt="شکل 23">
            </div>
        </div>
        <div class="ol_shape7">
            <div class="animation" data-animation="slideInRight" data-animation-delay="0.5s">
                <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="assets/images/shape24.png"
                     alt="شکل24">
            </div>
        </div>
    </div>
</section>
<!-- END SECTION WHY CHOOSE US -->

<!-- START SECTION PRODUCT -->
<section class="pb_70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-sm-10 text-center">
                <div class="heading_s1 text-center animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                    <h2>بهترین فروشنده</h2>
                </div>
                <p class="animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="product_content">
                    <ul class="nav nav-tabs justify-content-center animation" data-animation="fadeInUp"
                        data-animation-delay="0.04s" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="tab1" data-toggle="tab" href="#tab-1" role="tab"
                               aria-controls="tab-1" aria-selected="true"><span class="pr_icon1"></span>کلیه محصولات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab2" data-toggle="tab" href="#tab-2" role="tab"
                               aria-controls="tab-2" aria-selected="false"><span class="pr_icon2"></span>سبزیجات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab3" data-toggle="tab" href="#tab-3" role="tab"
                               aria-controls="tab-3" aria-selected="false"><span class="pr_icon3"></span>میوه ها</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab4" data-toggle="tab" href="#tab-4" role="tab"
                               aria-controls="tab-4" aria-selected="false"><span class="pr_icon4"></span>آب میوه</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tab5" data-toggle="tab" href="#tab-5" role="tab"
                               aria-controls="tab-5" aria-selected="false"><span class="pr_icon5"></span>چای</a>
                        </li>
                    </ul>
                    <div class="small_divider clearfix"></div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab1">
                            <div class="row animation" data-animation="fadeInUp" data-animation-delay="0.05s">
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product">
                                        <span class="pr_flash bg_green">فروش</span>
                                        <div class="product_img">
                                            <a href="#"><img src="assets/images/product_img1.jpg"
                                                             alt="product_img1"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li>
                                                        <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6><a href="#">توت فرنگی ارگانیک تازه</a></h6>
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="price">35.00 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product">
                                        <span class="pr_flash bg_orange">-10٪</span>
                                        <div class="product_img">
                                            <a href="#"><img src="assets/images/product_img2.jpg"
                                                             alt="product_img2"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li>
                                                        <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6><a href="#">انگورهای تازه آلی</a></h6>
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="price">40.00 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="#"><img src="assets/images/product_img3.jpg"
                                                             alt="product_img3"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li>
                                                    <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6><a href="#">خیار ارگانیک تازه</a></h6>
                                            <div class="rating">
                                                <div class="product_rate" style="width:60%"></div>
                                            </div>
                                            <span class="price">52.00 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product">
                                        <span class="pr_flash bg_green">فروش</span>
                                        <div class="product_img">
                                            <a href="#"><img src="assets/images/product_img4.jpg"
                                                             alt="product_img4"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li>
                                                      <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6><a href="#">پرتقال ارگانیک تازه</a></h6>
                                            <div class="rating">
                                                <div class="product_rate" style="width:100%"></div>
                                            </div>
                                            <span class="price">39.00 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="#"><img src="assets/images/product_img5.jpg"
                                                             alt="product_img5"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li>
                                                    <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6><a href="#">100٪ آبهای ارگانیک</a></h6>
                                            <div class="rating">
                                                <div class="product_rate" style="width:100%"></div>
                                            </div>
                                            <span class="price">33.00 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="#"><img src="assets/images/product_img6.jpg"
                                                             alt="product_img6"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li>
                                                        <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6><a href="#">موز ارگانیک تازه</a></h6>
                                            <div class="rating">
                                                <div class="product_rate" style="width:60%"></div>
                                            </div>
                                            <span class="price">42.00 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product">
                                        <span class="pr_flash bg_red">داغ</span>
                                        <div class="product_img">
                                            <a href="#"><img src="assets/images/product_img7.jpg"
                                                             alt="product_img7"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li>
                                                <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6><a href="#">گوجه فرنگی آلی تازه</a></h6>
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="price">  54.00 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product">
                                        <span class="pr_flash bg_orange">-25٪</span>
                                        <div class="product_img">
                                            <a href="#"><img src="assets/images/product_img8.jpg"
                                                             alt="product_img8"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li>
                                                      <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6><a href="#">هویج تازه ارگانیک</a></h6>
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="price">32.00 تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab2">
                            <div class="row animation" data-animation="fadeInUp" data-animation-delay="0.05s">
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product">
                                        <span class="pr_flash bg_orange">-10٪</span>
                                        <div class="product_img">
                                            <a href="#"><img src="assets/images/product_img2.jpg"
                                                             alt="product_img2"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li>
                                                      <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6><a href="#">انگورهای تازه آلی</a></h6>
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="price">40.00 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="#"><img src="assets/images/product_img3.jpg"
                                                             alt="product_img3"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li>
                                                      <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6><a href="#">خیار ارگانیک تازه</a></h6>
                                            <div class="rating">
                                                <div class="product_rate" style="width:60%"></div>
                                            </div>
                                            <span class="price">52.00 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="#"><img src="assets/images/product_img5.jpg"
                                                             alt="product_img5"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li>
                                                    <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6><a href="#">100٪ آبهای ارگانیک</a></h6>
                                            <div class="rating">
                                                <div class="product_rate" style="width:100%"></div>
                                            </div>
                                            <span class="price">33.00 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="#"><img src="assets/images/product_img6.jpg"
                                                             alt="product_img6"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li>
                                                    <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6><a href="#">موز ارگانیک تازه</a></h6>
                                            <div class="rating">
                                                <div class="product_rate" style="width:60%"></div>
                                            </div>
                                            <span class="price">تومان 42.00 </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product">
                                        <span class="pr_flash bg_red">داغ</span>
                                        <div class="product_img">
                                            <a href="#"><img src="assets/images/product_img7.jpg"
                                                             alt="product_img7"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li>
                                                        <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6><a href="#">گوجه فرنگی آلی تازه</a></h6>
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="price">540 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product">
                                        <span class="pr_flash bg_orange">-25٪</span>
                                        <div class="product_img">
                                            <a href="#"><img src="assets/images/product_img8.jpg"
                                                             alt="product_img8"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li>
                                                      <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6><a href="#">هویج تازه ارگانیک</a></h6>
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="price">32.00 تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab3">
                            <div class="row animation" data-animation="fadeInUp" data-animation-delay="0.05s">
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product">
                                        <span class="pr_flash bg_green">فروش</span>
                                        <div class="product_img">
                                            <a href="#"><img src="assets/images/product_img1.jpg"
                                                             alt="product_img1"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li>
                                                      <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6><a href="#">توت فرنگی ارگانیک تازه</a></h6>
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="price">35.00 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product">
                                        <span class="pr_flash bg_orange">-10٪</span>
                                        <div class="product_img">
                                            <a href="#"><img src="assets/images/product_img2.jpg"
                                                             alt="product_img2"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li>
                                                        <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6><a href="#">انگورهای تازه آلی</a></h6>
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="price">40.00 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product">
                                        <span class="pr_flash bg_green">فروش</span>
                                        <div class="product_img">
                                            <a href="#"><img src="assets/images/product_img4.jpg"
                                                             alt="product_img4"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li>
                                                          <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6><a href="#">پرتقال ارگانیک تازه</a></h6>
                                            <div class="rating">
                                                <div class="product_rate" style="width:100%"></div>
                                            </div>
                                            <span class="price">39.00 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="#"><img src="assets/images/product_img5.jpg"
                                                             alt="product_img5"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li>
                                                      <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6><a href="#">100٪ آبهای ارگانیک</a></h6>
                                            <div class="rating">
                                                <div class="product_rate" style="width:100%"></div>
                                            </div>
                                            <span class="price">33.00 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product">
                                        <span class="pr_flash bg_red">داغ</span>
                                        <div class="product_img">
                                            <a href="#"><img src="assets/images/product_img7.jpg"
                                                             alt="product_img7"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li>
                                                        <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6><a href="#">گوجه فرنگی آلی تازه</a></h6>
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="price">540 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product">
                                        <span class="pr_flash bg_orange">-25٪</span>
                                        <div class="product_img">
                                            <a href="#"><img src="assets/images/product_img8.jpg"
                                                             alt="product_img8"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li>
                                                          <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6><a href="#">هویج تازه ارگانیک</a></h6>
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="price">32.00 تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab4">
                            <div class="row animation" data-animation="fadeInUp" data-animation-delay="0.05s">
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product">
                                        <span class="pr_flash bg_green">فروش</span>
                                        <div class="product_img">
                                            <a href="#"><img src="assets/images/product_img4.jpg"
                                                             alt="product_img4"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li>
                                                          <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6><a href="#">پرتقال ارگانیک تازه</a></h6>
                                            <div class="rating">
                                                <div class="product_rate" style="width:100%"></div>
                                            </div>
                                            <span class="price">39.00 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="#"><img src="assets/images/product_img5.jpg"
                                                             alt="product_img5"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li>
                                                  <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6><a href="#">100٪ آبهای ارگانیک</a></h6>
                                            <div class="rating">
                                                <div class="product_rate" style="width:100%"></div>
                                            </div>
                                            <span class="price">33.00 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="#"><img src="assets/images/product_img6.jpg"
                                                             alt="product_img6"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li>
                                                    <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6><a href="#">موز ارگانیک تازه</a></h6>
                                            <div class="rating">
                                                <div class="product_rate" style="width:60%"></div>
                                            </div>
                                            <span class="price">42.00 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product">
                                        <span class="pr_flash bg_red">داغ</span>
                                        <div class="product_img">
                                            <a href="#"><img src="assets/images/product_img7.jpg"
                                                             alt="product_img7"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li>
                                                <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6><a href="#">گوجه فرنگی آلی تازه</a></h6>
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="price">540 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product">
                                        <span class="pr_flash bg_orange">-25٪</span>
                                        <div class="product_img">
                                            <a href="#"><img src="assets/images/product_img8.jpg"
                                                             alt="product_img8"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li>
                                                    <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6><a href="#">هویج تازه ارگانیک</a></h6>
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="price">32.00 تومان</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-5" role="tabpanel" aria-labelledby="tab5">
                            <div class="row animation" data-animation="fadeInUp" data-animation-delay="0.05s">
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product">
                                        <span class="pr_flash bg_red">داغ</span>
                                        <div class="product_img">
                                            <a href="#"><img src="assets/images/product_img7.jpg"
                                                             alt="product_img7"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li>
                                                      <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6><a href="#">گوجه فرنگی آلی تازه</a></h6>
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="price">540 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="#"><img src="assets/images/product_img3.jpg"
                                                             alt="product_img3"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li>
                                                <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6><a href="#">خیار ارگانیک تازه</a></h6>
                                            <div class="rating">
                                                <div class="product_rate" style="width:60%"></div>
                                            </div>
                                            <span class="price">52.00 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product">
                                        <span class="pr_flash bg_green">فروش</span>
                                        <div class="product_img">
                                            <a href="#"><img src="assets/images/product_img4.jpg"
                                                             alt="product_img4"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li>
                                                        <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6><a href="#">پرتقال ارگانیک تازه</a></h6>
                                            <div class="rating">
                                                <div class="product_rate" style="width:100%"></div>
                                            </div>
                                            <span class="price">39.00 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product">
                                        <span class="pr_flash bg_orange">-10٪</span>
                                        <div class="product_img">
                                            <a href="#"><img src="assets/images/product_img2.jpg"
                                                             alt="product_img2"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li>
                                                      <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6><a href="#">انگورهای تازه آلی</a></h6>
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="price">40.00 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="#"><img src="assets/images/product_img5.jpg"
                                                             alt="product_img5"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li>
                                                  <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6><a href="#">100٪ آبهای ارگانیک</a></h6>
                                            <div class="rating">
                                                <div class="product_rate" style="width:100%"></div>
                                            </div>
                                            <span class="price">33.00 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product">
                                        <span class="pr_flash bg_orange">-25٪</span>
                                        <div class="product_img">
                                            <a href="#"><img src="assets/images/product_img8.jpg"
                                                             alt="product_img8"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li>
                                                        <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6><a href="#">هویج تازه ارگانیک</a></h6>
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="price">32.00 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="#"><img src="assets/images/product_img6.jpg"
                                                             alt="product_img6"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li>
                                                      <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6><a href="#">موز ارگانیک تازه</a></h6>
                                            <div class="rating">
                                                <div class="product_rate" style="width:60%"></div>
                                            </div>
                                            <span class="price">42.00 تومان</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <div class="product">
                                        <span class="pr_flash bg_green">فروش</span>
                                        <div class="product_img">
                                            <a href="#"><img src="assets/images/product_img1.jpg"
                                                             alt="product_img1"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li>
                                                      <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                            <h6><a href="#">توت فرنگی ارگانیک تازه</a></h6>
                                            <div class="rating">
                                                <div class="product_rate" style="width:80%"></div>
                                            </div>
                                            <span class="price">35.00 تومان</span>
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
    <div class="overlap_shape">
        <div class="ol_shape8">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img data-parallax="{&quot;y&quot;: -30, &quot;smoothness&quot;: 20}" src="assets/images/shape25.png"
                     alt="شکل 25">
            </div>
        </div>
        <div class="ol_shape9">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="assets/images/shape26.png"
                     alt="شکل26">
            </div>
        </div>
        <div class="ol_shape10">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="assets/images/shape27.png"
                     alt="شکل 27">
            </div>
        </div>
        <div class="ol_shape11">
            <div class="animation" data-animation="fadeInRight" data-animation-delay="0.5s">
                <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="assets/images/shape28.png"
                     alt="شکل28">
            </div>
        </div>
        <div class="ol_shape12">
            <div class="animation" data-animation="fadeInRight" data-animation-delay="0.5s">
                <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="assets/images/shape29.png"
                     alt="شکل 29">
            </div>
        </div>
        <div class="ol_shape13">
            <div class="animation" data-animation="fadeInRight" data-animation-delay="0.5s">
                <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="assets/images/shape30.png"
                     alt="شکل 30">
            </div>
        </div>
        <div class="ol_shape14">
            <div class="bounceimg" data-animation="fadeInRight" data-animation-delay="0.5s">
                <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="assets/images/shape31.png"
                     alt="شکل 31">
            </div>
        </div>
    </div>
</section>
<!-- START SECTION PRODUCT -->

<!-- START SECTION DEAL OF THE DAY -->
<section class="bg_light_blue">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-7">
                <div class="deal_content text-center">
                    <div class="heading_s1 text-center animation" data-animation="fadeInUp"
                         data-animation-delay="0.02s">
                        <h2>تخفیف ویژه <br>برای کلیه محصولات غذایی</h2>
                    </div>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                    <div class="countdown_time animation" data-animation="fadeInUp" data-animation-delay="0.04s"
                         data-time="2019/06/02 12:30:15"></div>
                    <a href="#" class="btn btn-default btn-radius btn-borderd animation" data-animation="fadeInUp"
                       data-animation-delay="0.04s">اکنون پیشنهاد را مشاهده کنید</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-5">
                <div class="deal_img_wrap bounceimg animation" data-animation="zoomIn" data-animation-delay="0.02s">
                    <img src="assets/images/deal_img.png" alt="deal_img">
                </div>
                <div class="circle_bg1">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
    <div class="overlap_shape">
        <div class="ol_shape15">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img data-parallax="{&quot;y&quot;: -30, &quot;smoothness&quot;: 20}" src="assets/images/shape32.png"
                     alt="شکل 32">
            </div>
        </div>
        <div class="ol_shape16">
            <div class="animation" data-animation="fadeInRight" data-animation-delay="0.5s">
                <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="assets/images/shape33.png"
                     alt="شکل 33">
            </div>
        </div>
    </div>
</section>
<!-- END SECTION DEAL OF THE DAY -->

<!-- START SECTION FEATURE PRODUCT -->
<section>
    <div class="container ltr">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="heading_s1 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                    <h2>محصولات برجسته</h2>
                </div>
                <p class="animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                <div class="small_divider clearfix"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                <div class="product_slider product_list carousel_slide3 owl-carousel owl-theme nav_top_right"
                     data-margin="30" data-dots="false" data-nav="true">
                    <div class="items">
                        <div class="product">
                            <div class="product_img">
                                <a href="#"><img src="assets/images/product_img1.jpg" alt="product_img1"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        <li>
                                                <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">توت فرنگی ارگانیک تازه</a></h6>
                                <div class="rating">
                                    <div class="product_rate" style="width:80%"></div>
                                </div>
                                <span class="price">35.00 تومان</span>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product_img">
                                <a href="#"><img src="assets/images/product_img4.jpg" alt="product_img4"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        <li>
                                              <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">پرتقال ارگانیک تازه</a></h6>
                                <div class="rating">
                                    <div class="product_rate" style="width:100%"></div>
                                </div>
                                <span class="price">39.00 تومان</span>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product_img">
                                <a href="#"><img src="assets/images/product_img7.jpg" alt="product_img7"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        <li>
                                            <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">گوجه فرنگی آلی تازه</a></h6>
                                <div class="rating">
                                    <div class="product_rate" style="width:80%"></div>
                                </div>
                                <span class="price">40.00 تومان</span>
                            </div>
                        </div>
                    </div>
                    <div class="items">
                        <div class="product">
                            <div class="product_img">
                                <a href="#"><img src="assets/images/product_img2.jpg" alt="product_img2"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        <li>
                                          <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">انگورهای تازه آلی</a></h6>
                                <div class="rating">
                                    <div class="product_rate" style="width:80%"></div>
                                </div>
                                <span class="price">40.00 تومان</span>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product_img">
                                <a href="#"><img src="assets/images/product_img5.jpg" alt="product_img5"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        <li>
                                          <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">100٪ آبهای ارگانیک</a></h6>
                                <div class="rating">
                                    <div class="product_rate" style="width:100%"></div>
                                </div>
                                <span class="price">33.00 تومان</span>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product_img">
                                <a href="#"><img src="assets/images/product_img8.jpg" alt="product_img8"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        <li>
                                            <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">هویج تازه ارگانیک</a></h6>
                                <div class="rating">
                                    <div class="product_rate" style="width:80%"></div>
                                </div>
                                <span class="price">32.00 تومان</span>
                            </div>
                        </div>
                    </div>
                    <div class="items">
                        <div class="product">
                            <div class="product_img">
                                <a href="#"><img src="assets/images/product_img3.jpg" alt="product_img3"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        <li>
                                        <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">خیار ارگانیک تازه</a></h6>
                                <div class="rating">
                                    <div class="product_rate" style="width:60%"></div>
                                </div>
                                <span class="price">52.00 تومان</span>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product_img">
                                <a href="#"><img src="assets/images/product_img6.jpg" alt="product_img6"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        <li>
                                      <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">موز ارگانیک تازه</a></h6>
                                <div class="rating">
                                    <div class="product_rate" style="width:60%"></div>
                                </div>
                                <span class="price">42.00 تومان</span>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product_img">
                                <a href="#"><img src="assets/images/product_img9.jpg" alt="product_img9"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        <li>
                                              <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">آناناس تازه</a></h6>
                                <div class="rating">
                                    <div class="product_rate" style="width:100%"></div>
                                </div>
                                <span class="price">22.00 تومان</span>
                            </div>
                        </div>
                    </div>
                    <div class="items">
                        <div class="product">
                            <div class="product_img">
                                <a href="#"><img src="assets/images/product_img2.jpg" alt="product_img2"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        <li>
                                          <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">انگورهای تازه آلی</a></h6>
                                <div class="rating">
                                    <div class="product_rate" style="width:80%"></div>
                                </div>
                                <span class="price">40.00 تومان</span>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product_img">
                                <a href="#"><img src="assets/images/product_img5.jpg" alt="product_img5"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        <li>
                                          <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">100٪ آبهای ارگانیک</a></h6>
                                <div class="rating">
                                    <div class="product_rate" style="width:100%"></div>
                                </div>
                                <span class="price">33.00 تومان</span>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product_img">
                                <a href="#"><img src="assets/images/product_img8.jpg" alt="product_img8"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        <li>
                                          <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">هویج تازه ارگانیک</a></h6>
                                <div class="rating">
                                    <div class="product_rate" style="width:80%"></div>
                                </div>
                                <span class="price">32.00 تومان</span>
                            </div>
                        </div>
                    </div>
                    <div class="items">
                        <div class="product">
                            <div class="product_img">
                                <a href="#"><img src="assets/images/product_img1.jpg" alt="product_img1"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        <li>
                                          <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">توت فرنگی ارگانیک تازه</a></h6>
                                <div class="rating">
                                    <div class="product_rate" style="width:80%"></div>
                                </div>
                                <span class="price">35.00 تومان</span>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product_img">
                                <a href="#"><img src="assets/images/product_img4.jpg" alt="product_img4"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        <li>
                                          <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">پرتقال ارگانیک تازه</a></h6>
                                <div class="rating">
                                    <div class="product_rate" style="width:100%"></div>
                                </div>
                                <span class="price">39.00 تومان</span>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product_img">
                                <a href="#"><img src="assets/images/product_img7.jpg" alt="product_img7"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        <li>
                                            <a class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="ti-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">گوجه فرنگی آلی تازه</a></h6>
                                <div class="rating">
                                    <div class="product_rate" style="width:80%"></div>
                                </div>
                                <span class="price">39.00 تومان</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION FEATURE PRODUCT -->

<!-- START SECTION TESTIMONIAL -->
<section class="bg_gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                    <div class="heading_s1 text-center">
                        <h2>مشتری ما می گویند!</h2>
                    </div>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                </div>
                <div class="small_divider"></div>
            </div>
        </div>
        <div class="row justify-content-center ltr">
            <div class="col-12 animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                <div class="testimonial_slider testimonial_style1 carousel_slide3 owl-carousel owl-theme fl"
                     data-margin="30" data-loop="true" data-autoplay="true" data-dots="false">
                    <div class="testimonial_box">
                        <div class="testi_desc">
                            <p>
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            </p>
                        </div>
                        <div class="testi_meta">
                            <div class="testimonial_img">
                                <img src="assets/images/client_img1.jpg" alt="مشتری">
                            </div>
                            <div class="testi_user">
                                <h5>مبارک والتر</h5>
                                <span>طراح وب</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial_box">
                        <div class="testi_desc">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                        </div>
                        <div class="testi_meta">
                            <div class="testimonial_img">
                                <img src="assets/images/client_img2.jpg" alt="مشتری">
                            </div>
                            <div class="testi_user">
                                <h5>جان مارک</h5>
                                <span>طراح وب</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial_box">
                        <div class="testi_desc">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                        </div>
                        <div class="testi_meta">
                            <div class="testimonial_img">
                                <img src="assets/images/client_img3.jpg" alt="مشتری">
                            </div>
                            <div class="testi_user">
                                <h5>کالوین ویلیام</h5>
                                <span>طراح وب</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="overlap_shape">
        <div class="ol_shape17">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img data-parallax="{&quot;y&quot;: 20, &quot;smoothness&quot;: 20}"
                     src="assets/images/testimonial_bg_img1.jpg" alt="Testonial_bg_img1">
            </div>
        </div>
        <div class="ol_shape18">
            <div class="animation float-left" data-animation="fadeInRight" data-animation-delay="0.5s">
                <img data-parallax="{&quot;y&quot;: 20, &quot;smoothness&quot;: 20}"
                     src="assets/images/testimonial_bg_img2.png" alt="Testonial_bg_img2">
            </div>
        </div>
    </div>
</section>
<!-- END SECTION TESTIMONIAL -->

<!-- START SECTION BLOG -->
<section class="pb_20">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="text-center">
                    <div class="heading_s1 text-center animation" data-animation="fadeInUp"
                         data-animation-delay="0.02s">
                        <h2>اخبار وبلاگ</h2>
                    </div>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. .</p>
                    <div class="small_divider"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="blog_post blog_style1 radius_all_10 animation" data-animation="fadeInUp"
                     data-animation-delay="0.04s">
                    <div class="blog_img">
                        <a href="#">
                            <img src="assets/images/blog_small_img1.jpg" alt="blog_small_img1">
                        </a>
                        <div class="blog_date style1"><h4>02</h4><span>ممکن است</span></div>
                    </div>
                    <div class="blog_content">
                        <h6 class="blog_title"><a href="#">لورم ایپسوم متن ساختگی با تولید سادگی</a></h6>
                        <ul class="list_none blog_meta">
                            <li><a href="#"><i class="far fa-user"></i>توسط <span class="text_default">مدیر</span></a>
                            </li>
                            <li><a href="#"><i class="far fa-comments"></i>4 نظر</a></li>
                        </ul>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                        <a href="#" class="blog_link">بیشتر بخوانید <i class="ion-ios-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog_post blog_style1 radius_all_10 animation" data-animation="fadeInUp"
                     data-animation-delay="0.05s">
                    <div class="blog_img">
                        <a href="#">
                            <img src="assets/images/blog_small_img2.jpg" alt="blog_small_img2">
                        </a>
                        <div class="blog_date style1"><h4>25</h4><span>مار</span></div>
                    </div>
                    <div class="blog_content">
                        <h6 class="blog_title"><a href="#">لورم ایپسوم متن ساختگی با تولید سادگی</a></h6>
                        <ul class="list_none blog_meta">
                            <li><a href="#"><i class="far fa-user"></i>توسط <span class="text_default">مدیر</span></a>
                            </li>
                            <li><a href="#"><i class="far fa-comments"></i>3 نظر</a></li>
                        </ul>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                        <a href="#" class="blog_link">بیشتر بخوانید <i class="ion-ios-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog_post blog_style1 radius_all_10 animation" data-animation="fadeInUp"
                     data-animation-delay="0.06s">
                    <div class="blog_img">
                        <a href="#">
                            <img src="assets/images/blog_small_img3.jpg" alt="blog_small_img3">
                        </a>
                        <div class="blog_date style1"><h4>08</h4><span>اوت</span></div>
                    </div>
                    <div class="blog_content">
                        <h6 class="blog_title"><a href="#">لورم ایپسوم متن ساختگی با تولید سادگی</a></h6>
                        <ul class="list_none blog_meta">
                            <li><a href="#"><i class="far fa-user"></i>توسط <span class="text_default">مدیر</span></a>
                            </li>
                            <li><a href="#"><i class="far fa-comments"></i>5 نظر</a></li>
                        </ul>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                        <a href="#" class="blog_link">بیشتر بخوانید <i class="ion-ios-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BLOG -->

<!-- START SECTION CLIENT LOGO -->
<section class="small_pt">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="text-center">
                    <div class="heading_s1 text-center animation" data-animation="fadeInUp"
                         data-animation-delay="0.02s">
                        <h2>شریک زندگی ما</h2>
                    </div>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.03s">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                    <div class="small_divider"></div>
                </div>
            </div>
        </div>
        <div class="row ltr">
            <div class="col-12 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                <div class="carousel_slide5 owl-carousel owl-theme" data-margin="30" data-dots="false" data-loop="true"
                     data-autoplay="true">
                    <div class="items">
                        <a href="#"><img src="assets/images/cl_logo1.png" alt="cl_logo1"></a>
                    </div>
                    <div class="items">
                        <a href="#"><img src="assets/images/cl_logo2.png" alt="cl_logo2"></a>
                    </div>
                    <div class="items">
                        <a href="#"><img src="assets/images/cl_logo3.png" alt="cl_logo3"></a>
                    </div>
                    <div class="items">
                        <a href="#"><img src="assets/images/cl_logo4.png" alt="cl_logo4"></a>
                    </div>
                    <div class="items">
                        <a href="#"><img src="assets/images/cl_logo5.png" alt="cl_logo5"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION CLIENT LOGO -->

<!-- END SECTION NEWSLATTER -->
<section class="bg_light_green newslatter_wrap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 text-center">
                <div class="heading_s1 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                    <h2>در خبرنامه ما مشترک شوید</h2>
                </div>
                <p class="m-0 animation" data-animation="fadeInUp" data-animation-delay="0.03s">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                <div class="small_divider"></div>
                <div class="newsletter_form animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                    <form>
                        <div class="rounded_input">
                            <input type="text" class="form-control" required="" placeholder="ایمیل">
                        </div>
                        <button type="submit" title="اشتراک در" class="btn btn-default" name="submit" value="Submit">عضویت</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="overlap_shape">
        <div class="ol_shape19">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s">
                <img data-parallax="{&quot;y&quot;: 20, &quot;smoothness&quot;: 20}" src="assets/images/shape34.png"
                     alt="شکل34">
            </div>
        </div>
        <div class="ol_shape20">
            <div class="animation" data-animation="fadeInRight" data-animation-delay="0.5s">
                <img data-parallax="{&quot;y&quot;: 20, &quot;smoothness&quot;: 20}" src="assets/images/shape35.png"
                     alt="شکل35">
            </div>
        </div>
    </div>
</section>
<!-- END SECTION NEWSLATTER -->

<!-- START FOOTER -->
<footer class="bg_gray">
    <div class="top_footer small_pt small_pb">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer_logo">
                        <a href="index.html"><img alt="آرم" src="assets/images/logo_dark.png"></a>
                    </div>
                    <div class="footer_desc">
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                    </div>
                    <ul class="contact_info list_none">
                        <li>
                            <span class="ti-mobile"></span>
                            <p>0211234567</p>
                        </li>
                        <li>
                            <span class="ti-email"></span>
                            <a href="mailto:info@yourmail.com">info@yourmail.com</a>
                        </li>
                        <li>
                            <span class="ti-location-pin"></span>
                            <address>خیابان 123 ، اولدترافورد ، نیویورک ، ایالات متحده آمریکا</address>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <h5 class="widget_title">اطلاعات</h5>
                    <ul class="list_none widget_links">
                        <li><a href="#">اطلاعات تحویل</a></li>
                        <li><a href="#">پرداخت امن</a></li>
                        <li><a href="#">دربارهی ما</a></li>
                        <li><a href="#">فروشندگان برتر</a></li>
                        <li><a href="#">سیاست حفظ حریم خصوصی</a></li>
                        <li><a href="#">نقشه سایت ما</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <h5 class="widget_title">پشتیبانی مشتری</h5>
                    <ul class="list_none widget_links">
                        <li><a href="#">حساب من</a></li>
                        <li><a href="#">سبد خرید</a></li>
                        <li><a href="#">آدرس</a></li>
                        <li><a href="#">تخفیف</a></li>
                        <li><a href="#">تاریخچه سفارشات</a></li>
                        <li><a href="#">رهگیری سفارش</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-4">
                    <h5 class="widget_title">اینستاگرام</h5>
                    <ul class="list_none instafeed">
                        <li><a href="#"><img src="assets/images/insta_img1.jpg" alt="insta_img"><span
                                class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                        <li><a href="#"><img src="assets/images/insta_img2.jpg" alt="insta_img"><span
                                class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                        <li><a href="#"><img src="assets/images/insta_img3.jpg" alt="insta_img"><span
                                class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                        <li><a href="#"><img src="assets/images/insta_img4.jpg" alt="insta_img"><span
                                class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                        <li><a href="#"><img src="assets/images/insta_img5.jpg" alt="insta_img"><span
                                class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                        <li><a href="#"><img src="assets/images/insta_img6.jpg" alt="insta_img"><span
                                class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                        <li><a href="#"><img src="assets/images/insta_img7.jpg" alt="insta_img"><span
                                class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                        <li><a href="#"><img src="assets/images/insta_img8.jpg" alt="insta_img"><span
                                class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="middle_footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="shopping_info">
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <div class="icon_box icon_box_style2">
                                    <div class="box_icon">
                                        <i class="fas fa-truck"></i>
                                    </div>
                                    <div class="intro_desc">
                                        <h5>تحویل رایگان</h5>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="icon_box icon_box_style2">
                                    <div class="box_icon">
                                        <i class="fas fa-dollar-sign"></i>
                                    </div>
                                    <div class="intro_desc">
                                        <h5>30 روز ضمانت بازگشت</h5>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="icon_box icon_box_style2">
                                    <div class="box_icon">
                                        <i class="far fa-life-ring"></i>
                                    </div>
                                    <div class="intro_desc">
                                        <h5>27/4 پشتیبانی آنلاین</h5>
                                        <p>لورم ایپسوم متن ساختگی با تولید سادگی</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <p class="copyright m-lg-0 text-center">کپی رایت © 2019 همه حقوق محفوظ است </p>
                </div>
                <div class="col-lg-4 order-lg-first">
                    <ul class="list_none footer_payment text-center text-lg-left">
                        <li><a href="#"><img src="assets/images/visa.png" alt="ویزا"></a></li>
                        <li><a href="#"><img src="assets/images/discover.png" alt="كشف كردن"></a></li>
                        <li><a href="#"><img src="assets/images/master_card.png" alt="مستر کارت"></a></li>
                        <li><a href="#"><img src="assets/images/paypal.png" alt="پی پال"></a></li>
                        <li><a href="#"><img src="assets/images/amarican_express.png" alt="amarican_express"></a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <ul class="list_none social_icons radius_social text-center text-lg-right">
                        <li><a href="#" class="sc_facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="sc_twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="sc_google"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#" class="sc_instagram"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" class="sc_pinterest"><i class="fab fa-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="overlap_shape">
        <div class="ol_shape21">
            <div class="animation">
                <img data-parallax="{&quot;y&quot;: 20, &quot;smoothness&quot;: 20}" src="assets/images/shape36.png"
                     alt="شکل 36">
            </div>
        </div>
        <div class="ol_shape22">
            <div class="animation">
                <img data-parallax="{&quot;y&quot;: 20, &quot;smoothness&quot;: 20}" src="assets/images/shape37.png"
                     alt="شکل 37">
            </div>
        </div>
        <div class="ol_shape23">
            <div class="animation">
                <img data-parallax="{&quot;y&quot;: 20, &quot;smoothness&quot;: 20}" src="assets/images/shape38.png"
                     alt="شکل 38">
            </div>
        </div>
        <div class="ol_shape24">
            <div class="animation">
                <img data-parallax="{&quot;y&quot;: 20, &quot;smoothness&quot;: 20}" src="assets/images/shape39.png"
                     alt="شکل 39">
            </div>
        </div>
    </div>
</footer>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="box_quick_view">
          <div class="row">
            <div class="col-md-6">
              <div class="product-image">
              	 <span class="pr_flash bg_green">فروش</span>
                 <img id="product_img" src='assets/images/product1.jpg' data-zoom-image="assets/images/product1.jpg"/>
                 <div id="pr_item_gallery" class="product_gallery_item owl-thumbs-slider owl-carousel owl-theme">
                    <div class="item">
                        <a href="#" class="active" data-image="assets/images/product1.jpg" data-zoom-image="assets/images/product1.jpg">
                            <img src="assets/images/product_img1.jpg" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" data-image="assets/images/product1-1.jpg" data-zoom-image="assets/images/product1-1.jpg">
                            <img src="assets/images/product_img1-1.jpg" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" data-image="assets/images/product1-2.jpg" data-zoom-image="assets/images/product1-2.jpg">
                            <img src="assets/images/product_img1-2.jpg" />
                        </a>
                    </div>
                    <div class="item">
                        <a href="#" data-image="assets/images/product1-3.jpg" data-zoom-image="assets/images/product1-3.jpg">
                            <img src="assets/images/product_img1-3.jpg" />
                        </a>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
                <div class="pr_detail">
                  <div class="product-description">
                    <div class="product-title">
                      <h4><a href="#">توت فرنگی ارگانیک تاز</a></h4>
                    </div>
                    <div class="product_price float-left">
                        <span class="price">3500 تومان</span>
                    </div>
                    <div class="rating mt-2 float-right"><div class="product_rate" style="width:80%"></div></div>
                    <div class="clearfix"></div>
                    <hr />
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                  </div>
                  <hr />
                  <div class="cart_extra">
                    <div class="cart-product-quantity">
                      <div class="quantity">
                        <input type="button" value="-" class="minus">
                        <input type="text" step="1" min="1" name="quantity" value="1" title="Qty" class="qty" size="4">
                        <input type="button" value="+" class="plus">
                      </div>
                    </div>
                    <div class="cart_btn">
                        <button class="btn btn-default btn-radius btn-sm btn-addtocart" type="button"> افزودن به سبد خرید</button>
                        <a class="add_wishlist" href="#"><i class="ti-heart"></i></a>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <hr />
                  <ul class="product-meta list_none">
                    <li>دسته بندی: <a href="#">میوه تازه</a>, <a href="#">میوه</a></li>
                    <li>برچسب :<a href="#" rel="tag">میو ها</a>, <a href="#" rel="tag">طبیعی</a>, <a href="#" rel="tag">ارگانیک</a> </li>
                  </ul>
                  <div class="product_share d-block d-sm-flex align-items-center">
                    <span>اشتراک با :</span>
                      <ul class="list_none social_icons border_social rounded_social">
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                      </ul>
                  </div>
                </div>
            </div>
        </div>
    </div>
    </div>
  </div>
</div>
<!-- END FOOTER -->
<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>
<!-- Latest jQuery -->
<script src="assets/js/jquery-1.12.4.min.js"></script>
<!-- jquery-ui -->
<script src="assets/js/jquery-ui.js"></script>
<!-- popper min js -->
<script src="assets/js/popper.min.js"></script>
<!-- Latest compiled and minified Bootstrap -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- owl-carousel min js  -->
<script src="assets/owlcarousel/js/owl.carousel.min.js"></script>
<!-- magnific-popup min js  -->
<script src="assets/js/magnific-popup.min.js"></script>
<!-- waypoints min js  -->
<script src="assets/js/waypoints.min.js"></script>
<!-- parallax js  -->
<script src="assets/js/parallax.js"></script>
<!-- jquery dd js  -->
<script src="assets/js/jquery.dd.min.js"></script>
<!-- countdown js  -->
<script src="assets/js/jquery.countdown.min.js"></script>
<!-- jquery.counterup.min js -->
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- jquery.parallax-scroll js -->
<script src="assets/js/jquery.parallax-scroll.js"></script>
<!-- elevatezoom js -->
<script src="assets/js/jquery.elevatezoom.js"></script>
<!-- fit video  -->
<script src="assets/js/jquery.fitvids.js"></script>
<!-- imagesloaded js -->
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<!-- isotope min js -->
<script src="assets/js/isotope.min.js"></script>
<!-- cookie js -->
<script src="assets/js/js.cookie.js"></script>
<!-- scripts js -->
<script src="assets/js/scripts.js"></script>
</body>
</html>
