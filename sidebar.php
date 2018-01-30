<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
			<div class="sidebar col-md-4">

				<form class="sidebar-search input-group" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                    <input type="text" id="s" name="s" class="form-control" placeholder="<?php _e('输入关键字搜索'); ?>" />
                    <span class="input-group-btn">
                    	<button type="submit" class="btn btn-default"><?php _e('搜索'); ?></button>
                	</span>
                </form>

				<section class="sidebar-widget">
					<h3 class="widget-title"><span class="glyphicon glyphicon-file" aria-hidden="true"></span><?php _e('最新文章'); ?></h3>
					<ul class="widget-list">
						<?php $this->widget('Widget_Contents_Post_Recent')->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
					</ul>
				</section>

			    <section class="sidebar-widget">
					<h3 class="widget-title"><span class="glyphicon glyphicon-inbox" aria-hidden="true"></span><?php _e('分类'); ?></h3>
			        <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=widget-list'); ?>
				</section>

				<section class="sidebar-widget">
					<h3 class="widget-title"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span><?php _e('标签云'); ?></h3>
			        <ul class="widget-tag">
			            <?php $this->widget('Widget_Metas_Tag_Cloud','ignoreZeroCount=1&limit=20')->to($tags);$tags->parse('<li><a href="{permalink}">{name}</a></li>'); ?>
			        </ul>
				</section>

			    <section class="sidebar-widget">
					<h3 class="widget-title"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span><?php _e('归档'); ?></h3>
			        <ul class="widget-list">
			            <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
			            ->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
			        </ul>
				</section>

				<section class="sidebar-widget">
					<h3 class="widget-title"><span class="glyphicon glyphicon-console" aria-hidden="true"></span><?php _e('其它'); ?></h3>
			        <ul class="widget-list">
			            <li><a href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a></li>
			            <li><a href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('评论 RSS'); ?></a></li>
			        </ul>
				</section>

			</div>