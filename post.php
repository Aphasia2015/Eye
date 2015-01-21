<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
    <article itemscope itemtype="http://schema.org/BlogPosting">
        <h1 itemprop="name headline"><?php $this->title() ?></h1>
        <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y年m月d日'); ?></time>
        <div class="content" itemprop="articleBody">
            <?php $this->content(); ?>
            <p class="vidtip">非常抱歉，您的浏览器可能无法播放此视频。</p>
        </div>
        <div id="comments">
            <script type="text/javascript">
                (function(){
                    var url = "http://widget.weibo.com/distribution/comments.php?width=0&url=auto&color=cccccc,ffffff,555555,00a3cf,cccccc,f0f0f0&colordiy=1&appkey=840464270&iframskin=1&dpc=1";
                    url = url.replace("url=auto", "url=" + encodeURIComponent(document.URL));
                    document.write('<iframe id="WBCommentFrame" src="' + url + '" scrolling="no" frameborder="0" style="width:100%"></iframe>');
                })();
            </script>
            <script src="http://tjs.sjs.sinajs.cn/open/widget/js/widget/comment.js" type="text/javascript" charset="utf-8"></script>
            <script type="text/javascript">
                window.WBComment.init({
                    "id": "WBCommentFrame"
                });
            </script>
        </div>
    </article>
    <nav>
        <a href="<?php $this->options->siteUrl(); ?>" title="浏览更多">浏览更多</a>
        <a href="http://weibo.com" title="返回微博" target="_blank" class="backweibo">返回微博</a>
    </nav>
<?php $this->need('footer.php'); ?>