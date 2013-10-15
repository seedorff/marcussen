<?php
/**
 * Sidebar
 *
 * Content for our sidebar, provides prompt for logged in users to create widgets
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */
?>

<!-- Sidebar -->
<div class="large-2 columns">
	<aside class="sidebar">
		<header>
			<h2><?php the_title(); ?></h2>
		</header>


		<?php 
		if (is_page('profil')): 
			wp_nav_menu( array( 'theme_location' => 'index-menu-1' ) );

		elseif (is_page('vores-orgler')): 
			wp_nav_menu( array( 'theme_location' => 'index-menu-2' ) );

		elseif (is_page('marcussen-reuter') || has_term( 'marcussen-reuter', 'orgel-gruppe' )): 
			wp_nav_menu( array( 'theme_location' => 'marcussen-reuter' ) );

		elseif (is_page('orgelbevaegelsen')): 
			wp_nav_menu( array( 'theme_location' => 'orgelbevaegelsen' ) );

		elseif (is_page('orgelbygning')): 
			wp_nav_menu( array( 'theme_location' => 'index-menu-4' ) );

		elseif (is_page('aktuelt')): 
			wp_nav_menu( array( 'theme_location' => 'index-menu-3' ) );


		else :
			wp_nav_menu( array( 'theme_location' => 'index-menu-2' ) );

		endif; ?>
		


	</aside>

</div>
<!-- End Sidebar -->