<script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.4.3/build/ol.js"></script>
<!--<script type="text/javascript">-->
<!--	setTimeout(function (){-->
<!--		$('#disappear_div').remove();-->
<!--		$('#appear_div').css("visibility", "visible");-->
<!--	},3000)-->
<!--</script>-->

<div class="container-fluid">
<div class="row" style="margin-top: 5em;">
	<div class="col-sm-3" id="side-bar" >
		<div class="card">
			<div class="card-header">1 library found</div>
			<ul class="list-group list-group-flush" >
				<li class="list-group-item" style="justify-content: center;">
					<div class="card" style="width: 100%;">
						<div class="card" style="width: 100%;">
							<div id="library-img">
							</div>
							<div class="card-body">
								<h5 class="card-title" style="font-size: 1em; font-style: italic; font-weight: bold;">
									<span id="library-name"></span>
								</h5>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item">Open Hour:
									<span id="library-hour"></span>
								</li>
								<li class="list-group-item">Wifi Available:
									<span id="library-Wifi"></span>
								</li>
								<li class="list-group-item">Phone:
									<span id="library-phone"></span>
								</li>
								<li class="list-group-item">Email:
									<span id="library-email"></span>
								</li>
							</ul>
							<div class="card-body">
								<a href="<?php echo base_url('Books/view') ?>" class="card-link">Popular book</a>
								<a href="http://maps.google.co.uk/maps?q=central library" class="card-link">Google Map</a>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="col-sm-9 container" id="radar-block">
		Results:
		<hr/>
		<div class="mx-auto" id="radar">
			<div id="map" class="map">
				<div id="popup"></div>
			</div>

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
			<label for="track-position">Locate to current position</label><br>
			<p id="result"></p>
<!--			<script src="--><?php //echo base_url('assets/js/main.js') ?><!--" type="module"></script>-->


			<script>
				// testJS();
				// init();
				var latitude;
				var longitude;

				// hide element
				document.getElementById('side-bar').style.display='none';

				var result = document.getElementById("result");
				function getLocation() {
					if (navigator.geolocation) {
						navigator.geolocation.watchPosition(showPosition, null, { enableHighAccuracy: true });

						// refreshMap(latitude,longitude);
					} else {
						x.innerHTML = "Geolocation is not supported by this browser.";
					}
				}



				function showPosition(position) {
					result.innerHTML = "latitude: " + position.coords.latitude +
							"<br>longitude: " + position.coords.longitude +
							"<br>position accuracy: " + position.coords.accuracy + "[m]" ;
							// "<br>altitude: " + position.coords.altitude + " [m]" +
							// "<br>altitude accuracy: " + position.coords.altitudeAccuracy + " [m]" +
							// "<br>heading: " + position.coords.heading + " [degrees]" +
							// "<br>speed: " + position.coords.speed + " [m/s]";
					latitude = position.coords.latitude;
					longitude = position.coords.longitude;
				}

			</script>
			<script>
				var coor = [17039348.214874785,-3191341.334648482];

				//UQ
				var iconFeature = new ol.Feature({
					geometry: new ol.geom.Point(ol.proj.transform([153,-27.5], 'EPSG:4326', 'EPSG:3857')),
					name: 'UQ',
					population: 4000,
					rainfall: 500,
				});

				var hospital = new ol.Feature({
					geometry: new ol.geom.Point(ol.proj.transform([153.0177771,-27.4965477], 'EPSG:4326', 'EPSG:3857')),
					name: 'UUQ',
					population: 4000,
					rainfall: 500,
				});

				var gabba = new ol.Feature({
					geometry: new ol.geom.Point(ol.proj.transform([153.028849,-27.4928212], 'EPSG:4326', 'EPSG:3857')),
					name: 'Gabba',
					population: 4000,
					rainfall: 500,
				});

				var toowong = new ol.Feature({
					geometry: new ol.geom.Point(ol.proj.transform([152.9872332,-27.4911051], 'EPSG:4326', 'EPSG:3857')),
					name: 'TooWong',
					population: 4000,
					rainfall: 500,
				});

				var iconStyle = new ol.style.Style({
					image: new ol.style.Icon({
						anchor: [0.5, 46],
						anchorXUnits: 'fraction',
						anchorYUnits: 'pixels',
						src: 'https://openlayers.org/en/v6.4.3/examples/data/icon.png',
					}),
				});

				var markerArray = [];

				function addMarker(longitude,latitude,id){
					var newMarker = new ol.Feature({
						geometry: new ol.geom.Point(ol.proj.transform([longitude,latitude], 'EPSG:4326', 'EPSG:3857')),
						name: longitude,
						population: 4000,
						rainfall: 500,
						id:id
					});
					newMarker.setStyle(iconStyle);
					markerArray.push(newMarker);

				}

				iconFeature.setStyle(iconStyle);
				hospital.setStyle(iconStyle);
				gabba.setStyle(iconStyle);
				toowong.setStyle(iconStyle);

				// markerArray.push(iconFeature);
				// markerArray.push(hospital);
				// markerArray.push(gabba);
				// markerArray.push(toowong);
				console.log("markerArray"+ markerArray)

				var vectorSource = new ol.source.Vector({
				});

				// vectorSource.addFeatures(markerArray);

				var vectorLayer = new ol.layer.Vector({
					source: vectorSource,
				});

				var rasterLayer = new ol.layer.Tile({
					source: new ol.source.OSM()
				});

				let myMap = new ol.Map({
					view: new ol.View({
						center: coor,
						zoom: 13,
						maxZoom: 15,
						minZoom: 12,
						rotation: 0.5,
					}),
					layers: [rasterLayer, vectorLayer],
					target: 'map'});


				function init() {
					map = myMap;
				}

				function getLocation() {
					if (navigator.geolocation) {
						var out = navigator.geolocation.getCurrentPosition(showPosition);
					} else {
						x.innerHTML = "Geolocation is not supported by this browser.";
					}
				}

				function showPosition(position) {
					var currentLatitude = position.coords.latitude;
					var currentLongitude = position.coords.longitude;
					refreshMap(currentLongitude,currentLatitude)
				}

				var degrees2meters = function(lon,lat) {
					var x = lon * 20037508.34 / 180;
					var y = Math.log(Math.tan((90 + lat) * Math.PI / 360)) / (Math.PI / 180);
					y = y * 20037508.34 / 180;
					return [x, y]
				};

				function refreshMap(longitude,latitude){

					coor = degrees2meters(longitude,latitude);
					console.log(coor);
					myMap.getView().setCenter(coor);
				}

				$("#track-position").click(()=>getLocation())

				function finalRefersh(){
					$("#map").empty();
					vectorSource.addFeatures(markerArray);
					myMap = new ol.Map({
						view: new ol.View({
							center: coor,
							zoom: 13,
							maxZoom: 15,
							minZoom: 12,
							rotation: 0.5,
						}),
						layers: [rasterLayer, vectorLayer],
						target: 'map'});

					var element = document.getElementById('popup');

					var popup = new ol.Overlay({
						element: element,
						positioning: 'bottom-center',
						stopEvent: false,
						offset: [0, -50],
					});
					// display popup on click
					// BUG HERE
					myMap.on('click', function (evt) {
						var feature = myMap.forEachFeatureAtPixel(evt.pixel, function (feature) {
							return feature;
						});
						if (feature) {
							var coordinates = feature.getGeometry().getCoordinates();
							popup.setPosition(coordinates);

							// display js element
							document.getElementById('side-bar').style.display='block';

							var icon_id = feature.get('id');
							// console.log(icon_id);
							$(element).popover('show');
							library_detail(icon_id);
						} else {
							$(element).popover('dispose');
						}
					});

					// change mouse cursor when over marker
					myMap.on('pointermove', function (e) {
						if (e.dragging) {
							$(element).popover('dispose');
							return;
						}
						var pixel = myMap.getEventPixel(e.originalEvent);
						var hit = myMap.hasFeatureAtPixel(pixel);
						// myMap.getTarget().style.cursor = hit ? 'pointer' : '';
						document.getElementById(myMap.getTarget()).style.cursor = hit ? 'pointer' : '';
					});
					myMap.addOverlay(popup);
				}
			</script>

			<?php foreach($position as $row) {?>

				<?php
				$Latitude = $row["Latitude"]; ?>

				<?php
				$Longitude = $row["Longitude"];
				$id = $row["id"];
				?>
				<script>
					//console.log((<?php //echo $Latitude ?>//));
					addMarker(<?php echo $Longitude ?>,<?php echo $Latitude ?>,<?php echo $id ?>);
				</script>

			<?php } ?>
			<script>

				finalRefersh();
			</script>
			<script type="text/javascript">
				// ajax call data from database for library detailed information
				function library_detail(icon_id) {
					console.log(icon_id);
					$.ajax({
						url: '<?php echo base_url()?>Radar/getData',
						method: 'post',
						data: {icon_id: icon_id},
						dataType: 'json',
						success: function (response) {
							$('#library-name').text(response.Branch_Name);
							$('#library-hour').text(response.Opening_Hours_Wednesday);
							$('#library-Wifi').text(response.WiFi_Availability);
							$('#library-phone').text(response.Phone);
							$('#library-email').text(response.Email);

							$('#library-img').html('<img class="card-img-top" src="<?php echo base_url() ?>/assets/images/libraryImg/' + response.Branch_Name + '.jpg" alt="" class="responsive-img" style="height: 132px; width: 132px;">');
							// value of Branch Name
							return response.Branch_Name;
						}
					})
				}
			</script>
		</div>
	</div>
</div>
</div>

