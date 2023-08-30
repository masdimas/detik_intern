<!doctype html>
<html lang="en">
  <?php
    include "assets/component/head.php";
  ?>
  <body class="showcase-page">
    <?php
       // S:NAVBAR
       $menu_about = false;
       $menu_schedule = false;
       $menu_showcase = true;
       include "assets/component/navbar.php";
       // E:NAVBAR

      if($_GET["ticker"] == "1"){
        include "assets/component/ticker.php";
      }
    ?>
    <section id="showcase-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-12">
                <h1 class="sg-700">
                    Enroll in Startup Showcase CNBC Indonesia Tech Conference 2023
                </h1>
                
                <?php if($_GET["register"]=="close")
                    echo "
                    <a class='btn btn-primary sg-700' data-toggle='modal' data-target='#myModal2'>Daftar Sekarang</a> 
                    "; else{
                       echo "<a class='btn btn-primary sg-700' href='register.php'>Daftar Sekarang</a>";
                    }
                ?>
                
                <h3>
                    <a href="tnc.php" target="_blank">Cek syarat dan ketentuannya di sini</a>
                </h3>
            </div>
        </div>
    </div>
</section>
<section id="startup-logo" class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">
                <h1 class="sg-700">Startup Showcase 2023</h1>
            </div>
            <div class="col-md-6 col-12">
                <form action="#">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search by name" aria-label="startupsearch" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button">
                                <img src="assets/images/search-icon.png" alt="">
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <?php
                for ($i=0; $i<24; $i++){
                    echo "<div class='col-md-3 col-6 p-1'>
                        <div class='box-logo'>
                            <img src='assets/images/startup-logo.png' alt='' class='startup-logo-img'> 
                        </div>
                        <div class='hovered'>
                                <div class='text-center mb-3'>
                                <img src='assets/images/startup-logo.png' alt='' class='startup-logo-img'>
                                </div>
                                <h1>[Nama Perusahaan]</h1>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
                                <a href='#' class='btn btn-primary'>Download PDF</a>
                                <a href='#' class='btn btn-primary'>Website</a>
                            </div>
                    </div>";
                };
            ?>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
</section>

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" onload="myFunction()">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="box-loader">
                    <img src="assets/images/face-fail.svg" alt="">
                    <h1>Maaf, Pendaftaran telah ditutup</h1>
                    <h3 class="mt-3">
                        <a href="" data-dismiss="modal" aria-label="Close">Tutup</a>
                    </h3>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Footer -->
    <?php
        include "assets/component/footer.html";
        include "assets/component/foot.php";
    ?>
  </body>
</html>