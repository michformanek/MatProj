$(function () {
    $('textarea').textareaAutoSize();

    $('textarea').change(function (e) {
        $(this).closest('form').submit();
    });

    $('#testForm').change(function (e) {
        $(this).closest('form').submit();
    });

    $.nette.init();
});