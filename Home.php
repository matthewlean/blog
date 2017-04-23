<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<div class="primary">
	<div class="content-wrap">
		<div class="content">
			<div class="image">
				<img src="images/p.jpg">
			</div>
			<div class="title">
				<div class="title-alt">
					<h3>Matthew Lean</h3>
					<p>Student</p>
				</div>
			</div>
			<div class="description">
				<p>Final year Digital Media Design student at Bournemouth University. I'm currently working on my graduation project <a href="wecook.io">wecook.io</a> ( a social recipe app) which will go live some time in the summer.</p>
			</div>
			<div class="links">
				<a title="Email" class="btn btn-default" href="mailto:mttlean@gmail.com">
					<i class="fa fa-envelope" aria-hidden="true"></i>
				</a>
				<a title="Lindedin" class="btn btn-default" href="http://www.linkedin.com/in/matthew-lean-0338b382">
					<i class="fa fa-linkedin" aria-hidden="true"></i>
				</a>
				<a title="GitHub" class="btn btn-default" href="https://github.com/matthewlean">
					<i class="fa fa-github" aria-hidden="true"></i>
				</a>
				<a title="Instagram" class="btn btn-default" href="https://www.instagram.com/matthewlean/">
					<i class="fa fa-instagram" aria-hidden="true"></i>
				</a>
				<a title="Twitter" class="btn btn-default" href="https://twitter.com/MattLean-">
					<i class="fa fa-twitter" aria-hidden="true"></i>
				</a>
				<a title="Codepen" class="btn btn-default" href="http://codepen.io/matthewlean/">
					<i class="fa fa-codepen" aria-hidden="true"></i>
				</a>
			</div>
		</div>
	</div>

</div>

<div class="projects">

	<div class="main-title">
		<h3>Recent Projects</h3>
		<h4><a href="#">View All</a></h4>
	</div>

	<div class="content">

		<?php query_posts( "posts_per_page=3")?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<a href="<?php the_permalink(); ?>">
			<div <?php post_class( 'project-list-item ms-item col-lg-6 col-md-6 col-sm-6 col-xs-12') ?>>
				<div class="content">
					<div class="thumb">
						<?php the_post_thumbnail( 'small'); ?>
					</div>
					<div class="content-wrap">
						<div class="title">
							<p>
								<?php the_title(); ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</a>
		<?php endwhile; ?>
	</div>
</div>

<div class="photography">
	<div class="main-title">
		<h3>Photography</h3>
		<!--<h4><a href="#">View All</a></h4>-->
	</div>
	<div class="content">
		<div class="secondary">

			<div class="ms-item col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<a href="https://vsco.co/matthewlean/images/1">
				<img class=".ms-item" src="<?php bloginfo('template_url')?>/images/highgate.jpg" />
				</a>
			</div>
			<div class="ms-item col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<a href="https://vsco.co/matthewlean/images/1">
				<img src="<?php bloginfo('template_url')?>/images/blueberries.jpg" />
				</a>
			</div>
			<div class="ms-item col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<a href="https://vsco.co/matthewlean/images/1">
				<img class=".ms-item" src="<?php bloginfo('template_url')?>/images/harrods.jpg" />
				</a>
			</div>
		</div>
	</div>
</div>


<div class="tertiary">
	<div class="main-title">
		<h3>Graphic Design Work</h3>
		<p>Logo and UI Design</p>
	</div>
	<div class="content-wrap">
		<div class="content">
			<a class="image" href="https://www.instagram.com/p/BM9QVQChRps/">
				<div>
					<div class="helper">
						<img src="images/logos/wecook-logo.png">
					</div>
				</div>
			</a>
			<a class="image" href="http://colourpal.xyz/">
				<div>
					<img src="images/logos/colourpal-logo.png">
				</div>
			</a>
			<a class="image" href="https://www.instagram.com/p/BFWQC2vMfDp/">
				<div>
					<img src="images/logos/colourpal-text.png">
				</div>
			</a>
			<a class="image" href="https://www.instagram.com/p/BFqqGv8sfMi">
				<div>
					<img src="images/logos/konacoffeehouse.png">
				</div>
			</a>
			<a class="image" href="https://www.instagram.com/p/BFqqVDHsfNB">
				<div>
					<img src="images/logos/puredota.png">
				</div>
			</a>
			<a class="image" href="https://www.instagram.com/p/BGmEwDXsfIn">
				<div>
					<img src="images/logos/raptors.png">
				</div>
			</a>
			<a class="image" href="https://www.instagram.com/p/BEqWLwzsfCh">
				<div>
					<img src="images/logos/s.png">
				</div>
			</a>
		</div>
	</div>
</div>

<?php else : ?>

<h2>Not Found</h2>

<?php endif; ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
