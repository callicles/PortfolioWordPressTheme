<?php get_header(); ?>

<!-- Row for main content area -->
</div>	
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>

	<div class="page-title" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>')">
		<div class="row">
		<h1><?php the_title(); ?></h1>
		</div>
	</div>

<div class="row">
	<div class="small-12 large-12 columns" role="main">
				<?php the_content(); ?>
	</div>
	<?php endwhile; // End the loop ?>


		
<?php get_footer(); ?>