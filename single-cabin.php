<?php
/**
 * The Template for displaying all cabin posts.
 *
 * @package sanctuary
 */
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main full-background" role="main" style="background-image: url('<?php the_field('cabin_page_background'); ?>');">
		
		<div id="cabin-content">
			<div class="cabin-text">
				<h1 class="cabin-name"><?php the_field('cabin_name'); ?></h1>
				<div class="cabin-description"><?php the_field('cabin_description'); ?></div>
				<div class="art-features">
					<h2>Art Making Features:</h2>
					<?php the_field('art_features'); ?>
				</div>
				<div class="cabin-features">
					<h2>Standard Cabin Features Include:</h2>
						<?php the_field('cabin_features'); ?>
				</div>
				<div class="cost-details">
					<h2><?php the_field('cost_title'); ?></h2>
					<div><?php the_field('cost'); ?></div>
					<a class="button" href="#"><?php the_field('availability_button'); ?></a>
		 		</div>
			</div>

			<div id="cabin-gallery">
				
				<?php
				 
					$images = get_field('cabin_gallery');
					 
					if( $images ): ?>
					    
					    <div id="slider" class="flexslider">
					    	
					    	<ul class="slides">
					   			
					   			<?php foreach( $images as $image ): ?>
		    						
		    						<li data-thumb="<?php echo $image['sizes']['thumbnail']; ?>">
		        						
		        						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
		        						<p><?php echo $image['caption']; ?></p>
		    						
		    						</li>

								<?php endforeach; ?>
							</ul>
						</div>
				
					<?php endif;

				?>

			</div> <!-- #cabin-gallery -->

		</div> <!-- #cabin-content -->

	</main> <!-- #main -->
</div> <!-- #primary -->

<?php get_footer(); ?>



