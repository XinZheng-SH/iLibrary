<script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.4.3/build/ol.js"></script>

<script type="text/javascript">
	setTimeout(function (){
		$('#disappear_div').remove();
		$('#appear_div').css("visibility", "visible");
	},3000)
</script>

<div class="container-fluid">
<div class="row" style="margin-top: 5em;">
	<div class="col-sm-3" id="side-bar" >
		<div class="card">
			<div class="card-header">1 library found</div>
			<ul class="list-group list-group-flush" >
				<li class="list-group-item" style="justify-content: center;">
					<div class="card" style="width: 100%;">
						<div class="card" style="width: 100%;">
							<img class="card-img-top" src="<?php echo base_url('assets/images/library_test.jpg') ?>" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title" style="font-size: 1em; font-style: italic; font-weight: bold;">Central library</h5>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item">Open Hour:</li>
								<li class="list-group-item">Wifi Available:</li>
							</ul>
							<div class="card-body">
								<a href="#" class="card-link">Popular book</a>
								<a href="http://maps.google.co.uk/maps?q=central library" class="card-link">Google Map</a>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="col-sm-9 container" id="radar-block">
		Results
		<hr/>
		<div class="mx-auto" id="radar">
			<div id="map" class="map"></div>

<!--			<script type="text/javascript">-->
<!--				var map = new ol.Map({-->
<!--					target: 'map',-->
<!--					layers: [-->
<!--						new ol.layer.Tile({-->
<!--							source: new ol.source.OSM()-->
<!--						})-->
<!--					],-->
<!--					view: new ol.View({-->
<!--						center: ol.proj.transform([-27, 80], 'EPSG:4326', 'EPSG:3857'),-->
<!--						zoom: 8-->
<!--					})-->
<!--				});-->
<!--			</script>-->
			<input type="checkbox" id="track-position" name="track" onclick="getLocation()">
			<label for="vehicle1"> Current Location </label><br>
			<p id="result"></p>
			<script>

				var result = document.getElementById("result");

				function getLocation() {
					if (navigator.geolocation) {
						navigator.geolocation.watchPosition(showPosition, null, { enableHighAccuracy: true });

					} else {
						x.innerHTML = "Geolocation is not supported by this browser.";
					}
				}

				function showPosition(position) {
					result.innerHTML = "latitude: " + position.coords.latitude +
						"<br>longitude: " + position.coords.longitude +
						"<br>position accuracy: " + position.coords.accuracy + " [m]" +
						"<br>altitude: " + position.coords.altitude + " [m]" +
						"<br>altitude accuracy: " + position.coords.altitudeAccuracy + " [m]" +
						"<br>heading: " + position.coords.heading + " [degrees]" +
						"<br>speed: " + position.coords.speed + " [m/s]";
				}

			</script>
		</div>
	</div>
</div>
</div>

<!--	<div class="row" id="disappear_div" style="margin-top: 5rem">-->
<!--		<img class='col-lg-4 offset-4 disappear' src="--><?php //echo base_url('assets/images/searching_rader.gif') ?><!--" alt="searching_rader">-->
<!--	</div>-->
<!--	<div class="" id="appear_div" style="visibility: hidden;height: 100%;" >-->
<!--		<div class="row align-items-center" style="height: 100%;margin: 1px">-->
<!--			<div class="col-4" style="height: 100%;padding: 0">-->
<!--				<div class="h-25" style="background-color: red;" >-->
<!--					first panel-->
<!--				</div>-->
<!--				<div class="h-25" style="background-color: green">-->
<!--					.. panel-->
<!--				</div>-->
<!--				<div class="h-25" style="background-color: yellow">-->
<!--					.. panel-->
<!--				</div>-->
<!--				<div class="h-25" style="background-color: blue">-->
<!--					.. panel-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="col-8" style="height: 100%;padding-left: 5px;padding-right: 0">-->
<!--				<div class="h-25 w-75 offset-1  d-flex justify-content-center">-->
<!--					<input type="text" class="form-control"-->
<!--						   placeholder="666 Rd, St.Lucia" name="postcode" disabled="disabled"-->
<!--						   style="border-radius: 15px;margin-top: 10%"-->
<!--					/>-->
<!--				</div>-->
<!--				<div class="h-100 w-100">-->
<!--					<img src="--><?php //echo base_url('assets/images/test_rader_results.jpg') ?><!--" style="width: 95%;">-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->

