<section id="video-article">
    <div class="container mycontainer">
        <div class="row">
            <div class="col-md-6 col-12 left-side wow animate__animated animate__fadeIn" data-wow-duration="2s">
                <a href="{clickurl}" target="_blank">
                    <div class="box-big-thumbnail">
                        <img src="assets/images/thumbnail-video-article.jpg" alt="thumbnail" class="big-thumbnail-image">
                        <div class="big-thumbnail-data">
                            <h1 class="font-400 big-thumbnail-title">
                                Bank BJB &quot;Most Outstanding Bank in Liabilities Management&quot;
                            </h1>
                            <p class="font-400 big-thumbnail-date">
                                Senin, 05 Sep 2022 14:55 WIB
                            </p>
                            <img src="assets/images/icon-play.png" alt="icon-play" class="icon-play">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-12 right-side animate__animated animate__fadeIn" data-wow-duration="2s">
                <?php
                    for ($x=0; $x<4; $x++){
                        echo "
                            <a href='{clickurl}' target='_blank'>
                                <div class='box-small-thumbnail'>
                                    <div class='small-thumbnail-left'>
                                        <div class='box-16_9'>
                                            <img src='assets/images/thumbnail-video-article.jpg' alt='thumbnail' class='small-thumbnail-image'>
                                            <img src='assets/images/icon-play.png' alt='' class='small-icon-play'>
                                        </div>
                                    </div>
                                    <div class='small-thumbnail-right'>
                                        <h1 class='font-400 small-thumbnail-title'>
                                            Ridwan Kamil Raih &quot;Most Attractive Investment Destinatination&quot; Ridwan Kamil Raih &quot;Most Attractive Investment Destinatination&quot;
                                        </h1>
                                        <p class='font-400 small-thumbnail-date'>
                                            Senin, 05 Sep 2022 14:55 WIB
                                        </p>
                                    </div>
                                </div>
                            </a>
                        ";
                    }
                ?>
                
            </div>
        </div>
    </div>
</section>