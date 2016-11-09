<?php
/*
Template Name: Home
*/
?>

<?php get_header();?>

	<style type="text/css">
		.test {height:100px;background:#ccc;margin-bottom:20px;}
	</style>
	<div class="container">
		<div class="row">
			<div class="test one-third column"></div>
			<div class="test one-third column"></div>
			<div class="test one-third column last"></div>
		</div>		

		<div class="row">
			<div class="test one-third column"></div>
			<div class="test two-thirds column last"></div>
		</div>		

		<div class="row">
			<div class="test two-thirds column"></div>
			<div class="test one-third column last"></div>
		</div>		

		<div class="row">
			<div class="test one-half column"></div>
			<div class="test one-half column last"></div>
		</div>		

		<div class="row">
			<div class="test one-fourth column"></div>
			<div class="test one-fourth column"></div>
			<div class="test one-fourth column"></div>
			<div class="test one-fourth column last"></div>
		</div>		

		<div class="row">
			<div class="test one-fourth column"></div>
			<div class="test one-fourth column"></div>
			<div class="test one-half column last"></div>
		</div>		

		<div class="row">
			<div class="test one-half column"></div>
			<div class="test one-fourth column"></div>
			<div class="test one-fourth column last"></div>
		</div>		
	</div>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php // the_content(); ?>
	<?php endwhile; endif; ?>

<?php get_footer();?>
