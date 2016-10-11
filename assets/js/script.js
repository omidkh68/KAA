/**
 * Created by omidkhosrojerdi on 10/7/16.
 */
$(document).ready(function() {
    console.log("d"+"e"+"s"+"i"+"g"+"n"+"e"+"d"+" b"+"y"+": @"+"o"+"m"+"i"+"d"+"k"+"h"+"6"+"8");

    var $htmlRoot = $('html'),
        $body = $('body'),
        $nav = $('nav'),
        $logo = $('.logo'),
        $searchContainer = $('.search-container'),
        $searchTxt = $('#search');
    width = $(this).width(),
        $hamburger = $('.hamburger'),
        $footer = $('footer'),
        $changeLang = $('.change_lang'),
        $overlay = $('.overlay'),
        $base_url = $('#base_url'),
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

                if (dataLang == "en") {
                    $body.find('.rtl').each(function () {
                        $(this).removeClass('rtl').addClass('ltr');
                    });

                    $nav.removeClass('pull-left').addClass('pull-right');
                    $logo.removeClass('pull-right').addClass('pull-left');
                    $logo.find('img').removeClass('pull-right').addClass('pull-left');
                    $hamburger.removeClass('pull-left').addClass('pull-right');
                    $searchContainer.removeClass('pull-right').addClass('pull-left');

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

        var $self = $(this);

        if ($self.hasClass('active')) {
            return false;
        }

        if (toggleOverlay) {
            toggleOverlay = false;

            $.post('/includes/pageLoad.php', function (result) {
                console.log(result);

                $nav.find('a').removeClass('active');
                $self.addClass('active');
            });
        }
    });

    // toggle active for open and close submenu in navigation bar
    $nav.find('.hasMenu a').bind('click', function (e) {
        e.preventDefault();

        var $self = $(this);

        $self.find('i').toggleClass('fa-rotate-180');
    });

    // set default logo per Theme
    changeLogoPerTheme();

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

    // by clicking on body did not close open search container
    $searchContainer.click(function (e) {
        e.stopPropagation();
    });

    // open search container and focus search field
    $searchContainer.find('i.fa').bind('click', function (e) {
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
            $nav.find('.hasMenu i').removeClass('fa-rotate-180');
        }
    });

    $searchTxt.focus(function () {
        $(this).val("");
    });

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