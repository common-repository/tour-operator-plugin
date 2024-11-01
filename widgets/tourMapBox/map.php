<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<?php
			isset($_GET['apikey']) ? $apikey = htmlspecialchars($_GET['apikey']) : $apikey = '';
			!empty($_GET['style']) ? $style = htmlspecialchars($_GET['style']) : $style = 'mapbox://styles/palisis/ckqkw2dlf2jsj18k8575ws7so';
			!empty($_GET['zoomlevel']) ? $zoomlevel = intval($_GET['zoomlevel']) : $latlng = '5';
			if((int)$zoomlevel > 18)
				$zoomlevel = 18;
			!empty($_GET['latlng']) ? $latlng = htmlspecialchars($_GET['latlng']) : $latlng = '0,0';
		?>

		<link href="https://api.mapbox.com/mapbox-gl-js/v2.3.0/mapbox-gl.css" rel="stylesheet">
		<script src="https://api.mapbox.com/mapbox-gl-js/v2.3.0/mapbox-gl.js"></script>

		<script type="text/javascript">

			function initialize() {
			}
		</script>

		<style type="text/css">
		body { margin: 0; padding: 0; }
		#map { position: absolute; top: 0; bottom: 0; width: 100%; }
		</style>
	</head>
	<body>
		<div id="map"></div>
		<script>
			mapboxgl.accessToken = '<?php echo $apikey; ?>';
			var map = new mapboxgl.Map({
				container: 'map',
				style: '<?php echo $style; ?>',
				center: [<?php echo $latlng; ?>],
				zoom: <?php echo $zoomlevel; ?>
			});
			var marker = new mapboxgl.Marker({ "color": window.getComputedStyle(window.parent.document.documentElement).getPropertyValue('--main') })
				.setLngLat([<?php echo $latlng; ?>])
				.addTo(map);
				var nav = new mapboxgl.NavigationControl();
				map.addControl(nav, 'top-left');
		</script>
	</body>
</html>
