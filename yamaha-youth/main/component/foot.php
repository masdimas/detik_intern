  <script src="./assets/include/jquery/jquery.js"></script>
  <script src="./assets/include/swiper-min/swiper.min.js"></script>
  <script src="./assets/include/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/navbar.js"></script>
  <script src="./assets/js/about-swiper.js" type="module"></script>
  <script src="./assets/js/index.js" type="module"></script>
  <script src="./node_modules/aos/dist/aos.js"></script>
  <script src="./assets/js/photo-gallery.js"></script>
  <!-- <script src="./assets/js/sidebar.js"></script> -->
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
      var footTop = $('#footer').offset().top - parseFloat($('#footer').css('marginTop').replace(/auto/, 0));

      var maxY = footTop - $('#destination').outerHeight();

      $(window).scroll(function(evt) {
        var wi = $(window).width();

        var y = $(this).scrollTop();

        if (wi >= 480) {
          if (y > top) {
            if (y < maxY) {
              $('#destination').addClass('fixed').removeAttr('style');
            } else {
              $('#destination').removeClass('fixed').css({
                position: 'absolute',
                top: (maxY - top) + 'px'
              });
            }
          }
        } else {
          $('#destination').removeClass('fixed');
        }
      });
    });
  </script>

  <script>
    var swiper = new Swiper(".school-slider1", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    var swiper = new Swiper(".school-slider2", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: ".swiper-pagination-2",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    var swiper = new Swiper(".school-slider3", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: ".swiper-pagination-3",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    var swiper = new Swiper(".school-slider4", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: ".swiper-pagination-4",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    var swiper = new Swiper(".school-slider5", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: ".swiper-pagination-5",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    var swiper = new Swiper(".school-slider6", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: ".swiper-pagination-6",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    var swiper = new Swiper(".school-slider7", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: ".swiper-pagination-7",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    var swiper = new Swiper(".school-slider8", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: ".swiper-pagination-8",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>