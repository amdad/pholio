$(function() {

    var opts = {
      lines: 7,
      length: 0,
      width: 10,
      radius: 12,
      corners: 0.7,
      speed: 1.5,
      top: '45%',
      left: '55%'
    };

    var spinner = new Spinner(opts).spin();

    var $container = $('.grid');

    $('.content').append(spinner.el);

    $container.imagesLoaded( function() {

        $container.addClass('show');
        spinner.stop();

        Intense( $('.grid a') );
        $container.packery({
            itemSelector: '.item',
            gutter: 40,
            transitionDuration : 0
        });

    });

});