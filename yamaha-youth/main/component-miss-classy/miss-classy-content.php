<section class="" id="miss-classy">
    <div class="section-container m-auto px-5 d-flex">

        <aside class="col-4">
            <div class="sidebar-city">
                <div class="sidebar-city-image-canvas">
                    <img
                    src="./assets/images/miss-classy/miss-classy-sidebar-city.jpg"
                    class="sidebar-city-img"
                    alt=""
                    />
                </div>
                <div class="miss-classy-desc">
                    <div class="sidebar-city-desc p-3 gap-3">
                        <h3 class="gill-sans-1000 px-3 mb-3">
                            MISS CLASSY BANDUNG
                        </h3>
                        <div class="paragraph rounded px-3 py-2">
                        <p>
                        Dalam kompetisi "Miss Classy" di Clasy Yamaha Youth Festival, siswi paling
                        fashionable dan classy dari setiap sekolah akan menampilkan gaya terbaik
                        mereka di hadapan para juri pada Grand Final School Competition. Dukung
                        perwakilan sekolahmu (Classy People) dengan mengirim vote sebanyak-banyaknya
                        untuk mendapatkan gelar Miss Classy.
                        </p>
                        </div>
                    </div>
                    <?php
                        include "./main/component/social-media-share.php";
                    ?>
                    <div class="accordion mt-4" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Cara Voting
                            </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="list-container">

                                    <ol>
                                        <li>
                                            Untuk melakukan voting, masuk menggunakan akun MPC atau daftar menggunakan
                                            email / nomor HP.
                                        </li>
                                        <li>Setiap akun memiliki kuota 1X vote setiap rentang waktu 30 menit.</li>
                                        <li>
                                            Terus gunakan kuota vote kamu setiap hari agar perwakilan sekolahmu bisa
                                            jadi juaranya.
                                        </li>
                                        <li>
                                            Periode voting Miss Classy terbatas, dapatkan informasi secara lengkap
                                            dengan datang ke GOR saat event berlangsung.
                                        </li>
                                    </ol>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </aside>
        <div class="miss-classy-vote col-8 d-flex flex-column align-items-center">
            <ul
            class="nav nav-pills mb-3  justify-content-center"
            id="pills-tab"
            role="tablist"
            >
                <li class="nav-item p-1 article-tab col-6" role="presentation">
                    <button
                    class="nav-link active "
                    id="article-aggregator"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-article-aggregator"
                    type="button"
                    role="tab"
                    aria-controls="pills-article-aggregator"
                    aria-selected="true"
                    >
                    Vote Classy People
                    </button>
                </li>
                <li class="nav-item p-1 video-tab col-6" role="presentation">
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
                    Top Picks
                    </button>
                </li>
            </ul>
            <div class="vote-card-container d-flex flex-wrap justify-content-around px-4">
                <?php
                    include "./main/component-miss-classy/miss-classy-vote-card.php";
                ?>
                <?php
                    include "./main/component-miss-classy/miss-classy-vote-card.php";
                ?>
                <?php
                    include "./main/component-miss-classy/miss-classy-vote-card.php";
                ?>
                <?php
                    include "./main/component-miss-classy/miss-classy-vote-card.php";
                ?>
            </div>
        </div>
    </div>
</section>