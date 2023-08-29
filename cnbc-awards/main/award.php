<!DOCTYPE html>
<html>
<?php
    include "assets/include/head.php";
?>
<body>
<?php
        include "assets/include/navbar.php";
        if($_GET["live"]=="1"){
            include "assets/include/ticker.php";   
        }
    ?>
    <section id="award-categories-page">
        <div class="container mycontainer">
            <div class="row award-categories-title">
                <div class="col-12 text-center">
                    <?php
                        if($_GET["page"]=="categories"){
                            echo "<h1 class='font-600 wow animate__animated animate__fadeInUp' data-wow-duration='2s'>
                            Award Categories
                        </h1>";
                        } else if($_GET["page"]=="awardees") {
                            echo "<h1 class='font-600 wow animate__animated animate__fadeInUp' data-wow-duration='2s'>
                            Awardees List
                        </h1>";
                        }
                    ?>
                    
                </div>
            </div>
            <div class="row award-categories-list">
                <?php
                    if($_GET["page"]=="categories"){
                        include "assets/include/award-categories-list.php";
                    } else if($_GET["page"]=="awardees") {
                        include "assets/include/awardees-list.php";
                    };
                ?> 
            </div>
            
        </div>
    </section>

    <?php
        if($_GET["page"]=="awardees"){
            echo "
            <section id='download-special-report'>
                <div class='container mycontainer'>
                    <div class='row'>
                        <div class='wow animate__animated animate__fadeInUp col-12 text-center'>
                            <h2 class='font-400'>
                                Special Report 2022
                            </h2>
                            <h1 class='font-400'>
                                Unduh kajian lengkap Tim Riset CNBC Indonesia untuk para pemenang awards
                            </h1>
                            <a href='report.php' class='btn btn-default font-400 download'>
                                Download PDF Special Report
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            ";
        };
    ?>
    
    <?php
        //Include Footer di Sini
        include "assets/include/footer.php";
    ?>
    <?php
        include "assets/include/foot.php";
    ?>
</body>
</html>