<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rolestack-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name = "format-detection" content = "telephone=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="/wp-content/themes/rolestack-theme/js/hamburger.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<script src="<?php  echo home_url();?>/wp-content/themes/rolestack-theme/jquery.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@200;300;400;500&display=swap" rel="stylesheet">
	<link href="/wp-content/themes/rolestack-theme/js/lity-2.4.1/dist/lity.css" rel="stylesheet">
	<script src="/wp-content/themes/rolestack-theme/js/lity-2.4.1/dist/lity.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-LXHY5FP5LW"></script>
	<script type="text/javascript">
		window.hfAccountId = "99f92c88-bd51-4b53-8204-3077b77d3353";
		window.hfDomain = "https://api.herefish.com";
		(function() {
			var hf = document.createElement('script'); hf.type = 'text/javascript'; hf.async = true;
			hf.src = window.hfDomain + '/scripts/hf.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(hf, s);
		})();
	</script> 
	<script>

	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-LXHY5FP5LW');
	</script>
	<style type="text/css">
		@font-face {
			font-family: 'Raleway';
			src: url('/wp-content/themes/rolestack-theme/fonts/Raleway-Black.woff2') format('woff2'),
			url('/wp-content/themes/rolestack-theme/fonts/Raleway-Black.woff') format('woff');
			font-weight: 900;
			font-style: normal;
			font-display: swap;
		}

		@font-face {
			font-family: 'Raleway';
			src: url('/wp-content/themes/rolestack-theme/fonts/Raleway-BlackItalic.woff2') format('woff2'),
			url('/wp-content/themes/rolestack-theme/fonts/Raleway-BlackItalic.woff') format('woff');
			font-weight: 900;
			font-style: italic;
			font-display: swap;
		}

		@font-face {
			font-family: 'Raleway';
			src: url('/wp-content/themes/rolestack-theme/fonts/Raleway-BoldItalic.woff2') format('woff2'),
			url('/wp-content/themes/rolestack-theme/fonts/Raleway-BoldItalic.woff') format('woff');
			font-weight: bold;
			font-style: italic;
			font-display: swap;
		}

		@font-face {
			font-family: 'Raleway';
			src: url('/wp-content/themes/rolestack-theme/fonts/Raleway-ExtraBold.woff2') format('woff2'),
			url('/wp-content/themes/rolestack-theme/fonts/Raleway-ExtraBold.woff') format('woff');
			font-weight: bold;
			font-style: normal;
			font-display: swap;
		}

		@font-face {
			font-family: 'Raleway';
			src: url('/wp-content/themes/rolestack-theme/fonts/Raleway-ExtraLight.woff2') format('woff2'),
			url('/wp-content/themes/rolestack-theme/fonts/Raleway-ExtraLight.woff') format('woff');
			font-weight: 200;
			font-style: normal;
			font-display: swap;
		}

		@font-face {
			font-family: 'Raleway';
			src: url('/wp-content/themes/rolestack-theme/fonts/Raleway-Bold.woff2') format('woff2'),
			url('/wp-content/themes/rolestack-theme/fonts/Raleway-Bold.woff') format('woff');
			font-weight: bold;
			font-style: normal;
			font-display: swap;
		}

		@font-face {
			font-family: 'Raleway';
			src: url('/wp-content/themes/rolestack-theme/fonts/Raleway-ExtraBoldItalic.woff2') format('woff2'),
			url('/wp-content/themes/rolestack-theme/fonts/Raleway-ExtraBoldItalic.woff') format('woff');
			font-weight: bold;
			font-style: italic;
			font-display: swap;
		}

		@font-face {
			font-family: 'Raleway';
			src: url('/wp-content/themes/rolestack-theme/fonts/Raleway-ExtraLightItalic.woff2') format('woff2'),
			url('/wp-content/themes/rolestack-theme/fonts/Raleway-ExtraLightItalic.woff') format('woff');
			font-weight: 200;
			font-style: italic;
			font-display: swap;
		}

		@font-face {
			font-family: 'Raleway';
			src: url('/wp-content/themes/rolestack-theme/fonts/Raleway-LightItalic.woff2') format('woff2'),
			url('/wp-content/themes/rolestack-theme/fonts/Raleway-LightItalic.woff') format('woff');
			font-weight: 300;
			font-style: italic;
			font-display: swap;
		}

		@font-face {
			font-family: 'Raleway';
			src: url('/wp-content/themes/rolestack-theme/fonts/Raleway-Medium.woff2') format('woff2'),
			url('/wp-content/themes/rolestack-theme/fonts/Raleway-Medium.woff') format('woff');
			font-weight: 500;
			font-style: normal;
			font-display: swap;
		}

		@font-face {
			font-family: 'Raleway';
			src: url('/wp-content/themes/rolestack-theme/fonts/Raleway-Light.woff2') format('woff2'),
			url('/wp-content/themes/rolestack-theme/fonts/Raleway-Light.woff') format('woff');
			font-weight: 300;
			font-style: normal;
			font-display: swap;
		}

		@font-face {
			font-family: 'Raleway';
			src: url('/wp-content/themes/rolestack-theme/fonts/Raleway-Italic.woff2') format('woff2'),
			url('/wp-content/themes/rolestack-theme/fonts/Raleway-Italic.woff') format('woff');
			font-weight: normal;
			font-style: italic;
			font-display: swap;
		}

		@font-face {
			font-family: 'Raleway';
			src: url('/wp-content/themes/rolestack-theme/fonts/Raleway-SemiBoldItalic.woff2') format('woff2'),
			url('/wp-content/themes/rolestack-theme/fonts/Raleway-SemiBoldItalic.woff') format('woff');
			font-weight: 600;
			font-style: italic;
			font-display: swap;
		}

		@font-face {
			font-family: 'Raleway';
			src: url('/wp-content/themes/rolestack-theme/fonts/Raleway-Regular.woff2') format('woff2'),
			url('/wp-content/themes/rolestack-theme/fonts/Raleway-Regular.woff') format('woff');
			font-weight: normal;
			font-style: normal;
			font-display: swap;
		}

		@font-face {
			font-family: 'Raleway';
			src: url('/wp-content/themes/rolestack-theme/fonts/Raleway-MediumItalic.woff2') format('woff2'),
			url('/wp-content/themes/rolestack-theme/fonts/Raleway-MediumItalic.woff') format('woff');
			font-weight: 500;
			font-style: italic;
			font-display: swap;
		}

		@font-face {
			font-family: 'Raleway';
			src: url('/wp-content/themes/rolestack-theme/fonts/Raleway-SemiBold.woff2') format('woff2'),
			url('/wp-content/themes/rolestack-theme/fonts/Raleway-SemiBold.woff') format('woff');
			font-weight: 600;
			font-style: normal;
			font-display: swap;
		}

		@font-face {
			font-family: 'Raleway';
			src: url('/wp-content/themes/rolestack-theme/fonts/Raleway-Thin.woff2') format('woff2'),
			url('/wp-content/themes/rolestack-theme/fonts/Raleway-Thin.woff') format('woff');
			font-weight: 100;
			font-style: normal;
			font-display: swap;
		}

		@font-face {
			font-family: 'Raleway';
			src: url('/wp-content/themes/rolestack-theme/fonts/Raleway-ThinItalic.woff2') format('woff2'),
			url('/wp-content/themes/rolestack-theme/fonts/Raleway-ThinItalic.woff') format('woff');
			font-weight: 100;
			font-style: italic;
			font-display: swap;
		}
	</style>
	
	<link rel="stylesheet" type="text/css" href="/wp-content/themes/rolestack-theme/js/slick-1.8.1/slick/slick.css"/>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<div id="page" class="site">
		<header id="masthead" class="site-header">
			<div class="site-branding col-md-3">
				<?php the_custom_logo(); ?>
			</div><!-- .site-branding -->
			<div class="col-md-9 desktop_navigation">
				<nav id="site-navigation" class="main-navigation">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</nav><!-- #site-navigation -->
			</div>
			<div class="mobile-menu col-md-9" style="display: none;">
				<span>
					<button class="hamburger" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>
			</div>
		</header><!-- #masthead -->

		<div id="myNav" class="overlay">
    		<a href="javascript:void(0)" class="closebtnmenu">&times;</a>
			<div class="menu-logo">
				<?php the_custom_logo(); ?>
			</div>
			<!-- Overlay content -->
			<div class="overlay-content">

				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</div>

		</div>
		<div id="content" class="site-content">
