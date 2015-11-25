var loc = window.location.pathname;

$('nav').find('a').each(function() {
    $(this).toggleClass('active', $(this).attr('href') == loc);
});

//# sourceMappingURL=all.js.map
