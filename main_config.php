<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Write your description">
<meta name="keywords" content="Write your keywords">
<meta name="author" content="RBwebsites.pl">
<title>Write website tittle</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Bevan|Caveat:700|Lovers+Quarrel&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Niconne&display=swap" rel="stylesheet">
	
<!--OpenLayersMap-->
<script src="OpenLayers-2.13.1/OpenLayers.js"></script>
<script>
	function init() {
        map = new OpenLayers.Map("map");
        var mapnik         = new OpenLayers.Layer.OSM();
        var fromProjection = new OpenLayers.Projection("EPSG:4326");   // Transform from WGS 1984
        var toProjection   = new OpenLayers.Projection("EPSG:900913"); // to Spherical Mercator Projection
        var position       = new OpenLayers.LonLat(22.058200,50.568249).transform( fromProjection, toProjection);   // wspólrzędne lokalizacji
        var zoom           = 16; 

			map.addLayer(mapnik);
		
			var markers = new OpenLayers.Layer.Markers( "Markers" );		//oznaczenie lokalizacji markerem na mapie
			map.addLayer(markers);
			markers.addMarker(new OpenLayers.Marker(position));
	
			map.setCenter(position, zoom );
	}
</script>

<!-- Smooth scrolling effect -->
<script> 
	$(document).ready(function(){
	  // Add smooth scrolling to all links
	  $(".nav-link").on('click', function(event) {

		// Make sure this.hash has a value before overriding default behavior
		if (this.hash !== "") {
		  // Prevent default anchor click behavior
		  event.preventDefault();

		  // Store hash
		  var hash = this.hash;

		  // Using jQuery's animate() method to add smooth page scroll
		  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
		  $('html, body').animate({
			scrollTop: $(hash).offset().top
		  }, 800, function(){
	   
			// Add hash (#) to URL when done scrolling (default click behavior)
			window.location.hash = hash;
		  });
		} // End if
	  });
	});
</script>

<!--Scroll to top function -->
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("go-to-top").style.display = "block";
  } else {
    document.getElementById("go-to-top").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

<!--Photos downloaded from http://www.Unsplash.com -->
</head>