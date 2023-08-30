<!doctype html>
<html lang="en">
  <?php
    include "assets/component/head.php";
  ?>
  <body class="registration-page">
    <?php
      include "assets/component/navbar.php";
      if($_GET["ticker"] == "1"){
        include "assets/component/ticker.php";
      }
    ?>
    
    <!-- Section Registration -->
    <section id="registration-form">
        <div class="container">
            <div class="row">
                <div class="col-12 box-form">
                    <div class="row">
                    <div class="col-12 text-center">
                    <h1 class="sg-700">Promosikan Startup Anda</h1>
                </div>   
                <div class="col-12">
                    <form action="" method="">
                        <?php
                            if($_GET["error"]=="1"){
                                echo "
                                <div class='form-group'>
                                    <div class='alert alert-danger q-400'>
                                        Mohon maaf kami belum dapat memproses aplikasi anda, silakan isi data dengan benar
                                    </div>
                                </div>
                                ";
                            };
                        ?>
                        
                        <div class="form-group">
                            <label for="nama_perusahaan" class="inp">
                            <input type="text" id="nama_perusahaan" placeholder="&nbsp;" maxlength="30">
                            <span class="label q-400">Nama Perusahaan <span class="red q-400">*</span></span>
                            <span class="border"></span>
                            <?php
                            if($_GET["error"]=="1"){
                                echo "
                                <small id='fileNotes' class='form-text red'>Nama perusahaan wajib diisi</small>
                                ";
                            };
                            ?>
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="email" class="inp">
                            <input type="email" id="email" placeholder="&nbsp;">
                            <span class="label">Email <span class="red">*</span></span>
                            <span class="border"></span>
                            <?php
                            if($_GET["error"]=="1"){
                                echo "
                                <small id='fileNotes' class='form-text red'>Email wajib diisi</small>
                                ";
                            };
                            ?>
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="telepon" class="inp">
                            <input type="text" id="telepon" placeholder="&nbsp;">
                            <span class="label">Nomor Telepon <span class="red">*</span></span>
                            <span class="border"></span>
                            <?php
                            if($_GET["error"]=="1"){
                                echo "
                                <small id='fileNotes' class='form-text red'>Nomor telepon wajib diisi</small>
                                ";
                            };
                            ?>
                            </label>
                        </div>
                        
                        <div class="form-group">
                            <label for="detail" class="inp">
                            <textarea class="form-control" name="detail" id="detail" cols="20" rows="5" maxlength="200" placeholder="&nbsp;"></textarea>
                            <span class="label">Tentang Perusahaan (Max. 200 Karakter) <span class="red">*</span></span>
                            <span class="border"></span>
                            <?php
                            if($_GET["error"]=="1"){
                                echo "
                                <small id='fileNotes' class='form-text red'>Tentang perusahaan wajib diisi</small>
                                ";
                            };
                            ?>
                            </label>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="box-foto">
                                        <div class="test">
                                            <img id="foto" src="assets/images/cnbc-grey.png">
                                        </div>
                                        <span class="btn btn-primary btn-file">
                                                <img src="assets/images/plus-icon.png">
                                                <input type="file" id="upload" class="required" onchange="readURL(this);">
                                        </span>
                                        <span class="label">
                                            Unggah logo <span class="red">*</span>
                                        </span>
                                    </div>        
                                </div>
                                <div class="col-md-8">
                                    <ol>
                                        <li>Format file: .png, .jpg, .jpeg</li>
                                        <li>Ukuran maksimal 200kb</li>
                                        <li>Hindari penggunaan logo berwarna putih</li>
                                        <li>Dimensi lebar logo minimal 300px</li>
                                    </ol>
                                    <?php
                                    if($_GET["error"]=="1"){
                                        echo "
                                        <small id='fileNotes' class='form-text red'>File logo tidak sesuai, mohon ikuti ketentuan unggah logo</small>
                                        ";
                                    };
                                    ?>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="customFile" name="filename" accept="application/pdf">
                                <label class="custom-file-label" for="customFile">Company Profile atau Deck (opsional)</label>
                                <small id="fileNotes" class="form-text text-muted">Format file .pdf dengan ukuran maksimal 20MB</small>
                            </div>
                            <?php
                            if($_GET["error"]=="1"){
                                echo "
                                <small id='fileNotes' class='mt-3 form-text red'>File tidak sesuai, mohon ikuti ketentuan unggah file</small>
                                ";
                            };
                            ?>
                        </div>
                        <div class="form-group">
                            <label for="company_url" class="inp">
                            <input type="text" id="company_url" placeholder="&nbsp;">
                            <span class="label">URL Perusahaan <span class="red">*</span></span>
                            <small id="fileNotes" class="form-text text-muted">Website, Sosial Media, dll.</small>
                            </label>
                            <?php
                            if($_GET["error"]=="1"){
                                echo "
                                <small id='fileNotes' class='form-text red'>URL Perusahaan wajib diisi</small>
                                ";
                            };
                            ?>
                        </div>
                        
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="tnc_cbox" required>
                            <label class="form-check-label" for="tnc_cbox">Dengan menekan tombol "Daftar", Saya menyetujui&nbsp;<a href="tnc.php" target="_blank">syarat dan ketentuan</a> yang berlaku</label>
                            <?php
                            if($_GET["error"]=="1"){
                                echo "
                                <small id='fileNotes' class='form-text red'>Anda harus menyetujui Syarat dan Ketentuan</small>
                                ";
                            };
                            ?>
                        </div>
                        <div class="form-group text-center">
                            <img class="captcha" src="assets/images/captcha.png" alt="">
                            <?php
                            if($_GET["error"]=="1"){
                                echo "
                                <small id='fileNotes' class='form-text red'>reCAPTCHA wajib diisi</small>
                                ";
                            };
                            ?>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" class="btn btn-primary btn-submit" value="Daftar" data-toggle="modal" data-target="#exampleModalCenter">
                        </div>
                        

                            </form>
                        </div>

                    </div>
                </div>
                

            </div>
        </div>
    </section>
    
    <!-- End of Registration -->

    <!-- Footer -->
    <?php
        include "assets/component/footer.html";
        include "assets/component/foot.php";
    ?>
  </body>
  <?php
         if($_GET["success"]=="1") include "assets/component/process.php";
    ?>
</html>