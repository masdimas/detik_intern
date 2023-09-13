$(function() {
    var top = $('#destination').offset().top - parseFloat($('#destination').css('marginTop').replace(/auto/, 0));
    var footTop = $('#bottom').offset().top - parseFloat($('#bottom').css('marginTop').replace(/auto/, 0));

    var maxY = footTop - $('#destination').outerHeight();

    $(window).scroll(function(evt) {
      var y = $(this).scrollTop();
      if (y > top) {
        if (y < maxY) {
          $('#destination').addClass('fixed').removeAttr('style');
        } else {
          $('#destination').removeClass('fixed').css({
            position: 'absolute',
            top: (maxY - top) + 'px'
          });
        }
      } else {
        $('#destination').removeClass('fixed');
      }
    });
  });