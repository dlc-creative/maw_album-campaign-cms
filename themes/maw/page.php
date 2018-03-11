<?php get_header(); ?>
<div class="hero-banner">
	<h1><?php echo the_title(); ?></h1>
</div>
<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();

					get_template_part( 'content', get_post_format() );

				endwhile; endif;
			?>

		</div> <!-- /.col -->
	</div> <!-- /.row -->
</div>
<?php get_footer(); ?>
