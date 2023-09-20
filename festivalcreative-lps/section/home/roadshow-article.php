<section id="roadshow-article">
        <div class="container mycontainer">
            <div class="row">
                <div class="col-12">
                    <h1 class="section-title">
                        News Update
                    </h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <?php
                    for($x=1; $x<=12; $x++){
                        echo "
                            <div class='col-lg-3 col-md-3 col-6'>
                                <a href='https://www.youtube.com' target='_blank'>
                                    <div class='roadshow-article-data'>
                                        <div class='roadshow-article-thumbnail'>
                                            <img src='./src/image/roadshow/banner-1.jpg' alt='thumbnail'>
                                        </div>
                                        <h1 class='roadshow-article-title'>
                                            LPS Goes to Campus Hadir di 5 Kampus Berbagi Ide dan Pengalaman
                                        </h1>
                                        <p class='roadshow-article-name'>
                                            Rabu, 23 Aug 2023 22:50 WIB
                                        </p>
                                    </div>
                                </a>
                            </div>
                        ";
                    }
                ?>
            </div>
        </div>
    </section>