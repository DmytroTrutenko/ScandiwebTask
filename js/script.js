$(document).ready(function () {

//dynamic form
    $('.toggle-form').addClass('hide');
    $('#dvd').removeClass('hide');

    $('#switcher').change(() => {
        $('.toggle-form').addClass('hide');
        let form = $('#switcher').val();
        $('#' + form).removeClass('hide');
    });

//form validation
    $('.error').hide();

    let sku = $("input#sku"),
        name = $("input#name"),
        price = $("input#price"),
        size = $("input#size"),
        height = $("input#height"),
        width = $("input#width"),
        lenght = $("input#lenght"),
        weight = $("input#weight");

    let error1 = 'Please, submit required data',
        error2 = 'Please, provide the data of indicated type';

    let reg1 = /^(?:\d\.?)+$/,    //only numbers and dots
        reg2 =/^[a-zA-Z0-9_-]{3,16}$/;  // numbers, letters, symbols - and _

    $('.btn_card').click(() => {
        $('.error').hide();
        if (sku.val() === '') {
            sku.focus();
            $('.error').text(error1).show();
            return false;
        }
        if (!reg2.test(sku.val())) {
            sku.focus();
            $('.error').text(error2).show();
            return false;
        }

        if (name.val() === '') {
            name.focus();
            $('.error').text(error1).show();
            return false;
        }
        if (!reg2.test(name.val())) {
            name.focus();
            $('.error').text(error2).show();
            return false;
        }

        if (price.val() === '') {
            price.focus();
            $('.error').text(error1).show();
            return false;
        }
        if (!reg1.test(price.val())) {
            price.focus();
            $('.error').text(error2).show();
            return false;
        }

        if (size.val() === '' && $('#switcher').val() === 'dvd') {
            size.focus();
            $('.error').text(error1).show();
            return false;
        }
        if (!reg1.test(size.val())&& $('#switcher').val() === 'dvd') {
            size.focus();
            $('.error').text(error2).show();
            return false;
        }

        if (height.val() === '' && $('#switcher').val() === 'furniture') {
            height.focus();
            $('.error').text(error1).show();
            return false;
        }
        if (!reg1.test(height.val()) && $('#switcher').val() === 'furniture') {
            height.focus();
            $('.error').text(error2).show();
            return false;
        }

        if (width.val() === '' && $('#switcher').val() === 'furniture') {
            width.focus();
            $('.error').text(error1).show();
            return false;
        }
        if (!reg1.test(width.val()) && $('#switcher').val() === 'furniture') {
            width.focus();
            $('.error').text(error2).show();
            return false;
        }

        if (lenght.val() === '' && $('#switcher').val() === 'furniture') {
            lenght.focus();
            $('.error').text(error1).show();
            return false;
        }
        if (!reg1.test(lenght.val()) && $('#switcher').val() === 'furniture') {
            lenght.focus();
            $('.error').text(error2).show();
            return false;
        }

        if (weight.val() === '' && $('#switcher').val() === 'book') {
            weight.focus();
            $('.error').text(error1).show();
            return false;
        }
        if (!reg1.test(weight.val()) && $('#switcher').val() === 'book') {
            weight.focus();
            $('.error').text(error2).show();
            return false;
        }
    })
});