<?php get_header(); ?>	
	
	<?php while(have_posts()) : the_post(); ?>

		<div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
			<div class="hero-content">
				<div class="hero-text">
					<h2><?php the_title(); ?></h2>
				</div>
			</div>
		</div>

		<div class="main-content container">
			<div class="text-center content-text">
				<p class="ingredients">Ingredients</p>
				<?php the_content(); ?>

				<p class="pice">Price <span>$ <?php the_field('price') ?></span></p>
			</div>
		</div>

	<?php endwhile; ?>

<?php get_footer(); ?>