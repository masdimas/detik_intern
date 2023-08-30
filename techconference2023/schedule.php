<!doctype html>
<html lang="en">
  <?php
    include "assets/component/head.php";
  ?>
  <body class="schedule-page">
    <?php
      // S:NAVBAR
      $menu_about = false;
      $menu_schedule = true;
      $menu_showcase = false;
      include "assets/component/navbar.php";
      // E:NAVBAR

      if($_GET["ticker"] == "1"){
        include "assets/component/ticker.php";
      }
    ?>
    
    <!-- Section Speaker Banner -->
    <section id="speakers">
        <div class="container-fluid speakers-container">
            <div class="box-speakers">
                <img src="assets/images/banner-speakers.jpg" alt="banner-speakers" class="d-none d-sm-block">
                <img src="assets/images/banner-speakers-mobile.jpg" alt="banner-speakers" class="d-block d-sm-none">
            </div>
        </div>
    </section>
    <!-- End of Section Speaker Banner -->
    
    <!-- Section Schedule Detail -->
    <section id="schedule-detail">
        <div class="container mycontainer">
            <div class="row">
                <div class="col-12">
                    <h1 class="schedule-title sg-700">
                        [Day 1] Future Trend for Healthier Tech Ecosystem
                    </h1>
                    <p class="schedule-date sg-700">
                        Jumat, 20 September 2022
                    </p>
                </div>
                <div class="col-12">
                    
                </div>
                <?php
                    for($x=1; $x<9; $x++){
                        echo"
                        <div class='col-12 schedule-breakdown'>
                            <p class='schedule-time sg-400'>10.00 - 10.15 WIB</p>
                            <h1 class='schedule-theme sg-700'>Women Leaders - Making a Difference!</h1>
                            <p class='schedule-speaker-name sg-400'>International Speaker $x</p>
                        </div>
                        ";
                    }
                ?>
            </div>
        </div>
    </section>
    <!-- End of Section Schedule Detail -->

    <!-- Footer -->
    <?php
        include "assets/component/footer.html";
        include "assets/component/foot.php";
    ?>
  </body>
</html>