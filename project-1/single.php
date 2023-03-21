<!DOCTYPE html>
<html lang="en">

<head>
	<?php include('_meta.php'); ?>
</head>

<body>

	<?php get_header(); ?>

	<main class="page">

		<section class="page-single-post mb-lg-7 mb-2">

			<?php
			if ('' !== get_post()->post_content) {

				get_template_part('template-parts/page-single/single-content');
			} else {
				get_template_part('templates/404');
			}

			?>
		</section>

	</main>

	<?php get_footer(null, ['hide' => true]); ?>

</body>

</html>