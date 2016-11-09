
<?php get_header();?>

	<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
	<div class="post">
		<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<?php the_time('M') ?> <?php the_time('d') ?>, <?php the_time('Y')?>
		<?php
		$categories = get_the_category();
		if ( ! empty( $categories ) ) {
			echo '<span class="post-category">' . esc_html( $categories[0]->name ) . '</span>';
		}
		?>
		<div class="entry">
			<?php the_content(__('Read more'));?>
		</div>
		<a href="<?php the_permalink();?>/#comments"><?php comments_number( '0 comments', '1 comment', '% comments' ); ?></a>
	</div><!--post-->	
	<?php endwhile;?>
	
	<div class="row remove-bottom">
		<div class="pager left"><?php next_posts_link('&larr; Older Posts') ?></div>
		<div class="pager right"><?php previous_posts_link('Newer Posts &rarr;') ?></div>
	</div>
	
	<?php else : ?>	
	<p>Entry Not Found - <a href="<?php echo home_url();?>/">Back Home</a></p>
	<?php endif; ?>
	
	<?php get_sidebar(); ?>
    
<?php get_footer();?>
