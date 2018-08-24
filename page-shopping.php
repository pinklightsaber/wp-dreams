<?php get_header() ?>
<?php the_post() ?>
	
	<?php the_post_thumbnail() ?>


	
	<section id="header" class="header-shop">
			<?php get_template_part('_includes/titulo') ?>
	</section>


	<div class="alert alert-danger collapse" role="alert" id="al">
  <strong>Oh!</strong> <a href="#" class="alert-link">Permite la localización</a> 
	</div>
<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<img class="tipo" id="shopping_mall" src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/shopping_mall.jpg">
			</div>
			<div class="col-md-5">
				<h3><?php the_title() ?></h3>
				<p id="cont">Buscar lugares donde adquirir víveres como un <a href="supermarket.html">supermercado</a>, o una variedad mayor como un <a href="shopping_mall.html">centro comercial</a>entre otro tipo de <a href="store.html">tiendas</a></p>	
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="img-all img6" id="supermarket">
					<a href="#mapa">SUPER</a>
					<p>Revisa cerca tuyo</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="img-all img4" id="shopping_mall">
					<a href="#mapa">CENTRO</a>
					<p>Revisa super cerca tuyo</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="img-all img7" id="store">
					<a href="#mapa">TIENDAS</a>
					<p>Revisa centros cerca tuyo</p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('_includes/_maps') ?>

<?php get_footer() ?>