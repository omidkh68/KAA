/**
 * Created by omidkhosrojerdi on 10/7/16.
 */
$(document).ready(function() {
    console.log("d"+"e"+"s"+"i"+"g"+"n"+"e"+"d"+" b"+"y"+": @"+"o"+"m"+"i"+"d"+"k"+"h"+"6"+"8");

    var $body = $('body'),
        $nav = $('nav'),
        width = $(this).width(),
        $hamburger = $('.hamburger'),
        $footer = $('footer'),
        $changeLang = $('.change_lang'),
        $overlay = $('.overlay'),
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

    if(width > 768) {
        $hamburger.addClass('hidden');
    } else {
        $hamburger.removeClass('hidden');
    }

    $hamburger.click(function(e) {
        e.preventDefault();

        $(this).toggleClass('is-active');

        $nav.toggleClass('active');
    });

    // set current year to footer
    var date = new Date();
    $('.current-year.ltr').html(date.getFullYear());

    // realtime change language
    $changeLang.click(function (e) {
        e.preventDefault();

        if (toggleOverlay) {
            toggleOverlay = false;

            var $self = $(this),
                dataLang = $self.data('lang');

            $.post("/includes/changeLang.php", {changeLang: dataLang}, function (result) {
                var words = $.parseJSON(result);

                $body.find('[data-word="home"]').html(words['HOME']);
                $body.find('[data-word="about_us"]').html(words['ABOUT']);
                $body.find('[data-word="principal_company"]').html(words['PRINCIPAL_COMPANY']);
                $body.find('[data-word="press_release"]').html(words['PRESS_RELEASE']);
                $body.find('[data-word="contact_us"]').html(words['CONTACT']);
                $body.find('[data-word="copy"]').html(words['COPY']);

                if (dataLang == "en") {
                    $body.find('.rtl').each(function () {
                        $(this).removeClass('rtl').addClass('ltr');
                    });
                } else {
                    $body.find('.ltr').each(function () {
                        $(this).removeClass('ltr').addClass('rtl');
                    });
                }

                $changeLang.removeClass('active');
                $self.addClass('active');
            });
        }
    });

    // change page with transition
    $nav.find('a').click(function (e) {
        e.preventDefault();

        if (toggleOverlay) {
            toggleOverlay = false;

            $.post('/includes/pageLoad.php', function (result) {
                console.log(result);
            });
        }
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