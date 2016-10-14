/**
 * Created by omidkhosrojerdi on 10/7/16.
 */
$(document).ready(function() {
    console.log("d"+"e"+"s"+"i"+"g"+"n"+"e"+"d"+" b"+"y"+": @"+"o"+"m"+"i"+"d"+"k"+"h"+"6"+"8");

    var $htmlRoot = $('html'),
        $body = $('body'),
        $nav = $('nav'),
        $logo = $('.logo'),
        $box = $body.find('.box'),
        $box_contact_us = $body.find('.box.contact_us'),
        $box_products = $body.find('.box.products'),
        $searchContainer = $('.search-container'),
        $searchTxt = $('#search'),
        width = $(this).width(),
        $hamburger = $('.hamburger'),
        $footer = $('footer'),
        $changeLang = $('.change_lang'),
        $overlay = $('.overlay'),
        $base_url = $('#base_url'),
        $indicator = $body.find('.indicator'),
        $base_url_img = $('#base_url_img').val(),
        toggleOverlay = true;

    $(this).ajaxStart(function () {

        $overlay.addClass('active');

    }).ajaxStop(function () {

        setTimeout(function () {
            $overlay.removeClass('active').addClass('deactive');
            setTimeout(function () {
                $overlay.stop().hide(100, function () {
                    $overlay.removeClass('deactive');
                    setTimeout(function () {
                        $overlay.stop().show(100, function () {
                            toggleOverlay = true;
                        });
                        return false;
                    }, 200);
                })
            }, 1000);
        }, 500);

    });

    // remove or show hamburger menu with page size
    if(width > 768) {
        $hamburger.addClass('hidden');
    } else {
        $hamburger.removeClass('hidden');
    }

    $(document).keyup(function (e) {
        var key = e.which ? e.which : e.keyCode;

        if (key == 191) {
            $searchContainer.addClass('active');
            $searchTxt.focus();
        }

        if (key == 27) {
            $searchContainer.removeClass('active');
            $searchTxt.blur();
        }
    });

    // initialize bootstrap tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // open off-canvas menu by click on hambuger menu
    $hamburger.click(function(e) {
        e.preventDefault();

        $(this).toggleClass('is-active');

        $nav.toggleClass('active');
    });

    // realtime change language
    $changeLang.click(function (e) {
        e.preventDefault();

        var $self = $(this);

        if ($self.hasClass('active')) {
            return false;
        }

        if (toggleOverlay) {
            toggleOverlay = false;

            var dataLang = $self.data('lang');

            $.post("/includes/changeLang.php", {changeLang: dataLang}, function (result) {
                var words = $.parseJSON(result);

                $body.find('[data-word="home"] span').html(words['HOME']);
                $body.find('[data-word="about_us"] span').html(words['ABOUT']);
                $body.find('[data-word="principal_company"] span').html(words['PRINCIPAL_COMPANY']);
                $body.find('[data-word="press_release"] span').html(words['PRESS_RELEASE']);
                $body.find('[data-word="contact_us"] span').html(words['CONTACT']);
                $body.find('[data-word="copy"]').html(words['COPY']);
                $body.find('[data-word="search"]').attr('placeholder', words['SEARCH']);
                $body.find('[data-word="contact_name"]').attr('placeholder', words['NAME']);
                $body.find('[data-word="contact_email"]').attr('placeholder', words['EMAIL']);
                $body.find('[data-word="contact_subject"]').attr('placeholder', words['SUBJECT']);
                $body.find('[data-word="contact_message"]').attr('placeholder', words['YOUR_MESSAGE']);
                $body.find('[data-word="contact_code"]').attr('placeholder', words['CAPTCHA_CODE']);
                $body.find('[data-word="contact_send"]').html(words['SEND']);
                $body.find('[data-word="phone"] span').html(words['PHONE']);
                $body.find('[data-word="fax"] span').html(words['FAX']);
                $body.find('[data-word="contact_email"] span').html(words['EMAIL']);
                $body.find('[data-word="postal_code"] span').html(words['POSTAL_CODE']);
                $body.find('[data-word="address"] span').html(words['ADDRESS']);
                $body.find('[data-word="physical_address"]').html(words['PHYSICAL_ADDRESS']);
                $body.find('[data-word="products"] span').html(words['PRODUCTS']);
                $body.find('[data-word="references"] span').html(words['REFERENCES']);
                $body.find('[data-word="certificate"] span').html(words['CERTIFICATE']);

                if (dataLang == "en") {
                    $body.find('.rtl').each(function () {
                        $(this).removeClass('rtl').addClass('ltr');
                    });

                    $nav.removeClass('pull-left').addClass('pull-right');
                    $logo.removeClass('pull-right').addClass('pull-left');
                    $logo.find('img').removeClass('pull-right').addClass('pull-left');
                    $hamburger.removeClass('pull-left').addClass('pull-right');
                    $searchContainer.removeClass('pull-right').addClass('pull-left');
                    $box.removeClass('fadeInRight').addClass('fadeInLeft');

                    if ($box_contact_us.length) {
                        $box_contact_us.find('.pull-right').removeClass('pull-right').addClass('pull-left');
                    }
                    if ($box_products.length) {
                        $box_products.find('.pull-right').removeClass('pull-right').addClass('pull-left');
                    }

                    $htmlRoot.attr('lang', 'en');
                } else {
                    $body.find('.ltr').each(function () {
                        $(this).removeClass('ltr').addClass('rtl');
                    });

                    $nav.removeClass('pull-right').addClass('pull-left');
                    $logo.removeClass('pull-left').addClass('pull-right');
                    $logo.find('img').removeClass('pull-left').addClass('pull-right');
                    $hamburger.removeClass('pull-right').addClass('pull-left');
                    $searchContainer.removeClass('pull-left').addClass('pull-right');
                    $box.removeClass('fadeInLeft').addClass('fadeInRight');

                    if ($box_contact_us.length) {
                        $box_contact_us.find('.pull-left').removeClass('pull-left').addClass('pull-right');
                    }
                    if ($box_products.length) {
                        $box_products.find('.pull-left').removeClass('pull-left').addClass('pull-right');
                    }

                    $htmlRoot.attr('lang', 'fa');
                }

                // set default logo per Theme
                changeLogoPerTheme();

                $changeLang.removeClass('active');
                $self.addClass('active');
            });
        }

        $self.blur();

    });

    // change page with transition
    $nav.find('.menuItem').bind('click', function (e) {
        e.preventDefault();

        var $self = $(this),
            path = $self.attr('href');

        if (path == "#") {
            return false;
        }

        if ($self.hasClass('active')) {
            return false;
        }

        if ($self.hasClass('subMenuItem') && $self.attr('data-item') == $self.parents('.dropdown-menu').prev().attr('data-item-active')) {
            return false;
        }

        if ($self.hasClass('subMenuItem')) {
            $self.parents('.dropdown-menu').prev().attr('data-item-active', $self.attr('data-item'));
        } else {
            $nav.find('.dropdown-menu').prev().attr('data-item-active', "");
        }

        if (toggleOverlay) {
            toggleOverlay = false;

            $('.body-content').load(path + ' .body-content > *', function (result) {

                if ($self.hasClass('subMenuItem')) {
                    $nav.find('a').removeClass('active');
                    $self.parents('.dropdown-menu').prev().addClass('active');
                } else {
                    $nav.find('a').removeClass('active');
                    $self.addClass('active');
                }

                // change url
                loadDataToTemplate(path);

                if ($nav.hasClass('active')) {
                    $nav.removeClass('active');
                }

                if ($hamburger.hasClass('is-active')) {
                    $hamburger.removeClass('is-active')
                }
            });
        }
    });

    // toggle active for open and close submenu in navigation bar
    $nav.find('.hasMenu a').bind('click', function (e) {
        e.preventDefault();

        var $self = $(this);

        $self.find('i').toggleClass('fi-rotate-180');
    });

    // set default logo per Theme
    changeLogoPerTheme();

    // by clicking on body did not close open search container
    $searchContainer.click(function (e) {
        e.stopPropagation();
    });

    // open search container and focus search field
    $searchContainer.find('i.fi').bind('click', function (e) {
        e.stopPropagation();

        var $self = $(this);

        $self.parent().toggleClass('active');
        $searchTxt.focus();
    });

    // by clicking outside element doing something like close search box
    $body.on('click', function () {
        if ($searchContainer.hasClass('active')) {
            $searchContainer.removeClass('active');
            $searchTxt.blur();
        }

        if ($nav.find('.hasMenu').hasClass('open')) {
            $nav.find('.hasMenu i').removeClass('fi-rotate-180');
        }
    });

    $searchTxt.focus(function () {
        $(this).val("");
    });

    $body.on('click', '.indicator a', function (e) {
        e.preventDefault();

        var $self = $(this);

        $self.parents('.indicator').find('a').removeClass('active');
        $self.addClass('active');
    });

    // initial animate effect appear
    new WOW().init();

    // functions
    function changeLogoPerTheme() {
        var langType = $htmlRoot.attr('lang'),
            logoType = "";

        if ($body.hasClass('white')) {
            logoType = "-2";
        } else {
            logoType = "";
        }

        $logo.find('img').attr('src', $base_url_img + 'kavoshabzar-logo-' + langType + logoType + '.png');
    }

    // change url path with item clicked
    function loadDataToTemplate(urlPath) {
        window.history.pushState("", "", urlPath);
    }

    // load previous page with backward or forward page
    $(window).on('popstate', function () {
        var url = window.location.href;

        var partPartUrl = url.split('/');

        //console.log(partPartUrl);

        $('.body-content').load(url + ' .body-content > *', function () {
            if ($nav.hasClass('active')) {
                $nav.removeClass('active');
            }

            if ($hamburger.hasClass('is-active')) {
                $hamburger.removeClass('is-active')
            }
        });
    });

// end of functions
});
$(window).resize(function() {
    var $nav = $('nav'),
        width = $(this).width(),
        $hamburger = $('.hamburger');

    if(width > 768) {
        if($nav.hasClass('active')) {
            $nav.removeClass('active');
        }

        if($hamburger.hasClass('is-active')) {
            $hamburger.removeClass('is-active')
        }

        $hamburger.addClass('hidden');
    } else {
        $hamburger.removeClass('hidden');
    }
});
