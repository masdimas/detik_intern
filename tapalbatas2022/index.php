<!DOCTYPE html>
<html lang="en">

<?php include("head.php"); ?>

<body>

<?php include("header.php"); ?>
<section>

<!--  <div class="row">-->
      
      <div class="container-fluid" style="padding:0;">
        <div class="intro-section">
            
                <div class="container-fluid slide-1" style="padding:0;">
                        <div class="overlay"></div>
                        <div class="tagline1">
                            
                            <div class="text-kotak">
                                <h4 class="tlt">Patok Batas, Simbol Kedaulatan RI</h4>
                                <span>Bersama masyarakat, TNI jadi yang terdepan jaga keutuhan dan kedaulatan NKRI di Tapal Batas...</span>
                                <h4 style="margin-top: 40px;"><a href="#exTab2"><button class="btn-info cta" style="margin:0;font-weight:bold;">SELENGKAPNYA <i class="fas fa-chevron-circle-right"></i></button></a></h4>
                            </div>  
                        </div> 
                        
                        <!--<div class="row">
                            <h1 class="tlt"><div class="text-kotak">Menelusuri<br>Perbatasan<br>Indonesia</div></h1>
                        </div>-->
                    </div>

                <div class="container-fluid slide-2">
                        <div class="tagline2">
                            <div class="text-kotak">
                                <h4 class="tlt">Melihat Lebih Dekat Wilayah Terdepan Indonesia</h4>
                                <span>Potret masyarakat di wilayah terdepan Indonesia dalam sudut pandang sosial dan budaya...</span>
                                <h4 style="margin-top: 40px;"><a href="bankbri-berita.php" target="_blank"><button class="btn-info cta" style="margin:0;font-weight:bold;">SELENGKAPNYA <i class="fas fa-chevron-circle-right"></i></button></a>
                                
                                </h4>
                            </div>  
                        </div>
                        <!--<div class="row">
                            <h1 class="tlt"><div class="text-kotak">Menelusuri<br>Perbatasan<br>Indonesia</div></h1>
                        </div>-->
                    </div>
            
                <div class="container-fluid slide-3">
                        <div class="tagline3">
                            <div class="text-kotak">
                                <h4 class="tlt">Ekonomi Kerakyatan di Perbatasan</h4>
                                <span>UMKM yang berkontribusi sebesar 61,07% ke PDB RI memiliki peran penting bagi ekonomi Indonesia. Tak hanya di kota, sumber ekonomi kerakyatan itu juga datang dari wilayah perbatasan…</span>
                                <h4 style="margin-top: 40px;"><a href="#exTab2"><button href="" class="btn-info cta" style="margin:0;font-weight:bold;">SELENGKAPNYA <i class="fas fa-chevron-circle-right"></i></button></a></h4>
                            </div>  
                        </div>
                        <!--<div class="row">
                            <h1 class="tlt"><div class="text-kotak">Menelusuri<br>Perbatasan<br>Indonesia</div></h1>
                        </div>-->
                    </div>
            
        </div>
      
      </div>
<!--      <div class="overlay"></div>   -->
      
        <div class="controler">
            <button class="btn btn-md btn-primary btnPrev" id="slider-prev"><i class="fas fa-angle-left fa-2x"></i></button>
            <button class="btn btn-md btn-primary btnNext" id="slider-next"><i class="fas fa-angle-right fa-2x"></i></button>
        </div>
       
    <div class="scroll-indicator next-sections" data-next-box="#tentang">

            <a class="searchbychar" href="#tentang" data-target="tentang">
                <span class="m_scroll_arrows unu"></span>
                <span class="m_scroll_arrows doi"></span>
                <span class="m_scroll_arrows trei"></span>
            </a>

        </div>
    
<!--      <div class="intro-section">-->
           <!-- This image will be used -->
            <!--<img src="img/home/cover.jpg">-->
<!--      </div>-->
<!--  </div>-->
</section>

<script type="text/javascript">
//     $(document).ready(function(){
//       
//     });


     </script>






    <!-- bg image -->
		<!--<section class="section heightPrimaryBanner primary-banner hidden-lg hidden-md" id="primary-banner">
			<div class="background">
			  <div class="layer pulse" style="background-image: url(img/index-bg.jpg); width:120%; height: 120%; left: -10%; top:-10%;"></div>
			</div>

			<div class="primary-banner-center-box">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12 text-center">
                            <h1 class="tlt"><div class="text-kotak">Menelusuri<br>Perbatasan<br>Indonesia</div></h1>
						</div>
					</div>
				</div>
			</div>
  		<div class="scroll-indicator next-sections" data-next-box="#tentang">

            <a class="searchbychar" href="#tentang" data-target="tentang">
                <span class="m_scroll_arrows unu"></span>
                <span class="m_scroll_arrows doi"></span>
                <span class="m_scroll_arrows trei"></span>
            </a>

        </div>
		</section>-->
		<!-- /primary-banner -->

<style>
    .template_faq {
    background: #edf3fe none repeat scroll 0 0;
}
.panel-group {
    background: #fff none repeat scroll 0 0;
    border-radius: 3px;
    /*box-shadow: 0 5px 30px 0 rgba(0, 0, 0, 0.04);*/
    margin-bottom: 0;
    padding: 0px 30px;
}
#accordion .panel {
    border: medium none;
    border-radius: 0;
    box-shadow: none;
    margin: 0 0 15px 10px;
}
#accordion .panel-heading {
    border-radius: 30px;
    padding: 0;
}
#accordion .panel-title a {
    background: #084686 none repeat scroll 0 0;


    border: 1px solid transparent;
    border-radius: 30px;
    color: #ffffff;
    display: block;
    font-size: 18px;
    font-weight: 600;
    padding: 12px 20px 12px 50px;
    position: relative;
    transition: all 0.3s ease 0s;
    font-family: 'Roboto', sans-serif;
}
#accordion .panel-title a.collapsed {
    background: #fff none repeat scroll 0 0;
    border: 1px solid #ddd;
    color: #333;
}
#accordion .panel-title a::after, #accordion .panel-title a.collapsed::after {
    background: #226cb7 none repeat scroll 0 0;
    border: 1px solid transparent;
    border-radius: 50%;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.58);
    color: #fff;
    content: "";
    font-family: fontawesome;
    font-size: 25px;
    height: 55px;
    left: -20px;
    line-height: 55px;
    position: absolute;
    text-align: center;
    top: -5px;
    transition: all 0.3s ease 0s;
    width: 55px;
}
#accordion .panel-title a.collapsed::after {
    background: #fff none repeat scroll 0 0;
    border: 1px solid #ddd;
    box-shadow: none;
    color: #333;
    content: "";
}
#accordion .panel-body {
    background: transparent none repeat scroll 0 0;
    border-top: medium none;
    padding: 20px 25px 10px 9px;
    position: relative;
}
#accordion .panel-body p {
    /*border-left: 1px dashed #8c8c8c;
    padding-left: 25px;*/
}
</style>
    
    <script>
    (function($) {
	'use strict';
	
	jQuery(document).on('ready', function(){
	
			$('a.page-scroll').on('click', function(e){
				var anchor = $(this);
				$('html, body').stop().animate({
					scrollTop: $(anchor.attr('href')).offset().top - 50
				}, 1500);
				e.preventDefault();
			});		

	}); 	

				
})(jQuery);
    </script>
    <section id="tentang" class="sec-padding faq-home">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8">
					
                        
                        <div class="row">				
                            <div class="col-md-12">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Tentang Tapal Batas 
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <div class="col-lg-4 col-md-4">
                                                 <img src="img/home/thumbnail/thumb-1.JPG">
                                                </div>
                                                <div class="col-lg-8 col-md-8">
                                                    <h4><b>Bukan wilayah terluar, melainkan wilayah terdepan</b></h4>
                                                    <p>Tapal batas adalah sebuah program ekspedisi jelajah daerah terdepan Indonesia lengkap dengan kehidupan sosial dan segala macam aspek penunjangnya. Di tahun 2022, detikcom akan mengulas kondisi perbatasan dari kacamata sosial hingga ekonomi kerakyatan.</p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Tujuan Program
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <div class="col-lg-4 col-md-4">
                                                 <img src="img/home/thumbnail/thumb-2.jpg">
                                                </div>
                                                <div class="col-lg-8 col-md-8">
                                                    <h4><b>Daerah terdepan tak boleh luput dari perhatian</b></h4>
                                                    <p>Program Tapal Batas memantau berbagai aspek kehidupan warga, bagaimana aparat menjaga daerah perbatasan, dan membaca potensi-potensi daerah perbatasan seperti wisata dan UMKM.</p>
                                                </div>
                                                
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Daerah Terpilih 
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                <div class="col-lg-4 col-md-4">
                                                 <img src="img/home/thumbnail/thumb-3.jpg">
                                                </div>
                                                <div class="col-lg-8 col-md-8">
                                                    <h4><b>18 destinasi Tapal Batas detikcom</b></h4>
                                                    <p>Selama 6 tahun detikcom telah mengunjungi titik-titik terdepan dari Aceh hingga Jayapura. Akhir tahun 2022 ini, tim detikcom akan menjelajah Kepulauan Anambas, Wini, Jagoi Babang dan Selaru</p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div><!--- END COL -->		
                        </div><!--- END ROW -->			
                    
					<!--<div class="accrodion-grp faq-accrodion" data-grp-name="faq-accrodion">
						<div class="accrodion active">
							<div class="accrodion-title">
								<h4>
									<span class="decor">
										<span class="inner"></span>
									</span>
									<span class="text">Tentang Tapal Batas</span>
								</h4>
							</div>
							<div class="accrodion-content" style="display: none;">
                                <div class="col-lg-4 col-md-4">
                                 <img src="img/home/merauke.jpg">
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <h4>Judul yang pertama</h4>
                                    <p>Tapal batas adalah sebuah program ekspedisi jelajah daerah perbatasan Indonesia. Tapal batas memotret bagaimana wajah daerah perbatasan Indonesia dengan negara tetangga lengkap dengan kehidupan sosial dan segala macam aspek penunjangnya.</p>
                                </div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="accrodion">
							<div class="accrodion-title">
								<h4>
									<span class="decor">
										<span class="inner"></span>
									</span>
									<span class="text">Tujuan Tapal Batas</span>
								</h4>
							</div>
							<div class="accrodion-content" style="display: none;">
                                <div class="col-lg-4 col-md-4">
                                 <img src="img/home/merauke.jpg">
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <h4>Judul yang kedua</h4>
                                    <p>Memotret wajah terkini daerah perbatasan Indonesia dengan negara tetangga. Memantau berbagai aspek kehidupan warga, bagaimana aparat menjaga daerah perbatasan, dan membaca potensi-potensi daerah perbatasan seperti wisata dan lainnya.</p>
                                </div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="accrodion">
							<div class="accrodion-title">
								<h4>
									<span class="decor">
										<span class="inner"></span>
									</span>
									<span class="text">Daerah Terpilih</span>
								</h4>
							</div>
							<div class="accrodion-content" style="display: none;">
                                <div class="col-lg-4 col-md-4">
                                 <img src="img/home/merauke.jpg">
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <h4>Judul yang ketiga</h4>
                                    <p>Ada 4 daerah yang akan dijelajah dalam program tapal batas. Yakni Atambua, Merauke, Entikong dan Skouw</p>
                                </div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>-->
				</div>
				<div class="col-lg-4 col-md-4 pt25" style="background: #e8e8e8;border-bottom: #084686 solid 4px;" id="box-video-about">
                    <div class="embed-responsive embed-responsive-16by9 ">
                          <!--<video controls muted>
                              <source src="video/video-bg-tb2.mp4" type="video/mp4">
                              Your browser does not support the video tag.
                            </video>-->
                        <iframe src="https://20.detik.com/embed/220811111" frameborder="0" width="420" scrolling="no" allowfullscreen="true" height="236"></iframe>
                    </div>
                    <div class="box-apresiasi">
                        <span>
                            <h4></h4>
                            <p>"Kita ingin rakyat di perbatasan, pulau-pulau terdepan, menjadi semakin bangga menjadi warga negara Indonesia, dan semakin semangat untuk menjaga Tanah Air-nya,"
                                <br/>
                                <b>Ir. H. Joko Widodo (Presiden Republik Indonesia)</b> </p>
                        </span>
                        
                    </div>
				</div>
			</div>
		</div>
	</section>

    <section id="map-area" class="sec-padding faq-home">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8">
				<div class="hidden-xs hidden-sm">
                    <iframe src="peta-indonesia-bri-2022.php" frameborder="0" scrolling="no" onload="resizeIframe(this)" width="100%;"></iframe>
                </div>
                <div class="visible-xs visible-sm">
                    <iframe src="peta-indonesia-bri-2022.php" frameborder="0" scrolling="no" onload="resizeIframe(this)" width="100%;"></iframe>
                </div>
                
				</div>
				<div class="col-lg-4 col-md-4 pt25 pb25 panel-kota" style="">
                    <!--Berita Utama-->

                        <div class="col-md-12" id="berita-utama">
                            

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="berita-utama-slider">
                                    <div class="berita-utama-item p-1">
                                            <div class="row">
                                                
                                                    <div class="col-md-12 text-left">
                                                        
                                                            <div class="col-md-12 text-left panel-small">
                                                                <!--<div class="box-image">
                                                                    <img src="assets/image/content/berita-utama.jpg">
                                                                </div>-->
                                                                <h4><strong>KEPULAUAN ANAMBAS - KEPRI</strong></h4>
                                                                <span class="text-left panel-date" style="margin-bottom:10px;">Juli <b style="font-family: 'Roboto', sans-serif;font-weight: 900;">2022</b></span>
                                                                <hr>
                                                                <span class=""><b style="font-family: 'Roboto', sans-serif;font-weight: 900;font-size:16px;font-size: 18px;"></b></span>
                                                                <p>Kepulauan Anambas termasuk bagian dari gugusan Provinsi Kepulauan Riau dan menjadi surga kecil di perbatasan Indonesia. Berbeda dari wilayah lain, Kepulauan Anambas terdiri dari lautan dan pulau-pulau yang tersebar di Perairan Laut Natuna dan Laut China Selatan.</p>
                                                                <a href="kepulauananambas-berita.php">
                                                                <button type="button" class="btn btn-default">Selengkapnya <i class="fas fa-arrow-circle-right" style="color: #95c9ff;padding-left:10px;"></i></button>
                                                                </a>
                                                            </div>
                                                        
                                                    </div>
                                                
                                            </div> 
                                        </div>
                                        <div class="berita-utama-item p-1">
                                            <div class="row">
                                                
                                                    <div class="col-md-12 text-left">
                                                        
                                                            <div class="col-md-12 text-left panel-small">
                                                                <!--<div class="box-image">
                                                                    <img src="assets/image/content/berita-utama.jpg">
                                                                </div>-->
                                                                <h4><strong>JAGOI BABANG - KALIMANTAN BARAT</strong></h4>
                                                                <span class="text-left panel-date" style="margin-bottom:10px;">Agustus <b style="font-family: 'Roboto', sans-serif;font-weight: 900;">2022</b></span>
                                                                <hr>
                                                                <span class=""><b style="font-family: 'Roboto', sans-serif;font-weight: 900;font-size:16px;font-size: 18px;"></b></span>
                                                                <p>Jagoi Babang adalah sebuah kecamatan yang wilayahnya berbatasan langsung dengan Sarawak, Malaysia. Jagoi Babang memiliki potensi besar sebagai wilayah pertanian dan perkebunan. Meski begitu, pariwisatanya juga tidak kalah menarik.</p>
                                                                <a href="jagoibabang-berita.php">
                                                                <button type="button" class="btn btn-default">Selengkapnya <i class="fas fa-arrow-circle-right" style="color: #95c9ff;padding-left:10px;"></i></button>
                                                                </a>
                                                            </div>
                                                        
                                                    </div>
                                                
                                            </div> 
                                        </div>
                                        <div class="berita-utama-item p-1">
                                            <div class="row">
                                                
                                                    <div class="col-md-12 text-left">
                                                        
                                                            <div class="col-md-12 text-left panel-small">
                                                                <!--<div class="box-image">
                                                                    <img src="assets/image/content/berita-utama.jpg">
                                                                </div>-->
                                                                <h4><strong>WINI - NTT</strong></h4>
                                                                <span class="text-left panel-date" style="margin-bottom:10px;">Agustus <b style="font-family: 'Roboto', sans-serif;font-weight: 900;">2022</b></span>
                                                                <hr>
                                                                <span class=""><b style="font-family: 'Roboto', sans-serif;font-weight: 900;font-size:16px;font-size: 18px;"></b></span>
                                                                <p>Kota kecil perbatasan Wini termasuk dalam wilayah Kabupaten Timor Tengah Utara (TTU), yang ibu kotanya terletak di Kefamenanu. Adapun yang menjadi daya tarik utama Wini yaitu wisata pantainya.</p>
                                                                <a href="wini-berita.php">
                                                                <button type="button" class="btn btn-default">Selengkapnya <i class="fas fa-arrow-circle-right" style="color: #95c9ff;padding-left:10px;"></i></button>
                                                                </a>
                                                            </div>
                                                        
                                                    </div>
                                                
                                            </div> 
                                        </div>
                                        <div class="berita-utama-item p-1">
                                            <div class="row">
                                                
                                                    <div class="col-md-12 text-left">
                                                        
                                                            <div class="col-md-12 text-left panel-small">
                                                                <!--<div class="box-image">
                                                                    <img src="assets/image/content/berita-utama.jpg">
                                                                </div>-->
                                                                <h4><strong>SELARU - MALUKU</strong></h4>
                                                                <span class="text-left panel-date" style="margin-bottom:10px;">September <b style="font-family: 'Roboto', sans-serif;font-weight: 900;">2022</b></span>
                                                                <hr>
                                                                <span class=""><b style="font-family: 'Roboto', sans-serif;font-weight: 900;font-size:16px;font-size: 18px;"></b></span>
                                                                <p>Selaru merupakan kecamatan di Kabupaten Maluku Tenggara Barat sekaligus nama salah satu pulau terluar Indonesia. Letaknya berada di Laut Timor dan berbatasan langsung dengan Australia. Walau cukup kecil, namun Selaru menyimpan banyak sumber daya pesisir dan laut.</p>
                                                                <a href="selaru-berita.php">
                                                                <button type="button" class="btn btn-default">Selengkapnya <i class="fas fa-arrow-circle-right" style="color: #95c9ff;padding-left:10px;"></i></button>
                                                                </a>
                                                            </div>
                                                        
                                                    </div>
                                                
                                            </div> 
                                        </div>
                                        <div class="berita-utama-item p-1">
                                            <div class="row">
                                                
                                                    <div class="col-md-12 text-left">
                                                        
                                                            <div class="col-md-12 text-left panel-small">
                                                                <!--<div class="box-image">
                                                                    <img src="assets/image/content/berita-utama.jpg">
                                                                </div>-->
                                                                <h4><strong>ARUK - KALBAR</strong></h4>
                                                                <span class="text-left panel-date" style="margin-bottom:10px;">Desember <b style="font-family: 'Roboto', sans-serif;font-weight: 900;">2020</b></span>
                                                                <hr>
                                                                <span class=""><b style="font-family: 'Roboto', sans-serif;font-weight: 900;font-size:16px;font-size: 18px;"></b></span>
                                                                <p>Perbatasan Aruk berada di Kabupaten Sambas, Kalimantan Tengah. Memiliki jarak yang dekat dengan Serawak, menjadikan Sambas daerah dengan potensi ekonomi yang tinggi.</p>
                                                                <a href="aruk-berita.php">
                                                                <button type="button" class="btn btn-default">Selengkapnya <i class="fas fa-arrow-circle-right" style="color: #95c9ff;padding-left:10px;"></i></button>
                                                                </a>
                                                            </div>
                                                        
                                                    </div>
                                                
                                            </div> 
                                        </div>
                                        <div class="berita-utama-item p-1">
                                            <div class="row">
                                                
                                                    <div class="col-md-12 text-left">
                                                        
                                                            <div class="col-md-12 text-left panel-small">
                                                                <!--<div class="box-image">
                                                                    <img src="assets/image/content/berita-utama.jpg">
                                                                </div>-->
                                                                <h4><strong>MOTAMASIN - NTT</strong></h4>
                                                                <span class="text-left panel-date" style="margin-bottom:10px;">Desember <b style="font-family: 'Roboto', sans-serif;font-weight: 900;">2020</b></span>
                                                                <hr>
                                                                <span class=""><b style="font-family: 'Roboto', sans-serif;font-weight: 900;font-size:16px;font-size: 18px;"></b></span>
                                                                <p>Motamasin merupakan perbatasan yang berada di Kabupaten Malaka, Nusa Tenggara Timur. Perbatasan ini juga kerap menjadi spot wisata untuk warga di kedua negara.</p>
                                                                <a href="motamasin-berita.php">
                                                                <button type="button" class="btn btn-default">Selengkapnya <i class="fas fa-arrow-circle-right" style="color: #95c9ff;padding-left:10px;"></i></button>
                                                                </a>
                                                            </div>
                                                        
                                                    </div>
                                                
                                            </div> 
                                        </div>
                                        <div class="berita-utama-item p-1">
                                            <div class="row">
                                                
                                                    <div class="col-md-12 text-left">
                                                        
                                                            <div class="col-md-12 text-left panel-small">
                                                                <!--<div class="box-image">
                                                                    <img src="assets/image/content/berita-utama.jpg">
                                                                </div>-->
                                                                <h4><strong>PULAU RUPAT - RIAU</strong></h4>
                                                                <span class="text-left panel-date" style="margin-bottom:10px;">Desember <b style="font-family: 'Roboto', sans-serif;font-weight: 900;">2020</b></span>
                                                                <hr>
                                                                <span class=""><b style="font-family: 'Roboto', sans-serif;font-weight: 900;font-size:16px;font-size: 18px;"></b></span>
                                                                <p>Pulau dengan luas lebih kurang 1.500 km2 ini terletak di Kepulauan Riau. Karena letaknya yang dekat dengan Malaysia, menyebabkan potensi wisata di pulau ini sangat tinggi.</p>
                                                                <a href="pulaurupat-berita.php">
                                                                <button type="button" class="btn btn-default">Selengkapnya <i class="fas fa-arrow-circle-right" style="color: #95c9ff;padding-left:10px;"></i></button>
                                                                </a>
                                                            </div>
                                                        
                                                    </div>
                                                
                                            </div> 
                                        </div>
                                        <div class="berita-utama-item p-1">
                                            <div class="row">
                                                
                                                    <div class="col-md-12 text-left">
                                                        
                                                            <div class="col-md-12 text-left panel-small">
                                                                <!--<div class="box-image">
                                                                    <img src="assets/image/content/berita-utama.jpg">
                                                                </div>-->
                                                                <h4><strong>BADAU - KALBAR</strong></h4>
                                                                <span class="text-left panel-date" style="margin-bottom:10px;">Desember <b style="font-family: 'Roboto', sans-serif;font-weight: 900;">2020</b></span>
                                                                <hr>
                                                                <span class=""><b style="font-family: 'Roboto', sans-serif;font-weight: 900;font-size:16px;font-size: 18px;"></b></span>
                                                                <p>Badau adalah sebuah kecamatan di Kabupaten Kapuas Hulu, Kalbar. Di sini ada  Kawasan Pos Lintas Batas Negara (PLBN) yang jadi pusat ekonomi dan gerbang wisata perbatasan.</p>
                                                                <a href="badau-berita.php">
                                                                <button type="button" class="btn btn-default">Selengkapnya <i class="fas fa-arrow-circle-right" style="color: #95c9ff;padding-left:10px;"></i></button>
                                                                </a>
                                                            </div>
                                                        
                                                    </div>
                                                
                                            </div> 
                                        </div>
                                        <div class="berita-utama-item p-1">
                                            <div class="row">
                                                
                                                    <div class="col-md-12 text-left">
                                                        
                                                            <div class="col-md-12 text-left panel-small">
                                                                <!--<div class="box-image">
                                                                    <img src="assets/image/content/berita-utama.jpg">
                                                                </div>-->
                                                                <h4><strong>KARIMUNBESAR - KEPRI</strong></h4>
                                                                <span class="text-left panel-date" style="margin-bottom:10px;">Oktober <b style="font-family: 'Roboto', sans-serif;font-weight: 900;">2019</b></span>
                                                                <hr>
                                                                <span class=""><b style="font-family: 'Roboto', sans-serif;font-weight: 900;font-size:16px;font-size: 18px;"></b></span>
                                                                <p>Karimunbesar adalah salah satu pulau di provinsi Kepulauan Riau yang terletak sekitar 37 km barat daya Singapura. Merupakan pusat perdagangan bebas (free trade zone) yang cukup strategis karena terletak di jalur pelayaran internasional, Karimunbesar mendapat prioritas pengamanan dari TNI-AL.</p>
                                                                <a href="karimunbesar-berita.php">
                                                                <button type="button" class="btn btn-default">Selengkapnya <i class="fas fa-arrow-circle-right" style="color: #95c9ff;padding-left:10px;"></i></button>
                                                                </a>
                                                            </div>
                                                        
                                                    </div>
                                                
                                            </div>
                                        </div>
                                        <div class="berita-utama-item p-1">
                                            <div class="row">
                                                
                                                    <div class="col-md-12 text-left">
                                                        
                                                            <div class="col-md-12 text-left panel-small">
                                                                <!--<div class="box-image">
                                                                    <img src="assets/image/content/berita-utama.jpg">
                                                                </div>-->
                                                                <h4><strong>NUNUKAN - KALTARA</strong></h4>
                                                                <span class="text-left panel-date" style="margin-bottom:10px;">Oktober <b style="font-family: 'Roboto', sans-serif;font-weight: 900;">2019</b></span>
                                                                <hr>
                                                                <span class=""><b style="font-family: 'Roboto', sans-serif;font-weight: 900;font-size:16px;font-size: 18px;"></b></span>
                                                                <p>Nunukan adalah sebuah kabupaten paling utara dari Provinsi Kalimantan Utara dengan ibu kota, Kota Nunukan. Nunukan memiliki pulau terdepan, yaitu Pulau Sebatik yang wilayahnya dibagi menjadi 2, bagian utara termasuk dalam wilayah Negara Malaysia dan bagian selatan termasuk dalam wilayah Negara Indonesia.</p>
                                                                <a href="nunukan-berita.php">
                                                                <button type="button" class="btn btn-default">Selengkapnya <i class="fas fa-arrow-circle-right" style="color: #95c9ff;padding-left:10px;"></i></button>
                                                                </a>
                                                            </div>
                                                        
                                                    </div>
                                                
                                            </div>
                                        </div>
                                        <div class="berita-utama-item p-1">
                                            <div class="row">
                                                
                                                    <div class="col-md-12 text-left">
                                                        
                                                            <div class="col-md-12 text-left panel-small">
                                                                <!--<div class="box-image">
                                                                    <img src="assets/image/content/berita-utama.jpg">
                                                                </div>-->
                                                                <h4><strong>NATUNA - KEPRI</strong></h4>
                                                                <span class="text-left panel-date" style="margin-bottom:10px;">September <b style="font-family: 'Roboto', sans-serif;font-weight: 900;">2019</b></span>
                                                                <hr>
                                                                <span class=""><b style="font-family: 'Roboto', sans-serif;font-weight: 900;font-size:16px;font-size: 18px;"></b></span>
                                                                <p>Natuna adalah salah satu kabupaten di Provinsi Kepulauan Riau yang termasuk kepulauan paling utara di selat Karimata. Di sana, terdapat Markas TNI baik AL, AD, dan AU yang siap siaga menjaga pertahanan dan keamanan di perbatasan Indonesia.</p>
                                                                <a href="natuna-berita.php">
                                                                <button type="button" class="btn btn-default">Selengkapnya <i class="fas fa-arrow-circle-right" style="color: #95c9ff;padding-left:10px;"></i></button>
                                                                </a>
                                                            </div>
                                                        
                                                    </div>
                                                
                                            </div>
                                        </div>
                                        <div class="berita-utama-item p-1">
                                            <div class="row">
                                                
                                                    <div class="col-md-12 text-left">
                                                        
                                                            <div class="col-md-12 text-left panel-small">
                                                                <!--<div class="box-image">
                                                                    <img src="assets/image/content/berita-utama.jpg">
                                                                </div>-->
                                                                <h4><strong>MIANGAS - SULUT</strong></h4>
                                                                <span class="text-left panel-date" style="margin-bottom:10px;">Oktober <b style="font-family: 'Roboto', sans-serif;font-weight: 900;">2019</b></span>
                                                                <hr>
                                                                <span class=""><b style="font-family: 'Roboto', sans-serif;font-weight: 900;font-size:16px;font-size: 18px;"></b></span>
                                                                <p>Pulau Miangas adalah pulau yang terletak di paling utara Indonesia, dan merupakan pulau terdepan yang berbatasan langsung dengan Mindanao-Filipina.</p>
                                                                <a href="miangas-berita.php">
                                                                <button type="button" class="btn btn-default">Selengkapnya <i class="fas fa-arrow-circle-right" style="color: #95c9ff;padding-left:10px;"></i></button>
                                                                </a>
                                                            </div>
                                                        
                                                    </div>
                                                
                                            </div>
                                        </div>
                                        <div class="berita-utama-item p-1">
                                            <div class="row">
                                                
                                                    <div class="col-md-12 text-left">
                                                       
                                                            <div class="col-md-12 text-left panel-small">
                                                                <!--<div class="box-image">
                                                                    <img src="assets/image/content/berita-utama.jpg">
                                                                </div>-->
                                                                <h4><strong>SINABANG - ACEH</strong></h4>
                                                                <span class="text-left panel-date" style="margin-bottom:10px;">September <b style="font-family: 'Roboto', sans-serif;font-weight: 900;">2019</b></span>
                                                                <hr>
                                                                <span class=""><b style="font-family: 'Roboto', sans-serif;font-weight: 900;font-size:16px;font-size: 18px;"></b></span>
                                                                <p>Sinabang adalah ibu kota Kabupaten Simeulue, Aceh. Kota Sinabang terletak di bagian timur Pulau Simeulue dengan etnis terbesar merupakan orang Minangkabau, Aceh, dan Simeulue.</p>
                                                                <a href="sinabang-berita.php">
                                                                <button type="button" class="btn btn-default">Selengkapnya <i class="fas fa-arrow-circle-right" style="color: #95c9ff;padding-left:10px;"></i></button>
                                                                </a>
                                                            </div>
                                                       
                                                    </div>
                                                
                                            </div>
                                        </div>
                                        <div class="berita-utama-item p-1">
                                            <div class="row">
                                                
                                                    <div class="col-md-12 text-left">
                                                        
                                                            <div class="col-md-12 text-left panel-small">
                                                                <!--<div class="box-image">
                                                                    <img src="assets/image/content/berita-utama.jpg">
                                                                </div>-->
                                                                <h4><strong>PULAU ROTE - NTT</strong></h4>
                                                                <span class="text-left panel-date" style="margin-bottom:10px;">September <b style="font-family: 'Roboto', sans-serif;font-weight: 900;">2019</b></span>
                                                                <hr>
                                                                <span class=""><b style="font-family: 'Roboto', sans-serif;font-weight: 900;font-size:16px;font-size: 18px;"></b></span>
                                                                <p>Pulau Rote dan beberapa pulau tetangganya adalah ujung paling selatan dari Indonesia. Bagi traveler penikmat ombak, Pantai Nemberala di Pulau Rote adalah surganya para peselancar dunia.</p>
                                                                <a href="pulaurote-berita.php">
                                                                <button type="button" class="btn btn-default">Selengkapnya <i class="fas fa-arrow-circle-right" style="color: #95c9ff;padding-left:10px;"></i></button>
                                                                </a>
                                                            </div>
                                                        
                                                    </div>
                                                
                                           
                                                
                                            </div>
                                        </div>
                                        <div class="berita-utama-item p-1">
                                            <div class="row">
                                                
                                                    <div class="col-md-12 text-left">
                                                        
                                                            <div class="col-md-12 text-left panel-small">
                                                                <!--<div class="box-image">
                                                                    <img src="assets/image/content/berita-utama.jpg">
                                                                </div>-->
                                                                <h4><strong>SKOUW - JAYAPURA</strong></h4>
                                                                <span class="text-left panel-date" style="margin-bottom:10px;">Oktober <b style="font-family: 'Roboto', sans-serif;font-weight: 900;">2018</b></span>
                                                                <hr>
                                                                <span class=""><b style="font-family: 'Roboto', sans-serif;font-weight: 900;font-size:16px;font-size: 18px;"></b></span>
                                                                <p>Skouw merupakan perbatasan RI dan Papua Nugini ini dapat ditempuh dalam waktu 1,5 jam dari Bandara Sentani. Pos perbatasan Skouw dilengkapi pagar yang tinggi serta pemandangan pantai yang sangat Indah terlihat dari atas bukit.</p>
                                                                <a href="skouw-berita.php">
                                                                <button type="button" class="btn btn-default">Selengkapnya <i class="fas fa-arrow-circle-right" style="color: #95c9ff;padding-left:10px;"></i></button>
                                                                </a>
                                                            </div>
                                                        
                                                    </div>
                                                
                                            </div>
                                        </div>
                                        <div class="berita-utama-item p-1">
                                            <div class="row">
                                                
                                                    <div class="col-md-12 text-left">
                                                        
                                                            <div class="col-md-12 text-left panel-small">
                                                                <!--<div class="box-image">
                                                                    <img src="assets/image/content/berita-utama.jpg">
                                                                </div>-->
                                                                <h4><strong>ENTIKONG - KALBAR</strong></h4>
                                                                <span class="text-left panel-date" style="margin-bottom:10px;">September <b style="font-family: 'Roboto', sans-serif;font-weight: 900;">2017</b></span>
                                                                <hr>
                                                                <span class=""><b style="font-family: 'Roboto', sans-serif;font-weight: 900;font-size:16px;font-size: 18px;"></b></span>
                                                                <p>Entikong adalah daerah tapal batas antara Indonesia dengan Malaysia. Entikong berbatasan langsung dengan Serawak, sering disebut jalur sutera karena memungkinkan transportasi dan bisnis melalui darat tanpa harus menyeberangi laut.</p>
                                                                <a href="entikong-berita.php">
                                                                <button type="button" class="btn btn-default">Selengkapnya <i class="fas fa-arrow-circle-right" style="color: #95c9ff;padding-left:10px;"></i></button>
                                                                </a>
                                                            </div>
                                                        
                                                    </div>
                                                
                                            </div>
                                        </div>
                                        <div class="berita-utama-item p-1">
                                            <div class="row">
                                                
                                                    <div class="col-md-12 text-left">
                                                        
                                                            <div class="col-md-12 text-left panel-small">
                                                                <!--<div class="box-image">
                                                                    <img src="assets/image/content/berita-utama.jpg">
                                                                </div>-->
                                                                <h4><strong>MERAUKE - PAPUA</strong></h4>
                                                                <span class="text-left panel-date" style="margin-bottom:10px;">Juli <b style="font-family: 'Roboto', sans-serif;font-weight: 900;">2017</b></span>
                                                                <hr>
                                                                <span class=""><b style="font-family: 'Roboto', sans-serif;font-weight: 900;font-size:16px;font-size: 18px;"></b></span>
                                                                <p>Merauke adalah salah satu kota paling timur di Indonesia, sekaligus berbatasan dengan Papua Nugini. Di kota Merauke terdapat sebuah tugu yang merupakan kembaran dari tugu yang terdapat di Sabang yaitu Tugu Sabang-Merauke. </p>
                                                                <a href="merauke-berita.php">
                                                                <button type="button" class="btn btn-default">Selengkapnya <i class="fas fa-arrow-circle-right" style="color: #95c9ff;padding-left:10px;"></i></button>
                                                                </a>
                                                            </div>
                                                        
                                                    </div>
                                                
                                            </div>
                                        </div>
                                        <div class="berita-utama-item p-1">
                                            <div class="row">
                                                
                                                    <div class="col-md-12 text-left">
                                                        
                                                            <div class="col-md-12 text-left panel-small">
                                                                <!--<div class="box-image">
                                                                    <img src="assets/image/content/berita-utama.jpg">
                                                                </div>-->
                                                                <h4><strong>MOTAAIN - NTT</strong></h4>
                                                                <span class="text-left panel-date" style="margin-bottom:10px;">April <b style="font-family: 'Roboto', sans-serif;font-weight: 900;">2017</b></span>
                                                                <hr>
                                                                <span class=""><b style="font-family: 'Roboto', sans-serif;font-weight: 900;font-size:16px;font-size: 18px;"></b></span>
                                                                <p>Motaain adalah perbatasan yang memisahkan antara Indonesia dengan Timor Leste. Terletak di Atambua NTT, kawasan ini masih asri karena terletak di antara pegunungan</p>
                                                                <a href="atambua-berita.php">
                                                                <button type="button" class="btn btn-default">Selengkapnya <i class="fas fa-arrow-circle-right" style="color: #95c9ff;padding-left:10px;"></i></button>
                                                                </a>
                                                            </div>
                                                        
                                                    </div>
                                                
                                            </div>
                                        </div>
                                        

                                    </div>
                                </div>
                            </div>
                            <div class="row section-title-container">
                                <!--<div class="col-md-8 col-xs-6 text-left">
                                    <span class="section-title">BERITA UTAMA</span>
                                </div>-->
                                <div class="col-md-4 col-xs-6" id="controler-small">

                                    <button class="btn btn-md btn-success btnPrev"><i class="fas fa-angle-left fa-2x"></i></button>
                                    <button class="btn btn-md btn-success btnNext"><i class="fas fa-angle-right fa-2x"></i></button>
<!--
                                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next text-faded" href="#myCarousel" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
-->
                                </div>
                            </div>
                        </div>
                        <!--End of Berita Utama-->
				</div>
			</div>
		</div>
	</section>

<!---->








<section id="gambar-jalan">
    <div class="container">
    <div class="col-md-12" style="padding-left:0!important; padding-right:0!important;">
        <div class="sec-title text-center">
            <h2>Galeri Foto Terbaru</h2>
            <!--<p>Melihat wajah daerah perbatasan</p>-->
            <span class="decor">
                <span class="inner"></span>
            </span>
        </div>
        <div class="carousel slide" data-ride="carousel" data-interval="4000" id="myCarousel2" >
          <div class="carousel-inner">
            <div class="item active">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="image"><a href="img/index-bg2.jpg" class="lightbox-image"><img src="img/sample/1.jpeg" alt=""></a>
                    </div>

                    <a href="{clickurl}" class="" title="PHRI Siap Penuhi Tantangan Kemenpar 2018" rel="gallery" target="_blank">
                        <div class="text-atas"><span>1 Juni 2018</span><h3>PHRI Siap Penuhi Tantangan Kemenpar 2018</h3></div>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="image"><a href="img/index-bg2.jpg" class="lightbox-image"><img src="img/sample/2.jpeg" alt=""></a>
                    </div>

                    <!--<a href="img/sample/2.jpeg" class="lightbox-image btn-zoom" title="PHRI Siap Penuhi Tantangan Kemenpar 2018" rel="gallery"></a>-->
                    <a href="{clickurl}" class="" title="PHRI Siap Penuhi Tantangan Kemenpar 2018" rel="gallery" target="_blank">
                        <div class="text-atas"><span>1 Juni 2018</span><h3>PHRI Siap Penuhi Tantangan Kemenpar 2018</h3></div>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="image"><a href="img/index-bg2.jpg" class="lightbox-image"><img src="img/sample/3.jpeg" alt=""></a>
                    </div>
                    <a href="{clickurl}" class="" title="PHRI Siap Penuhi Tantangan Kemenpar 2018" rel="gallery" target="_blank">
                        <div class="text-atas"><span>1 Juni 2018</span><h3>PHRI Siap Penuhi Tantangan Kemenpar 2018</h3></div>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="image"><a href="img/sample/1.jpeg" class="lightbox-image"><img src="img/sample/4.jpeg" alt=""></a>
                    </div>
                    <a href="{clickurl}" class="" title="PHRI Siap Penuhi Tantangan Kemenpar 2018" rel="gallery" target="_blank">
                        <div class="text-atas"><span>1 Juni 2018</span><h3>PHRI Siap Penuhi Tantangan Kemenpar 2018</h3></div>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="image"><a href="img/sample/1.jpeg" class="lightbox-image"><img src="img/sample/5.jpeg" alt=""></a>
                    </div>
                    <a href="{clickurl}" class="" title="PHRI Siap Penuhi Tantangan Kemenpar 2018" rel="gallery" target="_blank">
                        <div class="text-atas"><span>1 Juni 2018</span><h3>PHRI Siap Penuhi Tantangan Kemenpar 2018</h3></div>
                    <a href="{clickurl}" class="" title="PHRI Siap Penuhi Tantangan Kemenpar 2018" rel="gallery" target="_blank">
                </div>
            </div>
            <div class="item">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="image"><a href="img/sample/1.jpeg" class="lightbox-image"><img src="img/sample/6.jpeg" alt=""></a>
                    </div>
                    <a href="{clickurl}" class="" title="PHRI Siap Penuhi Tantangan Kemenpar 2018" rel="gallery" target="_blank">
                        <div class="text-atas"><span>1 Juni 2018</span><h3>PHRI Siap Penuhi Tantangan Kemenpar 2018</h3></div>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="image"><a href="img/sample/2.jpeg" class="lightbox-image"><img src="img/sample/7.jpeg" alt=""></a>
                    </div>
                    <a href="{clickurl}" class="" title="PHRI Siap Penuhi Tantangan Kemenpar 2018" rel="gallery" target="_blank">
                        <div class="text-atas"><span>1 Juni 2018</span><h3><h3>PHRI Siap Penuhi Tantangan Kemenpar 2018</h3></div>
                    </a>
                </div>
            </div>
            <div class="item">

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="image"><a href="img/sample/2.jpeg" class="lightbox-image"><img src="img/sample/8.jpeg" alt=""></a>
                    </div>
                    <a href="{clickurl}" class="" title="PHRI Siap Penuhi Tantangan Kemenpar 2018" rel="gallery" target="_blank">
                        <div class="text-atas"><span>1 Juni 2018</span><h3>PHRI Siap Penuhi Tantangan Kemenpar 2018</h3></div>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="image"><a href="img/sample/2.jpeg" class="lightbox-image"><img src="img/sample/9.jpeg" alt=""></a>
                    </div>
                    <a href="{clickurl}" class="" title="PHRI Siap Penuhi Tantangan Kemenpar 2018" rel="gallery" target="_blank">
                        <div class="text-atas"><span>1 Juni 2018</span><h3>PHRI Siap Penuhi Tantangan Kemenpar 2018</h3></div>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="image"><a href="img/sample/3.jpeg" class="lightbox-image"><img src="img/sample/10.jpeg" alt=""></a>
                    </div>
                    <a href="{clickurl}" class="" title="PHRI Siap Penuhi Tantangan Kemenpar 2018" rel="gallery" target="_blank">
                        <div class="text-atas"><span>1 Juni 2018</span><h3>PHRI Siap Penuhi Tantangan Kemenpar 2018</h3></div>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="image"><a href="img/sample/3.jpeg" class="lightbox-image"><img src="img/sample/11.jpeg" alt=""></a>
                    </div>
                    <a href="{clickurl}" class="" title="PHRI Siap Penuhi Tantangan Kemenpar 2018" rel="gallery" target="_blank">
                        <div class="text-atas"><span>1 Juni 2018</span><h3>PHRI Siap Penuhi Tantangan Kemenpar 2018</h3></div>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="image"><a href="img/sample/3.jpeg" class="lightbox-image"><img src="img/sample/12.jpeg" alt=""></a>
                    </div>
                    <a href="{clickurl}" class="" title="PHRI Siap Penuhi Tantangan Kemenpar 2018" rel="gallery" target="_blank">
                        <div class="text-atas"><span>1 Juni 2018</span><h3>PHRI Siap Penuhi Tantangan Kemenpar 2018</h3></div>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="image"><a href="img/sample/3.jpeg" class="lightbox-image"><img src="img/sample/11.jpeg" alt=""></a>
                    </div>
                    <a href="{clickurl}" class="" title="PHRI Siap Penuhi Tantangan Kemenpar 2018" rel="gallery" target="_blank">
                        <div class="text-atas"><span>1 Juni 2018</span><h3>PHRI Siap Penuhi Tantangan Kemenpar 2018</h3></div>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="image"><a href="img/sample/3.jpeg" class="lightbox-image"><img src="img/sample/12.jpeg" alt=""></a>
                    </div>
                    <a href="{clickurl}" class="" title="PHRI Siap Penuhi Tantangan Kemenpar 2018" rel="gallery" target="_blank">
                        <div class="text-atas"><span>1 Juni 2018</span><h3>PHRI Siap Penuhi Tantangan Kemenpar 2018</h3></div>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="image"><a href="img/sample/3.jpeg" class="lightbox-image"><img src="img/sample/11.jpeg" alt=""></a>
                    </div>
                    <a href="{clickurl}" class="" title="PHRI Siap Penuhi Tantangan Kemenpar 2018" rel="gallery" target="_blank">
                        <div class="text-atas"><span>1 Juni 2018</span><h3>PHRI Siap Penuhi Tantangan Kemenpar 2018</h3></div>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="image"><a href="img/sample/3.jpeg" class="lightbox-image"><img src="img/sample/12.jpeg" alt=""></a>
                    </div>
                    <a href="{clickurl}" class="" title="PHRI Siap Penuhi Tantangan Kemenpar 2018" rel="gallery" target="_blank">
                        <div class="text-atas"><span>1 Juni 2018</span><h3>PHRI Siap Penuhi Tantangan Kemenpar 2018</h3></div>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="image"><a href="img/sample/3.jpeg" class="lightbox-image"><img src="img/sample/11.jpeg" alt=""></a>
                    </div>
                    <a href="{clickurl}" class="" title="PHRI Siap Penuhi Tantangan Kemenpar 2018" rel="gallery" target="_blank">
                        <div class="text-atas"><span>1 Juni 2018</span><h3>PHRI Siap Penuhi Tantangan Kemenpar 2018</h3></div>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="image"><a href="img/sample/3.jpeg" class="lightbox-image"><img src="img/sample/12.jpeg" alt=""></a>
                    </div>
                    <a href="{clickurl}" class="" title="PHRI Siap Penuhi Tantangan Kemenpar 2018" rel="gallery" target="_blank">
                        <div class="text-atas"><span>1 Juni 2018</span><h3>PHRI Siap Penuhi Tantangan Kemenpar 2018</h3></div>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="image"><a href="img/sample/3.jpeg" class="lightbox-image"><img src="img/sample/11.jpeg" alt=""></a>
                    </div>
                    <a href="{clickurl}" class="" title="PHRI Siap Penuhi Tantangan Kemenpar 2018" rel="gallery" target="_blank">
                        <div class="text-atas"><span>1 Juni 2018</span><h3>PHRI Siap Penuhi Tantangan Kemenpar 2018</h3></div>
                    </a>
                </div>
            </div>
            <div class="item">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="image"><a href="img/sample/3.jpeg" class="lightbox-image"><img src="img/sample/12.jpeg" alt=""></a>
                    </div>
                    <a href="{clickurl}" class="" title="PHRI Siap Penuhi Tantangan Kemenpar 2018" rel="gallery" target="_blank">
                        <div class="text-atas"><span>1 Juni 2018</span><h3>PHRI Siap Penuhi Tantangan Kemenpar 2018</h3></div>
                    </a>
                </div>
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel2" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
          <a class="right carousel-control" href="#myCarousel2" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
        </div>
    </div>
        </div>
</section>

<?php include("berita-video-terbaru-2.php"); ?>
    

  <!------ JS CODE ---------->
  <script type="text/javascript" src="js/slick/slick.js"></script>
  <script type="text/javascript" src="js/slick/slick-fullscreen.js"></script>
  <script type="text/javascript">
     $(document).ready(function(){
       $('.berita-utama-slider').slick({
         autoplay: true,
           dots: false,
         infinite: true,
         speed: 300,
         slidesToShow: 1,
         slidesToScroll: 1,
         prevArrow: $(".btnPrev"),
         nextArrow: $(".btnNext"),
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
         
        $('.intro-section').slick({
         autoplay: true,
           dots: false,
         infinite: true,
         speed: 300,
         slidesToShow: 1,
         slidesToScroll: 1,
         prevArrow: $("#slider-prev"),
         nextArrow: $("#slider-next"),
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


	<?php include("footer.php"); ?>



</body>
    

    
</html>
