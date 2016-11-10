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
                            data-wow-duration="1s" data-wow-delay="1s"><a class="subItem"
                                                                          href="<?php echo DOMAIN_URL; ?>page/principal_company/optimarin/"
                                                                          data-word="about_us"><span><?php echo ABOUT; ?></span></a>
                        </li>
                        <li class="wow fadeIn <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"
                            data-wow-duration="1s" data-wow-delay="1.2s"><a class="subItem"
                                                                            href="<?php echo DOMAIN_URL; ?>page/principal_company/optimarin/products.php"
                                                                            data-word="products"><span><?php echo PRODUCTS; ?></span></a>
                        </li>
                        <li class="wow fadeIn active <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"
                            data-wow-duration="1s" data-wow-delay="1.4s"><a class="subItem"
                                                                            href="<?php echo DOMAIN_URL; ?>page/principal_company/optimarin/regulation.php"
                                                                            data-word="REGULATION"><span><?php echo REGULATION; ?></span></a>
                        </li>
                        <li class="wow fadeIn <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>"
                            data-wow-duration="1s" data-wow-delay="1.6s"><a class="subItem"
                                                                            href="<?php echo DOMAIN_URL; ?>page/principal_company/optimarin/references.php"
                                                                            data-word="references"><span><?php echo REFERENCES; ?></span></a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
            <div class="row">
                <div class="col-xs-12 colsm-12 col-md-12 itemContent">
                    <h3 class="text-center" data-word="REGULATION"><span><?php echo REGULATION; ?></span></h3>

                    <br>

                    <div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a class="<?php echo (LANG == "fa") ? "rtl" : "ltr"; ?>" href="#IMO" aria-controls="IMO" role="tab" data-toggle="tab">
                                    IMO
                                </a>
                            </li>
                            <li role="presentation">
                                <a class="<?php echo (LANG == "fa") ? "rtl" : "ltr"; ?>" href="#uSCoastGuard" aria-controls="uSCoastGuard" role="tab" data-toggle="tab">
                                    <?php echo (LANG == "fa") ? "گارد ساحلی آمریکا (USCG)" : "US Coast Guard"; ?>
                                </a>
                            </li>
                            <li role="presentation">
                                <a class="<?php echo (LANG == "fa") ? "rtl" : "ltr"; ?>" href="#optimarinApprovals" aria-controls="optimarinApprovals" role="tab" data-toggle="tab">
                                    <?php echo (LANG == "fa") ? "مصوبه های OPTIMARIN" : "Optimarin Approvals"; ?>
                                </a>
                            </li>
                            <li role="presentation">
                                <a class="<?php echo (LANG == "fa") ? "rtl" : "ltr"; ?>" href="#invasiveSpecies" aria-controls="invasiveSpecies" role="tab" data-toggle="tab">
                                    <?php echo (LANG == "fa") ? "گونه های مهاجم" : "Invasive Species"; ?>
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="IMO">
                                <?php
                                if(LANG == "fa") {
                                ?>
                                <p class="<?php echo (LANG == "fa") ? "rtl" : "ltr"; ?>">
                                    <strong>
                                        استانداردهای جهانی IMO:
                                    </strong>
                                    <br>
                                توافق نامه بین المللی برای کنترل و مدیریت آب و پسماند بالاست کشتی ها توسط کنفرانس دیپلماتیک در IMO لندن در فوریه 2004 برگزار و تصویب گردید.
                                    <br>
                                    <br>
                                    <strong>
                                        وضعیت تصویب BWMC:
                                    </strong>
                                    <br>
                                برای اجرایی کردن توافق نامه ی مدیریت آب بالاست نیاز داریم تا 30 پرچم که نشان دهنده ی دست کم 35% از ظرفیت ناوگان جهانی می باشند، توافق نامه را تصویب کنند.
                                    <br>
                                در آوریل 2016، 51 کشور این توافق را تصویب کردند. این آمار 34.87% از کل گنجایش ناوگان بازرگانی دنیا را نشان می دهد.
                                    <a href="http://www.imo.org" target="_blank">www.imo.org (Status of conventions)</a>
                                    <br>
                                    <br>
                                    <strong>
                                        عملکرد استاندارد:
                                    </strong>
                                    <br>
                                    <br>
                                قانون D2 استاندارد عملکرد آب بالاست
                                    <br>
                                    <br>
                                کشتی هایی که مدیریت آب بالاست را مطابق با این مقررات انجام می دهند باید کمتر از 10 ارگانیسم قابل نمو در هر متر مکعب که ابعادی بزرگتر یا مساوی بزرگی 50 میکرومتر و کمتر از 10 ارگانیسم قابل نمو در میلی لیتر که کمتر از 50 میکرومتر هستند و بزرگتر مساوی 10 میکرومتردر حداقل ابعاد هستند را داشته باشند، و همچنین نمایشگر تخلیه میکروب ها نباید از حد تجمع مشخصی که در پاراگراف 2 مشخص شده بالاتر رود.
                                    <br>
                                    <br>
                                می بایست نمایشگر میکروبی برای استاندارد سلامتی انسان وجود داشته باشد:
                                    <br>
                                    <br>
                                کلر ویبریو توکسیکوجنیک (O1 و O139) با کمتر از 1 واحد تشکیل دهنده گروه (cfu) در 100 میلی لیتر و یا کمتر از 1 cfu در 1 گرم (وزن خیس) نمونه های زوپلانکتون،
                                    <br>
                                    <br>
                                کمتر از cfu 250 اشریشیا کولی در 100 میلی لیتر.
                                    <br>
                                    <br>
                                کمتر از cfu 100 اینتروکوکی روده ای در 100 میلی لیتر.
                                </p>
                                <?php
                                } else {
                                ?>
                                <p class="<?php echo (LANG == "fa") ? "rtl" : "ltr"; ?>">
                                    <strong>
                                        GLOBAL IMO STANDARDS
                                    </strong>
                                    <br>
                                    The International Convention for the Control and Management of Ships Ballast Water &
                                    Sediments was adopted by Diplomatic Conference at IMO in London, February 2004.
                                    <br>
                                    <br>
                                    <strong>
                                        STATUS RATIFICATION BWMC
                                    </strong>
                                    <br>
                                    In order for the Ballast Water Management Convention to enter into force it is
                                    required that 30 flag states, representing at least 35% of the world fleet
                                    tonnage ratifies the convention.
                                    <br>
                                    By April 2016, 51 states have ratified. This provides a total of 34.87% of the world’s merchant fleet tonnage
                                    <a href="http://www.imo.org" target="_blank">www.imo.org (Status of conventions)</a>
                                    <br>
                                    <br>
                                    <strong>
                                        PERFORMANCE STANDARD
                                    </strong>
                                    <br>
                                    <br>
                                    Regulation D2 Ballast Water Performance Standard
                                    <br>
                                    <br>
                                    1 Ships conducting Ballast Water Management in accordance with this regulation shall
                                    discharge less than 10 viable organisms per cubic metre greater than or equal to 50
                                    micrometres in minimum dimension and less than 10 viable organisms per milliliter
                                    less than 50 micrometres in minimum dimension and greater than or equal to 10
                                    micrometres in minimum dimension; and discharge of the indicator microbes shall not
                                    exceed the specified concentrations described in paragraph 2.
                                    <br>
                                    <br>
                                    2 Indicator microbes, as a human health standard, shall include:
                                    <br>
                                    <br>
                                    1 Toxicogenic Vibrio cholerae (O1 and O139) with less than 1 colony forming unit
                                    (cfu) per 100 milliliters or less than 1 cfu per 1 gram (wet weight) zooplankton
                                    samples
                                    <br>
                                    <br>
                                    2 Escherichia coli less than 250 cfu per 100 milliliters;
                                    <br>
                                    <br>
                                    3 Intestinal Enterococci less than 100 cfu per 100 milliliters.
                                </p>
                                <?php
                                }
                                ?>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="uSCoastGuard">
                                <?php
                                if(LANG == "fa") {
                                ?>
                                <p class="rtl">
                                    <strong>
                                        در مارچ 2012 گارد ساحلی آمریکا آخرین قانون مربوط به مدیریت آب بالاست برای کنترل گونه های غیر بومی در آب های آمریکا را منتشر کرد. در ژوئن همان سال قوانین 33CFR مربوط به  USCG بخش 151 و 46CFR بخش 162 در 21 ژوئن 2012 ملزم به عمل شد که هر سازه در حال ساخت از تاریخ 1 دسامبر 2013 و همچنین برای اولین تعمیر کشتی های در حال بهره برداری بعد از 2014 یا 2016 با توجه به ظرفیت آب بالاست، ملزم به اعمال قانون می باشند.
                                    </strong>
                                    <br>
                                    <br>
                                    به منظور اجرای برنامه ی بهبود سیستم آب بالاست مرتبط به تاریخ های قبل از 2015، گارد ساحلی آمریکا (USCG) موافقت سیستم مدیریت جایگزین (AMS) را برای برخی از سیستم های ثبت شده ی IMO از جمله OPTIMARIN معرفی نمود. کشتی هایی که سیستمشان به عنوان AMS نصب شده، پذیرفته شده اند برای پنج سال از زمان موافقت USCG مستثنی خواهند بود.
                                    <br>
                                    <br>
                                    درمورد روش درمان:
                                    <br>

                                    نیاز USCG به BWT مربوط به مرگ آنی میکرو ارگانیسم ها بعد از طی مراحل با استفاده از روش آزمایشی/شمارشی به نام CMFDA است که در آن نمونه را رنگ آمیزی می کنند و طی آن می توان مشخص کرد که آیا ارگانیسم ها بلافاصله بعد از عملیات از بین رفته اند یا نه.
                                    <br>
                                    <br>
                                    استاندارد غیر زنده ماندن: (پذیرفته شده توسط سازمان IMO) که ارگانیسم های غیر زیست پذیر را بعد از طی مراحل ذکر شده پس از طی مدت رشد 14-20 روزه ارائه می کند. به این روش آزمایشی MPM می گویند که توسط USCG ثبت نشده است. USCG یک پروژه در زمینه ی تحلیل روش MPM دارد اما به نظر می رسد که USCG به زودی اجازه ی ثبت را نخواهند داشت.
                                    <br>
                                    <br>
                                    به هر حال اگر USCG بخواهد روش های بررسی را تغییر دهد، نیازمند گزارش عمومی و انتقادات عمومی و همچنین ارائه ی قوانین تجدید نظر شده از طریق پروسه ی کامل قانون گذاری آمریکا باشد و ممکن است انجامش سالها به طول بینجامد.
                                </p>
                                <?php
                                } else {
                                ?>
                                <p class="ltr">
                                    <strong>
                                        In March 2012 the US Coast Guard published its final rule on Ballast Water
                                        Management for Control of Nonindigenous Species in Waters of the United States.
                                        And in June the same year the USCG Regulations 33 CFR Part 151 and 46 CFR Part
                                        162 entered into force on 21 June 2012, which apply to new builds constructed on
                                        or after 1st December 2013 as well as to existing ships by their first
                                        dry-docking after 2014 or 2016 depending on the ballast water capacity.
                                    </strong>
                                    <br>
                                    <br>
                                    In order to address the US implementation schedule for ballast water treatment
                                    systems for dates prior to 2015, the USCG introduced the Alternate Management System
                                    (AMS) acceptance for some IMO approved systems including Optimarin. Ships
                                    with systems accepted as AMS installed will be grandfathered for five years beyond
                                    their USCG compliance date.
                                    <br>
                                    <br>
                                    Regarding treatment; The USCG requirement of BWT is instant death after treatment
                                    using a test/counting method called CMFDA which is a staining method which can
                                    determine that the organisms are really dead immediately after treatment.
                                    <br>
                                    <br>
                                    The non-viability standard (acceptable under the IMO regime) which render the
                                    organism non-viable after treatment or dead after a grow-out period of 14-20 days.
                                    This test method is called MPM and is not approved by the USCG.  USCG has a project
                                    to analyse the MPM method but it does not look like they will allow this it any time
                                    soon.
                                    <br>
                                    <br>
                                    If USCG however do decide to change the test methods, it is a process that requires
                                    public hearing and public comments and submittal of the revised regulation through
                                    the proper US regulatory process and may take years to carry through.
                                </p>
                                <?php
                                }
                                ?>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="optimarinApprovals">
                                <?php
                                if(LANG == "fa") {
                                    ?>
                                <p class="rtl">
                                    <strong>
                                        بعد از سالها آزمایش و بررسی، گسترش و ثبت تکنولوژی های جدید، نهایتاً OPTIMARIN تایید کلاس را که در سال 2004 تایید شد، برای سیستم خلوصش در 2009 را با توجه به راهنمای 8 و قرارداد بین المللی کنترل و مدیریت آب بالاست کشتی ها و رسوبات در 2004 بدست آورده. سیستم بالاست OPTIMARIN از فناوری تایید شده ای استفاده می کند که مشخصاً فراتر از نیاز های دقیق تعیین شده در معاهده ی IMO می باشند. اما برای OPTIMARIN یک تصویب ساده کفایت نمی کند. ما با توجه به NS-EN ISO 9001:2008 & 14001:2004 عمل می کنیم و بر این باور هستیم که باید سیستم خالص کردن آب بالاست با بیشترین سازگاری با محیط زیست در دنیا را داشته باشیم.
                                    </strong>
                                    <br>
                                    <br>
                                    قوانین IMO شامل مفادی می باشد که سیستم های تایید شده نباید خطری برای پرسنل، محیط زیست و کشتی داشته باشند. همچنین باعث تخلیه ی کنترل نشده ای هم نشوند. ایمنی افرادی که سیستم را کنترل می کنند تامین گردیده و سیستم خودش را کنترل کرده تا از کارایی صحیح سیستم را تایید نماید.
                                    <br>
                                    <br>
                                    گواهینامه ی تایید کلاس DNV OPTIMARIN از سوی سازمان مدیریت دریانوردی نروژ صادر شده است. با توجه به اطلاعاتی که بیان شد، OPTIMARIN از طرف کمیسیون کشوری ایالت کالیفرنیا به عنوان شرکتی که پتانسیل برآورده کردن استاندارد هایشان را با بهترین فناوری در دسترس دارد، انتخاب گردیده است.
                                    <br>
                                    OBS به صورت گسترده در موسسه ی تحقیقات آب نروژ (NIVA) با توجه به راهنمای IMO-G8 مورد بررسی قرار گرفته است و نتایج بسیار عالی کسب کرده است.
                                    <br>
                                    همچنین تلاش OPTIMARIN تاییدیه ی گستره ای از سازمان های طبقه بندی شده را تضمین می کند که شامل ثبت LIoyd، Germanischer Lloyd، اداره ی Veritas، MLIT ژاپن، ثبت دریانوردی کشتیرانی روسیه و اداره ی کشتیرانی آمریکا می باشد.
                                    <br>
                                    <br>
                                    <strong>
                                        Certificates of approval :
                                    </strong>
                                    <br>
                                    <img class="center-block"
                                         src="<?php echo DOMAIN_URL; ?>assets/images/certificate_img.jpg"
                                         alt="Certificate of approval">
                                </p>
                                <?php
                                } else {
                                ?>
                                <p class="ltr">
                                    <strong>
                                        After several years of testing, developing and patenting new technology,
                                        Optimarin finally obtained type approval for its purification system in 2009 in
                                        accordance with Guideline 8 and the International Convention for the Control and
                                        Management of Ship’s Ballast Water and Sediments, 2004. The Optimarin Ballast
                                        System uses approved technology that significantly exceeds the stringent
                                        requirements set out in the IMO Convention. But for Optimarin it is not enough
                                        to simply be approved. We operate in accordance with NS-EN ISO 9001:2008 &
                                        14001:2004. And our vision is to have the most environmentally friendly ballast
                                        water purification system in the world.
                                    </strong>
                                    <br>
                                    <br>
                                    IMO’s regulations contain requirements that aproved systems shall not constitute a
                                    hazard to personell, the environment, the ship, or cause uncontrolled discharges.
                                    The system safeguards the people who handle it, and monitors itself to ensure that
                                    it is operating properly.
                                    <br>
                                    <br>
                                    Optimarin’s type approval certificate was issued by DNV on behalf of the Norwegian
                                    Maritime Directorate. Based on the information reviewed Optimarin has also been
                                    assessed by the California State Land Commission, which stated that Optimarin has
                                    the potential to meet their standard for Best Available Technologies.
                                    <br>
                                    The OBS has been extensively tested at the Norwegian Institute for Water Research
                                    (NIVA) in accordance with IMO’s G8 Guidelines – with excellent results.
                                    <br>
                                    Optimarin’s endeavours have also assured approval from a range of classification
                                    organizations, including Lloyd’s Register, Germanischer Lloyd, Bureau Veritas, MLIT
                                    Japan, Russian Maritime Register of Shipping and American Bureau of Shipping.
                                    <br>
                                    <br>
                                    <strong>
                                        Certificates of approval :
                                    </strong>
                                    <br>
                                    <img class="center-block"
                                         src="<?php echo DOMAIN_URL; ?>assets/images/certificate_img.jpg"
                                         alt="Certificate of approval">
                                </p>
                                <?php
                                }
                                ?>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="invasiveSpecies">
                                <?php
                                if(LANG == "fa") {
                                ?>
                                <p class="rtl">
                                    <strong>
                                        مسائل زیست محیطی
                                    </strong>
                                    <br>
                                    <br>
                                    ورود گونه های دریایی مهاجم به محیط زیست جدید توسط آب بالاست کشتی ها یا آن هایی که به بدنه ی کشتی ها و سایر حامل ها چسبیده اند به عنوان یکی از چهار تهدید بزرگ برای اقیانوس های زمین شناخته شده است. سه مورد دیگر عبارتند از آلودگی زیست دریا که ریشه در خشکی دارد، بهره برداری بیش از حد از منابع زنده ی دریایی و تغییر و تخریب فیزیکی زیستگاه دریا. صنعت کشتیرانی بیش از 80% کالاهای جهان و در حدود 3 تا 5 میلیارد تن آب بالاست را هر سال در اطراف جهان جا به جا می کند. چنین حجمی ممکن است هر سال در بین کشور ها و مناطق به صورت داخلی هم جا به جا شود. آب بالاست برای عملکرد ایمن و بهینه ی کشتی های مدرن کاملاً مورد نیاز است و تامین کننده ی پایداری و تعادل کشتی های تخلیه شده می باشد. به هر حال این مسئله می تواند تهدیدات جدی را در زمینه های اکولوژی، اقتصاد و سلامت بوجود آورد.
                                    <br>
                                    <br>
                                    یکی از مشکلات زیست محیطی جدی این است که آب بالاست دارای موجودات زنده ی دریایی باشد. هزاران گونه ی دریایی وجود دارد که می توانند بوسیله ی آب بالاست کشتی ها جا به جا شوند. این ها شامل باکتری ها، انواع میکروب ها، بی مهرگان کوچک و تخم ها، کیست ها و لاروهای گونه های مختلف می باشند. مشکل از این رو بدتر می شود که در حقیقت همه ی گونه های دریایی یک چرخه ی زندگی دارند که شامل مرحله یا مراحل پلانکتونی هم می باشند. حتی گونه های بالغی که به دلیل سایز بزرگشان و یا زندگی وابسته به بستر دریا احتمال کمتری دارند که در آب بالاست موجود باشند، هم ممکن است در طول دوران پلانکتونیشان منتقل شوند. در سده ی گذشته گونه های دریایی در اقیانوس ها به دلایل طبیعی پراکنده شده اند، که با چسبیدن به کشتی ها و زباله های روی آب پراکنده شده اند. جا به جا کننده های طبیعی مانند دما و منطقه ی زیستی از پراکندگی خیلی از گونه ها به نواحی خاص جلوگیری کرده است. همه ی اینها در طرح های طبیعی بیوجغرافیایی مشاهده شده در اقیانوس های امروزی تاثیر داشته اند. برای مثال، گودال جهانی منطقه ی استوا نواحی شمال و جنوب دمایی و مناطق آب سرد را از هم جدا می کند. این مسئله به بسیاری از گونه ها اجازه ی تکامل در مناطق ثانویه را به صورت کاملاً مستقلانه داده است که منجر به بیو-توزیع کاملا متفاوت دریایی بین شمال و جنوب شده است.در مناطق استوایی گونه ها با جا به جا کننده های یکسانی مواجه نیستند. این یک نمونه ای می باشد که بیو-توزیع دریایی نسبتاً همگن ناحیه ی بزرگ هندو-پاسیفیک را که سواحل شرقی آفریقا تا سواحل غربی آمریکا را در بر می گیرد.
                                    <br>
                                    <br>
                                    انسانها نیز از زمانی که در تاریخ قایقرانی را شروع کرده اند به این مسئله کمک کرده اند این کار با پخش کردن گونه هایی که به بدنه ی کشتی چسبیده بودند صورت گرفته است. با آغاز استفاده از آب به عنوان بالاست و با پیشرفت کشتی های بزرگتر و سریعتر که سفرهای دریایی را در زمان های کوتاه تری انجام می دهند و با در نظر گرفتن افزایش شتابدار بازار جهانی که به معنای کمتر شدن نقش عامل جا به جا کننده های طبیعی گونه ها در اقیانوس ها می باشد. به خصوص اینکه کشتی ها یک راه را برای رسوخ گونه های دریایی دمایی به مناطق استوایی و برخی از  تماشایی ترین ورود های مربوط به گونه های دمایی شمالی که به آب های جنوبی حمله می کنند و بالعکس را تولید می کنند.
                                    <br>
                                    <br>
                                    تخمین زده می شود که حداقل 7000 گونه ی متفاوت در مخازن بالاست کشتی ها  به گوشه و کنار دنیا برده می شوند. اکثریت بزرگی از گونه های دریایی که در آب بالاست حمل می شوند در طی سفر به دلیل چرخه های بارگیری و تخلیه ی بالاست و همچنین محیط خشن مخازن بالاست برای زندگی جانوران، از بین می روند. حتی برای آن دسته از موجوداتی که در طی سفر و بعد از تخلیه ی بالاست زنده می مانند احتمال زنده ماندن در شرایط زیست محیطی جدید، که شامل شکار و یا رقابت با گونه های بومی می شود، کاهش می یابد. به هر ترتیب وقتی همه ی فاکتورها مطبوع باشند، گونه ی وارد شده در محیط میزبان تولید مثل می کند که این مورد می تواند عامل بوجود آورنده ی تهاجم باشد. رقابت خارجی با گونه های بومی و رشد به نرخ آفت از دیگر عوامل تهاجم می باشند.
                                    <br>
                                    <br>
                                    نتیجه این خواهد شد که کل اکوسیستم تغییر خواهد کرد. در آمریکا صدف های اروپایی دو لبه موسوم به گورخر به بیش از 40% راههای آبی حمله کردند و نیاز به 750 میلیون دلار تا 1 میلیارد دلار هزینه برای کنترل جمعیت آن ها بین سالهای 1989 تا 2000 بود. در جنوب استرالیا آشنه های دریایی آسیایی  نواحی جدید را به سرعت مورد هجوم قرار دادند و جایگزین اجتماع های بومی کف دریا شدند. در دریای سیاه ماهی ژله ای پلانکتون خوار آمریکایی موسوم به مننیوپسیس لایدیی به جمعیتی بالغ بر 1 کیلو گرم جرم زیستی بر متر مربع رسیدند. این واقعه منجر به تهی شدن منابع پلانکتون بومی شد و آن هم منجر به اثرات ثانویه ای گردید که سقوط تجارت ماهی دریای سیاه را در پی داشت. در بسیاری از کشورها ورود موج جلبک های قرمز میکروسکوپی (دینوفلاژلات های سمی) که توسط حلزون های صدف خوار، مانند صدف های خوراکی، جذب شدند مشکل بوجود آورد. مصرف این صدف های آلوده توسط انسان ها می توانست منجر به معلولیت و حتی مرگ شود.
                                    <br>
                                    <br>
                                    صد ها مثال دیگر از این دست در اقسا نقاط جهان وجود دارد که منجر به تهدیدات جدی برای سلامت انسان ها و تاثیرات اقتصادی و اکولوژیکی در محیط زیست میزبان می شود.
                                    <br>
                                    <br>
                                    تهاجم گونه های دریایی یکی از چهار تهدید بزرگ برای اقیانوس های دنیا می باشد. بر خلاف دیگر آلاینده های دریایی مانند نشت نفت، که اقدامات بهبود دهنده برایشان می توان انجام داد و  محیط زیست را نهایتاً بازیافت کرد، تاثیرات هجوم گونه های دریایی اغلب غیر قابل بازگشت هستند.
                                    <br>
                                    <br>
                                    سازمان ملل معرفی و ورود گونه های اقیانوسی غیر بومی را یکی از چهار تهدید بزرگ برای محیط زیست دنیا معرفی کرده است. در هر لحظه حدود 35000 کشتی بر روی آب های زمین در حال جا به جایی هستند که بیش از 3000 گونه را در مخازن بالاست خود جا به جا می کنند. سازمان دریانوردی بین المللی سازمان ملل تخمین زده است که در حدود 10 میلیارد تن آب بالاست هر ساله در اطراف جهان جا به جا می شود. در دهه ی گذشته افزایش شدید در پخش گونه ها به نواحی که به طور طبیعی به آن متعلق نیستند دیده شده است. این مسئله بوجود آورنده ی یک اکوسیستم نا متعادل و یک تهدید جدی برای محیط زیست می باشد. در بسیاری مواقع  گونه ی مهاجم هیچ شکارچی طبیعی در محل جدید ندارد و این باعث می شود تا با ازدیاد جمعیتشان گونه های بومی منقرض شوند که به معنای مختل شدن کل زیست بوم دریایی می باشد. این مهم نتایج شدیدی  در حوزه ی بیو-توزیع و نهایتاً صنعت ماهیگیری و مواد غذایی دریایی دارد.
                                </p>
                                <?php
                                } else {
                                ?>
                                <p class="ltr">
                                    <strong>
                                        ENVIRONMENTAL ISSUES
                                    </strong>
                                    <br>
                                    <br>
                                    The introduction of invasive marine species into new environments by ships’ ballast
                                    water, attached to ships’ hulls and via other vectors has been identified as one of
                                    the four greatest threats to the world’s oceans. The other three are land-based
                                    sources of marine pollution, overexploitation of living marine resources and
                                    physical alteration/destruction of marine habitat.
                                    <br>
                                    <br>
                                    Shipping moves over 80% of the world’s commodities and transfers approximately 3 to
                                    5 billion tonnes of ballast water internationally each year. A similar volume may
                                    also be transferred domestically within countries and regions each year. Ballast
                                    water is absolutely essential to the safe and efficient operation of modern
                                    shipping, providing balance and stability to un-laden ships. However, it may also
                                    pose a serious ecological, economic and health threat. 
                                    <br>
                                    <br>
                                    A potentially serious environmental problem arises when this ballast water contains
                                    marine life.
                                    <br>
                                    <br>
                                    There are thousands of marine species that may be carried in ships’ ballast water.
                                    These include bacteria and other microbes, small invertebrates and the eggs, cysts
                                    and larvae of various species.  The problem is compounded by the fact that virtually
                                    all marine species have life cycles that include a planktonic stage or stages.  Even
                                    species in which the adults are unlikely to be taken on in ballast water, because
                                    they are too large or live attached to the seabed, may be transferred in ballast
                                    during their planktonic phase. Over the past millennia, marine species have
                                    dispersed throughout the oceans by natural means, carried on currents and attached
                                    to floating logs and debris. Natural barriers, such as temperature and land masses,
                                    have prevented many species from dispersing into certain areas. This has resulted in
                                    the natural patterns of biogeography observed in the oceans today.  In particular,
                                    the pan-global tropical zone has separated the northern and southern temperate and
                                    cold water zones. This has allowed many species to evolve quite independently in
                                    these latter zones, resulting in quite different marine biodiversity between the
                                    north and the south.  In tropical areas species have not faced the same barriers.
                                    This is exemplified by the relatively homogenous marine biodiversity spanning the
                                    huge area of the Indo-Pacific, from the east coast of Africa to the west coast of
                                    South America.
                                    <br>
                                    <br>
                                    Humans have aided this process for as long as they have sailed, mainly by dispersing
                                    marine species that have attached to the hulls of vessels. The commencement of the
                                    use of water as ballast, and the development of larger, faster ships completing
                                    their voyages in ever shorter times, combined with rapidly increasing world trade,
                                    means that the natural barriers to the dispersal of species across the oceans are
                                    being reduced. In particular, ships provide a way for temperate marine species to
                                    pierce the tropical zones, and some of the most spectacular introductions have
                                    involved northern temperate species invading southern temperate waters, and vice
                                    versa.
                                    <br>
                                    <br>
                                    It is estimated that at least 7,000 different species are being carried in ships’
                                    ballast tanks around the world. The vast majority of marine species carried in
                                    ballast water do not survive the journey, as the ballasting and deballasting cycle
                                    and the environment inside ballast tanks can be quite hostile to organism survival.
                                    Even for those that do survive a voyage and are discharged, the chances of surviving
                                    in the new environmental conditions, including predation by and/or competition from
                                    native species, are further reduced. However, when all factors are favourable, an
                                    introduced species survive to establish a reproductive population in the host
                                    environment, it may become invasive, out-competing native species and multiplying
                                    into pest proportions.
                                    <br>
                                    <br>
                                    As a result, whole ecosystems are being changed. In the USA, the European Zebra
                                    Mussel has infested over 40% of internal waterways and may have required between
                                    US$750 million and US$1 billion in expenditure on control measures between 1989 and
                                    2000. In southern Australia, the Asian kelp is invading new areas rapidly,
                                    displacing the native seabed communities. In the Black Sea, the filter-feeding North
                                    American jellyfish Mnemiopsis leidyi has on occasion reached densities of 1kg of
                                    biomass per m2. It has depleted native plankton stocks to such an extent that it has
                                    contributed to the collapse of entire Black Sea commercial fisheries. In several
                                    countries, introduced, microscopic, ‘red-tide’ algae (toxic dinoflagellates) have
                                    been absorbed by filter-feeding shellfish, such as oysters. When eaten by humans,
                                    these contaminated shellfish can cause paralysis and even death.
                                    There are hundreds of other examples of catastrophic introductions around the world,
                                    causing severe human health, economic and/or ecological impacts in their host
                                    environments.
                                    <br>
                                    <br>
                                    Invasive marine species are one of the four greatest threats to the world’s oceans!
                                    Unlike other forms of marine pollution, such as oil spills, where ameliorative
                                    action can be taken and from which the environment will eventually recover, the
                                    impacts of invasive marine species are most often irreversible! 
                                    The UN considers the introduction of non-indigenous oceanic species to be one of the
                                    top four serious threats to the global environment. At any given time, 35 000 ships
                                    are en route on the water of the Earth and more than 3000 species are being
                                    transported in their ballast tanks. The UN’s International Maritime Organization
                                    estimates that ten billion tons of ballast water is transported around the world
                                    every year. The past decade has seen a marked increase in the spread of species to
                                    areas where they do not naturally belong. This creates an imbalance in ecosystems
                                    and is a serious environmental threat. Many times the invader has no natural
                                    predator and the original species become extinct and the entire marine ecosystem is
                                    disrupted. This has dramatic consequences for biodiversity and for industries such
                                    as fishing and aquaculture.
                                </p>
                                <?php
                                }
                                ?>
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