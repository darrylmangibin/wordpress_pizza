<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body>

    	<header class="site-header">
    		<div class="container">
	    		<div class="logo">
	    			<a href="<?php echo esc_url(  home_url()); ?>">
	    				<img class="logoimage" src="<?php echo get_template_directory_uri() ?>/img/logo.svg">
	    			</a>
	    		</div> <!-- logo -->
	    		<div class="header-information">
	    			<div class="socials">
	    				<?php 
	    					$args = array(
	    						'theme_location' => 'social-menu',
	    						'container' => 'nav',
	    						'container_class' => 'socials',
	    						'container_id' => 'socials',
	    						'link_before' => '<span class="sr-text"',
	    						'link_after' => '</span>'
	    					);
	    					wp_nav_menu($args);
	    				 ?>
	    			</div><!--socials -->
	    			<div class="addres">
	    				<p>8491 Bay Avenue View, CA 9043</p>
	    				<p>Phome NUmber +6306-4856-933</p>
	    			</div> <!-- header-information -->
	    		</div>
    		</div>
    	</header>

    	<div class="main-menu">
    		<div class="navigation">
    			<!-- add menu to the UI -->
    			<?php 
    				$args = array(
    					'theme_location' => 'header-menu',
    					'container' => 'nav',
    					'container_class' => 'site-nav',
    				);
    				wp_nav_menu($args);
    			 ?>
    		</div>
    	</div>