 <br>content Thumbnail_PostTitle template part<br>
	<b>Post Thumbnail:</b><?php echo the_post_thumbnail(); ?><br>
	<b>Post Title:</b><?php the_title(sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>'); ?><br>