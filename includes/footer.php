<footer>
    <div class="lang-selector pull-left">
        <ul>
            <li class="pull-left"><a href="#" class="change_lang<?php echo (LANG == "en") ? ' active' : '' ?>"
                                     data-lang="en"><img src="assets/images/flag-en.png" class="center-block"
                                                         alt="Change Language to English"></a></li>
            <li class="pull-left"><a href="#" class="change_lang<?php echo (LANG == "fa") ? ' active' : '' ?>"
                                     data-lang="fa"><img src="assets/images/flag-fa.png" class="center-block"
                                                         alt="تغییر زبان به پارسی"></a></li>
        </ul>
    </div>

    <p class="pull-right <?php echo (LANG == "fa") ? "rtl" : "ltr" ?>">
        &copy; <span class="current-year <?php echo (LANG == "fa") ? "rtl" : "ltr" ?>"></span> <span
            data-word="copy"><?php echo COPY; ?></span>
    </p>
</footer>
