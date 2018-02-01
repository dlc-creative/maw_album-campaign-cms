<?php
/**
 * Template Name: Home
 *
 * @package WordPress
 * @subpackage Daring_Report
 * @since Daring Report 1.0
 */

get_header(); ?>


<div class="container">
	<div class="featured-text info-block">
		<?php if (get_field('featured_text')): ?>
			<h4 class="section-title"><?php echo the_field('featured_text'); ?></h4>
		<?php endif; ?>
	</div>
</div>

<div class="touts">
	<?php if (get_field('touts')) { echo the_field('touts'); } ?>
</div>

<?php if (is_page('homepage')) { echo do_shortcode( '[soliloquy slug="homepage"]' ); } ?>

<div class="info-block light-gray-block">
	<div class="container">
	<?php if (get_field('daring_profile')) { echo the_field('daring_profile'); } ?>
	</div>
</div>

<div class="image-block">
	<div class="image-container">
	<?php if (get_field('daring_30-40')) : ?>
		<img src="<?php echo the_field('daring_30-40'); ?>" />
	<?php endif; ?>
	</div>
</div>

<video controls poster="wp-content/themes/daringreport/images/Daring-30-40.jpg">
	<source src="wp-content/themes/daringreport/video/30.mp4" type="video/mp4" />            
</video>

<div class="image-block">
	<div class="image-container">
		<?php if (get_field('daring_in-depth')) : ?>
			<img src="<?php echo the_field('daring_in-depth'); ?>" />
		<?php endif; ?>
	</div>
</div>

<div class="split-block">
	<div class="col-md-8">
		<div class="feature-video">
			<video controls poster="wp-content/themes/daringreport/images/Fiana-Still.jpg">
				<source src="wp-content/themes/daringreport/video/Fiana.mp4" type="video/mp4" />
			</video>
		</div>
	</div>
	<div class="col-md-4">
		<img src="wp-content/themes/daringreport/images/Daring-In-Depth-Fiana-Son3.jpg" />
	</div>
</div>

<div class="image-block">
	<div class="image-container">
		<?php if (get_field('daring_40-55')) : ?>
			<img src="<?php echo the_field('daring_40-55'); ?>" />
		<?php endif; ?>
	</div>
</div>

<video controls poster="wp-content/themes/daringreport/images/Daring-40-55.jpg">
	<source src="wp-content/themes/daringreport/video/40.mp4" type="video/mp4" />            
</video>

<div class="split-block">
	<div class="col-md-4">
		<img src="wp-content/themes/daringreport/images/Daring-In-Depth-Eugene-Portrait.jpg" />
	</div>
	<div class="col-md-8">
		<div class="feature-video">
			<video controls poster="wp-content/themes/daringreport/images/Eugene-Still.jpg">
				<source src="wp-content/themes/daringreport/video/Eugene.mp4" type="video/mp4" />
			</video>
		</div>
	</div>
</div>

<div class="image-block">
	<div class="image-container">
		<?php if (get_field('luxury_trends')) : ?>
			<a href=""><img src="<?php echo the_field('luxury_trends'); ?>" /></a>
		<?php endif; ?>
	</div>
</div>

<div class="featured-trend">
	<?php if (get_field('trend_1')) : ?>
		<a href="/trend-1"><img src="<?php echo the_field('trend_1'); ?>" /></a>
	<?php endif; ?>
</div>

<div class="featured-trend">
	<?php if (get_field('trend_2')) : ?>
		<a href="/trend-2"><img src="<?php echo the_field('trend_2'); ?>" /></a>
	<?php endif; ?>
</div>

<div class="featured-trend">
	<?php if (get_field('trend_3')) : ?>
		<a href="/trend-3"><img src="<?php echo the_field('trend_3'); ?>" /></a>
	<?php endif; ?>
</div>

<div class="featured-trend">
	<?php if (get_field('trend_4')) : ?>
		<a href="/trend-4"><img src="<?php echo the_field('trend_4'); ?>" /></a>
	<?php endif; ?>
</div>

<div class="featured-trend">
	<?php if (get_field('trend_5')) : ?>
		<a href="/trend-5"><img src="<?php echo the_field('trend_5'); ?>" /></a>
	<?php endif; ?>
</div>

<?php
get_footer();
