<!DOCTYPE html>

	<head>
		<meta charset="utf-8">

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

	<div class="navbar-wrapper">

		<nav class="navbar navbar-default navbar-fixed-top">
		
			<?php 
				// Fix menu overlap bug..
				if ( is_admin_bar_showing() ) echo '<div style="min-height: 32px;"></div>'; 
			?>

			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" rel="m_PageScroll2id" href="#start">Hem</a> <?php //TODO: Get first page to link to for smooth scrolling ?>				
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
