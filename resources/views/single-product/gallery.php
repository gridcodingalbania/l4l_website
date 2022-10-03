<?php if($gallery) : ?>
    <?php foreach($gallery as $src) : ?>
        <img src="<?php echo $src; ?>">
    <?php endforeach; ?>
<?php endif; ?>