<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link href="https://fonts.googleapis.com/css?family=Exo+2:600|Hammersmith+One|Oswald:200,400,700|Yanone+Kaffeesatz:400,700" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e('Skip to content',
				'understrap'); ?></a>
		<header id="masthead" class="site-header" role="banner">

		<div class="wrapper">
			<div class="accueil" id="content container" tabindex="-1" id>

				<div class="row">
					<div class="col-lg-4">
						<h1><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img
									src="<?php echo get_template_directory_uri(); ?>/img/src/logo.png"></a></h1>
					</div>
					<div class="button_container" id="toggle">
						<span class="top"></span>
						<span class="middle"></span>
						<span class="bottom"></span>
					</div>
					<div class="overlay" id="overlay">

						<nav class="overlay-menu col-lg-8 offset-lg-2">

							<div class="row ">

								<div class="col-lg-6 heures">
									<a href="">

										<h2>on mange</h2>
									</a>

								</div>

								<div class="col-lg-6 heures">
									<a href="">

										<h2>c'est qui</h2>
									</a>

								</div>

								<div class="col-lg-6 heures">
									<a href="">

										<h2>c'est quand</h2>

									</a>

								</div>

								<div class="col-lg-6 heures">
									<a href="">
										<h2>c'est où</h2>

									</a>
								</div>
							</div>

						</nav>
					</div>

				</div>
			</div>
		  </div>
		</header>

	</div><!-- .wrapper-navbar end -->


	<div id="content" class="site-content col-12">
