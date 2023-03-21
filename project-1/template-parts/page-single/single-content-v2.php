<div class="text-center mt-7 mb-4">
	<div class="breadcrumb"><?php the_breadcrumb(); ?></div>
	<h3 class="mb-7 mt-6"><?php the_title(); ?></h3>
</div>


<?php if (has_post_thumbnail()) : ?>
	<div class="single-post-image" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
	</div>
<?php endif; ?>

<div class="content">
	<?php the_content(); ?>
</div>

<!-- Next/Prev Posts -->
