<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>

<script>
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
</script>

<script>
    $(document).ready(function() {
        var url = window.location;
        $('ul.navbar-nav a[href="' + url + '"]').parent().addClass('active');
        $('ul.navbar-nav a').filter(function() {
            return this.href == url;
        }).addClass('active');
    });
</script>
