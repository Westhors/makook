<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>طلب تصميم دفعه |  تيلور تيمبلت</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Tajawal', sans-serif;
        }

        .form-section {
            background: #fff;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }

        .form-title {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            border-bottom: 2px solid #ccc;
            padding-bottom: .5rem;
        }

        .footer-bottom-area .footer-border {
            padding-top: 20px !important;
            /* padding-bottom: 1px; */
        }

        .robe-card {
            transition: all 0.3s ease-in-out;
        }

        .robe-option.selected .robe-card {
            border: 2px solid #bfa67a;
            box-shadow: 0 0 10px rgba(191, 166, 122, 0.4);
            background-color: #f9f5ef;
        }

        .hood-card.selected {
            border: 2px solid #bfa67a;
            box-shadow: 0 0 10px rgba(191, 166, 122, 0.4);
            background-color: #fdf8f1;
        }

        .scarf-card.selected {
            border: 2px solid #bfa67a;
            box-shadow: 0 0 10px rgba(191, 166, 122, 0.4);
            background-color: #fdf8f1;
        }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">

    <!-- CSS here -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- FilePond CSS -->
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
        rel="stylesheet" />

    <!-- ملف FilePond CSS -->
    <link href="https://unpkg.com/filepond/dist/filepond.min.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css"
        rel="stylesheet">

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
                                    {{-- <li><a href="about.html">اطلب</a></li>
                                    <li><a href="#">الخدمات</a></li>
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
    </header>

    <main>
        <!--? slider Area Start-->
        <div class="slider-area position-relative">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider position-relative hero-overly slider-height2  d-flex align-items-center"
                    data-background="assets/img/hero/h1_hero.png">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="hero-caption hero-caption2">
                                    <img src="assets/img/hero/hero-icon.png" alt="" data-animation="zoomIn"
                                        data-delay="1s">
                                    <h2 data-animation="fadeInLeft" data-delay=".4s">اطلب الان</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Left img -->
                    <div class="hero-img hero-img2">
                        <img src="assets/img/hero/h2_hero2.png" alt="" data-animation="fadeInRight"
                            data-transition-duration="5s">
                    </div>
                </div>
            </div>
        </div>


    </main>
    <div class="container py-5">

        <div class="d-flex gap-2 mt-3">
            <a href="{{ route('design.apply') }}" class="btn btn-primary w-50 py-2">تصميم فردي</a>
            <a href="{{ route('order.group') }}" class="btn btn-primary w-50 py-2">طلب دفعة</a>
        </div>

        <form method="POST" action="{{ route('design.store') }}" enctype="multipart/form-data"
            style="direction: rtl; text-align: right;">


            @csrf

            @if ($errors->any())
                <div class="alert
            alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="form-section">
                <div class="form-title">طلب دفعة</div>
                <div class="row">

                    <input type="hidden" value="batch" name="design_type" class="form-control" required>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">اسم العميل</label>
                        <input type="text" name="name_customer" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">اسم الجامعه</label>
                        <input type="text" name="university_name" class="form-control" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">القسم</label>
                        <input type="text" name="department" class="form-control" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">رقم الدفعه</label>
                        <input type="text" name="batch_number" class="form-control" required>
                    </div>


                    <div class="col-md-4 mb-3">
                        <label class="form-label">رقم العميل</label>
                        <input type="text" name="phone_number" class="form-control" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label class="form-label">عرض الكتف</label>
                        <input type="number" name="shoulder_width" step="0.01" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">طول الذراع</label>
                        <input type="number" name="arm_length" step="0.01" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">الطول الكلي</label>
                        <input type="number" name="total_length" step="0.01" class="form-control" required>
                    </div>

                </div>
            </div>

            <div class="form-section">
                <div class="form-title">الروب</div>

                <div class="mb-3">
                    <label class="form-label d-block">اختر روب من الصور</label>
                    <div class="row">
                        @foreach ($robes as $robe)
                            <div class="col-6 col-md-3 mb-3">
                                <label class="d-block text-center robe-option" style="cursor:pointer;">
                                    <input type="checkbox" name="robe_id" value="{{ $robe->id }}"
                                        class="d-none robe-checkbox">
                                    <div class="border rounded p-2 robe-card h-100">
                                        <img src="{{ asset('storage/' . $robe->image) }}" alt="{{ $robe->name }}"
                                            class="img-fluid rounded mb-2"
                                            style="height:250px; width:100%; object-fit:cover;">
                                        <div>{{ $robe->name }}</div>
                                        <small class="text-muted">{{ $robe->price_university }} دينار </small>
                                    </div>
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>





            </div>


            <div class="form-section">
                <div class="form-title">القبعة</div>
                <div class="form-section">
                    <div class="form-title">القبعة</div>
                    <div class="mb-3">
                        <label class="form-label d-block">اختر قبعة جاهزة</label>
                        <div class="row">
                            @foreach ($hoods as $hood)
                                <div class="col-6 col-md-3 mb-3">
                                    <label class="d-block text-center hood-option" style="cursor:pointer;">
                                        <input type="radio" name="hood_id" value="{{ $hood->id }}"
                                            class="d-none">
                                        <div class="border rounded p-2 hood-card h-100"
                                            data-id="{{ $hood->id }}">
                                            <img src="{{ asset('storage/' . $hood->image) }}"
                                                alt="{{ $hood->name }}" class="img-fluid rounded mb-2"
                                                style="height:250px; width:100%; object-fit:cover;">
                                            <div>{{ $hood->name }}</div>
                                            <small class="text-muted">{{ $hood->price_university }} دينار </small>
                                        </div>
                                    </label>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>


                <div class="row mt-4">


                    <div class="col-md-4 mb-3">
                        <label class="form-label">مكان التطريز</label>
                        <div>
                            <label class="me-2">
                                <input type="radio" name="hood_direction" value="top"
                                    class="hood-direction-radio"> في الأعلى
                            </label>
                            <label class="me-2">
                                <input type="radio" name="hood_direction" value="side"
                                    class="hood-direction-radio"> على الجانب
                            </label>
                            <label class="me-2">
                                <input type="radio" name="hood_direction" value="both"
                                    class="hood-direction-radio"> كلاهما
                            </label>
                        </div>
                    </div>
                    <div class="col-md-8 mb-3">
                        <label class="form-label">مكان التطريز (صورة)</label>
                        <input type="file" name="hood_direction_color_image" class="form-control">
                    </div>


                    <div class="col-md-12 mb-12">
                        <label class="form-label">عبارة على القبعة</label>
                        <input type="text" name="hood_text" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-section">
                <div class="form-title">الوشاح</div>
                <div class="form-section">
                    <div class="form-title">الوشاح</div>
                    <div class="row">
                        @foreach ($scarves as $scarf)
                            <div class="col-6 col-md-3 mb-3">
                                <label class="d-block text-center scarf-option" style="cursor:pointer;">
                                    <input type="radio" name="scarf_id" value="{{ $scarf->id }}"
                                        class="d-none">
                                    <div class="border rounded p-2 scarf-card h-100" data-id="{{ $scarf->id }}">
                                        <img src="{{ asset('storage/' . $scarf->image) }}" alt="{{ $scarf->name }}"
                                            class="img-fluid rounded mb-2"
                                            style="height:250px; width:100%; object-fit:cover;">
                                        <div>{{ $scarf->name }}</div>
                                        <small class="text-muted">{{ $scarf->price_university }} دينار </small>
                                    </div>
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>


                <div class="mb-3">
                    <label class="form-label">ارفع شعار</label>
                    <input type="file" name="scarf_logo" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">لون الوشاح (صورة)</label>
                    <input type="file" name="scarf_color_image" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">عبارات على الوشاح</label>
                    <textarea name="scarf_text" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">مكان العبارات</label>
                    <select name="scarf_position" class="form-select">
                        <option value="">-- اختر --</option>
                        <option value="right">الجهة اليمنى</option>
                        <option value="left">الجهة اليسرى</option>
                        <option value="back">الخلفية</option>
                    </select>
                </div>
                <div class="form-section">
                    <div class="form-title">أماكن التطريز على الوشاح</div>

                    <div class="form-check">
                        <input class="form-check-input scarf-embroidery" type="checkbox" value="right"
                            id="scarfEmbroideryRight" name="scarf_embroidery[]">
                        <label class="form-check-label" for="scarfEmbroideryRight">
                            الجهة اليمنى (مجانًا ضمن السعر الأساسي)
                        </label>
                        <input type="file" name="scarf_embroidery_image_right" class="form-control mt-2">
                    </div>

                    <div class="form-check mt-3">
                        <input class="form-check-input scarf-embroidery" type="checkbox" value="left"
                            id="scarfEmbroideryLeft" name="scarf_embroidery[]">
                        <label class="form-check-label" for="scarfEmbroideryLeft">
                            الجهة اليسرى (مجانًا ضمن السعر الأساسي)
                        </label>
                        <input type="file" name="scarf_embroidery_image_left" class="form-control mt-2">
                    </div>

                    <div class="form-check mt-3">
                        <input class="form-check-input scarf-embroidery" type="checkbox" value="back"
                            id="scarfEmbroideryBack" name="scarf_embroidery[]">
                        <label class="form-check-label" for="scarfEmbroideryBack">
                            الجهة الخلفية (إضافة 5.000 دينار عند اختيارها)
                        </label>
                        <input type="file" name="scarf_embroidery_image_back" class="form-control mt-2">
                    </div>
                </div>
            </div>
            <!-- الأسعار -->
            <div class="text-end ms-auto" style="direction: rtl; text-align: right; max-width: 500px;">
                <h5>تفاصيل الأسعار:</h5>

                <div><strong>سعر الروب:</strong> <span id="robePriceText">سيتم تحديد السعر بعد المراجعة</span></div>
                <hr>

                <div><strong>سعر القبعة:</strong> <span id="hoodPriceText">سيتم تحديد السعر بعد المراجعة</span></div>
                <hr>

                <div><strong>سعر الوشاح:</strong> <span id="scarfPriceText">سيتم تحديد السعر بعد المراجعة</span></div>
                <hr>

                <div><strong>سعر مكان تطريز القبعات:</strong> <span id="hoodDirectionPriceText">0.00 دينار</span></div>
                <div><strong>سعر التطريز الخلفي للوشاح:</strong> <span id="scarfBackEmbroideryPriceText">0.00
                        دينار</span></div>
                <hr>

                <h5><strong>السعر الإجمالي:</strong> <span id="totalPrice">0.00</span> دينار</h5>
            </div>


            <span id="hoodDirectionPriceText"></span>


            <button type="submit" class="btn btn-warning w-100 py-2">إرسال الطلب</button>
        </form>
    </div>
    <footer>
        <div class="footer-wrapper section-bg2 " data-background="{{ asset('assets/img/gallery/footer-bg.png') }}">

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
</body>
<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
<script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.min.js">
</script>

<!-- كود التفعيل بعد تحميل المكتبة -->
<script>
    let minRobePrice = {{ $minRobePrice ?? 0 }};

    // Register plugins
    FilePond.registerPlugin(
        FilePondPluginImagePreview,
        FilePondPluginFileValidateType
    );

    // استهداف كل حقول الصور في الفورم
    const inputs = document.querySelectorAll('input[type="file"]');
    inputs.forEach(input => {
        FilePond.create(input, {
            acceptedFileTypes: ['image/*'],
            allowMultiple: false,
            imagePreviewHeight: 320,
            labelIdle: `🚀 اسحب الصورة هنا أو اضغط للرفع`,
            storeAsFile: true,
        });
    });



    document.addEventListener('DOMContentLoaded', function() {
        updatePrice();

        document.querySelectorAll('.hood-direction-radio').forEach(radio => {
            radio.addEventListener('change', updatePrice);
        });

        document.querySelectorAll('input[name="robe_id"]').forEach(input => {
            input.addEventListener('change', updatePrice);
        });

        document.querySelectorAll('input[name="hood_id"]').forEach(input => {
            input.addEventListener('change', updatePrice);
        });

        document.querySelectorAll('input[name="scarf_id"]').forEach(input => {
            input.addEventListener('change', updatePrice);
        });
    });

    const robePrices = @json($robes->pluck('price', 'id'));
    const hoodPrices = @json($hoods->pluck('price', 'id'));
    const scarfPrices = @json($scarves->pluck('price', 'id'));

    function updatePrice() {
        let total = 0;

        const robeText = document.getElementById('robePriceText');
        const hoodText = document.getElementById('hoodPriceText');
        const scarfText = document.getElementById('scarfPriceText');
        const hoodDirectionPriceText = document.getElementById('hoodDirectionPriceText');
        const scarfBackEmbroideryPriceText = document.getElementById('scarfBackEmbroideryPriceText');

        let hoodDirectionPrice = 0;
        const selectedDirection = document.querySelector('input[name="hood_direction"]:checked')?.value;
        if (selectedDirection === 'top' || selectedDirection === 'side') {
            hoodDirectionPrice = 5.000;
        } else if (selectedDirection === 'both') {
            hoodDirectionPrice = 10.000;
        }
        hoodDirectionPriceText.innerText = hoodDirectionPrice.toFixed(2) + ' دينار';
        total += hoodDirectionPrice;

        const selectedRobe = document.querySelector('input[name="robe_id"]:checked');
        if (selectedRobe && robePrices[selectedRobe.value]) {
            const robePrice = parseFloat(robePrices[selectedRobe.value]);
            robeText.innerText = robePrice.toFixed(2) + ' دينار';
            total += robePrice;
        } else {
            robeText.innerText = 'سيتم تحديد السعر بعد المراجعة';
        }

        const selectedHood = document.querySelector('input[name="hood_id"]:checked');
        let hoodPrice = 0;
        if (selectedHood && hoodPrices[selectedHood.value]) {
            hoodPrice = parseFloat(hoodPrices[selectedHood.value]);
        }
        hoodText.innerText = hoodPrice > 0 ? hoodPrice.toFixed(2) + ' دينار' : 'سيتم تحديد السعر بعد المراجعة';
        total += hoodPrice;


        const selectedScarf = document.querySelector('input[name="scarf_id"]:checked');
        if (selectedScarf && scarfPrices[selectedScarf.value]) {
            const scarfPrice = parseFloat(scarfPrices[selectedScarf.value]);
            scarfText.innerText = scarfPrice.toFixed(2) + ' دينار';
            total += scarfPrice;
        } else {
            scarfText.innerText = 'سيتم تحديد السعر بعد المراجعة';
        }

        let scarfBackEmbroideryPrice = 0;
        const backEmbroidery = document.getElementById('scarfEmbroideryBack');
        if (backEmbroidery && backEmbroidery.checked) {
            scarfBackEmbroideryPrice = 5.000;
        }
        scarfBackEmbroideryPriceText.innerText = scarfBackEmbroideryPrice.toFixed(2) + ' دينار';
        total += scarfBackEmbroideryPrice;


        document.getElementById('totalPrice').innerText = total.toFixed(2);
    }

    // تحديث السعر الإجمالي

    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('customRobeImage').addEventListener('change', function() {
            if (this.files.length > 0) {
                // أقل سعر روب - يفضل تكون جايبها من الباك اند في JS
                const minRobePrice = 20; // عدله حسب السعر الفعلي
                const customRobePrice = (minRobePrice * 1.25).toFixed(2);

                // اعرض السعر في التكست
                document.getElementById('customRobePriceText').textContent = customRobePrice + ' دينار';
                // حطه في الانبوت
                document.getElementById('customRobePrice').value = customRobePrice;
            }
        });
    });

    // ربط التحديث على تغيير خيارات تطريز الوشاح
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.scarf-embroidery').forEach(checkbox => {
            checkbox.addEventListener('change', updatePrice);
        });

        // باقي الأحداث المعتادة
        document.querySelectorAll(
                '.hood-direction-radio, input[name="robe_id"], input[name="hood_id"], input[name="scarf_id"]')
            .forEach(input => {
                input.addEventListener('change', updatePrice);
            });
    });



    // عند تحميل الصفحة
    document.addEventListener('DOMContentLoaded', function() {
        const hoodDirectionSelect = document.getElementById('hoodDirection');
        if (hoodDirectionSelect) {
            hoodDirectionSelect.addEventListener('change', updatePrice);
        }
    });

    // اختيار الروب
    document.querySelectorAll('.robe-option').forEach(option => {
        option.addEventListener('click', function(e) {
            const checkbox = this.querySelector('input[type="checkbox"]');
            e.preventDefault();

            if (checkbox.checked) {
                checkbox.checked = false;
                this.classList.remove('selected');
                updatePrice();
            } else {
                checkbox.checked = true;
                this.classList.add('selected');

                document.querySelectorAll('.robe-option').forEach(other => {
                    if (other !== this) {
                        const otherCheckbox = other.querySelector('input[type="checkbox"]');
                        otherCheckbox.checked = false;
                        other.classList.remove('selected');
                    }
                });

                updatePrice();
            }
        });
    });

    // اختيار القبعة
    document.querySelectorAll('.hood-card').forEach(card => {
        card.addEventListener('click', function(e) {
            const input = this.closest('label').querySelector('input[type=radio]');
            e.preventDefault();

            if (input.checked) {
                input.checked = false;
                this.classList.remove('selected');
            } else {
                document.querySelectorAll('.hood-card').forEach(c => {
                    c.classList.remove('selected');
                    c.closest('label').querySelector('input[type=radio]').checked = false;
                });

                input.checked = true;
                this.classList.add('selected');
            }
            updatePrice();
        });
    });

    // اختيار الوشاح
    document.querySelectorAll('.scarf-card').forEach(card => {
        card.addEventListener('click', function(e) {
            const input = this.closest('label').querySelector('input[type=radio]');
            e.preventDefault();

            if (input.checked) {
                input.checked = false;
                this.classList.remove('selected');
            } else {
                document.querySelectorAll('.scarf-card').forEach(c => {
                    c.classList.remove('selected');
                    c.closest('label').querySelector('input[type=radio]').checked = false;
                });

                input.checked = true;
                this.classList.add('selected');
            }
            updatePrice();
        });
    });

    // تحديث السعر عند تغيير الاختيارات من الراديو مباشرة
    document.querySelectorAll('input[name="robe_id"]').forEach(input => {
        input.addEventListener('change', updatePrice);
    });

    document.querySelectorAll('input[name="hood_id"]').forEach(input => {
        input.addEventListener('change', updatePrice);
    });

    document.querySelectorAll('input[name="scarf_id"]').forEach(input => {
        input.addEventListener('change', updatePrice);
    });

    // تحديث السعر عند تغيير مكان التطريز
    document.getElementById('hoodDirection').addEventListener('change', updatePrice);
</script>

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

</html>
