<?php
    /**
     * Template for entry Footer
     *
     * @package wp-starter-theme
     */
    if(is_single() || ! is_home()){
        return;
    }
?>
<div class="card-footer entry-footer">
    <a href="<?php echo get_the_permalink(); ?>" class="readmore btn btn-sm btn-light my-3">
        <?php _e('Read More', 'wp-starter-theme'); ?>
    </a>
</div>