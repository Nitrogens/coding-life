<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="post-comments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
	<h3 class="comments-title"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('%d 条评论')); ?></h3>
    
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="comment-add">
        <div class="comment-cancel">
        <?php $comments->cancelReply(); ?>
        </div>
    	<h3><?php _e('<span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>添加新评论'); ?></h3>
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
    		<p class="input-group">
                <?php _e('<span class="glyphicon glyphicon-user input-group-addon" aria-hidden="true"></span>'); ?><a href="<?php $this->options->profileUrl(); ?>"><span class="comment-user form-control"><?php $this->user->screenName(); ?></span></a><span class="input-group-btn"><a href="<?php $this->options->logoutUrl(); ?>" title="Logout" class="btn btn-default comment-logout"><?php _e('退出'); ?> &raquo;</a></span>
            </p>
            <?php else: ?>
    		<p class="input-group">
                <label for="author" class="input-group-addon"><?php _e('<span class="glyphicon glyphicon-user" aria-hidden="true"></span>称呼'); ?></label>
    			<input type="text" name="author" id="author" class="form-control" value="<?php $this->remember('author'); ?>" required />
    		</p>
    		<p class="input-group">
                <label for="mail" class="input-group-addon"><?php _e('<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Email'); ?></label>
    			<input type="email" name="mail" id="mail" class="form-control" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
    		</p>
    		<p class="input-group">
                <label for="url" class="input-group-addon"><?php _e('<span class="glyphicon glyphicon-link" aria-hidden="true"></span>网站'); ?></label>
    			<input type="url" name="url" id="url" class="form-control" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
    		</p>
            <?php endif; ?>
    		<p>
                <textarea name="text" id="textarea" class="form-control" required ><?php $this->remember('text'); ?></textarea>
            </p>
    		<p>
                <button type="submit" class="btn btn-default"><?php _e('提交评论'); ?></button>
            </p>
    	</form>
    </div>
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</div>
