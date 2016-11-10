<?php
/**
 * Created by PhpStorm.
 * User: omidkhosrojerdi
 * Date: 10/14/2016 AD
 * Time: 21:46
 */

?>
<!DOCTYPE html>
<html lang="<?php echo LANG; ?>">
<!-- Page Head -->
<?php include_once(LOCAL_PATH . "includes/head.php"); ?>

<body class="<?php echo DEFAULT_THEME; ?>">
<!-- Page Loader Overlay -->
<?php include_once(LOCAL_PATH . "includes/pageOverlay.php"); ?>

<!-- Header of Site -->
<?php include_once(LOCAL_PATH . "includes/header.php"); ?>

<!-- body content for change data when user change page -->
<div class="body-content">
    <!-- box content -->
    <div class="box bg-white products center-block wow <?php echo (LANG == "fa") ? "fadeInRight" : "fadeInLeft" ?>"
         data-wow-duration="1s" data-wow-delay=".3s">
        <div class="banner-container wow fadeIn" data-wow-duration="1s" data-wow-delay=".7s">
            <img src="<?php echo DOMAIN_URL; ?>assets/images/products/optimarin/optimarin-banner.jpg"
                 alt="Optimarin banner">
            <h1 class="page_title products <?php echo (LANG == "fa") ? "rtl" : "ltr" ?>"><span>OPTIMARIN</span></h1>
        </div>
        <div class="content">
            <nav class="belowNav navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button id="menuHolderBtn" type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#menuHolder" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="menuHolder">
                    <ul class="nav navbar-nav <?php echo (LANG == "fa") ? "navbar-right" : "navbar-left" ?>">
                        <li class="wow fadeIn <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"
                            data-wow-duration="1s" data-wow-delay="1s">
                            <a class="subItem" href="<?php echo DOMAIN_URL; ?>page/principal_company/optimarin/"
                               data-word="about_us">
                                <span><?php echo ABOUT; ?></span>
                            </a>
                        </li>
                        <li class="wow fadeIn active <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"
                            data-wow-duration="1s" data-wow-delay="1.2s">
                            <a class="subItem"
                               href="<?php echo DOMAIN_URL; ?>page/principal_company/optimarin/products.php"
                               data-word="products">
                                <span><?php echo PRODUCTS; ?></span>
                            </a>
                        </li>
                        <li class="wow fadeIn <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"
                            data-wow-duration="1s" data-wow-delay="1.4s">
                            <a class="subItem"
                               href="<?php echo DOMAIN_URL; ?>page/principal_company/optimarin/regulation.php"
                               data-word="REGULATION">
                                <span><?php echo REGULATION; ?></span>
                            </a>
                        </li>
                        <li class="wow fadeIn <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"
                            data-wow-duration="1s" data-wow-delay="1.6s">
                            <a class="subItem"
                               href="<?php echo DOMAIN_URL; ?>page/principal_company/optimarin/references.php"
                               data-word="references">
                                <span><?php echo REFERENCES; ?></span>
                            </a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
            <div class="row">
                <div class="col-xs-12 colsm-12 col-md-12 itemContent">
                    <h3 class="text-center" data-word="products"><span><?php echo PRODUCTS; ?></span></h3>

                    <br>

                    <div>

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a class="<?php echo (LANG == "fa") ? "rtl" : "ltr"; ?>" href="#ballastSystem" aria-controls="ballastSystem" role="tab" data-toggle="tab">
                                    <?php echo (LANG == "fa") ? "سیستم بالاست OPTIMARIN" : "Optimarin Ballast System"; ?>
                                </a>
                            </li>
                            <li role="presentation">
                                <a class="<?php echo (LANG == "fa") ? "rtl" : "ltr"; ?>" href="#UVSystem" aria-controls="UVSystem" role="tab" data-toggle="tab">
                                    <?php echo (LANG == "fa") ? "سیستم UV" : "UV System"; ?>
                                </a>
                            </li>
                            <li role="presentation">
                                <a class="<?php echo (LANG == "fa") ? "rtl" : "ltr"; ?>" href="#Filters" aria-controls="Filters" role="tab" data-toggle="tab">
                                    <?php echo (LANG == "fa") ? "فیلترها" : "Filters"; ?>
                                </a>
                            </li>
                            <li role="presentation">
                                <a class="<?php echo (LANG == "fa") ? "rtl" : "ltr"; ?>" href="#Control_System" aria-controls="Control_System" role="tab" data-toggle="tab">
                                    <?php echo (LANG == "fa") ? "سیستم کنترل" : "Control System"; ?>
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="ballastSystem">
                                <?php
                                if(LANG == "fa") {
                                ?>
                                <p class="rtl">
                                    سیستم بالاست OPTIMARIN تایید شده بر پایه کاری فیلتر کردن برای پیشگیری با استفاده از
                                    مقدار زیاد پرتوافکنی UV جهت غیر فعال کردن تمام ارگانیسم ها، ویروس ها و باکتری های
                                    دریایی بدون ایجاد تغییر در عملکرد عادی کشتی می باشد. آب در هنگام بالاست و دی بالاست
                                    در معرض امواج UV قرار می گیرد تا اثر دو جانبه UV را تضمین کند. لازم به ذکر است که آب
                                    بالاست تنها در طی مراحل بالاست فیلتر می شود.
                                    <br>
                                    <br>
                                    سیستم بالاست OPTIMARIN (OBS) یکی از چندین روش موجود است که در آن از مواد شیمیایی و
                                    تخریبگر محیط زیست در طول مراحل اجرایی و غربالگری استفاده نمی شود. این روش بر اساس
                                    این نظریه بنا شده است که سیستم مورد استفاده باید به لحاظ زیست محیطی بی خطر، ساده،
                                    تغییر پذیر با شرایط و همراه با نصب راحت باشد به طوری که بتواند بر روی کشتی های تازه
                                    ساخته شده و قدیمی عمل کند.
                                    <br>
                                    <br>
                                    OBS گواهی می کند که در انواع آب ها (آب شیرین، شور و آب دریا) عمل می کند.
                                    <br>
                                    <br>
                                    سیستم بالاست OPTIMARIN بر روی کشتی های موجود و کشتی های تازه ساخته شده به صورت بسیار
                                    ساده نصب می شود. سیستم کلی بسیار قابل تنظیم می باشد، اثر و وزن کمی دارد و مناسب مدل
                                    ها و سایز های متفاوت کشتی ها می باشد. OBS را می توان به شکل شاسی کامل یا راه حل
                                    بهینه شده، تحویل داد. این سیستم می تواند گستره ی بزرگی از ظرفیت های آب بالاست شده را
                                    در خود جای دهد و همچنین جریانی تا حدود 3.000 متر مکعب بر ساعت (و یا بالاتر بر حسب
                                    سفارش) را مدیریت کند.
                                    <br>
                                    <br>
                                    سیستم بالاست OPTIMARIN معمولاً در اتاق موتور یا پمپ و در نزدیکی پمپ های بالاست نصب
                                    می گردد. سیستم OBS را می توان در یک کانتینر بر روی یک شاسی و یا به صورت قطعات مجزا،
                                    که باعث نصب راحت تر در هر فضای محدودی می شود، تحویل داد. تجهیزات آن را می توان به
                                    صورت افقی و عمودی بر روی عرشه و یا به صورت آویزان زیر آن، در طول بدنه ی کشتی و یا در
                                    چندین محل مجزا نصب کرد. این سیستم نسبتاً وزن و صدای اضافه ای ندارد. OBS از هر متر
                                    مربع فضای اختصاص داده شده بهترین استفاده را می کند و به جای زیادی هم احتیاج ندارد،
                                    این نکته نشان می دهد که OBS به لحاظ مالی راه حلی با بازده مالی بالایی را می تواند
                                    ارائه دهد.
                                </p>
                                <?php
                                } else {
                                ?>
                                <p class="ltr">
                                    The type approved Optimarin Ballast System is based on filtration as pre-treatment
                                    and high doses of UV irradiation for inactivation of marine organisms, viruses and
                                    bacteria, without affecting the normal operation of the ship. Ballast water is UV
                                    treated both during ballasting and de-ballasting to ensure the dual UV effect.
                                    Ballast water is only filtered during ballasting.
                                    <br>
                                    <br>
                                    The OBS is one of very few treatment options that does not use or generate chemicals
                                    or biocides in its treatment or cleaning processes. It is based on the idea that
                                    such systems should be environmentally sound, simple, flexible and easy to install,
                                    and capable of operating on both newbuilds and existing vessels.
                                    <br>
                                    <br>
                                    The OBS is certified to operate in all salinities. (freshwater, brackish and
                                    seawater)
                                    <br>
                                    <br>
                                    The Optimarin Ballast System is easy to install on board existing ships (retrofit)
                                    as well as on newbuilds. The modulized system is very flexible, with a relatively
                                    small footprint and weight, and will fit vessels of all kinds and sizes. The OBS can
                                    be delivered as a complete skid or as a customized solution. It accommodates a wide
                                    range of ballast water capacities and can handle flows up to 3.000 m³/h (or higher
                                    upon request).
                                    <br>
                                    <br>
                                    Optimarin’s endeavours have also assured approval from a range of classification
                                    organizations, including Lloyd’s Register, Germanischer Lloyd, Bureau Veritas, MLIT
                                    Japan, Russian Maritime Register of Shipping and American Bureau of Shipping.
                                    <br>
                                    <br>
                                    The Optimarin Ballast System is normally installed in the pump or engine room and in
                                    close proximity to the ballast pumps. The OBS can be delivered in a container, on a
                                    skid or in separate pieces to allow for easy installation in most any available
                                    space. The equipment can be installed horizontally, vertically, on or suspended
                                    below deck, along the ship’s side or in several separate locations. It is relatively
                                    low weight and adds no extra noise. The OBS utilizes every square meter and does not
                                    require much space, this makes it a cost-efficient solution.
                                </p>
                                <?php
                                }
                                ?>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="UVSystem">
                                <p class="<?php echo (LANG == "fa") ? "rtl" : "ltr"; ?>">
                                    <?php
                                    if(LANG == "fa") {
                                    ?>
                                    <strong>
                                        سیستم UV بر پایه 20 سال تجربه در تزریق آب بر روی سکو های دریایی، بهبود آب برای کشت آبزیان و ماشین آلات آب شرب در نروژ گسترش یافته است. پرتو UV با توان بالا برای کشتن و غیر فعالسازی کامل ارگانیسم ها، باکتری ها و پاتوژن ها به عنوان عوامل بیماری زا در آب بالاست کاربری دارد.
                                    </strong>
                                    <?php
                                    } else {
                                    ?>
                                    <strong>
                                        The UV System was developed based on 20 years of experience in water injection
                                        on offshore platforms, water treatment for fish farming and drinking water
                                        plants in Norway.
                                    </strong>
                                    <?php
                                    }
                                    ?>
                                </p>
                                <ul class="<?php echo (LANG == "fa") ? "rtl" : "ltr"; ?>">
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        <?php
                                        if(LANG == "fa") {
                                        ?>
                                            نیاز به تنها یک لامپ UV در هر محفظه (محفظه ای با آهنگ جریان 167 متر مکعب بر ساعت)
                                        <?php
                                        } else {
                                        ?>
                                        One UV lamp per chamber (167 m3/h flow rate per chamber)
                                        <?php
                                        }
                                        ?>
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        <?php
                                        if(LANG == "fa") {
                                        ?>
                                            محفظه UV استاندارد شده، که به صورت موازی روی یک منیفلد تنها برای تولید جریان بیشتر نصب می شوند
                                        <?php
                                        } else {
                                        ?>
                                        Standardized UV chamber, installed in parallel on a single manifold for higher flows
                                        <?php
                                        }
                                        ?>
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        <?php
                                        if(LANG == "fa") {
                                        ?>
                                            بهینه شده برای کمترین نگهداری و سهولت در عملکرد
                                        <?php
                                        } else {
                                        ?>
                                        Optimized for minimum maintenance and ease of operation
                                        <?php
                                        }
                                        ?>
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        <?php
                                        if(LANG == "fa") {
                                        ?>
                                        سیستم نیازی به استفاده از مواد شوینده شیمیایی و جا به جایی قطعات نداشته و خود را تمیز می نماید
                                        <?php
                                        } else {
                                        ?>
                                        Self-cleaning, with no moving parts or need for chemical cleaning
                                        <?php
                                        }
                                        ?>
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        <?php
                                        if(LANG == "fa") {
                                        ?>
                                        وجود حسگر دما و UV در هر محفظه
                                        <?php
                                        } else {
                                        ?>
                                        UV and temperature sensor in each chamber
                                        <?php
                                        }
                                        ?>
                                        <br>
                                        <br>
                                    </li>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Filters">
                                <p class="<?php echo (LANG == "fa") ? "rtl" : "ltr"; ?>">
                                    <strong>
                                        <?php
                                        if(LANG == "fa") {
                                        ?>
                                        OPTIMARIN سه فیلتر 40 میکرونی متفاوت را پیشنهاد می دهد:
                                        <?php
                                        } else {
                                        ?>
                                        Optimarin offers three different 40 micron filters:
                                        <?php
                                        }
                                        ?>
                                    </strong>
                                    <br>
                                </p>
                                <ul class="<?php echo (LANG == "fa") ? "rtl" : "ltr"; ?>">
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        <?php
                                        if(LANG == "fa") {
                                        ?>
                                        فیلتر مدل سبد ایمن (Safe Basket)
                                        <?php
                                        } else {
                                        ?>
                                        FilterSafe basket type
                                        <?php
                                        }
                                        ?>
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        <?php
                                        if(LANG == "fa") {
                                        ?>
                                        فیلتر مدل شمع B & K
                                        <?php
                                        } else {
                                        ?>
                                        B&K candle type
                                        <?php
                                        }
                                        ?>
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        <?php
                                        if(LANG == "fa") {
                                        ?>
                                        فیلتر مدل فیلترکس (Filtrex)
                                        <?php
                                        } else {
                                        ?>
                                        Filtrex basket type filter
                                        <?php
                                        }
                                        ?>
                                        <br>
                                        <br>
                                    </li>
                                </ul>

                                <br>
                                <br>

                                <p class="<?php echo (LANG == "fa") ? "rtl" : "ltr"; ?>">
                                    <strong>
                                        <?php
                                        if(LANG == "fa") {
                                        ?>
                                            با این گستره از انواع فیلتر ها، OPTIMARIN موارد ذیل را پیشنهاد می دهد:
                                        <?php
                                        } else {
                                        ?>
                                            With our range of filters Optimarin can offer:
                                        <?php
                                        }
                                        ?>
                                    </strong>
                                    <br>
                                </p>
                                <ul class="<?php echo (LANG == "fa") ? "rtl" : "ltr"; ?>">
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        <?php
                                        if(LANG == "fa") {
                                        ?>
                                        سیفون باز گرداننده ی خودکار و خود شستوشو(Self-Cleaning)
                                        <?php
                                        } else {
                                        ?>
                                        Automatic back flushing and self-cleaning
                                        <?php
                                        }
                                        ?>
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        <?php
                                        if(LANG == "fa") {
                                        ?>
                                        دور ریز ذرات و ارگانیسم های بزرگ
                                        <?php
                                        } else {
                                        ?>
                                        Removal of large particles and organisms
                                        <?php
                                        }
                                        ?>
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        <?php
                                        if(LANG == "fa") {
                                        ?>
                                        اتلاف فشار پایین به اندازه ی BAR 0.5 – 0.1
                                        <?php
                                        } else {
                                        ?>
                                        Low pressure loss of only 0.1 – 0.5 BAR
                                        <?php
                                        }
                                        ?>
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        <?php
                                        if(LANG == "fa") {
                                        ?>
                                        نصب افقی و عمودی
                                        <?php
                                        } else {
                                        ?>
                                        Horizontal or vertical installation
                                        <?php
                                        }
                                        ?>
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        <?php
                                        if(LANG == "fa") {
                                        ?>
                                        سیستم بای پس هنگام تخلیه آب بالاست
                                        <?php
                                        } else {
                                        ?>
                                        Bypassed during de-ballasting
                                        <?php
                                        }
                                        ?>
                                        <br>
                                        <br>
                                    </li>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Control_System">
                                <p class="<?php echo (LANG == "fa") ? "rtl" : "ltr"; ?>">
                                    <strong>
                                        <?php
                                        if(LANG == "fa") {
                                        ?>
                                            سیستم کنترل بالاست اجازه ی عملکرد آسان به سیستم بالاست  OPTIMARINمی دهد.
                                        <?php
                                        } else {
                                        ?>
                                        The Ballast Control System allows easy operation of the Optimarin Ballast
                                        System.
                                        <?php
                                        }
                                        ?>
                                    </strong>
                                    <br>
                                </p>
                                <ul class="<?php echo (LANG == "fa") ? "rtl" : "ltr"; ?>">
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        <?php
                                        if(LANG == "fa") {
                                        ?>
                                        استفاده آسان از دستگاه به همراه صفحه لمسی
                                        <?php
                                        } else {
                                        ?>
                                        User-friendly interface with touch screen
                                        <?php
                                        }
                                        ?>
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        <?php
                                        if(LANG == "fa") {
                                        ?>
                                            کاربری آسان: با یک کلیک می توان هر عملیاتی را شروع کرد
                                        <?php
                                        } else {
                                        ?>
                                        Easy operation: on click only to start any operations
                                        <?php
                                        }
                                        ?>
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        <?php
                                        if(LANG == "fa") {
                                        ?>
                                            رابط برای همخوانی با سیستم یکپارچه خودکار کشتی
                                        <?php
                                        } else {
                                        ?>
                                        Interface with the ship’s integrated automation system
                                        <?php
                                        }
                                        ?>
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        <?php
                                        if(LANG == "fa") {
                                        ?>
                                            ثبت شده مطابق با ملزومات IMO
                                        <?php
                                        } else {
                                        ?>
                                        Logging in accordance with IMO requirements
                                        <?php
                                        }
                                        ?>
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        <?php
                                        if(LANG == "fa") {
                                        ?>
                                            دارای گزینه ی دریافت کننده ی سیگنال ها از پمپ و شیرهای بالاست
                                        <?php
                                        } else {
                                        ?>
                                        Option of receiving signals from ballast pumps and valves
                                        <?php
                                        }
                                        ?>
                                        <br>
                                        <br>
                                    </li>
                                    <li>
                                        <i class="fi flaticon-correct text-success"></i>
                                        <?php
                                        if(LANG == "fa") {
                                        ?>
                                            ویژگی های دیگر همچون یکپارچگی PMS، ثبت GPS و دستگاه حذف مازاد UV
                                        <?php
                                        } else {
                                        ?>
                                        Additional features as PMS integration, GPS logging and UV redundancy
                                        <?php
                                        }
                                        ?>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /body-content -->

<!-- Fullscreen Slider -->
<?php include_once(LOCAL_PATH . "includes/slider.php"); ?>

<!-- Footer of Site -->
<?php include_once(LOCAL_PATH . "includes/footer.php"); ?>

<!-- all js scripts -->
<?php include_once(LOCAL_PATH . "includes/scripts.php"); ?>

<script>
    $(function () {
        var $body = $('body'),
            $nav = $('nav');

        $nav.find('a').removeClass('active');
        $nav.find('[data-word="principal_company"]').addClass('active');

        $body.addClass('hugContent');
    });
</script>

</body>
</html>