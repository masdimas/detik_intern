<div id="votingform">
    <div class="container mb-5">
        <div class="header-voting mb-5">
            <h1>VOTING PILIHAN BUNDA</h1>
            <p>Ikutan voting "Pilihan Bunda" yuk, Bun! Rekomendasikan produk terbaik untuk keperluan sehari-hari untuk Bunda dan keluarga. Ada saldo e-wallet senilai total Rp10 juta rupiah untuk 100 Bunda yang beruntung.<br><br>Periode: 14 Oktober - 1 Desember 2023
            </p>

            <div class="d-flex justify-content-center sosmed" id="sosmed">
                <div class="social-media-share rounded-pill" id="social-media-share">
                    <span>Share</span>
                    <img src="./src/image/voting/facebook.svg" alt="">
                    <img src="./src/image/voting/twitter.svg" alt="">
                    <img src="./src/image/voting/whatsapp.svg" alt="">
                    <img src="./src/image/voting/telegram.svg" alt="">


                    <div id="copy-link" data-bs-trigger="manual" data-bs-placement="bottom" data-bs-animation="true" data-bs-toggle="tooltip" title="Tautan Disalin">
                        <img src="./src/image/voting/copylink.svg" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="voting-instruction mb-5 mt-md-5 mt-3">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Cara Voting
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <?php
                            if($_GET["voting"] == "polong"){
                                echo "
                                <ol class='rounded'>
                                    <li>Masuk menggunakan akun MPC atau daftar menggunakan email / nomor HP.</li>
                                    <li>Pilih salah satu Brand/Tokoh pilihan Bunda untuk masing-masing kategori yang Bunda rekomendasikan.</li>
                                    <li>Apabila ada kategori yang <b>tidak sesuai</b> dengan kondisi atau pengalaman bunda pilih “tidak memilih kategori”</li>
                                    <li>Klik “Submit” jika sudah yakin dengan pilihan Bunda</li>
                                </ol> ";
                            } else if($_GET["voting"] == "google"){
                                echo "
                                <ol class='rounded'>
                                    <li>Masuk menggunakan akun google atau gmail Bunda.</li>
                                    <li>Pilih salah satu Brand/Tokoh pilihan Bunda untuk masing-masing kategori yang Bunda rekomendasikan.</li>
                                    <li>Apabila ada kategori yang <b>tidak sesuai</b> dengan kondisi atau pengalaman bunda pilih “tidak memilih kategori”</li>
                                    <li>Klik “Submit” jika sudah yakin dengan pilihan Bunda</li>
                                </ol> 
                                ";
                            }
                        ?>
                        </div>
                    </div>
                </div>
                <!-- <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Cara Voting Menggunakan Google
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                              
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
        <div class="embed-voting mt-md-5 mt-3">
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdu_jspRPPOZ7SdbCv9K_xWHcBhraddptYCZjQaKmra7kcP_Q/viewform?embedded=true" height="1118" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
        </div>
     
    </div>
   
</div>