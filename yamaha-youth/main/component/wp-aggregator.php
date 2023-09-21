 <!-- Aggregator -->
 <section id="aggregator" class="py-5">
      <div class="section-container">
        <h1 class="gill-sans-1000 text-center">LATEST UPDATE</h1>
        <ul
          class="nav nav-pills mb-3 p-2 justify-content-center"
          id="pills-tab"
          role="tablist"
        >
          <li class="nav-item p-1 article-tab" role="presentation">
            <button
              class="nav-link active"
              id="article-aggregator"
              data-bs-toggle="pill"
              data-bs-target="#pills-article-aggregator"
              type="button"
              role="tab"
              aria-controls="pills-article-aggregator"
              aria-selected="true"
            >
              Article
            </button>
          </li>
          <li class="nav-item p-1 video-tab" role="presentation">
            <button
              class="nav-link"
              id="video-aggregator"
              data-bs-toggle="pill"
              data-bs-target="#pills-video-aggregator"
              type="button"
              role="tab"
              aria-controls="pills-video-aggregator"
              aria-selected="false"
            >
              Video
            </button>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div
            class="tab-pane fade show active container flex-wrap"
            id="pills-article-aggregator"
            role="tabpanel"
            aria-labelledby="pills-home-tab"
          >
            <?php
              for($x=0; $x<4; $x++){
                echo "
                    <div class='aggregator-card col-xl-4 col-md-6 col-12'>
                      <a href='{clickurl}' target='_blank'>
                        <div class='img-container'>
                          <img
                            src='./assets/images/wp-aggregator/aggregator-img-1.jpg'
                            alt=''
                          />
                        </div>
                        <div class='aggregator-card-content'>
                          <h4>
                            Yamaha Rangkul Para Generasi Muda, Gelar Fazzio Youth Project
                            di Seluruh Indonesia
                          </h4>
                          <span>Rabu, 21 Jun 2023 07:45 WIB</span>
                        </div>
                      </a>
                    </div>
                ";
              }
            ?>
          </div>

          <div
            class="tab-pane fade container flex-wrap"
            id="pills-video-aggregator"
            role="tabpanel"
            aria-labelledby="pills-profile-tab"
          >
          <?php
              for($y=0; $y<6; $y++){
                echo "
                <div class='aggregator-card col-xl-4 col-md-6 col-12'>
                  <a href='' target='_blank'>
                    <div class='img-container'>
                      <img
                        src='./assets/images/wp-aggregator/aggregator-img-1.jpg'
                        alt=''
                      />
                      <div class='video-duration-container p-3'>
                        <div
                          class='video-duration d-flex justify-content-center align-item-center px-3 py-2 rounded-pill gap-2'
                        >
                          <img
                            src='./assets/images/wp-aggregator/play-icon-aggregator.svg'
                            alt='Play'
                          />
                          <span>69:69</span>
                        </div>
                      </div>
                    </div>
                    <div class='aggregator-card-content'>
                      <h4>
                        Yamaha Rangkul Para Generasi Muda, Gelar Fazzio Youth Project
                        di Seluruh Indonesia
                      </h4>
                      <span>Rabu, 21 Jun 2023 07:45 WIB</span>
                    </div>
                  </a>
                </div>
                ";
              }
            ?>
          </div>
        </div>

      </div>
    </section>