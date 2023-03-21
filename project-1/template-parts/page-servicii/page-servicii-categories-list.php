<section class="servicii-categories-list">
	<?php
	$post_type = 'serviciu';
	$taxonomy = 'categorii-servicii';
	$terms = get_terms(array(
		'taxonomy' => $taxonomy,
		'hide_empty' => false,
		'parent' => 0,
		'post_type' => $post_type,
	));
	if (!empty($terms)) : ?>
		<?php foreach ($terms as $term) {
			$parent_term_id = $term->term_id;
			$parent_term_slug = $term->slug; ?>
			<!-- Parent Category Title -->
			<h3 class="text-center mb-10"><?php echo $term->name; ?></h3>
			<?php
			$args = array(
				'parent' => $parent_term_id,
				'hide_empty' => false,
				'post_type' => 'serviciu',
				'orderby' => 'date',
				'order'		=> 'ASC'
			);
			$sub_cat_terms = get_terms($taxonomy, $args);
			?>
			<!-- Childrens Category Cols -->
			<div class="row text-center justify-content-center">
				<?php foreach ($sub_cat_terms as $sub_cat_term) {
					$img_link = get_term_meta( $sub_cat_term->term_id, 'showcase-taxonomy-image-id', true );
					$url = wp_get_attachment_url( $img_link);
					$sub_cat_term_link = get_category_link($sub_cat_term);
				?>
					<div class="serviciu">
						<a href="<?php echo $sub_cat_term_link; ?>">
						<div class="serviciu-title">
							<h4><?php echo $sub_cat_term->name; ?></h4>
						</div>
							<div class="serviciu-image">
								<img class="img-fluid" src="<?php echo $url;?>"/>
							</div>
						</a></div>
				<?php } ?>
			</div>
			<hr>
		<?php }; ?>
	<?php endif; ?>
</section>
