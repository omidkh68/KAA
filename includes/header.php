<header>
    <!-- logo -->
    <a href="<?php echo DOMAIN_URL; ?>"
       class="logo <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?> wow fadeInDown" data-wow-duration="1s"
       data-wow-delay=".03s">
        <h5>
            <b class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".05s">Kavosh Abzar Aria Ltd.</b>
        </h5>
        <img src="" alt="Kavosh Abzar Aria - Official Logo"
             class="<?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>">
    </a>

    <!-- search container -->
    <div class="search-container <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?> wow fadeInRight"
         data-wow-duration="1s" data-wow-delay="1.2s">
        <i class="fi flaticon-search text-center"></i>
        <i class="fi flaticon-circle text-center"></i>
        <input type="text" name="search" id="search" data-word="search" placeholder="<?php echo SEARCH; ?>">
    </div>

    <!-- hamburger menu -->
    <button
        class="hamburger hamburger--squeeze hidden <?php echo (LANG == "fa") ? "pull-left" : "pull-right" ?> wow fadeInDown"
        data-wow-duration="1s" data-wow-delay=".8s" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
    </button>

    <!-- navigation items -->
    <nav class="topNav <?php echo (LANG == "fa") ? "pull-left" : "pull-right" ?>">
        <ul class="<?php echo (LANG == "fa") ? "rtl" : "ltr" ?>">
            <!-- Home -->
            <li class="animated wow fadeInDown" data-wow-duration="1s" data-wow-delay=".1s">
                <a class="active menuItem" href="<?php echo DOMAIN_URL; ?>" data-word="home" data-pageName="home">
                    <span><?php echo HOME; ?></span>
                </a>
            </li>
            <!-- About us -->
            <li class="animated wow fadeInDown" data-wow-duration="1s" data-wow-delay=".2s">
                <a class="menuItem" href="<?php echo DOMAIN_URL; ?>page/about_us.php" data-word="about_us"
                   data-pageName="aboutUs">
                    <span><?php echo ABOUT; ?></span>
                </a>
            </li>
            <!-- Principal Company -->
            <li class="hasMenu wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s">
                <a class="dropdown-toggle" data-word="principal_company" id="dropdownMenu1" data-item-active=""
                   data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="true">
                    <span><?php echo PRINCIPAL_COMPANY; ?></span>
                    <i class="fi flaticon-angle-bottom"></i>
                </a>
                <ul class="dropdown-menu <?php echo (LANG == "fa") ? "rtl" : "ltr" ?>" aria-labelledby="dropdownMenu1">
                    <li><a class="menuItem subMenuItem" data-item="1"
                           href="<?php echo DOMAIN_URL; ?>page/principal_company/omg/" data-pageName="omg">OMG</a></li>
                    <li><a class="menuItem subMenuItem" data-item="2"
                           href="<?php echo DOMAIN_URL; ?>page/principal_company/optimarin/" data-pageName="optimarin">Optimarin</a>
                    </li>
                </ul>
            </li>
            <!-- Press Release -->
            <li class="animated wow fadeInDown" data-wow-duration="1s" data-wow-delay=".4s">
                <a class="menuItem" href="<?php echo DOMAIN_URL; ?>page/press_release.php" data-word="press_release"
                   data-pageName="pressRelease">
                    <span><?php echo PRESS_RELEASE; ?></span>
                </a>
            </li>
            <!-- Contact US -->
            <li class="animated wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                <a class="menuItem" href="<?php echo DOMAIN_URL; ?>page/contact_us.php" data-word="contact_us"
                   data-pageName="contactUs">
                    <span><?php echo CONTACT; ?></span>
                </a>
            </li>
        </ul>
    </nav>
</header><!-- /Header of Site -->
