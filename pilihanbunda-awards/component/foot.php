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

<!-- Old Nav Item Hoverer -->
<!-- <script>
    $(document).ready(function() {
        var url = window.location;
        $('ul.navbar-nav a[href="' + url + '"]').parent().addClass('active');
        $('ul.navbar-nav a').filter(function() {
            return this.href == url;
        }).addClass('active');
    });
</script> -->

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

<script>
    const navBar = document.querySelector(".nav-bar");
    const aboutButton = navBar.querySelectorAll(".nav-link");

    const sections = document.querySelectorAll("section");
    console.log(sections)
    const heroContent = document.query;
    window.onscroll = () => {
        let current = "";

        sections.forEach((section) => {
            const sectionTop = section.offsetTop;
            if (pageYOffset >= sectionTop - 150) {
            current = section.getAttribute("id");
            }
        });

        aboutButton.forEach((li) => {
            li.classList.remove("active");
            if (li.classList.contains(current)) {
            li.classList.add("active");
            }
        });
    };
</script>