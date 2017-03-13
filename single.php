<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="entrycontainer">

		<div class="entry">

		<div class="main-title">

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h1><?php the_title(); ?></h1>

				<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			</div>

		</div>

				<div class="content_wrap">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

				<?php the_tags( 'Tags: ', ', ', ''); ?>

			</div>

			<?php edit_post_link('Edit this entry','','.'); ?>

			</div>





	<?php endwhile; endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
