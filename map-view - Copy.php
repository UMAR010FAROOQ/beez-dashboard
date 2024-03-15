


<section id="tab-views" class=" ft-contact-page-section page-padding hide pt-0">
    <div class="container">
<div class="row">
            <!-- Tracking Info Tabs -->
            <div class="tracking-info-tabs">
                <!-- Track Tabs -->
                <div class="ft1-track-tabs tabs-box">


                    <!--Tabs Container-->
                    <div class="tabs-content">

                        <!-- Tab / Active Tab -->
                        <div class="tab active-tab" id="prod-quote">
                            <div class="">
                                <div id="map" style="width: 100%; height: 100vh;"></div>
                                <div id="info-marker" style="display:none">
                                    <div class="gm-style-iw-d" style="max-height: 347px;">
                                        <div>
                                            <div class="info-window">
                                                <div class="map-store-details">
                                                    <h4> <span>Beez</span>KSA 43354 - DMM Nada Imam Muhammad Abdulwahab St.</h4>
                                                </div>
                                                <div class="today-open-hours">
                                                    <p>Opening Hours </p>
                                                    <img src="assets/img/shape/clock_img.png">
                                                    <span>Today :- </span><span>9:00AM - 12:00PM, 12:00PM - 6:00PM </span><a target="_blank" href="https://www.google.com/maps?q=26.365813+50.074918" tabindex="0"><i
                              class="fal fa-location-arrow"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    var locations = [
                                        [document.getElementById("info-marker").innerHTML, 26.415202701962993, 50.003288697890326, 4],
                                        [document.getElementById("info-marker").innerHTML, 26.24529641460917, 50.03520924487996, 5],
                                        [document.getElementById("info-marker").innerHTML, 26.372972934095813, 49.9838908270274, 3],
                                        [document.getElementById("info-marker").innerHTML, 26.355372640100864, 50.030298391496935, 2],
                                        [document.getElementById("info-marker").innerHTML, 26.514762888176163, 50.00451641123608, 1]
                                    ];

                                    var map = new google.maps.Map(document.getElementById('map'), {
                                        zoom: 10,
                                        center: new google.maps.LatLng(26.341368797449388, 49.94716813125511),
                                        mapTypeId: google.maps.MapTypeId.ROADMAP
                                    });

                                    var infowindow = new google.maps.InfoWindow();

                                    var marker, i;

                                    for (i = 0; i < locations.length; i++) {
                                        marker = new google.maps.Marker({
                                            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                                            map: map
                                        });

                                        google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                            return function() {
                                                infowindow.setContent(locations[i][0]);
                                                infowindow.open(map, marker);
                                            }
                                        })(marker, i));
                                    }
                                    
                                </script>

                            </div>
                        </div>

                   
                    </div>
                </div>
          

        </div>
        </div>
    </div>
</section>
