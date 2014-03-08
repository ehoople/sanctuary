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
			<?php if( get_field('social_media_icon1') ): ?>
				<img class="social-media" src="<?php the_field('social_media_icon1'); ?>" alt="social media icon" /><?php
			endif; ?>
			<?php if( get_field('social_media_icon2') ): ?>
				<img class="social-media" src="<?php the_field('social_media_icon2'); ?>" alt="social media icon" /><?php
			endif; ?>
			<?php if( get_field('social_media_icon3') ): ?>
				<img class="social-media" src="<?php the_field('social_media_icon3'); ?>" alt="social media icon" /><?php
			endif; ?>
			<?php if( get_field('social_media_icon4') ): ?>
				<img class="social-media" src="<?php the_field('social_media_icon4'); ?>" alt="social media icon" /><?php
			endif; ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>