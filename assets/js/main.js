var coor = [17039348.214874785,-3191341.334648482]
//
// window.onload = init;

//
// function init() {
// 	const map = new ol.Map({
// 		view: new ol.View({
// 			center: coor,
// 			zoom: 13,
// 			maxZoom: 15,
// 			minZoom: 12,
// 			rotation: 0.5,
// 		}),
// 		layers: [
// 			new ol.layer.Tile({
// 				source: new ol.source.OSM()
// 			})
// 		],
// 		target: 'map'
// 	});
//
// 	map.on('click', function(e){
// 		console.log(e.coordinate);
// 	})
// }
//
// function setCenter() {
//
// }

//UQ
var iconFeature = new ol.Feature({
	geometry: new ol.geom.Point(ol.proj.transform([153,-27.5], 'EPSG:4326', 'EPSG:3857')),
	name: 'UQ',
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


iconFeature.setStyle(iconStyle);
gabba.setStyle(iconStyle);
toowong.setStyle(iconStyle);

var vectorSource = new ol.source.Vector({
});

vectorSource.addFeatures([iconFeature,gabba,toowong,library]);

var vectorLayer = new ol.layer.Vector({
	source: vectorSource,
});

var rasterLayer = new ol.layer.Tile({
	source: new ol.source.OSM()
});

const myMap = new ol.Map({
	view: new ol.View({
		center: coor,
		zoom: 13,
		maxZoom: 15,
		minZoom: 12,
		rotation: 0.5,
	}),
	layers: [rasterLayer, vectorLayer],
	target: 'map'})


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
	// $("#map").empty();
	// init();
	myMap.getView().setCenter(coor);
}

$("#track-position").click(()=>getLocation())

var element = document.getElementById('popup');

var popup = new ol.Overlay({
	element: element,
	positioning: 'bottom-center',
	stopEvent: false,
	offset: [0, -50],
});

myMap.addOverlay(popup);

// display popup on click
//BUG HERE
// myMap.on('click', function (evt) {
// 	var feature = myMap.forEachFeatureAtPixel(evt.pixel, function (feature) {
// 		return feature;
// 	});
// 	// alert(feature.getGeometry().getCoordinates())
// 	if (feature) {
// 		var coordinates = feature.getGeometry().getCoordinates();
// 		popup.setPosition(coordinates);
// 		$(element).popover({
// 			placement: 'top',
// 			html: true,
// 			// content: "fuck you",
// 		});
// 		$(element).data().setContent("fuckyou");
// 		$(element).popover("show")}
// 	 else {
// 		$(element).popover('dispose');
// 	}


// });

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


