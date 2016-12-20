<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Elabora
 * @since Elabora 2016
 */
?>

	<article class="posts" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_title( sprintf( '<h2 class="title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php the_excerpt(); ?>

		<div class="entry-content">
			<?php

				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				) );
			?>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		</div><!-- .entry-content -->

		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->