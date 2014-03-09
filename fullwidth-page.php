<?php
/**
 * Template Name: Full Width Page
 *
 * @package sanctuary
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<div id="first" class="full-width-slide" style="background-image: url('<?php the_field('background_slider1'); ?>');"></div>
		<div id="second" class="full-width-slide" style="background-image: url('<?php the_field('background_slider2'); ?>');"></div>
		<div id="third" class="full-width-slide" style="background-image: url('<?php the_field('background_slider3'); ?>');"></div>
		<div id="fourth" class="full-width-slide" style="background-image: url('<?php the_field('background_slider4'); ?>');"></div>
		<div id="fifth" class="full-width-slide" style="background-image: url('<?php the_field('background_slider5'); ?>');"></div>

	</div><!-- #primary -->

<?php get_footer(); ?>


