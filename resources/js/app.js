require('./bootstrap');
require('../../node_modules/slick-carousel/slick/slick.min');

$(document).ready(() => {
    $('a.menu-button').click(function() {
        $('.menu-sm').fadeIn('fast');
    });

    $('a.close-button').click(function() {
        $('.menu-sm').fadeOut('fast');
    });

    $(".testimonials-wrapper").slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
        nextArrow: '<button type="button" class="slick-next"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjkgMTI5IiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCAxMjkgMTI5IiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij4KICA8Zz4KICAgIDxwYXRoIGQ9Im00MC40LDEyMS4zYy0wLjgsMC44LTEuOCwxLjItMi45LDEuMnMtMi4xLTAuNC0yLjktMS4yYy0xLjYtMS42LTEuNi00LjIgMC01LjhsNTEtNTEtNTEtNTFjLTEuNi0xLjYtMS42LTQuMiAwLTUuOCAxLjYtMS42IDQuMi0xLjYgNS44LDBsNTMuOSw1My45YzEuNiwxLjYgMS42LDQuMiAwLDUuOGwtNTMuOSw1My45eiIgZmlsbD0iIzRlNGU0ZSIvPgogIDwvZz4KPC9zdmc+Cg=="></button>',
        prevArrow: '<button type="button" class="slick-prev"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMS4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ3Ny4xNzUgNDc3LjE3NSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDc3LjE3NSA0NzcuMTc1OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCI+CjxnPgoJPHBhdGggZD0iTTE0NS4xODgsMjM4LjU3NWwyMTUuNS0yMTUuNWM1LjMtNS4zLDUuMy0xMy44LDAtMTkuMXMtMTMuOC01LjMtMTkuMSwwbC0yMjUuMSwyMjUuMWMtNS4zLDUuMy01LjMsMTMuOCwwLDE5LjFsMjI1LjEsMjI1ICAgYzIuNiwyLjYsNi4xLDQsOS41LDRzNi45LTEuMyw5LjUtNGM1LjMtNS4zLDUuMy0xMy44LDAtMTkuMUwxNDUuMTg4LDIzOC41NzV6IiBmaWxsPSIjNGU0ZTRlIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg=="></button>'

    });
});