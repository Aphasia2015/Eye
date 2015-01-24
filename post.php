<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
    <article itemscope itemtype="//schema.org/BlogPosting">
        <h1 itemprop="name headline"><?php $this->title() ?></h1>
        <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y年n月j日'); ?></time>
        <div class="content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
        <div id="comments"></div>
    </article>
    <nav>
        <a href="<?php $this->options->siteUrl(); ?>" title="浏览更多">浏览更多</a>
        <a href="//weibo.com" title="返回微博" target="_blank" class="backweibo">返回微博</a>
    </nav>
<?php $this->need('footer.php'); ?>