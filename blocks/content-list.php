<?php

$image_lg = get_field('content-list__image-lg');
$image_sm = get_field('content-list__image-sm');

$title = get_field('content-list__title');
$description = get_field('content-list__description');
$subtitle = get_field('content-list__subtitle');

$list = get_field('content-list__list');

$moretext = get_field('content-list__moretext');

$button_1 = get_field('content-list__button-1');
$button_2 = get_field('content-list__button-2');

?>

<div class="pt-100 pb-100 right-content-block" id="contentanchor">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">

            <div class="large-6 large-offset-0 medium-8 medium-offset-2 cell relative hex-graphics">
                <img class="graphic" <?php img_src('hexagon-hollow.svg') ?>>
                <div class="large-image" style="background-image: url(<?php echo $image_lg ?>);"></div>
                <div class="shadow">
                    <div class="small-image" style="background-image: url(<?php echo $image_sm ?>);"></div>
                </div>
            </div>

            <div class="xxlarge-5 xxlarge-offset-0 xlarge-6 xlarge-offset-0 large-6 large-offset-0 medium-10 medium-offset-1 cell flex align-center space-between">
                <div>
                    <?php if($title): ?>
                        <h2><?php echo $title ?></h2>
                    <?php endif; ?>

                    <?php if($description): ?>
                      <p><?php echo $description ?></p>
                    <?php endif; ?>

                    <?php if($subtitle): ?>
                      <h4><?php echo $subtitle ?></h4>
                    <?php endif; ?>

                    <?php if($list): ?>
                        <ul class="tick-list">
                            <?php foreach ($list as $item): ?>
                                <li><?php echo $item['title'] ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <?php if($moretext): ?>
                        <p class="moretext">
                            <?php echo $moretext ?>
                        </p>
                        <a class="moreless-button">
                            <?php _e('Read more', 'spt') ?>
                        </a>                      
                    <?php endif; ?>

                    <div class="button-group">
                        <?php if($button_1): ?>
                            <a class="button" <?php acf_link_attrs($button_1) ?>>
                                <?php echo $button_1['title'] ?>
                            </a>
                        <?php endif; ?>

                        <?php if($button_2): ?>
                            <a class="button black hollow" <?php acf_link_attrs($button_2) ?>>
                                <?php echo $button_2['title'] ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
