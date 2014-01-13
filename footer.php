	</div><!-- Row End -->
</div><!-- Container End -->

<div id="footer">
	<div class="row paddings">
		<h2 id="social" >Social</h2>
		<ul class="small-block-grid-2 large-block-grid-4">
			<li><a href="https://github.com/callicles" ><i class="fi-social-github"></i></a></li>
		 	<li><a href="https://www.linkedin.com/pub/nicolas-joseph/24/b29/458/" ><i class="fi-social-linkedin"></i></a></li>
		 	<li><a href="https://twitter.com/NicolasJosephIT"><i class="fi-social-twitter"></i></a></li>
		 	<li><a href="https://plus.google.com/112035065082872485534/posts?hl=fr"><i class="fi-social-google-plus"></i></a></li>
		</ul>
	</div>

	<div class="row">
		<div class="small-12 large-5 large-centered columns" style="text-align: center;">
			<?php dynamic_sidebar("Footer"); ?>
		</div>
	</div>

	<footer class="row " role="contentinfo">
		<div class="small-12 large-5 small-centered columns">
			<p><a href="http://foundation.zurb.com/">Foundation</a> - <a href="http://wordpress.org/">Wordpress</a> - <a href="http://www.siteduzero.com/">Site du Zero</a>
				- <a href="http://themefortress.com/reverie/" rel="nofollow" title="Reverie Framework">Reverie</a></p>
			<p>&copy; Nicolas Joseph <?php echo date('Y'); ?>.</p>
		</div>
	</footer>

</div>
<?php wp_footer(); ?>

<script>
	(function($) {
		$(document).foundation();
	})(jQuery);
</script>
	
</body>
</html>