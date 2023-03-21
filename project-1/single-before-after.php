<!DOCTYPE html>
<html lang="en">

<head>
	<?php include('_meta.php'); ?>
</head>

<body>

	<?php get_header(); ?>

	<main class="page">

		<section class="page-single-post before-after">
			<?php
				get_template_part('template-parts/page-single/single-content-v2');
			?>
		</section>

	</main>

	<?php get_footer(null, ['hide' => true]); ?>

</body>

</html>