<button onclick="topFunction()" id="pageup" title="Go to top"><i class="fas fa-arrow-up"></i></button>


<script src="js/jquery.min.js"></script>
<script src="js/datepicker.min.js"></script>
<script src="js/i18n/datepicker.en.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/OwlCarousel/owl.carousel.js"></script>
<script src="vendor/semantic/semantic.min.js"></script>
<script src="js/jquery.range-min.js"></script>
<script src="js/custom1.js"></script>

<script src='../../../../unpkg.com/es6-promise%404.2.4/dist/es6-promise.auto.min.js'></script>
<script src="../../../../unpkg.com/%40mapbox/mapbox-sdk%400.11.0/umd/mapbox-sdk.min.js"></script>
<script>
			mapboxgl.accessToken = 'pk.eyJ1IjoiZ2FtYm9sIiwiYSI6ImNqdm03bzYydDE2cW00YWwyeHprd3FqamcifQ.HBy4R4sRcXgbgn2OteqFkQ';
			var mapboxClient = mapboxSdk({ accessToken: mapboxgl.accessToken });
			mapboxClient.geocoding.forwardGeocode({
			query: 'Ludhiana, India',
			autocomplete: false,
			limit: 1
			})
			.send()
			.then(function (response) {
			if (response && response.body && response.body.features && response.body.features.length) {
			var feature = response.body.features[0];
		 
			var map = new mapboxgl.Map({
			container: 'map',
			style: 'mapbox://styles/mapbox/streets-v11',
			center: [75.8429,30.9042],
			zoom: 10
			});				
  
			new mapboxgl.Marker()
			.setLngLat(feature.center)
			.addTo(map);
			}
			
			// Add zoom and rotation controls to the map.
			map.addControl(new mapboxgl.NavigationControl());
			});						
		</script>
<script>
			window.oncontextmenu = function () {
				return false;
			}
			$(document).keydown(function (event) {
				if (event.keyCode == 123) {
					return false;
				}
				else if ((event.ctrlKey && event.shiftKey && event.keyCode == 73) || (event.ctrlKey && event.shiftKey && event.keyCode == 74)) {
					return false;
				}
			});
		</script>


	