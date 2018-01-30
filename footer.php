<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
		</div>
		<footer>
			<p>
				&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>. Theme by <a href="http://nitrogens.xyz" target="_blank">Nitrogens</a>. Powered by <a href="http://typecho.org" target="_blank">Typecho</a>.
			</p>
		</footer>
		<script src="<?php $this->options->themeUrl('assets/js/jquery.min.js'); ?>"></script>
		<script src="<?php $this->options->themeUrl('assets/js/base.js'); ?>"></script>
	</body>
</html>