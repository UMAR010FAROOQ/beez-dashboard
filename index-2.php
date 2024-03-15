<!DOCTYPE html>
<html>

<head>
    <title>Displaying Text Directions With setPanel()</title>
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        
        #container {
            height: 100%;
            display: flex;
        }
        
        #sidebar {
            flex-basis: 15rem;
            flex-grow: 1;
            padding: 1rem;
            max-width: 30rem;
            height: 100%;
            box-sizing: border-box;
            overflow: auto;
        }
        
        #map {
            flex-basis: 0;
            flex-grow: 4;
            height: 100%;
        }
        
        #floating-panel {
            position: absolute;
            top: 10px;
            left: 25%;
            z-index: 5;
            background-color: #fff;
            padding: 5px;
            border: 1px solid #999;
            text-align: center;
            font-family: "Roboto", "sans-serif";
            line-height: 30px;
            padding-left: 10px;
        }
        
        #floating-panel {
            background-color: #fff;
            border: 0;
            border-radius: 2px;
            box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
            margin: 10px;
            padding: 0 0.5em;
            font: 400 18px Roboto, Arial, sans-serif;
            overflow: hidden;
            padding: 5px;
            font-size: 14px;
            text-align: center;
            line-height: 30px;
            height: auto;
        }
        
        #map {
            flex: auto;
            display: none;
        }
        
        #sidebar {
            flex: 0 1 auto;
            padding: 0;
        }
        
        #sidebar>div {
            padding: 0.5rem;
        }
        
        .adp-directions {
            display: none;
        }
    </style>
    <!-- jsFiddle will insert css and js -->
</head>

<body>
    <div id="floating-panel">
        <input id="start" class="controls" type="text" placeholder="Enter an origin location" />

        <input id="end" class="controls" type="text" placeholder="Enter a destination location" />
        <button id="calculate">Calculate</button>
        <!-- <strong>Start:</strong>
      <select id="start">
        <option value="chicago, il">Chicago</option>
        <option value="st louis, mo">St Louis</option>
        <option value="joplin, mo">Joplin, MO</option>
        <option value="oklahoma city, ok">Oklahoma City</option>
        <option value="amarillo, tx">Amarillo</option>
        <option value="gallup, nm">Gallup, NM</option>
        <option value="flagstaff, az">Flagstaff, AZ</option>
        <option value="winona, az">Winona</option>
        <option value="kingman, az">Kingman</option>
        <option value="barstow, ca">Barstow</option>
        <option value="san bernardino, ca">San Bernardino</option>
        <option value="los angeles, ca">Los Angeles</option>
      </select>
      <br />
      <strong>End:</strong>
      <select id="end">
        <option value="chicago, il">Chicago</option>
        <option value="st louis, mo">St Louis</option>
        <option value="joplin, mo">Joplin, MO</option>
        <option value="oklahoma city, ok">Oklahoma City</option>
        <option value="amarillo, tx">Amarillo</option>
        <option value="gallup, nm">Gallup, NM</option>
        <option value="flagstaff, az">Flagstaff, AZ</option>
        <option value="winona, az">Winona</option>
        <option value="kingman, az">Kingman</option>
        <option value="barstow, ca">Barstow</option>
        <option value="san bernardino, ca">San Bernardino</option>
        <option value="los angeles, ca">Los Angeles</option>
      </select>-->
    </div>
    <div id="container">
        <div id="map"></div>
        <div id="sidebar"></div>
    </div>
    <div style="display: none">
        <div id="floating-panel">
            <strong>Start:</strong>

            <select id="start">
          <option value="chicago, il">Chicago</option>
          <option value="st louis, mo">St Louis</option>
          <option value="joplin, mo">Joplin, MO</option>
          <option value="oklahoma city, ok">Oklahoma City</option>
          <option value="amarillo, tx">Amarillo</option>
          <option value="gallup, nm">Gallup, NM</option>
          <option value="flagstaff, az">Flagstaff, AZ</option>
          <option value="winona, az">Winona</option>
          <option value="kingman, az">Kingman</option>
          <option value="barstow, ca">Barstow</option>
          <option value="san bernardino, ca">San Bernardino</option>
          <option value="los angeles, ca">Los Angeles</option>
        </select>
            <br />
            <strong>End:</strong>
            <select id="end">
          <option value="chicago, il">Chicago</option>
          <option value="st louis, mo">St Louis</option>
          <option value="joplin, mo">Joplin, MO</option>
          <option value="oklahoma city, ok">Oklahoma City</option>
          <option value="amarillo, tx">Amarillo</option>
          <option value="gallup, nm">Gallup, NM</option>
          <option value="flagstaff, az">Flagstaff, AZ</option>
          <option value="winona, az">Winona</option>
          <option value="kingman, az">Kingman</option>
          <option value="barstow, ca">Barstow</option>
          <option value="san bernardino, ca">San Bernardino</option>
          <option value="los angeles, ca">Los Angeles</option>
        </select>
        </div>
    </div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->

    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDcrZiAUCyWW-V6zK_7_ERgqwxdFDXExh8&callback=initMap&libraries=places&v=weekly&channel=2" async></script>
    <script>
        function initMap() {
            const directionsRenderer = new google.maps.DirectionsRenderer();
            const directionsService = new google.maps.DirectionsService();
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 7,
                center: {
                    lat: 41.85,
                    lng: -87.65
                },
                disableDefaultUI: true,
            });
            var input = document.getElementById('start');
            map.controls[google.maps.ControlPosition.TOP_CENTER].push(input);

            var autocomplete = new google.maps.places.Autocomplete(input);
            autocomplete.bindTo('bounds', map);

            var infowindow = new google.maps.InfoWindow();
            var marker = new google.maps.Marker({
                map: map,
                anchorPoint: new google.maps.Point(0, -29)
            });
            var input = document.getElementById('end');
            map.controls[google.maps.ControlPosition.TOP_CENTER].push(input);

            var autocomplete = new google.maps.places.Autocomplete(input);
            autocomplete.bindTo('bounds', map);

            var infowindow = new google.maps.InfoWindow();
            var marker = new google.maps.Marker({
                map: map,
                anchorPoint: new google.maps.Point(0, -29)
            });

            directionsRenderer.setMap(map);
            directionsRenderer.setPanel(document.getElementById("sidebar"));

            const control = document.getElementById("floating-panel");

            map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);

            const onChangeHandler = function() {
                calculateAndDisplayRoute(directionsService, directionsRenderer);
            };


            document.getElementById("calculate").addEventListener("click", onChangeHandler);
        }

        function calculateAndDisplayRoute(directionsService, directionsRenderer) {
            const start = document.getElementById("start").value;
            const end = document.getElementById("end").value;

            directionsService
                .route({
                    origin: start,
                    destination: end,
                    travelMode: google.maps.TravelMode.DRIVING,
                })
                .then((response) => {
                    directionsRenderer.setDirections(response);
                })
                .catch((e) => window.alert("Directions request failed due to " + status));
        }

        class AutocompleteDirectionsHandler {
            map;
            originPlaceId;
            destinationPlaceId;
            travelMode;
            directionsService;
            directionsRenderer;
            constructor(map) {
                    this.map = map;
                    this.originPlaceId = "";
                    this.destinationPlaceId = "";
                    this.travelMode = google.maps.TravelMode.DRIVING;
                    this.directionsService = new google.maps.DirectionsService();
                    this.directionsRenderer = new google.maps.DirectionsRenderer();
                    this.directionsRenderer.setMap(map);

                    const originInput = document.getElementById("start");
                    const destinationInput = document.getElementById("end");

                    // Specify just the place data fields that you need.
                    const originAutocomplete = new google.maps.places.Autocomplete(
                        originInput, {
                            fields: ["place_id"]
                        }
                    );
                    // Specify just the place data fields that you need.
                    const destinationAutocomplete = new google.maps.places.Autocomplete(
                        destinationInput, {
                            fields: ["place_id"]
                        }
                    );


                    this.setupClickListener(
                        "changemode-driving",
                        google.maps.TravelMode.DRIVING
                    );
                    this.setupPlaceChangedListener(originAutocomplete, "ORIG");
                    this.setupPlaceChangedListener(destinationAutocomplete, "DEST");
                    this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(originInput);
                    this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(
                        destinationInput
                    );
                    this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(modeSelector);
                }
                // Sets a listener on a radio button to change the filter type on Places
                // Autocomplete.
            setupClickListener(id, mode) {
                const radioButton = document.getElementById(id);

                radioButton.addEventListener("click", () => {
                    this.travelMode = mode;
                    this.route();
                });
            }
            setupPlaceChangedListener(autocomplete, mode) {
                autocomplete.bindTo("bounds", this.map);
                autocomplete.addListener("place_changed", () => {
                    const place = autocomplete.getPlace();

                    if (!place.place_id) {
                        window.alert("Please select an option from the dropdown list.");
                        return;
                    }

                    if (mode === "ORIG") {
                        this.originPlaceId = place.place_id;
                    } else {
                        this.destinationPlaceId = place.place_id;
                    }

                    this.route();
                });
            }
            route() {
                if (!this.originPlaceId || !this.destinationPlaceId) {
                    return;
                }

                const me = this;

                this.directionsService.route({
                        origin: {
                            placeId: this.originPlaceId
                        },
                        destination: {
                            placeId: this.destinationPlaceId
                        },
                        travelMode: this.travelMode,
                    },
                    (response, status) => {
                        if (status === "OK") {
                            me.directionsRenderer.setDirections(response);
                        } else {
                            window.alert("Directions request failed due to " + status);
                        }
                    }
                );
            }
        }
    </script>

</body>

</html>