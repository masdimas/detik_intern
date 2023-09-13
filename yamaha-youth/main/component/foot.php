  <script src="./assets/include/jquery/jquery.js"></script>
  <script src="./assets/include/swiper-min/swiper.min.js"></script>
  <script src="./assets/include/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/navbar.js"></script>
  <script src="./assets/js/about-swiper.js" type="module"></script>
  <script src="./assets/js/index.js" type="module"></script>
  <script src="./node_modules/aos/dist/aos.js"></script>
  <script src="./assets/js/photo-gallery.js"></script>
  <script src="./assets/js/sidebar.js"></script>
  <script>
    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(
      document.querySelectorAll('[data-bs-toggle="tooltip"]')
    );
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl);
    });
  </script>
