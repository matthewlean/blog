<?php

	/*
		Template Name: Blog Homepage
	*/

?>

<div class="blog">

<?php get_header(); ?>

	<div class="secondary">

	<?php query_posts("posts_per_page=25")?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<a href="<?php the_permalink(); ?>">
			<div <?php post_class('project-list-item ms-item col-lg-6 col-md-6 col-sm-6 col-xs-12') ?>">
						<div class="content">
							<div class="thumb">
								<?php the_post_thumbnail('small'); ?>
							</div>
							<div class="content-wrap">
        			<div class="title">
	        					<h3> <?php the_title(); ?></h3>
        			</div>
					    <div class="description">
					         	<?php the_excerpt(); ?>
					    </div>
							</div>
						</div>
					</div>
		</a>

	<?php endwhile; ?>
	</div>

	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
