$(document).ready(function () {
//dynamic form
    $('.toggle-form').addClass('hide');
    $('#dvd').removeClass('hide');


    $('#switcher').change(() => {
        $('.toggle-form').addClass('hide');
        let form = $('#switcher').val();
        $('#' + form).removeClass('hide');
    });
});