<section class="fixed-top d-flex justify-content-center px-4" id="nav-bar">
      <nav class="navbar navbar-expand-lg navbar-light nav-bar w-100">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"
            ><img src="./assets/images/navbar/navbar-logo.png" alt="Classy Youth Yamaha Festival"></a>

          <button
            class="navbar-toggler p-0 rounded-pill"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <div class="hamburger bg-white shadow-none rounded-pill">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
            </div>
          </button>
          <div class="collapse navbar-collapse justify-content-lg-between d-lg-block flex-column flex-lg-row justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 gap-lg-3 gap-0 w-sm-100 w-lg-auto">
              <li class="nav-item">
                <a class="nav-link px-3 py-lg-2 py-3 w-100 home" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-3 py-lg-2 py-3 w-100 wp-school-competition" href="#wp-school-competition">School Competition</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle px-3 py-lg-2 py-3 w-100" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Miss Classy Contest
                </a>
                <ul class="dropdown-menu p-2" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="miss-classy.php">Bandung</a></li>
                  <li><a class="dropdown-item" href="miss-classy.php">Makassar</a></li>
                  <li><a class="dropdown-item" href="miss-classy.php">Medan</a></li>
                  <li><a class="dropdown-item" href="miss-classy.php">Denpasar</a></li>
                  <li><a class="dropdown-item" href="miss-classy.php">Jakarta</a></li>
              
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link px-3 py-lg-2 py-3 w-100" href="#">Content Creation</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-3 py-lg-2 py-3 w-100 aggregator" href="#aggregator">News</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle px-3 py-lg-2 py-3 w-100" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                About Us
                </a>
                <ul class="dropdown-menu p-2" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Classy Yamaha Fazio</a></li>
                  <li><a class="dropdown-item" href="#">Classy Yamaha Filano</a></li>              
                </ul>
              </li>
            </ul>
            <li class="nav-item dropdown auth-nav">
              <?php 
                if ($_GET["login"] == "1") {
                  echo "<a class='nav-link dropdown-toggle px-3 py-2 d-none d-lg-block' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                          <img src='./assets/images/navbar/auth-icon.svg' alt='Account' />
                        </a>
                        <ul class='dropdown-menu p-2 account-desc ' aria-labelledby='navbarDropdown'>
                          <li class='d-flex align-items-center'><a class='dropdown-item account-name' href='#'>I Gusti Bagus Ngurah</a> <button class='btn logout-button auth-button' id='logout-button'>Logout</button></li>              
                        </ul>";
                } elseif ($_GET["login"] == "0") {
                  echo "<button class='btn login-button auth-button' id='login-button'>Login</button>";
                } 
              ?>
                
            </li>
          </div>
        </div>
      </nav>
</section>
