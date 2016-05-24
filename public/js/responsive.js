$(document).ready(function () {
    $('nav').on('click', 'a.mobile', function () {
        var nav = $(this).parent();
        if (nav.hasClass('aberto')) {
            nav.removeClass('aberto');
        } else {
            $('nav').removeClass('aberto');
            nav.addClass('aberto');
        }
    });
    $('header').on('click', 'li a', function () {
        var a = $(this);
        var menu = a.next();
        if (menu.length > 0) {
            if (a.hasClass('menu-ativo')) {
                a.removeClass('menu-ativo');
                menu.removeClass('menu-ativo');
            } else {
                a.addClass('menu-ativo');
                menu.addClass('menu-ativo');
            }
        }
    });
});