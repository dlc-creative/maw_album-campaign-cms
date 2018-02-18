(function($) {
  $.fn.mawSlider = function(options) {
    var defaults = {
        speed: 1000,
        pause: 2000,
        width: 700,
        margin: 300,
        transition: 'slide'
    },
    options = $.extend(defaults, options);

    function slideDirection(element) {
      // var transition = (dir === 'next') ? '-' : '+';
      element.children().each(function(i, val) {
        $(val).animate({ 'left': transition + width + 'px'}, options.speed);
      });
      // width = (dir === 'next') ? width + 1000 : width - 1000;
    }

    this.each(function() {
      var $this = $(this);

      $this.wrap('<div class="slider-wrap" />');

      $this.css({
        'width': '99999px',
        'position': 'relative',
        'padding': 0
      });

      if (options.transition === 'slide') {

        $this.children().css({
          'float': 'left',
          'width': options.width,
          'marginRight': options.margin
        });

        $('.slider-wrap').css({
          'width': $this.children().width(),
          'margin': "0 auto"
        });

        var slideWidth = options.width + options.margin,
            clicked = false,
            prevClicked = false,
            totalSlides = $this.children().length,
            count = 1;

        console.log('total slides', $this.children().length);

        $('.next').click(function() {
          // if (!!prevClicked) { nextCount--; }
          // nextCount++;
          console.log('next count', count);
          console.log('next click', clicked);
          if (count == (totalSlides)) { return; }
            if (!clicked && !!prevClicked) { slideWidth += 1000; }
            $this.children().each(function(i, val) {
              console.log('val', val, 'i', i);
              $(val).animate({ 'left': '-' + slideWidth + 'px'}, options.speed);
            });
            slideWidth += 1000;
            count++;
            clicked = true;
        });

        $('.prev').click(function() {
          // if (!!clicked) { prevCount--; }
          // prevCount++;
          // count--;
          if (slideWidth == 0) { return; }
          console.log('init', slideWidth);
          console.log('prev clicked', clicked);
          console.log('prev count', count);
          if (!!clicked) {
            slideWidth -= 2000;
          } else {
            slideWidth -= 1000;
          }
            console.log('after', slideWidth);
            $this.children().each(function(i, val) {
              console.log('prev slideWidth', slideWidth);
              // var dir = (prevCount > i) ? 'next' : 'prev';
              $(val).animate({ 'left': '-' + slideWidth + 'px'}, options.speed);
            });
            clicked = false;
            count--;
            prevClicked = true;
        });

      }

    });


  };

/*
@todo content area boundaries
@todo hover content block animation
*/

})(jQuery);
