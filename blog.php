<?php
/**
 * Template Name: Blog
 *
 * @package WordPress
 * @subpackage Elabora
 * @since Elabora 2016
 */

get_header(); ?>

<section class="blog" id="our-blog" style="background-color:#f6f6f6">

	<div class="container">
		<div class="title col-md-11 col-sm-10 col-xs-12">
			<center><h1 class="center title-blog">BLOG CRIATIVA TURISMO</h1></center>
		</div>
<div class="row">
                <div class="col-md-9">
				 <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array( 'post_type' => 'post', 'posts_per_page' => 2, 'paged' => $paged );
$wp_query = new WP_Query($args);
while ( have_posts() ) : the_post(); ?>
            			
	<div class="post-126 post type-post status-publish format-standard hentry category-demo-articles tag-article tag-demo tag-image-2 post post-single">
		<div class="post-title">
			<h3 class="tblog"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<hr class="hr-post">
		</div>
			<div class="post-meta">
				<div class="post-meta-date">
					<i class="fa fa-clock-o"></i> <a href="<?php the_permalink(); ?>"><?php the_date(); ?></a>
				</div>
			</div>
				<div class="post-media">
					<div class="image-container">
							<a href="<?php the_permalink(); ?>" class="pp" data-target="flare">
								<img class="img-responsive" alt="" width="850" height="478" src="<?php the_post_thumbnail(); ?> </a>
					</div>
				</div>
					<div class="post-body pe-wp-default">
					<p><?php the_excerpt(); ?> <a class="read-more-link" href="<?php the_permalink(); ?>">LEIA MAIS</a></p>
					</div>
					<div class="post-meta-tags">
					<?php the_tags( ' Tags: ','  ' ); ?></a>
						</div>



	
     <?php endwhile; ?>
<div class="row-fluid post-pagination row">
	<div class="span12">
		<div class="pagination"><?php next_posts_link( '&larr; Mais antigos', $wp_query ->max_num_pages); ?></div> <div class="span12"></div> <div class="pagination"><?php previous_posts_link( 'Mais recentes &rarr;' ); ?></div></div></div>
		
	 </div>
</div>

			
		</div>
<div class="col-md-3 sidebar">        
	<?php get_sidebar( sidebar_right ); ?>
</div>

	</div>


</section>

<?php get_footer(); ?>