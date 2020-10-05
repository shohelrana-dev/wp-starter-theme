<?php
/**
 * The page template file
 *
 * @package starter-theme
 */
get_header();
?>

<main id="primary" class="site-main">
    <div class="container">

        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                the_content();
            }
        }
        ?>

    </div>
</main>

<?php
get_footer();