<!DOCTYPE html>
<html>
    <?php
        include "assets/include/head.php";
    ?>
    <body>
        <!-- Navbar -->
            <?php
                include "assets/include/navbar.php";
            ?>
        <!-- End of Navbar -->

        <!-- Ticker Live -->
            <?php
            if($_GET["live"]=="1"){
                include "assets/include/ticker.php";   
            }
            ?>
        <!-- End of Ticker Live -->

        <!-- Section Cover -->
        <?php
            include "assets/include/cover.php";
        ?>
        <!-- End of Section Cover -->
        
        <!-- Section Event Slider -->
        <?php
            include "assets/include/event-slider.php";
        ?>
        <!-- End of Section Slider -->

        <!-- Section Video -->
        <?php
            include "assets/include/video.php";
        ?>
        <!-- End of Section Video -->

        <!-- Section Award Categories -->
        <?php
            include "assets/include/award-categories.php";
        ?>
        <!-- End of Award Categories -->

        <!-- Section Awardees -->
        <?php
            include "assets/include/awardees.php";
        ?>
        <!-- End of Section Awardees -->

        <!-- Section Photo Gallery -->
        <?php
            include "assets/include/photogallery.php";
        ?>
        <!-- End of Section Photo Gallery -->

        <!-- Section G20 -->
        <?php
            include "assets/include/g20.php";
        ?>
        <!-- End of Section G20 -->

        <!-- Section Video Article -->
        <?php
            include "assets/include/video-article.php";
        ?>
        <!-- End of Section Video Article -->

        <!-- Section Berita Terkini -->
        <?php
            include "assets/include/berita-terkini.php";
        ?>
        <!-- End of Berita Terkini -->

        <!-- Section Special Report -->
        <?php
            include "assets/include/special-report.php";
        ?>
        <!-- End of Section Special Report -->

        <!-- Footer -->
        <?php
            include "assets/include/footer.php";
        ?>
    </body>

    <?php
        include "assets/include/foot.php";
    ?>
    <script type="text/javascript" src="assets/js/countdown.js"></script>
</html>