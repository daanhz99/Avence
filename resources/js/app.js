require('./bootstrap');

$(document).ready(() => {
    $('a.menu-button').click(function() {
        $('.menu-sm').fadeIn('fast');
    });

    $('a.close-button').click(function() {
        $('.menu-sm').fadeOut('fast');
    })
});