<section class="fixed-top d-flex justify-content-center px-4" id="nav-bar">
      <nav class="navbar navbar-expand-lg navbar-light nav-bar w-100">
        <div class="container-fluid">
          <a class="navbar-brand py-0" href="index.php"
            ><img src="./src/image/navbar/logo.png"></a>
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
          <div class="collapse navbar-collapse justify-content-lg-end d-lg-block flex-column flex-lg-row justify-content-center ms-auto" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 gap-lg-3 gap-0 w-sm-100 w-lg-auto">
              <li class="nav-item">
                <a class="nav-link px-3 py-lg-2 py-3 w-100 home" href="index.php?login=1#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-3 py-lg-2 py-3 w-100 home" href="index.php?login=1#about">Tentang Program</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-3 py-lg-2 py-3 w-100 home" href="index.php?login=1#home">Berita </a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-3 py-lg-2 py-3 w-100 home" href="index.php?login=1#home">Voting </a>
              </li>
             
              <li class="nav-item dropdown auth-nav">
                <?php 
                  if ($_GET["login"] == "1") {
                    echo "<a class='nav-link dropdown-toggle d-none d-lg-block ms-lg-3' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                            <img src='./src/image/navbar/userauth-logo.svg' alt='Account' />
                          </a>
                          <ul class='dropdown-menu p-2 account-desc ' aria-labelledby='navbarDropdown'>
                            <li class='d-flex flex-nowrap align-items-center justify-content-between'><a class='dropdown-item account-name' href='#'><span>I Gusti Bagus Ngurah Bayu Dharma Nugaraha</span></a> <button class='btn logout-button auth-button' id='logout-button'>Logout</button></li>              
                          </ul>";
                  } elseif ($_GET["login"] == "0") {
                    echo "<button class='btn login-button auth-button' id='login-button'>Login</button>";
                  } 
                ?>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</section>