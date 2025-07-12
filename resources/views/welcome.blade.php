<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tailor | Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('assets/img/logo/loder.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->
    <header>
        <!-- بداية الهيدر -->
        <div class="header-area header_area">
            <div class="main-header">
                <div class="header-bottom header-sticky">
                    <!-- الشعار -->
                    <div class="logo">
                        <a href="/">
                            <img src="{{ asset('assets/img/logo/logoTwo.png') }}" alt="الشعار"
                                style="height:60px; width:auto; object-fit:contain;">
                        </a>
                    </div>
                    <div class="header-left  d-flex f-right align-items-center">
                        <!-- القائمة الرئيسية -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="/">الرئيسية</a></li>
                                    <li><a href="/order">اطلب الان</a></li>
                                    {{-- <li><a href="#">الخدمات</a></li>
                                    <li><a href="blog.html">المدونة</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">المدونة</a></li>
                                            <li><a href="blog_details.html">تفاصيل المدونة</a></li>
                                            <li><a href="elements.html">عناصر</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">تواصل معنا</a></li> --}}
                                </ul>
                            </nav>
                        </div>
                        <!-- زر اليسار -->
                        <div class="header-right-btn f-right d-none d-lg-block ml-30">
                            <a href="https://wa.me/9647828982848" target="_blank" class="header-btn">
                                زرنا الآن
                            </a>
                        </div>
                    </div>
                    <!-- قائمة الجوال -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- نهاية الهيدر -->
    </header>
    <main>
        <!--? slider Area Start-->
        <div class="slider-area position-relative">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider position-relative hero-overly slider-height d-flex align-items-center"
                    data-background="{{ asset('assets/img/hero/h1_hero.png') }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="hero-caption text-right">
                                    <img class="rotateme" src="{{ asset('assets/img/hero/hero-icon.png') }}"
                                        alt="" data-animation="zoomIn" data-delay="1s">
                                    <h1 data-animation="fadeInLeft" data-delay=".4s">نفصللك بدلة التخرج عالكيف وبالستايل
                                        اللي يعجبك</h1>
                                    <p data-animation="fadeInLeft" data-delay=".6s">
                                        عدنا أحلى تصاميم وخامات مميزة لبدل التخرج، وتكدر تختار التصميم واللون اللي تريده
                                        وتفصلها حسب ذوقك، حتى تفرح وتتميز بيوم تخرجك وتبقى الذكرى حلوة
                                    </p>
                                    <!-- Hero Btn -->
                                    <a href="/order" class="btn" data-animation="fadeInLeft" data-delay=".8s"> اطلب
                                        الان</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Left img -->
                    <div class="hero-img">
                        <img src="{{ asset('assets/img/hero/h1_hero1.png') }}" alt=""
                            data-animation="fadeInRight" data-transition-duration="5s">
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider position-relative hero-overly slider-height d-flex align-items-center"
                    data-background="{{ asset('assets/img/hero/h1_hero.png') }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="hero-caption text-right">
                                    <img class="rotateme" src="{{ asset('assets/img/hero/hero-icon.png') }}"
                                        alt="" data-animation="zoomIn" data-delay="1s">
                                    <h1 data-animation="fadeInLeft" data-delay=".4s">نفصللك بدلة التخرج عالكيف
                                        وبالستايل اللي يعجبك</h1>
                                    <p data-animation="fadeInLeft" data-delay=".6s">
                                        خبرتنا بتفصيل بدل التخرج تضمنلك أحلى شكل وأجود خامة، وتكدر تختار كل التفاصيل
                                        بنفسك حتى تطلع بأحلى طلة يوم تخرجك وتخلي الذكرى مميزة.
                                    </p>
                                    <!-- Hero Btn -->
                                    <a href="#" class="btn" data-animation="fadeInLeft"
                                        data-delay=".8s">شوف خدماتنا</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Left img -->
                    <div class="hero-img">
                        <img src="{{ asset('assets/img/hero/h1_hero1.png') }}" alt=""
                            data-animation="fadeInRight" data-transition-duration="5s">
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? Clients Offers Start -->
        <div class="clients-area section-padding40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-offers mb-50 wow fadeInUp" data-wow-delay=".2s">
                            <div class="offers-img">
                                <img src="{{ asset('assets/img/gallery/offers1.png') }}" alt="">
                            </div>
                            <div class="offers-cap ">
                                <span>1</span>
                                <h3><a href="#">تفصيل بدل تخرج</a></h3>
                                <p>نصمم لك بدلة تخرج حسب ذوقك وبأفضل الخامات، لتظهر بأجمل إطلالة في يوم تخرجك وتحتفظ
                                    بذكرى مميزة.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-offers mb-50 wow fadeInUp" data-wow-delay=".4s">
                            <div class="offers-img">
                                <img src="{{ asset('assets/img/gallery/offers2.png') }}" alt="">
                            </div>
                            <div class="offers-cap">
                                <span>2</span>
                                <h3><a href="#">أخذ المقاسات</a></h3>
                                <p>نأخذ مقاساتك بدقة لضمان أن بدلة التخرج تناسبك تماماً وتمنحك الراحة والثقة في يومك
                                    المميز.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-offers mb-50 wow fadeInUp" data-wow-delay=".6s">
                            <div class="offers-img">
                                <img src="{{ asset('assets/img/gallery/offers3.png') }}" alt="">
                            </div>
                            <div class="offers-cap">
                                <span>3</span>
                                <h3><a href="#">بدل جاهزة</a></h3>
                                <p>نوفر بدل تخرج جاهزة بتصاميم عصرية وألوان متنوعة لتختار منها ما يناسبك بسهولة وسرعة.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Clients Offers End -->
        <!--? Visit Our Tailor Start -->
        <section class="visit-tailor-area fix">
            <!--Right Contents  -->
            <div class="tailor-offers"></div>
            <!-- left Contents -->
            <div class="tailor-details" style="direction: rtl; text-align: right;">
                <h2>من نحن<br><span style="font-size:22px;color:#bfa67a;">محل تفصيل</span></h2>
                <p class="pera-top">نحن متخصصون في تصميم وتفصيل بدل التخرج بأحدث التصاميم وأجود الخامات.</p>
                <p class="pera-bottom">نقدم لك خدمة تفصيل بدلتك حسب رغبتك، مع الاهتمام بأدق التفاصيل لتظهر بأفضل إطلالة
                    في يوم تخرجك وتحتفظ بذكرى مميزة.</p>
                <a href="#" class="btn">اعرف المزيد عنا</a>
            </div>
        </section>
        <!-- Visit Our Tailor End -->

        <!--? Services Area Start -->
        <section class="categories-area section-padding40">
            <div class="container">
                <!-- section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-7 col-sm-9">
                        <div class="section-tittle text-center mb-60">
                            <h2>لماذا تختار خدماتنا؟</h2>
                            <p>نقدم لك أفضل تصاميم بدل التخرج بخامات عالية الجودة وتفصيل دقيق ليناسب ذوقك ويمنحك إطلالة
                                مميزة في يوم تخرجك.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6" style="direction: rtl; text-align: right;">
                        <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="cat-icon">
                                <img src="{{ asset('assets/img/icon/services1.svg') }}" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5>تصاميم عصرية</h5>
                                <p>نوفر لك أحدث التصاميم لتختار منها ما يناسب شخصيتك ويعكس ذوقك الخاص في يوم التخرج،
                                    وفريقنا يتابع أحدث صيحات الموضة ليضمن لك إطلالة مميزة تواكب العصر.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6" style="direction: rtl; text-align: right;">
                        <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="cat-icon">
                                <img src="{{ asset('assets/img/icon/services2.svg') }}" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5>خامات ممتازة</h5>
                                <p>نستخدم أفضل أنواع الأقمشة لنضمن لك الجودة العالية في كل بدلة تخرج نصممها لك، ونحرص
                                    على اختيار خامات متينة وناعمة تمنحك إحساساً بالفخامة والثقة في كل لحظة.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6" style="direction: rtl; text-align: right;">
                        <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="cat-icon">
                                <img src="{{ asset('assets/img/icon/services3.svg') }}" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5>تفصيل حسب الطلب</h5>
                                <p>نأخذ مقاساتك بدقة وننفذ كل التفاصيل التي ترغب بها لتكون البدلة مناسبة تماماً لك،
                                    ويمكنك اختيار الألوان والإضافات الخاصة لتكون البدلة معبرة عن شخصيتك وذوقك.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6" style="direction: rtl; text-align: right;">
                        <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                            <div class="cat-icon">
                                <img src="{{ asset('assets/img/icon/services4.svg') }}" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5>خدمة سريعة وموثوقة</h5>
                                <p>نلتزم بتسليم بدلتك في الوقت المحدد مع ضمان الجودة والاهتمام بأدق التفاصيل، وفريقنا
                                    جاهز دائماً للرد على استفساراتك وتلبية طلباتك بسرعة واحترافية.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--? Services Area End -->
        <!--? video_start -->
        <div class="video-area section-bg2 d-flex align-items-center"
            data-background="{{ asset('assets/img/gallery/video-bg.png') }}">
            <div class="container">
                <div class="video-wrap position-relative">
                    <!-- Video icon -->
                    <div class="video-icon">
                        <a class="popup-video btn-icon" href="{{ asset('assets/img/gallery/one.mp4') }}">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- video_end -->


        <!--? instagram-social start -->
        <section class="instagram-area fix pb-bottom mt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10">
                        <div class="section-tittle text-center mb-80">
                            <h2>تابعنا على إنستجرام وفيسبوك</h2>
                            <p> ! نشارك أحدث تصاميم بدل التخرج وصور العملاء على صفحاتنا. تابعنا ليصلك كل جديد</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-instagram mb-30">
                            <img src="{{ asset('assets/img/gallery/three.jpg') }}" alt="">
                            <a href="https://www.instagram.com/makook.iq?igsh=MXZybXRqZXc5dTFoZQ==" target="_blank"><i
                                    class="ti-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-instagram">
                            <img src="{{ asset('assets/img/gallery/two.jpg') }}" alt="">
                            <a href="https://www.facebook.com/share/1LxyLm4PBx/" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- instagram-social End -->
    </main>
    <footer>
        <div class="footer-wrapper section-bg2 pl-60"
            data-background="{{ asset('assets/img/gallery/footer-bg.png') }}">
            <!-- Footer Start-->
            <div class=" footer-area footer-padding">
                <div class="container">
                    <div class="row justify-content-start">
                        <!-- الكلام واللنكات على الشمال -->
                        <div
                            class="col-xl-7 col-lg-12 col-md-12 col-sm-12 mt-4 mt-xl-0 d-flex align-items-center justify-content-center order-3 order-xl-1">
                            <div class="map-area w-100" style="">
                                <iframe src="https://www.google.com/maps?q=Najaf,Iraq&hl=ar&z=13&output=embed"
                                    width="100%" height="340" frameborder="0" style="border:0;max-width:100%;"
                                    allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 order-1 order-xl-1">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo mb-3">
                                        <a href="/"
                                            style="font-size: 3rem; font-weight: bold; color: #bfa67a; text-decoration: none;">Makook</a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p>نحن متخصصون في تفصيل بدل التخرج بأفضل الخامات وأحدث التصاميم.</p>
                                        </div>
                                        <ul class="mb-40">
                                            <li class="number"><a href="#">(964) 782-898-2848 </a></li>
                                            <li class="number2"><a href="#">(964) 782-898-2848</a></li>
                                        </ul>
                                    </div>
                                    <!-- social -->
                                    <div class="footer-social">
                                        <a href="https://www.instagram.com/makook.iq?igsh=MXZybXRqZXc5dTFoZQ=="><i
                                                class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        <a href="https://www.facebook.com/share/1LxyLm4PBx/"><i
                                                class="fab fa-facebook-f"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6 order-2 order-xl-1">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>روابط سريعة</h4>
                                    <ul>
                                        <li><a href="#">الرئيسية</a></li>
                                        <li><a href="#">من نحن</a></li>
                                        <li><a href="#">الخدمات</a></li>
                                        <li><a href="#">المدونة</a></li>
                                        <li><a href="#">تواصل معنا</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- footer-bottom area -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p>
                                        جميع الحقوق محفوظة &copy;
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script>
                                        | تم التصميم بواسطة <a href="http://starplus.agency/"
                                            target="_blank">starplus</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End-->
        </div>
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/animated.headline.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/gijgo.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.barfiller.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/hover-direction-snake.min.js') }}"></script>
    <script src="{{ asset('assets/js/contact.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.form.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/mail-script.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>


</body>

</html>
