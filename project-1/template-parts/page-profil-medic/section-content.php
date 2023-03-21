<section class="section-profil-medic-content mb-1">
	<div class="text-center mt-7 mb-4">
		<div class="breadcrumb"><?php the_breadcrumb(); ?></div>
		<h3 class="mb-1 mt-6"><?php the_title(); ?></h3>
		<h6 class="fw-normal small-golden-text mt-3 mb-5"><?php echo get_post_meta($post->ID, 'field1', true) ?></h6>
	</div>


	<?php if (has_post_thumbnail()) : ?>
		<div class="single-post-image" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
		</div>
	<?php endif; ?>

	<div class="content">
		<?php the_content(); ?>
	</div>
</section>