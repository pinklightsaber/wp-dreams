<?php get_header() ?>
<?php the_post() ?>
	
	<?php the_post_thumbnail() ?>
	<?php the_title() ?>




<section id="header" class="header-food">

</section>

<div class="alert alert-danger collapse" role="alert" id="al">
  <strong>Oh!</strong> <a href="#" class="alert-link">Permite la localización. Recarga la ágina, por favor</a> 
</div>

<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<img class="tipo" src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/cafe.jpg" id="cafe">
			</div>
			<div class="col-md-5">
				<h3>Food</h3>
				<p id="cont">Buscar lugares donde donde se sirven aperitivos y comidas, como un <a href="cafe.html">restaurant</a>, también platos combinados y no comida caliente propiamente dicha tales como un <a href="restaurant.html">café</a> o un establecimiento de bebidas alcoholicas tipo <a href="bar.html">bar</a> .</p>	
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-12">
				<div class="img-all img1" id="cafe">
					<a href="#mapa">CAFE</a>
					<p>Revisa cafes cerca tuyo</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="img-all img2" id="restaurant">
					<a href="#mapa">REST</a>
					<p>Revisa super cerca tuyo</p>
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="img-all img5" id="bar">
					<a href="#mapa">BAR</a>
					<p>Revisa centros cerca tuyo</p>
				</div>
			</div>
		</div>
	</div>
</section>
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
			<h2>Mapa</h2>
			<div class="container">
				<div class="col-sm-12">
			<div id="map">
				</div>
				</div>
			</div>
	</div>
  <div class="tab-pane fade" id="detalle">
  	<div class="container">	
			<div class="row">
				<div class="col-md-6 element">
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
					<label>Imagenes del lugar</label>
					<div id="img-container" class="flexslider">	</div>
				</div>
			</div>
		</div>
  </div>	
</section>


<?php get_footer() ?>