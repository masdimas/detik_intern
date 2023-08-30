<nav class="navbar bg-faded justify-content-center sticky-top" id="navbar-2">
    <div class="container">
        <a href="index.php" class="navbar-brand w-50 me-auto">
            <img src="assets/images/logo-techconference-nav.png" alt="Techconference 2022">
        </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon">
        <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
    </span>
  </button>

  <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
    <ul class="navbar-nav w-100 justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link sg-400 <?php if($menu_about) echo 'active'; ?>" href="index.php#about">About Event</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php if($menu_schedule) echo 'active'; ?>" id="navbarDropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Schedule</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item sg-400 text-center" href="schedule.php">Collaboration for Digital Indonesia</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link sg-400 <?php if($menu_showcase) echo 'active'; ?>" href="showcase.php">Showcase</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav ms-auto w-100 justify-content-end">
                    <!-- <li class="nav-item">
                        <a class="nav-link sg-700" href="register.php">DAFTAR SEKARANG</a>
                    </li>     -->
                    <?php if($_GET["register"]=="close")
                    echo "
                    <li class='nav-item'>
                         <a class='nav-link sg-700' data-toggle='modal' data-target='#myModal2'>DAFTAR SEKARANG</a>
                    </li>
                    ";
                    else{
                       echo "
                       <li class='nav-item'>
                            <a class='nav-link sg-700' href='register.php'>DAFTAR SEKARANG</a>
                       </li>
                       ";
                    }
                ?>
                </ul>
  </div>
    </div>
</nav>

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
</div>

<script>
function myFunction(x) {
var element = document.getElementById("navbar-2");
  if (x.matches) { // If media query matches
    // element.style.backgroundColor = "yellow";
    element.classList.add("navbar-expand-xs");
    element.classList.remove("navbar-expand-md");
  } else {
//    element.style.backgroundColor = "pink";
    element.classList.add("navbar-expand-md");
    element.classList.remove("navbar-expand-xs");
  }
}

var x = window.matchMedia("(max-width: 1199px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes
</script>