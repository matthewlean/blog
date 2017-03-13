<?php

	/*
		Template Name: Blog Homepage
	*/

?>

<?php get_header(); ?>

	<?php query_posts("posts_per_page=25")?>

		<div class="secondary">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<a href="<?php the_permalink(); ?>">
			<div <?php post_class('project-list-item') ?>">
					<div class="content-wrap">
						<div class="content">
        					<div class="title">
	        					<h3> <?php the_title(); ?></h3>
        					</div>
        					<div class="subtitle"><?php include (TEMPLATEPATH . '/inc/meta.php' ); ?></div>
					         <div class="description">
					         <p><?php the_excerpt(); ?></p>
					         </div>
						</div>
					</div>
			</div>
		</a>


	<?php endwhile; ?>
	</div>

</div>

	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
