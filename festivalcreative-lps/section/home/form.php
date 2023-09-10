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
                            <span class="">CREARTIVE LPS 2023</span>
                        </div>
                        <div class="konten">
                            <p>CREARTIVE LPS 2023 adalah festival kreatif yang diselenggarakan oleh Lembaga Penjamin Simpanan (LPS). Festival ini mengundang masyarakat Indonesia dari berbagai kalangan untuk mengungkapkan ide kreatif mereka mengenai literasi keuangan melalui kompetisi video pendek dan poster.</p>
                            <p>Dengan hashtag <b>#LPSBangunGenerasiCreArtive</b> , LPS berkomitmen untuk menjadi wadah aman yang mendukung kreativitas positif, mengajak semua orang untuk aktif berpartisipasi dalam meningkatkan pemahaman tentang pengelolaan keuangan yang baik.</p>
                        </div>
                    </div>
                    <!-- <div class="snk">
                        <div class="title text-center m-2">
                            <span>Syarat & Ketentuan</span>
                        </div>
                        <div class="konten">
                            <p>
                            <ol>
                                <li>Buat karya video pendek atau poster iklan layanan masyarakat sesuai dengan tema yang sudah ditentukan.</li>
                                <li>Narasi video atau poster iklan layanan masyarakat dapat berupa himbauan, ajakan, testimoni, tutorial kepada masyarakat terkait tema.</li>
                                <li>Karya video dan poster iklan layanan masyarakat tidak mengandung SARA dan tidak melanggar hukum/aturan yang berlaku.</li>
                                <li>Karya video atau poster iklan layanan masyarakat yang di submit merupakan karya asli pribadi/kelompok dan peserta wajib bertanggung jawab penuh terhadap karya tersebut.</li>
                                <li>Musik/suara latar karya video atau segala elemen dalam poster tidak melanggar ketentuan terkait Hak Cipta.</li>
                            </ol>

                            <p>Syarat ketentuan selengkapnya <a href="snk-view.php">klik di sini</a> </p>

                            </p>

                            <div>
                                <img src="./src/image/home/form/hadiah.png" alt="">
                            </div>


                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 fill-wrap" id="form-section">
                <div class="fill">
                    <div class="title-wrap mb-3">
                        <div class="title">
                            <span>Formulir Pendaftaran Kompetisi</span>
                        </div>
                    </div>
                    <div class="form-wrap">
                        <form class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="Tuliskan nama Anda di sini" required>
                                <div class="valid-feedback">
                                    Terlihat bagus!
                                </div>
                                <div class="invalid-feedback">
                                    Tolong isikan nama anda
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Tuliskan alamat email Anda di sini" required>
                                <div id="emailHelp" class="form-text">*Pastikan aktif</div>
                                <div class="valid-feedback">
                                    Terlihat bagus!
                                </div>
                                <div class="invalid-feedback">
                                    Tolong isikan email anda dengan benar
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="validationDefaultUsername" class="form-label">Nomor Telepon</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="inputGroupPrepend2">+62</span>
                                    <input type="tel" class="form-control" id="no-telp" aria-describedby="no-telphelp" placeholder="Tuliskan nomor telepon Anda di sini" onkeypress="return onlyNumberKey(event)" required>
                                    
                                    <div id="validationServerUsernameFeedback" class="valid-feedback">
                                        Terlihat bagus!
                                    </div>
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                        Tuliskan nomor telepon Anda di sini
                                    </div>
                                </div>
                                <div id="no-telphelp" class="form-text">*Pastikan aktif</div>
                            </div>
                            <div class="mb-3">
                                <label for="selectKategori" class="form-label">Kategori Lomba</label>
                                <select class="form-select" required aria-label="Default select example" id="selectKategori">
                                    <option value="0">Pilih kategori lomba</option>
                                    <option value="1">Video Pendek 🎞️</option>
                                    <option value="2">Poster Iklan Layanan Masyarakat 🖼️</option>
                                </select>
                                <div id="emailHelp" class="form-text">*Karya video pendek sudah diupload di youtube dengan durasi maksimal 3 menit.</div>
                                <div class="valid-feedback">
                                    Terlihat bagus!
                                </div>
                                <div class="invalid-feedback">
                                    Tolong pilih salah satu kategori
                                </div>
                            </div>
                            <div class="mb-3" id="link_video" style="display: none;">
                                <label for="validationDefaultUsername" class="form-label">Link Video Pendek</label>
                                <div class="input-group">
                                    <!-- <span class="input-group-text" id="inputGroupPrepend2">https://</span> -->
                                    <input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" placeholder="https://youtu.be/" required>
                                    <div id="validationServerUsernameFeedback" class="valid-feedback">
                                        Terlihat bagus!
                                    </div>
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                        Tolong inputkan link youtube anda
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3" id="link_post" style="display: none;">
                                <label for="validationDefaultPoster" class="form-label">Link Post Instagram</label>
                                <div class="input-group">
                                    <!-- <span class="input-group-text" id="inputGroupPrepend3">https://</span> -->
                                    <input type="text" class="form-control" id="validationDefaultPoster" aria-describedby="inputGroupPrepend3" placeholder="https://instagram.com/" required>
                                    <div id="validationServerPosterFeedback" class="valid-feedback">
                                        Terlihat bagus!
                                    </div>
                                    <div id="validationServerPosterFeedback" class="invalid-feedback">
                                        Tolong inputkan link instagram anda
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 well" id="textarea_judul_video" style="display: none;">
                                <div class="text-area">
                                    <textarea class="form-control" id="text_judul" name="text" maxlength="100" placeholder="Tambahkan Judul yang menjelaskan video Anda" rows="5" required></textarea>
                                    <div class="wrap-count">
                                        <span class="pull-right label label-default" id="count_message_judul"></span>
                                    </div>
                                    <div class="valid-feedback">
                                        Terlihat bagus!
                                    </div>
                                    <div class="invalid-feedback">
                                        Tolong inputkan judul video anda
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 well" id="textarea_judul_post" style="display: none;">
                                <div class="text-area">
                                    <textarea class="form-control" id="text_judul_poster" name="text" maxlength="100" placeholder="Tambahkan Judul yang menjelaskan poster Anda" rows="5" required></textarea>
                                    <div class="wrap-count">
                                        <span class="pull-right label label-default" id="count_message_judul_poster"></span>
                                    </div>
                                    <div class="valid-feedback">
                                        Terlihat bagus!
                                    </div>
                                    <div class="invalid-feedback">
                                        Tolong inputkan judul poster anda
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 well" id="textarea_desc_video" style="display: none;">
                                <div class="text-area">
                                    <textarea class="form-control" id="text" name="text" maxlength="1000" placeholder="Beri tahu penonton tentang video Anda" rows="5" required></textarea>
                                    <div class="wrap-count">
                                        <span class="pull-right label label-default" id="count_message"></span>
                                    </div>
                                    <div class="valid-feedback">
                                        Terlihat bagus!
                                    </div>
                                    <div class="invalid-feedback">
                                        Tolong inputkan deskripsi video anda
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 well" id="textarea_desc_post" style="display: none;">
                                <div class="text-area">
                                    <textarea class="form-control" id="text_poster" name="text" maxlength="1000" placeholder="Beri tahu penonton tentang poster Anda" rows="5" required></textarea>
                                    <div class="wrap-count">
                                        <span class="pull-right label label-default" id="count_message_poster"></span>
                                    </div>
                                    <div class="valid-feedback">
                                        Terlihat bagus!
                                    </div>
                                    <div class="invalid-feedback">
                                        Tolong inputkan deskripsi video anda
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                                    </symbol>
                                </svg>
                                <div class="alert alert-primary d-flex align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2 mb-auto" width="16" height="16" role="img" aria-label="Info:">
                                        <use xlink:href="#info-fill" />
                                    </svg>
                                    <div>
                                        Pemberitahuan Kebijakan Privasi
                                        <p>
                                            Saya setuju bahwa data pribadi yang saya berikan kepada PT.Trans Digital Media (Detiknetwork) selaku pemegang hak atas situs ini untuk dikumpulkan, disimpan, digunakan, dan diproses oleh PT.Trans Digital Media (Detiknetwork) selaku pengendali Data Pribadi yang Lembaga Penjamin Simpanan (LPS) tunjuk untuk memproses Data Pribadi untuk tujuan periklanan, pemasaran, komunikasi, dan tujuan bisnis yang sah lainnya.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check mb-3">
                                    <input type="checkbox" class="form-check-input" id="validationFormCheck1" required>
                                    <label class="form-check-label" for="validationFormCheck1">Saya menyetujui <a href="snk-view.php">syarat dan ketentuan</a> yang berlaku serta kebijakan yang berlaku dari Detiknetwork.</label>
                                    <div class="invalid-feedback">Silahkan checklist untuk melanjutkan</div>
                                </div>
                            </div>
                            <div class="mb-3 well">
                                <div class="captcha">
                                    <img class="img-fluid" src="./src/image/home/form/captcha.png" alt="">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Kirim Pendaftaran<img src="./src/image/home/form/icon-arrow-right.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>