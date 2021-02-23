<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100;400&display=swap" rel="stylesheet">
<script defer src="<?php bloginfo( 'template_url' ); ?>/assets/svg-with-js/js/fontawesome-all.js"></script>


<?php wp_head(); 

	$orderlink = get_field('order_delivery', 'option');
	$rezlink = get_field('reservations', 'option');

?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site cf">
	<a class="skip-link sr" href="#content"><?php esc_html_e( 'Skip to content', 'bellaworks' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="wrapper flex">

			
			<?php if( is_front_page() ) { ?>
	           <h1 class="logo">
		            <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?>Paco's Tacos</a>
	            </h1>
	        <?php } else { ?>
	            <div class="logo">
	            	<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?>Paco's Tacos</a>
	            </div>
	        <?php } ?>



			<?php get_template_part('parts/nav'); ?>


			<!-- <div class="btn-wrap mobile">
				<div class="order-btn">
					<a href="<?php echo $orderLink; ?>">Order and Delivery</a>
				</div>
				<div class="rez-btn">
					<a href="<?php echo $rezLink; ?>">Reservations</a>
				</div>
			</div> -->

			<div class="btn-wrap">
				<div class="order-btn">
					<a class="mobile" href="<?php echo $orderlink; ?>" target="_blank">
						<img src="<?php bloginfo('template_url'); ?>/assets/img/button-order-mobile.png" alt="Order and Delivery">
					</a>
					<a class="desktop" href="<?php echo $orderlink;?>" target="_blank">Order and Delivery</a>
				</div>
				<div class="rez-btn">
					<a class="mobile" href="<?php echo $rezlink; ?>" target="_blank">
						<img src="<?php bloginfo('template_url'); ?>/assets/img/button-reservations-mobile.png" alt="Reservations">
					</a>
					<a class="desktop" href="<?php echo $rezlinkr; ?>" target="_blank">Reservations</a>
				</div>
			</div>


	</div><!-- wrapper -->
	</header><!-- #masthead -->

	<div id="content" class="site-content ">
		<?php get_template_part('parts/banner'); ?>
