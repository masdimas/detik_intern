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
  <?php include "../section/road-to-detikcom-awards/main-title.php" ?>
  <?php include "../section/road-to-detikcom-awards/stream.php" ?>
  <?php include "../section/road-to-detikcom-awards/content.php" ?>
  <?php include "../section/road-to-detikcom-awards/pagination.php" ?>
  <?php include "../components/footer.php" ?>
  <script src="../../node_modules/preline/dist/preline.js"></script>
  <script src="../../node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

<?php include "../components/foot.php" ?>

</html>