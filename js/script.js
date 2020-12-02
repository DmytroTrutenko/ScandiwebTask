$(document).ready(function () {
//dynamic form
    $('.toggle-form').addClass('hide');
    $('#switcher').change(() => {
        $('.toggle-form').addClass('hide');
        let form = $('#switcher').val();
           $('#' + form).removeClass('hide');
    });
});