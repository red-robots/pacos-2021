<section class="menus">
	<img src="<?php bloginfo('template_url'); ?>/assets/img/menu-bg.png">
	<div class="flex">
		<div class="contents">
			<?php if( have_rows( 'menus' ) ) : ?>
				<?php while( have_rows( 'menus' ) ) : the_row(); 
						$t = get_sub_field('title');
						$i = get_sub_field('icon');
						$f = get_sub_field('pdf');
					?>
					<div class="menu-item">
						<a href="<?php echo $pdf; ?>">
							<img src="<?php echo $i['url'] ?>" alt="<?php echo $i['alt'] ?>">
						</a>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>