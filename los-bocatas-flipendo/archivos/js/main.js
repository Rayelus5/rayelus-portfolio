$(function(){
      $(".typed").typed({
        strings: ["Los Bocatas Flipendo", "Bocatas Flipendo", "los bocatas flipendo", "", ""],
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