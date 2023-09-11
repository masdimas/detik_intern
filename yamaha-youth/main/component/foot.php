    <script src="./assets/include/jquery/jquery.js"></script>
    <script src="./assets/include/swiper-min/swiper.min.js"></script>
    <script src="./assets/include/bootstrap/js/bootstrap.min.js"></script>
    <script src="./assets/js/navbar.js"></script>
    <script src="./assets/js/about-swiper.js" type="module"></script>
    <script src="./assets/js/index.js" type="module"></script>
    <script src="./node_modules/aos/dist/aos.js"></script>
    <script src="./assets/js/photo-gallery.js"></script>    

    <script>
        $(function() {
  var top = $('#sidebar').offset().top - parseFloat($('#sidebar').css('marginTop').replace(/auto/, 0));
  var footTop = $('#footer').offset().top - parseFloat($('#footer').css('marginTop').replace(/auto/, 0));

  var maxY = footTop - $('#sidebar').outerHeight();

  $(window).scroll(function(evt) {
    var y = $(this).scrollTop();
    if (y > top) {
      if (y < maxY) {
        $('#sidebar').addClass('fixed').removeAttr('style');
      } else {
        $('#sidebar').removeClass('fixed').css({
          position: 'absolute',
          top: (maxY - top) + 'px'
        });
      }
    } else {
      $('#sidebar').removeClass('fixed');
    }
  });
});

    </script>