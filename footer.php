	</div><!-- #content -->

	<?php  
	// $footlogo = get_field("footlogo","option");
	// $address = get_field("address","option");
	// $phone = get_field("phone","option");
	// $fax = get_field("fax","option");
	// $email = get_field("email","option");
	// $contacts = array($address,$phone,$fax,$email);
	// $other_info = get_field("other_info","option");
	// $social_media = get_field("social_links","option");
	// $social_icons = social_icons();
	// $footer_logos = get_field("footer_logos","option");
	$footer_text = get_field('partners_text','option');
	$partners = get_field('partners_list','option');
	$address = get_field('address','option');
	$facebook = get_field('facebook','option');
	$twitter = get_field('twitter','option');
	$instagram = get_field('instagram','option');
	?>
<div class="row-1">
	<?php if( $facebook || $twiiter || $instagram) : ?>
		<div class="social">
			<?php if( $facebook ) { ?>
				<a href="<?php echo $facebook; ?>">
					<i class="fab fa-facebook"></i>
				</a>
			<?php } ?>
			<?php if( $twitter ) { ?>
				<a href="<?php echo $twitter; ?>">
					<i class="fab fa-twitter"></i>
				</a>
			<?php } ?>
			<?php if( $instagram ) { ?>
				<a href="<?php echo $instagram; ?>">
					<i class="fab fa-instagram"></i>
				</a>
			<?php } ?>
		</div>
	<?php endif; ?>
	<?php if( $address ) : ?>
		<div class="address">
			<?php echo $address; ?>
		</div>
	<?php endif; ?>
</div>
	
	<footer id="colophon" class="site-footer" role="contentinfo">
		<img class="nomobile" src="<?php bloginfo('template_url'); ?>/assets/img/footer.png">
		<div class="footer-content cf">

			
				
				

				<?php if ($footer_text) { ?>
				<div class="footer-text text-center clear"><?php echo $footer_text ?></div>
				<?php } ?>

				<?php if ($partners) { ?>
				<div class="section-partners fullwrap">
					<div class="flexrow">
						<?php foreach ($partners as $p) { 
						$a_id = $p['ID'];
						$attachment_link = get_field("attachment_link",$a_id); 
						?>
						<div class="info">
							<?php if ($attachment_link) { ?>
								<a href="<?php echo $attachment_link ?>" target="_blank"><img src="<?php echo $p['url'] ?>" alt="<?php echo $p['title'] ?>" /></a>
							<?php } else { ?>
								<img src="<?php echo $p['url'] ?>" alt="<?php echo $p['title'] ?>" />
							<?php } ?>
						</div>	
						<?php } ?>
					</div>
				</div>
				<?php } ?>

				

				
			
		</div><!-- wrapper -->
		<div class="bottom"></div>
	</footer><!-- #colophon -->
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
