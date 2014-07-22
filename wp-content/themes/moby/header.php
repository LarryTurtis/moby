<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>


		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<nav role="navigation" class="navigation">
				<ul id="menu-navigation" class="nav top-nav cf">
											<?php
			$args = array( 'posts_per_page' => 10, 'order'=> 'DESC', 'orderby' => 'date' );	
			$postslist = get_posts( $args );
			foreach ( $postslist as $post ) :
  			setup_postdata( $post ); ?> 
			<li id="menu-item-<?php the_id(); ?>" class="menu-item">
				<a class="scroll" href="#post-<?php the_id(); ?>"><?php the_title(); ?></a>
			</li><?php
			endforeach; 
			wp_reset_postdata();
			?>
			</ul>
			</nav>

			<header class="header" role="banner">

				<div id="inner-header" class="wrap cf">
					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					<p id="logo" class="h1"><span class="red"><?php bloginfo('name'); ?></span>
						<br /><span class="blue"><?php bloginfo('description'); ?></span></p>
						<span class="nyc">NYC</span></p>

				</div>
			</header>
