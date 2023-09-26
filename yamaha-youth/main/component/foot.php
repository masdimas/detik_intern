  <script src="./assets/include/jquery/jquery.js"></script>
  <script src="./assets/include/swiper-min/swiper.min.js"></script>
  <script src="./assets/include/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/navbar.js"></script>
  <script src="./assets/js/about-swiper.js" type="module"></script>
  <script src="./assets/js/index.js" type="module"></script>
  <!-- <script src="./node_modules/aos/dist/aos.js"></script> -->
  <script src="./assets/js/photo-gallery.js"></script>
  <script src="./assets/js/school-swiper.js"></script>
  <script src="./assets/js/miss-classy-vote-modals.js"></script>
  
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
    $(document).ready(function() {
      // Initialize the tooltip
      $('#copy-link').tooltip();

      // Add a click event to show the tooltip
      $('#copy-link').on('click', function() {
        var tooltip = $(this);

        // Show the tooltip
        tooltip.tooltip('show');

        // Add a timeout to hide the tooltip after 3 seconds
        setTimeout(function() {
          tooltip.tooltip('hide');
        }, 3000); // 3000 milliseconds (3 seconds)
      });
    });
  </script>

<script>
    $(document).ready(function() {
      // Initialize the tooltip
      $('#copy-link-sc').tooltip();

      // Add a click event to show the tooltip
      $('#copy-link-sc').on('click', function() {
        var tooltip = $(this);

        // Show the tooltip
        tooltip.tooltip('show');

        // Add a timeout to hide the tooltip after 3 seconds
        setTimeout(function() {
          tooltip.tooltip('hide');
        }, 3000); // 3000 milliseconds (3 seconds)
      });
    });
  </script>

  

  <script>
    $(function() {
      $("#copy-link").click(function() {
        setTimeout(function() {
          $('#element').tooltip('hide')
        }, 2000)
      })
    });
  </script>
