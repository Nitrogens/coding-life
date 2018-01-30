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
				<h3 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('<span class="glyphicon glyphicon-inbox" aria-hidden="true"></span>%s'),
            'search'    =>  _t('<span class="glyphicon glyphicon-search" aria-hidden="true"></span>%s'),
            'tag'       =>  _t('<span class="glyphicon glyphicon-tag" aria-hidden="true"></span>%s'),
            'author'    =>  _t('<span class="glyphicon glyphicon-user" aria-hidden="true"></span>%s')
        ), '', ''); ?></h3>
        		<?php if ($this->have()): ?>
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
        		<?php else: ?>
           			 <article class="post">
              		 	<h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            		 </article>
       			<?php endif; ?>

				<?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
			</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>