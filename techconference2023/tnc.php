<!doctype html>
<html lang="en">
  <?php
    include "assets/component/head.php";
  ?>
  <body class="tnc-page">
    <?php
      include "assets/component/navbar.php";
      if($_GET["ticker"] == "1"){
        include "assets/component/ticker.php";
      }
    ?>
    
    <!-- Section TnC -->
    <section id="tnc">
        <div class="container mycontainer">
            <div class="row">
                <div class="col-12 tnc-box">
                    <h1 class="sg-700 text-center">
                        Syarat &amp; Ketentuan
                    </h1>
                    <ol class="q-400">
                        <li>Warga negara indonesia</li>
                        <li>Profesional ataupun pelajar</li>
                        <li>Mengisi formulir yang telah disediakan (link tempat pendaftaran)</li>
                        <li>Pitch Deck dapat dituliskan dalam bahasa Indonesia ataupun Inggris</li>
                        <li>Maksimal valuasi startup yang dapat mengikuti kegiatan ini berada pada level cockroach</li>
                        <li>Pihak CNBC Indonesia dalam hal ini berupaya mewadahi dan mendukung dalam mempromosikan startup Indonesia</li>
                        <li>Program berikut ini tidak ada pemungutan biaya yang dilakukan oleh CNBC Indonesia</li>
                        <li>Slot pendaftaran dalam program ini terbatas dan dapat ditutup sewaktu - waktu</li>
                        <li>Informasi terkait pengaduan dapat disampaikan ke: info@cnbcindonesia.com</li>
                    </ol>      
                </div>
            </div>
        </div>
    </section>
    <!-- End of Section TnC -->
    
    <!-- Footer -->
    <?php
        include "assets/component/footer.html";
        include "assets/component/foot.php";
    ?>
  </body>
</html>