<?php
/**
 This is the page that is displayed for pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CodeCamp
 */

get_header(); ?>

<div id="page">
	<div id="content">
		<div id="other-content">
				<?php
				// checks if there are any posts that match the query
				if (have_posts()) :
	 
	  			// If there are posts matching the query then start the loop
	 			while ( have_posts() ) : the_post();
	 
	    		// the code between the while loop will be repeated for each post
	    		?>
	    			<h1 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
	   				<?php the_content(); ?> 
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
			</div>
	</div><!--content-->
</div><!--page-->

<?php
get_footer(); ?>
