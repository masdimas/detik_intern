<!doctype html>
<html class="scroll-smooth">
<?php include "../components/head.php" ?>

<body>
  <?php
    $home = true;
    $discover = false;
    $award_list = false;
    $winners = false;
  ?>
  
  <?php include "../components/navbar.php" ?>
  <?php include "../section/home/hero.php" ?>
  <?php include "../section/home/about.php" ?>
  <?php include "../section/home/ads-carousel.php" ?>
  <?php include "../section/home/photo-gallery.php" ?>
  <?php include "../section/home/program.php" ?>
  <?php include "../section/home/the-latest.php" ?>
  <?php include "../components/footer.php" ?>
  <script src="../../node_modules/preline/dist/preline.js"></script>
  <script src="../../node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

<?php include "../components/foot.php" ?>
<script>
  $(function() {
    $('#nav-home .navbar-menu-span').addClass('active');
  });
</script>

</html>