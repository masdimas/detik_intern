<div id="form">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 requisite-wrap">
                <div class="requisite">
                    <div class="about">
                        <h1 class="about-icon-box text-center">
                            <img class="about-icon" src="./src/image/home/form/about-icon.png" alt="about-icon">
                        </h1>
                        <div class="title text-center m-2">
                            <span class="">TENTANG FESTIVAL CREARTIVE LPS 2023</span>
                        </div>
                        <div class="konten">
                            <p>FESTIVAL CREARTIVE LPS 2023 merupakan ajang kompetisi video pendek dan poster iklan layanan masyarakat yang ditujukan bagi insan kreatif Indonesia. Kegiatan ini secara rutin diselenggarakan oleh Lembaga Penjamin Simpanan (LPS) dan telah memasuki tahun kedua. Di tahun ini, LPS menambahkan satu kategori kompetisi yaitu kompetisi poster iklan layanan masyarakat. </p>
                            <p>Mengusung tema <b>&quot;Bangun Budaya Menabung, Wujudkan Finansial yang Sehat&quot;</b>, LPS mengajak seluruh lapisan masyarakat untuk berkontribusi dan memberikan ide kreatif sekaligus mengedukasi masyarakat mengenai manfaat <b>menabung di bank</b>. Melalui tagline #LPSBangunGenerasiCreArtive, LPS berkomitmen untuk mendukung ide-ide kreatif dari generasi muda Indonesia untuk turut aktif berpartisipasi dalam meningkatkan pemahaman masyarakat mengenai peran dan fungsi LPS.</p>
                            <p>
                            Sekilas mengenai LPS:<br>
                            LPS merupakan lembaga yang memiliki fungsi untuk menjamin simpanan nasabah di bank dan turut aktif dalam menjaga stabilitas sistem perbankan Indonesia.
                            </p>
                            <p class="text-center cta-lps">
                                Website: <a href="https://www.lps.go.id/" target="_blank"> lps.go.id</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 fill-wrap" id="form-section">
                <div class="fill">
                <?php
                    if($_GET["form"] == "closed"){
                        include "form-closed.php";
                    } else{
                        include "form-open.php";
                    }
                ?>
                </div>
            </div>
        </div>
    </div>
</div>