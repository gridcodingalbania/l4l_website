<?php $gallery = get_field('about_gallery'); ?>
<?php if($gallery) : ?>
    <?php foreach($gallery as $src) : ?>
        <img src="<?php echo $src; ?>">
    <?php endforeach; ?>
<?php endif; ?>