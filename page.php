<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<article class="article">
    <section class="content">
        <?php $this->content() ?>
    </section>
</article>

<?php $this->need('comments.php'); ?>

<?php $this->need('footer.php'); ?>
