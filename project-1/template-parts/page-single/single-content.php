<div class="text-center mt-7 mb-4">
	<div class="breadcrumb"><?php the_breadcrumb(); ?></div>
	<h3 class="mb-1 mt-6"><?php the_title(); ?></h3>
	<div class="small-golden-text mt-3 mb-4"><?php echo get_the_date(); ?></div>
</div>


<?php if (has_post_thumbnail()) : ?>
	<div class="single-post-image" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
	</div>
<?php endif; ?>

<div class="content">
	<?php the_content(); ?>
	<div class="share-post">
		Distrbuie mai departe:
		<a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()) ?>"><i class="fab fa-lg fa-facebook-f mx-3"></i></a>
		<a href="https://twitter.com/share" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>"><i class="fab fa-lg fa-twitter ms-2"></i></a>
	</div>
</div>

<hr>

<!-- Next/Prev Posts -->
<div class="w-100 d-flex justify-content-center mt-lg-0 mt-5 mb-lg-11 mb-9">
	<?php
		$prevPost = get_previous_post();
		if (!empty($prevPost)) : ?>
		<div class="articolul-anterior order-2">
		<?php
			$prevThumbnail = get_the_post_thumbnail_url($prevPost->ID);
			$prev_post = get_previous_post();
			$id = $prev_post->ID;
			$permalink = get_permalink($id);?>
			<a class="text-decoration-none ms-lg-4 ms-3" href="<?php echo $permalink; ?>">
			Articolul urmator<i class="fa-solid fa-chevron-right ms-1"></i>
			</a>
		</div>
		<?php else : ?>
		<!-- Empty space when there is no previous post -->
	<?php endif;?>

	<?php
		$nextPost = get_next_post();
		if (!empty($nextPost)) : ?>
		<div class="articolul-urmator order-1">
		<?php
			$next_post = get_next_post();
			$nid = $next_post->ID;
			$permalink = get_permalink($nid);?>
			<a class="text-decoration-none me-lg-4 me-3" href="<?php echo $permalink; ?>">
				<i class="fa-solid fa-chevron-left me-1"></i>Articolul anterior
			</a>
		</div>
		<?php else : ?>
		<!-- Empty space when there is no previous post -->
	<?php endif;?>
</div>

<!-- More Posts -->
<div class="text-center">
	<h3 class="mb-6">Te-ar mai putea interesa</h3>
	<div class="d-flex flex-wrap">
		<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$wpb_all_query = new WP_Query(array(
			'post_type' => 'post', 'category_name' => 'articole', 'post_status' => 'publish', 'posts_per_page' => 3,
			'orderby'   => array(
				'date' => 'DESC',
				'menu_order' => 'ASC',
			)
		)); ?>
		<?php if ($wpb_all_query->have_posts()) : ?>
			<?php while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>
				<!-- Cards Template Here -->
				<div class="articol-card-wrapper">
					<div class="card">
						<a href="<?php the_permalink() ?>">
							<?php if (has_post_thumbnail()) : ?>
								<div class="card-image-wrapper">
									<div class="card-image " style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
									</div>
								</div>
							<?php endif; ?>
						</a>
						<div class="card-body">
							<div class="date"><?php echo get_the_date(); ?></div>
							<a class="text-light text-decoration-none" href="<?php the_permalink() ?>">
								<p><?php the_title(); ?></p>
							</a>
							<div class="excerpt"><?php the_excerpt(); ?></div>
						</div>
					</div>
				</div>
				<!--  -->
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php else : ?>
			<p><?php ('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
		<?
		the_posts_pagination()
		?>
	</div>
</div>