<?php

	/*
		Template Name: Home
	*/

?>

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
	            <div class="content-wrap-alt">
	                <div class="content">
	                    <div class="title">
	                        <h3>My Websites</h3>
	                        <p>Websites I've made</p>
	                    </div>
	                    <div class="description" <="">
	                    <div class="wrap">
	                        <a href="http://wecook.io/" id="wecook.io" role="button">
	                            <img src="http://wecook.io/favicons/favicon-32x32.png" alt="" width="20" height="auto">
	                            <div class="link">
	                                <p>wecook.io</p>
	                            </div>
	                        </a>
	                    </div>
	                    <div class="wrap">
	                        <a href="http://colourpal.xyz/" id="colourpal.xyz" role="button">
	                            <img src="http://colourpal.xyz/favicon/favicon-96x96.png" alt="" width="20" height="auto">
	                            <div class="link">
	                                <p>colourpal.xyz</p>
	                            </div>
	                        </a>
	                    </div>
	                    <div class="wrap">
	                        <a href="http://dotadiscord.xyz/" id="dotadiscord.xyz" role="button">
	                            <img src="images/logos/dota-logo.png" alt="" width="20" height="auto">
	                            <div class="link">
	                                <p>dotadiscord.xyz</p>
	                            </div>
	                        </a>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>

			  <div class="secondary">
		        <div class="main-title">
		            <h3>Projects</h3>
		            <p>Recent projects I've worked on</p>
		        </div>

	<?php query_posts("posts_per_page=5")?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


			<div <?php post_class('project-list-item') ?> id="post-<?php the_ID(); ?>">
				<a href="<?php the_permalink(); ?>">
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
				</a>
			</div>

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
