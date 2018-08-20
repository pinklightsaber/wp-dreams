<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'header_menu' ) ); ?>
<?php } ?>



<footer>	
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
		</div>
	</div>
</footer>
			
			
			



		


		
	



	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- 	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5Tsudko0x4s4krnsetBUwFF6oyzWg_7w&libraries=places&callback=initMap" async defer></script>
 -->

<script>
	var map, current;
	var types = document.querySelectorAll('img.tipo');
	var type = [];
	var radio = 2000;

	types.forEach(function(currentValue, index, arr) {
		type.push(currentValue.id);
	})

	function initMap () {
		map = new google.maps.Map(document.getElementById('map'), {
			center: current,
			zoom: 15 
		});

		var service = new google.maps.places.PlacesService(map);
		service.nearbySearch({
			location: current,
			radius: radio,
			type: [type]
		}, callback);
	};

		function callback(results, status) {
		if (status === google.maps.places.PlacesServiceStatus.OK) {
		for (var i = 0; i < results.length; i++) {
		createMarker(results[i]);  

		}
		console.log(results)

		}
};
</script>
<?php wp_footer() ?>
</body>
</html>