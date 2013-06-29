<?php

	function cmmngt_console_navbar() {

		if ( !is_admin_bar_showing() )
			return;
		?>
		<header class="navbar" role="banner">
			<div class="navbar-inner">
				<div class="<?php echo WRAP_CLASSES; ?>">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="<?php echo home_url(); ?>/">
						<?php bloginfo( 'name' ); ?>
					</a>
					<nav id="nav-main" class="nav-collapse" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'primary_navigation', 'walker' => new Roots_Navbar_Nav_Walker(), 'menu_class' => 'nav' ) ); ?>
					</nav>
				</div>
			</div>
		</header>
		<?php
	}

	add_action( 'admin_footer', 'cmmngt_console_navbar' );
?>