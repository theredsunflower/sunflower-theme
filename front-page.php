<?php
/**
 This is the page that is displayed if nothing more specific exists
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CodeCamp
 */

get_header(); ?>

<div class="page">
	<div id="fp-content">
		<div class="fp-single">
	    	<h1 class="front-page-title">About</h1>
	    	<p class="front-page-description">Code Camp by Red Sunflower, Inc. is a 4-day event that inspires people to build a website and learn to code. Red Sunflower, Inc. is a technology consulting firm that specializes in websites and ecommerce.</p>
		</div>
		<div class="fp-double">
	    	<div class="fp-double-a">
	    		<img class="front-page-image" src="https://redsunflowerwebsites.com/wp-content/uploads/2019/12/red-sunflower-inc-logo.png">
	    	</div>
	    	<div class="fp-double-b">
		    	<h1 class="front-page-title">History</h1>
		    	<p class="front-page-description">At Code Camp by Red Sunflower, Inc. participants build a custom WordPress theme using HTML, CSS, and PHP. Red Sunflower, Inc. founder, Jessica Patterson, taught herself to code by building www.theRedSunflower.com. She started Code Camp by Red Sunflower to inspire others to build a website and learn to code.</p>
	    	</div>
		</div>
		<div class="fp-single">
	    	<h1 class="front-page-title">How to Participate</h1>
	    	<p class="front-page-description">Code Camp will be held at Seacoast Church in Charleston, SC at the West Ashley campus. To apply visit www.theRedSunflower.com/code-camp</p>
		</div>
		<div class="fp-blog">
	    	<h1 class="front-page-title">Blog</h1>
	    	<?php $catquery = new WP_Query( 'cat=1&posts_per_page=3' ); ?>
 
				<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
 				<div class="content-item">
					<a href="<?php the_permalink() ?>" rel="bookmark">
						<h2><?php the_title(); ?></h2></a>
						<?php the_post_thumbnail(); ?>
						<?php the_excerpt();?>
					</a>
				</div>

				<?php endwhile;
    				wp_reset_postdata();
				?>
		</div>
	</div><!--content-->
</div><!--page-->

<?php
get_footer(); ?>
