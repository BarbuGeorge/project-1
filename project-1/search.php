<!DOCTYPE html>
<html lang="en">

<head>
	<?php include('_meta.php'); ?>
</head>

<body>

	<?php get_header(); ?>

	<main>
		<section>
			<ul>
				<?php
				$s = get_search_query();
				$args = array(
					's' => $s
				);
				// The Query
				$the_query = new WP_Query($args);
				if ($the_query->have_posts()) {
					_e("<h2 class=''>Rezultate</h2>");
					while ($the_query->have_posts()) {
						$the_query->the_post();?>

						<li class="mb-2">
							<a class="text-decoration-none" href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</li>

					<?php
					}
				} else {
					?>
					<h3 class="fw-bold text-center">Din pacate nu avem rezultatele dorite</h3>
				<?php } ?>
			</ul>
		</section>
	</main>

	<?php get_footer(); ?>

</body>

</html>