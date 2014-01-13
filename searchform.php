<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
	<div class="row collapse">
		<div class="small-10 columns">
			<input type="text" value="" name="s" id="s" placeholder="<?php _e('Search', 'reverie'); ?>">
		</div>
		<div class="small-2 columns">
			<button type="submit" id="searchsubmit"  class="postfix button"><i class="fi-magnifying-glass"></i></button>
		</div>
	</div>
</form>