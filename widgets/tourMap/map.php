<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<?php
			isset($_GET['apikey']) ? $apikey = htmlspecialchars($_GET['apikey']) : $apikey = '';
			
			isset($_GET['width']) ? $width = intval($_GET['width']) : $width = '200';
			
			isset($_GET['height']) ? $height = intval($_GET['height']) : $height = '200';
			
			isset($_GET['zoomlevel']) ? $zoomlevel = intval($_GET['zoomlevel']) : $latlng = '5';
			
			if((int)$zoomlevel > 18)
				$zoomlevel = 18;
			
			isset($_GET['latlng']) ? $latlng = htmlspecialchars($_GET['latlng']) : $latlng = '0,0';
		?>
		
		<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=<?php echo $apikey; ?>"></script>
		
		<script type="text/javascript">
			
			// Call this function when the page has been loaded
			function initialize() {			

				var map = new google.maps.Map(
			        document.getElementById('map'), {
			          center: new google.maps.LatLng(<?php echo $latlng; ?>),
			          zoom: <?php echo $zoomlevel; ?>
			      });

			      var marker = new google.maps.Marker({
			      		icon: 'images/marker-dot.png',
			            position: new google.maps.LatLng(<?php echo $latlng; ?>),
			            clickable: false,
			            map: map
			      });
			}
						  				  
			google.maps.event.addDomListener(window, 'load', initialize);		    		  
		</script>
		
		<style type="text/css"> 
			body {
				margin: 0;
			}
			#map { 
		 		width: <?php echo $width; ?>px; height: <?php echo $height; ?>px; margin: 0; padding: 0;
		 	} 
		</style> 
	</head>
	<body>
		<div id="map"></div>
	</body>
</html>