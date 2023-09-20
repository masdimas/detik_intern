<!doctype html>
<html>
<?php include "../components/head.php" ?>

<body>
<?php
    $home = false;
    $discover = true;
    $award_list = false;
    $winners = false;
  ?>
  <?php include "../components/navbar.php" ?>
  <?php include "../section/discover/main-title.php" ?>
  <?php include "../section/discover/content.php" ?>
  <?php include "../section/discover/pagination.php" ?>
  <?php include "../components/footer.php" ?>
  <script src="../../node_modules/preline/dist/preline.js"></script>
  <script src="../../node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

<?php include "../components/foot.php" ?>
<script>
  $(function() {
    $('#nav-discovery .navbar-menu-span').addClass('active');
  });
  
  $(document).ready(function(){
    const queryString = window.location.search;

    if (queryString != 0) {
      $("#tab-discover button:eq(0)").removeClass("active");
      $("#tab-discover button:eq(1)").addClass("active");
      $("#pills-with-brand-color-2").removeClass("hidden");
      $("#pills-with-brand-color-1, #pills-with-brand-color-3").addClass("hidden");
    } else {
    }
  });
  
</script>

</html>