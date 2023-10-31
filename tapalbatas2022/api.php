<script>

                // This example displays a marker at the center of Australia.
                // When the user clicks the marker, an info window opens.
                // The maximum width of the info window is set to 200 pixels.

                function initMap() {
                    myZoom = 5;

                    if($(window).width() <= 480 ){
                        myZoom = 3;
                    }else if($(window).width() <= 945 ){
                        myZoom =4;
                    }
                    var atambua = {lat: -9.095822, lng: 124.8785353};
                    var entikong = {lat: 0.996409, lng: 110.1186448};
                    var merauke = {lat: -8.5003995, lng: 140.372136};
                    var skouw = {lat: -2.6280285, lng: 140.8348691};
                    var indonesia = {lat: -1.2900683, lng: 119.739137};
                  var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: myZoom,
                    center: indonesia,
                    scrollwheel: false
                  });

                  var contentString = '<div id="content">'+
                      '<div id="siteNotice">'+
                      '</div>'+
                      '<h3 id="firstHeading" class="firstHeading">Atambua</h3>'+
                      '<div id="bodyContent">'+
                      '<img src="img/atambua.jpeg" style="max-width:300px">'+
                      '<p class="pt10">Perbatasan Indonesia dengan Timor Leste. Kini Atambua menjadi salah satu daerah perbatasan yang cukup pesat kemajuannya.. <a href=atambua-berita.php><b>Selengkapnya</b></a></p>'+
                      '</div>'+
                      '</div>';

                    var contentString2 = '<div id="content">'+
                      '<div id="siteNotice">'+
                      '</div>'+
                      '<h3 id="firstHeading" class="firstHeading">Entikong</h3>'+
                      '<div id="bodyContent">'+
                      '<img src="img/entikong.jpg" style="max-width:300px">'+
                      '<p class="pt10">Coming soon..</p>'+
                    '<p class="pt10">Jalur sutera, perlintasan darat yang menghubungkan Indonesia dengan Malaysia.. <a href=entikong-berita.php><b>Selengkapnya</b></a></p>'+
                      '</div>'+
                      '</div>';

                    var contentString3 =
                      '<div id="content">'+
                      '<div id="siteNotice">'+
                      '</div>'+
                      '<h3 id="firstHeading" class="firstHeading">Merauke</h3>'+
                      '<div id="bodyContent">'+
                      '<img src="img/merauke.jpg" style="max-width:300px">'+
                      '<p class="pt10">Kota paling timur di Indonesia, berbatasan langsung dengan negara tetangga Papua Nugini.. <a href=merauke-berita.php><b>Selengkapnya</b></a></p>'+
                      '</div>'+
                      '</div>';

                    var contentString4 =
                      '<div id="content">'+
                      '<div id="siteNotice">'+
                      '</div>'+
                      '<h3 id="firstHeading" class="firstHeading">Skouw</h3>'+
                      '<div id="bodyContent">'+
                      '<img src="img/skouw.jpg" style="max-width:300px">'+
                      '<p class="pt10">Wajah terdepan Indonesia yang berada di Kota Jayapura... <a href=skouw-berita.php><b>Selengkapnya</b></a></p>'+
                      '</div>'+
                      '</div>';

                      var infowindow = new google.maps.InfoWindow({
                        content: contentString,
                        maxWidth: 300
                      });
                        var infowindow2 = new google.maps.InfoWindow({
                        content: contentString2,
                        maxWidth: 300
                      });
                        var infowindow3 = new google.maps.InfoWindow({
                        content: contentString3,
                        maxWidth: 300
                      });
                        var infowindow4 = new google.maps.InfoWindow({
                        content: contentString4,
                        maxWidth: 300
                      });

                      var marker = new google.maps.Marker({
                        position: atambua,
                        map: map,
                        title: 'Atambua'

                      });
                    //    google.maps.event.addListener(map, 'idle', function () {
                    //        marker.setAnimation(google.maps.Animation.BOUNCE);
                    //    });

                        var marker2 = new google.maps.Marker({
                        position: entikong,
                        map: map,
                        title: 'Entikong'

                      });
                    //    google.maps.event.addListener(map, 'idle', function () {
                    //        marker2.setAnimation(google.maps.Animation.BOUNCE);
                    //    });
                    //
                        var marker3 = new google.maps.Marker({
                        position: merauke,
                        map: map,
                        title: 'Merauke'

                      });
                    //     google.maps.event.addListener(map, 'idle', function () {
                    //        marker3.setAnimation(google.maps.Animation.BOUNCE);
                    //    });
                    //
                        var marker4 = new google.maps.Marker({
                        position: skouw,
                        map: map,
                        title: 'Skouw'

                      });

                        google.maps.event.addListener(map, 'idle', function () {
                            marker4.setAnimation(google.maps.Animation.BOUNCE);
                        });

                        google.maps.event.addListener(marker2, 'click', function(){
                        infowindow.close(map, marker);
                     });
                        google.maps.event.addListener(marker3, 'click', function(){
                        infowindow.close(map, marker);
                     });
                        google.maps.event.addListener(marker4, 'click', function(){
                        infowindow.close(map, marker);
                     });


                        google.maps.event.addListener(marker, 'click', function(){
                        infowindow2.close(map, marker2);
                     });
                        google.maps.event.addListener(marker3, 'click', function(){
                        infowindow2.close(map, marker2);
                     });
                        google.maps.event.addListener(marker4, 'click', function(){
                        infowindow2.close(map, marker2);
                     });


                        google.maps.event.addListener(marker, 'click', function(){
                        infowindow3.close(map, marker3);
                     });
                        google.maps.event.addListener(marker2, 'click', function(){
                        infowindow3.close(map, marker3);
                     });
                        google.maps.event.addListener(marker4, 'click', function(){
                        infowindow3.close(map, marker3);
                     });


                        google.maps.event.addListener(marker, 'click', function(){
                        infowindow4.close(map, marker4);
                     });
                        google.maps.event.addListener(marker2, 'click', function(){
                        infowindow4.close(map, marker4);
                     });
                        google.maps.event.addListener(marker3, 'click', function(){
                        infowindow4.close(map, marker4);
                     });


                      marker.addListener('click', function() {
                        infowindow.open(map, marker);
                      });
                        marker2.addListener('click', function() {
                        infowindow2.open(map, marker2);
                      });
                        marker3.addListener('click', function() {
                        infowindow3.open(map, marker3);
                      });
                        marker4.addListener('click', function() {
                        infowindow4.open(map, marker4);
                      });


                       marker4.setIcon('img/pointer-bri.png');
                    }
                            function hideAllInfoWindows(map) {
                       markers.forEach(function(marker) {
                         marker.infowindow.close(map, marker);
                      });
                    }

                </script>

                <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgFUlAuHNtkFStcd4DpyenWN7sXtsWZwo&callback=initMap">
                </script>