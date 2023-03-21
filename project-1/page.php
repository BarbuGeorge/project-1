<!DOCTYPE html>
<html lang="en">

<head>
	<?php include('_meta.php'); ?>
</head>

<body>

	<?php get_header();?>

	<main class="page">

		<section class="section-page">
			<?php get_template_part('template-parts/page-title-header');?>
			 <?php
                $content = get_the_content();

                if (trim($content) == "") // Check if the string is empty or only whitespace
                {
                    echo "
                    <div class='d-block text-center my-8'>
                        <h1>Sorry, the page is coming soon</h1>
                     </div>";
                    get_template_part('slug', 'name');
                } else {
                    // Apply filters the same as the_content() does:
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]&gt;', $content);
                    echo $content;
                }
                ?>
		</section>

	</main>

	<?php get_footer();?>

</body>

</html>