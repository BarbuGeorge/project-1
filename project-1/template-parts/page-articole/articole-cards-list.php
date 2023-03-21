<section class="articole-cards-list">
	<div class="row">
		<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$wpb_all_query = new WP_Query(array(
			'post_type' => 'post', 'category_name' => 'articole', 'post_status' => 'publish', 'posts_per_page' => 12, 'paged' => $paged,
		)); ?>
		<?php if ($wpb_all_query->have_posts()) : ?>
			<?php while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>
				<!-- Cards Template Here -->
				<div class="icol-3 mb-lg-6 mb-3">
					<a class="text-decoration-none" href="<?php the_permalink() ?>">
					<div class="card card-dark h-100">
							<?php if (has_post_thumbnail()) : ?>
								<div class="card-image-wrapper">
									<div class="card-image" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
								</div>
							<?php endif; ?>
							<div class="card-body">
								<div class="date small-golden-text"><?php echo get_the_date(); ?></div>
									<p class="mb-3"><?php the_title(); ?></p>
								<div class="excerpt"><?php the_excerpt(); ?></div>
							</div>
						</div>
					</a>
				</div>
				<!--  -->
			<?php endwhile; ?>
			<div class="pagination d-flex justify-content-center">
				<?php
				echo paginate_links(array(
					'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
					'total'        => $wpb_all_query->max_num_pages,
					'current'      => max(1, get_query_var('paged')),
					'format'       => '?paged=%#%',
					'show_all'     => false,
					'type'         => 'plain',
					'end_size'     => 2,
					'mid_size'     => 1,
					'prev_next'    => true,
					'prev_text'    => sprintf('<svg class="pagination-arrow-left" xmlns="http://www.w3.org/2000/svg" width="41.414" height="13.414" viewBox="0 0 41.414 13.414">
					<g id="Group_6" data-name="Group 6" transform="translate(-523.762 -683.293)">
					  <g id="Group_7" data-name="Group 7" transform="translate(523.762 684)">
						<path id="Path_19" data-name="Path 19" d="M519.209,687.5h39.543" transform="translate(-519.209 -681.5)" fill="currentColor" stroke="currentColor" stroke-width="2"/>
						<path id="Path_20" data-name="Path 20" d="M568.219,681.658l6,6-6,6" transform="translate(-534.219 -681.658)" fill="currentColor" stroke="currentColor" stroke-width="2"/>
					  </g>
					</g>
				  </svg> %1$s', __('')),
					'next_text'    => sprintf('%1$s <svg class="pagination-arrow-right" xmlns="http://www.w3.org/2000/svg" width="41.414" height="13.414" viewBox="0 0 41.414 13.414">
					<g id="Group_6" data-name="Group 6" transform="translate(-523.762 -683.293)">
					  <g id="Group_7" data-name="Group 7" transform="translate(523.762 684)">
						<path id="Path_19" data-name="Path 19" d="M519.209,687.5h39.543" transform="translate(-519.209 -681.5)" fill="currentColor" stroke="currentColor" stroke-width="2"/>
						<path id="Path_20" data-name="Path 20" d="M568.219,681.658l6,6-6,6" transform="translate(-534.219 -681.658)" fill="currentColor" stroke="currentColor" stroke-width="2"/>
					  </g>
					</g>
				  </svg>
				  ', __('')),
					'add_args'     => false,
					'add_fragment' => '',
				));
				?>
			</div>
			<?php wp_reset_postdata(); ?>
		<?php else : ?>
			<p><?php ('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
		<?
		the_posts_pagination()
		?>
	</div>
</section>