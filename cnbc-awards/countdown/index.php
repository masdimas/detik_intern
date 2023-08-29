<!DOCTYPE html>
<html>
    <head>
        <title>CNBC Indonesia Awards 2022</title>
        <!-- Favicon -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
        <link rel="mask-icon" href="assets/images/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="assets/css/animate.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="assets/css/custom.css">
        <link rel="stylesheet" href="assets/css/countdown.css">
    </head>

    <body>
        <section id="cover" class="cover">
            <div class="container mycontainer">
                <div class="row">
                    <div class="col-md-8 col-12 left-side">
                        <h1 class="wow animate__animated animate__fadeInUp font-700 white" data-wow-delay="0.5s">
                            CNBC Indonesia Awards 2022
                        </h1>
                        <p class="wow animate__animated animate__fadeInUp font-400 gold" data-wow-delay="0.75s">
                            Ajang penghargaan kepada para pelaku di berbagai industri yang berhasil beradaptasi dan terus tumbuh di tengah tantangan dan berbagai kondisi yang terjadi. 
                        </p>
                        <?php
                            include "assets/include/countdown.php";
                        ?>
                        <p class="wow animate__animated animate__fadeInUp font-400 white location" data-wow-delay="1s">
                        Senin, 12 Desember 2022<br>Hotel St. Regis, Jakarta
                        </p>

                        <div class="wow animate__animated animate__fadeIn liveon-box" data-wow-delay="1.25s">
                            <div class="left-side">
                                <span class="liveon-text font-400">
                                    LIVE ON
                                </span>
                            </div>
                            <div class="right-side">
                                <img class="logo-cnbctv" src="assets/images/logo-tv.png" alt="logo-cnbctv">
                                <span class="liveon-text liveon-tv font-400">
                                     CNBC INDONESIA TV
                                </span>
                                <div class="divider"></div>
                                <span class="liveon-text font-400">
                                    cnbcindonesia.com/awards-live
                                </span>
                            </div>  
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-12 right-side">
                        <img class="wow animate__animated animate__fadeIn image-trophy" src="assets/images/trophy.png" alt="trophy" data-wow-delay="1.25s">
                    </div>
                </div>
            </div>
        </section>
    </body>

    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="assets/js/wow.js"></script>
    <script type="text/javascript" src="assets/js/moment.js"></script>
    <script type="text/javascript" src="assets/js/countdown.js"></script>
</html>