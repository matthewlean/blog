<?php

	/*
		Template Name: Blog Homepage
	*/

?>

<div class="photography-page">

<?php get_header(); ?>

		<div class="secondary">
				<div class="ms-item col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<img class=".ms-item" src="<?php bloginfo('template_url')?>/images/tunnel.jpg"/>
				</div>
				<div class="ms-item col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<img class=".ms-item" src="<?php bloginfo('template_url')?>/images/highgate.jpg"/>
				</div>
				<div class="ms-item col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<img src="<?php bloginfo('template_url')?>/images/blueberries.jpg"/>
				</div>
				<div class="ms-item col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<img class=".ms-item" src="<?php bloginfo('template_url')?>/images/harrods.jpg"/>
				</div>
				<div class="ms-item col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<img class=".ms-item" src="<?php bloginfo('template_url')?>/images/pc-sillouhette.jpg"/>
				</div>
		</div>
	</div>

	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
