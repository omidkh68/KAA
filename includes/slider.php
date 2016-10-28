<div class="sliderContainer">
    <div id="progress-back" class="load-item">
        <div id="progress-bar"></div>
    </div>

    <!--Control Bar-->
    <div id="controls-wrapper" class="load-item wow fadeInDown" data-wow-duration="1s" data-wow-delay="2s">
        <!--Arrow Navigation-->
        <a id="prevslide" class="load-item"><i class="fi flaticon-angle-left"></i></a>
        <a id="nextslide" class="load-item"><i class="fi flaticon-angle-right"></i></a>

        <div id="controls">

            <!--Slide counter-->
            <div id="slidecounter">
                <span class="slidenumber <?php echo (LANG == "fa") ? "rtl" : "ltr" ?>"></span> / <span
                    class="totalslides <?php echo (LANG == "fa") ? "rtl" : "ltr" ?>"></span>
            </div>

            <!--Slide captions displayed here-->
            <div id="slidecaption" class="<?php echo (LANG == "fa") ? "rtl" : "ltr" ?>"></div>

            <!--Navigation-->
            <ul id="slide-list"></ul>

        </div>
        </div>
</div><!-- /Fullscreen Slider -->
