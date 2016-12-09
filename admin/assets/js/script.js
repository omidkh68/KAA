/**
 * Created by omidkhosrojerdi on 10/28/2016 AD.
 */

$(document).ready(function () {
    var $body = $('body');

    $('#changeCopyLang').change(function() {
        var input = $(this).parents('.form-inline').find('input[type="text"]'),
            text = $(this).find('option[value="'+$(this).val()+'"]').data('value');

        input.val(text);
    });

    // remove overlay and close toast
    $body.on('click', '.overlay', function(e) {
        e.preventDefault();

        iziToast.destroy();

        $(this).remove();
    });
});