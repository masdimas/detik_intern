<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>

<!-- Old Navbar Script -->
<!-- <script>
    myID = document.getElementById("myID");

    var myScrollFunc = function() {
        var y = window.scrollY;
        if (y >= 80) {
            myID.className = "topMenu show"
        } else {
            myID.className = "topMenu hide"
        }
    };

    window.addEventListener("scroll", myScrollFunc);
</script> -->

<script>
    $(document).ready(function() {
        var url = window.location;
        $('ul.navbar-nav a[href="' + url + '"]').parent().addClass('active');
        $('ul.navbar-nav a').filter(function() {
            return this.href == url;
        }).addClass('active');
    });
</script>

<!-- Script for copy link tooltip popup -->
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
