<?php

$intro = get_field('city-scape__intro');
$button = get_field('city-scape__button');

$systems = get_posts([
  'post_type' => 'system',
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'order_by' => 'date',
  'order' => 'ASC',
  'suppress_filters' => false
])

?>

<div class="city-scape-block pt-100 relative">
    <img class="cloud1" <?php img_src('cloud1.svg'); ?> alt="">
    <img class="cloud2" <?php img_src('cloud1.svg'); ?> alt="">
    <img class="cloud3" <?php img_src('cloud2.svg'); ?> alt="">
    <div class="grid-container relative z2">
        
        <?php if ($intro) : ?>
            <div class="grid-x grid-padding-x pb-60">
                <div class="large-12 cell flex space-between align-top">
                    <h3><?php echo esc_html($intro); ?></h3>

                    <?php if ($button) : ?>
                        <a <?php acf_link_attrs($button); ?> class="button hide-small">
                            <?php echo $button['title'] ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        
        <?php if ($systems) : ?>
            <div class="grid-x slide-mobile-indent">
                <div class="large-12 cell card-mobile-slide">
                    <div class="grid-x grid-padding-x flex justify-center flex-wrap card-block" data-equalizer>
                        <?php foreach ($systems as $system) : ?>
                            <div class="xxlarge-3 large-4 medium-6 cell">

                                <?php get_template_part('template-parts/components/system-card', null, [
                                    'link' => get_permalink($system),
                                    'title' => get_the_title($system),
                                    'image' => get_field('system__image', $system), 
                                    'description' => get_field('system__description', $system),
                                ]) ?>

                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
