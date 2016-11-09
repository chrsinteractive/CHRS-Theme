<?php
/**
 * The template for displaying search form
 *
 * @package chrs
 */
?>
	<div class="searchform-wrap">
        <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <input type="text" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'chrs' ); ?>" />
            <input type="submit" class="btn-search" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'chrs' ); ?>" />
        </form>
    </div>
