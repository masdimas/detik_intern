<!-- Ticker -->
<section id="ticker">
      <div class="container mycontainer">
        <div class="row">
          <div class="col-12 box-ticker">
            <a href="index.php#about" class="btn btn-default">
              <img src="assets/images/live-icon.png" alt="live-icon">
              <span class="sg-700">Tonton live streaming sekarang</span>        
            </a>
            <i class="fas fa-times-circle" onclick="closeTicker()"></i>
          </div>
        </div>
      </div>
      <script>
        function closeTicker(){
          $('#ticker').css("display","none");
        }
      </script>
</section>