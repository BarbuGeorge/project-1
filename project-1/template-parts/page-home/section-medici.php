<section class="section-medici text-center container-fluid">
	<div class="container">
		<div class="medici-content">
			<h2>Medici</h2>
			<div>Ne place și ne pasa de ceea ce facem și suntem dornici sa contribuim la binele pacientilor. Stim ca fara cunoastere și fara profunzime nu poate exista progres. Avem abilitatea de a ne adapta strategiile, deciziile și actiunile în functie de circumstante.</div>

			<div class="horizontal-divider">
				<hr>
			</div>
			<div class="doctor  mt-lg-0 mt-10">
				<div class="doctor-img">
					<img src="<?php echo get_template_directory_uri() . '/images/page-home/medic_radu_panturu.jpg'; ?>" />
				</div>
				<div class="doctor-description">
					<h4 class="mb-3">Dr.Panturu Radu Andrei</h4>
					<h6 class="doctor-specializari">Medic Specialist Chirurgie plastică Estetică și Microchirurgie Estetică</h6>
					<div>“Atentia, pana la cel mai mic detaliu, face marea diferenta în chirurgia estetica!”</div>
				</div>
			</div>
			<div class="doctor">
				<div class="doctor-img">
					<img src="<?php echo get_template_directory_uri() . '/images/page-home/medic_crenguta_coman.jpg'; ?>" />
				</div>

				<div class="doctor-description">
					<h4 class="mb-3">Dr. Crenguța Coman</h4>
					<h6 class="doctor-specializari">Chirurg plastician</h6>
					<div>“Cu totii dorim sa ne simtim bine in pielea noastra, sa fim atragatori, sexy și sa ne putem exprima liber!”</div>
				</div>
			</div>
			<a href="<?php echo site_url('/medici'); ?>">
				<button class="btn btn-outline-primary">Mai multe detalii</button>
			</a>
		</div>
	</div>
</section>

<div class="carousel-section text-center pt-lg-10 pt-3 pb-lg-10 pb-6">
		<!-- Owl Carousel -->
		<div class="owl-carousel">
		<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$wpb_all_query = new WP_Query(array(
			'post_type' => 'before-after', 'post_status' => 'publish', 'posts_per_page' => 12, 'paged' => $paged,
		)); ?>
		<?php if ($wpb_all_query->have_posts()) : ?>
			<?php while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>
			<a class="text-decoration-none" href="<?php the_permalink() ?>">
				<div class="card card-before-after">
					<?php if (has_post_thumbnail()) : ?>
					<div class="card-image">
						<img src="<?php the_post_thumbnail_url(); ?>" class=""/>
					</div>
					<?php endif;?>
					<div class="card-body px-4 py-4">
						<p class="mb-0"><?php the_title(); ?></p>
					</div>
				</div>
			</a>
			<!--  -->
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
		<?php else : ?>
			<p><?php ('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
		</div>
		<a href="<?php echo site_url('/home/before-after'); ?>">Vezi mai multe studii de caz</a>
</div>
