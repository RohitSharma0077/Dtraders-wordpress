

<?php
	/**
	 * The header for our theme.
	 *
	 * This is the template that displays all of the <head> section and everything up until <div id="content">
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	 *
	 * @package Flash
	 */

	?><!DOCTYPE html>
	<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">

		<?php wp_head(); ?>



		<style type="text/css">

			.ml7 {
				position: relative;
				font-weight: 900;
				font-size: 2.7em;
			}
			.ml7 .text-wrapper {
				position: relative;
				display: inline-block;
				padding-top: 0.2em;
				padding-right: 0.05em;
				/*padding-bottom: 0.1em;*/
				overflow: hidden;
			}
			.ml7 .letter {
				transform-origin: 0 100%;
				display: inline-block;
				line-height: .5em;
			}

			.ml1 {
				/*font-weight: 900;*/
				font-size: 1em;
			}

			.ml1 .letter1 {
				display: inline-block;
				line-height: 1em;
			}

			.ml1 .text-wrapper {
				position: relative;
				display: inline-block;
				padding-top: 0.1em;
				padding-right: 0.05em;
				padding-bottom: 0.15em;
			}

			.ml1 .line {
				opacity: 0;
				position: absolute;
				left: 0;
				height: 3px;
				width: 100%;
				background-color: #30afb8;
				transform-origin: 0 0;
			}

			.ml1 .line1 { top: 0; }
			.ml1 .line2 { bottom: 0; }

		</style>

	</head>

	<body <?php body_class(); ?> >

		<div id="page-anim-preloader"></div>

		<?php
	/**
	 * WordPress function to load custom scripts after body.
	 *
	 * Introduced in WordPress 5.2.0
	 *
	 * @since Flash 1.3.0
	 */
	if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open();
	}
	?>

	<?php
	if ( get_theme_mod( 'flash_disable_preloader', '' ) != 1 ) : ?>
		<div id="preloader-background">
			<div id="spinners">
				<div id="preloader">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php
	/**
	 * flash_before hook
	 */
	do_action( 'flash_before' ); ?>

	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'flash' ); ?></a>

		<?php
		/**
		 * flash_before_header hook
		 */
		do_action( 'flash_before_header' ); ?>

		<header id="masthead" class="site-header" role="banner">
			<?php
			if ( get_theme_mod( 'flash_top_header', '1') == '1' ) : ?>
				<div class="header-top">
					<div class="tg-container">
						<div class="tg-column-wrapper clearfix">
							<div class="left-content">
								<?php echo flash_top_header_content( 'flash_top_header_left' ); ?>
							</div>
							<div class="right-content">
								<?php echo flash_top_header_content( 'flash_top_header_right' ); ?>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<div class="header-bottom">
				<div class="tg-container">

					<div class="logo">
						<?php if( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
						<figure class="logo-image">
							<?php flash_the_custom_logo(); ?>
							<?php if( get_theme_mod( 'flash_transparent_logo', '') != '') : ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
									<img class="transparent-logo" src="<?php echo esc_url( get_theme_mod( 'flash_transparent_logo', '' ) ); ?>" />
								</a>
							<?php endif; ?>
						</figure>
					<?php endif; ?>

					<div class="logo-text site-branding">
						<?php
						if ( ( is_front_page() && is_home() ) || ( is_front_page() && !is_home() ) ) : ?>


							<h1 class="ml7">
								<span class="text-wrapper">
									<h1 class="letters site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								</span>
							</h1>
							<!-- <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> -->
							<?php else : ?>
								<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
								<?php
							endif;

							$description = get_bloginfo( 'description', 'display' );
							if ( $description || is_customize_preview() ) : ?>

								<h1 class="ml1">
									<span class="text-wrapper">
										<span class="line line1"></span>
										<span class="site-description letters1"><?php echo $description;?></span>
										<span class="line line2"></span>
									</span>
								</h1>
								<!-- <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p> -->
								<?php
							endif; ?>
						</div>
					</div>
					<div class="site-navigation-wrapper">
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<div class="menu-toggle">
								<i class="fa fa-bars"></i>
							</div>
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						</nav><!-- #site-navigation -->

						<?php $logo_position = get_theme_mod( 'flash_logo_position', 'left-logo-right-menu' ); ?>

						<?php if ( $logo_position == 'center-logo-below-menu' ): ?>
							<div class="header-action-container">

								<?php if( ( get_theme_mod( 'flash_header_cart', '' ) !=  '1' ) && class_exists( 'WooCommerce' ) ) :
								$cart_url = function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : WC()->cart->get_cart_url();
								?>

								<div class="cart-wrap">
									<div class="flash-cart-views">
										<a href="<?php echo esc_url( $cart_url ); ?>" class="wcmenucart-contents">
											<i class="fa fa-opencart"></i>
											<span class="cart-value"><?php echo wp_kses_data ( WC()->cart->get_cart_contents_count() ); ?></span>
										</a>
									</div>
									<?php the_widget( 'WC_Widget_Cart', '' ); ?>
								</div>
							<?php endif; ?>

							<?php if( get_theme_mod( 'flash_header_search', '' ) !=  '1' ) : ?>
								<div class="search-wrap">
									<div class="search-icon">
										<i class="fa fa-search"></i>
									</div>
									<div class="search-box">
										<?php get_search_form(); ?>
									</div>
								</div>
							<?php endif; ?>
						</div>
					<?php endif ?>
				</div>

				<div class="header-action-container">
					<?php if( ( get_theme_mod( 'flash_header_cart', '' ) !=  '1' ) && class_exists( 'WooCommerce' ) ) : ?>
					<div class="cart-wrap">
						<div class="flash-cart-views">

							<?php $cart_url = function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : WC()->cart->get_cart_url(); ?>

							<a href="<?php echo esc_url( $cart_url ); ?>" class="wcmenucart-contents">
								<i class="fa fa-opencart"></i>
								<span class="cart-value"><?php echo wp_kses_data ( WC()->cart->get_cart_contents_count() ); ?></span>
							</a>
						</div>
						<?php the_widget( 'WC_Widget_Cart', '' ); ?>
					</div>
				<?php endif; ?>

				<?php if( get_theme_mod( 'flash_header_search', '' ) !=  '1' ) : ?>
					<div class="search-wrap">
						<div class="search-icon">
							<i class="fa fa-search"></i>
						</div>
						<div class="search-box">
							<?php get_search_form(); ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</header><!-- #masthead -->

<?php
		/**
		 * flash_after_header hook
		 */
		do_action( 'flash_after_header' ); ?>

		<?php get_template_part( 'template-parts/header-media' ); ?>

		<?php if( !is_front_page() ) : ?>
			<nav id="flash-breadcrumbs" class="breadcrumb-trail breadcrumbs">
				<div class="tg-container">
					<?php flash_page_title(); ?>
					<?php flash_breadcrumbs(); ?>
				</div>
			</nav>
		<?php endif; ?>

		<?php
		/**
		 * flash_before_main hook
		 */
		do_action( 'flash_before_main' ); ?>

		<div id="content" class="site-content">
			<div class="tg-container">





				<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

				<script type="text/javascript">

		// Wrap every letter in a span
		var textWrapper = document.querySelector('.ml7 .letters');
		textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

		anime.timeline({loop: 3})
		.add({
			targets: '.ml7 .letter',
			translateY: ["1.1em", 0],
			translateX: ["0.55em", 0],
			translateZ: 0,
			rotateZ: [180, 0],
			duration: 750,
			easing: "easeOutExpo",
			delay: (el, i) => 250 * i
		}).add({
			targets: '.ml7',
			opacity: 0,
			duration: 100000000000,
			easing: "easeOutExpo",
			delay: 1000
		});

// Wrap every letter in a span
var textWrapper = document.querySelector('.ml1 .letters1');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter1'>$&</span>");

anime.timeline({loop: true})
.add({
	targets: '.ml1 .letter1',
	scale: [0.3,1],
	opacity: [0,1],
	translateZ: 0,
	easing: "easeOutExpo",
	duration: 600,
	delay: (el, i) => 70 * (i+1)
}).add({
	targets: '.ml1 .line',
	scaleX: [0,1],
	opacity: [0.5,1],
	easing: "easeOutExpo",
	duration: 700,
	offset: '-=875',
	delay: (el, i, l) => 80 * (l - i)
}).add({
	targets: '.ml1',
	opacity: 0,
	duration: 1000,
	easing: "easeOutExpo",
	delay: 1000
});

</script>