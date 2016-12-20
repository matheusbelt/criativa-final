<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Criativa Turismo
 * @since 2016
 */

get_header(); ?>

<section class="blog" style="background-color:#f6f6f6">

	<div class="container">
		<div class="title col-md-11 col-sm-10 col-xs-12">
			<center><h1 class="center title-blog">BLOG CRIATIVA TURISMO</h1></center>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="row">
				<div class="col-md-9">
						<div class="pe-container pe-block">
					<div class="post-126 post type-post status-publish format-standard hentry category-demo-articles tag-article tag-demo tag-image-2 post post-single">

		<div class="post-title">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h3 class="tblog"><?php the_title(); ?></h3>
			<hr class="hr-post"> </hr>
			
		</div>

	<div class="post-meta">
			<div class="post-meta-date">
				
					<i class="fa fa-clock-o"><?php the_date(); ?></i>
					
					</div>

				<div class="post-meta-category">
					por &nbsp;
					<a href="<?php the_permalink(); ?>" title="View all posts in Demo Articles" data-rel="category tag"><?php the_author() ?></a>				</div>
		</div>

			<div class="post-media">

							<div class="image-container">

								<a href="<?php the_permalink(); ?>" class="pp" data-target="flare">
									<img class="img-responsive" alt="" width="850" height="478" src="<?php the_post_thumbnail(); ?></a>

							</div>
			</div>

		<div class="post-body pe-wp-default">
			<?php the_content(); ?>
					</div>

			<div class="post-meta-tags">
				<?php the_tags( ' Tags: ','  ' ); ?></a>			</div>

		
	</div>
				<div><a href="criativa-turismo/blog"><<- Voltar</a></div>
		<?php endwhile; endif; ?>
				</div>

		</div>

	</div>
<div class="col-md-3 sidebar">        
	<?php get_sidebar( sidebar_right ); ?>
</div>
</section>

<?php get_footer(); ?>
