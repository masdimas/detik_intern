<!doctype html>
<html lang="en">
  <?php
    include "assets/component/head.php";
  ?>
  <body class="home-page">
    <?php

      // S:NAVBAR
      $menu_about = true;
      $menu_schedule = false;
      $menu_showcase = false;
      include "assets/component/navbar.php";
      // E:NAVBAR

      if($_GET["ticker"] == "1"){
        include "assets/component/ticker.php";
      }
    ?>
    
    <!-- Section Cover -->
    <section id="cover">
      <div class="container mycontainer">
        <div class="row">
          <div class="col-12 cover-text-box">
            <div class="row">
              <div class="col-12">
                <h1 class="cover-title-text q-400">
                CNBC Indonesia Tech Conference 2023
                </h1>
                <h1 class="cover-theme-text sg-700">
                Collaboration for Innovation
                </h1>
              </div>
            </div>
            <div class="row cover-cta">
              <div class="col-12">
                <p class="cover-desc-text sg-400">
                Kami memberikan ruang kepada para startup di Indonesia untuk menunjukkan, serta mempromosikan brand mereka untuk mendapatkan perhatian dari venture capital atau angel investor.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- End of Section Cover -->

<!-- Section About -->
<section id="about">
  <div class="container mycontainer">
      <div class="row">
          <div class="col-md-5 col-12 l-content">
          <div class="box-player">
              <div class="player-16_9">
              <iframe src="https://www.cnbcindonesia.com/embed/tv" frameborder="0" scrolling="no" allowfullscreen="true"></iframe>
              </div>
          </div>
          </div>
          <div class="col-md-7 col-12 r-content">
          <h1 class="about-header sg-700">
          About CNBC Indonesia Tech Conference 2023
          </h1>
          <p class="about-desc-text sg-400" data-wow-delay="0.75s">Dengan membawakan tema Innovating Technology, Unlimited Dreams bersama dengan International Speaker, Regulator, hingga pelaku bisnis yang bergerak di industri teknologi bersama akan mengupas bagaimana inovasi dan impian para pengembang teknologi untuk perkembangan teknologi Indonesia di masa depan. Selain itu, acara ini menjadi ajang bagi para Startup karena CNBC Indonesia turut memberikan wadah bagi para Startup untuk membangun networking kepada venture capital atau angel investor di Indonesia.</p>
          <a href="{tagsite}" target="_blank" class="about-hashtag sg-700">
            #techconference2023
          </a>
          <div class="about-socmed-share">
                <span class="about-socmed-share-text sg-400">
                  Share
                </span>
                  <a href="#">
                    <img src="assets/images/twitter.png" class="img-fluid" alt="Twitter">
                  </a>
                  <a href="#">
                    <img src="assets/images/whatsapp.png" class="img-fluid" alt="WA">
                  </a>
                  <a href="#">
                    <img src="assets/images/facebook.png" class="img-fluid" alt="Facebook">
                  </a>
          </div>
      </div>
  </div>
</section>
<!-- End of Section About -->

<!-- Section Sponsor -->
<section id="sponsor">
  <div class="container mycontainer">
  <div class="row">
    <div class="col-12 text-center">
      <h1 class="sponsor-header-text sg-700">
        Dapatkan kesempatan dilirik oleh Venture Capital / Angel Investor serta menjadi narasumber di CNBC Indonesia
      </h1>
    </div>
  </div>
  </div>
  <div class="container-fluid container-sponsor">
    <div class="slick-sponsor">
      <?php
        for($y=0; $y<6; $y++){
          echo "
            <div class='slick-slide'>
              <div class='box-logo-sponsor'>
                <img src='assets/images/startup-logo.png' alt='startup-logo' class='logo-sponsor-image'>
              </div>
            </div>
            <div class='slick-slide'>
              <div class='box-logo-sponsor'>
                <img src='assets/images/logo-cnbc.png' alt='startup-logo' class='logo-sponsor-image'>
              </div>
            </div>
            <div class='slick-slide'>
              <div class='box-logo-sponsor'>
                <img src='assets/images/logo-detikcom.png' alt='startup-logo' class='logo-sponsor-image'>
              </div>
            </div>
            <div class='slick-slide'>
              <div class='box-logo-sponsor'>
                <img src='assets/images/logo-xpora.png' alt='startup-logo' class='logo-sponsor-image'>
              </div>
            </div>
          ";
        }
      ?>
    </div>
    <div class="container mycontainer">
      <div class="row">
        <div class="col-12 text-center">
          <a href="showcase.php" class="btn btn-default sg-700 ">
            Lihat Selengkapnya >
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End of Section Sponsor -->

<!-- Section Banner Speakers -->
<section id="speakers">
  <div class="container-fluid speakers-container">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <a href="#" target="_blank">
            <img src="assets/images/banner-speakers.jpg" alt="banner-speakers" class="d-none d-sm-block">
            <img src="assets/images/banner-speakers-mobile.jpg" alt="banner-speakers" class="d-block d-sm-none">
          </a>
        </div>
        <div class="swiper-slide">
          <a href="#" target="_blank">
            <img src="assets/images/banner-speakers.jpg" alt="banner-speakers" class="d-none d-sm-block">
            <img src="assets/images/banner-speakers-mobile.jpg" alt="banner-speakers" class="d-block d-sm-none">
          </a>
        </div>
        <div class="swiper-slide">
          <a href="#" target="_blank">
            <img src="assets/images/banner-speakers.jpg" alt="banner-speakers" class="d-none d-sm-block">
            <img src="assets/images/banner-speakers-mobile.jpg" alt="banner-speakers" class="d-block d-sm-none">
          </a>
        </div>
      </div>
      <div class="box-swiper-navigation d-none d-sm-block">
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>
<!-- End of Section Speakers -->

<!-- Section Ads Banner -->
<section id="adsbanner">
  <div class="container mycontainer">
    <div class="row">
      <div class="col-12 text-center mobile-hide d-none d-sm-block">
        <ins>
          <a href="#" target="_blank">
            <img src="assets/images/sponsor-desktop.png" alt="sponsor-desktop">
          </a>
        </ins>
      </div>
      <div class="col-12 text-center mobile-show d-block d-sm-none">
        <ins>
          <a href="#" target="_blank">
            <img src="assets/images/sponsor-mobile.png" alt="sponsor-desktop">
          </a>
        </ins>
      </div>
    </div>
  </div>
</section>
<!-- End of Section Ads Banner -->

<!-- Section News -->
<section id="news">
    <div class="container-fluid">
    </div>
    <div class="container mycontainer">
    <div class="row">
        <div class="col-12">
        <h1 class="sg-700 news-header">Tech Update</h1>
        </div>
    </div>
    
    <div class="row">
      <div class="col-12">
          <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active sg-700" id="pills-2023-tab" data-toggle="pill" href="#pills-2023" role="tab" aria-controls="pills-2023" aria-selected="true">2023</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link sg-700" id="pills-2023-tab" data-toggle="pill" href="#pills-2022" role="tab" aria-controls="pills-2023" aria-selected="false">2022</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link sg-700" id="pills-2023-tab" data-toggle="pill" href="#pills-2021" role="tab" aria-controls="pills-2023" aria-selected="false">2021</a>
            </li>
          </ul>
      </div>
    </div>
    
    <div class="row">
      <div class="col-12 tab-content-area">
        <div class="tab-content" id="pills-tabContent">
        <!-- Tab Panel 2023 -->
        <div class="tab-pane fade show active" id="pills-2023" role="tabpanel" aria-labelledby="pills-2023-tab">

            <div class="row">
              <?php
              for($x=0; $x<4; $x++){
                  echo "
                  <div class='col-md-3 col-6'>
                      <a href='#' target='_blank'>
                          <div class='article'>
                              <div class='article-thumbnail'>
                                  <img src='assets/images/thumbnail-news.jpg' alt='news-thumbnail'>
                              </div>
                              <div class='row'>
                                  <div class='col-12'>
                                      <div class='article-data'>
                                          <h1 class='sg-700 article-title'>Dirut BRI Ikut ke Davos, CEO Global Bahas Inklusi Hingga ESG</h1>
                                          <p class='sg-400 article-date'>1 minggu yang lalu</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </a>
                  </div>
                  ";
              }
              for($y=0; $y<4; $y++){
                echo "
                <div class='col-md-3 col-6'>
                    <a href='#' target='_blank'>
                        <div class='article'>
                            <div class='article-thumbnail'>
                                <div class='duration'>
                                  <span class='duration-time sg-400'>
                                    <img src='assets/images/icon-play-bg.svg'> 12:00
                                  </span>
                                </div>
                                <img src='assets/images/thumbnail-news.jpg' alt='news-thumbnail'>
                            </div>
                            <div class='row'>
                                <div class='col-12'>
                                    <div class='article-data'>
                                        <h1 class='sg-700 article-title'>Dirut BRI Ikut ke Davos, CEO Global Bahas Inklusi Hingga ESG Dirut BRI Ikut ke Davos, CEO Global Bahas Inklusi Hingga ESG</h1>
                                        <p class='sg-400 article-date'>1 minggu yang lalu</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                ";
            }
              ?>
            </div>

            <div class="row">
                <div class="col-12 text-center">
                  <a href="#" target="_blank" class="btn btn-default sg-700 index-btn">
                      VIEW MORE <img src="assets/images/arrow-right.png" alt="" class="arrow-right">
                  </a>
                </div>
            </div>
          </div>

          <!-- Tab Panel 2022 -->
          <div class="tab-pane fade" id="pills-2022" role="tabpanel" aria-labelledby="pills-2023-tab">
          <div class="row">
              <?php
              for($x=0; $x<4; $x++){
                  echo "
                  <div class='col-md-3 col-6'>
                      <a href='#' target='_blank'>
                          <div class='article'>
                              <div class='article-thumbnail'>
                                  <img src='assets/images/thumbnail-news.jpg' alt='news-thumbnail'>
                              </div>
                              <div class='row'>
                                  <div class='col-12'>
                                      <div class='article-data'>
                                          <h1 class='sg-700 article-title'>Dirut BRI Ikut ke Davos, CEO Global Bahas Inklusi Hingga ESG</h1>
                                          <p class='sg-400 article-date'>1 minggu yang lalu</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </a>
                  </div>
                  ";
              }
              for($y=0; $y<4; $y++){
                echo "
                <div class='col-md-3 col-6'>
                    <a href='#' target='_blank'>
                        <div class='article'>
                            <div class='article-thumbnail'>
                                <div class='duration'>
                                  <span class='duration-time sg-400'>
                                    <img src='assets/images/icon-play-bg.svg'> 12:00
                                  </span>
                                </div>
                                <img src='assets/images/thumbnail-news.jpg' alt='news-thumbnail'>
                            </div>
                            <div class='row'>
                                <div class='col-12'>
                                    <div class='article-data'>
                                        <h1 class='sg-700 article-title'>Dirut BRI Ikut ke Davos, CEO Global Bahas Inklusi Hingga ESG</h1>
                                        <p class='sg-400 article-date'>1 minggu yang lalu</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                ";
            }
              ?>
            </div>

            <div class="row">
                <div class="col-12 text-center">
                  <a href="#" target="_blank" class="btn btn-default sg-700 index-btn">
                      VIEW MORE <img src="assets/images/arrow-right.png" alt="" class="arrow-right">
                  </a>
                </div>
            </div>

          </div>

          <!-- Tab Panel 2021 -->
          <div class="tab-pane fade" id="pills-2021" role="tabpanel" aria-labelledby="pills-2023-tab">
          <div class="row">
              <?php
              for($y=0; $y<4; $y++){
                echo "
                <div class='col-md-3 col-6'>
                    <a href='#' target='_blank'>
                        <div class='article'>
                            <div class='article-thumbnail'>
                                <div class='duration'>
                                  <span class='duration-time sg-400'>
                                    <img src='assets/images/icon-play-bg.svg'> 12:00
                                  </span>
                                </div>
                                <img src='assets/images/thumbnail-news.jpg' alt='news-thumbnail'>
                            </div>
                            <div class='row'>
                                <div class='col-12'>
                                    <div class='article-data'>
                                        <h1 class='sg-700 article-title'>Dirut BRI Ikut ke Davos, CEO Global Bahas Inklusi Hingga ESG</h1>
                                        <p class='sg-400 article-date'>1 minggu yang lalu</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                ";
            }
              for($x=0; $x<4; $x++){
                  echo "
                  <div class='col-md-3 col-6'>
                      <a href='#' target='_blank'>
                          <div class='article'>
                              <div class='article-thumbnail'>
                                  <img src='assets/images/thumbnail-news.jpg' alt='news-thumbnail'>
                              </div>
                              <div class='row'>
                                  <div class='col-12'>
                                      <div class='article-data'>
                                          <h1 class='sg-700 article-title'>Dirut BRI Ikut ke Davos, CEO Global Bahas Inklusi Hingga ESG</h1>
                                          <p class='sg-400 article-date'>1 minggu yang lalu</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </a>
                  </div>
                  ";
              }
              
              ?>
            </div>

            <div class="row">
                <div class="col-12 text-center">
                  <a href="#" target="_blank" class="btn btn-default sg-700 index-btn">
                      VIEW MORE <img src="assets/images/arrow-right.png" alt="" class="arrow-right">
                  </a>
                </div>
            </div>

          </div>
        </div>
      </div>
    </div>


    


    
    </div>
</section>
<!-- End of Section News -->


<!-- Footer -->
  <?php
    include "assets/component/footer.html";
    include "assets/component/foot.php";
  ?>
  </body>
</html>