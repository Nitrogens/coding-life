<?php
/**
 * @package Coding Life
 * @author Nitrogens
 * @version 0.1
 * @link http://nitrogens.xyz/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
?>
		<div class="container">
			<div class="main col-md-8">
				<article>
					<h2 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
					<ul class="post-info">
						<li><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span><span class="post-info-detail"><time datetime="<?php $this->date('c'); ?>"><?php $this->date(); ?></time></span></li>
						<li><span class="glyphicon glyphicon-user" aria-hidden="true"></span><span class="post-info-detail"><?php $this->author(); ?></span></li>
						<li><span class="glyphicon glyphicon-inbox" aria-hidden="true"></span><span class="post-info-detail"><?php $this->category(','); ?></span></li>
					</ul>
					<hr>
					<div class="post-content">
						<?php $this->content('Continue Reading...'); ?>
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

				<div class="post-nav">
					<?php $this->thePrev('<div class="post-go-up"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span><span class="post-up">%s</span></div>', '<div class="post-go-up"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span><span class="post-up">没有了</span></div>'); ?>
					<?php $this->theNext('<div class="post-go-down"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><span class="post-down">%s</span></div>', '<div class="post-go-down"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><span class="post-down">没有了</span></div>'); ?>
				</div>
				<?php $this->need('comments.php'); ?>
			</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>