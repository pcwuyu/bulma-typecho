<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
    <?php if ($this->have()): ?>
    <?php while($this->next()): ?>
        <article>
            <section class="section">
                <p class="article-title" href="<?php $this->permalink() ?>"><?php $this->title() ?></p>

                <div class="field is-grouped is-grouped-multiline" style="margin: 2em 0;">
                    <div class="control">
                        <p class="tags has-addons">
                            <span class="tag is-info">分类</span>
                            <span class="tag"><?php $this->category('，', true, '无') ?></span>
                        </p>
                    </div>
                    <div class="control">
                        <p class="tags has-addons">
                            <span class="tag is-info">分类</span>
                            <span class="tag"><?php $this->category('，', true, '无') ?></span>
                        </p>
                    </div>
                    <div class="control">
                        <p class="tags has-addons">
                            <span class="tag is-info">作者</span>
                            <a class="tag" href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>
                        </p>
                    </div>
                    <div class="control">
                        <p class="tags has-addons">
                            <span class="tag is-info">时间</span>
                            <span class="tag"><time datetime="<?php $this->date('c'); ?>"><?php $this->date(); ?></time></span>
                        </p>
                    </div>
                </div>
            </section>

            <section class="section content">
                <?php $this->content('阅读剩余部分') ?>
            </section>
        </article>
    <?php endwhile; ?>
    <?php else: ?>
        <div class="notification">
            没有找到内容，请重试
        </div>
    <?php endif; ?>

    <div class="pagination is-centered" style="margin-top: 1em;">
        <?php $this->pageNav('上一页', '下一页', 3, '...', [
            'wrapTag' => 'ul',
            'wrapClass' => 'pagination-list',
            'itemTag'       =>  'li class="pagination-link"',
            'textTag'       =>  'a',
            'currentClass'  =>  'current',
            'prevClass'     =>  'pagination-previous',
            'nextClass'     =>  'pagination-next'
        ]); ?>
    </div>

	<?php $this->need('footer.php'); ?>
