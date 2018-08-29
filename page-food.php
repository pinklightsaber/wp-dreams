<?php get_header() ?>
<?php the_post() ?>
	
	<?php the_post_thumbnail() ?>
	




<section id="header_" class="header-food">
	<?php get_template_part('_includes/titulo') ?>
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
				<h3><?php the_title() ?></h3>
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
<?php get_template_part('_includes/_maps') ?>

<?php get_footer() ?>