<!DOCTYPE html>

	<head>
		<meta charset="utf-8">

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

	<div class="navbar-wrapper">

		<nav class="navbar navbar-inverse navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Project name</a>
				</div>
				<div class="collapse navbar-collapse navbar-responsive-collapse" id="main-navigation">
				<?php
					if ( has_nav_menu( 'primary' ) ) :
						wp_nav_menu( array(
							
							'theme_location'    => 'primary',
							'depth'             => 2,
							'container'         => 'false',
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker()
							)
						);
					endif;
				?>
				</div>
			</div>
		</nav>

	</div>
