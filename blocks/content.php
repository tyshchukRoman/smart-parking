<?php

$content = get_field('content__content') ? get_field('content__content') : get_the_content();

?>

<div class="grid-container pt-100 rte-block">
    <div class="grid-x grid-padding-x">
        <div class="large-8 large-offset-2 medium-10 medium-offset-1 cell">
            <?php echo $content ?>
        </div>
    </div>
</div>
