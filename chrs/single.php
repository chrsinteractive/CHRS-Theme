
<?php get_header();?>

	<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h2><?php the_title(); ?></h2>
		<?php the_time('M') ?> <?php the_time('d') ?>, <?php the_time('Y')?>
		<div class="entry">
			<?php the_content(__('Read more'));?>
		</div>
		<a href="<?php the_permalink();?>/#comments"><?php comments_number( '0 comments', '1 comment', '% comments' ); ?></a>
	</div><!--post-->	
	<?php endwhile;?>
	
	
	<?php else : ?>	
	<p>Entry Not Found - <a href="<?php echo home_url();?>/">Back Home</a></p>
	<?php endif; ?>
	
	
	<?php get_sidebar(); ?>
    

<?php get_footer();?>
