<!doctype html>
<html lang="en">
<?php include "component/head.php"; ?>
<body>
<?php include "section/home/navbar.php"; ?>
    <?php include "section/home/headline.php"; ?>
    <div class="mb-5"></div>
    <?php 
        if($_GET["year"] == "2023"){
            include "section/home/banner.php";
        }
    ?>
    <?php
        if($_GET["gallery"] == "video"){
            include "section/home/participation-gallery-video.php";
        } else if($_GET["gallery"] == "poster"){
            include "section/home/participation-gallery-poster.php";
        } else if($_GET["gallery"] == "video-2022"){
            include "section/home/participation-gallery-video-2022.php";
        }
    ?>
    <?php include "section/home/footer.php"; ?>
</body>
<?php include "component/foot.php"; ?>
</html>