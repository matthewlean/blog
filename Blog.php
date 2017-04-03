<?php

	/*
		Template Name: Blog Homepage
	*/

?>

<div class="blog">

<div class="banner">
		<svg xmlns="http://www.w3.org/2000/svg" width="70px" height="auto" viewBox="0 0 476.3 437.8" style="enable-background:new 0 0 476.3 437.8" xml:space="preserve">
				<polyline class="white" points="239.1,290.6 343.1,186.7 346,183.7 346,437.8 476.3,413.1 476.3,24.7 346,0 238.7,107 238.7,107 130.3,0 0,24.7 0,413.1 130.3,437.8 130.3,182.8 130.3,182.8 239.1,290.6 331.3,198.5 346,183.7"></polyline>
		</svg>
</div>

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
