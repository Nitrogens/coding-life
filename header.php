<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php $this->options->charset(); ?>">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="renderer" content="webkit">
    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    	<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('assets/bootstrap/css/bootstrap.min.css'); ?>">
    	<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('assets/css/base.css'); ?>">

    	<title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

        <?php $this->header(); ?>
	</head>
	<body>
		<header>
			<div class="header">
				<h1><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></h1>
				<p><?php $this->options->description() ?></p>
			</div>
		</header>
		<nav>
            <div class="nav-button">
                <a href="#"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></a>
            </div>
			<div class="nav-list">
                <a<?php if($this->is('index')): ?> class="nav-current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                <?php while($pages->next()): ?>
                <a<?php if($this->is('page', $pages->slug)): ?> class="nav-current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                <?php endwhile; ?>
            </div>
		</nav>