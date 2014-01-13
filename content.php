<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage Reverie
 * @since Reverie 4.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<div class="row">
			<div class="small-12 large-2 columns">
				<div class="thumb-warper" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>')">
				</div>
			</div>
			<div class="small-12 large-10 columns" style="margin-bottom: 2em;">
				<h2 id="<?php echo 'post-'.get_The_ID(); ?>" ><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php reverie_entry_meta(); ?>
				<?php $tag = get_the_tags(); if (!$tag) { } else { ?><p><?php the_tags('<span class="label">','</span> <span class="label">','</span>'); ?></p><?php } ?>
			</div>
		</div>
	</header>
	<div class="entry-content">
		<?php the_content(__('Continue reading...', 'reverie')); ?>
	</div>
	<hr />
</article>

<?php $count++; ?>