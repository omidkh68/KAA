/**
 * Created by omidkhosrojerdi on 10/7/16.
 */
$(document).ready(function() {
    console.log("d"+"e"+"s"+"i"+"g"+"n"+"e"+"d"+" b"+"y"+": @"+"o"+"m"+"i"+"d"+"k"+"h"+"6"+"8");

    var $htmlRoot = $('html'),
        $body = $('body'),
        $nav = $('.topNav'),
        $bnav = $('.belowNav'),
        $logo = $('.logo'),
        $box = $body.find('.box'),
        $box_contact_us = $body.find('.box.contact_us'),
        $box_products = $body.find('.box.products'),
        $searchContainer = $('.search-container'),
        $searchTxt = $('#search'),
        width = $(this).width(),
        $hamburger = $('.hamburger'),
        $lightBox = $body.find('#lightBox'),
        $newsInbox = $body.find('.news-inbox'),
        $footer = $('footer'),
        $changeLang = $('.change_lang'),
        $overlay = $('.overlay'),
        $base_url = $('#base_url'),
        $indicator = $body.find('.indicator'),
        $videoPlayer = $body.find('#videoPlayer'),
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

    // focus search on press slash key and blur from search input by press scape key
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

        $body.toggleClass('fixed');
    });

    // realtime change language
    $changeLang.click(function (e) {
        e.preventDefault();

        var $self = $(this),
            dataLang = $self.data('lang');

        $.post("/includes/changeLang.php", {changeLang: dataLang}, function() {
            setTimeout(function () {
                window.location.reload();
            }, 500);
        });
    });

    // change page with transition
    $body.on('click', '.menuItem', function (e) {
        e.preventDefault();

        var $self = $(this),
            path = $self.attr('href'),
            page_name = $self.attr('data-pageName');

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
            $nav.find('[data-item-active]').attr('data-item-active', '');
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

                if ($body.hasClass('fixed')) {
                    $body.removeClass('fixed')
                }

                if (page_name == "home") {
                    $body.hasClass('hugContent') == true ? $body.removeClass('hugContent') : "";
                } else {
                    $body.hasClass('hugContent') == false ? $body.addClass('hugContent') : "";
                }
            });
        }
    });

    // change page with transition
    $body.on('click', '.subItem', function (e) {
        e.preventDefault();

        var $self = $(this),
            path = $self.attr('href');

        if (path == "#") {
            return false;
        }

        if ($self.parent().hasClass('active')) {
            return false;
        }

        if (toggleOverlay) {
            toggleOverlay = false;

            $('.itemContent').load(path + ' .itemContent > *', function (result) {

                // change url
                loadDataToTemplate(path);

                $body.find('.subItem').parent().removeClass('active');
                $self.parent().addClass('active');

                $body.find('#menuHolderBtn').trigger('click');
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

        if ($body.find('.news-inbox li').hasClass('active')) {
            $body.find('.news-inbox li').removeClass('active');

            $body.find('.news-inbox li .fi.flaticon-angle-bottom').removeClass('fi-rotate-180');
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

    // lightbox and event
    $body.on('click', '.runLightBox', function (e) {
        e.preventDefault();
        e.stopPropagation();

        var $self = $(this),
            src = $self.attr('src'),
            alt = $self.attr('alt');

        $lightBox.find('img').attr({
            src: src,
            alt: alt
        });

        $lightBox.find('h4').text(alt);

        $lightBox.modal('show');
    });

    // open news box
    $body.on('click', '.news-inbox li', function (e) {
        e.stopPropagation();

        if ($(this).hasClass('active')) {
            $(this).removeClass('active');

            $(this).find('.fi.flaticon-angle-bottom').removeClass('fi-rotate-180');
        } else {
            $(this).addClass('active');
            $(this).find('.fi.flaticon-angle-bottom').addClass('fi-rotate-180');
        }
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

            if (url == $base_url.val()) {
                $body.removeClass('hugContent');
            } else {
                $body.addClass('hugContent');
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
