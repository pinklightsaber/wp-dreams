<?php get_header() ?>
<?php the_post() ?>
	
	<?php the_post_thumbnail() ?>



	<section id="header" class="header-ent">
	<?php get_template_part('_includes/titulo') ?>
	</section>

	<div class="alert alert-danger collapse" role="alert" id="al">
  <strong>Oh!</strong> <a href="#" class="alert-link">Permite la localización</a> 
	</div>


<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
	<img class="tipo" id="amusement_park" src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/arbol.jpg">
			</div>
			<div class="col-md-5">
				<h3><?php the_title() ?></h3>
				<p id="cont">Buscar lugares de entretención tales como <a href="park.html">parques</a>,  <a href="night_club.html">nocturnos</a>, <a href="museum.html">museos</a>,  <a href="bar.html">etc</a></p>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="img-all img3" id="park">
					<a href="#mapa">PARQUES</a>
					<p>Revisa cerca tuyo</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="img-all img2" id="night_club">
					<a href="#mapa">CLUBES</a>
					<p>Revisa cerca tuyo</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="img-all img8" id="museum">
					<a href="#mapa">MUSEO</a>
					<p>Revisa cerca tuyo</p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('_includes/_maps') ?>


<?php get_footer() ?>