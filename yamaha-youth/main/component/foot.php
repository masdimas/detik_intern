  <script src="./assets/include/jquery/jquery.js"></script>
  <script src="./assets/include/swiper-min/swiper.min.js"></script>
  <script src="./assets/include/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/navbar.js"></script>
  <script src="./assets/js/about-swiper.js" type="module"></script>
  <script src="./assets/js/index.js" type="module"></script>
  <script src="./node_modules/aos/dist/aos.js"></script>
  <script src="./assets/js/photo-gallery.js"></script>
  <script>
    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(
      document.querySelectorAll('[data-bs-toggle="tooltip"]')
    );
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl);
    });
  </script>

  <script>
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
  </script>