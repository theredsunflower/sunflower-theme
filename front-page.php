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
		<?php

		// checks if there are any posts that match the query
		if (have_posts()) :

		  // If there are posts matching the query then start the loop
		  while ( have_posts() ) : the_post();

		    // the code between the while loop will be repeated for each post
 
			//don't display title on home page
				if(is_home()) {?>
					<h1 class="page-title" id="post-<?php the_ID(); ?>"><?php the_title(); ?></h1>
		    	<?php }
					the_content(); ?>
		    <?php

		    // Stop the loop when all posts are displayed
		 endwhile;

		// If no posts were found
		else :
		?>
		<p>Sorry no posts matched your criteria.</p>
		<?php
		endif;
		?>
	</div><!--content-->
</div><!--page-->

<?php
get_footer(); ?>

