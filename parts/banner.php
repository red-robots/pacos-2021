<?php 
	$src = get_bloginfo('template_url').'/assets/img/';
	if( is_front_page() ) {
		$class = 'homepage';
		$img = $src . 'banner-home.png';
	} elseif( is_page( 'menus' ) ) {
		$class = 'menus';
		$img = $src . 'banner-menus.png';
	}
 ?>
 <section class="banner">
 	<img src="<?php echo $img; ?>">
	<div class="title <?php echo $class; ?>">
		<h1></h1>
	</div>
	<?php if( is_front_page() ) { ?>
		<img class="plate-intro" src="<?php bloginfo('template_url'); ?>/assets/img/plate-intro.png">
	<?php } ?>
</section>