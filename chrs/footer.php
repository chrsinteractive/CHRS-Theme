
<footer>
	<div class="container">
		<p class="copy tac">&copy; <?php echo date('Y'); ?> <?php echo bloginfo('name'); ?> | <a href="http://www.chrsinteractive.com/" title="Custom WordPress Development">WordPress Developer</a></p>
	</div>
</footer>

<script>
	var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
		showLeft = document.getElementById( 'showLeft' ),
		body = document.body;

	showLeft.onclick = function() {
		classie.toggle( this, 'active' );
		classie.toggle( menuLeft, 'cbp-spmenu-open' );
		disableOther( 'showLeft' );
	};

	function disableOther( button ) {
		if( button !== 'showLeft' ) {
			classie.toggle( showLeft, 'disabled' );
		}
	}
	
jQuery("#showLeft").toggle(
	function() {
		jQuery(".open-nav").hide();
		jQuery(".close-nav").show();
	}, 
	function() {
		jQuery(".close-nav").hide();
		jQuery(".open-nav").show();
	}
);

</script>

<?php wp_footer();?>

</body>
</html>