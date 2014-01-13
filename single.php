<?php get_header(); ?>

<!-- Row for main content area -->
</div>
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header class="page-title" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>')">
				<div class="row">
					<div class="small-12">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<br><?php reverie_entry_meta(); ?>
			</div>
		</div>
			</header>
			<div class="entry-content">
				<div class="row">
				<div class="small-12 large-12 columns bloc" role="main">
				<p><?php the_tags('<span class="label">','</span> <span class="label">','</span>'); ?></p>
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
			</footer>
			<?php comments_template(); ?>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
		
<?php get_footer(); ?>