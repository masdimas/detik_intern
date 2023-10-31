<section data-slick-fullscreen>

  <div class="row">
      <center>
      <a class="btn btn-md btn-primary btnPrevSlider"><i class="fas fa-angle-left fa-2x"></i></a>
      <a class="btn btn-md btn-primary btnNextSlider"><i class="fas fa-angle-right fa-2x"></i></a>
        </center>
      <div class="intro-section">
           <!-- This image will be used -->
            <!--<img src="img/home/cover.jpg">-->
                    
                    <div class="container-fluid slide-1 text-center">
                        <!--<div class="tagline">
                        <h1 class="tlt"><div class="text-kotak">Menelusuri<br>Perbatasan<br>Indonesia</div></h1>
                        </div>-->
                        <div class="row">
                            <h1 class="tlt"><div class="text-kotak">Menelusuri<br>Perbatasan<br>Indonesia</div></h1>
                        </div>
                    </div>
                
                    <div class="container-fluid slide-2 text-center">
                        <!--<div class="tagline">
                        <h1 class="tlt"><div class="text-kotak">Menelusuri<br>Perbatasan<br>Indonesia</div></h1>
                        </div>-->
                        <div class="row">
                            <h1 class="tlt"><div class="text-kotak">Menelusuri<br>Perbatasan<br>Indonesia</div></h1>
                        </div>
                    </div>
          
                    <div class="container-fluid slide-3 text-center">
                        <!--<div class="tagline">
                        <h1 class="tlt"><div class="text-kotak">Menelusuri<br>Perbatasan<br>Indonesia</div></h1>
                        </div>-->
                        <div class="row">
                            <h1 class="tlt"><div class="text-kotak">Menelusuri<br>Perbatasan<br>Indonesia</div></h1>
                        </div>
                    </div>

          
      </div>
  </div>
</section>

<script type="text/javascript">
     $(document).ready(function(){
       $('.intro-section').slick({
         autoplay: true,
           dots: false,
         infinite: true,
         speed: 300,
         slidesToShow: 1,
         slidesToScroll: 1,
         prevArrow: $(".btnPrevSlider"),
         nextArrow: $(".btnNextSlider"),
         responsive: [
           {
             breakpoint: 1024,
             settings: {
               slidesToShow: 1,
               slidesToScroll: 1,
               infinite: true,
               dots: true
             }
           },
           {
             breakpoint: 600,
             settings: {
               slidesToShow: 1,
               slidesToScroll: 1
             }
           },
           {
             breakpoint: 480,
             settings: {
               slidesToShow: 1,
               slidesToScroll: 1
             }
           }
           // You can unslick at a given breakpoint now by adding:
           // settings: "unslick"
           // instead of a settings object
         ]
       });
     });


     </script>