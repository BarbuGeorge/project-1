<?php
	if (!isset($args['hide'])) {
		get_template_part('/template-parts/section-consultatii');
	}
?>
<footer>
	<div class="container">
		<div class="mobile-desktop-nav">
			<div class="row w-100 m-0">
				<div class="icol-4 menu-footer a-block order-md-1 order-4 px-lg-4 px-0">
					<?php wp_nav_menu(array(
						'menu'           => 'footer-menu',
						'theme_location' => '__no_such_location',
						'fallback_cb'    => false,
						'class' => 'footer-menu'
					)); ?>
				</div>

				<div class="icol-4 sm a-block order-2 px-lg-4 px-0">
					<?php wp_nav_menu(array(
						'menu'           => 'footer-column-one',
						'theme_location' => '__no_such_location',
						'fallback_cb'    => false,
						'class' => 'footer-column'
					)); ?>
				</div>

				<div class="icol-4 sm a-block order-3 px-lg-4 px-0">
					<?php wp_nav_menu(array(
						'menu'           => 'footer-column-three',
						'theme_location' => '__no_such_location',
						'fallback_cb'    => false,
						'class' => 'footer-column'
					)); ?>
				</div>

				<div class="icol-4 sm a-block order-4 mt-md-0 mt-5 text-md-start text-center px-lg-4 px-0">
					<img class="mb-6" src="<?php echo get_template_directory_uri() . '/images/footer-logo.svg'; ?>" />
					<div class="mb-6">Str. Aron Cotruș, nr. 57, et. 1 (Zona Herastrau Cartierul Francez) Sector 1, Bucuresti</div>
					<div class="mb-6">
						<a href="mailto:office@cosmopolitanclinic.com"><span>office@cosmopolitanclinic.com</span></a><br>
						<a  href="tel:+40 773 391 085"><span class="w-100">+40 773 391 085</span></a><br>
						<span>Luni – Vineri: 08:00 – 19:00</span>
					</div>
					<div class="footer-icons mb-3">
					<i class="fa-brands fa-xl fa-facebook-f me-3"></i>
					<i class="fa-brands fa-xl fa-instagram"></i>
					</div>
					<div class="small text-muted">(c) <?php echo date('Y');?> Cosmopolitan Clinic</div>
				</div>
			</div>
		</div>

		<!--  -->
		<div class="tablet-nav">
			<div class="row m-0">
				<div class="icol-2 menu-footer a-block">
					<?php wp_nav_menu(array(
						'menu'           => 'footer-menu',
						'theme_location' => '__no_such_location',
						'fallback_cb'    => false,
						'class' => 'footer-menu'
					)); ?>
				</div>
				<div class="icol-2 d-flex flex-column">
					<div>
						<?php wp_nav_menu(array(
							'menu'           => 'footer-column-one',
							'theme_location' => '__no_such_location',
							'fallback_cb'    => false,
							'class' => 'footer-column'
						)); ?>
					</div>
					<div>
						<?php wp_nav_menu(array(
							'menu'           => 'footer-column-three',
							'theme_location' => '__no_such_location',
							'fallback_cb'    => false,
							'class' => 'footer-column'
						)); ?>
					</div>
				</div>

				<div class="col-12 mt-md-0 mt-5 text-center px-lg-4 px-0">
					<img class="mb-6" src="<?php echo get_template_directory_uri() . '/images/footer-logo.svg'; ?>" />
					<div class="d-flex flex-md-row flex-column">
						<div class="mb-6">Str. Aron Cotruș, nr. 57, et. 1 (Zona Herastrau Cartierul Francez) Sector 1, Bucuresti</div>
						<div class="mb-6">
						<a href="mailto:office@cosmopolitanclinic.com"><span>office@cosmopolitanclinic.com</span></a>
						<a href="tel:+40 773 391 085"><span class="w-100">+40 773 391 085</span><br></a>
							<span>Luni – Vineri: 08:00 – 19:00</span>
						</div>
					</div>
					<div class="footer-icons mb-3">
					<i class="fa-brands fa-xl fa-facebook-f me-3"></i>
					<i class="fa-brands fa-xl fa-instagram"></i>
					</div>
					<div class="small text-muted">(c) <?php echo date('Y');?> Cosmopolitan Clinic</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<script src="<?php echo get_template_directory_uri() . '/assets/js/carousel.js'; ?>" type="text/javascript"></script>