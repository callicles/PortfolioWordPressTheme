<?php get_header(); ?>

<!-- Row for main content area -->
</div>
	<div class="page-title" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>')">
		<div class="row">
			<div class="small-12 columns">
				<h1> Grey Matter </h1>
			</div>
		</div>
	</div>


<div class="row">
	<div class="small-12 large-12 columns bloc " role="main">

	<?php if ( have_posts() ) : ?>
	
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>
		
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		
	<?php endif; // end have_posts() check ?>
	
	<?php /* Display navigation to next/previous pages when applicable */ ?>
	<?php if ( function_exists('reverie_pagination') ) { reverie_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'reverie' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'reverie' ) ); ?></div>
		</nav>
	<?php } ?>
	</div>

		
<?php get_footer(); ?>