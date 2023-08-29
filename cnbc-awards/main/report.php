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
    
    <section id="report">
        <div class="container mycontainer">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="assets/images/padlock.png" alt="padlock" class="wow animate__animated animate__fadeIn padlock-image" data-wow-duration="2s">
                    <h1 class="wow animate__animated animate__fadeIn font-600" data-wow-delay="0.5s" data-wow-duration="2s">
                        Maaf
                    </h1>
                    <h2 class="font-600 wow animate__animated animate__fadeIn" data-wow-delay="0.75s" data-wow-duration="2s">Laman ini belum dibuka</h2>
                    <p class="font-400 wow animate__animated animate__fadeIn" data-wow-delay="1s" data-wow-duration="2s">
                    Kajian lengkap dari Tim Riset CNBC Indonesia seputar penerima penghargaan CNBC Indonesia Awards 2022 dapat di unduh setelah pengumuman pemenang
                    </p>
                </div>
            </div>
        </div>
    </section>

    <?php
        //Include Footer di Sini
        include "assets/include/footer.php";
    ?>
    <?php
        include "assets/include/foot.php";
    ?>
</body>
</html>