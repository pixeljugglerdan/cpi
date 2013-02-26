<?php
/**
 * The template for displaying search forms in the CPI INNOVATOR THEME
 */
?>
	
	<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>/" role="search">
	<label class="hide" for="s">Search</label>
		<input type="text" name="s" id="s" value="search site" onblur="if(value=='') value = 'search site'" 
    onfocus="if(value=='search site') value = ''" type='search' value='' />
		<button type="submit" id="search submit"><i class="icon-search"></i></button>
	</form>