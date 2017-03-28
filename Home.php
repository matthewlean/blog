<?php

	/*
		Template Name: Home
	*/

?>

<div class="banner">
		<svg xmlns="http://www.w3.org/2000/svg" width="70px" height="auto" viewBox="0 0 476.3 437.8" style="enable-background:new 0 0 476.3 437.8" xml:space="preserve">
				<polyline class="white" points="239.1,290.6 343.1,186.7 346,183.7 346,437.8 476.3,413.1 476.3,24.7 346,0 238.7,107 238.7,107 130.3,0 0,24.7 0,413.1 130.3,437.8 130.3,182.8 130.3,182.8 239.1,290.6 331.3,198.5 346,183.7"></polyline>
		</svg>
</div>

<?php get_header(); ?>
				<div class="home">
	        <div class="primary">
	            <div class="content-wrap">
	                <div class="content">
	                    <div class="title">
	                        <div class="image">
	                            <img src="images/p.jpg">
	                        </div>
	                        <div class="title-alt">
	                            <h3>Matthew Lean</h3>
	                            <p>Student</p>
	                        </div>
	                    </div>
	                    <div class="description">
	                        <p>Reading Digital Media Design at Bournemouth University. I'm currently working on my graduation project <a href="wecook.io">wecook.io</a> ( a social recipe app) which will go live some time in the summer.</p>
	                    </div>
	                    <div class="links">
	                        <a title="Email" class="btn btn-default" href="mailto:mttlean@gmail.com">
	                            <i class="fa fa-envelope" aria-hidden="true"></i>
	                        </a>
	                        <a title="Lindedin" class="btn btn-default" href="http://www.linkedin.com/in/matthew-lean-0338b382">
	                            <i class="fa fa-linkedin" aria-hidden="true"></i>
	                        </a>
	                        <a title="Codepen" class="btn btn-default" href="http://codepen.io/matthewlean/">
	                            <i class="fa fa-codepen" aria-hidden="true"></i>
	                        </a>
	                        <a title="Instagram" class="btn btn-default" href="https://www.instagram.com/matthewlean/">
	                            <i class="fa fa-instagram" aria-hidden="true"></i>
	                        </a>
	                        <a title="Twitter" class="btn btn-default" href="https://twitter.com/MattLean-">
	                            <i class="fa fa-twitter" aria-hidden="true"></i>
	                        </a>
	                        <a title="Spotify" class="btn btn-default" href="http://open.spotify.com/user/matthewlean">
	                            <i class="fa fa-spotify" aria-hidden="true"></i>
	                        </a>
	                    </div>
	                </div>
	            </div>

	    </div>

			<div class="tertiary">

			<div class="main-title">
					<h3>Recent Projects</h3>
			</div>

			<?php query_posts("posts_per_page=3")?>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<a href="<?php the_permalink(); ?>">
				<div <?php post_class('project-list-item ms-item col-lg-6 col-md-6 col-sm-6 col-xs-12') ?>">
							<div class="content">
								<div class="content-wrap">
	        					<div class="title">
		        					<h3> <?php the_title(); ?></h3>
	        					</div>

								</div>
							</div>
						</div>
			</a>
		<?php endwhile; ?>
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
		</div>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
