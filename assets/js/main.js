window.onload = init;

function init() {
	const map = new ol.Map({
		view: new ol.View({
			center: [17033843.694390804, -3185258.981194314],
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
