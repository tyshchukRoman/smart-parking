<?php

$link = get_array_value($args, 'link');
$title = get_array_value($args, 'title');
$date = get_array_value($args, 'date');
$image = get_array_value($args, 'image');
$tags = get_array_value($args, 'tags');

?>

<article>
    <a href="<?php echo esc_url($link); ?>">
        <img src="<?php echo $image; ?>" alt="">
        <h4><?php echo esc_html($title); ?></h4>
    </a>
    <div class="article-info">
        <div class="date"><?php echo esc_html(strtoupper($date)); ?></div>
        <div class="tags">
            <?php if ($tags) : ?>
                <?php foreach ($tags as $tag) : ?>
                    <span><?php echo esc_html($tag->name); ?></span>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</article>
