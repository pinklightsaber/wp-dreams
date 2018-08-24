<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'header_menu' ) ); ?>
<?php } ?>



<footer>	
	<div class="container">
		<div class="row">
			<div class="col-md-4">by  me</div>
			<div class="col-md-4">Hecho para proyecto final en Desafio Latam </div>
			<div class="col-md-4"> :3 </div>
		</div>
	</div>
</footer>
			
			
			



		


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