<footer>
    <div class="lang-selector pull-left">
        <ul>
            <li class="pull-left wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s">
                <a href="#" class="change_lang<?php echo (LANG == "en") ? ' active' : '' ?>" data-lang="en"
                   data-toggle="tooltip" data-placement="right" title="Change Language to English">
                    <img src="<?php echo DOMAIN_URL; ?>assets/images/flag-en.png" class="center-block"
                         alt="Change Language to English">
                </a>
            </li>
            <li class="pull-left wow fadeIn" data-wow-duration="1s" data-wow-delay=".6s">
                <a href="#" class="change_lang<?php echo (LANG == "fa") ? ' active' : '' ?>" data-lang="fa"
                   data-toggle="tooltip" data-placement="right" title="تغییر زبان به پارسی">
                    <img src="<?php echo DOMAIN_URL; ?>assets/images/flag-fa.png" class="center-block"
                         alt="تغییر زبان به پارسی">
                </a>
            </li>
        </ul>
    </div>

    <p class="pull-right <?php echo (LANG == "fa") ? "rtl" : "ltr" ?> wow fadeInUp" data-wow-duration="1s"
       data-wow-delay=".8s">
        &copy; <span class="current-year <?php echo (LANG == "fa") ? "rtl" : "ltr" ?>"><?php echo date("Y"); ?></span>
        <span data-word="copy"><?php echo COPY; ?></span>
    </p>
</footer><!-- /Footer of Site -->
