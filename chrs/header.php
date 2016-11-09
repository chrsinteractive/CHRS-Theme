<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

	<?php wp_head(); ?>

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->
	
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-114x114.png">

	<script type="text/javascript">		
		jQuery(window).scroll(function() {
			if (jQuery(this).scrollTop() > 50){  
				jQuery('header').addClass("sticky"), 1500;
			}
			else{
				jQuery('header').removeClass("sticky"), 1500;
			}
		});
	</script>
	
</head>

<body <?php body_class(); ?>>

<header>
	<div class="container">
		<div class="row">

			<?php if ( is_front_page() ) : ?>
				<h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php echo bloginfo('name'); ?>" /></a></h1>
			<?php else : ?>
				<p class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php echo bloginfo('name'); ?>" /></a></p>
			<?php endif; ?>
			
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => '', 'menu_class' => 'mainNav' ) ); ?>

			<button id="showLeft"><i class="fa fa-bars open-nav"></i> <i class="fa fa-times close-nav"></i></button>
			<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left mobile" id="cbp-spmenu-s1">
				<h3>Menu</h3>
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => '', 'menu_class' => 'mobileNav' ) ); ?>
			</nav>
			
		</div>
	</div>
</header>
               
