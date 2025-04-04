<?php

$title = get_field('centered-hero__title');
$description = get_field('centered-hero__description');

$button_1 = get_field('centered-hero__button-1');
$button_2 = get_field('centered-hero__button-2');

$additional_classes = get_array_value($args, 'additional_classes', get_field('centered-hero__additional-classes'));

?>

<div class="relative z2 <?php echo $additional_classes ?>">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell hero inner-hero pt-80 pb-80 flex align-center justify-center">
                <div class="hero-content text-center flex align-center justify-center direction-column">
                    <?php if($title): ?>
                        <h1 class="dot">
                            <?php echo $title ?>
                        </h1>
                    <?php endif; ?>

                    <?php if($description): ?>
                        <p class="lead">
                            <?php echo $description ?>
                        </p>
                    <?php endif; ?>

                    <div class="button-group">
                        <?php if($button_1): ?>
                            <a class="button" <?php acf_link_attrs($button_1) ?>>
                                <?php echo $button_1['title'] ?>
                            </a>
                        <?php endif; ?>

                        <?php if($button_2): ?>
                            <a class="play-button mt-0 m-auto" <?php acf_link_attrs($button_2) ?>>
                                <span>
                                    <?php echo get_inline_svg('play.svg') ?>
                                </span> 
                                <?php echo $button_2['title'] ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="scroller"><div class="dot-flashing"></div></div>
            </div>
        </div>
    </div>

    <img class="hex1" <?php img_src("hero-hexagons.svg") ?>>
    <img class="hex2" <?php img_src("hero-hexagons2.svg") ?>>
</div>
