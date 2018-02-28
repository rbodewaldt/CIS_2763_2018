<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 **/
 ?>
 <?php get_header(); ?>
 <div id = "wrapper" class = "clearfix">
	<main>
		<b>The Category Celebrity Famous Animal Template File</b><br>
		<b>Start WordPress Loop</b><br>
		
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/post/content', 'famous-animals' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		
		<b>End WordPress Loop</b>
	</main><!-- main -->
	 <div id = "sidebar">
		<?php  get_sidebar(); ?><br>
	 </div> <!-- sidebar -->
 </div><!-- wrapper -->
<?php get_footer(); ?>
