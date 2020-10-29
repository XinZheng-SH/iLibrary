<script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.4.3/build/ol.js"></script>
<!--OpenLayers API: https://openlayers.org/-->

<div class="container-fluid">
	<div class="row" style="margin-top: 1px;">
		<div class="col-sm-3" id="side-bar">
			<div class="card">
				<ul class="list-group list-group-flush">
					<li class="list-group-item" style="justify-content: center;padding-bottom: 0">
						<div class="card" style="width: 100%;">
							<div class="card" style="width: 100%;">
								<div id="library-img">
								</div>
								<div class="card-body" style="height: 50px">
									<h5 class="card-title" style="font-size: 1em; font-style: italic; font-weight: bold;margin-top: 1px">
										<span id="library-name"></span>
									</h5>
								</div>
								<ul class="list-group list-group-flush">
									<li class="list-group-item" style="height: 35px">Open Hour:
										<span id="library-hour"></span>
									</li>
									<li class="list-group-item" style="height: 35px">Wifi Available:
										<span id="library-Wifi"></span>
									</li>
									<li class="list-group-item" style="height: 35px">Phone:
										<span id="library-phone"></span>
									</li>
									<li class="list-group-item" style="height: 35px">Email:
										<span id="library-email"></span>
									</li>
								</ul>
								<div class="card-body" style="height: 3rem">
									<a href="<?php echo base_url(''); ?>Books/bookConnect" class="card-link">Popular book</a>
									<!--We simulate the books are stored in the central library-->
									<a href="http://maps.google.co.uk/maps?q=central library" class="card-link">Google Map</a>
								</div>

								<div class="card-body" style="padding: 0;height: 2rem;margin-top: 0">
									<div class="row" style="margin-bottom: 0;margin-top: 4.5rem; width: 100%; height: 2rem;">
										<input placeholder="Here to write your comments" class="form-control" id="true_comment" name="contents" type="text" style="">
									</div>
									<div class="row" style="">
										<button onclick="instant_comment()" type="button" class="btn" style="left:10%;margin-top: 2rem">Comment</button>
									</div>

									<div id="comments-area">

									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-sm-9 container" id="radar-block">
			<div class="mx-auto" id="radar">
				<div id="map" class="map">
					<div id="popup"></div>
				</div>

				<input type="checkbox" id="track-position" name="track" onclick="getLocation()">

				<label for="track-position">Locate to current position</label><br>
				<p id="result"></p>


				<script>
					var latitude;
					var longitude;

					document.getElementById('side-bar').style.display = 'none';

					var result = document.getElementById("result");

					function getLocation() {
						if (navigator.geolocation) {
							navigator.geolocation.watchPosition(showPosition, null, {
								enableHighAccuracy: true
							});

							// refreshMap(latitude,longitude);
						} else {
							x.innerHTML = "Geolocation is not supported by this browser.";
						}
					}

					function showPosition(position) {
						result.innerHTML = "latitude: " + position.coords.latitude +
								"<br>longitude: " + position.coords.longitude +
								"<br>position accuracy: " + position.coords.accuracy + "[m]";
						latitude = position.coords.latitude;
						longitude = position.coords.longitude;
					}
				</script>
				<script>

					var currentTapLibId = '';

					var coor = [17039348.214874785, -3191341.334648482];

					var iconStyle = new ol.style.Style({
						image: new ol.style.Icon({
							anchor: [0.5, 46],
							anchorXUnits: 'fraction',
							anchorYUnits: 'pixels',
							src: 'https://openlayers.org/en/v6.4.3/examples/data/icon.png',
						}),
					});

					var homeStyle = new ol.style.Style({
						image: new ol.style.Icon({
							anchor: [0.5, 46],
							anchorXUnits: 'fraction',
							anchorYUnits: 'pixels',
							src: 'https://img.icons8.com/doodle/48/000000/user-location.png',
						//	user pin icon: https://img.icons8.com/doodle/48/000000/user-location.png
						}),
					});

					var markerArray = [];

					function addMarker(longitude, latitude, id) {
						var newMarker = new ol.Feature({
							geometry: new ol.geom.Point(ol.proj.transform([longitude, latitude], 'EPSG:4326', 'EPSG:3857')),
							name: longitude,
							population: 4000,
							rainfall: 500,
							id: id
						});
						newMarker.setStyle(iconStyle);
						markerArray.push(newMarker);

					}

					var vectorSource = new ol.source.Vector({});

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
						target: 'map'
					});


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

					function addHomeMarker(longitude,latitude){
							var newMarker = new ol.Feature({
								geometry: new ol.geom.Point(ol.proj.transform([longitude, latitude], 'EPSG:4326', 'EPSG:3857')),
							});
							newMarker.setStyle(homeStyle);
							markerArray.push(newMarker);
							console.log(markerArray.length)
					}

					var homeMarkerAdded = false;
					function showPosition(position) {
						var currentLatitude = position.coords.latitude;
						var currentLongitude = position.coords.longitude;
						if (!homeMarkerAdded){
							console.log("jia home icon");
						addHomeMarker(currentLongitude,currentLatitude);
						homeMarkerAdded = true;
						finalRefersh();}
						refreshMap(currentLongitude, currentLatitude)
					}

					var degrees2meters = function(lon, lat) {
						var x = lon * 20037508.34 / 180;
						var y = Math.log(Math.tan((90 + lat) * Math.PI / 360)) / (Math.PI / 180);
						y = y * 20037508.34 / 180;
						return [x, y]
					};

					function refreshMap(longitude, latitude) {

						coor = degrees2meters(longitude, latitude);
						console.log(coor);
						myMap.getView().setCenter(coor);
					}

					$("#track-position").click(() => getLocation());

					function finalRefersh() {
						$("#map").empty();
						// vectorSource = new ol.source.Vector({});
						vectorSource = new ol.source.Vector({});

						// vectorSource.addFeatures(markerArray);
						vectorSource.addFeatures(markerArray);
						vectorLayer = new ol.layer.Vector({
							source: vectorSource,
						});

						myMap = new ol.Map({
							view: new ol.View({
								center: coor,
								zoom: 13,
								maxZoom: 15,
								minZoom: 12,
								rotation: 0.5,
							}),
							layers: [rasterLayer, vectorLayer],
							target: 'map'
						});

						var element = document.getElementById('popup');

						var popup = new ol.Overlay({
							element: element,
							positioning: 'bottom-center',
							stopEvent: false,
							offset: [0, -50],
						});
						// display popup on click
						// BUG HERE
						myMap.on('click', function(evt) {
							var feature = myMap.forEachFeatureAtPixel(evt.pixel, function(feature) {
								return feature;
							});
							if (feature) {
								var coordinates = feature.getGeometry().getCoordinates();
								popup.setPosition(coordinates);

								// display js element
								document.getElementById('side-bar').style.display = 'block';

								var icon_id = feature.get('id');
								currentTapLibId = icon_id;
								// console.log(icon_id);
								$(element).popover('show');
								library_detail(icon_id);
								comment_detail(icon_id);
							} else {
								$(element).popover('dispose');
							}
						});

						// change mouse cursor when over marker
						myMap.on('pointermove', function(e) {
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
				<!--Use the array passed from Controller as "latitude" and "longitude"-->
				<?php foreach ($position as $row) { ?>

					<?php
					$Latitude = $row["Latitude"]; ?>

					<?php
					$Longitude = $row["Longitude"];
					$id = $row["id"];
					?>
					<script>
						addMarker(<?php echo $Longitude ?>, <?php echo $Latitude ?>, <?php echo $id ?>);
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
							url: '<?php echo base_url() ?>Radar/getData',
							method: 'post',
							data: {
								icon_id: icon_id
							},
							dataType: 'json',
							success: function(response) {
								$('#library-name').text(response.Branch_Name);
								$('#library-hour').text(response.Opening_Hours_Wednesday);
								$('#library-Wifi').text(response.WiFi_Availability);
								$('#library-phone').text(response.Phone);
								$('#library-email').text(response.Email);
								// All libraries images are retrieved from Brisbane City Council:
								// https://www.brisbane.qld.gov.au/things-to-see-and-do/council-venues-and-precincts/libraries
								$('#library-img').html('<img class="card-img-top" src="<?php echo base_url() ?>/assets/images/libraryImg/' + response.Branch_Name + '.jpg" alt="" class="responsive-img" style="height: 132px; width: 100%;">');

								// Set Cookie with branchName
								document.cookie = "branchName="+ response.Branch_Name+"; expires=Thu, 10 Dec 2020 12:00:00 UTC; path=/"
								// value of Branch Name
								// return response.Branch_Name;
								document.cookie = "libraryID="+ icon_id +"; expires=Thu, 10 Dec 2020 12:00:00 UTC; path=/"
							}
						})
					}
					// call together with library_detail(), and will retrieve all comments
					function comment_detail(icon_id) {
						console.log(icon_id);
						$.ajax({
							url: '<?php echo base_url() ?>Radar/getComment',
							method: 'post',
							data: {
								icon_id: icon_id
							},
							dataType: 'json',
							success: function(response) {
								// use foreach to call response[]
								console.log("len:" + response.length);
								var len = response.length;
								$('#comments-area').html('<div class="comment" style="height: 10px; width: 100%;"></div>');
								var baseIndex = len > 4 ? len-3 : 0;
								for (var i = (len-1); i > baseIndex; i--) {
									const word = response[i].words;
									// console.log("balabla"+word);
									$('.comment').append('<h6>' + "User: " + '<i>' + response[i].username + '</i></h6>')
									$('.comment').append("comments: " + word)

								}
							}
						})
					}
					// use ajax to call request once the user clicks on "Comment" button, will return latest comment
					function instant_comment() {
						var inputVal = document.getElementById("true_comment").value;
						$.ajax({
							url: '<?php echo base_url('Radar/insert_comment') ?>',
							method: 'post',
							data: {
								inputVal: inputVal
							},
							dataType: 'json',
							success: function(response) {
								console.log(inputVal);
								console.log(response);
								comment_detail(currentTapLibId);
							}

						})
					}
					// network 500 mostly caused by "no data retrieved from database" because no login status
					// so, we set the error as an alert to remind the user, he needs to login to use the feature
					$(function() {
						$.ajaxSetup({
							error: function(jqXHR, exception) {
								if (jqXHR.status === 500) {
									alert('You need to login to comment');
								}
							}
						});
					});
				</script>
			</div>
		</div>
	</div>
</div>
