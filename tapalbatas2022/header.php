<header id="top-bar" class="navbar-fixed-top animated-header">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="img/logo-newtb.png" class="logo"> </a>
    </div>
    <style>
    .dropdown-submenu {
      position: relative;
    }

    .dropdown-submenu .dropdown-menu {
      top: 0;
      right: 178px;
      margin-top: -6px;
      max-height: 300px;
    overflow: auto;
      }
    </style>
    <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php" id="beranda-nav">Beranda</a></li>
              <li><a href="index.php#tentang" id="tentang-nav">Tentang</a></li>
              <li><a href="bankbri-berita.php" id="pln-nav">Bank BRI</a></li>
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Daerah <span class="caret"></span></a>
                  <ul class="dropdown-menu" id="menu-kota">
                        <li><a href="kepulauananambas-berita.php">Kepulauan Anambas</a></li>
                        <li><a href="jagoibabang-berita.php">Jagoi babang</a></li>
                        <li><a href="wini-berita.php">Wini</a></li>
                        <li><a href="selaru-berita.php">Selaru</a></li>
                        <li class="dropdown-submenu">
                          <a class="test" href="#">Destinasi Sebelumnya<span class="caret-left"></span></a>
                            <ul class="dropdown-menu">
                            <li><a href="pulaurupat-berita.php">Pulau Rupat</a></li>
                            <li><a href="aruk-berita.php">Aruk</a></li>
                            <li><a href="motamasin-berita.php">Motamasin</a></li>
                            <li><a href="badau-berita.php">Badau</a></li>
                              <li><a href="karimunbesar-berita.php">Karimunbesar</a></li>
                              <li><a href="nunukan-berita.php">Nunukan</a></li>
                              <li><a href="natuna-berita.php">Natuna</a></li>
                              <li><a href="miangas-berita.php">Miangas</a></li>
                              <li><a href="sinabang-berita.php">Sinabang</a></li>
                              <li><a href="pulaurote-berita.php">Pulau Rote</a></li>
                              <li><a href="skouw-berita.php">Skouw</a></li>
                              <li><a href="entikong-berita.php">Entikong</a></li>
                              <li><a href="merauke-berita.php">Merauke</a></li>
                              <li><a href="motaain-berita.php">Motaain</a></li>                 
                            </ul>
                        </li>
                    </ul>
            </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        </header>
<script>
        $('#beranda-nav a').click(function(){
            $(".navbar-collapse").collapse('hide');
        });
        $('#tentang-nav a').click(function(){
            $(".navbar-collapse").collapse('hide');
        });
        $('#pln-nav a').click(function(){
            $(".navbar-collapse").collapse('hide');
        });
        /*$('.dropdown a').click(function(){
            $(".navbar-collapse").collapse('show');
        });*/
    </script>

<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>

