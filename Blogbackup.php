<?php 

	/*
		Template Name: Blog Homepage
	*/

?>

<?php get_header(); ?>

	<div class="sitecontainer">

	<?php query_posts("posts_per_page=5")?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<div class="entry">
				<?php the_excerpt(); ?>
			</div>
			<Br><Br>

		</div>

	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>