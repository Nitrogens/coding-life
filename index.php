<?php
/**
 * 为 Codecho 设计的 Typecho 主题
 * 
 * @package Coding Life
 * @author Nitrogens
 * @version 0.2
 * @link http://nitrogens.xyz/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
?>
		<div class="container">
			<div class="main col-md-8">
				<?php while($this->next()): ?>
				<article>
					<h2 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
					<ul class="post-info">
						<li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span><span class="post-info-detail"><time datetime="<?php $this->date('c'); ?>"><?php $this->date(); ?></time></span></li>
						<li><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="post-info-detail"><?php $this->author(); ?></span></li>
						<li><span class="glyphicon glyphicon-inbox" aria-hidden="true"></span><span class="post-info-detail"><?php $this->category(','); ?></span></li>
					</ul>
					<hr>
					<div class="post-content">
						<?php $this->excerpt(500, '......'); ?>
						<a href="<?php $this->permalink() ?>" class="post-read-all">阅读全文</a>
					</div>
					<hr>
					<div class="post-bottom">
						<span class="post-tag-area">
							<span class="glyphicon glyphicon-tag" aria-hidden="true"></span>
							<?php $this->tags('', true, '无'); ?>
						</span>
					</div>
					<div class="clearfix"></div>
				</article>
				<?php endwhile; ?>

				<?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
			</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>