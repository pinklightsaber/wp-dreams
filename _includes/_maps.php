
<section class="radio">

	<div class="container">
		<div class="row">
		<label class="col-md-4">Distancia en metros</label>
		<select class="custom-select col-md-8" id="radio">
			<option value="500">500</option>
			<option value="1000">1000</option>
			<option value="2000">2000</option>
			<option value="5000">5000</option>
		</select>
		</div>
	</div>
</section>

<section>
	<div class="row sticky">
		
		<div class="tabs">
			<ul class="nav nav-pills">
  			<li class="nav-item pillmapa">
    			<a class="nav-link" data-toggle="tab" href="#mapa">Mapa</a>
  			</li>
  			<li class="nav-item pilldetalle">
    			<a class="nav-link" data-toggle="tab" href="#detalle">Detalle</a>
  			</li> 
  		</ul>
		</div>

		
	</div>
<!-- sdf -->
  <div class="tab-content">
  	<div class="tab-pane active" id="mapa">
  				<img src="<?php echo get_bloginfo( 'template_directory' ); ?>../assets/images/whimsy-title.png"/>

			<h2>Mapa</h2>
			<div id="map">

			</div>
					<img src="<?php echo get_bloginfo( 'template_directory' ); ?>../assets/images/whimsy-title.png"/>

	</div>
  <div class="tab-pane fade" id="detalle">
			<img src="<?php echo get_bloginfo( 'template_directory' ); ?>../assets/images/whimsy-title.png">
			<div class="row">
				<div class="col-md-6">
					<table class="table">
						<tr>
							<th scope="row">Nombre:</th>
							<td id="name"></td>
						</tr>
						<tr>
							<th scope="row">Dirección</th>
							<td id="address"></td>
						</tr>
						<tr>
							<th scope="row">Abierto:</th>
							<td id="open_close"></td>
						</tr>
						<tr>
							<th scope="row">Opiniones:</th>
							<td id="rating"></td>
						</tr>
						<tr>
							<th scope="row">Precio:</th>
							<td id="price"></td>
						</tr>
						<tr>
							<th scope="row">Sitio:</th>
							<td><p id="website"></p></td>
						</tr>
						<tr>
							<th scope="row">Fono:</th>
							<td id="fono"></td>
						</tr>
					</table>	
				</div>
				<div class="col-md-6 element">
					
					<div id="img-container" class="flexslider">	</div>
					<div><label>Imagenes del lugar</label></div>
				</div>
			<img src="<?php echo get_bloginfo( 'template_directory' ); ?>../assets/images/whimsy-title.png">
		</div>
  </div>	
</section>
