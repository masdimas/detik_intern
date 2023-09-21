<?php
    $array_roadshow = array(
        array(
            "id-banner",
            "https://cdnstatic.detik.com/minisite/Microsite-LPS/Bandung.png?_t=1695179280"
        ),
        array(
            "id-banner",
            "https://cdnstatic.detik.com/minisite/Microsite-LPS/Jogja.png?_t=1695179280"
        ),
        array(
            "id-banner",
            "https://cdnstatic.detik.com/minisite/Microsite-LPS/jakarta.png?_t=1695179280"
        ),
        array(
            "id-banner",
            "https://cdnstatic.detik.com/minisite/Microsite-LPS/Jogja.png?_t=1695179280"
        ),
    )
?>
<section id="roadshow-slider" class="mb-5">
    <div class="container mycontainer">
        <div class="row">
            <div class="col-12">
                <div class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        <?php for($x=0; $x  < count($array_roadshow); $x++){ ?>
                        <div class="swiper-slide roadshow-slider" id='<?= $array_roadshow[$x][0] + $x ?>'>
                            <img class="banner-desktop img-fluid" src='<?= $array_roadshow[$x][1] ?>'>
                        </div>
                        <?php }?>
                    </div>

                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>