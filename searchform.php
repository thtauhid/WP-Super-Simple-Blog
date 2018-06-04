<form class="form-inline my-2 my-lg-0" action="<?php echo home_url('/'); ?>" method="get">
	<input class="form-control mr-sm-2" type="search" placeholder="<?php echo esc_html( __('Search', 'moduler') ); ?>" value="<?php echo get_search_query(); ?>" name="s" >
	<button class="btn btn-secondary my-2 my-sm-0" type="submit"><?php echo esc_html( __('Search', 'moduler') ); ?></button>
</form>