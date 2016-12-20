<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Elabora
 * @since Elabora 2016
 */


get_header(); ?>

	<div id="primary">
		<main role="main">

		<section class="container-fluid" id="inicial">
			<div class="container">
				<h1>Criativa Turismo</h1>
				<h2><i>Um novo jeito de viajar</i></h2>
				<center><a href="#passeios"><button id="botaoini">Veja os passeios já!</button></a></center>
			</div>
		</section>
		
		<section class="container" id="passeios">
			<h1 class="titulo">Passeios</h1>
			<center><?php echo do_shortcode("[huge_it_portfolio id='1']"); ?></center>
		</section>
		
		<div class="bg container-fluid">
		<section class="container-fluid" id="bgempresa">
			<div class="container">
				<div class="col-xs-12"> 	
					<center><h1 class="titulo">Empresa</h1></center>
					<h2>Quem somos</h2>
				</div>
				<div class="col-md-9 col-md-offset-1 col-xs-12 textao">
				<span>Criativa Turismo</span>
					<p>A empresa de viagens e turismo, com a busca constante por novos roteiros, que os atrativos culturais e naturais assumam um papel onde a experiência e a vivência se envolvam  com as comunidades locais e o aprendizado de atividades tipicas das regiões a serem visitadas.<br><br>
					A nossa <strong> missão</strong> é a de proporcionar produtos diferenciados em turismo com qualidade e profissionalismo, com o objetivo de atender as mais diversas necessidades de clientes e parceiros no mercado. Além de almejarmos nos tornar uma marca de referência no segmento do turismo Paraibano e do Nordeste. Que seja reconhecida no mercado pela sua inovação e experiências únicas, visando a plena satisfação do cliente.<p>			
				</div>	
			</div> <!-- fim do container -->
		</section> <!-- fim do container fluido -->
		</div><!-- fim do bg -->

		<section class="container-fluid" id="depoimentos">
			<div class="container">
				<h1 class="titulo">Depoimentos</h1>
				<h2>O que falam de nós</h2>
				<div class="col-md-6 col-md-offset-3" id="testimonial">
					<?php echo do_shortcode("[testimonial-free color='#52b3d9' nav='true' pagination='true']"); ?>
				</div>
				<div class="col-md-4 col-xs-12">
					<div id="teste1">
					<?php echo do_shortcode("[huge_it_portfolio id='2']"); ?>
					</div>
				</div>
				<div class="col-md-4 col-xs-12">
					<div id="teste2">
						<?php echo do_shortcode("[huge_it_portfolio id='3']"); ?>
					</div>
				</div>
				<div class="col-md-4 col-xs-12">
					<div id="teste3">
						<?php echo do_shortcode("[huge_it_portfolio id='5']"); ?>
					</div>
				</div>
			</div>
		</section>

		<section id="blog">
			<div class="container">
			<h1 class="blog titulo">Blog</h1>
		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		<a href="criativa-turismo/blog"><button class="vertodos">Ver todos</button></a>
		</div><!-- container -->
	</section><!-- blog -->
	
<!-- parceiros -->
	<div class="container-fluid parceiros">
		<section id="parceiros">
			<h1 class="titulo">Parceiros</h1>
			<h2>Conheça nossos apoiadores</h2>
			<div class="col-md-4 col-md-offset-4 col-xs-12">
				<center><?php echo do_shortcode("[huge_it_portfolio id=4]"); ?></center>
			</div>
		</section>
	</div>

<!-- newsletter -->
	<div class="container-fluid" id="newsletter"> 
		<section>
			<h2>Inscreva-se para ganhar ofertas imperdíveis <br> e ganhe ebooks exclusivos!</h2>
			<br> <center> <?php echo do_shortcode("[contact-form-7 id=4 title=Formulário de contato 1]"); ?></center>
		</section>
	</div>


<!-- contato -->
	<section class="container-fluid" id="contato">
	<div class="container">
		<h1 class="titulo">Contato</h1>
		<h2>Fale com a gente!</h2>
		<div class="col-md-3 col-md-offset-2 text-left">
			
			<p><img src="<?php echo bloginfo('template_directory'); ?>/img/mail.png" alt="mail"> criativaturismo@gmail.com <br></p>

			<p><img src="<?php echo bloginfo('template_directory'); ?>/img/tel.png" alt="phone">
			(83)98826-9730 <br></p>

			<p><a href="https://www.facebook.com/CriativaTurismoPB/?fref=ts" target="_blank"><img src="<?php echo bloginfo('template_directory'); ?>/img/face.png" alt="facebook"></a>
			<a href="https://www.instagram.com/criativaturismopb/" target="_blank"><img src="<?php echo bloginfo('template_directory'); ?>/img/insta.png" alt=""></a>
			<a href="https://www.youtube.com/channel/UCgrBHYvarumdunxkpweYX6g" target="_blank"><img src="<?php echo bloginfo('template_directory'); ?>/img/youtube.png" alt=""></a></p>
		</div>
		<div class="col-md-6"><center>
			<span>Envie uma mensagem</span>
			<div><?php echo do_shortcode("[contact-form-7 id=44 title=Contato]"); ?></div>
			<!--<form action="">
				<input type="text" placeholder="nome"><br>
				<input type="text" placeholder="email"><br>
				<input type="text" placeholder="mensagem"><br>
				<button type="submit">Enviar</button>
			</form>-->
		</center></div>
	</div>
	</section>
</main><!-- .site-main -->
<?php get_footer(); ?>


