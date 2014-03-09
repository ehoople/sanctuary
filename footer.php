<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sanctuary
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">

			<p> <?php the_field('copyright_text'); ?> </p>

			<?php
 
			// check if the repeater field has rows of data
			if( have_rows('social_media_icons') ):
			 
			 	// loop through the rows of data
			    while ( have_rows('social_media_icons') ) : the_row();
			 ?>
			        <!-- display a sub field value -->
			        <img class="social-media" src="<?php the_sub_field('social_media_icon'); ?>" alt="social media icon" />
			 <?php
			    endwhile;
			 
			else :
			 
			    // no rows found
			 
			endif;
			 
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>