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
	<!-- Gift Card popup -->
<?php 
$active = get_field('turn_on_popup', 'option');
$offer = get_field('offer', 'option');
$btnText = get_field('button_text', 'option');
$btnLink = get_field('button_link', 'option');
$order_options = get_field('order_delivery_dropdowns','option');
$rez_options = get_field('rez_dropdown','option');
// echo '<pre>';
// print_r($active);
// echo '</pre>';

if( $active[0] == 'turnon' && is_front_page() ) { ?>
	<div style="display: none;">
		<div class='ajax popup' >
			<a href="<?php echo $btnLink; ?>" target="_blank">
				<?php echo $offer; ?>
			</a>
		<br>
			<div class="view-btn">
				<a href="<?php echo $btnLink; ?>" target="_blank"><?php echo $btnText; ?></a>
			</div>
		</div>
	</div>
<?php } ?>
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
					<a class="mobile" href="<?php echo $orderlink; ?>" id="orderup">
						<img src="<?php bloginfo('template_url'); ?>/assets/img/button-order-mobile.png" alt="Order and Delivery">
					</a>
					<a class="desktop"  href="#<?php //echo $orderlink;?>" >Order and Deliveryz</a>
				</div>
				<?php if ($order_options) { ?>
		            <!-- <a href="#" id="orderOption" class="orange">Order</a> -->
		            <div class="order-options">
		              <?php foreach ($order_options as $o) {
		              	// echo '<pre>';
		              	// print_r($o);
		                $o_link = $o['link']['url'];
		                $target = $o['link']['target'];
		                $o_text = $o['link']['title']; ?>
		                <?php if ($o_link ) { ?>
		                  <div class="orderlink">
		                    <a href="<?php echo $o_link ?>" target="<?php echo $target; ?>">
		                      <!-- <img src="<?php echo $o_logo['url'] ?>" alt="<?php echo $o['logo']['title'] ?>"> -->
		                      <?php if ($o_text) { ?>
		                      <span class="text"><?php echo $o_text ?></span>
		                      <?php } ?>
		                    </a>
		                  </div>
		                <?php } ?>
		              <?php } ?>
		              <div id="closeOrder" class="closediv clear"><span id="close-order">Close</span></div>
		            </div>
		        <?php } ?>



				<div class="rez-btn">
					<a class="mobile" href="#" target="_blank" id="rezup">
						<!-- <a class="mobile" href="<?php echo $rezlink; ?>" target="_blank" id="rezup"> -->
						<img src="<?php bloginfo('template_url'); ?>/assets/img/button-reservations-mobile.png" alt="Reservations">
					</a>
					<a class="desktop" href="<?php echo $rezlinkr; ?>" target="_blank">Reservations</a>
				</div>
				<?php if ($rez_options) { ?>
		            <!-- <a href="#" id="orderOption" class="orange">Order</a> -->
		            <div class="rez-options">
		              <?php foreach ($rez_options as $o) {
		              	// echo '<pre>';
		              	// print_r($o);
		                $o_link = $o['link']['url'];
		                $target = $o['link']['target'];
		                $o_text = $o['link']['title']; ?>
		                <?php if ($o_link ) { ?>
		                  <div class="orderlink">
		                    <a href="<?php echo $o_link ?>" target="<?php echo $target; ?>">
		                      <!-- <img src="<?php echo $o_logo['url'] ?>" alt="<?php echo $o['logo']['title'] ?>"> -->
		                      <?php if ($o_text) { ?>
		                      <span class="text"><?php echo $o_text ?></span>
		                      <?php } ?>
		                    </a>
		                  </div>
		                <?php } ?>
		              <?php } ?>
		              <div id="closeRez" class="closediv clear"><span id="close-order">Close</span></div>
		            </div>
		        <?php } ?>
			</div>


	</div><!-- wrapper -->
	</header><!-- #masthead -->

	<div id="content" class="site-content ">
		<?php get_template_part('parts/banner'); ?>
