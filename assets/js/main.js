var coor = [17039348.214874785,-3191341.334648482]

window.onload = init;


var degrees2meters = function(lon,lat) {
	var x = lon * 20037508.34 / 180;
	var y = Math.log(Math.tan((90 + lat) * Math.PI / 360)) / (Math.PI / 180);
	y = y * 20037508.34 / 180;
	return [x, y]
}

function refreshMap(longtitude,latitude){
	coor = degrees2meters(longtitude,latitude);
	console.log(coor);
	$("#map").empty();
	init();
}

function init() {
	const map = new ol.Map({
		view: new ol.View({
			center: coor,
			zoom: 13,
			maxZoom: 15,
			minZoom: 12,
			rotation: 0.5,
		}),
		layers: [
			new ol.layer.Tile({
				source: new ol.source.OSM()
			})
		],
		target: 'map'
	});

	map.on('click', function(e){
		console.log(e.coordinate);
	})
}

function setCenter() {

}
