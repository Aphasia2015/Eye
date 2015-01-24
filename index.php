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
    <header class="wrapper clearfix">
        <h1 id="menu">DN本源计划</h1>
        <ul id="nav">
            <li<?php if($this->is('index')): ?> class="current"<?php endif; ?>><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
            <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
            <?php while ($category->next()): ?>
            <li<?php if ($this->is('post')): ?><?php if($this->category == $category->slug): ?> class="current"<?php endif; ?><?php else: ?><?php if ($this->is('category', $category->slug)): ?> class="current"<?php endif; ?><?php endif; ?>><a href="<?php $category->permalink(); ?>" ><?php $category->name(); ?></a></li>
            <?php endwhile; ?>
            <li class="dnko"><a title="韩服新手教程" href="http://ko.benyuanzu.com" target="_blank">韩服</a></li>
        </ul>
    </header>
    <div class="wrapper clearfix">
        <div id="sidebar"></div>
        <div id="articles">
            <?php while($this->next()): ?>
            <section class="article">
                <div class="art-category"><?php $this->category(','); ?></div>
                <?php Thumbnail_Plugin::show($this); ?>
                <h2 class="art-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
                <div class="art-content" itemprop="articleBody">
                    <?php $this->excerpt(80, '...'); ?>
                </div>
                <time class="art-time" datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time>
            </section>
            <?php endwhile; ?>
            <?php $this->pageNav('&laquo;','&raquo;'); ?>
        </div>
    </div>
<?php $this->need('footer.php'); ?>