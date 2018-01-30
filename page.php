<?php
/**
 * @package Codecho
 * @author Nitrogens
 * @version 1.0
 * @link http://nitrogens.xyz/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
?>
		<div class="container">
			<div class="main col-md-8">
				<article>
					<h2 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
					<hr>
					<div class="post-content">
						<?php $this->content('Continue Reading...'); ?>
					</div>
					<div class="clearfix"></div>
				</article>
				<?php $this->need('comments.php'); ?>
			</div>
			
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>