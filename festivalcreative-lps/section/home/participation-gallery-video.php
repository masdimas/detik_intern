<section id="finalist">
        <div class="container mycontainer">
            <div class="row">
                <div class="col-12">
                    <h1 class="section-title">
                        Finalis Kompetisi Video
                    </h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <?php
                    $array_submission = array(
                        array(
                            "id-finalist-data",
                            "https://www.youtube.com",
                            "https://cdnstatic.detik.com/live/2023/09/cpm_premium/afpi/230915-afpi-registrasi-300x600.jpg",
                            "title",
                            "pengirim"
                        ),
                        array(
                            "id-finalist-data",
                            "https://www.youtube.com",
                            "https://cdnstatic.detik.com/live/2023/09/cpm_premium/afpi/230915-afpi-registrasi-300x600.jpg",
                            "title 2",
                            "pengirim 2"
                        ),
                    )
                ?>
                <?php for($x=0; $x  < count($array_submission); $x++){ ?>
                            <div class='col-lg-4 col-md-4 col-12'>
                                <a id='<?= $array_submission[$x][0] ?>' href='<?= $array_submission[$x][1] ?>' target='_blank'>
                                    <div class='finalist-data'>
                                        <div class='finalist-thumbnail'>
                                            <img src='<?= $array_submission[$x][2] ?>' alt='thumbnail'>
                                        </div>
                                        <h1 class='finalist-title'>
                                        <?= $array_submission[$x][3] ?>
                                        </h1>
                                        <p class='finalist-name'>
                                        <?= $array_submission[$x][4] ?>
                                        </p>
                                    </div>
                                </a>
                            </div>
                <?php }?>
            </div>
        </div>
    </section>