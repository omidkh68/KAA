/**
 * Created by omidkhosrojerdi on 10/28/2016 AD.
 */

$(document).ready(function () {
    $('#changeCopyLang').change(function() {
        var input = $(this).parents('.form-inline').find('input[type="text"]'),
            text = $(this).find('option[value="'+$(this).val()+'"]').data('value');

        input.val(text);
    });
});