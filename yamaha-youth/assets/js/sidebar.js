$(function() {
  var top = $('#wrap-kategori').offset().top - parseFloat($('#wrap-kategori').css('marginTop').replace(/auto/, 0));
  var footTop = $('#footer').offset().top - parseFloat($('#footer').css('marginTop').replace(/auto/, 0));

  var maxY = footTop - $('#wrap-kategori').outerHeight();

  $(window).scroll(function(evt) {
    var wi = $(window).width();

    var y = $(this).scrollTop();

    if (wi >= 767) {
      if (y > top) {
        if (y < maxY) {
          $('#wrap-kategori').addClass('fixed').removeAttr('style');
        } else {
          $('#wrap-kategori').removeClass('fixed').css({
            position: 'absolute',
            top: (maxY - top) + 'px'
          });
        }
      } else {
        $('#wrap-kategori').removeClass('fixed');
      }
    }
  });
});