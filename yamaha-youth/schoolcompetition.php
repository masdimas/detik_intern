<!DOCTYPE html>
<html>
<?php
include "./main/component/head.php";
?>

<body>
  <!-- Navbar -->
  <?php
  include "./main/component/navbar.php";
  ?>

  <?php
  include "./main/component-schoolcompetition/content.php";
  ?>

  <!-- Footer -->
  <?php
  include "./main/component/footer.php";
  ?>

</body>

<!-- Foot -->
<?php
include "./main/component/foot.php";
?>

<script>
  $(function() {
    var top = $('#wrap-kategori').offset().top - parseFloat($('#wrap-kategori').css('marginTop').replace(/auto/, 0));
    var footTop = $('#footer').offset().top - parseFloat($('#footer').css('marginTop').replace(/auto/, 0));

    var maxY = footTop - $('#wrap-kategori').outerHeight();

    $(window).scroll(function(evt) {
      var wi = $(window).width();

      var y = $(this).scrollTop();

      if (wi >= 767) {
        if (y >= top - $('#social-media-share').height()) {
          if (y < maxY) {
            $('#wrap-kategori').addClass('fixed').removeAttr('style');
          } else {
            $('#wrap-kategori').removeClass('fixed').css({
              position: 'absolute',
              // top: (maxY - top) + 'px'
              top : (top) + 'px',
            });
          }
        } else {
          $('#wrap-kategori').removeClass('fixed').removeAttr('style');
        }
      }
    });
  });
</script>

<!-- <script type="text/javascript" src="assets/js/countdown.js"></script> -->

</html>