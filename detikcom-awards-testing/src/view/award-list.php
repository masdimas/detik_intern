<!doctype html>
<html>
<?php include "../components/head.php" ?>

<body>
  <?php
    $home = false;
    $discover = false;
    $award_list = true;
    $winners = false;
  ?>
  <?php include "../components/navbar.php" ?>
  <?php include "../section/award-list/main-title.php" ?>
  <?php include "../section/award-list/content.php" ?>
  <?php include "../components/footer.php" ?>
  <script src="../../node_modules/preline/dist/preline.js"></script>
  <script src="../../node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

<?php include "../components/foot.php" ?>
<script>
  $(function() {
    $('#nav-awardlist .navbar-menu-span').addClass('active');
  });
</script>

</html>