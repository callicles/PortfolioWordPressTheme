<?php
/*
Template Name: Home
*/
get_header(); ?>
</div>

<div class="home-background" style="background-image: url('<?php echo get_template_directory_uri() . '/img/fond.jpg'; ?>')">
<div class="row collapse">
<!-- Row for main content area -->
	<header class="small-12 large-7 large-centered columns" role="main">
		<div id="home-screen">
			<img id="home-logo" src="<?php echo get_template_directory_uri() . '/img/logo.svg'; ?>" alt="logo">
			<h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
			<h4>Master Engineering Student</h4>
			<button class="button" onclick="scrollToDiv(jQuery('#about'),120);">About Me</button>
		</div>
	</header>
</div>
</div>	
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; // End the loop ?>

<div class="bloc">
<div class="row collapse" style="text-align: center;">
		<h2 id="latest-posts">Latest Posts </h2>
</div>
<div class="posts">
				<?php 		

				$args = array( "showposts" => 3 );                  
			    query_posts($args);			

			    $content = "";			

			    if( have_posts() ) : 			

			        while( have_posts() ) :			

			            the_post();
			            $link = get_permalink();
			            $title = get_the_title();
			            $date = get_the_date();                              			

			            echo '<div class="row post-preview">';
			            echo '<div class="large-2 columns">';
			            echo '<div class="thumb-warper" style="background-image: url(';

			            echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			            echo ')"></div>';
									
			            echo '</div>';
			            echo '<div class="large-10 columns">';
			            echo '<h4><a href="'.$link.'" target="_top">'.esc_attr($title).' </a></h4>';
			            echo '<p class="date"><i class="fi-clock"> </i>  '. date_i18n(get_option('date_format') ,strtotime($date)) .'</p>';
			            echo "<p class='excerpt'>" . get_the_excerpt() . "</p>";
			            echo '</div>';
			            echo "</div>";		

			        endwhile;			

			        wp_reset_query();			

			    endif;			

			?>
		</div>
	</div>
		<div class="row collapse">
<?php get_footer(); ?>