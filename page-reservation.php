<?php

/*
* Template Name: Contact Us
*/

?>
<?php get_header(); ?>	
	
	<?php while(have_posts()) : the_post(); ?>

		<div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
			<div class="hero-content">
				<div class="hero-text">
					<h2><?php the_title(); ?></h2>
				</div>
			</div>
		</div>

		<div class="main-content container reservation">
			<div class="content-text">
				<?php get_template_part('template/reservation', 'from'); ?>
			</div>
		</div>

	<?php endwhile; ?>

<?php get_footer(); ?>
