<ul class="post-info-inline">
    <li>
        <span><i class="fa fa-calendar"></i> <time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time></span>
    </li>
    <li>
        <?php

        $category = get_the_category();
        $firstCategory = $category[0]->cat_name;

        ?>
        <span><span class="fa fa-folder-o"></span> <?php echo $firstCategory; ?></span>
    </li>
    <li>
        <p class="byline author vcard"><i class="fa fa-user-circle-o"></i>  <?= __('By', 'sage'); ?> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></p>
    </li>
</ul>