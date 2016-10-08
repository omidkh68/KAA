<header>
    <!-- logo -->
    <a href="" class="pull-right"><img src="<?php echo DOMAIN_URL; ?>assets/images/kavoshabzar-logo.png"
                                       alt="Kavosh Abzar Aria - Official Logo"></a>

    <!-- hamburger menu -->
    <button class="hamburger hamburger--squeeze hidden" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
    </button>

    <!-- navigation items -->
    <nav class="pull-left">
        <ul class="<?php echo (LANG == "fa") ? "rtl" : "ltr" ?>">
            <!-- Home -->
            <li><a class="active" href="<?php echo DOMAIN_URL; ?>" data-word="home"><?php echo HOME; ?></a></li>
            <!-- About us -->
            <li><a class="" href="<?php echo DOMAIN_URL; ?>about_us" data-word="about_us"><?php echo ABOUT; ?></a></li>
            <!-- Principal Company -->
            <li><a class="" href="<?php echo DOMAIN_URL; ?>principal_company"
                   data-word="principal_company"><?php echo PRINCIPAL_COMPANY; ?></a></li>
            <!-- Press Release -->
            <li><a class="" href="<?php echo DOMAIN_URL; ?>press_release"
                   data-word="press_release"><?php echo PRESS_RELEASE; ?></a></li>
            <!-- Contact US -->
            <li><a class="" href="<?php echo DOMAIN_URL; ?>contact_us" data-word="contact_us"><?php echo CONTACT; ?></a>
            </li>
        </ul>
    </nav>
</header>
