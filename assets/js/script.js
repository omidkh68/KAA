/**
 * Created by omidkhosrojerdi on 10/7/16.
 */
$(document).ready(function() {
    console.log("d"+"e"+"s"+"i"+"g"+"n"+"e"+"d"+" b"+"y"+": @"+"o"+"m"+"i"+"d"+"k"+"h"+"6"+"8");

    var $body = $('body'),
        $nav = $('nav'),
        width = $(this).width(),
        $hamburger = $('.hamburger');

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

});
$(window).resize(function() {
    var $nav = $('nav'),
        width = $(this).width(),
        $hamburger = $('.hamburger');

    if(width > 768) {
        if($nav.hasClass('active')) {
            $nav.removeClass('active');
        }

        $hamburger.addClass('hidden');
    } else {
        $hamburger.removeClass('hidden');
    }
});