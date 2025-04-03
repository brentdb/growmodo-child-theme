<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package growmodotest
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'growmodotest' ); ?></a>

	<section id="globalNotice" class="relative">
		<div class="container text-center mx-auto">		
			<p>✨Discover Your Dream Property with Estatein <a href="#">Learn More</a></p>
			<button class="btn_close_notice absolute"><i class="fa fa-x"></i></button>
		</div>
	</section>

	<header id="masthead" class="site-header">
		<div class="container mx-auto site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			endif;
			
				?>

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'growmodotest' ); ?></button>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
				?>			
			</nav><!-- #site-navigation -->

			<a class="contact-btn" class="<?php echo esc_url( home_url( '/' ) ); ?>/contact-us">Contact Us</a>
		</div><!-- .site-branding -->

		
	</header><!-- #masthead -->
