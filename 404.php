<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Elabora
 * @since Elabora 2016
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main bg-cinza" role="main">
			<section class="error-404 not-found container">
			<div class="col-md-9">
				<header class="page-header">
					<h1 class="page-title">Desculpe o transtorno a sua página não foi encontrada...</h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'Que tal tentar uma busca?', 'twentysixteen' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div>

		<nav class="col-md-3">
			<?php get_sidebar(); ?>
		</nav>
			</section><!-- .error-404 -->
		
		</main><!-- .site-main -->
		

	</div><!-- .content-area -->

<?php get_footer(); ?>
