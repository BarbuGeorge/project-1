<!DOCTYPE html>
<html lang="en">

<head>
	<?php include('_meta.php'); ?>
</head>

<body>

	<?php get_header(); ?>

	<main class="page-taxonomy-servicii">
		<?php get_template_part('template-parts/page-title-header'); ?>
		<section>
				<div class="row">
					<?php have_posts(); ?>
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							<div class="icol-4 text-center">
								<div class="card serviciu-card">
									<a class="text-decoration-none" href="<?php the_permalink() ?>">
										<?php if (has_post_thumbnail()) : ?>
											<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
											<div class="serviciu-img">
												<img src="<?php echo $url; ?>" />
											</div>
										<?php endif; ?>
										<div class="card-body">
											<h5><?php echo the_title(); ?></h5>
										</div>
									</a>
								</div>
							</div>
			<?php endwhile; ?>
		<?php else : ?>
			<div class="text-center">
				<p><?php _e('Ne pare rau, momentant nu exista servicii pentru aceasta categorie.'); ?></p>
			</div>
		<?php endif; ?>
		</div>
		</section>
	</main>

	<?php get_footer(null ,['hide' => true] ); ?>

</body>

</html>