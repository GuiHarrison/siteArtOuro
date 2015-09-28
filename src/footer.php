			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
				<!-- <p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
					<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
				</p> -->
				<!-- /copyright -->

				<div class="colunaRodape">
					<svg class="compra-segura"><use xlink:href="#logo_footer"></use></svg>
					<ul class="menuRodape">
						<li><a href="#_">Apaixonados por joias</a></li>
						<li><a href="#_">Joalheiro</a></li>
						<li><a href="#_">Investidor</a></li>
					</ul>
				</div>

				<div class="colunaRodape">
					<ul class="menuRodape">
						<li><a href="#_">Nossa Marca</a></li>
						<li><a href="#_">Compra Segura</a></li>
						<li><a href="#_">Joias sob medida</a></li>
						<li><a href="#_">Revendedor</a></li>
						<li><a href="#_">Tradição em Lapidação</a></li>
						<li><a href="#_">Design de joias</a></li>
						<li><a href="#_">Portfolio de gemas</a></li>
					</ul>
				</div>

				<div class="colunaRodape">
					<?php echo do_shortcode('[formidable id=6]'); ?>
					<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
				</div>

				<div class="colunaRodape">
					<h5>Visite Também</h5>
					<a href="#_" class="linkExterno">Loja Virtual</a>
					<a href="#_" class="linkExterno">Blog</a>
				</div>

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
