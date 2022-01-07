<?php
// Template Name: Single Produtos 
get_header();
?>

<style>
	
		.produtos_item {
			margin-top: 80px;
		}
		
		@media only screen and (max-width: 787px) {
			.produtos_item {
				margin-top: 0px;
			}
		}
		.produtos_icone {
			padding: 70px 0;
		}
		@media only screen and (min-width: 788px) and (max-width: 979px) {
		.produtos_icone {
		padding: 41px 0;
		}
		}
</style>

<?php if ( have_posts () ) : while ( have_posts() ) : the_post(); ?>


<!--Fecha Introdução -->
<!--Abre produtos -->
<section class="container produtos_item fadeInDown" data-anime="1200">
	<div class="grid-11">
		<img src="<?php the_field('foto_produto1'); ?>" alt="Produtos <?php the_title(); ?> Bikcraft">
		<h2><?php the_title(); ?></h2>
	</div>
	<div class="grid-5 produtos_icone">
		<img src="<?php the_field('icone_produto'); ?>" alt="ícone <?php the_title(); ?> Bikcraft">
	</div>
	<div class="grid-8">
		<img src="<?php the_field('foto_produto2'); ?>" alt="Produtos <?php the_title(); ?> Bikcraft">
	</div>
	<div class="grid-8 produtos_info">
		<?php the_content(); ?>
	</div>
</section>


<?php include(TEMPLATEPATH . "/inc/produtos_orcamento.php"); ?>


<?php endwhile; else: endif; ?>
<!--Início Footer-->
<?php get_footer(); ?>