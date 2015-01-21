<?php
/**
 * <a href="http://benyuanzu.com">DN本源计划</a>
 * 
 * @package Eye
 * @author Banri
 * @version 0.0.1
 * @link http://benyuanzu.com
 */

 $this->need('header.php');
 ?>
    <header class="wrapper">
        <ul id="nav" class="clearfix">
            <li<?php if($this->is('index')): ?> class="current"<?php endif; ?>><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
            <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
            <?php while ($category->next()): ?>
            <li<?php if ($this->is('post')): ?><?php if($this->category == $category->slug): ?> class="current"<?php endif; ?><?php else: ?><?php if ($this->is('category', $category->slug)): ?> class="current"<?php endif; ?><?php endif; ?>><a href="<?php $category->permalink(); ?>" ><?php $category->name(); ?></a></li>
            <?php endwhile; ?>
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
            <li<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?>><a href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a></li>
            <?php endwhile; ?>
            <li class="dnko"><a title="韩服新手教程" href="http://ko.benyuanzu.com" target="_blank">韩服</a></li>
        </ul>
    </header>
    <div class="wrapper clearfix">
        <div id="sidebar">
            <iframe width="100%" height="612" class="share_self"  frameborder="0" scrolling="no" src="http://widget.weibo.com/weiboshow/index.php?language=&width=0&height=612&fansRow=1&ptype=1&speed=0&skin=5&isTitle=1&noborder=1&isWeibo=1&isFans=0&uid=3200195931&verifier=108c97b0&colors=eeeeee,ffffff,333333,0082cb,ffffff&dpc=1"></iframe>
        </div>
        <div id="articles">
            <?php while($this->next()): ?>
            <section class="article">
                <div class="art-category"><?php $this->category(','); ?></div>
                <?php Thumbnail_Plugin::show($this); ?>
                <h2 class="art-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
                <div class="art-content" itemprop="articleBody">
                    <?php $this->excerpt(80, '...'); ?>
                </div>
                <time class="art-time" datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('m月d日'); ?></time>
            </section>
            <?php endwhile; ?>
            <?php $this->pageNav('&laquo;','&raquo;'); ?>
        </div>
    </div>
<?php $this->need('footer.php'); ?>