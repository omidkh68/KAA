<header>
    <!-- logo -->
    <a href="<?php echo DOMAIN_URL; ?>" class="logo <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>">
        <h5>
            <p>Kavosh Abzar Aria Ltd.</p>
            <span>Authorized Representative of OMG Pumps Italy</span>
        </h5>
        <img src="" alt="Kavosh Abzar Aria - Official Logo"
             class="<?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>">
    </a>

    <!-- search container -->
    <div class="search-container <?php echo (LANG == "fa") ? "pull-right" : "pull-left" ?>">
        <i class="fa fa-search text-center"></i>
        <i class="fa fa-times text-center"></i>
        <input type="text" name="search" id="search" data-word="search" placeholder="<?php echo SEARCH; ?>">
    </div>

    <!-- hamburger menu -->
    <button class="hamburger hamburger--squeeze hidden <?php echo (LANG == "fa") ? "pull-left" : "pull-right" ?>"
            type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
    </button>

    <!-- navigation items -->
    <nav class="<?php echo (LANG == "fa") ? "pull-left" : "pull-right" ?>">
        <ul class="<?php echo (LANG == "fa") ? "rtl" : "ltr" ?>">
            <!-- Home -->
            <li>
                <a class="active menuItem" href="<?php echo DOMAIN_URL; ?>" data-word="home">
                    <span><?php echo HOME; ?></span>
                </a>
            </li>
            <!-- About us -->
            <li>
                <a class="menuItem" href="<?php echo DOMAIN_URL; ?>about_us" data-word="about_us">
                    <span><?php echo ABOUT; ?></span>
                </a>
            </li>
            <!-- Principal Company -->
            <li class="hasMenu">
                <a class="dropdown-toggle" data-word="principal_company" id="dropdownMenu1" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="true">
                    <span><?php echo PRINCIPAL_COMPANY; ?></span>
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu <?php echo (LANG == "fa") ? "rtl" : "ltr" ?>" aria-labelledby="dropdownMenu1">
                    <li><a href="#">OMG</a></li>
                    <li><a href="#">Optimarin</a></li>
                </ul>
            </li>
            <!-- Press Release -->
            <li>
                <a class="menuItem" href="<?php echo DOMAIN_URL; ?>press_release" data-word="press_release">
                    <span><?php echo PRESS_RELEASE; ?></span>
                </a>
            </li>
            <!-- Contact US -->
            <li>
                <a class="menuItem" href="<?php echo DOMAIN_URL; ?>contact_us" data-word="contact_us">
                    <span><?php echo CONTACT; ?></span>
                </a>
            </li>
        </ul>
    </nav>
</header>
