<?php
// Template Name: Produtos 
get_header();
?>

<style>
		.produtos_icone {
			padding: 70px 0;
		}
		@media only screen and (max-width: 787px) {
			.produtos_item {
				margin-top: 0px;
			}
		}
		@media only screen and (min-width: 788px) and (max-width: 979px) {
			.produtos_icone {
			padding: 41px 0;
			}
		}
</style>

<?php if ( have_posts () ) : while ( have_posts() ) : the_post(); ?>

<?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>
<!-- o "." (ponto) no php significa somar algo. -->

<!-- WP Query -->
<?php
	$args = array(
		'post_type' => 'produtos',
		'order' => 'ASC'
	);
	$the_query = new WP_Query ($args);
?>
<?php if ($the_query -> have_posts()) : while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
	
	<section class="container produtos_item fadeInDown" data-anime="1200">
		<a href="<?php the_permalink(); ?>">
			<div class="grid-11">
				<img src="<?php the_field('foto_produto1'); ?>" alt="Produtos <?php the_title(); ?> Bikcraft">
				<h2><?php the_title(); ?></h2>
			</div>
			<div class="grid-5 produtos_icone">
				<img src="<?php the_field('icone_produto'); ?>" alt="ícone <?php the_title(); ?> Bikcraft">
			</div>
		</a>
	</section>
<?php endwhile; else : endif; ?>

<!-- Reset do Loop, para não bugar os outros Loops. -->
<?php wp_reset_query(); wp_reset_postdata(); ?>

<!-- WP Query - Final -->


<?php include(TEMPLATEPATH . "/inc/produtos_orcamento.php"); ?>

<?php endwhile; else: endif; ?>
<!--Início Footer-->
<?php get_footer(); ?>