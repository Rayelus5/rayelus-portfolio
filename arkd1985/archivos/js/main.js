$(function(){
      $(".typed").typed({
        strings: ["minis", "clásicas", "originales", "el mejor regalo", "portátiles", "made in Spain"],
        typeSpeed: 100,
        loop: true,
        backDelay: 1200
      });
  });

    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop:  ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });