<?php
/**
 This is the page that is displayed for single posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CodeCamp
 */

get_header(); ?>

<div id="page">
	<div id="content">
		<div id="single-content">
			<?php
			// checks if there are any posts that match the query
			if (have_posts()) :
 
  			// If there are posts matching the query then start the loop
 			while ( have_posts() ) : the_post();
 
    		// the code between the while loop will be repeated for each post
    		?>
    			<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
    			<p class="date-author">Posted: <?php the_date(); ?> by <?php the_author(); ?></p>
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
		<div id="single-recent-posts">
			<h1 class="front-page-title">Blog</h1>
	    		<?php $catquery = new WP_Query( 'cat=1&posts_per_page=3' ); ?>
 
				<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
 				<div class="content-item">
					<a href="<?php the_permalink() ?>" rel="bookmark">
						<h2><?php the_title(); ?></h2>
						<?php the_post_thumbnail(); ?>	
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