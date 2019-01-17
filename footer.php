	<footer>
		<?php 

			$args = array(
				'theme_location' => 'header-menu',
				'container' => 'nav',
				'after' => '<span class="separator"> | </span>'
			);
			wp_nav_menu($args);

		 ?>
		 <div class="location">
		 	<p>8179 Bay Avenue Mountain View, Ca 948443</p>
      <p>Phone Number: +1-92-456-7890</p>
		 </div>
		 <p class="copy-right">All rights reserved <?php echo date('Y') ?></p>
	</footer>


	<?php wp_footer(); ?>
    </body>
</html>