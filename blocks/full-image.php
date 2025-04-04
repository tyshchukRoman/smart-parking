<?php

$image = get_field('full-image__image');

$additional_classes = get_field('full-image__additional-classes');

if(!$image) return;

?>

<div class="relative z1 full-image-block <?php echo $additional_classes ?>">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="small-12 cell text-center">
                <img <?php acf_image_attrs($image) ?>>
            </div>
        </div>
    </div>
</div>
