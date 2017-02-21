<div class="footer-info-wrapper">
	<div class="footer-info-main">
		<?php if(!dynamic_sidebar('footer')): ?>
			<div class="footer-info">
				<h3>Виджет</h3>
			</div>
			<div class="footer-info">
				<h3>Виджет</h3>
			</div>
			<div class="footer-info">
				<h3>Виджет</h3>
			</div>
		<?php endif; ?>

	</div>
</div>
<div class="footer-copy">
	<p class="copy">Copyright © 2010 All Rights Reserved</p>
	<p class="by-st">Designed by <a href="#">GraphicsFuel.com</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Powered by <a href="#">Wordpress</a></p>
</div>
<script>
	$(document).ready( function(){
		$('#slideshowHolder').jqFancyTransitions({ navigation: true, width: 594, height: 279 });
	});
</script>
<?php wp_footer(); ?>
</body>
</html>