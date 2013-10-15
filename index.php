<?php
/**
 * Index
 *
 * Standard loop for the front-page
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */

get_header(); ?>

    <!-- Main Content -->

    <div class="large-12 columns box-index" role="main">
    	
    	
    	<div class="box-wrap small-6 small-centered columns">
    		<div class="small-6 columns">
				<div class="box box-row fade">
					<img src="<?php echo get_template_directory_uri(); ?>/img/profil.jpg">
					<div class="bg-box left top fade"></div>
					<div class="menu-box left top">
						<div class="wrap">
							<h3>Profil</h3>
							<?php wp_nav_menu( array( 'theme_location' => 'index-menu-1', 'depth' => 1 ) ); ?>
						</div>
					</div>
				</div>

				<div class="box box-row fade">
					<img src="<?php echo get_template_directory_uri(); ?>/img/orgelbygning.jpg">
					<div class="bg-box left bottom fade"></div>
					<div class="menu-box left bottom">
						<div class="wrap">
							<h3>Vores Orgler</h3>
							<?php wp_nav_menu( array( 'theme_location' => 'index-menu-2', 'depth' => 1 ) ); ?>
						</div>
					</div>
				</div>
			</div>

			<div class="small-6 columns">
				<div class="box box-row fade">
					<img src="<?php echo get_template_directory_uri(); ?>/img/voresorgler.jpg">
					<div class="bg-box right top fade"></div>
					<div class="menu-box right top">
						<div class="wrap">
							<h3>Aktuelt</h3>
							<?php wp_nav_menu( array( 'theme_location' => 'index-menu-3', 'depth' => 1 ) ); ?>
						</div>
					</div>
				</div>
				
				<div class="box box-row fade">
					<img src="<?php echo get_template_directory_uri(); ?>/img/aktuelt.jpg">
					<div class="bg-box right bottom fade"></div>
					<div class="menu-box right bottom">
						<div class="wrap">
							<h3>Orgelbygning</h3>
							<?php wp_nav_menu( array( 'theme_location' => 'index-menu-4', 'depth' => 1 ) ); ?>
						</div>
					</div>
				</div><!-- End box -->
			</div>
			

		</div><!-- End Box-wrap -->
		
		
    </div><!-- End Main Content -->

<?php get_footer(); ?>